<?php


namespace App\Exports;

use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Collection;

class ProductExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DB::table('products')->join('categories', 'products.category_id', '=', 'categories.id')
        ->select('products.name', 'products.price','products.amount',
        'products.created_at', 'products.updated_at','categories.name as cateName'
        )->get();
    }
    public function headings() :array
    {
    	return ["Tên Sản Phẩm", "Giá(VND)", "Số Lượng","Ngày Nhập","Ngày Sửa","Danh Mục"];
    }

}
