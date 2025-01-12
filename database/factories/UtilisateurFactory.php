<?php

namespace Database\Factories;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 *  \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Utilisateur>
 */
class UtilisateurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected static ?string $password;
    public function definition(): array
    {
        return [
            //Créer un faut utilisa
            'nom' => fake()->Lastname(),
            'prenom'=>fake()->Firstname(),
            'email' => fake()->unique()->safeEmail(),
            'MotDePasse' => static::$password ??= Hash::make('password'),
            'telephone' =>fake()->numerify('##-###-##-##'),
        ];
    }
}
