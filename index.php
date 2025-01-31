<?php
    $titulo = "Mi Página PHP";
    $menu = [
        "Inicio" => "#inicio",
        "Sobre Nosotros" => "#sobre-nosotros",
        "Servicios" => "#servicios",
        "Galería" => "#galeria",
        "Contacto" => "#contacto"
    ];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Mi Sitio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <?php foreach ($menu as $nombre => $enlace) : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $enlace; ?>"><?php echo $nombre; ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </nav>

    <div id="inicio" class="container text-center my-5">
        <h1>Bienvenido a <?php echo $titulo; ?></h1>
        <p>Explora nuestro contenido</p>
    </div>

    <div id="galeria" class="container my-5">
        <h2 class="text-center">Galería</h2>
        <div class="row">
            <?php for ($i = 1; $i <= 4; $i++) : ?>
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://via.placeholder.com/300" class="card-img-top" alt="Imagen <?php echo $i; ?>">
                        <div class="card-body">
                            <p class="card-text">Imagen <?php echo $i; ?></p>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>

    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; <?php echo date("Y"); ?> Mi Página PHP. Todos los derechos reservados.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>