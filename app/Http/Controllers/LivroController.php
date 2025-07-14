<?php

namespace App\Http\Controllers;

use App\Http\Requests\LivroRequest;
use App\Models\Livro;
use Illuminate\Http\Request;
use Inertia\Inertia;

class LivroController extends Controller
{
    protected $model;

    public function __construct(Livro $model)
    {   
        $this->model = $model;
    }

    public function index()
    {
        dd('index');
    }

    public function create()
    {
        return Inertia::render('CreateLivro');

    }
    public function store(LivroRequest $request) 
    {
        $dados = $request->validate();

        Livro::create($dados);

        dd("store");
    }


    
}
