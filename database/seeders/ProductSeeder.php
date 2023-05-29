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
                'name' => 'Nước hoa Euphoria for woman',
                'price' => 34000000,
                'amount' => 12,
                'category_id' => 3,
                'description' => 'Iphone 14 pro chụp hình vẫn là đẹp',
                'image' => 'anh'
            ],

            [
                'name' => 'Nước hoa Versace Dylan Blue Pour Femme',
                'price' => 1390000,
                'amount' => 5,
                'category_id' => 1,
                'description' => 'Tập đoàn Calvin Klein là tiền thân của công ty  Calvin Klein được thành lập vào cuối những năm 1960',
                'image' => 'anh'
               
            ],
          
            [
                'name' => 'Nước hoa Lady Million',
                'price' => 12900000,
                'amount' => 7,
                'category_id' => 6,
                'description' => 'Lady Million là dòng sản phẩm nổi tiếng nhất của Paco Rabbane trong vài năm gần đây.',
                'image' => 'anh'
            
            ],

            [
                'name' => 'Guess Seductive Red Femme EDT 75ml',
                'price' => 1450000,
                'amount' => 12,
                'category_id' => 1,
                'description' => 'Guess Seductive Red W mang một hương thơm mới quyến rũ, đầy đam mê, gợi cảm và tự tin. Guess Seductive Red W nổi bật với đậu Tonka và vani ở hương cuối mang đến sự gợi cảm và ấm áp nhẹ nhàng.',
                'image' => 'anh'
            
            ],

            [
                'name' => 'Guess Seductive Kiss Femme EDT 75ml',
                'price' => 1750000,
                'amount' => 9,
                'category_id' => 1,
                'description' => 'Guess Seductive Kiss Women được mở đầu là hương vị phúc bồn tử, quả lê và bưởi chùm ngọt mát ngay đầu môi hệt như cái cách hai bờ môi vừa chạm nhẹ vào nhau, có dòng điện nhỏ chạy qua người tê tái đến ngây dại.',
                'image' => 'anh'
            
            ],

            [
                'name' =>'Burberry My Burberry Black',
                'price' => 2650000,
                'amount' => 12,
                'category_id' => 4,
                'description' => 'Lady Million là dòng sản phẩm nổi tiếng nhất của Paco Rabbane trong vài năm gần đây.',
                'image' => 'anh'
            
            ],

            [
                'name' => 'Burberry Mr Burberry Eau De Parfum',
                'price' => 22500000,
                'amount' => 10,
                'category_id' => 4,
                'description' => 'Mr Burberry dành cho nam giới sẽ là cái tên tiếp theo gia nhập vào bộ sưu tập My Burberry của Burberry. ',
                'image' => 'anh'
            
            ],

            [
                'name' => 'Hermes Twilly d’Hermes Eau Poivree',
                'price' => 650000,
                'amount' => 21,
                'category_id' => 5,
                'description' => 'Twilly d’Hermès Eau Poivrée là bản tiếp theo của Twilly d’Hermès, mùi hương đã đạt được rất nhiều giải thưởng ra đời năm 2017. ',
                'image' => 'anh'
            
            ],

            [
                'name' => 'Hermes Un Jardin Sur Le Nil Unisex',
                'price' => 1650000,
                'amount' => 11,
                'category_id' => 5,
                'description' => 'Hermes Un Jardin Sur Le Nil Unisex mang trên đặc điểm của loại nước hoa có mùi hương độc đáo và mạnh mẽ đi cùng với cảm giác tươi mát vô cùng dễ chịu.',
                'image' => 'anh'
            
            ],

            [
                'name' => 'Dior Sauvage Parfum',
                'price' => 4750000,
                'amount' => 13,
                'category_id' => 3,
                'description' => 'Dior Sauvage Parfum được nhiều người biết biết đến là phiên bản tiếp nối thành công vang dội của năm 2015 trước đó. ',
                'image' => 'anh'
            
            ],

            [
                'name' => 'Dior Joy Eau De Parfum Woman 90ml',
                'price' => 3650000,
                'amount' => 22,
                'category_id' => 3,
                'description' => 'Nước hoa Dior Joy Eau De Parfum Woman mang hương hoa phương Đông dành cho phụ nữ, vừa ra mắt năm 2017 với thiết kế chai vô cùng bắt mắt',
                'image' => 'anh'
            
            ],
    
        ]);
    }
}
