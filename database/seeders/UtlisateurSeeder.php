<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Utilisateur;


class UtlisateurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // créer des données initiales avec les seeders : des données de test
        Utilisateur::create([
            'nom' => 'DUPONT',
            'prenom' => 'Jean',
            'email' => 'jean.dupont@gmail.com',
            'motDePasse' => bcrypt('password123'),
            'telephone' => '770000000'
]);

    }
}
