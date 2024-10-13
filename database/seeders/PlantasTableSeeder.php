<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlantasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('plantas')->insert([
            [
                'nome_cientifico' => 'Handroanthus albus',
                'nome_comum' => 'Ipê Amarelo',
                'bioma' => 'Cerrado',
                'descricao' => 'Árvore de grande porte, muito usada na arborização urbana.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nome_cientifico' => 'Schinus terebinthifolia',
                'nome_comum' => 'Aroeira',
                'bioma' => 'Mata Atlântica',
                'descricao' => 'Planta medicinal nativa do Brasil, conhecida por suas propriedades anti-inflamatórias.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nome_cientifico' => 'Erythrina falcata',
                'nome_comum' => 'Mulungu',
                'bioma' => 'Mata Atlântica',
                'descricao' => '',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nome_cientifico' => 'Araucaria angustifolia',
                'nome_comum' => 'Pinheiro-do-Paraná',
                'bioma' => 'Mata de Araucária',
                'descricao' => '',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
