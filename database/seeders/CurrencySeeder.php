<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CurrencySeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('currencies')->truncate();

    DB::table('currencies')->insert(
      [
        'code' => 'UZB',
        'symbol' => 'Sʻ',
        'is_main' => 1,
        'rate' => 1,
        // 'updated_at' => Carbon::now(),
        // 'created_at' => Carbon::now(),
      ]
    );
    DB::table('currencies')->insert([
      'code' => 'RUB',
      'symbol' => '₽',
      'is_main' => 0,
      'rate' => 150,
      // 'updated_at' => Carbon::now(),
      // 'created_at' => Carbon::now(),
    ]);
    DB::table('currencies')->insert([
      'code' => 'USD',
      'symbol' => '$',
      'is_main' => 0,
      'rate' => 1135,
      // 'updated_at' => Carbon::now(),
      // 'created_at' => Carbon::now(),
    ]);
    DB::table('currencies')->insert([
      'code' => 'EUR',
      'symbol' => '€',
      'is_main' => 0,
      'rate' => 107,
      // 'updated_at' => Carbon::now(),
      // 'created_at' => Carbon::now(),
    ]);
  }
}
