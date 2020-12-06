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
                'profile_id' => NULL,
                'name' => 'Murod Parmonov',
                'email' => 'parmonov98@yandex.ru',
                'email_verified_at' => NULL,
                'password' => '$2y$10$YcgXetGaqrbPs6J69oXWJ.sdswPNg7KtEgh9uogcQdAvR3KF1/uq.',
                'remember_token' => NULL,
                'created_at' => '2020-12-05 02:40:15',
                'updated_at' => '2020-12-05 02:40:15',
            ),
        ));
        
        
    }
}