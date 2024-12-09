<div>
    <!-- Encabezado -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <form class="d-flex w-100">
                <select class="form-select me-2">
                    <option selected>Ciudad</option>
                    <option value="1">Bogotá</option>
                    <option value="2">Medellín</option>
                    <option value="3">Cali</option>
                </select>
                <select class="form-select me-2">
                    <option selected>Categoría</option>
                    <option value="1">Conciertos</option>
                    <option value="2">Teatro</option>
                    <option value="3">Festivales</option>
                </select>
                <select class="form-select me-2">
                    <option selected>Fecha</option>
                    <option value="1">Hoy</option>
                    <option value="2">Esta semana</option>
                    <option value="3">Este mes</option>
                </select>
                <input class="form-control me-2" type="search" placeholder="Buscar por artista, evento..." aria-label="Search">
                <button class="btn btn-warning" type="submit">Buscar</button>
            </form>
        </div>
    </nav>

    <!-- Sección Destacados -->
    <div class="container my-5">
        <h2 class="mb-4">Destacados</h2>
        <div class="row g-4">
            <div class="col-md-4 col-lg-3">
                <div class="highlight-card">
                    <img src="https://via.placeholder.com/300x400" alt="Evento">
                    <div class="highlight-card-body">
                        <h5>PIPE BUENO 3ER ROUND</h5>
                        <p class="mb-0">Movistar Arena</p>
                        <p>Bogotá</p>
                    </div>
                    <div class="highlight-card-footer text-center">
                        <span>13 Dic</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3">
                <div class="highlight-card">
                    <img src="https://via.placeholder.com/300x400" alt="Evento">
                    <div class="highlight-card-body">
                        <h5>CULTURA PROFÉTICA Y VICENTE GARCÍA</h5>
                        <p class="mb-0">Movistar Arena</p>
                        <p>Bogotá</p>
                    </div>
                    <div class="highlight-card-footer text-center">
                        <span>14 Dic</span>
                    </div>
                </div>
            </div>
            <!-- Repite la misma estructura para otros eventos -->
        </div>
    </div>
</div>
<style>
    .highlight-card {
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        overflow: hidden;
    }
    .highlight-card img {
        width: 100%;
        height: auto;
    }
    .highlight-card-body {
        padding: 15px;
    }
    .highlight-card-footer {
        background-color: #f8f9fa;
        padding: 10px;
    }
    .highlight-card-footer span {
        font-weight: bold;
        color: #007bff;
    }
</style>
