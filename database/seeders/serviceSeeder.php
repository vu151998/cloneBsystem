<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class serviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
           ['id'=> 1,'name' => 'thay lop xe','price' => 200000,'description' => 'dich vu thay lop sieu re','img' =>'lop.jpg'],
            ['id'=> 2,'name' => 'thay ac quy','price' => 2000000,'description' => 'dich vu thay ac quy sieu re','img' => 'acquy.jpg'],
            ['id'=> 3,'name' => 'rua xe','price' => 100000,'description' => 'dich vu rua xe dam bao xe sach, dep','img' => 'ruaxe.jpg'],
            ['id'=> 4,'name' => 'bom lop xe','price' => 50000,'description' => 'dich vu bom lop sieu re','img' => 'bomlopxe.jpg'],
            ['id'=> 5,'name' => 'son xe','price' => 200000,'description' => 'dich vu son xe dep','img' => 'sonxe.jpg'],
        ]);
    }
}
