<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use UsersTableSeeder;
use AppealsTableSeeder;
use PasswordResetsTableSeeder;
use ProfilesTableSeeder;
use FailedJobsTableSeeder;
use AppealTypesTableSeeder;
use DistrictsTableSeeder;
use EmployeesTableSeeder;
use QuartersTableSeeder;
use RegionsTableSeeder;
use MinistriesTableSeeder;
use OrganizationAppealSystemsTableSeeder;
use OrganizationsTableSeeder;

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
        $this->call(AppealTypesTableSeeder::class);
        $this->call(DistrictsTableSeeder::class);
        $this->call(EmployeesTableSeeder::class);
        $this->call(MinistriesTableSeeder::class);
        $this->call(OrganizationAppealSystemsTableSeeder::class);
        $this->call(OrganizationsTableSeeder::class);
        $this->call(RegionsTableSeeder::class);

    }
}
