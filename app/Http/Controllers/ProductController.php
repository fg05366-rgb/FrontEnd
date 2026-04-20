<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index()
    {
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'Debes iniciar sesión para ver tus productos.');
        }
        $userId = auth()->id();
        $products = Product::where('user_id', $userId)->get();
        return view('perfil_admin', compact('products'));
    }

    public function store(StoreProductRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('products', 'public');
            $data['image_path'] = $path;
        }

        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'Debes iniciar sesión para crear productos.');
        }
        $data['user_id'] = auth()->id();

        Product::create($data);

        return redirect()->route('admin.products.index')->with('success', 'Producto creado.');
    }

    public function edit(Product $product)
    {
        if (!auth()->check()) {
            abort(401, 'Autenticación requerida.');
        }
        $userId = auth()->id();
        if ($product->user_id !== $userId) {
            abort(403);
        }

        return response()->json($product);
    }

    public function update(UpdateProductRequest $request, Product $product)
    {
        if (!auth()->check()) {
            abort(401, 'Autenticación requerida.');
        }
        $userId = auth()->id();
        if ($product->user_id !== $userId) {
            abort(403);
        }

        $data = $request->validated();

        if ($request->hasFile('image')) {
            if ($product->image_path) {
                Storage::disk('public')->delete($product->image_path);
            }
            $path = $request->file('image')->store('products', 'public');
            $data['image_path'] = $path;
        }

        $product->update($data);

        return response()->json(['success' => true]);
    }

    public function destroy(Product $product)
    {
        if (!auth()->check()) {
            abort(401, 'Autenticación requerida.');
        }
        $userId = auth()->id();
        if ($product->user_id !== $userId) {
            abort(403);
        }

        if ($product->image_path) {
            Storage::disk('public')->delete($product->image_path);
        }

        $product->delete();

        return redirect()->route('admin.products.index')->with('success', 'Producto eliminado.');
    }
}
