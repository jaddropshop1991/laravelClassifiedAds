<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class AdvertismentUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('advertisment_user')->delete();
        $advertisment_user = array(
            array('id' => '1','user_id' => '6','advertisment_id' => '13','created_at' => NULL,'updated_at' => NULL),
            array('id' => '3','user_id' => '6','advertisment_id' => '9','created_at' => NULL,'updated_at' => NULL),
            array('id' => '4','user_id' => '18','advertisment_id' => '13','created_at' => NULL,'updated_at' => NULL),
            array('id' => '5','user_id' => '3','advertisment_id' => '16','created_at' => NULL,'updated_at' => NULL),
            array('id' => '6','user_id' => '20','advertisment_id' => '8','created_at' => NULL,'updated_at' => NULL),
            array('id' => '7','user_id' => '21','advertisment_id' => '19','created_at' => NULL,'updated_at' => NULL),
            array('id' => '8','user_id' => '6','advertisment_id' => '20','created_at' => NULL,'updated_at' => NULL)
          );
          DB::table('advertisment_user')->insert($advertisment_user);
    }
}
