<?php

namespace App\Http\Controllers;

use App\Exports\OrderExport;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Services\Interfaces\OrderServiceInterface;
use GuzzleHttp\Psr7\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Facades\Excel;



class OrderController extends Controller
{
    protected $orderService;

    public function __construct(OrderServiceInterface $orderService)
    {
        $this->orderService = $orderService;
    }
    //
    public function index(Request $request)
    {
        $this->authorize('viewAny', Order::class);

            $orders = $this->orderService->all($request);
            return view('admin.orders.index', compact('orders'));
    }


    public function show(string $id)
    {
        // $this->authorize('view', Order::class);
        // $order = $this->orderService->find($id);
        $order = Order::find($id);
        $items = DB::table('orderdetail')
            ->join('orders', 'orderdetail.order_id', '=', 'orders.id')
            ->join('products', 'orderdetail.product_id', '=', 'products.id')
            ->select('products.*', 'orderdetail.*', 'orders.id')
            ->where('orders.id', '=', $id)
            ->get();
        
        // Kiểm tra và xử lý khi không tìm thấy đơn hàng
        if (!$order) {
            // Xử lý khi không tìm thấy đơn hàng
        }
        
        return view('admin.orders.order_detail', compact('items', 'order'));
    }

public function find($id)
{
    // $this->authorize('view', Order::class);
    $order = $this->orderService->find($id);
    $order_Details = $order->orderDetails;
    $params = [
        'order' => $order,
        // 'orderdetail' => $order_detail,
    ];  
    return view('admin.orders.order_detail',$params);
}

public function exportOrder()
    {
        return Excel::download(new OrderExport, 'orders.xlsx');
    }
}