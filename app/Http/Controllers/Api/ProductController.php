<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Category;
use App\Models\Product;
use App\Services\Interfaces\ProductServiceInterface;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $productService;
    public function __construct(
        ProductServiceInterface $productService
        )
    {
        $this->productService = $productService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $items = $this->productService->all($request);
        
        return ProductResource::collection($items);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->productService->store($request);
        response()->json([
            'success' => true,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $item = $this->productService->find($id);
        return new ProductResource($item);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $item = $this->productService->find($id);
        return new ProductResource($item);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->productService->update($request, $id);
        response()->json([
            'success' => true,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->productService->destroy($id);
        response()->json([
            'success' => true,
        ]);
    }
    public function product_detail($id)
    {
        $product = Product::with('category')->find($id);
        return response()->json($product, 200);
    }
    public function category_list()
    {
        $categories = Category::with('products')->take(10)->get();
        return response()->json($categories, 200);
    }
    public function product_new()
    {
        $product = Product::take(6)->get();
        return response()->json($product, 200);
    }

    
}
