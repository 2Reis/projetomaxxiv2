<?php

use App\Http\Controllers\FarmaController;
use Illuminate\Support\Facades\Route;

Route::prefix('farmacos')->group(function(){
    route::get('/',[FarmaController::class,'index'])->name('farmacos-index');
    route::get('/create',[FarmaController::class,'create'])->name('farmacos-create');
    route::post('/',[FarmaController::class,'store'])->name('farmacos-store');
});


Route::get('/home', [FarmaController::class, 'index']);