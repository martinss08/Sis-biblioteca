<?php

namespace Database\Factories;

use App\Models\Livro;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Livro>
 */
class LivroFactory extends Factory
{
    protected $model = Livro::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titulo' => fake()->name(),
            'autor' => fake()->name(),
            'isbn' => fake()->isbn10(),
            'ano' => fake()->year(),
            'quantidade' => fake()->numberBetween(1, 10),
            'descricao' => fake()->paragraph()
        ];
    }
}
