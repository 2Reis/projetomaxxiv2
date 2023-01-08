<?php

use App\Http\Controllers\FarmaController;
use Illuminate\Support\Facades\Route;

Route::prefix('farmacos')->group(function(){
    Route::get('/',[FarmaController::class,'index'])->name('farmacos-index');
    Route::get('/create',[FarmaController::class,'create'])->name('farmacos-create');
    Route::post('/',[FarmaController::class,'store'])->name('farmacos-store');
});

Route::get('/home', [FarmaController::class, 'index']);