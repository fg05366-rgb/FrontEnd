<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/js/app.js','resources/css/styles.css'])
    <title>Admin Panel - Productos</title>
</head>
<body>
<header class="header1" id="header-secundario">
    <div class="container1" id="container-primario">
      <ul class="nav nav-pills">
        <li class="nav-item"><a href="{{url('/')}}" class="nav-link1">Inicio</a></li>
        <li class="nav-item"id="nav-right"><a href="{{url('perfil')}}" class="nav-link">Perfil</a></li>
        <li class="nav-item"id="nav-right"><a href="{{url('compras')}}" class="nav-link">Compras</a></li>
      </ul>
    </div>
</header>

<div class="container my-5">
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Create Form -->
    <div class="card mb-5">
        <div class="card-header">
            <h3>Crear Nuevo Producto</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Nombre</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required>
                            @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Precio</label>
                            <input type="number" step="0.01" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required>
                            @error('price') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Descripción</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="3">{{ old('description') }}</textarea>
                    @error('description') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Imagen</label>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" accept="image/*">
                    @error('image') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <button type="submit" class="btn btn-primary">Crear Producto</button>
            </form>
        </div>
    </div>

    
    <h2>Tus Productos</h2>
    @if($products->isEmpty())
        <p>No tienes productos. Crea uno arriba.</p>
    @else
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
        @foreach($products as $product)
        <div class="col">
            <div class="card shadow-sm">
                <img src="{{ $product->image_path ? asset('storage/' . $product->image_path) : asset('images/fondo.jpg') }}" class="card-img-top bd-placeholder-img" alt="{{ $product->name }}" style="height: 225px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">{{ $product->description }}</p>
                    <p class="card-text fw-bold text-success">${{ number_format($product->price, 2) }}</p>
                    <div class="btn-group" role="group">
                        <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#editModal{{ $product->id }}" data-edit data-product-id="{{ $product->id }}">Editar</button>
                        <button class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $product->id }}">Borrar</button>
                    </div>
                </div>
            </div>
            @include('components.edit-product-modal', ['product' => $product])
            @include('components.delete-product-modal', ['product' => $product])
        </div>
        @endforeach
    </div>
    @endif
</div>

@if(isset($products))

@endif
</body>
</html>
        