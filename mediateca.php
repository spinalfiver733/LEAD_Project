<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LEAD México</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="assets/LogoLEAD.webp">
    <link rel="stylesheet" href="assets/CSS/estilos.css">
    <style>
        /*FUENTES DE LA PÁGINA*/
        @font-face {
            font-family: 'DaxBold';
            src: url('assets/fonts/dax/Dax Bold/Dax Bold.otf') format('opentype');
        }

        @font-face {
            font-family: 'Poppins Regular';
            src: url('assets/fonts/Poppins/Poppins-Regular.ttf') format('opentype');
        }

        @font-face {
            font-family: 'Poppins Medium';
            src: url('assets/fonts/Poppins/Poppins-Medium.ttf') format('opentype');
        }

        @font-face {
            font-family: 'Poppins Bold';
            src: url('assets/fonts/Poppins/Poppins-Bold.ttf') format('opentype');
        }

        .mediateka-container {
            padding: 1rem 2rem 2rem 2rem;
            background-color: #f8f9fa;
        }

        /* Estilos para la estructura principal */
        .mediateka-content {
            display: flex;
            gap: 2rem;
            margin-top: 2rem;
            min-height: 500px;
        }
    
        /* Contenedor del sidebar */
        .sidebar-container {
            flex: 1;
            display: flex;
            flex-direction: column;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            height: 500px;
        }
    
        /* Encabezado fijo del sidebar */
        .sidebar-header {
            padding: 1.5rem;
            background: white;
            border-bottom: 2px solid #1d4d25;
            border-radius: 8px 8px 0 0;
        }
    
        .sidebar-header h3 {
            color: #1d4d25;
            margin: 0;
            font-size: 1.25rem;
            font-weight: 600;
        }
    
        /* Lista con scroll */
        .content-list {
            flex: 1;
            padding: 1.5rem;
            overflow-y: auto;
            scrollbar-width: thin;
            scrollbar-color: #5cb439 #f0f0f0;
        }
    
        .content-list ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
    
        .content-list li {
            padding: 0.75rem;
            border-bottom: 1px solid #eee;
            cursor: pointer;
            transition: background-color 0.2s;
        }
    
        .content-list li:hover {
            background-color: #f0f8f1;
        }
    
        .content-list li.active {
            background-color: #1d4d25;
            color: white;
        }
    
        /* Estilos para la barra de desplazamiento */
        .content-list::-webkit-scrollbar {
            width: 8px;
        }
    
        .content-list::-webkit-scrollbar-track {
            background: #f0f0f0;
            border-radius: 4px;
        }
    
        .content-list::-webkit-scrollbar-thumb {
            background-color: #1d4d25;
            border-radius: 4px;
        }
    
        /* Contenedor del carrusel */
        .carousel-container {
            flex: 2;
        }
    
        .carousel {
            background: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            margin-bottom: 3rem;
        }
    
        .carousel-item img {
            height: 434px;
            object-fit: cover;
        }
    
        /* Estilos para las flechas del carrusel */
        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: #1d4d25;
            padding: 25px;
            border-radius: 50%;
            background-size: 50% 50%;
        }
    
        .carousel-control-prev,
        .carousel-control-next {
            width: 10%;
            z-index: 5;
        }
    
        /* Estilos para el contenedor de video */
        .video-container {
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
            overflow: hidden;
        }
    
        .video-container img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    
        /* Estilos para las tabs */
        .tab-content {
            margin-top: 1rem;
        }

        .nav-tabs {
            border-bottom: 2px solid #5cb439;  /* Aquí cambias grosor y color */
        }
    
        .nav-tabs .nav-link {
            color: #1d4d25;
            cursor: pointer;
        }
    
        .nav-tabs .nav-link.active {
            background-color: #5cb439;
            color: white;
            border-color: #5cb439;
        }
    
        .nav-tabs .nav-link:hover {
            border-color: #5cb439;
            color: #5cb439;
        }
    
        .nav-tabs .nav-link.active:hover {
            color: white;
        }
    
        /* Estilos para las tarjetas PDF */
        .pdf-card {
            transition: transform 0.2s;
        }
    
        .pdf-card:hover {
            transform: translateY(-5px);
        }
    
        /* Estilos para los botones */
        .btn-success {
            background-color: #5cb439;
            border-color: #5cb439;
        }
    
        .btn-success:hover {
            background-color: #2c7339;
            border-color: #2c7339;
        }
    
        /* Estilos responsive */
        @media (max-width: 768px) {
            .mediateka-content {
                flex-direction: column;
            }
    
            .sidebar-container,
            .carousel-container {
                width: 100%;
            }
    
            .carousel-item img {
                height: 300px;
            }
        }
    </style>
