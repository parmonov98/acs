<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use UsersTableSeeder;
use AppealsTableSeeder;
use PasswordResetsTableSeeder;
use ProfilesTableSeeder;
use FailedJobsTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        $this->call(UsersTableSeeder::class);
        $this->call(AppealsTableSeeder::class);
        $this->call(FailedJobsTableSeeder::class);
        $this->call(PasswordResetsTableSeeder::class);
        $this->call(ProfilesTableSeeder::class);
    }
}
