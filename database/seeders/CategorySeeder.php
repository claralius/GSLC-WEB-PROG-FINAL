<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            "id"=>1,
            "category_name"=> "Action & Adventure"
        ]);

        DB::table('categories')->insert([
            "id"=>2,
            "category_name"=> "Biography"
        ]);

        DB::table('categories')->insert([
            "id"=>3,
            "category_name"=> "Fiction"
        ]);

    }
}
