<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TemperatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('temperatures')->insert([
            'id' => 1,
            'tool_id' => 1,
            'current_temperature' => 20,
        ]);

        DB::table('temperatures')->insert([
            'id' => 2,
            'tool_id' => 2,
            'current_temperature' => 25,
        ]);

        DB::table('temperatures')->insert([
            'id' => 3,
            'tool_id' => 3,
            'current_temperature' => 28,
        ]);

        DB::table('temperatures')->insert([
            'id' => 4,
            'tool_id' => 4,
            'current_temperature' => 34,
        ]);

        DB::table('temperatures')->insert([
            'id' => 5,
            'tool_id' => 4,
            'current_temperature' => 15,
        ]);

        DB::table('temperatures')->insert([
            'id' => 6,
            'tool_id' => 1,
            'current_temperature' => 29,
        ]);

        DB::table('temperatures')->insert([
            'id' => 7,
            'tool_id' => 2,
            'current_temperature' => 21,
        ]);

        DB::table('temperatures')->insert([
            'id' => 8,
            'tool_id' => 3,
            'current_temperature' => 37,
        ]);

        DB::table('temperatures')->insert([
            'id' => 9,
            'tool_id' => 1,
            'current_temperature' => 39,
        ]);

        DB::table('temperatures')->insert([
            'id' => 10,
            'tool_id' => 2,
            'current_temperature' => 30,
        ]);
    }
}
