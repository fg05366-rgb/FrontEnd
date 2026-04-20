<?php
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/index',[UsersController::class,'index'])->name('index');
Route::get('/verproducto/{product}',[UsersController::class,'verproducto'])->name('verproducto.show');
Route::get('/compras',[UsersController::class,'compras'])->name('compras');
Route::get('/iniciar',[UsersController::class,'iniciar'])->name('iniciar');
Route::get('/admin/products', [ProductController::class, 'index'])->name('admin.products.index');
Route::post('/admin/products', [ProductController::class, 'store'])->name('admin.products.store');
Route::get('/admin/products/{product}/edit', [ProductController::class, 'edit'])->name('admin.products.edit');
Route::put('/admin/products/{product}', [ProductController::class, 'update'])->name('admin.products.update');
Route::delete('/admin/products/{product}', [ProductController::class, 'destroy'])->name('admin.products.destroy');

Route::get('/admin/users/{user}/edit', [UsersController::class, 'edit'])->name('admin.users.edit');
Route::put('/admin/users/{user}', [UsersController::class, 'update'])->name('admin.users.update');
Route::delete('/admin/users/{user}', [UsersController::class, 'destroy'])->name('admin.users.destroy');

Route::get('/perfil_admin',[UsersController::class,'perfil_admin'])->name('perfil_admin');
Route::get('/perfil',[UsersController::class,'perfil'])->name('perfil');
Route::get('/register',[UsersController::class,'register'])->name('register');
Route::get('/usuarios_admin',[UsersController::class,'usuarios_admin'])->name('usuarios_admin'); 
// Route::get('/', function () {
//     return view('index');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
