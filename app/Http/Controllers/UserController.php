<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $data = [
            'user' => User::all(), //Select*from user
        ];
        return view('user.index', $data);
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $name = $request->input('name');

        $user = new User();
        $user->name = $name;
        $user->save();

        return redirect('/user');
    }

    public function edit($id)
    //select*form where id
    {
        $user = User::find($id);
        $data = [
            'user' => $user
        ];
        return view('user.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $name = $request->input('name');

        $user = User::find($id);
        $user->name = $name;
        $user->save();

        return redirect('/user');
    }

    public function delete($id)
    //select*form where id
    {
        $user = User::find($id);
        $user ->delete();

        return redirect('/user');
    }
}
