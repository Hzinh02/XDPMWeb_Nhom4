<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DangNhapController;
use App\Http\Controllers\SvController;
use App\Http\Controllers\GvController;
use App\Http\Controllers\MonHocController;
use App\Http\Controllers\QRController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('dangky', [DangNhapController::class, 'formDangKy']);
Route::post('dangky', [DangNhapController::class, 'dangKy'])->name('dangky');

Route::get('dangnhap', [DangNhapController::class, 'formDangNhap'])->name('trangdangnhap');
Route::post('dangnhap', [DangNhapController::class, 'dangNhap'])->name('dangnhap');

Route::get('/', [DangNhapController::class, 'formDangNhap']);

Route::prefix('giangvien')->middleware('isAdmin')->group(function () {
    Route::get('/', [DangNhapController::class, 'index'])->name('index');

    Route::get('/sinhvien', [SvController::class, 'hienthi'])->name('sv');
    Route::get('themsinhvien', [SvController::class, 'formthem']);
    Route::post('themsinhvien', [SvController::class, 'themSV'])->name('themsv');
    Route::get('xoasinhvien/{id}', [SvController::class, 'xoaSV'])->name('xoasv');
    Route::get('suasinhvien/{id}', [SvController::class, 'formSuaSV'])->name('formSuaSV');
    Route::put('capnhatsinhvien/{id}', [SvController::class, 'capnhatSV'])->name('capnhatSV');

    Route::get('/giangvien', [GvController::class, 'hienthi'])->name('gv');
    Route::get('themgiangvien', [GvController::class, 'formthem']);
    Route::post('themgiangvien', [GvController::class, 'themGV'])->name('themgv');
    Route::get('xoagiangvien/{id}', [GvController::class, 'xoaGV'])->name('xoagv');
    Route::get('suagiangvien/{id}', [GvController::class, 'formSuaGV'])->name('formSuaGV');
    Route::put('capnhatgiangvien/{id}', [GvController::class, 'capnhatGV'])->name('capnhatGV');

    Route::get('/monhoc', [MonhocController::class, 'hienthi'])->name('mh');
    Route::get('themmonhoc', [MonHocController::class, 'formthem']);
    Route::post('themmonhoc', [MonHocController::class, 'themMH'])->name('themmh');
    Route::get('xoamonhoc/{id}', [MonHocController::class, 'xoaMH'])->name('xoamh');
    Route::get('suamonhoc/{id}', [MonHocController::class, 'formSuaMH'])->name('formSuaMH');
    Route::put('capnhatmonhoc/{id}', [MonHocController::class, 'capnhatMH'])->name('capnhatMH');

    Route::get('/scan', [QRController::class, 'index']);
    Route::post('/scan', [QRController::class, 'dd'])->name('diemdanh');

    Route::get('xoadiemdanh/{id}', [QRController::class, 'xoaDD'])->name('xoadiemdanh');

    Route::get('/ketquadiemdanh', [QRController::class, 'kqDiemDanh'])->name('kqdiemdanh');
    Route::get('/dangxuat', [DangNhapController::class, 'dangXuat'])->name('dangxuat');
});

Route::prefix('sinhvien')->middleware('isUser')->group(function () {
    Route::get('/', [DangNhapController::class, 'trangSinhVien'])->name('indexSV');
    Route::get('/kqdiemdanhSV/{mssv}', [QRController::class, 'kqDiemDanhSV'])->name('kqdiemdanhSV');
});
