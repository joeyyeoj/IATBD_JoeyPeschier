<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class HuisdierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('huisdier')->insert([
            'eigenaar' => '3',
            'fotolocatie' => 'public/files/hond.jpg',
            'naam' => 'Hendrik',
            'leeftijd' => '6',
            'geslacht' => '1',
            'description' => 'Zegt soms woef',
            'soort' => 'Hond',
            'uurtarief' => '42.69',
            'startDatum' => '2021-04-09',
            'endDatum' => '2021-04-16',
        ]);

        DB::table('huisdier')->insert([
            'eigenaar' => '3',
            'fotolocatie' => 'public/files/kat.jpeg',
            'naam' => 'Katrien',
            'leeftijd' => '6',
            'geslacht' => '2',
            'description' => 'Zegt soms miauw',
            'soort' => 'Kat',
            'uurtarief' => '25.00',
            'startDatum' => '2021-04-09',
            'endDatum' => '2021-04-16',
        ]);

        DB::table('huisdier')->insert([
            'eigenaar' => '4',
            'fotolocatie' => 'public/files/vogels.jpeg',
            'naam' => 'Vera',
            'leeftijd' => '6',
            'geslacht' => '2',
            'description' => 'Fladdert hier, fladdert daar',
            'soort' => 'Vogel',
            'uurtarief' => '69.00',
            'startDatum' => '2021-04-09',
            'endDatum' => '2021-04-16',
        ]);

        DB::table('huisdier')->insert([
            'eigenaar' => '2',
            'fotolocatie' => 'public/files/reptiel.png',
            'naam' => 'Kees',
            'leeftijd' => '11',
            'geslacht' => '1',
            'description' => 'Eet graag vliegen',
            'soort' => 'Reptiel',
            'uurtarief' => '22.00',
            'startDatum' => '2021-04-09',
            'endDatum' => '2021-04-16',
        ]);

        DB::table('huisdier')->insert([
            'eigenaar' => '2',
            'fotolocatie' => 'public/files/muis.jpeg',
            'naam' => 'Marc de Muis',
            'leeftijd' => '2',
            'geslacht' => '1',
            'description' => 'Knaagt aan van alles.',
            'soort' => 'Knaagdier',
            'uurtarief' => '10.00',
            'startDatum' => '2021-04-09',
            'endDatum' => '2021-04-16',
        ]);

        DB::table('huisdier')->insert([
            'eigenaar' => '3',
            'fotolocatie' => 'public/files/muis.jpeg',
            'naam' => 'Marcel',
            'leeftijd' => '2',
            'geslacht' => '1',
            'description' => 'Klein muisje dat graag slaapt',
            'soort' => 'Knaagdier',
            'uurtarief' => '12.00',
            'startDatum' => '2021-04-12',
            'endDatum' => '2021-04-16',
        ]);

        DB::table('huisdier')->insert([
            'eigenaar' => '4',
            'fotolocatie' => 'public/files/hond.jpg',
            'naam' => 'Hendrik de Hond',
            'leeftijd' => '6',
            'geslacht' => '1',
            'description' => 'Zegt soms woef',
            'soort' => 'Hond',
            'uurtarief' => '15',
            'startDatum' => '2021-04-23',
            'endDatum' => '2021-04-30',
        ]);
    }
}
