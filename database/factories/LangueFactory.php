<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Langue>
 */
class LangueFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Name' => "français",
            'Subtitle' => 'la langue Française - اللغـــة الفرنسيـــة',
            'Motivation' => ' le français est
            parmis les langue la plus parlée au monde , et pour les francophones tel que
            les marocain et les africains, la langue française est indisponsable..',
            'Raisons' => '
            une langue parlée dans le monde entier& une langue pour trouver un emploi&
            la langue de la culture& une langue pour voyager& une langue pour étudier
            dans les universités françaises& l’autre langue des relations
            internationales& une langue pour s’ouvrir sur le monde& la langue de l’amour
            et de l’esprit& ',
            'Piece_frais' => null,
            'Conditions_Etudes' => null,
            'Conditions_Formations' => null,
            'Conditions_Cherche_Emploi' => null,
        ];
    }
}
