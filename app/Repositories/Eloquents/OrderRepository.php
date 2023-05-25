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
        $query = $this->model
        ->select('orders.*', 'customers.name')
        ->join('customers', 'orders.customer_id', '=', 'customers.id');
        if ($request->customer_id) {
            $query->where('customer_id', '=', $request->customer_id);
        }
        if ( $request->id ) {
            $query->where('orders.id',$request->id);
        }
        if ( $request->name ) {
            $query->where('customers.name','like','%'.$request->name.'%');
        }
        return $query->orderBy('orders.id','DESC')->paginate(5);
    }
    public function find($id){
        return $this->model->findOrFail($id);
    }
    
    public function search($data){
        return $this->model->search($data);
    }
  
}