<?php

use Illuminate\Database\Seeder;

class ShopsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('shops')->delete();
        
        \DB::table('shops')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'rabin store',
                'is_active' => 1,
                'user_id' => 4,
                'description' => '<p>rabin store description</p>',
                'ratings' => NULL,
                'created_at' => '2020-07-06 06:32:00',
                'updated_at' => '2020-07-06 06:33:38',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'rabin store',
                'is_active' => 1,
                'user_id' => 4,
                'description' => '<p>rabin store description</p>',
                'ratings' => NULL,
                'created_at' => '2020-07-06 06:32:00',
                'updated_at' => '2020-07-06 06:33:38',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'rabin store',
                'is_active' => 1,
                'user_id' => 4,
                'description' => '<p>rabin store description</p>',
                'ratings' => NULL,
                'created_at' => '2020-07-06 06:32:00',
                'updated_at' => '2020-07-06 06:33:38',
            ),
        ));
        
        
    }
}