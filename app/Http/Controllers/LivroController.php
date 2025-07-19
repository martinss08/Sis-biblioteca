<?php

namespace App\Http\Controllers;

use App\Http\Requests\LivroRequest;
use App\Models\Livro;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Log;

class LivroController extends Controller
{
    protected $model;

    public function __construct(Livro $model)
    {   
        $this->model = $model;
    }

    public function index()
    {
        $livros = $this->model->paginate(10);
        // dd($livros);

        return Inertia::render('Home', [
            'livros' => $livros
        ]);
    }

    public function create()
    {
        return Inertia::render('CreateLivro');
    }
    public function store(LivroRequest $request) 
    {
        $dados = $request->validated();

        Livro::create($dados);
        //Criar aquela mss de sucesso ao criar um livro 
        return redirect('/livro');
    }

    public function edit($id) 
    {
        $livro = $this->model->find($id);

        return Inertia::render('EditLivro', [
            'livro' => $livro
        ]);
    }
    public function update(LivroRequest $request, $id)
    {
        $dados = $request->validated();

        $livro = $this->model->find($id);

        $livro->update($dados);

        return redirect('/livro');
    }

    public function destroy($id) {
        // dd("oi");
        $livro = $this->model->find($id);

        $livro->delete();
        
        return redirect()->back();
    }
    
}
