<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Quote;

class QuotesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Quote::create([
            'title' => 'Mi primera cita',
            'real_publication_year' =>'2023-06-29',
            'author' => 'El creador',
            'message' => 'Esta es mi primera cita',
            'user_id' => User::all()->random()->id,
        ]);

        Quote::create([
            'title' => 'Masa y angulos',
            'real_publication_year' =>'2023-06-29',
            'author' => 'Newton',
            'message' => 'Según el grando de inclinacion, toda masa aumenta',
            'user_id' => User::all()->random()->id,
        ]);
    }   
}
