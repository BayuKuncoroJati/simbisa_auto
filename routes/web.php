<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.app');
})->name('app');

Route::get('/about-us', function () {
    return view('components.content.about-us');
})->name('about-us');

Route::get('/blog/{card}', function ($card) {
    // Pastikan hanya menerima card1, card2, card3
    if (!in_array($card, ['card1', 'card2', 'card3'])) {
        abort(404);
    }
    return view('components.content.blog.blog', ['card' => $card]);
})->name('blog.show');
