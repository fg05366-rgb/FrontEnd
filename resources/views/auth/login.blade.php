<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
@vite(['resources/css/app.css','resources/js/app.js','resources/css/styles.css'])
</head>
<body class="login-body">
    <!-- Header from index -->
    <header class="header1" id="header-secundario">
        <div class="container1" id="container-primario">
          <ul class="nav nav-pills">
            <li class="nav-item"><a href="{{url('/')}}" class="nav-link1">Inicio</a></li>
            <li class="nav-item"id="nav-right"><a href="{{url('register')}}" class="nav-link">Registrarse</a></li>
          </ul>
        </div>
    </header>

    <div class="container1" id="container10">
        <header class="header2" id="header-secundario">
          <h1 id="titulo-principal">¡LO MEJOR <br>EN MOTORES!</h1>
          <h2 id="titulo-secundario">Impulsa tu alegría ¡A DOS RUEDAS!</h2>
        </header>
    </div>

    <!-- Login Form -->
<div class="login-card">
        <h2>Iniciar Sesión</h2>

        <!-- Session Status -->
        @if (session('status'))
            <div class="alert alert-success mb-4">{{ session('status') }}</div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="form-group">
                <label for="email">{{ __('Email') }}</label>
                <input id="email" class="form-control dark-input" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" />
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <!-- Password -->
            <div class="form-group">
                <label for="password">{{ __('Password') }}</label>
                <input id="password" class="form-control dark-input" type="password" name="password" required autocomplete="current-password" />
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <!-- Remember Me -->
            <div class="form-group d-flex align-items-center">
                <input id="remember_me" type="checkbox" name="remember" class="me-2">
                <label for="remember_me" class="mb-0">{{ __('Remember me') }}</label>
            </div>

            <div class="d-flex justify-content-between">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="nav-link1">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <button type="submit" class="btn23">{{ __('Log in') }}</button>
            </div>
        </form>
    </div>

<style>
.form-control.dark-input {
  background: #3a3a3a !important;
  border: 1px solid #555 !important;
  color: #ffffff !important;
}

.form-control.dark-input::placeholder {
  color: #888 !important;
}

.form-control.dark-input:focus {
  background: #4a4a4a !important;
  border-color: #888 !important;
  color: #ffffff !important;
}

.login-card {
  background: linear-gradient(145deg, #2a2a2a, #1a1a1a) !important;
  color: white !important;
  border: none !important;
  box-shadow: 0 10px 30px rgba(0,0,0,0.5) !important;
}

.form-group label {
  color: #ffffff !important;
  font-weight: 500;
}

.text-danger {
  color: #ff6b6b !important;
}
</style>
</body>
</html>
