<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConcertController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/', [TicketController::class, 'order'])->name('order.ticket');
Route::post('/tickets', [TicketController::class, 'store'])->name('tickets.store');
