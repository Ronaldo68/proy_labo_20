<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Mostrar usuarios
     */
    public function index()
    {
        $users = User::all();

        return view('admin.users.index', compact('users'));
    }

    /**
     * Mostrar formulario crear
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Guardar usuario
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'user' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'rol' => 'required',
            'password' => 'required'
        ]);

        User::create([
            'name' => $request->name,
            'user' => $request->user,
            'email' => $request->email,
            'rol' => $request->rol,
            'password' => bcrypt($request->password)
        ]);

        return redirect()
            ->route('admin.users.index')
            ->with('success', 'Usuario creado correctamente');
    }

    /**
     * Mostrar formulario editar
     */
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Actualizar usuario
     */
    public function update(Request $request, User $user)
    {
        $user->update([
            'name' => $request->name,
            'user' => $request->user,
            'email' => $request->email,
            'rol' => $request->rol
        ]);

        return redirect()
            ->route('admin.users.index');
    }

    /**
     * Eliminar usuario
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()
            ->route('admin.users.index');
    }
}