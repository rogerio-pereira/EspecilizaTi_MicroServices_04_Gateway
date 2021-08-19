<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\{
    CompanyController
};

Route::get('/', function(){
    return response()->json(['message' => 'success']);
});

Route::get('companies', [CompanyController::class, 'index']);