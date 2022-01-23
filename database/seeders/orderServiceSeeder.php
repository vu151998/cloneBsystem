<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class orderServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_services')->insert([
           ['id' => 1, 'revenue_id' => 4, 'customer_id' => 8, 'totalPrice' => 200000, 'workDate' => '2021-07-01',
               'note' => 'nhanh chong va tien loi', 'status' => 1],
            ['id' => 2, 'revenue_id' => 4, 'customer_id' => 9, 'totalPrice' => 100000, 'workDate' => '2021-07-01',
                'note' => 'nhanh chong va tien loi', 'status' => 1],
            ['id' => 3, 'revenue_id' => 3, 'customer_id' => 10, 'totalPrice' => 100000, 'workDate' => '2021-07-02',
                'note' => 'nhanh chong va tien loi', 'status' => 1],
            ['id' => 4, 'revenue_id' => 5, 'customer_id' => 11, 'totalPrice' => 400000, 'workDate' => '2021-08-01',
                'note' => 'nhanh chong va tien loi', 'status' => 1],
            ['id' => 5, 'revenue_id' => 5, 'customer_id' => 12, 'totalPrice' => 400000, 'workDate' => '2021-08-05',
                'note' => 'nhanh chong va tien loi', 'status' => 1],
            ['id' => 6, 'revenue_id' => 5, 'customer_id' => 13, 'totalPrice' => 50000, 'workDate' => '2021-08-10',
                'note' => 'nhanh chong va tien loi', 'status' => 1],
            ['id' => 7, 'revenue_id' => 6, 'customer_id' => 14, 'totalPrice' => 200000, 'workDate' => '2021-09-02',
                'note' => 'nhanh chong va tien loi', 'status' => 1],
            ['id' => 8, 'revenue_id' => 6, 'customer_id' => 15, 'totalPrice' => 400000, 'workDate' => '2021-09-09',
                'note' => 'nhanh chong va tien loi', 'status' => 1],
        ]);
    }
}
