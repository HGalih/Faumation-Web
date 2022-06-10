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
            'id_usage' => 1,
            'user_id' => 1,
            'usage_amount' => 10,
            'usage_time' => \Carbon\Carbon::now()
        ]);

        DB::table('usages')->insert([
            'id_usage' => 2,
            'user_id' => 2,
            'usage_amount' => 25,
            'usage_time' => \Carbon\Carbon::now()
        ]);

        DB::table('usages')->insert([
            'id_usage' => 3,
            'user_id' => 3,
            'usage_amount' => 36,
            'usage_time' => \Carbon\Carbon::now()
        ]);

        DB::table('usages')->insert([
            'id_usage' => 4,
            'user_id' => 4,
            'usage_amount' => 42,
            'usage_time' => \Carbon\Carbon::now()
        ]);

        DB::table('usages')->insert([
            'id_usage' => 5,
            'user_id' => 5,
            'usage_amount' => 56,
            'usage_time' => \Carbon\Carbon::now()
        ]);

        DB::table('usages')->insert([
            'id_usage' => 6,
            'user_id' => 6,
            'usage_amount' => 70,
            'usage_time' => \Carbon\Carbon::now()
        ]);

        DB::table('usages')->insert([
            'id_usage' => 7,
            'user_id' => 7,
            'usage_amount' => 76,
            'usage_time' => \Carbon\Carbon::now()
        ]);

        DB::table('usages')->insert([
            'id_usage' => 8,
            'user_id' => 8,
            'usage_amount' => 80,
            'usage_time' => \Carbon\Carbon::now()
        ]);

        DB::table('usages')->insert([
            'id_usage' => 9,
            'user_id' => 9,
            'usage_amount' => 84,
            'usage_time' => \Carbon\Carbon::now()
        ]);

        DB::table('usages')->insert([
            'id_usage' => 10,
            'user_id' => 10,
            'usage_amount' => 90,
            'usage_time' => \Carbon\Carbon::now()
        ]);
    }
}
