<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class repairStaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('repair_staffs')->insert([
           ['id' => 1, 'name' => 'Tran Anh Minh', 'phoneNumber' => '05284614318', 'role' => 1,'email' => 'minh@gmail.com',
               'address' => 'Yen Bai', 'salary' => 5000000,'status' => 1],
            ['id' => 2, 'name' => 'Le Anh Phuc', 'phoneNumber' => '06592946184', 'role' => 1,'email' => 'phuc@gmail.com',
                'address' => 'Ha Noi', 'salary' => 5000000, 'status' => 2],
            ['id' => 3, 'name' => 'Tran Trong nghia', 'phoneNumber' => '0659131889', 'role' => 1,'email' => 'nghia@gmail.com',
                'address' => 'Bac Ninh', 'salary' => 5000000, 'status' => 1],
            ['id' => 4, 'name' => 'Tran Van Trong', 'phoneNumber' => '06354828217', 'role' => 1, 'email' => 'trong@gmail.com',
                'address' => 'Ha Noi', 'salary' => 5000000, 'status' => 2],
            ['id' => 5, 'name' => 'Tran van Dao', 'phoneNumber' => '06987862875', 'role' => 1, 'email' => 'dao@gmail.com',
                'address' => 'Ha Noi', 'salary' => 5000000, 'status' => 1],
        ]);
    }
}
