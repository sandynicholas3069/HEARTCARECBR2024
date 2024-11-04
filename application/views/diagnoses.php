<h2 class="p-2 text-2xl font-bold mb-4">Hasil Diagnosa</h2>
<div class="p-2 overflow-x-auto">
    <table class="min-w-full border-collapse">
        <thead>
            <tr class="bg-red-600 text-white">
                <th class="border border-red-800 p-2">Umur</th>
                <th class="border border-red-800 p-2">Jenis Kelamin</th>
                <th class="border border-red-800 p-2">Jenis Nyeri Dada</th>
                <th class="border border-red-800 p-2">Tekanan Darah</th>
                <th class="border border-red-800 p-2">Kolesterol</th>
                <th class="border border-red-800 p-2">Gula Darah Puasa</th>
                <th class="border border-red-800 p-2">EKG Saat Istirahat</th>
                <th class="border border-red-800 p-2">Detak Jantung</th>
                <th class="border border-red-800 p-2">Angina Induksi Olahraga</th>
                <th class="border border-red-800 p-2">Depresi ST</th>
                <th class="border border-red-800 p-2">Kemiringan ST</th>
                <th class="border border-red-800 p-2">Pembuluh Besar</th>
                <th class="border border-red-800 p-2">Thalassemia</th>
                <th class="border border-red-800 p-2">Hasil</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($diagnoses) && is_array($diagnoses)): ?>
                <?php foreach ($diagnoses as $diagnose): ?>
                    <tr class="bg-white text-red-600">
                        <td class="border border-red-800 p-2"><?= isset($diagnose['age']) ? $diagnose['age'] : 'Data tidak tersedia' ?></td>
                        <td class="border border-red-800 p-2"><?= isset($diagnose['sex']) ? ($diagnose['sex'] == 1 ? 'Laki-laki' : 'Perempuan') : 'Data tidak tersedia' ?></td>
                        <td class="border border-red-800 p-2">
                            <?php
                            $cpTypes = ["Typical Angina", "Atypical Angina", "Non-Anginal Pain", "Asymptomatic"];
                            echo isset($diagnose['cp']) ? $cpTypes[$diagnose['cp']] : 'Data tidak tersedia';
                            ?>
                        </td>
                        <td class="border border-red-800 p-2"><?= isset($diagnose['trestbps']) ? $diagnose['trestbps'] . ' mm Hg' : 'Data tidak tersedia' ?></td>
                        <td class="border border-red-800 p-2"><?= isset($diagnose['chol']) ? $diagnose['chol'] . ' mg/dl' : 'Data tidak tersedia' ?></td>
                        <td class="border border-red-800 p-2"><?= isset($diagnose['fbs']) ? ($diagnose['fbs'] == 1 ? 'Ya' : 'Tidak') : 'Data tidak tersedia' ?></td>
                        <td class="border border-red-800 p-2">
                            <?php
                            $restecgTypes = ["Normal", "Kelainan Gelombang ST-T", "Hipertrofi Ventrikel Kiri"];
                            echo isset($diagnose['restecg']) ? $restecgTypes[$diagnose['restecg']] : 'Data tidak tersedia';
                            ?>
                        </td>
                        <td class="border border-red-800 p-2"><?= isset($diagnose['thalach']) ? $diagnose['thalach'] : 'Data tidak tersedia' ?></td>
                        <td class="border border-red-800 p-2"><?= isset($diagnose['exang']) ? ($diagnose['exang'] == 1 ? 'Ya' : 'Tidak') : 'Data tidak tersedia' ?></td>
                        <td class="border border-red-800 p-2"><?= isset($diagnose['oldpeak']) ? $diagnose['oldpeak'] : 'Data tidak tersedia' ?></td>
                        <td class="border border-red-800 p-2">
                            <?php
                            $slopeTypes = ["Upsloping", "Flat", "Downsloping"];
                            echo isset($diagnose['slope']) ? $slopeTypes[$diagnose['slope']] : 'Data tidak tersedia';
                            ?>
                        </td>
                        <td class="border border-red-800 p-2"><?= isset($diagnose['ca']) ? $diagnose['ca'] : 'Data tidak tersedia' ?></td>
                        <td class="border border-red-800 p-2">
                            <?php
                            $thalTypes = ["Error", "Fixed Defect", "Normal", "Reversible Defect"];
                            echo isset($diagnose['thal']) ? $thalTypes[$diagnose['thal']] : 'Data tidak tersedia';
                            ?>
                        </td>
                        <td class="border border-red-800 p-2"><?= isset($diagnose['result']) ? ($diagnose['result'] == 1 ? 'Disease' : 'No Disease') : 'Data tidak tersedia' ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="14" class="border border-red-800 p-2 text-center">Tidak ada data untuk ditampilkan</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
