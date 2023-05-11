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
        // $this->authorize('viewAny', Category::class);
        $categories = $this->categoryService->all($request);
        $categories = Category::paginate(5);
        return view('admin.categories.index', compact('categories'));
    }

  
    public function create( Request $request)
    {
        $this->authorize('create', Category::class);
        $this->categoryService->store($request);
        $categories = Category::all();
        return view('admin.categories.create',compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
     
        $this->categoryService->store($request);
        $categories = new Category();
        $categories->name = $request->name;
        $categories->save();
        alert()->success('Thêm danh mục thành công!');
        return redirect()->route('categories.index');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $this->authorize('update', Category::class);
        $item = $this->categoryService->find($id);
        $categories = Category::find($id);
        return view('admin.categories.edit',compact('categories'));
    }

    public function update(UpdateCategoryRequest $request,$id)
    {
        $this->categoryService->update($request, $id);
        $categories = Category::find($id);
        $categories->name = $request->name;
        $categories->save();
        alert()->success('Cập nhật thương hiệu thành công!');

        return redirect()->route('categories.index');
    }

    public function destroy(string $id)
    {
        $this->authorize('delete', Category::class);
        $category = Category::find($id);
        if (!$category) {
            return redirect()->back()->with('error', 'Không tìm thấy thương hiệu!');
        }
        $this->categoryService->destroy($id);
        $category->delete();
        alert()->success('Thương hiệu đã được di chuyển vào thùng rác!');
        return redirect()->route('categories.index');
    }
    public function trash()
    {
        $categories = $this->categoryService->getTrashed();
        $softs = Category::onlyTrashed()->get();
        return view('admin.categories.trash', compact('softs'));
    }
    public function restore($id)
    {
        $this->authorize('restore',Category::class);
        try {
            $this->categoryService->restore($id);
            $softs = Category::withTrashed()->find($id);
            $softs->restore();
            alert()->success('Khôi Phục Danh Mục Thành Công!');
            return redirect()->route('categories.index');
        } catch (\exception $e) {
            Log::error($e->getMessage());
            toast('Có Lỗi Xảy Ra!', 'error', 'top-right');
            return redirect()->route('categories.index');
        }
    }
    public function deleteforever($id)
{
    $this->authorize('deleteforever', Category::class);
    try {
        $category = Category::withTrashed()->find($id);
        if ($category->trashed()) {
            $category->deleteforever();
            alert()->success('Xóa Vĩnh Viễn Thành Công!');
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