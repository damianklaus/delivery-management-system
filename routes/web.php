<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeliveryController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/allDelivery', function () {
//     return view('delivery');
// });

Route::get('/allDelivery', [DeliveryController::class, 'index'])->name('allDelivery');
Route::get('/deliveryCreate', [DeliveryController::class, 'create'])->name('create');
Route::post('/saveDelivery', [DeliveryController::class, 'store'])->name('saveDelivery');
// Route::post('/cancelDelivery', [DeliveryController::class, 'cancel'])->name('cancelDelivery');
