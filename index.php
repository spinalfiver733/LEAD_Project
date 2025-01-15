<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LEAD México</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/CSS/estilos.css">
    
</head>
<body>

    <?php include 'header.php'; ?>

    <main>

        <section class="hero">
            <?php include 'header-lead.php'; ?>
            <div class="hero-cta">
                <button>CONSULTA PROYECTOS</button>
            </div>
        </section>

        <section class="collage">
            <div class="img-collage">
                <img src="assets/Collage.webp" alt="Collage" title="Collage LEAD">
            </div>
        </section>

        <section class="info-cards">
            <div class="card-container">
                <div class="card">
                    <h3>PROGRAMA ANUAL</h3>
                </div>
                <button>CONSULTAR</button>
            </div>
            
            <div class="card-container">
                <div class="card">
                    <h3>CONSEJO DIRECTIVO</h3>
                </div>
                <button>CONSULTAR</button>
            </div>
            
            <div class="stats">
                <p style="text-align:left;">HASTA EL 2009:</p>
                <div class="numbers">
                    <span><h2>196</h2> miembros</span>
                    <span><h2>43%</h2> mujeres</span>
                    <span><h2>57%</h2> hombres</span>
                </div> 
            </div>
            
            <div class="reuniones">
                <h3>Reuniones Internacionales organizadas por LEAD México</h3>
                <hr>
                <ul>
                    <li>2002 <br> Our Future With (out) Water?</li>
                    <hr>
                    <li>2003 <br> Crossing Water Thresholds</li>
                    <hr>
                    <li>2008 <br> Mega Ciudades Y Cambio Climático</li>
                    <hr>
                    <li><strong>Publicaciones | Medios</strong></li>
                </ul>
            </div>
        </section>
        
        <section class="program-cards">
            <div class="card">
                <img src="assets/DSC0342.jpg" alt="">
                <p>Propuesta del programa</p>
            </div>
            <div class="card">
                <img src="assets/body-bg.png" alt="">
                <p>Perfil de asociados</p>
            </div>
            <div class="card">
                <img src="assets/blog-img1.png" alt="">
                <p>Diseño curricular</p>
            </div>
            <div class="card">
                <img src="assets/blog-img3.png" alt="">
                <p>El Colegio de México</p>
            </div>
        </section>

        <section class="road-hero">
            <div class="text-container">
                <p>En el marco de la conferencia de las Naciones  Unidas para el Medio Ambieinte y el Desarrollo, o  como se ha denominado, "La Cumbre de la Tierra", que se celebró en Río de Janeiro en 1992, se creó el Programa LEAD.</p>
                <div class="lead-button">
                    <div class="circle-button">
                        <div class="play-icon">▶</div>
                    </div>
                    <span>EXPERIMENTA LEAD</span>
                </div>
            </div>
        </section>

        <section class="history-cta">
            <h2>Conoce la historia <br> de LEAD México</h2>
            <button>CONSULTAR</button>
        </section>

    </main>
    
    <?php include 'footer.php'; ?>
    
</body>
<script src="assets/JS/main.js"></script>
</html>