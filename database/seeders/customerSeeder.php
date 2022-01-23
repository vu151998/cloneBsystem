<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class customerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
           ['id' => 1,'name' => 'Trần Trọng Nghĩa','phone' => '06519429592365','email' => 'nghiatt@gmail.com'],
            ['id' => 2,'name' => 'Vũ Quang Đạo','phone' => '06519429592399','email' => 'daovq@gmail.com'],
            ['id' => 3,'name' => 'Bùi Ngọc Sơn','phone' => '03219429592365','email' => 'sonbn@gmail.com'],
            ['id' => 4,'name' => 'Nguyễn Thị Ngọc Ánh','phone' => '06519968592365','email' => 'anhntn@gmail.com'],
            ['id' => 5,'name' => 'Trần Minh Huế','phone' => '0986603045','email' => 'huetm@gmail.com'],
            ['id' => 6,'name' => 'Vũ Thị Nguyệt','phone' => '0347559645','email' => 'nguyetvt@gmail.com'],
            ['id' => 7,'name' => 'Trần Gia Long','phone' => '0915647033','email' => 'longtg@gmail.com'],
            ['id' => 8,'name' => 'Phạm Đức Hoàng','phone' => '033571686','email' => 'hoangpd@gmail.com'],
            ['id' => 9,'name' => 'Lê ÁNh Tuyết','phone' => '0182693314','email' => 'tuyetla@gmail.com'],
            ['id' => 10,'name' => 'Trần Văn Dũng','phone' => '0635937622','email' => 'dungtv@gmail.com'],
        ]);
    }
}
