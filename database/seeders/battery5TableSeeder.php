<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class battery5TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];
        for ($i = 0; $i < 50; $i++) {
            $data[] = [
                'timestamp' => now()->subSeconds($i * 10),
                'voltage' => rand(60, 100) / 10, // Generates values between 6.0 and 10.0
                'current' => rand(20, 50) / 10,  // Generates values between 2.0 and 5.0
                'humidity' => rand(40, 60), // Generates integer values between 40 and 60
                'temperature' => rand(20, 30), // Generates integer values between 20 and 30
                'resistance' => rand(30, 40), // Generates integer values between 30 and 40
                'power' => rand(8, 12), // Generates integer values between 8 and 12
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('battery_5')->insert($data);
    }
}
