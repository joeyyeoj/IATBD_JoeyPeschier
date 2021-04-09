<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class AanvraagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('aanvraag')->insert([
            'oppasserId' => '1',
            'huisdierId' => '1',
        ]);

        DB::table('aanvraag')->insert([
            'oppasserId' => '1',
            'huisdierId' => '3',
        ]);

        DB::table('aanvraag')->insert([
            'oppasserId' => '1',
            'huisdierId' => '2',
        ]);
    }
}
