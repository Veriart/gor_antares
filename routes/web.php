<?php

use App\Http\Controllers\FieldController;
use App\Http\Controllers\GymnasiumController;
use App\Http\Controllers\TransactionController;
use App\Models\Gymnasium;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/admin');

Route::get('/admin', function () {
    return view('admin.index');
});

Route::prefix('admin')->group(function () {
    Route::controller(GymnasiumController::class)->group(function () {
        Route::get('/gymnasium', 'index')->name('gymnasium');
        Route::post('/gymnasium/store', 'store')->name('gymnasium_store');
        Route::put('/gymnasium/{gymnasium}/update', 'update')->name('gymnasium_update');
        Route::post('/gymnasium/{gymnasium}/destroy', 'destroy')->name('gymnasium_destroy');
    });

    Route::controller(FieldController::class)->group(function () {
        Route::get('/field', 'index')->name('field');
        Route::post('/field/store', 'store')->name('field_store');
        Route::put('/field/{field}/update', 'update')->name('field_update');
        Route::post('/field/{field}/destroy', 'destroy')->name('field_destroy');
    });

    Route::controller(TransactionController::class)->group(function () {
        Route::get('/transaction', 'index')->name('transaction');
        Route::post('/transaction/store', 'store')->name('transaction_store');
        Route::put('/transaction/update', 'update')->name('transaction_update');
        Route::post('/transaction/destroy', 'destroy')->name('transaction_destroy');
    });
});

Route::get('/type-field', function () {
    return view('admin.field.type');
});
