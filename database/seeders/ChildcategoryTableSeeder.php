<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ChildcategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('childcategories')->delete();
        $childcategories = array(
            array('id' => '7','subcategory_id' => '12','name' => 'pizza','slug' => 'pizza','created_at' => '2022-05-20 12:52:24','updated_at' => '2022-05-20 12:52:24'),
            array('id' => '8','subcategory_id' => '12','name' => 'burger','slug' => 'burger','created_at' => '2022-05-20 12:52:37','updated_at' => '2022-05-20 12:52:37'),
            array('id' => '9','subcategory_id' => '13','name' => 'juices','slug' => 'juices','created_at' => '2022-05-20 14:58:37','updated_at' => '2022-05-20 14:58:37'),
            array('id' => '10','subcategory_id' => '14','name' => 'chocolate','slug' => 'chocolate','created_at' => '2022-05-20 15:47:15','updated_at' => '2022-05-20 15:47:15'),
            array('id' => '11','subcategory_id' => '15','name' => 'yyy2','slug' => 'yyy2','created_at' => '2022-05-28 13:52:58','updated_at' => '2022-05-28 13:52:58')
          );
          DB::table('childcategories')->insert($childcategories);
    }
}
