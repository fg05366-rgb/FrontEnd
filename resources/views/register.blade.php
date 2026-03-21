<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    @vite(['resources/css/app.css','resources/js/app.js','resources/css/styless.css'])
</head>
<body>
    <div class="register-container">
        <h2>Registrarse</h2>
        
        <form action="#" method="POST">
            
            <div class="form-group">
                <label for="email">Correo electrónico:</label>
                <input type="email" id="email" name="email" required>
            </div>
            
            
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
            </div>
            
          
            <div class="form-group">
                <label for="confirm_password">Confirmar contraseña:</label>
                <input type="password" id="confirm_password" name="confirm_password" required>
            </div>
            
            
            
            
            
            <button type="submit">Registrarse</button>
            <a href="{{url('/')}}"><button type="button">Volver</button></a>
        </form>
        
       
    </div>
</body>
</html>