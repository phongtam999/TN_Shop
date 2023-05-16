<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('orders')->insert([
            [
                'customer_id' => '1',
                'total'=> 15000,
                'date_at' => '2003/11/11',
                'date_ship'=>'2003/11/18',
                'note'=>'giao hàng trước 18h'
            ],
          
        ]);
    }
}
