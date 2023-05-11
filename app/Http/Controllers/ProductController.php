<?php

namespace App\Http\Controllers;

use App\Exports\ProductExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use App\Services\Interfaces\ProductServiceInterface;


class ProductController extends Controller
{
    protected $productService;
    public function __construct(ProductServiceInterface $productService)
    {
        $this->productService = $productService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $this->authorize('viewAny', Product::class);
        $products = $this->productService->all($request);
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create', Product::class);
        $this->productService->store($request);
        $categories = Category::get();
        $param = [
            'categories' => $categories
        ];
        return view('admin.products.create', $param);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->productService->store($request);
        $validated = $request->validate(
            [
                'name' => 'required',
                'category_id' => 'required',
                'price' => 'required',
                'amount' => 'required',
                'description' => 'required',
                'image' => 'required',
            ],
            [
                'name.required' => 'Vui lòng điền đầy đủ thông tin!',
                'description.required' => 'Vui lòng điền đầy đủ thông tin!',
                'amount.required' => 'Vui lòng điền đầy đủ thông tin!',
                'price.required' => 'Vui lòng điền đầy đủ thông tin!',
                'category_id.required' => 'Vui lòng điền đầy đủ thông tin!',
                'image.required' => 'Vui lòng điền đầy đủ thông tin!',
            ]
        );
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->amount = $request->amount;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        $fieldName = 'image';
        if ($request->hasFile($fieldName)) {
            $fullFileNameOrigin = $request->file($fieldName)->getClientOriginalName();
            $fileNameOrigin = pathinfo($fullFileNameOrigin, PATHINFO_FILENAME);
            $extenshion = $request->file($fieldName)->getClientOriginalExtension();
            $fileName = $fileNameOrigin . '-' . rand() . '_' . time() . '.' . $extenshion;
            $path = 'storage/' . $request->file($fieldName)->storeAs('public/images', $fileName);
            $path = str_replace('public/', '', $path);
            $product->image = $path;
        }
        alert()->success('Thêm sản phẩm thành công!');
        $product->save();
        return redirect()->route('products.index');
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
    public function update(Request $request, string $id)
    {
        $this->productService->update($request, $id);
        $product = Product::findOrFail($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->amount = $request->amount;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        $fieldName = 'image';
        if ($request->hasFile($fieldName)) {
            $fullFileNameOrigin = $request->file($fieldName)->getClientOriginalName();
            $fileNameOrigin = pathinfo($fullFileNameOrigin, PATHINFO_FILENAME);
            $extenshion = $request->file($fieldName)->getClientOriginalExtension();
            $fileName = $fileNameOrigin . '-' . rand() . '_' . time() . '.' . $extenshion;
            $path = 'storage/' . $request->file($fieldName)->storeAs('public/assets/images', $fileName);
            $path = str_replace('public/', '', $path);
            $product->image = $path;
        }
        alert()->success('Cập nhật sản phẩm thành công!');

        $product->save();

        return redirect()->route('products.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $this->authorize('delete', Product::class);
        $this->productService->destroy($id);
        $product = Product::find($id);

        if ($product) {
            if ($product->delete()) { // Sử dụng phương thức delete() và kiểm tra giá trị trả về
                return redirect()->route('products.index');
            } else {
                alert()->error('Không thể di chuyển sản phẩm vào thùng rác!');
            }
        }
        alert()->success('Sản phẩm đã vào thùng rác!');

        return redirect()->back();
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
            alert()->success('Khôi Phục Sản Phẩm Thành Công!');
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
            alert()->success('Xóa Vĩnh Viễn Thành Công!');
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