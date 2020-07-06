<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role_id' => 1,
                'name' => 'jasbin karki',
                'email' => 'jasbinkarki@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$JxBCVWBtcYCZ6QCwo0cEquPaUC4q.cdgKpwD1DTKzA66XiUOomDj6',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-06-30 09:01:36',
                'updated_at' => '2020-07-04 03:57:07',
            ),
            1 => 
            array (
                'id' => 4,
                'role_id' => 3,
                'name' => 'rabin maskey',
                'email' => 'rabinmaskey@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$i9wuuu68qgPfyv.iepWpPe3BmxBFkcoO/JId6n3YT6JbjOjBBkXi6',
                'remember_token' => NULL,
                'settings' => '{"locale":"en"}',
                'created_at' => '2020-07-06 06:26:00',
                'updated_at' => '2020-07-06 06:33:42',
            ),
            2 => 
            array (
                'id' => 5,
                'role_id' => 3,
                'name' => 'seller one',
                'email' => 'seller1@seller.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$I5muziM3BCPBVi.TbYd/feDJOkDk796g4bqConONOTtBgPfeFyOLm',
                'remember_token' => NULL,
                'settings' => '{"locale":"en"}',
                'created_at' => '2020-07-06 08:44:58',
                'updated_at' => '2020-07-06 08:44:58',
            ),
        ));
        
        
    }
}