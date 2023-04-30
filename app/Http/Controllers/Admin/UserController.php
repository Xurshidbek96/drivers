<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function index()
    {
        $users = User::orderBy('id','desc')->paginate(10);

        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' =>'required|string|max:255',
            'email' =>'required|string|email|unique:users,email',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt('admin12345'),
        ]);

        return redirect()->route('admin.users.index')->with('success', 'Yangi admin qo`shildi');
    }

    public function show($id)
    {
        
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' =>'required|string|max:255',
            'email' =>'required|string|email|unique:users,email,'.$id,
        ]);

        $user = User::findOrFail($id);

        $user->name = $request->name;
        $user->email = $request->email;

        $user->save();

        return redirect()->route('admin.users.index')->with('success', 'Admin ma`lumotlari yangilandi');
    }

    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        
        return redirect()->route('admin.users.index')->with('success', 'Admin o`chirildi');
    }
}