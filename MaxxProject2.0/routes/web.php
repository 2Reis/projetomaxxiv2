<?php

use App\Http\Controllers\FarmaController;
use Illuminate\Support\Facades\Route;

    Route::prefix('farmacos')->group(function(){
    Route::get('/',[FarmaController::class,'index'])->name('farmacos-index');
    Route::get('/create',[FarmaController::class,'create'])->name('farmacos-create');
    Route::post('/',[FarmaController::class,'store'])->name('farmacos-store');
    Route::get('/{id}/edit',[FarmaController::class,'edit'])->where('id','[0-9]+')->name('farmacos-edit');
    Route::put('/{id}',[FarmaController::class,'update'])->where('id','[0-9]+')->name('farmacos-update');
 // Route::destroy('/{id}',[FarmaController::class,'destroy'])->name('farmacos-destroy');
});

Route::get('/home', [FarmaController::class, 'index']);