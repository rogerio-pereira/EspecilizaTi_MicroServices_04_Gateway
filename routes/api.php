<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return response()->json(['message' => 'success']);
});

Route::get('companies', function(){
    $response = Http::withHeaders(['Accept' => 'application/json'])
                    ->get(config('microservice.available.micro_01.url').'/companies');
    $return = json_decode($response->body());

    return response()->json($return, $response->status());
});