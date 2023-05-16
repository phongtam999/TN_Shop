<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('customers')->insert([
            [
                'name' => 'Nguyễn Văn Nho',
                'email' => 'nho2202@gmail.com',
                'gender' => 'nam',
                'phone' => '0987654865',
                'address' => 'Triệu trung - Triệu Phong - Quảng Trị',
                'image' => 'anh',
                'password' => bcrypt('123456') 
            ],

            [
                'name' => 'Nguyễn Đình Phong',
                'email' => 'phong1997@gmail.com',
                'gender' => 'nam',
                'phone' => '0961511688',
                'address' => 'Triệu trung- Triệu Phong - Quảng Trị',
                'image' => 'anh',
                'password' => bcrypt('123456') 
            ],

            [
                'name' => 'Trần Thị Huyền',
                'email' => 'huyen2k@gmail.com',
                'gender' => 'nu',
                'phone' => '0972415910',
                'address' => 'Lễ Môn - Gio Phong - Quảng Trị',
                'image' => 'anh',
                'password' => bcrypt('123456') 
            ],
            [
                'name' => 'Mai Xuân Cường',
                'email' => 'cuong12@gmail.com',
                'gender' => 'nam',
                'phone' => '0911987678',
                'address' => 'Cam Hiếu - Cam Lộ - Quảng Trị',
                'image' => 'anh',
                'password' => bcrypt('123456') 
            ],
            [
                'name' => 'Hoàng Xuân Thắng',
                'email' => 'thang2k2@gmail.com',
                'gender' => 'nam',
                'phone' => '0987090090',
                'address' => 'Khu phố 2 - Gio Linh - Quảng Trị',
                'image' => 'anh',
                'password' => bcrypt('123456') 
            ],
            [
                'name' => 'Trần Văn Trường',
                'email' => 'truong2k3@gmail.com',
                'gender' => 'nam',
                'phone' => '0947678567',
                'address' => 'Cam Hiếu - Cam Lộ - Quảng Trị',
                'image' => 'anh',
                'password' => bcrypt('123456') 
            ],
          
        ]);
    }
}
