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
Route::get('karyawan/create', [KaryawanController::class, 'create'])->name('karyawan.create');
Route::post('karyawan', [KaryawanController::class, 'store'])->name('karyawan.store');

Route::get('pengiriman', [PengirimanController::class, 'index'])->name('pengiriman.index');
Route::get('pengiriman/edit/{id}', [PengirimanController::class, 'edit'])->name('pengiriman.edit');
Route::post('pengiriman/update/{id}', [PengirimanController::class, 'update'])->name('pengiriman.update');
Route::delete('pengiriman/delete/{id}', [PengirimanController::class, 'destroy'])->name('pengiriman.destroy');
Route::get('pengiriman/create', [PengirimanController::class, 'create'])->name('pengiriman.create');
Route::post('pengiriman', [PengirimanController::class, 'store'])->name('pengiriman.store');

Route::get('potongan', [PotonganController::class, 'index'])->name('potongan.index');
Route::get('potongan/edit/{id}', [PotonganController::class, 'edit'])->name('potongan.edit');
Route::get('potongan/edit/{id}', [PotonganController::class, 'edit'])->name('potongan.edit');
Route::post('potongan/update/{id}', [PotonganController::class, 'update'])->name('potongan.update');
Route::delete('potongan/delete/{id}', [PotonganController::class, 'destroy'])->name('potongan.destroy');
Route::get('potongan/create', [PotonganController::class, 'create'])->name('potongan.create');
Route::post('potongan', [PotonganController::class, 'store'])->name('potongan.store');

Route::get('insentif', [InsentifController::class, 'index'])->name('insentif.index');
Route::get('insentif/edit/{id}', [InsentifController::class, 'edit'])->name('insentif.edit');
Route::get('insentif/edit/{id}', [InsentifController::class, 'edit'])->name('insentif.edit');
Route::post('insentif/update/{id}', [InsentifController::class, 'update'])->name('insentif.update');
Route::delete('insentif/delete/{id}', [InsentifController::class, 'destroy'])->name('insentif.destroy');
Route::get('insentif/create', [InsentifController::class, 'create'])->name('insentif.create');
Route::post('insentif', [InsentifController::class, 'store'])->name('insentif.store');

Route::get('settings', [SettingsController::class, 'index'])->name('settings.index');
Route::get('settings/edit/{id}', [SettingsController::class, 'edit'])->name('settings.edit');
Route::get('settings/edit/{id}', [SettingsController::class, 'edit'])->name('settings.edit');
Route::post('settings/update/{id}', [SettingsController::class, 'update'])->name('settings.update');
Route::delete('settings/delete/{id}', [SettingsController::class, 'destroy'])->name('settings.destroy');
Route::get('settings/create', [SettingsController::class, 'create'])->name('settings.create');
Route::post('settings', [SettingsController::class, 'store'])->name('settings.store');

Route::get('laporan', [LaporanController::class, 'index'])->name('laporan.index');
Route::get('laporan/edit/{id}', [LaporanController::class, 'edit'])->name('laporan.edit');
Route::post('laporan/update/{id}', [LaporanController::class, 'update'])->name('laporan.update');
Route::delete('laporan/delete/{id}', [LaporanController::class, 'destroy'])->name('laporan.destroy');
Route::get('laporan/create', [LaporanController::class, 'create'])->name('laporan.create');
Route::post('laporan', [LaporanController::class, 'store'])->name('laporan.store');
Route::get('laporan/cetak/{id}', [LaporanController::class, 'cetak'])->name('laporan.cetak');





Route::post('/login', function () {
    // Authentication logic
    return redirect()->route('karyawan.index');
});
