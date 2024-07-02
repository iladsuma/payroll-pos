<?php

use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\PengirimanController;
use App\Http\Controllers\PotonganController;
use App\Http\Controllers\InsentifController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\SettingsController;
use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('auth.login');
})->name('login');


Route::get('karyawan', [KaryawanController::class, 'index'])->name('karyawan.index');
Route::get('karyawan/edit/{id}', [KaryawanController::class, 'edit'])->name('karyawan.edit');
Route::post('karyawan/update/{id}', [KaryawanController::class, 'update'])->name('karyawan.update');
Route::delete('karyawan/delete/{id}', [KaryawanController::class, 'destroy'])->name('karyawan.destroy');

Route::get('pengiriman', [PengirimanController::class, 'index'])->name('pengiriman.index');


Route::get('potongan/edit/{id}', [PotonganController::class, 'edit'])->name('potongan.edit');
Route::post('potongan/update/{id}', [PotonganController::class, 'update'])->name('potongan.update');
Route::delete('potongan/delete/{id}', [PotonganController::class, 'destroy'])->name('potongan.destroy');

Route::get('insentif/edit/{id}', [InsentifController::class, 'edit'])->name('insentif.edit');
Route::post('insentif/update/{id}', [InsentifController::class, 'update'])->name('insentif.update');
Route::delete('insentif/delete/{id}', [InsentifController::class, 'destroy'])->name('insentif.destroy');

Route::get('settings/edit/{id}', [SettingsController::class, 'edit'])->name('settings.edit');
Route::post('settings/update/{id}', [SettingsController::class, 'update'])->name('settings.update');
Route::delete('settings/delete/{id}', [SettingsController::class, 'destroy'])->name('settings.destroy');

Route::get('laporan/edit/{id}', [LaporanController::class, 'edit'])->name('laporan.edit');
Route::post('laporan/update/{id}', [LaporanController::class, 'update'])->name('laporan.update');
Route::delete('laporan/delete/{id}', [LaporanController::class, 'destroy'])->name('laporan.destroy');

Route::get('potongan', [PotonganController::class, 'index'])->name('potongan.index');
Route::get('insentif', [InsentifController::class, 'index'])->name('insentif.index');
Route::get('laporan', [LaporanController::class, 'index'])->name('laporan.index');
Route::get('settings', [SettingsController::class, 'index'])->name('settings.index');

Route::post('/login', function () {
    // Authentication logic
    return redirect()->route('karyawan.index');
});
