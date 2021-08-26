<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Services\CategoryService;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    private $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function index(Request $request)
    {
        return $this->categoryService->getAllCategories($request->all());
    }

    public function store(Request $request)
    {
        return $this->categoryService->newCategory($request->all());
    }

    public function show(string $id)
    {
        return $this->categoryService->getCategoryById($id);
    }

    public function update(Request $request, string $id)
    {
        return $this->categoryService->updateCategory($id, $request->all());
    }

    public function destroy(string $id)
    {
        return $this->categoryService->deleteCategory($id);
    }
}
