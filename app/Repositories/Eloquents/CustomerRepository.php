<?php

namespace App\Repositories\Eloquents;

use App\Models\Customer;
use App\Repositories\Interfaces\CustomerRepositoryInterface;
use App\Repositories\Eloquents\EloquentRepository;

class CustomerRepository extends EloquentRepository implements CustomerRepositoryInterface
{
    public function getModel()
    {
        return Customer::class;
    }

    public function paginate($request)
    {
        $result = $this->model->paginate();
        return $result;
    }

    public function all($request)
    {
        $query = $this->model->select('*')->orderBy('id', 'DESC');
        $query->orderBy('id', 'DESC');
        // $query =  $this->model->query(true);
        // $query->orderBy('id', 'DESC');
        // $query = Customer::query(true);
        // $query->orderBy('id', 'DESC');
        // if (!empty($orderby)) {
        //     $query->orderBy('id', $orderby);
        // }
        if (!empty($name)) {
            $query->where('name', 'like', '%' . $name . '%');
        }
        if ($request->search) {
            $search = $request->search;
            $query->where('name', 'LIKE', '%'.$search.'%');
        }
        return $query->paginate(5); 

}

public function store($request)
{
    $customer = new $this->model;
    $customer->name = $request->name;
    $customer->name = $request->email;
    $customer->name = $request->gender;
    $customer->name = $request->phone;
    $customer->name = $request->address;
    $fieldName = 'image';
    if ($request->hasFile($fieldName)) {
        $fullFileNameOrigin = $request->file($fieldName)->getClientOriginalName();
        $fileNameOrigin = pathinfo($fullFileNameOrigin, PATHINFO_FILENAME);
        $extenshion = $request->file($fieldName)->getClientOriginalExtension();
        $fileName = $fileNameOrigin . '-' . rand() . '_' . time() . '.' . $extenshion;
        $path = 'storage/' . $request->file($fieldName)->storeAs('public/images', $fileName);
        $path = str_replace('public/', '', $path);
        $customer->image = $path;
    }
    return $customer->save();
}

public function update($request, $id)
{
    $customer = $this->model->find($id);
    $customer->name = $request->name;
    $customer->name = $request->email;
    $customer->name = $request->gender;
    $customer->name = $request->phone;
    $customer->name = $request->address;
    $fieldName = 'image';
    if ($request->hasFile($fieldName)) {
        $fullFileNameOrigin = $request->file($fieldName)->getClientOriginalName();
        $fileNameOrigin = pathinfo($fullFileNameOrigin, PATHINFO_FILENAME);
        $extenshion = $request->file($fieldName)->getClientOriginalExtension();
        $fileName = $fileNameOrigin . '-' . rand() . '_' . time() . '.' . $extenshion;
        $path = 'storage/' . $request->file($fieldName)->storeAs('public/images', $fileName);
        $path = str_replace('public/', '', $path);
        $customer->image = $path;
    }
    return $customer->save();
}
public function search($data){
    return $this->model->search($data);
}

}