<?php
use Illuminate\Support\Facades\Route;

Route::get('calculator', function(){
    echo 'Hello from the calculator package!';
});

Route::get('add/{a}/{b}', 'Amitesh\Calculator\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'Amitesh\Calculator\CalculatorController@subtract');
