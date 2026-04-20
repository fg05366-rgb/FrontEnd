<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Compras - Historial de Pedidos</title>
          @vite(['resources/css/app.css','resources/js/app.js','resources/css/styless.css'])

</head>
<body>
    <div class="purchases-container">
        <div class="purchases-card">
            <a  href="{{url('/index')}}" class="nav-link active">Volver</a>
            <div class="purchases-header">
                <i class="fas fa-shopping-bag"></i>
                <h1>Mis Compras</h1>
                <p>Historial de pedidos realizados</p>
            </div>

           
            <div class="purchases-list">
               
                <div class="purchase-item">
                    <div class="purchase-icon">
                        <i class="fas fa-box"></i>
                    </div>
                    <div class="purchase-info">
                        <div class="product-field">
                            <label>Producto:</label>
                            <div class="empty-field">_________________________</div>
                        </div>
                        <div class="purchase-details">
                            <div class="detail">
                                <label>Precio:</label>
                                <div class="empty-field">______________</div>
                            </div>
                            <div class="detail">
                                <label>Hora de llegada:</label>
                                <div class="empty-field">______________</div>
                            </div>
                        </div>
                    </div>
                </div>

                
                <div class="purchase-item">
                    <div class="purchase-icon">
                        <i class="fas fa-box"></i>
                    </div>
                    <div class="purchase-info">
                        <div class="product-field">
                            <label>Producto:</label>
                            <div class="empty-field">_________________________</div>
                        </div>
                        <div class="purchase-details">
                            <div class="detail">
                                <label>Precio:</label>
                                <div class="empty-field">______________</div>
                            </div>
                            <div class="detail">
                                <label>Hora de llegada:</label>
                                <div class="empty-field">______________</div>
                            </div>
                        </div>
                    </div>
                </div>

                
                <div class="purchase-item">
                    <div class="purchase-icon">
                        <i class="fas fa-box"></i>
                    </div>
                    <div class="purchase-info">
                        <div class="product-field">
                            <label>Producto:</label>
                            <div class="empty-field">_________________________</div>
                        </div>
                        <div class="purchase-details">
                            <div class="detail">
                                <label>Precio:</label>
                                <div class="empty-field">______________</div>
                            </div>
                            <div class="detail">
                                <label>Hora de llegada:</label>
                                <div class="empty-field">______________</div>
                            </div>
                        </div>
                    </div>
                </div>

               
                <div class="purchase-item">
                    <div class="purchase-icon">
                        <i class="fas fa-box"></i>
                    </div>
                    <div class="purchase-info">
                        <div class="product-field">
                            <label>Producto:</label>
                            <div class="empty-field">_________________________</div>
                        </div>
                        <div class="purchase-details">
                            <div class="detail">
                                <label>Precio:</label>
                                <div class="empty-field">______________</div>
                            </div>
                            <div class="detail">
                                <label>Hora de llegada:</label>
                                <div class="empty-field">______________</div>
                            </div>
                        </div>
                    </div>
                </div>

               
                <div class="purchase-item">
                    <div class="purchase-icon">
                        <i class="fas fa-box"></i>
                    </div>
                    <div class="purchase-info">
                        <div class="product-field">
                            <label>Producto:</label>
                            <div class="empty-field">_________________________</div>
                        </div>
                        <div class="purchase-details">
                            <div class="detail">
                                <label>Precio:</label>
                                <div class="empty-field">______________</div>
                            </div>
                            <div class="detail">
                                <label>Hora de llegada:</label>
                                <div class="empty-field">______________</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="purchases-footer">
                <div class="summary">
                    <div class="summary-item">
                        <span class="summary-label">Total de compras</span>
                        <div class="empty-field-summary">___ productos</div>
                    </div>
                    <div class="summary-item">
                        <span class="summary-label">Monto total</span>
                        <div class="empty-field-summary">$_________</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>