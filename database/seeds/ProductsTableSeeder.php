<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Perspiciatis eaque repellat repudiandae nisi consequatur.',
                'description' => '<p>Similique voluptates repudiandae consequuntur quas voluptatibus et temporibus est non earum nobis provident enim.</p>',
                'price' => 19.0,
                'shop_id' => 3,
                'cover_img' => 'products\\July2020\\enhOfLn204aqXkKF96b1.jpg',
                'created_at' => '2020-07-06 07:29:00',
                'updated_at' => '2020-07-06 07:32:03',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Temporibus sed aliquam natus quidem temporibus.',
                'description' => 'Id iste sunt voluptas modi recusandae qui vel voluptatem nam fuga voluptatem consectetur soluta.',
                'price' => 13.0,
                'shop_id' => 2,
                'cover_img' => NULL,
                'created_at' => '2020-07-06 07:29:29',
                'updated_at' => '2020-07-06 07:29:29',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Nesciunt numquam itaque quia saepe atque.',
                'description' => 'Maiores aut ab expedita ut beatae amet fuga aliquam.',
                'price' => 34.0,
                'shop_id' => 1,
                'cover_img' => NULL,
                'created_at' => '2020-07-06 07:29:29',
                'updated_at' => '2020-07-06 07:29:29',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Vero aliquam maiores voluptates labore.',
                'description' => 'Aut libero officia est facilis quas delectus assumenda quis voluptate quae.',
                'price' => 21.0,
                'shop_id' => 3,
                'cover_img' => NULL,
                'created_at' => '2020-07-06 07:29:29',
                'updated_at' => '2020-07-06 07:29:29',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Omnis eveniet perferendis neque.',
                'description' => 'Dolorem commodi corrupti laboriosam est temporibus tenetur omnis suscipit consectetur fugiat inventore nostrum.',
                'price' => 31.0,
                'shop_id' => 3,
                'cover_img' => NULL,
                'created_at' => '2020-07-06 07:29:29',
                'updated_at' => '2020-07-06 07:29:29',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Quae consectetur modi aut.',
                'description' => 'Dolorem dicta sit voluptatem sunt voluptatem dolor ducimus et labore eaque numquam fuga.',
                'price' => 34.0,
                'shop_id' => 1,
                'cover_img' => NULL,
                'created_at' => '2020-07-06 07:29:29',
                'updated_at' => '2020-07-06 07:29:29',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Rerum voluptas molestiae facilis in quibusdam deserunt.',
                'description' => 'Laboriosam impedit neque consequatur commodi et vitae rerum et et.',
                'price' => 37.0,
                'shop_id' => 2,
                'cover_img' => NULL,
                'created_at' => '2020-07-06 07:29:29',
                'updated_at' => '2020-07-06 07:29:29',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Eum ut necessitatibus quasi dolor quidem necessitatibus.',
                'description' => 'Est asperiores saepe voluptatibus aut consequuntur enim voluptatem maiores quidem et labore excepturi dolores.',
                'price' => 50.0,
                'shop_id' => 2,
                'cover_img' => NULL,
                'created_at' => '2020-07-06 07:29:29',
                'updated_at' => '2020-07-06 07:29:29',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Mollitia officia sed quae.',
                'description' => 'Ab et ut sunt et occaecati quaerat odit tenetur est.',
                'price' => 37.0,
                'shop_id' => 3,
                'cover_img' => NULL,
                'created_at' => '2020-07-06 07:29:29',
                'updated_at' => '2020-07-06 07:29:29',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Quaerat sit deserunt commodi non voluptate voluptatibus.',
                'description' => 'Velit natus omnis repellat id eos at.',
                'price' => 17.0,
                'shop_id' => 2,
                'cover_img' => NULL,
                'created_at' => '2020-07-06 07:29:29',
                'updated_at' => '2020-07-06 07:29:29',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Velit corporis nobis explicabo fugit.',
                'description' => 'Consectetur sint beatae beatae est ut corrupti ducimus hic voluptas aut animi a itaque.',
                'price' => 47.0,
                'shop_id' => 3,
                'cover_img' => NULL,
                'created_at' => '2020-07-06 07:29:29',
                'updated_at' => '2020-07-06 07:29:29',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Et occaecati quisquam temporibus.',
                'description' => 'Exercitationem nulla itaque repudiandae optio dolores maxime a quam ducimus.',
                'price' => 37.0,
                'shop_id' => 3,
                'cover_img' => NULL,
                'created_at' => '2020-07-06 07:29:29',
                'updated_at' => '2020-07-06 07:29:29',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Officia omnis sit est laudantium temporibus.',
                'description' => 'Incidunt voluptatum autem unde earum inventore occaecati itaque natus similique eum vel necessitatibus blanditiis accusamus.',
                'price' => 50.0,
                'shop_id' => 3,
                'cover_img' => NULL,
                'created_at' => '2020-07-06 07:29:29',
                'updated_at' => '2020-07-06 07:29:29',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Omnis est adipisci ab et.',
                'description' => 'Illum corrupti quo cumque reiciendis quo consequuntur sunt iste architecto repellat qui.',
                'price' => 14.0,
                'shop_id' => 3,
                'cover_img' => NULL,
                'created_at' => '2020-07-06 07:29:29',
                'updated_at' => '2020-07-06 07:29:29',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Quod adipisci et quidem qui praesentium rerum.',
                'description' => 'Nobis repellendus et corporis perferendis eos dolor quos deleniti error dicta.',
                'price' => 40.0,
                'shop_id' => 2,
                'cover_img' => NULL,
                'created_at' => '2020-07-06 07:29:29',
                'updated_at' => '2020-07-06 07:29:29',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Est omnis vel veniam.',
                'description' => 'Reiciendis voluptatem ut autem ab delectus error voluptas quo.',
                'price' => 43.0,
                'shop_id' => 2,
                'cover_img' => NULL,
                'created_at' => '2020-07-06 07:29:29',
                'updated_at' => '2020-07-06 07:29:29',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Et distinctio velit qui quos aut.',
                'description' => 'Ducimus libero neque alias dolorem et et rerum repudiandae et similique.',
                'price' => 32.0,
                'shop_id' => 1,
                'cover_img' => NULL,
                'created_at' => '2020-07-06 07:29:29',
                'updated_at' => '2020-07-06 07:29:29',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'At ut laborum quae.',
                'description' => 'Et ducimus doloremque voluptatum quo consequuntur in natus optio aliquam.',
                'price' => 23.0,
                'shop_id' => 1,
                'cover_img' => NULL,
                'created_at' => '2020-07-06 07:29:29',
                'updated_at' => '2020-07-06 07:29:29',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Totam voluptatibus perferendis dicta ullam repellendus repellat.',
                'description' => 'Ipsam necessitatibus nostrum error et enim et eaque dolores minima sit possimus.',
                'price' => 50.0,
                'shop_id' => 2,
                'cover_img' => NULL,
                'created_at' => '2020-07-06 07:29:29',
                'updated_at' => '2020-07-06 07:29:29',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Sint et magni deleniti iusto est impedit reiciendis.',
                'description' => 'Modi quidem iure dolorum sapiente voluptas eaque nisi voluptas.',
                'price' => 20.0,
                'shop_id' => 2,
                'cover_img' => NULL,
                'created_at' => '2020-07-06 07:29:29',
                'updated_at' => '2020-07-06 07:29:29',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Vero aspernatur quo numquam qui blanditiis dignissimos.',
                'description' => 'Debitis dolorem quia repellendus facilis libero dolorum fugit doloremque sapiente.',
                'price' => 36.0,
                'shop_id' => 1,
                'cover_img' => NULL,
                'created_at' => '2020-07-06 07:29:29',
                'updated_at' => '2020-07-06 07:29:29',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Inventore neque eos cumque nobis aut quam.',
                'description' => 'Qui tempore repellendus repellat accusamus eum id vel fuga sit possimus dolores.',
                'price' => 32.0,
                'shop_id' => 3,
                'cover_img' => NULL,
                'created_at' => '2020-07-06 07:29:29',
                'updated_at' => '2020-07-06 07:29:29',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Est eos ratione dignissimos repellat.',
                'description' => 'Nulla ipsa necessitatibus sed porro sit non molestiae qui quo veniam velit ullam.',
                'price' => 41.0,
                'shop_id' => 1,
                'cover_img' => NULL,
                'created_at' => '2020-07-06 07:29:29',
                'updated_at' => '2020-07-06 07:29:29',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Porro molestias autem delectus molestiae.',
                'description' => 'Quia eos minima ea aliquid quos expedita ducimus ut minima reprehenderit illum sit doloremque.',
                'price' => 45.0,
                'shop_id' => 2,
                'cover_img' => NULL,
                'created_at' => '2020-07-06 07:29:29',
                'updated_at' => '2020-07-06 07:29:29',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Magnam magni sunt et quia ut tempora.',
                'description' => 'Veritatis nihil doloribus ipsam numquam molestiae ipsam necessitatibus.',
                'price' => 22.0,
                'shop_id' => 3,
                'cover_img' => NULL,
                'created_at' => '2020-07-06 07:29:29',
                'updated_at' => '2020-07-06 07:29:29',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Vel eaque incidunt sed a.',
                'description' => 'Placeat ipsam accusamus corporis quae voluptatibus in adipisci incidunt praesentium a.',
                'price' => 11.0,
                'shop_id' => 2,
                'cover_img' => NULL,
                'created_at' => '2020-07-06 07:29:29',
                'updated_at' => '2020-07-06 07:29:29',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Sint quia dolorem aperiam exercitationem.',
                'description' => 'Sunt voluptatum tempora soluta sint ipsum a quasi ea ut vero nobis.',
                'price' => 30.0,
                'shop_id' => 1,
                'cover_img' => NULL,
                'created_at' => '2020-07-06 07:29:29',
                'updated_at' => '2020-07-06 07:29:29',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Voluptatum eos rem sit ex quod et.',
                'description' => 'Fugiat omnis eos corrupti qui animi iure velit quod totam nostrum blanditiis.',
                'price' => 13.0,
                'shop_id' => 2,
                'cover_img' => NULL,
                'created_at' => '2020-07-06 07:29:29',
                'updated_at' => '2020-07-06 07:29:29',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Qui cum maxime voluptatibus provident incidunt.',
                'description' => 'Ipsam accusantium dolores dolorem repellat quae et porro quidem recusandae.',
                'price' => 24.0,
                'shop_id' => 1,
                'cover_img' => NULL,
                'created_at' => '2020-07-06 07:29:29',
                'updated_at' => '2020-07-06 07:29:29',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Nemo dicta aliquid aut aliquid doloribus.',
                'description' => 'Dolorem maiores quia explicabo atque quod libero numquam distinctio maxime magnam aspernatur quam qui.',
                'price' => 11.0,
                'shop_id' => 3,
                'cover_img' => NULL,
                'created_at' => '2020-07-06 07:29:29',
                'updated_at' => '2020-07-06 07:29:29',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Voluptas veniam optio velit quaerat odio.',
                'description' => 'Consequuntur reprehenderit voluptatem sunt sint placeat blanditiis ad nostrum porro quia.',
                'price' => 40.0,
                'shop_id' => 3,
                'cover_img' => NULL,
                'created_at' => '2020-07-06 07:29:29',
                'updated_at' => '2020-07-06 07:29:29',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'Dolore ullam eligendi facilis et qui omnis.',
                'description' => 'Quam qui distinctio cupiditate ut deserunt excepturi repudiandae in excepturi et asperiores suscipit.',
                'price' => 30.0,
                'shop_id' => 2,
                'cover_img' => NULL,
                'created_at' => '2020-07-06 07:29:29',
                'updated_at' => '2020-07-06 07:29:29',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'Ipsam qui eaque voluptas fugiat.',
                'description' => 'Veniam explicabo repudiandae aut nemo eligendi consequuntur saepe porro quaerat asperiores.',
                'price' => 45.0,
                'shop_id' => 3,
                'cover_img' => NULL,
                'created_at' => '2020-07-06 07:29:29',
                'updated_at' => '2020-07-06 07:29:29',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'Culpa suscipit earum ab quod.',
                'description' => 'Laboriosam nisi tempore saepe quam aut similique tenetur ducimus doloribus sit sit.',
                'price' => 45.0,
                'shop_id' => 2,
                'cover_img' => NULL,
                'created_at' => '2020-07-06 07:29:29',
                'updated_at' => '2020-07-06 07:29:29',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'Cum laboriosam distinctio excepturi non ad ipsum.',
                'description' => 'Vel minima qui molestiae nisi odio quas hic accusamus aliquid ipsum ad.',
                'price' => 19.0,
                'shop_id' => 1,
                'cover_img' => NULL,
                'created_at' => '2020-07-06 07:29:29',
                'updated_at' => '2020-07-06 07:29:29',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'Dolor et delectus in.',
                'description' => 'Odio sit est omnis eum soluta molestiae molestiae necessitatibus iste.',
                'price' => 25.0,
                'shop_id' => 1,
                'cover_img' => NULL,
                'created_at' => '2020-07-06 07:29:29',
                'updated_at' => '2020-07-06 07:29:29',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'Ut voluptatum nihil velit.',
                'description' => 'Quia maiores inventore aspernatur est earum cumque maxime sint.',
                'price' => 50.0,
                'shop_id' => 3,
                'cover_img' => NULL,
                'created_at' => '2020-07-06 07:29:29',
                'updated_at' => '2020-07-06 07:29:29',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'Iste consectetur voluptatem qui.',
                'description' => 'Magni accusamus dicta aut error veniam praesentium hic.',
                'price' => 50.0,
                'shop_id' => 1,
                'cover_img' => NULL,
                'created_at' => '2020-07-06 07:29:29',
                'updated_at' => '2020-07-06 07:29:29',
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'Voluptatum nihil rem nisi soluta.',
                'description' => 'Corrupti pariatur eius aut non numquam repellendus fugit voluptas.',
                'price' => 42.0,
                'shop_id' => 1,
                'cover_img' => NULL,
                'created_at' => '2020-07-06 07:29:29',
                'updated_at' => '2020-07-06 07:29:29',
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'Quia ut magni soluta ea consectetur ex.',
                'description' => 'Non eveniet et et ut atque aut nulla dolorum totam.',
                'price' => 48.0,
                'shop_id' => 3,
                'cover_img' => NULL,
                'created_at' => '2020-07-06 07:29:29',
                'updated_at' => '2020-07-06 07:29:29',
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'A eveniet culpa dolores doloremque.',
                'description' => 'Ad animi totam ut velit laboriosam fugiat quia iste reiciendis aut et rerum.',
                'price' => 45.0,
                'shop_id' => 3,
                'cover_img' => NULL,
                'created_at' => '2020-07-06 07:29:29',
                'updated_at' => '2020-07-06 07:29:29',
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'Ad in autem vel ut.',
                'description' => 'Temporibus adipisci sapiente occaecati placeat dolor laborum ut est dolores sit quam.',
                'price' => 10.0,
                'shop_id' => 2,
                'cover_img' => NULL,
                'created_at' => '2020-07-06 07:29:29',
                'updated_at' => '2020-07-06 07:29:29',
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'Autem esse non vitae in.',
                'description' => 'Optio earum ratione maxime rerum nostrum non eaque sit eos.',
                'price' => 10.0,
                'shop_id' => 3,
                'cover_img' => NULL,
                'created_at' => '2020-07-06 07:29:29',
                'updated_at' => '2020-07-06 07:29:29',
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'Dolore et tempora quaerat quo.',
                'description' => 'Cum minima qui nemo porro vero dicta recusandae voluptate.',
                'price' => 36.0,
                'shop_id' => 1,
                'cover_img' => NULL,
                'created_at' => '2020-07-06 07:29:29',
                'updated_at' => '2020-07-06 07:29:29',
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'Vitae amet reprehenderit accusantium.',
                'description' => 'Blanditiis sunt porro ea beatae aut non optio laboriosam qui odio est modi.',
                'price' => 17.0,
                'shop_id' => 1,
                'cover_img' => NULL,
                'created_at' => '2020-07-06 07:29:29',
                'updated_at' => '2020-07-06 07:29:29',
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'Sunt autem ut earum quis odit.',
                'description' => 'Dolorem ut voluptates omnis esse unde nulla totam qui ut.',
                'price' => 19.0,
                'shop_id' => 3,
                'cover_img' => NULL,
                'created_at' => '2020-07-06 07:29:29',
                'updated_at' => '2020-07-06 07:29:29',
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'Nobis quia dolore hic.',
                'description' => 'Molestiae ratione ratione minus nobis dolorem blanditiis sapiente porro.',
                'price' => 46.0,
                'shop_id' => 2,
                'cover_img' => NULL,
                'created_at' => '2020-07-06 07:29:29',
                'updated_at' => '2020-07-06 07:29:29',
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'Minima quas aliquid est.',
                'description' => 'Cumque sit architecto debitis molestiae id placeat non ratione.',
                'price' => 27.0,
                'shop_id' => 1,
                'cover_img' => NULL,
                'created_at' => '2020-07-06 07:29:29',
                'updated_at' => '2020-07-06 07:29:29',
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'Magnam quae animi totam a.',
                'description' => 'Sint quasi neque cum sunt minus tempore voluptatum dolores impedit repudiandae est.',
                'price' => 32.0,
                'shop_id' => 2,
                'cover_img' => NULL,
                'created_at' => '2020-07-06 07:29:29',
                'updated_at' => '2020-07-06 07:29:29',
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'Incidunt sit provident tempore.',
                'description' => 'Et mollitia debitis et consectetur ad pariatur laborum molestiae.',
                'price' => 50.0,
                'shop_id' => 3,
                'cover_img' => NULL,
                'created_at' => '2020-07-06 07:29:29',
                'updated_at' => '2020-07-06 07:29:29',
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'seller one product',
                'description' => '<p>seller one product description</p>',
                'price' => 199.0,
                'shop_id' => 4,
                'cover_img' => 'products\\July2020\\N5tKw3T2Q1BXQKD3SImF.jpg',
                'created_at' => '2020-07-06 10:16:00',
                'updated_at' => '2020-07-06 10:41:30',
            ),
        ));
        
        
    }
}