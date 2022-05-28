<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SubcategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('subcategories')->delete();
        $subcategories = array(
            array('id' => '12','category_id' => '13','name' => 'fastfood','slug' => 'fastfood','created_at' => '2022-05-20 12:52:09','updated_at' => '2022-05-20 13:32:44'),
            array('id' => '13','category_id' => '14','name' => 'non alcoholic drinks','slug' => 'cold-drinks','created_at' => '2022-05-20 14:57:37','updated_at' => '2022-05-20 14:58:14'),
            array('id' => '14','category_id' => '13','name' => 'deserts','slug' => 'deserts','created_at' => '2022-05-20 15:46:20','updated_at' => '2022-05-20 15:46:20'),
            array('id' => '15','category_id' => '20','name' => 'yyy1','slug' => 'yyy1','created_at' => '2022-05-28 13:52:47','updated_at' => '2022-05-28 13:52:47')
          );
          DB::table('subcategories')->insert($subcategories);
    }
}
