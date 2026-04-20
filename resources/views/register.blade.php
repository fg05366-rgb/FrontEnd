<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    @vite(['resources/css/app.css','resources/js/app.js','resources/css/styles.css'])
</head>
<body class="login-body">
    <!-- Header from index -->
    <header class="header1" id="header-secundario">
        <div class="container1" id="container-primario">
          <ul class="nav nav-pills">
            <li class="nav-item"><a href="{{url('/')}}" class="nav-link1">Inicio</a></li>
            <li class="nav-item"id="nav-right"><a href="{{url('iniciar')}}" class="nav-link">Iniciar Sesión</a></li>
          </ul>
        </div>
    </header>

    <div class="container1" id="container10">
        <header class="header2" id="header-secundario">
          <h1 id="titulo-principal">¡LO MEJOR <br>EN MOTORES!</h1>
          <h2 id="titulo-secundario">Impulsa tu alegría ¡A DOS RUEDAS!</h2>
        </header>
    </div>

    <!-- Register Form -->
    <div class="register-container login-card">
        <h2>Registrarse</h2>
        
        <form method="POST" action="{{ route('register') }}">
            @csrf
            
            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" id="name" name="name" class="form-control dark-input" value="{{ old('name') }}" required>
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="email">Correo electrónico:</label>
                <input type="email" id="email" name="email" class="form-control dark-input" value="{{ old('email') }}" required>
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" class="form-control dark-input" required>
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="password_confirmation">Confirmar contraseña:</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control dark-input" required>
            </div>
            
            <div class="d-flex justify-content-between">
                <a href="{{url('iniciar')}}" class="nav-link1">Iniciar Sesión</a>
                <button type="submit" class="btn23">Registrarse</button>
            </div>
        </form>
    </div>
</body>
</html>
