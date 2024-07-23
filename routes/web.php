<?php

use Illuminate\Support\Facades\Route;

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/about', function () {
return ('this is about page');
});

Route::get('/product', function() {
    //return ('this is product page');
    return view ('product', ['name' => 'shoes']);
});

Route::get('name/{name}', function($name = 'guest'){
    return ('My name is '. $name);
});

