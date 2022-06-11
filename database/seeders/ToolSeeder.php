<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ToolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tools')->insert([
            'id' => 1,
            'user_id' => 1,
            'description' => 'Bak Mandi 1',
        ]);

        DB::table('tools')->insert([
            'id' => 2,
            'user_id' => 1,
            'description' => 'Bak Mandi 2',
        ]);

        DB::table('tools')->insert([
            'id' => 3,
            'user_id' => 1,
            'description' => 'Bak Mandi 3',
        ]);

        DB::table('tools')->insert([
            'id' => 4,
            'user_id' => 1,
            'description' => 'Bak Mandi 4',
        ]);
    }
}
