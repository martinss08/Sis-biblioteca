<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;

class UserController extends Controller
{
    protected $model;

    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $users = $this->model->all();

        return Inertia::render('User/ListaUser', [
            "users" => $users
        ]);
    }

    public function create()
    {
        return Inertia::render('Auth/Register');
    }

    public function store(UserRequest $request) 
    {
        $dados = $request->validated();

        $this->model->create($dados);

        return redirect()->route('user.index');
    }

    public function edit($id) 
    {
        $user = $this->model->findOrFail($id);

        return Inertia::render('Auth/Register', [
            "user" => $user
        ]);
    }
    public function update($id, UserRequest $request ) 
    {
        $user = $this->model->findOrFail($id);

        $dados = $request->validated();

        if (empty($dados['password'])) {
            unset($dados['password']);
        }

        $user->update($dados);
 
        return redirect()->route('user.index');
    } 

    public function destroy($id)
    {
        $user = $this->model->findOrFail($id);

        $user->delete();

        return redirect()->route('user.index');
    }
}