<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\{
    CategoryController,
    CompanyController,
    EvaluationController
};

Route::get('/', function(){
    return response()->json(['message' => 'success']);
});

// Route::get('/companies', [CompanyController::class, 'index']);
// Route::post('/companies', [CompanyController::class, 'store']);
// Route::get('/companies/{uuid}', [CompanyController::class, 'show']);
// Route::delete('/companies/{uuid}', [CompanyController::class, 'destroy']);
// Route::put('/companies/{uuid}', [CompanyController::class, 'update']);

Route::post('/companies/{uuid}/evaluations', [EvaluationController::class, 'store']);
Route::apiResource('/companies', CompanyController::class);

Route::apiResource('/categories', CategoryController::class);
