<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('products')->insert([
      [
        'name' => 'iPhone X 64GB',
        'code' => 'iphone_x 64',
        'description' => 'Отличный продвинутый телефон',
        'price' => 78700,
        'category_id' => 1,
        'image' => 'products/iphone_x.jpg',
      ],
      [
        'name' => 'iPhone XL',
        'code' => 'iphone_xl',
        'description' => 'Огромный продвинутый телефон',
        'price' => 92400,
        'category_id' => 1,
        'image' => 'products/iphone_x_silver.jpg',
      ],
      [
        'name' => 'iPhone XL 256GB',
        'code' => 'iphone_xl 256',
        'description' => 'Огромный продвинутый телефон',
        'price' => 92400,
        'category_id' => 1,
        'image' => 'products/iphone_x_silver.jpg',
      ],
      [
        'name' => 'HTC One S',
        'code' => 'htc_one_s',
        'description' => 'Зачем платить за лишнее? Легендарный HTC One S',
        'price' => 933400,
        'category_id' => 2,
        'image' => 'products/htc_one_s.png',
      ],
      [
        'name' => 'iPhone 5SE',
        'code' => 'iphone_5se',
        'description' => 'Отличный классический iPhone',
        'price' => 38400,
        'category_id' => 2,
        'image' => 'products/iphone_5.jpg',
      ],
      [
        'name' => 'Samsung Galaxy J6',
        'code' => 'samsung_j6',
        'description' => 'Современный телефон начального уровня',
        'price' => 68400,
        'category_id' => 2,
        'image' => 'products/samsung_j6.jpg',
      ],
      [
        'name' => 'Наушники Beats Audio',
        'code' => 'beats_audio',
        'description' => 'Отличный звук от Dr. Dre',
        'price' => 831400,
        'category_id' => 3,
        'image' => 'products/beats.jpg',
      ],
      [
        'name' => 'Наушники Beats Audio',
        'code' => 'beats_audio',
        'description' => 'Отличный звук от Dr. Dre',
        'price' => 812400,
        'category_id' => 3,
        'image' => 'products/beats.jpg',
      ],
      [
        'name' => 'Камера GoPro',
        'code' => 'gopro',
        'description' => 'Снимай самые яркие моменты с помощью этой камеры',
        'price' => 932400,
        'category_id' => 3,
        'image' => 'products/gopro.jpg',
      ],
      [
        'name' => 'Камера Panasonic HC-V770',
        'code' => 'panasonic_hc-v770',
        'description' => 'Для серьёзной видео съемки нужна серьёзная камера. Panasonic HC-V770 для этих целей лучший выбор!',
        'price' => 972400,
        'category_id' => 3,
        'image' => 'products/video_panasonic.jpg',
      ],
    ]);
  }
}
