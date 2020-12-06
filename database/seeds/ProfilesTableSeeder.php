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
                'id' => 1,
                'user_id' => 1,
                'tg_id' => NULL,
                'first_name' => 'Murodd',
                'last_name' => 'Parmonov',
                'father_name' => 'xx',
                'passport_serial' => 'AA',
                'passport_numbers' => '234242342',
                'phone' => '+998942638523',
                'created_at' => NULL,
                'updated_at' => '2020-12-05 14:44:19',
            ),
        ));
        
        
    }
}