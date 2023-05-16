<?php

namespace App\Exports;

use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class OrderExport implements FromCollection,WithHeadings
{
    public function collection()
{/////////join
    return DB::table('orders')
    ->join('customers', 'orders.customer_id', '=', 'customers.id')
    ->select('customers.name', 'customers.address', 'customers.phone','orders.created_at'
    )->get();
}
public function headings() :array
{
    ////////các cột của bảng excel
    return ["Tên Sản Phẩm","Địa Chỉ", "SĐT","Ngày mua"];
}
}

// <?php

// namespace App\Exports;

// use App\Models\Order;
// use Maatwebsite\Excel\Concerns\FromCollection;
// use Maatwebsite\Excel\Facades\Excel;
// use Maatwebsite\Excel\Concerns\WithHeadings;
// class OrdersExport implements FromCollection,WithHeadings
// {
//     /**
//     * @return \Illuminate\Support\Collection
//     */
//     public function collection()
//     {
//         return Order::select('id','name_customer','phone','total','created_at','updated_at')->get();
//     }
//     public function headings() :array {
//         return ["Tên Sản Phẩm","Địa Chỉ", "SĐT","Ngày mua"];
//     }
//     public function exportOrder(){
//         return Excel::download(new OrdersExport, 'Xuat_Don_Dat_Hang_'.date("d_m_Y").'.xlsx');
//     }
// }
