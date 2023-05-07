<?php
namespace App\Repositories\Eloquents;

use App\Models\Product;
use App\Repositories\Interfaces\ProductRepositoryInterface;
use App\Repositories\Eloquents\EloquentRepository;

class ProductRepository extends EloquentRepository implements ProductRepositoryInterface
{
    public function getModel()
    {
        return Product::class;
    }

    /*
    - Do ProductRepository đã kế thừa EloquentRepository nên không cần triển khai
    các phương thức trừu tượng của ProductRepositoryInterface
    - Có thể ghi đè phương thức ở đây
    - Nếu muốn thêm phương thức mới cần:
        + Khai báo thêm ở ProductRepositoryInterface
        + Triển khai lại ở đây
    - Ví dụ: paginate() không có sẵn trong RepositoryInterface, để thêm chúng ta thêm:
        + Khai báo paginate() ở ProductRepositoryInterface
        + Triển khai lại ở ProductRepository
    */
    public function paginate($request)
    {
        $result = $this->model->paginate(2);
        return $result;
    }

    public function all($request)
    {
        // echo __METHOD__;
        // die();
        // dd($this->model);
        return Product::orderBy('id', 'DESC')->paginate(2);
    }
    public function find($id)
    {
        $category = Product::find($id);
        return $category;
    }
    public function store($request)
    {
        $category = new Product();
        $category->name = $request->name;
        return $category->save();
    }
    public function update($request, $id)
    {
        $category = new Product();
        $category = Product::find($id);
        $category->name = $request->name;
        return $category->save();
    }
    // public function getTrashed()
    // {
    //     $query = $this->model->onlyTrashed();
    //     $query->orderBy('id', 'desc');
    //     $category = $query->paginate(5);
    //     return $category;
    // }
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
}