<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Joey",
            'email' => "oppas@passenopjedier.nl",
            'password' => bcrypt('testpass'),
            'leeftijd' => '20',
            'omschrijving' => 'Oppasser in hart en nieren (en longen)',
            'role' => 'Oppasser',
            'honden' => '1',
            'katten' => '1',
            'vogels' => '1',
            'reptielen' => '0',
            'knaagdieren' => '1',
        ]);

        DB::table('users')->insert([
            'name' => "Pietje",
            'email' => "Aanbieder@passenopjedier.nl",
            'password' => bcrypt('testpass'),
            'leeftijd' => '20',
            'omschrijving' => 'Op zoek naar een oppas!'
        ]);

        DB::table('users')->insert([
            'name' => "Jim",
            'email' => "jim@passenopjedier.nl",
            'password' => bcrypt('testpass'),
            'leeftijd' => '20',
            'omschrijving' => 'Op zoek naar een oppas!'
        ]);

        DB::table('users')->insert([
            'name' => "Marc",
            'email' => "marc@passenopjedier.nl",
            'password' => bcrypt('testpass'),
            'leeftijd' => '20',
            'omschrijving' => 'Op zoek naar een oppas!'
        ]);
        
        DB::table('users')->insert([
            'name' => "Admin",
            'email' => "admin@passenopjedier.nl",
            'password' => bcrypt('testpass'),
            'leeftijd' => '20',
            'omschrijving' => 'Admin420',
            'role' => 'Oppasser',
            'admin' => '1'
        ]);

    
    }
}
