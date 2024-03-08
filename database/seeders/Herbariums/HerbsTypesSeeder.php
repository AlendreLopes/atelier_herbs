<?php

namespace Database\Seeders\Herbariums;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HerbsTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('herbs_types')
            ->insert([
                'title' => 'Cool',
                'user_id' => 1,
            ]);
        DB::table('herbs_types')
            ->insert([
                'title' => 'Warm',
                'user_id' => 1,
            ]);
        DB::table('herbs_types')->insert([
            'title' => 'Hot',
            'user_id' => 1,
        ]);
    }
}
