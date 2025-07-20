<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    protected $model;

    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $user = $this->model->all();

        dd($user);
    }

    public function store(UserRequest $request) 
    {
        // dd($request);
        $dados = $request->validated();

        User::create($dados);

        return redirect('/');
    }
}