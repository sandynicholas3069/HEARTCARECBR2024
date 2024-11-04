<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Diagnose_model');
    }

    public function index() {
        $this->load->view('layout/header');
        $this->load->view('form');
        $this->load->view('layout/footer');
    }

    public function submit() {
        $data = array(
            'age' => $this->input->post('age'),
            'sex' => $this->input->post('sex'),
            'cp' => $this->input->post('cp'),
            'trestbps' => $this->input->post('trestbps'),
            'chol' => $this->input->post('chol'),
            'fbs' => $this->input->post('fbs'),
            'restecg' => $this->input->post('restecg'),
            'thalach' => $this->input->post('thalach'),
            'exang' => $this->input->post('exang'),
            'oldpeak' => $this->input->post('oldpeak'),
            'slope' => $this->input->post('slope'),
            'ca' => $this->input->post('ca'),
            'thal' => $this->input->post('thal')
        );
        
        // Calculate the result using KNN
        $data['result'] = $this->Diagnose_model->calculate_result_knn($data);

        // Save result in the database
        $this->Diagnose_model->insert_diagnose($data);

        // Ambil ID dari catatan yang baru dimasukkan
        $data['id'] = $this->db->insert_id();

        // Redirect to the result page
        redirect('diagnoses');
    }
}
