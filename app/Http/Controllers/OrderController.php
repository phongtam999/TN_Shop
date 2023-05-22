<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Exports\OrderExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;
use App\Services\Interfaces\OrderServiceInterface;

class OrderController extends Controller
{
    protected $orderService;

    public function __construct(OrderServiceInterface $orderService)
    {
        $this->orderService = $orderService;
    }

public function index(Request $request)
{
// $this->authorize('viewAny', Order::class);
$items = $this->orderService->all($request);
return view('admin.orders.index', compact('items'));

}


public function show(string $id)
{
$this->authorize('view', Order::class);
$items=DB::table('orderdetail')
->join('orders','orderdetail.order_id','=','orders.id')
->join('products','orderdetail.product_id','=','products.id')
->select('products.*', 'orderdetail.*','orders.id')
->where('orders.id','=',$id)->get();
// dd($items);
return view('admin.orders.order_detail',compact('items'));
}

public function find($id)
{
    // $this->authorize('view', Order::class);
    $order = $this->orderService->find($id);
    $order_Details = $order->orderDetails;
    $params = [
        'order' => $order,
        'orderdetail' => $order_detail,
    ];  
    return view('admin.orders.order_detail',$params);
}

public function exportOrder()
    {
        return Excel::download(new OrderExport, 'orders.xlsx');
    }
}