<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Product;

use Illuminate\Http\Request;
use Illuminate\View\View;

class UsersController extends Controller
{
public function index(): view
    {
        $products = Product::all();
        return view('index', compact('products'));
    }
    public function verproducto(Product $product): View
    {
        return view('verproducto', compact('product'));
    }
     public function compras(): view
    {
        return view('compras');
        
       
    }
    public function iniciar(): view
    {
        return view('iniciar');
        
       
    }
    public function perfil_admin(): View
    {
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'Debes iniciar sesión para ver tu perfil.');
        }
        $userId = auth()->id();
        $products = Product::where('user_id', $userId)->get();
        return view('perfil_admin', compact('products'));
    }
    public function perfil(): view
    {
        return view('perfil');
        
       
    }
    public function register(): view
    {
        return view('register');
        
       
    }
    
    public function usuarios_admin(): view
    {
         $notes= User::all();
        return view('usuarios_admin',['users' => $notes]);
        
       
    }

    public function edit(User $user)
    {
        if (!auth()->check()) {
            abort(401, 'Autenticación requerida.');
        }
        return response()->json($user->only('id', 'name', 'email'));
    }

    public function update(Request $request, User $user)
    {
        if (!auth()->check()) {
            abort(401, 'Autenticación requerida.');
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
        ]);

        $data = $request->only('name', 'email');

        $user->update($data);

        return response()->json(['success' => true]);
    }

    public function destroy(User $user)
    {
        if (!auth()->check()) {
            abort(401, 'Autenticación requerida.');
        }

        $user->delete();

        return redirect()->route('usuarios_admin')->with('success', 'Usuario eliminado.');
    }
    
}
