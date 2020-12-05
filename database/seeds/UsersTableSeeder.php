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
                'created_at' => '2020-12-05 02:40:15',
                'email' => 'parmonov98@yandex.ru',
                'email_verified_at' => NULL,
                'id' => 1,
                'name' => 'Murod Parmonov',
                'password' => '$2y$10$YcgXetGaqrbPs6J69oXWJ.sdswPNg7KtEgh9uogcQdAvR3KF1/uq.',
                'profile_id' => NULL,
                'remember_token' => NULL,
                'updated_at' => '2020-12-05 02:40:15',
            ),
        ));
        
        
    }
}