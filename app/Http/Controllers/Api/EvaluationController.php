<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Services\EvaluationService;
use App\Http\Controllers\Controller;

class EvaluationController extends Controller
{
    private $evaluationService;

    public function __construct(EvaluationService $evaluationService)
    {
        $this->evaluationService = $evaluationService;
    }

    public function store(Request $request, $uuid)
    {
        return $this->evaluationService->createNewEvaluationByCompany($uuid, $request->all());
    }
}
