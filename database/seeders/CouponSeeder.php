<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use DB;

class CouponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('coupon')->insert([
            'coupon_code'=> 'Payment2per',
            'discount_amount'=>'2',
            'discount_type'=>'payment',
            'expiration_date'=>date('Y-m-d H:i:s',strtotime("+3 Months")),
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ]);
    }
}
