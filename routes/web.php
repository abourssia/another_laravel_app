<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [App\Http\Controllers\welcomecontroller::class, 'index'])->name('home');

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function () {
Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class,'index']);
Route::get('/dashboard/count', [App\Http\Controllers\Admin\DashboardController::class,'count']);
Route::get('/', [App\Http\Controllers\Admin\DashboardController::class,'index']);
Route::get('/users', [App\Http\Controllers\Admin\UserController::class,'index']);
Route::get('/laboratoires', [App\Http\Controllers\Admin\LaboController::class,'index']);
Route::get('/laboratoires/restructuration', [App\Http\Controllers\Admin\LaboController::class,'restructuration']);
Route::POST('/laboratoires/restructuration/addnew', [App\Http\Controllers\Admin\LaboController::class,'restructurationstore']);
Route::get('/laboratoires/restructuration/List', [App\Http\Controllers\Admin\LaboController::class,'restructurationList']);
Route::get('laboratoires/add-labo', [App\Http\Controllers\Admin\LaboController::class,'create']);

Route::get('laboratoires/add-labo/getETab', [App\Http\Controllers\Admin\LaboController::class,'getETab']);

Route::post('laboratoires/add-labo', [App\Http\Controllers\Admin\LaboController::class,'store']);

Route::get('print/restructuration', [App\Http\Controllers\Admin\RestrucController::class, 'index']);
Route::get('/print/restructuration/test', [App\Http\Controllers\Admin\RestrucController::class, 'autocomplete'])->name('autocomplete');
Route::get('/restructurationByName', [App\Http\Controllers\Admin\LaboController::class, 'RestruByCodeLabo']);
Route::get('/ByCode', [App\Http\Controllers\Admin\RestrucController::class, 'RestruByCodeLabo']);

Route::get('laboratoires/restructuration/test', [App\Http\Controllers\Admin\LaboController::class, 'acomplete'])->name('acomplete');
Route::get('print/experts/test', [App\Http\Controllers\Admin\ExpRintXontroller::class, 'aucomplete'])->name('aucomplete');
Route::get('/expert/test', [App\Http\Controllers\Admin\ExpRintXontroller::class, 'EXpertByCodeLabo']);
Route::get('/print/restructuration/generate-pdf',[App\Http\Controllers\Admin\RestrucController::class, 'generatePDF']);
Route::get('/experts', [App\Http\Controllers\Admin\ExpertController::class,'index']);
Route::post('experts/add-expert', [App\Http\Controllers\Admin\ExpertController::class,'store']);
Route::get('experts/add-expert', [App\Http\Controllers\Admin\ExpertController::class,'create']);

Route::post('/restructuration/action', [App\Http\Controllers\Admin\RestrucController::class,'action'])->name('tabledit.action');;

Route::get('/experts/import', [App\Http\Controllers\Admin\importExcelController::class,'expertimport']);
Route::post('/experts/import/file-import', [App\Http\Controllers\Admin\importExcelController::class, 'fileexpertImport'])->name('fileexpertImport');

Route::get('/laboratoires/import', [App\Http\Controllers\Admin\importExcelController::class,'laboimport']);
Route::post('/laboratoires/import/file-import', [App\Http\Controllers\Admin\importExcelController::class, 'fileImport'])->name('file-import');

Route::get('/print/Contratexpert', [App\Http\Controllers\Admin\ExpRintXontroller::class,'index']);
Route::get('/print/ContratexpertPNR', [App\Http\Controllers\Admin\ExpRintXontroller::class,'index2']);

Route::get('/print/Contratexpert/generate-pdf', [App\Http\Controllers\Admin\ExpRintXontroller::class,'generatePDF']);
Route::get('/print/Contratexpert/generate-pdf-pnr', [App\Http\Controllers\Admin\ExpRintXontroller::class,'generatePDFPNR']);


//Route::get('print/restructuration', [App\Http\Controllers\Admin\RestrucController::class, 'autocomplete']);


});

