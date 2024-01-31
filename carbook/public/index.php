<?php

// Memasukkan autoloader dari Composer
require __DIR__.'/../vendor/autoload.php';

// Membuat dan menjalankan aplikasi Laravel
$app = require_once __DIR__.'/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

// Menangani permintaan yang masuk
$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

// Mengirimkan respons kembali ke browser pengguna
$response->send();

// Menyelesaikan aplikasi
$kernel->terminate($request, $response);
