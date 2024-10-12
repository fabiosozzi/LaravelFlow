<?php

use App\Actions\Contact\CreateContact;
use App\Actions\Contact\DeleteContact;
use App\Actions\Contact\GetAllContacts;
use App\Actions\Contact\GetContact;
use App\Actions\Contact\UpdateContact;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->name('api.')->group(function () {
    // Contacts
    Route::prefix('contacts')->name('contacts.')->group(function () {
        Route::get('/', GetAllContacts::class)->name('index');
        Route::post('/', CreateContact::class)->name('store');
        Route::get('/{contact}', GetContact::class)->name('show');
        Route::put('/{contact}', UpdateContact::class)->name('update');
        Route::delete('/{contact}', DeleteContact::class)->name('destroy');
    });
})->middleware('auth:sanctum');
