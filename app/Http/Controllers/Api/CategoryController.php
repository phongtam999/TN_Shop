<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Interfaces\CategoryServiceInterface;
use App\Http\Resources\CategoryResource;


class CategoryController extends Controller
{
    protected $categoryService;

    public function __construct(CategoryServiceInterface $categoryService)
    {
        $this->categoryService = $categoryService;
    }
    public function index(Request $request)
    {
        $items = $this->categoryService->all($request);
        return CategoryResource::collection($items);
    }

    public function store(Request $request)
    {
        $this->categoryService->store($request);
        response()->json([
            'success' => true,
        ]);
    }

    public function show(string $id)
    {
        $item = $this->categoryService->find($id);
        return new CategoryResource($item);
    }

    public function update(Request $request, string $id)
    {
        $this->categoryService->update($request, $id);
        response()->json([
            'success' => true,
        ]);
    }

    public function destroy(string $id)
    {
        $this->categoryService->destroy($id);
        response()->json([
            'success' => true,
        ]);
    }
}
