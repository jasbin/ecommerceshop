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
        ));
        
        
    }
}