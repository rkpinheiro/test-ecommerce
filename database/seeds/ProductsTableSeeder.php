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
                'id' => '1',
                'name' => 'Product 1',
                'price' => '10',
                'created_at' => '1534000304028',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => '2',
                'name' => 'Product 2',
                'price' => '10',
                'created_at' => '1534000304028',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => '3',
                'name' => 'Product 3',
                'price' => '10',
                'created_at' => '1534000304028',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => '4',
                'name' => 'Product 4',
                'price' => '10',
                'created_at' => '1534000304028',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => '5',
                'name' => 'Product 5',
                'price' => '10',
                'created_at' => '1534000304028',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}