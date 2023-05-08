<?php
namespace App\Repositories\Eloquents;

use App\Models\Order;
use App\Repositories\Interfaces\OrderRepositoryInterface;
use App\Repositories\Eloquents\EloquentRepository;

class OrderRepository extends EloquentRepository implements OrderRepositoryInterface
{
    public function getModel()
    {
        return Order::class;
    }
    public function all($request)
    {
        $orders = $this->model->select('*');
        return $orders->orderBy('id', 'DESC')->paginate(5);
    }
    public function paginate($request)
    {
        $result = $this->model->paginate();
        return $result;
    }

    public function find($id){
        return $this->model->findOrFail($id);
    }
    public function search($data){
        return $this->model->search($data);
    }
}