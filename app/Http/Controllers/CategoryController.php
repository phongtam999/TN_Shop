<?php

namespace App\Http\Controllers;
use App\Http\Requests\Category\StoreCategoryRequest;
use App\Http\Requests\Category\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Services\Interfaces\CategoryServiceInterface;

class CategoryController extends Controller
{

    protected $categoryService;

    public function __construct(CategoryServiceInterface $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function index(Request $request)
    {
        $this->authorize('viewAny', Category::class);
        $categories = $this->categoryService->all($request);
        return view('admin.categories.index', compact('categories','request'));
    }

  
    public function create( Request $request)
    {
        $this->authorize('create', Category::class);
        return view('admin.categories.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
     
        $this->categoryService->store($request);
        toast('Thêm danh mục thành công!', 'success', 'top-right');
        return redirect()->route('categories.index');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $item = $this->categoryService->find($id);
        $this->authorize('update',$item);
        return view('admin.categories.edit',compact('item'));
    }

    public function update(UpdateCategoryRequest $request,$id)
    {
        $this->categoryService->update($request, $id);
        toast('Cập nhật thương hiệu thành công!', 'success', 'top-right');
        return redirect()->route('categories.index');
    }

    public function destroy(string $id)
    {
        $category = $this->categoryService->find($id);
        $this->authorize('delete', $category);
        if (!$category) {
            return redirect()->back()->with('error', 'Không tìm thấy danh mục');
        }
        $this->categoryService->destroy($id);
        toast('Danh mục đã di chuyển vào thùng rác!', 'success', 'top-right');
        return redirect()->route('categories.index');
    }
    public function trash()
    {
        $softs = $this->categoryService->getTrashed();
        return view('admin.categories.trash', compact('softs'));
    }
    public function restore($id)
    {
        $category = $this->categoryService->find($id, true);
        // dd($category);
        $this->authorize('restore', $category);
        try {
            $this->categoryService->restore($id);
            toast('Khôi Phục Danh Mục Thành Công!', 'success', 'top-right');
            return redirect()->route('categories.index');
        } catch (\exception $e) {
            Log::error($e->getMessage());
            toast('Có Lỗi Xảy Ra!', 'error', 'top-right');
            return redirect()->route('categories.index');
        }
    }
    public function deleteforever($id)
{
    $category = $this->categoryService->find($id,true);
    $this->authorize('deleteforever', $category);
    try {
        if ($category) {
            $category->forceDelete();
            toast('Xóa Vĩnh Viễn Danh Mục Thành Công!', 'success', 'top-right');
        } else {
            alert()->error('Không thể xóa vĩnh viễn bản ghi chưa bị xóa mềm!');
        }
        return redirect()->route('categories.index');
    } catch (\Exception $e) {
        Log::error($e->getMessage());
        toast('Có Lỗi Xảy Ra!', 'error', 'top-right');
        return redirect()->route('categories.index');
    }
}
    public function search(Request $request){
        $search = $request->input('name');
        if(!$search){
            return redirect()->route('categories.index');
        }
        $categories = Category::where('name','LIKE','%'.$search.'%')->paginate(5);
        return view('admin.categories.index',compact('categories'));
      }
      
}