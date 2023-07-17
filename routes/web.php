<?php

use App\Http\Controllers\BackEnd\ReportController;
use Illuminate\Support\Facades\Route;
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

Route::get('login', 'App\Http\Controllers\Controller@login');
Route::post('check', 'App\Http\Controllers\Api\Admin\AdminController@login')->name('login');
Route::get('newForm', 'App\Http\Controllers\Controller@newForm');


Route::get('show-pdf', function () {
    $path = public_path('images/forms/pdf/1686758810.docx');
    return response()->file($path);
});
Route::get('/index', function(){
    return view('backend\reports\F057-THHC Consent to Photograph and or Video Record');
});

Route::get('/show_pdf',[ReportController::class,'create'])->name('show_pdf');
Route::get('/pdf_loading',[ReportController::class,'pdf'])->name('pdf_loading');


Route::group(['reports/doctore'], function () {
    Route::view('backend' , 'reports/f018')->name('backend.reports.f018');
    Route::view('temp' , 'reports.temp');
    Route::resource('report' , ReportController::class);
    Route::post('report_create/{id}' , [ReportController::class , 'create'])->name('report_create');
    Route::post('report_pdf/{id}' , [ReportController::class , 'pdf'])->name('report_pdf');

});


