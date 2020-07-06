<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2020-07-04 03:56:00',
                'updated_at' => '2020-07-04 03:56:00',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2020-07-04 03:56:00',
                'updated_at' => '2020-07-04 03:56:00',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2020-07-04 03:56:00',
                'updated_at' => '2020-07-04 03:56:00',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2020-07-04 03:56:00',
                'updated_at' => '2020-07-04 03:56:00',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2020-07-04 03:56:00',
                'updated_at' => '2020-07-04 03:56:00',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2020-07-04 03:56:00',
                'updated_at' => '2020-07-04 03:56:00',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2020-07-04 03:56:00',
                'updated_at' => '2020-07-04 03:56:00',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2020-07-04 03:56:00',
                'updated_at' => '2020-07-04 03:56:00',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2020-07-04 03:56:00',
                'updated_at' => '2020-07-04 03:56:00',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2020-07-04 03:56:00',
                'updated_at' => '2020-07-04 03:56:00',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2020-07-04 03:56:00',
                'updated_at' => '2020-07-04 03:56:00',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2020-07-04 03:56:00',
                'updated_at' => '2020-07-04 03:56:00',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2020-07-04 03:56:00',
                'updated_at' => '2020-07-04 03:56:00',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2020-07-04 03:56:00',
                'updated_at' => '2020-07-04 03:56:00',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2020-07-04 03:56:00',
                'updated_at' => '2020-07-04 03:56:00',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2020-07-04 03:56:00',
                'updated_at' => '2020-07-04 03:56:00',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2020-07-04 03:56:00',
                'updated_at' => '2020-07-04 03:56:00',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2020-07-04 03:56:00',
                'updated_at' => '2020-07-04 03:56:00',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2020-07-04 03:56:00',
                'updated_at' => '2020-07-04 03:56:00',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2020-07-04 03:56:00',
                'updated_at' => '2020-07-04 03:56:00',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2020-07-04 03:56:00',
                'updated_at' => '2020-07-04 03:56:00',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2020-07-04 03:56:00',
                'updated_at' => '2020-07-04 03:56:00',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2020-07-04 03:56:00',
                'updated_at' => '2020-07-04 03:56:00',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2020-07-04 03:56:00',
                'updated_at' => '2020-07-04 03:56:00',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2020-07-04 03:56:00',
                'updated_at' => '2020-07-04 03:56:00',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'browse_hooks',
                'table_name' => NULL,
                'created_at' => '2020-07-04 03:56:01',
                'updated_at' => '2020-07-04 03:56:01',
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'browse_orders',
                'table_name' => 'orders',
                'created_at' => '2020-07-04 04:18:20',
                'updated_at' => '2020-07-04 04:18:20',
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'read_orders',
                'table_name' => 'orders',
                'created_at' => '2020-07-04 04:18:20',
                'updated_at' => '2020-07-04 04:18:20',
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'edit_orders',
                'table_name' => 'orders',
                'created_at' => '2020-07-04 04:18:20',
                'updated_at' => '2020-07-04 04:18:20',
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'add_orders',
                'table_name' => 'orders',
                'created_at' => '2020-07-04 04:18:20',
                'updated_at' => '2020-07-04 04:18:20',
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'delete_orders',
                'table_name' => 'orders',
                'created_at' => '2020-07-04 04:18:20',
                'updated_at' => '2020-07-04 04:18:20',
            ),
            31 => 
            array (
                'id' => 42,
                'key' => 'browse_shops',
                'table_name' => 'shops',
                'created_at' => '2020-07-06 06:29:05',
                'updated_at' => '2020-07-06 06:29:05',
            ),
            32 => 
            array (
                'id' => 43,
                'key' => 'read_shops',
                'table_name' => 'shops',
                'created_at' => '2020-07-06 06:29:05',
                'updated_at' => '2020-07-06 06:29:05',
            ),
            33 => 
            array (
                'id' => 44,
                'key' => 'edit_shops',
                'table_name' => 'shops',
                'created_at' => '2020-07-06 06:29:05',
                'updated_at' => '2020-07-06 06:29:05',
            ),
            34 => 
            array (
                'id' => 45,
                'key' => 'add_shops',
                'table_name' => 'shops',
                'created_at' => '2020-07-06 06:29:05',
                'updated_at' => '2020-07-06 06:29:05',
            ),
            35 => 
            array (
                'id' => 46,
                'key' => 'delete_shops',
                'table_name' => 'shops',
                'created_at' => '2020-07-06 06:29:05',
                'updated_at' => '2020-07-06 06:29:05',
            ),
        ));
        
        
    }
}