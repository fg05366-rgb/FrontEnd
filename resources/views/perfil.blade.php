<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Perfil - Historial de Compras</title>
        @vite(['resources/css/app.css','resources/js/app.js','resources/css/styless.css'])

   
</head>
<body>
    <div class="profile-container">
        
        <a href="{{url('/')}}" class="nav-link active">Volver</a>
        <a href="{{url('/iniciar')}}" class="nav-link active">Iniciar Seción</a>

        <div class="profile-card">
            <div class="profile-header">
                <div class="avatar" id="avatarPreview">
                    <i class="fas fa-user-circle"></i>
                </div>
                <div class="avatar-upload">
                    <label for="avatarInput" class="upload-btn">
                        <i class="fas fa-camera"></i> Subir foto
                    </label>
                    <input type="file" id="avatarInput" accept="image/*" style="display: none;">
                </div>
                <input type="text" id="profileName" class="profile-name-input" placeholder="Tu nombre" value="">
                <input type="text" id="memberSince" class="member-since-input" placeholder="Miembro desde (ej: marzo 2024)" value="">
            </div>

            <div class="purchases-section">
                <div class="section-title">
                    <i class="fas fa-shopping-bag"></i>
                    <h2>Compras realizadas</h2>
                    <button class="add-purchase-btn" id="addPurchaseBtn">
                        <i class="fas fa-plus"></i> Agregar compra
                    </button>
                </div>

                <div class="purchases-list" id="purchasesList">
                </div>

                <div class="purchase-summary">
                    <div class="summary-item">
                        <span class="summary-label">Total gastado</span>
                        <span class="summary-value" id="totalSpent">$0</span>
                    </div>
                    <div class="summary-item">
                        <span class="summary-label">Productos comprados</span>
                        <span class="summary-value" id="productCount">0</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

   
</body>
</html>