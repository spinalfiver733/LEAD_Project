<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LEAD México</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/CSS/estilos.css">
    <link rel="icon" type="image/x-icon" href="assets/LogoLEAD.webp">
</head>
<style>
    .publicaciones-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 1rem 1rem;
        background-color: #f8f9fa;
    }

    .biblioteca {
        margin: 2rem 0;
    }

    .seccion-libros {
        /* Ajusta este valor para el espacio vertical entre repisas */
        margin-bottom: 3rem;
        position: relative;
    }

    .titulo-seccion {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 1rem;
        color: #1B5E20;
        padding: 0 1rem;
    }

    .repisa-imagen {
        width: 100%;
        height: auto;
        max-width: 1100px;
    }

    .libros-container {
        position: absolute;
        /* Ajusta estos valores para mover los libros arriba/abajo */
        top: 10%; 
        /* Ajusta estos valores para el espacio en los laterales */
        left: 8%;
        right: 8%;
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        /* Ajusta este valor para el espacio entre libros */
        gap: 20px;
    }

    .libro {
    width: 100%;
    height: auto;
    /* Ajusta este valor para controlar la altura máxima de los libros */
    max-height: 180px;
    object-fit: contain;
}

    .ver-mas {
        color: #1B5E20;
        text-decoration: none;
    }

    @media (max-width: 768px) {
        .libros-container {
            grid-template-columns: repeat(2, 1fr);
        }
    }
</style>
<body>

    <?php include 'header.php'; ?>

    <main>
        <section class="hero">
            <?php include 'header-lead.php'; ?>
        </section>

        <div class="publicaciones-container">
            <h2 class="council-title"><span>Publicaciones</span></h2>

            <div class="biblioteca">
                <!-- Sección Cuadernos de Viaje -->
                <div class="seccion-libros">
                    <div class="titulo-seccion">
                        <h3>Cuadernos de Viaje</h3>
                        <a href="#" class="ver-mas">ver más →</a>
                    </div>
                    <div class="repisa-wrapper">
                        <img src="assets/SVG/Repisa.svg" alt="Repisa 1" class="repisa-imagen">
                        <div class="libros-container">
                            <img src="assets/img/libros/cuaderno1.jpg" alt="La calidad del aire" class="libro">
                            <img src="assets/img/libros/cuaderno2.jpg" alt="Población y ambiente" class="libro">
                            <img src="assets/img/libros/cuaderno3.jpg" alt="Partidos políticos" class="libro">
                            <img src="assets/img/libros/cuaderno4.jpg" alt="Temas ambientales" class="libro">
                        </div>
                    </div>
                </div>

                <!-- Sección Foros del Ajusco -->
                <div class="seccion-libros">
                    <div class="titulo-seccion">
                        <h3>Foros del Ajusco</h3>
                    </div>
                    <div class="repisa-wrapper">
                        <img src="assets/SVG/Repisa.svg" alt="Repisa 2" class="repisa-imagen">
                        <div class="libros-container">
                            <img src="assets/img/libros/foro1.jpg" alt="Desarrollo sostenible" class="libro">
                            <img src="assets/img/libros/foro2.jpg" alt="Desarrollo sustentable" class="libro">
                        </div>
                    </div>
                </div>

                <!-- Sección Otras Publicaciones -->
                <div class="seccion-libros">
                    <div class="titulo-seccion">
                        <h3>Otras publicaciones</h3>
                        <a href="#" class="ver-mas">ver más →</a>
                    </div>
                    <div class="repisa-wrapper">
                        <img src="assets/SVG/Repisa.svg" alt="Repisa 3" class="repisa-imagen">
                        <div class="libros-container">
                            <img src="assets/img/libros/otra1.jpg" alt="Publicación 1" class="libro">
                            <img src="assets/img/libros/otra2.jpg" alt="Publicación 2" class="libro">
                            <img src="assets/img/libros/otra3.jpg" alt="Publicación 3" class="libro">
                            <img src="assets/img/libros/otra4.jpg" alt="Publicación 4" class="libro">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
    <?php include 'footer.php'; ?>
    
</body>
<script src="assets/JS/main.js"></script>
</html>