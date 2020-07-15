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
        $this->call(BusinessSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(AppointmentSeeder::class);
    }
}
