<?php

namespace App\Http\Controllers;

use \App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('index', compact("users"));
    }
    public function show($id)
    {

        $user = User::find($id);
        return view('show', compact('user'));
    }
    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);
        return redirect()->route('indexx')->with('success', 'user added ');
    }
    public function edit($id)
    {
        $user = User::find($id);
        return view('edit', compact('user'));
    }
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),

        ]);
        return redirect()->route('indexx')->with('success', 'user added ');
    }
    public function destroy($id)
    {
        $user = User::find($id)->delete();
        return redirect()->route('indexx')->with('success', 'User Deleted');
    }
}
