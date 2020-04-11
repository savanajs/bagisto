<?php

namespace Webkul\DataFaker\Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use DB;

class ProductCategoryTableDataSeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->delete();

        $now = Carbon::now();

        DB::table('categories')->insert([
            ['id' => '1','position' => '1','image' => NULL,'status' => '1','_lft' => '13','_rgt' => '14','parent_id' => NULL, 'created_at' => $now, 'updated_at' => $now],
            ['id' => '2','position' => '2','image' => NULL,'status' => '1','_lft' => '15','_rgt' => '16','parent_id' => NULL, 'created_at' => $now, 'updated_at' => $now],
            ['id' => '3','position' => '3','image' => NULL,'status' => '1','_lft' => '17','_rgt' => '18','parent_id' => NULL, 'created_at' => $now, 'updated_at' => $now],
        ]);

        DB::table('category_translations')->insert([
            ['id' => '1','name' => 'Root','slug' => 'root','description' => 'Root','meta_title' => 'Root','meta_description' => 'Root','meta_keywords' => '','category_id' => '1','locale' => 'en'],
            ['id' => '2','name' => 'Categorias','slug' => 'categorias','description' => 'Categorias','meta_title' => 'Categorias','meta_description' => 'Categorias','meta_keywords' => '','category_id' => '2','locale' => 'en'],
            ['id' => '3','name' => 'Hotsites','slug' => 'hotsites','description' => 'Hotsites','meta_title' => 'Hotsites','meta_description' => 'Hotsites','meta_keywords' => '','category_id' => '3','locale' => 'en'],
        ]);
    }
}