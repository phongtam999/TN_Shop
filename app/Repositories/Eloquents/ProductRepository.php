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
        $result = $this->model->paginate();
        return $result;
    }
    public function all($request)
    {
        $query = $this->model->select('*');
        if ( $request->name ) {
            $query->where('name','like','%'.$request->name.'%');
        }
        if ( $request->id ) {
            $query->where('id',$request->id);
        }
        if ($request->category_id) {
                    $query->where('category_id', '=', $request->category_id);
              }
        return $query->orderBy('id','DESC')->paginate(4);
    }

    public function find($id,$withTrashes = false)
    {
        $query = $this->model->query(true);
        if($withTrashes){
            $query->withTrashed();
        }
        $product =  $query->find($id);
        return $product;
    }

    public function store($request)
    {
        $product = new $this->model;
        $product->name = $request->name;
        $product->amount = $request->amount;
        $product->price = $request->price;
        $product->description = $request->description; 
        $product->category_id = $request->category_id; 
        $fieldName = 'image';
        if ($request->hasFile($fieldName)) {
            $fullFileNameOrigin = $request->file($fieldName)->getClientOriginalName();
            $fileNameOrigin = pathinfo($fullFileNameOrigin, PATHINFO_FILENAME);
            $extenshion = $request->file($fieldName)->getClientOriginalExtension();
            $fileName = $fileNameOrigin . '-' . rand() . '_' . time() . '.' . $extenshion;
            $path = 'storage/' . $request->file($fieldName)->storeAs('public/assets/images/user', $fileName);
            $path = str_replace('public/', '', $path);
            $product->image = $path;
        }
        return $product->save();
    }
    
    public function update($request, $id)
    {
        
        $product = $this->model::find($id);
        $product->name = $request->name;
        $product->amount = $request->amount;
        $product->price = $request->price;
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
        return $product->save();
    }
  

    public function getTrashed()
    {
        $query = $this->model->onlyTrashed(); // Khởi tạo biến $query với danh sách các bản ghi đã xóa
        $query->orderBy('id', 'desc'); // Sắp xếp theo ID giảm dần
        $product = $query->paginate(5); // Phân trang kết quả
        return $product; // Trả về danh sách thể loại đã xóa
    }


    public function restore($id)
    {
        $product = $this->model->withTrashed()->findOrFail($id);
        return $product->restore();
    }

    public function deleteforever($id)
    {
        $product = $this->model->onlyTrashed()->findOrFail($id);
        return $product->deleteforever();
    }
    public function search($data){
        return $this->model->search($data);
    }
}