</head>
<body>

    <?php include 'header.php'; ?>

    <main>

        <section class="hero">
            <?php include 'header-lead.php'; ?>
        </section>
        
        <div class="mediateka-container">
            <h2 class="council-title"><span>Mediateca</span></h2>
            <br>
            <ul class="nav nav-tabs" id="mediatekaTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="fotos-tab" data-bs-toggle="tab" data-bs-target="#fotos" type="button" role="tab" aria-controls="fotos" aria-selected="true">Galería de Fotos</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="videos-tab" data-bs-toggle="tab" data-bs-target="#videos" type="button" role="tab" aria-controls="videos" aria-selected="false">Videos</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="documentos-tab" data-bs-toggle="tab" data-bs-target="#documentos" type="button" role="tab" aria-controls="documentos" aria-selected="false">Documentos</button>
                </li>
            </ul>

            <div class="tab-content" id="mediatekaTabContent">
                <!-- Sección de Fotos -->
                <div class="tab-pane fade show active" id="fotos">
                    <div class="mediateka-content">
                        <!-- Sidebar con encabezado fijo -->
                        <div class="sidebar-container">
                            <div class="sidebar-header">
                                <h3>GALERÍA COMPLETA</h3>
                            </div>
                            <div class="content-list">
                                <ul>
                                    <li class="active">Reunión Internacional 2023</li>
                                    <li>Taller de Liderazgo Ambiental</li>
                                    <li>Conferencia Anual</li>
                                    <li>Seminario de Desarrollo Sustentable</li>
                                    <li>Congreso Latinoamericano 2023</li>
                                    <li>Encuentro de Expertos</li>
                                    <li>Proyectos Comunitarios</li>
                                    <li>Capacitación Regional</li>
                                    <li>Foro de Innovación</li>
                                    <li>Workshop Internacional</li>
                                </ul>
                            </div>
                        </div>
                        
                        <!-- Carrusel de fotos -->
                        <div class="carousel-container">
                            <div id="carouselFotos" class="carousel slide">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="assets/IMG/img_mediateka/20anios1.jpg" class="d-block w-100" alt="Reunión LEAD 2023">
                                        <!---
                                        <div class="carousel-caption">
                                            <h5>Reunión Internacional 2023</h5>
                                            <p>Discusión sobre sostenibilidad global</p>
                                        </div>-->
                                    </div>
                                    <div class="carousel-item">
                                        <img src="assets/IMG/img_mediateka/convocatoria-2020.jpg" class="d-block w-100" alt="Taller LEAD">
                                        <!---
                                        <div class="carousel-caption">
                                            <h5>Taller de Liderazgo Ambiental</h5>
                                            <p>Participantes de toda Latinoamérica</p>
                                        </div>--->
                                    </div>
                                    <div class="carousel-item">
                                        <img src="assets/IMG/img_mediateka/convocatoria-2021.jpg" class="d-block w-100" alt="Conferencia">
                                        <!---
                                        <div class="carousel-caption">
                                            <h5>Conferencia Anual</h5>
                                            <p>Presentación de proyectos sustentables</p>
                                        </div>--->
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselFotos" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon"></span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselFotos" data-bs-slide="next">
                                    <span class="carousel-control-next-icon"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sección de Videos -->
                <div class="tab-pane fade" id="videos">
                    <div class="mediateka-content">
                        <!-- Sidebar con encabezado fijo -->
                        <div class="sidebar-container">
                            <div class="sidebar-header">
                                <h3>CATÁLOGO DE VIDEOS</h3>
                            </div>
                            <div class="content-list">
                                <ul>
                                    <li class="active">Impacto del Cambio Climático</li>
                                    <li>Desarrollo Sustentable</li>
                                    <li>Conferencias 2023</li>
                                    <li>Testimonios de Participantes</li>
                                    <li>Proyectos en Acción</li>
                                    <li>Webinars Educativos</li>
                                    <li>Entrevistas a Expertos</li>
                                    <li>Documentales LEAD</li>
                                </ul>
                            </div>
                        </div>
                        
                        <!-- Carrusel de videos -->
                        <div class="carousel-container">
                            <div id="carouselVideos" class="carousel slide">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="video-container">
                                            <video controls width="100%">
                                                <source src="assets/IMG/videoMediateka/COSTA RICA IN 4K 60fps HDR (ULTRA HD).mp4" type="video/mp4">
                                                Tu navegador no soporta el elemento de video.
                                            </video>
                                            <div class="carousel-caption">
                                                <h5>Impacto del Cambio Climático</h5>
                                                <p>Investigación y resultados 2023</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="video-container">
                                            <video controls width="100%">
                                                <source src="assets/IMG/videoMediateka/Puente.mp4" type="video/mp4">
                                                Tu navegador no soporta el elemento de video.
                                            </video>
                                            <div class="carousel-caption">
                                                <h5>Desarrollo Sustentable</h5>
                                                <p>Proyectos exitosos en México</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselVideos" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon"></span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselVideos" data-bs-slide="next">
                                    <span class="carousel-control-next-icon"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sección de Documentos -->
                <div class="tab-pane fade" id="documentos">
                    <div class="mediateka-content">
                        <!-- Sidebar con encabezado fijo -->
                        <div class="sidebar-container">
                            <div class="sidebar-header">
                                <h3>BIBLIOTECA DIGITAL</h3>
                            </div>
                            <div class="content-list">
                                <ul>
                                    <li class="active">Reporte Anual 2023</li>
                                    <li>Guía de Sostenibilidad</li>
                                    <li>Investigación 2023</li>
                                    <li>Manual de Mejores Prácticas</li>
                                    <li>Estudios de Caso</li>
                                    <li>Publicaciones Académicas</li>
                                    <li>Informes Técnicos</li>
                                    <li>Papers de Investigación</li>
                                </ul>
                            </div>
                        </div>
                        
                        <!-- Grid de documentos -->
                        <div class="carousel-container">
                            <div class="row row-cols-1 row-cols-md-2 g-4">
                                <div class="col">
                                    <div class="card h-100 pdf-card">
                                        <div class="card-body">
                                            <h5 class="card-title">Reporte Anual 2023</h5>
                                            <p class="card-text">Resultados y logros del programa LEAD México</p>
                                            <a href="assets/archivosPDF/01 BIBLIOGRAFÍA CHIAPAS cohorte 12.pdf" download class="btn btn-success">Descargar PDF</a>
                                            <a href="assets/archivosPDF/01 BIBLIOGRAFÍA CHIAPAS cohorte 12.pdf" target="_blank" rel="noopener noreferrer" class="btn btn-success">Visualizar Online</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card h-100 pdf-card">
                                        <div class="card-body">
                                            <h5 class="card-title">Guía de Sostenibilidad</h5>
                                            <p class="card-text">Manual práctico para líderes ambientales</p>
                                            <a href="assets/archivosPDF/MEXICO CAMARA SENADORES_ecosistemas tropicales.pdf" download class="btn btn-success">Descargar PDF</a>
                                            <a href="assets/archivosPDF/MEXICO CAMARA SENADORES_ecosistemas tropicales.pdf" target="_blank" rel="noopener noreferrer" class="btn btn-success">Visualizar Online</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card h-100 pdf-card">
                                        <div class="card-body">
                                            <h5 class="card-title">Investigación 2023</h5>
                                            <p class="card-text">Estudios sobre cambio climático en México</p>
                                            <a href="assets/archivosPDF/UNITED NATIONS_report of the special.pdf" download class="btn btn-success">Descargar PDF</a>
                                            <a href="assets/archivosPDF/UNITED NATIONS_report of the special.pdf" target="_blank" rel="noopener noreferrer" class="btn btn-success">Visualizar Online</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
    <?php include 'footer.php'; ?>

</body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
</html>