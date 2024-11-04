<div class="text-center bg-red-600 text-white p-12">
    <h2 class="text-2xl font-semibold mb-4">Gejala Penyakit Jantung</h2>

    <p class="text-justify mb-8">
        Deteksi dini penyakit jantung dapat dilakukan dengan memeriksa beberapa indikasi atau gejala yang signifikan dialami oleh penderita penyakit jantung.
        Nantinya kolom pertanyaan pada formulir akan menanyakan hal yang kurang lebih sama dengan apa yang Anda baca pada halaman Symptoms ini. Halaman ini
        hanyalah menjadi halaman acuan untuk basis informasi dan ilmu pengetahuan terkait dengan gejala yang dapat diperiksa sebagai indikator berpotensi
        terkena penyakit jantung atau tidak. Setelah Anda selesai mensubmit atau mengumpulkan formulir, maka data gejala yang anda inputkan akan dimasukkan
        ke dalam database website Heart Care, dan Anda sekalian dapat langsung mengetahui diagnosis kondisi jantung Anda berdasarkan inputan yang Anda masukkan
        ke dalam formulir pada halaman Diagnoses, dimana pada kolom hasil akan muncul dua indikasi hasil yaitu "Disease" dan "No Disease" yang mana jika Disease
        maka kondisi jantung Anda berpotensi terkena penyakit dan jika hasilnya adalah "No Disease" maka kondisi jantung Anda tidak berpotensi terkena penyakit.
        Berikut adalah beberapa indikasi atau gejala yang signifikan dialami oleh penderita dan akan digunakan juga sebagai kolom pertanyaan pada formulir,
        untuk memeriksa apakah Anda, pengguna website Heart Care, terindikasi memiliki potensi terkena penyakit jantung atau tidak.
    </p>

    <ul class="text-left list-decimal ml-8 space-y-4">
        <li><strong>Age (usia):</strong> Semakin tua usia seseorang, umumnya semakin tinggi risiko terkena penyakit jantung.</li>
        <li><strong>Sex (jenis kelamin):</strong> Jenis kelamin Laki-laki (1), pada umumnya memiliki risiko terkena penyakit jantung lebih tinggi dibandingkan Perempuan (2).</li>
        <li><strong>Chest Pain Type (jenis nyeri dada):</strong> Nyeri dada tipe 0 atau 1 biasanya lebih terkait dengan masalah jantung dibandingkan tipe 2 dan 3.
            <ul class="list-disc ml-6">
                <li>0: Angina tipikal</li>
                <li>1: Angina atipikal</li>
                <li>2: Nyeri non-anginal</li>
                <li>3: Asimptomatik (tidak ada gejala)</li>
            </ul>
        </li>
        <li><strong>Resting Blood Pressure (tekanan darah saat istirahat):</strong> Tekanan darah yang tinggi (diukur dalam mm Hg) bisa menjadi indikasi risiko jantung, terutama jika tekanan darah jauh di atas normal.</li>
        <li><strong>Cholesterol (kolesterol serum):</strong> Tingkat kolesterol dalam darah dalam satuan mg/dl. Kolesterol tinggi bisa mempersempit pembuluh darah, meningkatkan risiko penyakit jantung.</li>
        <li><strong>Fasting Blood Sugar (gula darah puasa):</strong> Jika gula darah puasa >120 mg/dl (1), maka dianggap tinggi dan berisiko untuk penyakit jantung.</li>
        <li><strong>Rest Electrocardiographic Result (hasil elektrokardiografi saat istirahat):</strong> Abnormalitas ini bisa menunjukkan adanya kerusakan atau tekanan pada jantung.
            <ul class="list-disc ml-6">
                <li>0: Normal</li>
                <li>1: Abnormalitas gelombang ST-T</li>
                <li>2: Hipertrofi ventrikel kiri</li>
            </ul>
        </li>
        <li><strong>Thalach (detak jantung maksimal yang dicapai):</strong> Semakin tinggi detak jantung maksimal yang dicapai selama latihan, bisa memberikan indikasi kesehatan jantung.</li>
        <li><strong>Exang (angina yang dipicu oleh latihan):</strong> Jika 1, berarti ada nyeri dada saat latihan, yang dapat mengindikasikan masalah jantung.</li>
        <li><strong>Oldpeak:</strong> Depresi ST yang dipicu oleh latihan (dibandingkan dengan kondisi istirahat), menunjukkan perubahan pada jantung selama latihan.</li>
        <li><strong>Slope (kemiringan segmen ST pada puncak latihan):</strong> Kemiringan ST yang datar atau menurun dapat menunjukkan adanya penyumbatan.
            <ul class="list-disc ml-6">
                <li>0: Kemiringan naik</li>
                <li>1: Datar</li>
                <li>2: Kemiringan turun</li>
            </ul>
        </li>
        <li><strong>Ca (jumlah pembuluh besar yang diberi pewarna melalui fluoroskopi):</strong> Makin banyak pembuluh darah yang terdeteksi abnormal, makin tinggi risiko jantung.</li>
        <li><strong>Thal (kondisi jantung):</strong> Cacat tetap atau cacat reversibel bisa menjadi tanda kerusakan pada jantung.
            <ul class="list-disc ml-6">
                <li>0: Error atau NaN dalam dataset asli</li>
                <li>1: Cacat tetap</li>
                <li>2: Normal</li>
                <li>3: Cacat reversibel</li>
            </ul>
        </li>
    </ul>

    <p class="text-center mt-8 mb-8"><strong>INGAT! ISILAH TIAP INPUTAN PADA FORM DENGAN JUJUR TANPA ADA PAKSAAN, JANGAN BOHONG! JIKA ANDA BERBOHONG MAKA HASIL DIAGNOSA ANDA BISA JADI MEMANG AKAN TERLIHAT BAIK-BAIK SAJA
        NAMUN BELUM TENTU BAIK PADA KENYATAANNYA. PERIKSA POTENSI PENYAKIT JANTUNG SEJAK DINI DAN SEGERA CARI PENANGANAN YANG TEPAT! KONSULTASIKAN HASIL DIAGNOSA ANDA DENGAN DOKTER AHLI JANTUNG UNTUK PEMERIKSAAN LEBIH LANJUT!
    </strong></p>

    <a href="<?= base_url('form') ?>" class="bg-white text-red-600 px-6 py-3 rounded-lg shadow-lg mt-8 mb-4 text-lg font-semibold">
        Yuk Mulai Diagnosa!
    </a>
</div>
