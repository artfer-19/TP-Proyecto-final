<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Publicacion>
 */
class PublicacionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'id_usuario' =>fake()->numberBetween(1, 50),
            'titulo' => fake()->sentence(),
            'contenido' => fake()->sentence(),
            'cantidad_comentarios'=> fake()->numberBetween(5, 100000),
        ];
    }
}
