<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SoortSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('soort')->insert([
            'soort' => 'Hond',
        ]);
        DB::table('soort')->insert([
            'soort' => 'Kat',
        ]);
        DB::table('soort')->insert([
            'soort' => 'Vogel',
        ]);
        DB::table('soort')->insert([
            'soort' => 'Reptiel',
        ]);
        DB::table('soort')->insert([
            'soort' => 'Knaagdier',
        ]);
    }
}
