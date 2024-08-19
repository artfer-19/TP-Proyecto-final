<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comentario>
 */
class ComentarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'publicacion_id' =>fake()->numberBetween(1, 50),
            'id_usuario' =>fake()->numberBetween(1, 50),
            'contenido'=>fake()->sentence(),
        ];
    }
}
