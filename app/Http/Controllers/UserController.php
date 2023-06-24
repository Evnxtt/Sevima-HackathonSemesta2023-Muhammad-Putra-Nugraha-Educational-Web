<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('user', compact(['user']));
    }

    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        User::create($request->except('_token', 'submit'));
        return redirect('/user');
    }
}
