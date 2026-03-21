@vite(['resources/css/app.css','resources/js/app.js','resources/css/styles.css'])
<html>
    <head class="head23">
        <title class="title23">Iniciar Sesión</title>
    </head>
    <body class="body23">
        <h1 class="title23">Iniciar Sesión</h1>
        <form class="form23" action="{{ url('login') }}" method="POST">
            @csrf
            <div class="div23">
                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div>
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button class="btn23" type="submit">Iniciar Sesión</button><br><br>
            <a class="btn23" href="{{url('/')}}">Volver</a>
            <a class="btn23" href="{{url('/register')}}">Registrarse</a>
        </form>
    </body>
</html>