<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Livro;
use Database\Factories\LivroFactory;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LivroControllerTest extends TestCase
{
    // use RefreshDatabase;

    public function test_create_livro()
    {
        $livro = LivroFactory::new()->make()->toArray();

        $response = $this->post('/livro/store', $livro);

        $response->assertRedirect();

        // $this->assertDatabaseHas('livros', [
        //     'titulo' => $livro['titulo']
        // ]);
    }
    
    public function test_update_livro()
    {
        $livro = Livro::factory()->create();

        $novosDados = LivroFactory::new()->make()->toArray();

        $responde = $this->put("/livro/{$livro->id}", $novosDados);

        $responde->assertRedirect();

        $this->assertDatabaseHas('livros', [
            'titulo' => $novosDados
        ]);
    }
}