<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\datosFormularioController;
use App\Http\Controllers\datosLegalController;
use App\Http\Controllers\distritoController;
use App\Http\Controllers\miembroEmpresaController;

Route::resource('/datos',datosFormularioController::class);
Route::get('/',[datosFormularioController::class,'index'])->name('/');
Route::get('/datosformulario/export',[datosFormularioController::class,'export'])->name('datosformulario.export');
Route::resource('/representantelj',datosLegalController::class);
Route::get('/exportDatoslegal/export',[datosLegalController::class,'export'])->name('exportDatoslegal.export'); 
/*  SON PARA LOS BOTONES */
Route::get('/personanatural',[datosFormularioController::class,'createpersonan'])->name('personanatural');
Route::get('/representantelegals',[datosLegalController::class,'representantelegals'])->name('representantelegals');
Route::get('/miembrodelaempresa',[miembroEmpresaController::class,'miembrodelaempresa'])->name('miembrodelaempresa');
/* ============ */
Route::resource('/miembrodeempresa',miembroEmpresaController::class);
Route::get('/exportmiembroempresa/export',[miembroEmpresaController::class,'export'])->name('exportmiembroempresa.export');
Route::post('ciudad',[distritoController::class,'ciudad'])->name('ciudad');
/* Route::post('distrito',[datosLegalController::class,'distrito'])->name('distrito'); */