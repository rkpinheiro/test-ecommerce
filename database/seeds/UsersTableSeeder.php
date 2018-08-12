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
                'id' => '1',
                'name' => 'user',
                'email' => 'user112@mailinator.com',
                'password' => '$2y$12$J2gfWyWn5XINT6Rfkg6iaOk8pBYpRgueZ7hKRQ0ZAmEu.3jBcqnpq',
                'remember_token' => 'bUrZNaknLF06uWUJBO4NWLpIkyZKz6CMnqmDrPYfoXjVwTJvIVXWnNxUdLGp',
                'created_at' => '2018-08-11 11:22:05',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}