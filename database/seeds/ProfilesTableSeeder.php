<?php

use Illuminate\Database\Seeder;

class ProfilesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('profiles')->delete();
        
        \DB::table('profiles')->insert(array (
            0 => 
            array (
                'created_at' => NULL,
                'father_name' => NULL,
                'first_name' => NULL,
                'id' => 1,
                'last_name' => NULL,
                'passport_numbers' => NULL,
                'passport_serial' => NULL,
                'phone' => NULL,
                'tg_id' => NULL,
                'updated_at' => NULL,
                'user_id' => 1,
            ),
        ));
        
        
    }
}