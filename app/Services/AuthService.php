<?php

namespace App\Services;

use App\Http\Utils\DefaultResponse;
use Illuminate\Support\Facades\Http;

class AuthService
{
    protected $defaultResponse;
    protected $url;
    protected $http;

    public function __construct(DefaultResponse $defaultResponse)
    {
        $this->defaultResponse = $defaultResponse;
        $this->url = config('microservice.available.micro_05.url'); 
        $this->http = Http::acceptJson();
    }

    public function login(array $params = [])
    {
        $response = $this->http
                        ->post(
                            $this->url.'/auth',
                            $params
                        );

        return response()->json(
                                    json_decode($response),
                                    $response->status()
                                );
    }

    public function getMe(array $headers)
    {
        $response = $this->http
                        ->withHeaders($headers)
                        ->get($this->url.'/me');

        return response()->json(
                                    json_decode($response),
                                    $response->status()
                                );
    }

    public function logout(array $headers)
    {
        $response = $this->http
                        ->withHeaders($headers)
                        ->post($this->url.'/logout');

        return response()->json(
                                    json_decode($response),
                                    $response->status()
                                );
    }
}
