<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ApplicationSeeder::class,
            UserSeeder::class,
            BranchSeeder::class,
            RoleSeeder::class,
            PermissionSeeder::class,
            CountrySeeder::class,
            CurrencySeeder::class
        ]);
    }
}
