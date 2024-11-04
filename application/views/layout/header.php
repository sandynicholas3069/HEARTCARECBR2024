<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heart Care</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<nav class="bg-white p-4 flex justify-between items-center">
    <div class="flex space-x-4">
        <a href="<?= base_url() ?>" class="<?= ($this->uri->segment(1) == '') ? 'bg-red-600 text-white' : 'text-red-600' ?> font-bold transition duration-300 ease-in-out hover:bg-red-600 hover:text-white rounded-lg px-4 py-2">Heart Care</a>
        <a href="<?= base_url('form') ?>" class="<?= ($this->uri->segment(1) == 'form') ? 'bg-red-600 text-white' : 'text-red-600' ?> font-bold transition duration-300 ease-in-out hover:bg-red-600 hover:text-white rounded-lg px-4 py-2">Form</a>
        <a href="<?= base_url('diagnoses') ?>" class="<?= ($this->uri->segment(1) == 'diagnoses') ? 'bg-red-600 text-white' : 'text-red-600' ?> font-bold transition duration-300 ease-in-out hover:bg-red-600 hover:text-white rounded-lg px-4 py-2">Diagnoses</a>
    </div>
    <div class="flex-1 text-center">
        <span class="text-red-600 font-semibold">Deteksi Dini untuk Hidup Berkualitas di Kemudian Hari!</span>
    </div>
    <div class="ml-auto">
        <img src="<?= base_url('Assets/heart-care-logo.png') ?>" alt="Logo" class="w-32 h-18">
    </div>
</nav>
<div class="container mx-auto"></div>