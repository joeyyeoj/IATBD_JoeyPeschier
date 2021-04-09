<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
            'oppasserId' => '1',
            'aanbiederId' => '2',
            'stars' => '4',
            'description' => 'Hartstikke gezellig!'
        ]);

        DB::table('reviews')->insert([
            'oppasserId' => '1',
            'aanbiederId' => '3',
            'stars' => '1',
            'description' => 'Ik heb nog steeds mijn dier niet terug'
        ]);
    }
}
