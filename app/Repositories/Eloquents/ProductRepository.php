<?php

namespace App\Repositories\Eloquents;

use App\Models\Product;
use App\Repositories\Interfaces\ProductRepositoryInterface;
use App\Repositories\Eloquents\EloquentRepository;
use Illuminate\Http\Request;

class ProductRepository extends EloquentRepository implements ProductRepositoryInterface
{
    public function getModel()
    {
        return Product::class;
    }

    public function paginate($request)
    {
        $result = $this->model->paginate(2);
        return $result;
    }

    public function all($request)
    {
        return Product::orderBy('id', 'DESC')->paginate(2);
    }

    public function find($id)
    {
        return Product::find($id);
    }

    public function store($data)
    {
        $product = new Product();
        $product->name = $data['name'];
        $product->amount = $data['amount'];
        $product->price = $data['price'];
        $product->description = $data['description']; 
        $product->category_id = $data['category_id']; 

        $product->image = $data['image'];// Thêm dòng này để cung cấp giá trị cho trường description
        $product->save();
    
        return $product;
    }
    

    public function update($request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->save();
        return $product;
    }

    public function getTrashed()
{
    return $this->model->onlyTrashed()->orderBy('id', 'desc')->paginate(5);
}


    public function restore($id)
    {
        $product = $this->model->withTrashed()->findOrFail($id);
        return $product->restore();
    }

    public function deleteforever($id)
    {
        $product = $this->model->onlyTrashed()->findOrFail($id);
        return $product->forceDelete();
    }
}
