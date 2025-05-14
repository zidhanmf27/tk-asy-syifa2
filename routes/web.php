<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('tentang/sejarah', function () {
    return view('slicing-page.tentang-page.sejarah');
})->name('tentang.sejarah');

Route::get('tentang/visimisi', function () {
    return view('slicing-page.tentang-page.visimisi');
})->name('tentang.visimisi');
