<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\Customer;
use App\Models\Product;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $totalPrice  =  Order::pluck('total')->sum();
        $totalOrders  =  Order::pluck('id')->count();
        $totalCustomer  =  Customer::pluck('id')->count();
        $totalProduct = Product::pluck('id')->count();
        $params = [
            'totalPrice' => $totalPrice,
            'totalOrders' => $totalOrders,
            'totalCustomer' => $totalCustomer,
            'totalProduct' => $totalProduct,
        ];
        return view('admin.includes.main', $params);
    }
}
