<?php

use App\Http\Controllers\ChatGPTController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/chat-gpt', [ChatGPTController::class, 'index'])->name('chat-gpt.index');
