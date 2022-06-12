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

        DB::table('temperatures')->insert([
            'id' => 1,
            'tool_id' => 1,
            'current_temperature' => 20,
            'time' => \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date1)
        ]);

        DB::table('temperatures')->insert([
            'id' => 2,
            'tool_id' => 2,
            'current_temperature' => 25,
            'time' => \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date2)
        ]);

        DB::table('temperatures')->insert([
            'id' => 3,
            'tool_id' => 3,
            'current_temperature' => 28,
            'time' => \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date3)
        ]);

        DB::table('temperatures')->insert([
            'id' => 4,
            'tool_id' => 4,
            'current_temperature' => 34,
            'time' => \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date4)
        ]);

        DB::table('temperatures')->insert([
            'id' => 5,
            'tool_id' => 4,
            'current_temperature' => 15,
            'time' => \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date5)
        ]);

        DB::table('temperatures')->insert([
            'id' => 6,
            'tool_id' => 1,
            'current_temperature' => 29,
            'time' => \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date6)
        ]);

        DB::table('temperatures')->insert([
            'id' => 7,
            'tool_id' => 2,
            'current_temperature' => 21,
            'time' => \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date7)
        ]);

        DB::table('temperatures')->insert([
            'id' => 8,
            'tool_id' => 3,
            'current_temperature' => 37,
            'time' => \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date8)
        ]);

        DB::table('temperatures')->insert([
            'id' => 9,
            'tool_id' => 1,
            'current_temperature' => 39,
            'time' => \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date9)
        ]);

        DB::table('temperatures')->insert([
            'id' => 10,
            'tool_id' => 2,
            'current_temperature' => 30,
            'time' => \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date10)
        ]);

        DB::table('temperatures')->insert([
            'id' => 11,
            'tool_id' => 4,
            'current_temperature' => 40,
            'time' => \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date11)
        ]);

        DB::table('temperatures')->insert([
            'id' => 12,
            'tool_id' => 2,
            'current_temperature' => 35,
            'time' => \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date12)
        ]);

        DB::table('temperatures')->insert([
            'id' => 13,
            'tool_id' => 1,
            'current_temperature' => 27,
            'time' => \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date13)
        ]);

        DB::table('temperatures')->insert([
            'id' => 14,
            'tool_id' => 3,
            'current_temperature' => 25,
            'time' => \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date14)
        ]);
    }
}
