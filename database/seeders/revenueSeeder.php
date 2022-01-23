<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class revenueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('revenues')->insert([
           ['id' => 1, 'startTime' => '2021-04-27', 'endTime' => '2021-04-30'],
            ['id' => 2, 'startTime' => '2021-05-01', 'endTime' => '2021-05-30'],
            ['id' => 3, 'startTime' => '2021-06-01', 'endTime' => '2021-06-30'],
            ['id' => 4, 'startTime' => '2021-07-01', 'endTime' => '2021-07-30'],
            ['id' => 5, 'startTime' => '2021-08-01', 'endTime' => '2021-08-30'],
            ['id' => 6, 'startTime' => '2021-09-01', 'endTime' => '2021-09-30'],
            ['id' => 7, 'startTime' => '2021-10-01', 'endTime' => '2021-10-30'],
        ]);
    }
}
