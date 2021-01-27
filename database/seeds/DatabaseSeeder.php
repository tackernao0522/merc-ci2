<?php

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
        $this->call(UsersTableSeeder::class);
        $this->call(ItemConditionsTableSeeder::class);
        $this->call(PrimaryCategoriesTableSeeder::class);
        $this->call(SecondaryCategoriesTableSeeder::class);
    }
}
