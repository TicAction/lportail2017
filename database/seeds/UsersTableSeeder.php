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
                'name' => 'Administrateur',
                'email' => 'admin@admin.com',
                'password' => '$2y$10$qu3QlPo.f5mkZn7GOLKHHuAJoQwzWrTUPU1hlO4phrSThKgxIjCFK',
                'remember_token' => NULL,
                'created_at' => '2017-10-22 09:46:08',
                'updated_at' => '2017-10-22 09:46:08',
            ),
        ));
        
        
    }
}