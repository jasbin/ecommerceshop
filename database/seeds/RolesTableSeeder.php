<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'display_name' => 'Administrator',
                'created_at' => '2020-07-04 03:56:00',
                'updated_at' => '2020-07-04 03:56:00',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'user',
                'display_name' => 'Normal User',
                'created_at' => '2020-07-04 03:56:00',
                'updated_at' => '2020-07-04 03:56:00',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'seller',
                'display_name' => 'Seller',
                'created_at' => '2020-07-04 03:57:00',
                'updated_at' => '2020-07-04 03:57:00',
            ),
        ));
        
        
    }
}