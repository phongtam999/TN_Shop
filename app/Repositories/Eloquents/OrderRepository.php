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
        $query = $this->model->select('*');
        if ( $request->customer_id ) {
            $query->where('customer_id','like','%'.$request->customer_id.'%');
        }
        if ( $request->id ) {
            $query->where('id',$request->id);
        }
        return $query->orderBy('id','DESC')->paginate(5);
    }
    public function find($id){
        return $this->model->findOrFail($id);
    }
    
    public function search($data){
        return $this->model->search($data);
    }
  
}