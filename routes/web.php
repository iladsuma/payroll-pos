<?php

use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\PengirimanController;
use App\Http\Controllers\PotonganController;
use App\Http\Controllers\InsentifController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\SettingsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Login Route
Route::get('/', function () {
    return view('auth.login');
})->name('login');

// Handle login post request and redirect
Route::post('/login', function (\Illuminate\Http\Request $request) {
    $credentials = $request->only('email', 'password');
    
    if (Auth::attempt($credentials)) {
        // Authentication passed, redirect to karyawan index
        return redirect()->route('karyawan.index');
    }

    // Authentication failed, redirect back to login with error
    return redirect()->route('login')->withErrors(['email' => 'Invalid credentials.']);
})->name('login.post');

// Logout Route
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

// Karyawan Resource Routes
Route::resource('karyawan', KaryawanController::class);

// Pengiriman Resource Routes
Route::resource('pengiriman', PengirimanController::class);

// Potongan Resource Routes
Route::resource('potongan', PotonganController::class);

// Insentif Resource Routes
Route::resource('insentif', InsentifController::class);

// Settings Resource Routes
Route::resource('settings', SettingsController::class);

// Laporan Resource Routes
Route::resource('laporan', LaporanController::class);

// Additional Laporan Route for Printing
Route::get('laporan/cetak/{id}', [LaporanController::class, 'cetak'])->name('laporan.cetak');

// Fallback Route
Route::fallback(function () {
    return redirect()->route('login');
});
