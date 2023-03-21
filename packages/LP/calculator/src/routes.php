<?php

Route::get('/calculator', function () {
    echo "Hello from calculator";
});


Route::get('/calculator/add/{a}/{b}', [\LP\Calculator\CalculatorController::class, 'add']);
Route::get('/calculator/sub/{a}/{b}', [\LP\Calculator\CalculatorController::class, 'sub']);
Route::get('/calculator/view', [\LP\Calculator\CalculatorController::class, 'view']);
