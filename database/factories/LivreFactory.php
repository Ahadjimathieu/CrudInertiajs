<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LivreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "titre" => $this->faker->text(40),
            "edition" => $this->faker->text(40),
            "annee_publication" => $this->faker->year($max = 'now'),
            "image" => "",
            "type_id" =>rand(1,6),
            "auteur_id" =>rand(1,10),
            //
        ];
    }
}
