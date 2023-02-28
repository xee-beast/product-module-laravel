<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = array(
            array('name'=>'Pro 1','price'=> 100,'created_by'=>1),
            array('name'=>'Pro 2','price'=> 200,'created_by'=>1),
        );

        DB::table('products')->insert($products);
        DB::table('products')->update(['created_at'=>now(),'updated_at'=>now()]);

    }
}
