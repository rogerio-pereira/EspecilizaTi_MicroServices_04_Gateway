<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\CompanyService;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    private $companyService;

    public function __construct(CompanyService $companyService)
    {
        $this->companyService = $companyService;
    }

    public function index(Request $request)
    {
        return $this->companyService->getAllCompanies($request->all());
    }

    public function store(Request $request)
    {
        return $this->companyService->newCompany($request->all());
    }

    public function show(string $uuid)
    {
        return $this->companyService->getCompany($uuid);
    }
}
