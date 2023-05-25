<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Interfaces\CategoryServiceInterface;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\ProductResource;
use App\Services\Interfaces\ProductServiceInterface;

class CategoryController extends Controller
{
    protected $categoryService;
    protected $productService;

    public function __construct(CategoryServiceInterface $categoryService,
     ProductServiceInterface $productService)
    {
        $this->categoryService = $categoryService;
        $this->productService = $productService;
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

    public function show(string $id , Request $request)
    {
        
        $request->category_id = $id;
        $request->id = 0;
        $item = $this->productService->all($request);
        return ProductResource::collection($item);
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
