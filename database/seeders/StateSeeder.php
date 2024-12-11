<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $states = [
            [
                'name' => 'Amazonas',
                'zip_code' => '91',
                'country_id' => 1,
            ],
            [
                'name' => 'Antioquia',
                'zip_code' => '05',
                'country_id' => 1,
            ],
            [
                'name' => 'Arauca',
                'zip_code' => '81',
                'country_id' => 1,
            ],
            [
                'name' => 'Atlántico',
                'zip_code' => '08',
                'country_id' => 1,
            ],
            [
                'name' => 'Bogotá',
                'zip_code' => '11',
                'country_id' => 1,
            ],
            [
                'name' => 'Bolívar',
                'zip_code' => '13',
                'country_id' => 1,
            ],
            [
                'name' => 'Boyacá',
                'zip_code' => '15',
                'country_id' => 1,
            ],
            [
                'name' => 'Caldas',
                'zip_code' => '17',
                'country_id' => 1,
            ],
            [
                'name' => 'Caquetá',
                'zip_code' => '18',
                'country_id' => 1,
            ],
            [
                'name' => 'Casanare',
                'zip_code' => '85',
                'country_id' => 1,
            ],
            [
                'name' => 'Cauca',
                'zip_code' => '19',
                'country_id' => 1,
            ],
            [
                'name' => 'Cesar',
                'zip_code' => '20',
                'country_id' => 1,
            ],
            [
                'name' => 'Chocó',
                'zip_code' => '27',
                'country_id' => 1,
            ],
            [
                'name' => 'Córdoba',
                'zip_code' => '23',
                'country_id' => 1,
            ],
            [
                'name' => 'Cundinamarca',
                'zip_code' => '25',
                'country_id' => 1,
            ],
            [
                'name' => 'Guainía',
                'zip_code' => '94',
                'country_id' => 1,
            ],
            [
                'name' => 'Guaviare',
                'zip_code' => '95',
                'country_id' => 1,
            ],
            [
                'name' => 'Huila',
                'zip_code' => '41',
                'country_id' => 1,
            ],
            [
                'name' => 'La Guajira',
                'zip_code' => '44',
                'country_id' => 1,
            ],
            [
                'name' => 'Magdalena',
                'zip_code' => '47',
                'country_id' => 1,
            ],
            [
                'name' => 'Meta',
                'zip_code' => '50',
                'country_id' => 1,

            ],
            [
                'name' => 'Nariño',
                'zip_code' => '52',
                'country_id' => 1,
            ],
            [
                'name' => 'Norte de Santander',
                'zip_code' => '54',
                'country_id' => 1,
            ],
            [
                'name' => 'Putumayo',
                'zip_code' => '86',
                'country_id' => 1,
            ],
            [
                'name' => 'Quindío',
                'zip_code' => '63',
                'country_id' => 1,
            ],
            [
                'name' => 'Risaralda',
                'zip_code' => '66',
                'country_id' => 1,
            ],
            [
                'name' => 'San Andrés y Providencia',
                'zip_code' => '88',
                'country_id' => 1,
            ],
            [
                'name' => 'Santander',
                'zip_code' => '68',
                'country_id' => 1,
            ],
            [
                'name' => 'Sucre',
                'zip_code' => '70',
                'country_id' => 1,
            ],
            [
                'name' => 'Tolima',
                'zip_code' => '73',
                'country_id' => 1,
            ],
            [
                'name' => 'Valle del Cauca',
                'zip_code' => '76',
                'country_id' => 1,
            ],
            [
                'name' => 'Vaupés',
                'zip_code' => '97',
                'country_id' => 1,
            ],
            [
                'name' => 'Vichada',
                'zip_code' => '99',
                'country_id' => 1,
            ]
        ];
        State::insert($states);
    }
}
