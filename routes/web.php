<?php

use Illuminate\Support\Facades\Route;

Route::get(uri:'/', action: function (): View {
    return view('welcome');
});
Route::get( '/login', 'App\Http\Controller@index');