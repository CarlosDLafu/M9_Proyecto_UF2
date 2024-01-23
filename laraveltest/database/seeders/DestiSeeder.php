<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DestiSeeder extends Seeder
{
    public function run()
    {
        // Crea les dades per afegir a la BD
        $destins = [
            [
                'pais' => 'Escocia',
                'ciutat' => 'Glasgow',
                'foto' => 'foto1.jpg',
                'preu' => 200,
                'data' => '22/04/2024',
            ],
            [
                'pais' => 'Egipte',
                'ciutat' => 'El Caire',
                'foto' => 'foto2.jpg',
                'preu' => 150,
                'data' => '30/06/2024',
            ],
            [
                'pais' => 'Surinam',
                'ciutat' => 'Paramaribo',
                'foto' => 'foto2.jpg',
                'preu' => 460,
                'data' => '12/02/2024',
            ],
            [
                'pais' => 'Regne Unit',
                'ciutat' => 'Londres',
                'foto' => 'foto2.jpg',
                'preu' => 130,
                'data' => '22/05/2024',
            ],
            [
                'pais' => 'Espanya',
                'ciutat' => 'Sevilla',
                'foto' => 'foto2.jpg',
                'preu' => 90,
                'data' => '02/03/2024',
            ],
            [
                'pais' => 'Espanya',
                'ciutat' => 'Bilbao',
                'foto' => 'foto2.jpg',
                'preu' => 85,
                'data' => '12/04/2024',
            ]
        ];

        // Inserta els registres a la BD
        foreach ($destins as $desti) {
            DB::table('destins')->insert($desti);
        }
    }
}
