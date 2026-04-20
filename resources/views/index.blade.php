<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/js/app.js','resources/css/styles.css' ,'public/images/fondo.jpg'])
    <title>Inicio</title>
</head>
 
<!-- header dónde se muestran los botnes del menú y barra navegadora -->
<header class="header1" id="header-secundario">
    <div class="container1" id="container-primario">
    
      <ul class="nav nav-pills">
        <li class="nav-item"><a href="#" class="nav-link1" aria-current="page">Inicio</a></li>
        <li class="nav-item"id="nav-right"><a href="{{url('perfil')}}" class="nav-link active">Perfil</a></li>
        <li class="nav-item"id="nav-right"><a href="{{url('compras')}}" class="nav-link active">Compras</a></li>
      </ul>
      
    
  </div>
</header>

    <!-- contenedor dónde se muestran los eslogan -->
    <div class="container1"id="container10">
    <header class="header2"id="header-secundario">
      <h1 id="titulo-principal">¡LO MEJOR <br>EN MOTORES!</h1>
     
      <h2 id="titulo-secundario">Impulsa tu alegría ¡A DOS RUEDAS!</h2>
      
    </header>
  </div>

<!-- tabla dónde se muestran los productos -->
<div class="album py-5 bg-light">
    <div class="container" id="container-secundario">

<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
  @forelse($products as $product)
    <div class="col">
      <div class="card shadow-sm">
        <img src="{{ $product->image_path ? asset('storage/' . $product->image_path) : asset('images/fondo.jpg') }}" class="card-img-top bd-placeholder-img" alt="{{ $product->name }}" style="height: 225px; object-fit: cover;">
        <div class="card-body">
          <h5 class="card-title">{{ $product->name }}</h5>
          <p class="card-text">{{ $product->description }}</p>
          <p class="card-text fw-bold text-success">${{ number_format($product->price, 2) }}</p>
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
              <a href="{{ route('verproducto.show', $product->id) }}" class="btn btn-sm btn-outline-secondary">Ver</a>
              
            </div>
            <small class="text-muted">{{ $product->created_at->diffForHumans() }}</small>
          </div>
        </div>
      </div>
    </div>
  @empty
    <div class="col-12">
      <p class="text-center">No hay productos disponibles.</p>
    </div>
  @endforelse
</div>
    </div>
  </div>
<body>
  </body>
  </html>
        
        
       
    
    