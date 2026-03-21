<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Producto</title>
   @vite(['resources/css/app.css','resources/js/app.js','resources/css/styless.css'])
</head>
<body>
    <div class="product-container">
        <a href="{{ url('/') }}" class="nav-link active">Volver</a>
        <div class="carousel">
            <input type="radio" name="slide" id="slide1" checked>
            <input type="radio" name="slide" id="slide2">
            <input type="radio" name="slide" id="slide3">
            
            <div class="carousel-images">
                <div class="carousel-slide">
                    
                </div>
                <div class="carousel-slide">
                    
                </div>
                <div class="carousel-slide">
                    
                </div>
            </div>
            
            <a href="#" class="carousel-btn prev" onclick="return false;">❮</a>
            <a href="#" class="carousel-btn next" onclick="return false;">❯</a>
            
            <div class="carousel-nav">
                <label for="slide1"></label>
                <label for="slide2"></label>
                <label for="slide3"></label>
            </div>
        </div>

        
        <div class="product-info">
            
            <div class="price-section">
                <div class="price">$__________</div>
            </div>

            
            <div class="features-section">
                <h3>Características</h3>
                <div class="features-blank">
                    
                </div>
            </div>

           
            <a href="#" class="buy-btn">Comprar ahora</a>
        </div>
    </div>
</body>
</html>