<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Diagnose_model extends CI_Model {
    public function insert_diagnose($data) {
        $this->db->insert('diagnoses', $data);
    }

    public function get_all() {
        return $this->db->get('diagnoses')->result_array();
    }

    public function get_by_id($id) {
        return $this->db->get_where('diagnoses', array('id' => $id))->row_array();
    }

    public function calculate_result_knn($data) {
        // Load the dataset
        $csvFile = fopen("dataset/heart.csv", "r");
        $dataset = [];

        // Skip the header row
        fgetcsv($csvFile);

        // Read dataset into an array
        while (($row = fgetcsv($csvFile)) !== FALSE) {
            $dataset[] = [
                'age' => (int)$row[0],
                'sex' => (int)$row[1],
                'cp' => (int)$row[2],
                'trestbps' => (int)$row[3],
                'chol' => (int)$row[4],
                'fbs' => (int)$row[5],
                'restecg' => (int)$row[6],
                'thalach' => (int)$row[7],
                'exang' => (int)$row[8],
                'oldpeak' => (float)$row[9],
                'slope' => (int)$row[10],
                'ca' => (int)$row[11],
                'thal' => (int)$row[12],
                'target' => (int)$row[13]
            ];
        }
        fclose($csvFile);

        // Prepare data for normalization
        $feature_columns = ['age', 'sex', 'cp', 'trestbps', 'chol', 'fbs', 'restecg', 'thalach', 'exang', 'oldpeak', 'slope', 'ca', 'thal'];
        $features = array_map(function($item) use ($feature_columns) {
            return array_intersect_key($item, array_flip($feature_columns));
        }, $dataset);

        // Normalize features using z-score normalization
        $means = [];
        $stds = [];
        foreach ($feature_columns as $feature) {
            $mean = array_sum(array_column($features, $feature)) / count($features);
            $means[$feature] = $mean;
            $stds[$feature] = sqrt(array_sum(array_map(function($val) use ($mean) {
                return pow($val - $mean, 2);
            }, array_column($features, $feature))) / count($features));

            // Prevent division by zero
            if ($stds[$feature] == 0) $stds[$feature] = 1;
        }

        // Normalize dataset
        $normalized_dataset = array_map(function($row) use ($feature_columns, $means, $stds) {
            $normalized_row = [];
            foreach ($feature_columns as $feature) {
                $normalized_row[$feature] = ($row[$feature] - $means[$feature]) / $stds[$feature];
            }
            $normalized_row['target'] = $row['target'];
            return $normalized_row;
        }, $dataset);

        // Normalize input data
        $normalized_input = [];
        foreach ($data as $key => $value) {
            if (in_array($key, $feature_columns)) {
                $normalized_input[$key] = ($value - $means[$key]) / $stds[$key];
            }
        }

        // Set k to an odd number close to the square root of the dataset size
        $k = max(1, round(sqrt(count($normalized_dataset))));
        if ($k % 2 == 0) $k++; // Ensure k is odd

        // Calculate Euclidean distance
        $distances = [];
        foreach ($normalized_dataset as $index => $row) {
            $distance = sqrt(
                array_sum(array_map(function($feature) use ($normalized_input, $row) {
                    return pow($normalized_input[$feature] - $row[$feature], 2);
                }, $feature_columns))
            );
            $distances[] = ['distance' => $distance, 'target' => $row['target']];
        }

        // Sort distances by closest neighbors
        usort($distances, function($a, $b) {
            if ($a['distance'] == $b['distance']) {
                return 0;
            }
            return ($a['distance'] < $b['distance']) ? -1 : 1;
        });

        // Select the top k neighbors
        $neighbors = array_slice($distances, 0, $k);

        // Determine the majority class among the k neighbors
        $output_count = array_sum(array_column($neighbors, 'target'));

        // Returning The Output Count
        return $output_count > $k / 2 ? 0 : 1;
    }
}