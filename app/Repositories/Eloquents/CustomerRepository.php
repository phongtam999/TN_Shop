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
        // $products = $query->paginate(3);
        // return $products;
        return $this->model->orderBy('id', 'DESC')->paginate(1);

    }
    // public function create($data){
    //     return $this->model->create($data);
    // }
    public function search($data){
        return $this->model->search($data);
    }

}