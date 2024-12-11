<div>
    <div class="container my-4">
        <!-- Encabezado con Búsqueda y Filtros -->
        <div class="row align-items-center mb-4">
            <div class="col-md-8">
                <h1 class="h3">Gestión de Propiedades</h1>
            </div>
            <div class="col-md-4 text-end">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addPropertyModal">
                    <i class="ti ti-plus"></i> Agregar Propiedad
                </button>
            </div>
        </div>
    
        <form class="row g-3 mb-4">
            <div class="col-md-3">
                <input type="text" class="form-control" placeholder="Buscar por título o dirección">
            </div>
            <div class="col-md-2">
                <select class="form-select">
                    <option selected>Categoría</option>
                    <option value="1">Venta</option>
                    <option value="2">Alquiler</option>
                </select>
            </div>
            <div class="col-md-2">
                <select class="form-select">
                    <option selected>Ciudad</option>
                    <option value="1">Bogotá</option>
                    <option value="2">Medellín</option>
                    <option value="3">Cali</option>
                </select>
            </div>
            <div class="col-md-2">
                <select class="form-select">
                    <option selected>Estado</option>
                    <option value="1">Disponible</option>
                    <option value="2">Ocupada</option>
                    <option value="3">Vendida</option>
                </select>
            </div>
            <div class="col-md-3 text-end">
                <button class="btn btn-warning" type="submit">Buscar</button>
            </div>
        </form>
    
        <!-- Lista de Propiedades -->
        <div class="row g-4">
            <div class="col-md-4">
                <div class="property-card">
                    <img src="https://via.placeholder.com/400x300" alt="Propiedad" class="img-fluid">
                    <div class="property-card-body">
                        <h5>Apartamento en Bogotá</h5>
                        <p class="mb-1 text-muted">Dirección: Calle 123 #45-67</p>
                        <p class="mb-1 text-muted">Precio: $250,000,000</p>
                        <p class="mb-0"><span class="badge bg-success">Disponible</span></p>
                    </div>
                    <div class="property-card-footer text-end">
                        <button class="btn btn-sm btn-info">Ver Detalles</button>
                        <button class="btn btn-sm btn-danger">Eliminar</button>
                    </div>
                </div>
            </div>
            <!-- Repite la misma estructura para otras propiedades -->
        </div>
    </div>
    
    <!-- Modal para Agregar o Editar Propiedad -->
    <div class="modal fade" id="addPropertyModal" tabindex="-1" aria-labelledby="addPropertyModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addPropertyModalLabel">Agregar Propiedad</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="propertyTitle" class="form-label">Título</label>
                            <input type="text" class="form-control" id="propertyTitle" placeholder="Ej: Apartamento en venta">
                        </div>
                        <div class="mb-3">
                            <label for="propertyAddress" class="form-label">Dirección</label>
                            <input type="text" class="form-control" id="propertyAddress" placeholder="Ej: Calle 123 #45-67">
                        </div>
                        <div class="mb-3">
                            <label for="propertyPrice" class="form-label">Precio</label>
                            <input type="number" class="form-control" id="propertyPrice" placeholder="Ej: 250000000">
                        </div>
                        <div class="mb-3">
                            <label for="propertyCategory" class="form-label">Categoría</label>
                            <select class="form-select" id="propertyCategory">
                                <option selected>Seleccione una</option>
                                <option value="1">Venta</option>
                                <option value="2">Alquiler</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="propertyCity" class="form-label">Ciudad</label>
                            <select class="form-select" id="propertyCity">
                                <option selected>Seleccione una</option>
                                <option value="1">Bogotá</option>
                                <option value="2">Medellín</option>
                                <option value="3">Cali</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>    
</div>
