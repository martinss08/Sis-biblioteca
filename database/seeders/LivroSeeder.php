<?php

namespace Database\Seeders;

use App\Models\Livro;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class LivroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('pt_BR');

        for ($i = 0; $i < 13; $i++) {
            Livro::create([
                'titulo' => $faker->sentence(3),
                'autor' => $faker->name(),
                'isbn' => $faker->isbn13(),
                'ano' => $faker->year(),
                'quantidade' => $faker->numberBetween(1, 10),
                'descricao' => $faker->paragraph(2),
            ]);
        }
    }
}
