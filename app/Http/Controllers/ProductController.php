<?php

namespace App\Http\Controllers;

use App\Exports\ProductExport;
use App\Imports\ProductsImport;
use App\Models\Category;
use App\Models\Product;
use App\Services\Product\ProductServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Facades\Excel;


class ProductController extends Controller
{
    private $productService;
    private $categoryService;
    public function __construct(ProductServiceInterface  $productService) 
                                                 // CategoryServiceInterface $categoryService
    {
        $this->productService = $productService;
        // $this->categoryService = $categoryService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $this->authorize('viewAny', Product::class);
        $products = Product::all();
        $categories = Category::get();
        $products = $this->productService->all($request);
        $params = [
            'categories' => $categories,
            'products' => $products
        ];
        return view('admin.product.index', $params);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create', Product::class);
        $products = Product::all();
        $categories = Category::all();
        $params = [
            'categories' => $categories,
            'products' => $products,
        ];
        return view('admin.products.create', $params);
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $validated = $request->validate(
            [
                'name' => 'required',
                'category_id' => 'required',
                'price' => 'required',
                'quantity' => 'required',
                'description' => 'required',
                'image' => 'required',
            ],
            [
                'name.required' => 'Vui lòng điền đầy đủ thông tin!',
                'description.required' => 'Vui lòng điền đầy đủ thông tin!',
                'quantity.required' => 'Vui lòng điền đầy đủ thông tin!',
                'price.required' => 'Vui lòng điền đầy đủ thông tin!',
                'category_id.required' => 'Vui lòng điền đầy đủ thông tin!',
                'image.required' => 'Vui lòng điền đầy đủ thông tin!',
            ]
        );
        $data = $request->all();
        try {
            $this->productService->create($data);
            $notification = [
                'message' => 'Thêm sản phẩm thành công!',
                'alert-type' => 'success'
            ];
            return redirect()->route('products.index')->with($notification);
        } catch (\Exception $e) {
            Session::flash('error', config('define.store.error'));
            Log::error('message:' . $e->getMessage());
            $notification = [
                'message' => 'có lôi xay ra!',
                'alert-type' => 'error'
            ];
            return redirect()->route('products.index')->with($notification);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $productshow = Product::findOrFail($id);
        $param =[
            'productshow'=>$productshow,
        ];
        return view('admin.products.show',  $param );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $products = Product::find($id);
        $categories = Category::all();
        $param = [
            'products' => $products,
            'categories' => $categories
        ];
        return view('admin.products.edit',$param);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::findOrFail($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
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
        alert()->success('Cập nhật sản phẩm thành công!');

        $product->save();

        return redirect()->route('product.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->authorize('forceDelete', Product::class);
        $products = Product::find($id);
        $products->delete();
        alert()->success('Sản phẩm đã vào thùng rác!');

        return redirect()->route('product.index');
        //
    }
    public function trash()
    {
        $softs = Product::onlyTrashed()->get();
        return view('admin.products.trash', compact('softs'));
    }
    public function restore($id)
    {
        try {
            $softs = Product::withTrashed()->find($id);
            $softs->restore();
            alert()->success('Khôi Phục Sản Phẩm Thành Công!');
            return redirect()->route('product.index');
        } catch (\exception $e) {
            Log::error($e->getMessage());
            toast('Có Lỗi Xảy Ra!', 'error', 'top-right');
            return redirect()->route('product.index');
        }
    }
      //xóa vĩnh viễn
      public function deleteforever($id)
      {
          try {
              $softs = Product::withTrashed()->find($id);
              $softs->forceDelete();
            alert()->success('Xóa Vĩnh Viễn Thành Công!');
              return redirect()->route('product.index');
          } catch (\exception $e) {
              Log::error($e->getMessage());
              toast('Có Lỗi Xảy Ra!', 'error', 'top-right');
              return redirect()->route('product.index');
          }
      }
      public function search(Request $request){
        $search = $request->input('search');
        if(!$search){
            return redirect()->route('product.index');
        }
        $products = Product::where('name','LIKE','%'.$search.'%')->paginate(2);
        return view('admin.products.index',compact('products'));
      }
      public function exportExcel()
      {
          return Excel::download(new ProductExport, 'product.xlsx');
      }
}
