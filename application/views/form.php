<div class="p-8 bg-white">
    <h2 class="text-3xl font-bold text-center mb-8">Formulir Diagnosa Penyakit Jantung</h2>
    <form action="<?= base_url('submit_form') ?>" method="post" class="bg-red-600 text-white p-8 rounded-lg space-y-6 max-w-8xl mx-auto">
        <div class="grid grid-cols-1 gap-6">
            <div>
                <label for="age" class="block mb-1 font-semibold">Umur</label>
                <input type="number" id="age" name="age" class="w-full px-4 py-2 rounded text-black" required>
            </div>
            <div>
                <label for="sex" class="block mb-1 font-semibold">Jenis Kelamin</label>
                <select id="sex" name="sex" class="w-full px-4 py-2 rounded text-black" required>
                    <option value="1">Laki-laki</option>
                    <option value="0">Perempuan</option>
                </select>
            </div>
            <div>
                <label for="cp" class="block mb-1 font-semibold">Jenis Nyeri Dada (Chest Pain Type)</label>
                <select id="cp" name="cp" class="w-full px-4 py-2 rounded text-black" required>
                    <option value="0">Typical Angina</option>
                    <option value="1">Atypical Angina</option>
                    <option value="2">Non-Anginal Pain</option>
                    <option value="3">Asymptomatic</option>
                </select>
            </div>
            <div>
                <label for="trestbps" class="block mb-1 font-semibold">Tekanan Darah Istirahat (mm Hg)</label>
                <input type="number" id="trestbps" name="trestbps" class="w-full px-4 py-2 rounded text-black" required>
            </div>
            <div>
                <label for="chol" class="block mb-1 font-semibold">Kolesterol (mg/dl)</label>
                <input type="number" id="chol" name="chol" class="w-full px-4 py-2 rounded text-black" required>
            </div>
            <div>
                <label for="fbs" class="block mb-1 font-semibold">Gula Darah Puasa &gt; 120 mg/dl</label>
                <select id="fbs" name="fbs" class="w-full px-4 py-2 rounded text-black" required>
                    <option value="1">Ya</option>
                    <option value="0">Tidak</option>
                </select>
            </div>
            <div>
                <label for="restecg" class="block mb-1 font-semibold">Hasil Electrocardiographic</label>
                <select id="restecg" name="restecg" class="w-full px-4 py-2 rounded text-black" required>
                    <option value="0">Normal</option>
                    <option value="1">Kelainan Gelombang ST-T</option>
                    <option value="2">Hipertrofi Ventrikel Kiri</option>
                </select>
            </div>
            <div>
                <label for="thalach" class="block mb-1 font-semibold">Detak Jantung Maksimal</label>
                <input type="number" id="thalach" name="thalach" class="w-full px-4 py-2 rounded text-black" required>
            </div>
            <div>
                <label for="exang" class="block mb-1 font-semibold">Angina Induksi Olahraga</label>
                <select id="exang" name="exang" class="w-full px-4 py-2 rounded text-black" required>
                    <option value="1">Ya</option>
                    <option value="0">Tidak</option>
                </select>
            </div>
            <div>
                <label for="oldpeak" class="block mb-1 font-semibold">Depresi ST yang Diinduksi Olahraga</label>
                <input type="number" step="0.1" id="oldpeak" name="oldpeak" class="w-full px-4 py-2 rounded text-black" required>
            </div>
            <div>
                <label for="slope" class="block mb-1 font-semibold">Kemiringan Puncak Segment ST</label>
                <select id="slope" name="slope" class="w-full px-4 py-2 rounded text-black" required>
                    <option value="0">Upsloping</option>
                    <option value="1">Flat</option>
                    <option value="2">Downsloping</option>
                </select>
            </div>
            <div>
                <label for="ca" class="block mb-1 font-semibold">Jumlah Pembuluh Besar Berwarna (0-3)</label>
                <input type="number" id="ca" name="ca" class="w-full px-4 py-2 rounded text-black" required>
            </div>
            <div>
                <label for="thal" class="block mb-1 font-semibold">Thalassemia</label>
                <select id="thal" name="thal" class="w-full px-4 py-2 rounded text-black" required>
                    <option value="0">Error</option>
                    <option value="1">Fixed Defect</option>
                    <option value="2">Normal</option>
                    <option value="3">Reversible Defect</option>
                </select>
            </div>
        </div>
        <button type="submit" class="w-full bg-white text-red-600 px-6 py-3 rounded font-semibold mt-6">Submit</button>
    </form>
</div>
