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
        // hari ini (today)
        $date1 = '2022-06-11 12:00:00';
        $date2 = '2022-06-11 12:03:00';
        $date3 = '2022-06-11 12:06:00';
        $date4 = '2022-06-11 12:09:00';
        $date5 = '2022-06-11 12:12:00';
        $date6 = '2022-06-11 12:15:00';
        $date7 = '2022-06-11 12:18:00';
        // hari sebelumnya (yesterday)
        $date8 = '2022-06-10 12:00:00';
        $date9 = '2022-06-10 12:03:00';
        $date10 = '2022-06-10 12:06:00';
        $date11 = '2022-06-10 12:09:00';
        $date12 = '2022-06-10 12:12:00';
        $date13 = '2022-06-10 12:15:00';
        $date14 = '2022-06-10 12:18:00';

        DB::table('usages')->insert([
            'id' => 1,
            'tool_id' => 1,
            'water_remaining' => 10,
            'time' => \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date1)
        ]);

        DB::table('usages')->insert([
            'id' => 2,
            'tool_id' => 2,
            'water_remaining' => 25,
            'time' => \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date2)
        ]);

        DB::table('usages')->insert([
            'id' => 3,
            'tool_id' => 3,
            'water_remaining' => 36,
            'time' => \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date3)
        ]);

        DB::table('usages')->insert([
            'id' => 4,
            'tool_id' => 4,
            'water_remaining' => 42,
            'time' => \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date4)
        ]);

        DB::table('usages')->insert([
            'id' => 5,
            'tool_id' => 1,
            'water_remaining' => 56,
            'time' => \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date5)
        ]);

        DB::table('usages')->insert([
            'id' => 6,
            'tool_id' => 2,
            'water_remaining' => 70,
            'time' => \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date6)
        ]);

        DB::table('usages')->insert([
            'id' => 7,
            'tool_id' => 3,
            'water_remaining' => 76,
            'time' => \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date7)
        ]);

        DB::table('usages')->insert([
            'id' => 8,
            'tool_id' => 4,
            'water_remaining' => 8,
            'time' => \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date8)
        ]);

        DB::table('usages')->insert([
            'id' => 9,
            'tool_id' => 1,
            'water_remaining' => 84,
            'time' => \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date9)
        ]);

        DB::table('usages')->insert([
            'id' => 10,
            'tool_id' => 2,
            'water_remaining' => 90,
            'time' => \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date10)
        ]);

        DB::table('usages')->insert([
            'id' => 11,
            'tool_id' => 1,
            'water_remaining' => 36,
            'time' => \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date11)
        ]);

        DB::table('usages')->insert([
            'id' => 12,
            'tool_id' => 3,
            'water_remaining' => 24,
            'time' => \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date12)
        ]);

        DB::table('usages')->insert([
            'id' => 13,
            'tool_id' => 2,
            'water_remaining' => 59,
            'time' => \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date13)
        ]);

        DB::table('usages')->insert([
            'id' => 14,
            'tool_id' => 4,
            'water_remaining' => 64,
            'time' => \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date14)
        ]);
    }
}
