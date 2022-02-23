<?php

use Akash\Contuct\Http\Controller\ContuctController;
/* Route::get('contuct', function () {
})->name('contuct');
Route::post('contuct', function (Request $req) {
}); */

// Route::get('contuct', [\Akash\Contuct\Http\Controller\ContuctController::class, 'show']);
//Route::post('contuct', [ContuctController::class, 'store']);

Route::controller(ContuctController::class)->group(function () {
    Route::get('/contuct', 'show')->name('contuct');
    Route::post('/contuct', 'store');
});
