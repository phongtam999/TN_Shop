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
        // echo __METHOD__;
        // die();
        // dd($this->model);
        return Product::orderBy('id', 'DESC')->paginate(2);
    }
    public function find($id)
    {
        $product = Product::find($id);
        return $product;
    }
    public function store($request)
    {
        $product = new Product();
        $product->name = $request->name;
        return $product->save();
    }
    public function update($request, $id)
    {
        $product = new Product();
        $product = Product::find($id);
        $product->name = $request->name;
        return $product->save();
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
        $product = $this->model->withTrashed()->findOrFail($id);
        return  $product->restore();
    }
    public function deleteforever($id)
    {
        $product = $this->model->onlyTrashed()->findOrFail($id);
        return $product->deleteforever();
    }
}