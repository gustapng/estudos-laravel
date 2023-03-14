<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {

        // $user = User::create([
        //     'name' => 'joao',
        //     'email' => 'joao@gmail.com',
        //     'password' => '12345'
        // ]);

        //dd($user);

        $users = User::all();
        return view('users', [
            'users' => $users
        ]);
    }

    public function show(User $user)
    {
        // $user->posts()->create([
        //     'title' => 'Meu segundo Post',
        //     'body' => 'Isso é um Post',
        //     'contents' => 'Textaa bonito'
        // ]);

        dd($user->posts);

        return view('user', [
            'name' => 'Gustavo',
            'user' => $user
        ]);
    }
}
