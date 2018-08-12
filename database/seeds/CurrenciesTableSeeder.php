<?php

use Illuminate\Database\Seeder;

class CurrenciesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('currencies')->delete();
        
        \DB::table('currencies')->insert(array (
            0 => 
            array (
                'id' => '1',
                'name' => 'US Dollar',
                'code' => 'USD',
                'symbol' => '$',
                'format' => '$1,0.00',
                'exchange_rate' => '3',
                'active' => '0',
                'created_at' => '2018-08-12 14:46:29',
                'updated_at' => '2018-08-12 14:46:29',
            ),
            1 => 
            array (
                'id' => '2',
                'name' => 'Euro',
                'code' => 'EUR',
                'symbol' => '€',
                'format' => '1.0,00 €',
                'exchange_rate' => '2',
                'active' => '0',
                'created_at' => '2018-08-12 14:46:43',
                'updated_at' => '2018-08-12 14:46:43',
            ),
            2 => 
            array (
                'id' => '3',
                'name' => 'Brazilian Real',
                'code' => 'BRL',
                'symbol' => 'R$',
                'format' => 'R$ 1,0.00',
                'exchange_rate' => '1',
                'active' => '0',
                'created_at' => '2018-08-12 14:46:48',
                'updated_at' => '2018-08-12 14:46:48',
            ),
        ));
        
        
    }
}