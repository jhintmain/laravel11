<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class MemberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=0; $i<100; $i++){
            $id = date('YmdHis').str_pad($i, 2, '0', STR_PAD_LEFT);
            DB::table('member')->insert([
                'name' => 'John-'.$id,
                'email' => 'John-'.$id.'@gmail.com',
                'address' => '서울시 서초구 방배동 107 디엠타워 3관',
            ]);
        }
    }
}
