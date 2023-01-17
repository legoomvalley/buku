<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BookCrudController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('admin/book/{id}/qrcode', [BookCrudController::class, 'setupGenerateQRcode']);

Route::get('dashboard', 'AdminController@dashboard')->name('dashboard');
