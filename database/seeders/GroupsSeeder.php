<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class GroupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groups')->insert([
            ['name'=>"Ke Toan"],
            ['name'=>"Giam Doc"],
            ['name'=>"Nhan Su"]
            
        ]);  
        }
}
