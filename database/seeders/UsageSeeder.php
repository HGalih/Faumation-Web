<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usages')->insert([
            'id' => 1,
            'tool_id' => 1,
            'water_remaining' => 10,
            'time' => \Carbon\Carbon::now()
        ]);

        DB::table('usages')->insert([
            'id' => 2,
            'tool_id' => 2,
            'water_remaining' => 25,
            'time' => \Carbon\Carbon::now()
        ]);

        DB::table('usages')->insert([
            'id' => 3,
            'tool_id' => 3,
            'water_remaining' => 36,
            'time' => \Carbon\Carbon::now()
        ]);

        DB::table('usages')->insert([
            'id' => 4,
            'tool_id' => 4,
            'water_remaining' => 42,
            'time' => \Carbon\Carbon::now()
        ]);

        DB::table('usages')->insert([
            'id' => 5,
            'tool_id' => 1,
            'water_remaining' => 56,
            'time' => \Carbon\Carbon::now()
        ]);

        DB::table('usages')->insert([
            'id' => 6,
            'tool_id' => 2,
            'water_remaining' => 70,
            'time' => \Carbon\Carbon::now()
        ]);

        DB::table('usages')->insert([
            'id' => 7,
            'tool_id' => 3,
            'water_remaining' => 76,
            'time' => \Carbon\Carbon::now()
        ]);

        DB::table('usages')->insert([
            'id' => 8,
            'tool_id' => 4,
            'water_remaining' => 8,
            'time' => \Carbon\Carbon::now()
        ]);

        DB::table('usages')->insert([
            'id' => 9,
            'tool_id' => 1,
            'water_remaining' => 84,
            'time' => \Carbon\Carbon::now()
        ]);

        DB::table('usages')->insert([
            'id' => 10,
            'tool_id' => 2,
            'water_remaining' => 90,
            'time' => \Carbon\Carbon::now()
        ]);
    }
}
