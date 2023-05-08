<?php
namespace App\Services;


use App\Models\Order;
use App\Services\Interfaces\OrderServiceInterface;
use App\Repositories\Interfaces\OrderRepositoryInterface;

class OrderService implements OrderServiceInterface
{
    protected $orderRepository; 

    public function __construct(OrderRepositoryInterface $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }
    public function getModel()
    {
        return Order::class;
    }
    public function all($request)
    {
        return $this->orderRepository->all($request);
        // $orders = $this->model->select('*');
        // return $orders->orderBy('id', 'DESC')->paginate(5);
    }
    public function paginate($request){
        return $this->orderRepository->paginate($request);
    }

    public function find($id){
        return $this->model->findOrFail($id);
    }

    public function store($request){
        return $this->orderRepository->store($request);
    }
    public function update($request, $id){
        return $this->orderRepository->update($request,$id);
    }
    public function destroy($id){
        return $this->orderRepository->destroy($id);
    }
    public function search($data){
        return $this->model->search($data);
    }
  
}