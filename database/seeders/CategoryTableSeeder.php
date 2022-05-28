<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->delete();
        $categories = array(
            array('id' => '13','name' => 'food','slug' => 'food','image' => 'https://drive.google.com/uc?id=1b619bAt1TrC0SuPG5GOCEGERBIaDnuIM&export=media','created_at' => '2022-05-20 12:51:46','updated_at' => '2022-05-27 19:52:49'),
            array('id' => '14','name' => 'drinks','slug' => 'drinks','image' => 'https://drive.google.com/uc?id=1Q7hsGpX8g_1GUyDk7I44M1MFHwAv6ibL&export=media','created_at' => '2022-05-20 14:57:07','updated_at' => '2022-05-27 19:53:14'),
            array('id' => '17','name' => '9999','slug' => '9999','image' => 'https://drive.google.com/uc?id=1AE4P919H0wX_lA0mNwarXz-UXuyyKGGq&export=media','created_at' => '2022-05-27 19:38:10','updated_at' => '2022-05-27 19:38:10'),
            array('id' => '18','name' => '8888','slug' => '8888','image' => 'https://drive.google.com/uc?id=1nuVGekOlNqDK-w-kOHiVU-CODqHCE3tl&export=media','created_at' => '2022-05-27 19:41:16','updated_at' => '2022-05-28 13:40:51'),
            array('id' => '19','name' => 'electronic','slug' => 'electronic','image' => 'https://drive.google.com/uc?id=1H0Tmz6HOnfm_pk3eew1NwU_qHmEGe7KS&export=media','created_at' => '2022-05-27 20:44:57','updated_at' => '2022-05-27 20:44:57'),
            array('id' => '20','name' => 'yyy','slug' => 'yyy','image' => 'https://drive.google.com/uc?id=1ZySfRTOey7ojoWBV8ZSDbBAZdQw85Y_1&export=media','created_at' => '2022-05-28 13:44:11','updated_at' => '2022-05-28 13:44:11')
          );
          DB::table('categories')->insert($categories);
    }
}
