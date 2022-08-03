<?php

Route::get('calculator', function(){
    echo 'Hello from the calculator package!';
});

Route::get('add/{a}/{b}', 'umar\Calculator\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'umar\Calculator\CalculatorController@subtract');