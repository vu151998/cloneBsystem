<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class orderProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_products')->insert([
           ['id' => 1, 'product_id' => 1008705564,
               'salePrice' => 4600000,'orderDate' => '2021-04-27','quantity' => 1,
               'note' => 'cang nhanh cang tot', 'status' => 1],
            ['id' => 2,  'product_id' => 1008705569,
                'salePrice' => 3800000,'orderDate' => '2021-04-28','quantity' => 1,
                'note' => 'cang nhanh cang tot', 'status' => 1],
            ['id' => 3, 'product_id' => 1008705571,
                'salePrice' => 3800000,'orderDate' => '2021-05-01','quantity' => 1,
                'note' => 'cang nhanh cang tot', 'status' => 1],
            ['id' => 4,  'product_id' => 1008705632,
                'salePrice' => 4600000,'orderDate' => '2021-05-05','quantity' => 1,
                'note' => 'cang nhanh cang tot', 'status' => 1],
            ['id' => 5,  'product_id' => 1008705583,
                'salePrice' => 45000,'orderDate' => '2021-05-09','quantity' => 1,
                'note' => 'cang nhanh cang tot', 'status' => 1],
            ['id' => 6,  'product_id' => 1008705613,
                'salePrice' => 1990000,'orderDate' => '2021-05-18','quantity' => 1,
                'note' => 'cang nhanh cang tot', 'status' => 1],
            ['id' => 7,   'product_id' => 1008705562,
                'salePrice' => 250000,'orderDate' => '2021-06-02','quantity' => 1,
                'note' => 'cang nhanh cang tot', 'status' => 1],
        ]);
    }
}
