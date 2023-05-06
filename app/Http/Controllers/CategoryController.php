<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Log;
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
        $categories = $this->categoryService->all($request);
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create( Request $request)
    {
        $this->categoryService->store($request);
        // $categories = Category::all();
        return view('admin.categories.create',compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        // $data = $request->except(['_token','_method']);

        // $this->categoryService->store($data);
        // return redirect()->route('categories.index');
        
        // $validated = $request->validate(
        //     [
        //         'name' => 'required',
        //     ],
        //     [
        //         'name.required' => 'Không được để trống phần này',
        //     ]
        //     // $.ajax(option)
        //     // alertify.success('Cập nhật thành công');

        // );
        $this->categoryService->store($request);
        $categories = new Category();
        $categories->name = $request->name;
        $categories->save();
        alert()->success('Thêm thể loại thành công!');
        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = $this->categoryService->find($id);
        // $categories = Category::find($id);
        return view('admin.categories.edit',compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request,$id)
    {
        $this->categoryService->update($request, $id);
        $categories = Category::find($id);
        $categories->name = $request->name;
        $categories->save();
        alert()->success('Cập nhật thể loại thành công!');

        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->categoryService->destroy($id);
        $category = Category::findOrFail($id);
        $category->Delete();
        alert()->success('Thể loại đã vào thùng rác!');
        return redirect()->route('category.index');
    }
    public function getTrashed()
    {
        $categories = $this->categoryService->getTrashed();
        // $softs = Category::onlyTrashed()->get();
        return view('admin.categories.getTrashed', compact('softs'));
    }
    public function restore($id)
    {
        try {
            $this->categoryService->restore($id);
            $softs = Category::withTrashed()->find($id);
            $softs->restore();
            alert()->success('Khôi Phục Thể Loại Thành Công!');
            return redirect()->route('category.index');
        } catch (\exception $e) {
            Log::error($e->getMessage());
            toast('Có Lỗi Xảy Ra!', 'error', 'top-right');
            return redirect()->route('category.index');
        }
    }
      //xóa vĩnh viễn
      public function deleteforever($id)
      {
          try {
            $this->authorize('deleteforever', Category::class);
              $softs = Category::withTrashed()->find($id);
              $softs->deleteforever();
            alert()->success('Xóa Vĩnh Viễn Thành Công!');
              return redirect()->route('category.index');
          } catch (\exception $e) {
              Log::error($e->getMessage());
              toast('Có Lỗi Xảy Ra!', 'error', 'top-right');
              return redirect()->route('category.index');
          }
      }
    public function search(Request $request){
        $search = $request->input('search');
        if(!$search){
            return redirect()->route('category.index');
        }
        $categories = Category::where('name','LIKE','%'.$search.'%')->paginate(2);
        return view('admin.categories.index',compact('categories'));
      }
}
