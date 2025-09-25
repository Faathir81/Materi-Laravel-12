<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Halo Laravel 12! 🎉';
});

Route::get('/greeting', function () {
    $name = request('name', 'Nama Kalian'); // bisa diubah via query ?name=Faathir
    return view('greeting', ['name' => $name]);
});