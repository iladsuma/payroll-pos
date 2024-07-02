<?php

use App\Http\Controllers\KaryawanController;
use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/karyawan', [KaryawanController::class, 'index'])->name('karyawan.index');

Route::post('/login', function () {
    // Authentication logic
    return redirect()->route('karyawan.index');
});
