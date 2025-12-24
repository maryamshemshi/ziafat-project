<?php

use App\Http\Controllers\User\AccountController;
use App\Http\Controllers\User\TicketController;
use App\Http\Controllers\User\TicketMessageController;
use Illuminate\Support\Facades\Route;

Route::get('/account', [AccountController::class, 'index'])->name('account');

Route::post('/tickets', [TicketController::class, 'store'])->name('tickets.store')  ;

Route::post('/tickets/{ticket}/messages', [TicketMessageController::class, 'store'])->name('tickets.messages.store');
