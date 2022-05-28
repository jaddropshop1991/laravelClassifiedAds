<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // User::create([
        //     'name'=>'Admin',
        //     'email'=>'admin@gmail.com',
        //     'password'=>Hash::make('password'),
        //     'isAdmin'=>1
        // ]);
        DB::table('users')->delete();
        $users = array(
            array('id' => '1','name' => 'jadboudiab','email' => 'jad@gmail.com','email_verified_at' => NULL,'password' => '$2y$10$r/N1KtugCLirdepMwftWG.M..SMRImroIhRLkQbZ721DfQAG4ib0.','two_factor_secret' => NULL,'two_factor_recovery_codes' => NULL,'two_factor_confirmed_at' => NULL,'avatar' => NULL,'address' => NULL,'fb_id' => NULL,'remember_token' => NULL,'created_at' => '2022-05-13 21:14:10','updated_at' => '2022-05-13 21:14:10','isadmin' => '0'),
            array('id' => '2','name' => 'amjad','email' => 'amjad@gmail.com','email_verified_at' => NULL,'password' => '$2y$10$PoYDeTyhO1cAU0DSNGKo0.jJS/dv2PjWZQ/88E6V0H4rBe4aCenru','two_factor_secret' => NULL,'two_factor_recovery_codes' => NULL,'two_factor_confirmed_at' => NULL,'avatar' => NULL,'address' => NULL,'fb_id' => NULL,'remember_token' => '8WGZkWTcl1jBm0PBV9rw4qANhYqLctQuacKax5spHGOdTFFfOtdMuVPPAMwg','created_at' => '2022-05-14 10:46:36','updated_at' => '2022-05-14 11:10:27','isadmin' => '0'),
            array('id' => '3','name' => 'emma','email' => 'emma@gmail.com','email_verified_at' => '2022-05-14 11:31:28','password' => '$2y$10$Zt9Qpcp9eAumzOIBau22qe5cO68S4x/wCw4hq0jH0rJDmES0Xg4Ke','two_factor_secret' => NULL,'two_factor_recovery_codes' => NULL,'two_factor_confirmed_at' => NULL,'avatar' => 'https://drive.google.com/uc?id=1R3g-o2yi5WMg0ns2EJTqEOlWJ8W0Anu4&export=media','address' => 'lebanon','fb_id' => NULL,'remember_token' => NULL,'created_at' => '2022-05-14 11:23:55','updated_at' => '2022-05-28 10:34:25','isadmin' => '0'),
            array('id' => '4','name' => 'mandy','email' => 'mandy@gmail.com','email_verified_at' => '2022-05-14 11:50:30','password' => '$2y$10$hbhgEnOb.1HH7c2qsmAWduShd6Txt4YyI1mNTezZBlvm8AjMoRi/6','two_factor_secret' => NULL,'two_factor_recovery_codes' => NULL,'two_factor_confirmed_at' => NULL,'avatar' => NULL,'address' => NULL,'fb_id' => NULL,'remember_token' => NULL,'created_at' => '2022-05-14 11:40:39','updated_at' => '2022-05-14 11:50:30','isadmin' => '0'),
            array('id' => '5','name' => 'Admin','email' => 'admin@gmail.com','email_verified_at' => NULL,'password' => '$2y$10$xGW.1H8cHzzzkKour.Rkje6uDm6mRbgqGuUz3EfixwF50OsdGaEpe','two_factor_secret' => NULL,'two_factor_recovery_codes' => NULL,'two_factor_confirmed_at' => NULL,'avatar' => NULL,'address' => NULL,'fb_id' => NULL,'remember_token' => NULL,'created_at' => '2022-05-21 18:28:27','updated_at' => '2022-05-21 18:28:27','isadmin' => '1'),
            array('id' => '6','name' => 'jay','email' => 'jay@gmail.com','email_verified_at' => '2022-05-22 14:03:40','password' => '$2y$10$cbdChd.TJJkGnOu.JfriEuV3dbQnJ/aMeAZ.OXfq2c2fbmaSPHah2','two_factor_secret' => NULL,'two_factor_recovery_codes' => NULL,'two_factor_confirmed_at' => NULL,'avatar' => 'https://drive.google.com/uc?id=1n3iLd-NF72eE1GFEI1_wLY7Fe8nveSkq&export=media','address' => NULL,'fb_id' => NULL,'remember_token' => NULL,'created_at' => '2022-05-22 13:26:57','updated_at' => '2022-05-28 11:01:43','isadmin' => '0'),
            array('id' => '18','name' => 'jaddropshop','email' => 'jaddropshop1991@gmail.com','email_verified_at' => '2022-05-25 15:39:41','password' => '$2y$10$ojTbIgqa2xIYdzhtnlXGwusJ/kLcYTYcn2PV1I00GYCckS/F9Fxi6','two_factor_secret' => NULL,'two_factor_recovery_codes' => NULL,'two_factor_confirmed_at' => NULL,'avatar' => NULL,'address' => NULL,'fb_id' => NULL,'remember_token' => NULL,'created_at' => '2022-05-25 15:37:55','updated_at' => '2022-05-25 15:39:41','isadmin' => '1'),
            array('id' => '20','name' => 'mike','email' => 'mike@gmail.com','email_verified_at' => NULL,'password' => '$2y$10$8FPFozRxI3P2nghOrDrFye0NNm4Q/3mdk/Wern9ovcrIVdLgG3rjG','two_factor_secret' => NULL,'two_factor_recovery_codes' => NULL,'two_factor_confirmed_at' => NULL,'avatar' => NULL,'address' => NULL,'fb_id' => NULL,'remember_token' => NULL,'created_at' => '2022-05-25 17:47:46','updated_at' => '2022-05-25 17:47:46','isadmin' => '0'),
            array('id' => '21','name' => 'Jad Bou Diab','email' => 'jadbudiab@hotmail.com','email_verified_at' => NULL,'password' => 'eyJpdiI6Ii9FeFp6UGk2aitLQmhxeWJyK2pCa3c9PSIsInZhbHVlIjoidHJmY09Bc2YzYWVjckN4Y3Z3dEplZz09IiwibWFjIjoiMTkyOTVkNTE3NjgzYzg5MWQ3ODg4MjcwNTc5ZmVmZjE2ZTZhMjhjZmZmMTY3MGY3Y2ZiYzRhZTQ4NGZhYjcxZCIsInRhZyI6IiJ9','two_factor_secret' => NULL,'two_factor_recovery_codes' => NULL,'two_factor_confirmed_at' => NULL,'avatar' => 'https://drive.google.com/uc?id=1UfIRUpvfzfleDtJqhI3TCPPHaz_P0xi_&export=media','address' => NULL,'fb_id' => '2214694355353209','remember_token' => NULL,'created_at' => '2022-05-28 10:20:55','updated_at' => '2022-05-28 10:58:55','isadmin' => '1')
          );
          DB::table('users')->insert($users);
          

    }
}
