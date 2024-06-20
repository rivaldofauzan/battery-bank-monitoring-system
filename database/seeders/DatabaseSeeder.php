<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            battery1TableSeeder::class,
            battery2TableSeeder::class,
            battery3TableSeeder::class,
            battery4TableSeeder::class,
        ]);
    }
}
