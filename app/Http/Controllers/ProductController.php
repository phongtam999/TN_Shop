<?php

namespace App\Http\Controllers;

use App\Exports\ProductExport;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use App\Services\Interfaces\ProductServiceInterface;
use App\Services\Interfaces\CategoryServiceInterface;


class ProductController extends Controller
{
    protected $productService;
    protected $categoryService;
    public function __construct(
        ProductServiceInterface $productService,
        CategoryServiceInterface $categoryService
        )
    {
        $this->productService = $productService;
        $this->categoryService = $categoryService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // $this->authorize('viewAny', Product::class);
        $products = $this->productService->all($request);
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        // $this->authorize('create', Product::class);
        $categories = $this->categoryService->all($request);
        $param = [
            'categories' => $categories
        ];
        return view('admin.products.create', $param);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        try {
            $items = $this->productService->store($request);
            toast('Thêm Sản Phẩm Thành Công!', 'success', 'top-right');
            return redirect()->route('products.index');
        } catch (\exception $e) {
            Log::error($e->getMessage());
            toast('Có Lỗi Xảy Ra!', 'error', 'top-right');
            return redirect()->route('products.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $this->authorize('view', Product::class);
        $products = $this->productService->find($id);
        $productshow = Product::findOrFail($id);
        $param = [
            'productshow' => $productshow,
        ];
        return view('admin.products.show',  $param);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $this->authorize('update', Product::class);
        $products = $this->productService->find($id);
        $products = Product::find($id);
        $categories = Category::all();
        $param = [
            'products' => $products,
            'categories' => $categories
        ];
        return view('admin.products.edit', $param);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, string $id)
    {
       
        try {
            $this->productService->update($request, $id);
            toast('Sửa Sản Phẩm Thành Công!', 'success', 'top-right');
            return redirect()->route('products.index');
        } catch (\exception $e) {
            Log::error($e->getMessage());
            toast('Có Lỗi Xảy Ra!', 'error', 'top-right');
            return redirect()->route('products.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        
       $this->authorize('delete', Product::class);
        try {
            $this->productService->destroy($id);
            toast('Sản Phẩm Đã Đưa Vào Thùng Rác!', 'success', 'top-right');
            return redirect()->route('products.index');
        } catch (\exception $e) {
            Log::error($e->getMessage());
            toast('Có Lỗi Xảy Ra', 'error', 'top-right');
            return redirect()->route('products.index');
        }
    }

    public function getTrashed()
    {
        $products = $this->productService->getTrashed();
        $softs = Product::onlyTrashed()->get();
        return view('admin.products.trash', compact('softs'));
    }
    public function restore($id)
    {
        $this->productService->restore($id);
        try {
            $softs = Product::withTrashed()->find($id);
            $softs->restore();
            toast('Khôi phục Sản Phẩm Thành Công!', 'success', 'top-right');
            return redirect()->route('products.index');
        } catch (\exception $e) {
            Log::error($e->getMessage());
            toast('Có Lỗi Xảy Ra!', 'error', 'top-right');
            return redirect()->route('products.index');
        }
    }
    //xóa vĩnh viễn
    public function deleteforever($id)
    {
        $this->authorize('deleteforever', Product::class);
        try {
            $softs = Product::withTrashed()->find($id);
            $softs->forceDelete();
            toast('Xóa Vĩnh Viễn Sản Phẩm Thành Công!', 'success', 'top-right');
            return redirect()->route('products.index');
        } catch (\exception $e) {
            Log::error($e->getMessage());
            toast('Có Lỗi Xảy Ra!', 'error', 'top-right');
            return redirect()->route('products.index');
        }
    }
    public function search(Request $request)
    {
        $search = $request->input('name');
        if (!$search) {
            return redirect()->route('products.index');
        }
        $products = Product::where('name', 'LIKE', '%' . $search . '%')->paginate(2);
        return view('admin.products.index', compact('products'));
    }


    public function exportExcel()
    {
        return Excel::download(new ProductExport, 'products.xlsx');
    }
}