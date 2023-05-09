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
$orders = $this->orderService->all($request);
$items = Order::paginate(5);
return view('admin.orders.index', compact('items'));
}
/**
* Show the form for creating a new resource.
*/
public function create()
{
//
}
/**
* Store a newly created resource in storage.
*/
public function store(Request $request)
{
//
}
/**
* Display the specified resource.
*/
public function show(string $id)
{
$items=DB::table('orderdetail')
->join('orders','orderdetail.order_id','=','orders.id')
->join('products','orderdetail.product_id','=','products.id')
->select('products.*', 'orderdetail.*','orders.id')
->where('orders.id','=',$id)->get();
// dd($items);
return view('admin.orders.order_detail',compact('items'));
}
/**
* Show the form for editing the specified resource.
*/
public function edit(string $id)
{
$order = $this->orderService->find($id);
$orders = Order::find($id);
$param = [
'order' => $order
];
return view('admin.orders.edit',$param);
}
/**
* Update the specified resource in storage.
*/
public function update(Request $request, string $id)
{
$order = new Order();
$order->name = $request->name;
$order->note = $request->note;
$order->address = $request->address;
$order->phone = $request->phone;
$order->quantity = $request->quantity;
$order->save();
return redirect()->route('order.index');
}

public function destroy(string $id)
{
$order = Order::findOrFail($id);
$order->forceDelete();
return redirect()->route('order.index');
}
public function search(Request $request){
$search = $request->input('search');
if(!$search){
return redirect()->route('orders.index');
}
$items = Order::join('customers', 'orders.customer_id', '=', 'customers.id')
->where('name','LIKE','%'.$search.'%')
->get();
// dd($items);
return view('admin.orders.index',compact('items'));
}
public function exportOrder()
    {
        return Excel::download(new OrderExport, 'orders.xlsx');
    }
}