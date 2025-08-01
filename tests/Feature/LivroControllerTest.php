<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Livro;
use App\Models\User;
use Database\Factories\LivroFactory;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LivroControllerTest extends TestCase
{
    // use RefreshDatabase;

    public function test_create_livro()
    {
        $livro = Livro::factory()->make()->toArray();

        $response = $this->post('/livro/store', $livro);

        $response->assertRedirect();

        $this->assertDatabaseHas('livros', [
            'titulo' => $livro['titulo']
        ]);
    }
    
    public function test_update_livro()
    {
        $livro = Livro::factory()->create();

        $novosDados = Livro::factory()->make()->toArray();

        $responde = $this->put("/livro/{$livro->id}", $novosDados);

        $responde->assertRedirect();

        $this->assertDatabaseHas('livros', [
            'titulo' => $novosDados['titulo']
        ]);
    }

    public function test_destroy_livro()
    {
        $user = User::factory()->create();

        $this->actingAs($user);

        $livro = Livro::factory()->create();

        $responde = $this->delete("/livro/{$livro->id}");

        $responde->assertRedirect();

        $this->assertDatabaseMissing('livros', [
            'id' => $livro->id
        ]);
    }
}