<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
    
            [
                'name' => 'Nước hoa Guess Dare For Men EDT',
                'price' => 1990000,
                'amount' => 3,
                'category_id' => 4,
                'description' => 'Mùi hương nam tính của bộ sưu tập Guess đại diện cho tự do, ham muốn tình dục và sự phiêu lưu. Đây cũng là mùi hương mới nhất của hãng Guess so với thời điểm hiện tại.',
                'image' => 'anh'
                // 'created_at' => '2022-12-17 04:02:10',
            ],
         
            [
                'name' => 'Nước hoa CK Everyone EDT',
                'price' => 1584000,
                'amount' => 7,
                'category_id' => 2,
                'description' => 'Calvin Klein vừa cho ra mắt đứa con “sinh sau đẻ muộn” CK Free Everyone vào tháng 2 năm 2020.',
                'image' => 'anh'
                // 'created_at' => '2022-12-17 04:02:10',
            ],

            [
                'name' => 'Nước hoa nữ Salvatore Ferragamo Savane Di Seta EDP',
                'price' => 1190000,
                'amount' => 10,
                'category_id' => 3,
                'description' => 'SAVANE DI SETA là hương thơm mới ra mắt trong năm 2021 của thương hiệu đình đám Salvatore Ferragamo.',
                'image' => 'anh'
                // 'created_at' => '2022-12-17 04:02:10',
            ],

            [
                'name' => 'Nước hoa Carolina Herrera Bad Boy',
                'price' => 1790000,
                'amount' => 9,
                'category_id' => 4,
                'description' => 'Nối tiếp sự thành công vang dội của mẫu Guốc Good Girl thì năm 2019 này hãng đã ra mắt mùi hương dành cho các chàng với tên gọi Bad Boy. ',
                'image' => 'anh'
                // 'created_at' => '2022-12-17 04:02:10',
            ],

            [
                'name' => 'Iphone14',
                'price' => 34000000,
                'amount' => 5,
                'category_id' => 1,
                'description' => 'Iphone 14 pro chụp hình vẫn là đẹp',
                'image' => 'anh'
                // 'created_at' => '2022-12-17 04:02:10',
            ],

            [
                'name' => 'Nước hoa Euphoria for woman',
                'price' => 34000000,
                'amount' => 12,
                'category_id' => 3,
                'description' => 'Iphone 14 pro chụp hình vẫn là đẹp',
                'image' => 'anh'
                // 'created_at' => '2022-12-17 04:02:10',
            ],

            [
                'name' => 'Nước hoa Versace Dylan Blue Pour Femme',
                'price' => 1390000,
                'amount' => 5,
                'category_id' => 1,
                'description' => 'Tập đoàn Calvin Klein là tiền thân của công ty  Calvin Klein được thành lập vào cuối những năm 1960',
                'image' => 'anh'
                // 'created_at' => '2022-12-17 04:02:10',
            ],
          
            [
                'name' => 'Nước hoa Lady Million',
                'price' => 12900000,
                'amount' => 7,
                'category_id' => 6,
                'description' => 'Lady Million là dòng sản phẩm nổi tiếng nhất của Paco Rabbane trong vài năm gần đây.',
                'image' => 'anh'
                // 'created_at' => '2022-12-17 04:02:10',
            ],
        ]);
    }
}
