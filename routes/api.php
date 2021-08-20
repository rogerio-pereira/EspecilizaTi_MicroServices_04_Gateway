<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\{
    CompanyController
};

Route::get('/', function(){
    return response()->json(['message' => 'success']);
});

Route::get('companies', [CompanyController::class, 'index']);
Route::post('companies', [CompanyController::class, 'store']);
Route::get('companies/{uuid}', [CompanyController::class, 'show']);
Route::delete('companies/{uuid}', [CompanyController::class, 'destroy']);