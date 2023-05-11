<?php
namespace App\Repositories\Eloquents;

use App\Models\Category;
use App\Repositories\Interfaces\CategoryRepositoryInterface;
use App\Repositories\Eloquents\EloquentRepository;

class CategoryRepository extends EloquentRepository implements CategoryRepositoryInterface
{
    public function getModel()
    {
        return Category::class;
    }

    /*
    - Do CategoryRepository đã kế thừa EloquentRepository nên không cần triển khai
    các phương thức trừu tượng của CategoryRepositoryInterface
    - Có thể ghi đè phương thức ở đây
    - Nếu muốn thêm phương thức mới cần:
        + Khai báo thêm ở CategoryRepositoryInterface
        + Triển khai lại ở đây
    - Ví dụ: paginate() không có sẵn trong RepositoryInterface, để thêm chúng ta thêm:
        + Khai báo paginate() ở CategoryRepositoryInterface
        + Triển khai lại ở CategoryRepository
    */
    public function paginate($request)
    {
        $result = $this->model->paginate();
        return $result;
    }

    public function all($request)
    {
        if (!empty($request->key)) {
            $search = $request->key;
            $categories = $categories->Search($search);
        }
        return Category::orderBy('id', 'DESC')->paginate(2);
    }
    public function find($id)
    {
        $category = Category::find($id);
        return $category;
    }
    public function store($request)
    {
        $category = new Category();
        $category->name = $request->name;
        // return $category->save();
    }
    public function update($request, $id)
    {
        $category = new Category();
        $category = Category::find($id);
        $category->name = $request->name;
        return $category->save();
    }
    public function getTrashed()
    {
        $query = $this->model->onlyTrashed(); // Khởi tạo biến $query với danh sách các bản ghi đã xóa
        $query->orderBy('id', 'desc'); // Sắp xếp theo ID giảm dần
        $categories = $query->paginate(5); // Phân trang kết quả
        return $categories; // Trả về danh sách thể loại đã xóa
    }
    public function restore($id)
    {
        $category = $this->model->withTrashed()->findOrFail($id);
        return  $category->restore();
    }
    public function deleteforever($id)
    {
        $category = $this->model->onlyTrashed()->findOrFail($id);
        return $category->deleteforever();
    }
    public function search($data){
        return $this->model->search($data);
    }
}