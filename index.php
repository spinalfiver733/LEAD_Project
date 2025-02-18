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
</style>

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
                    <h3><strong>PROGRAMA ANUAL</strong></h3>
                </div>
                <button><strong>CONSULTAR</strong></button>
            </div>

            <div class="card-container">
                <div class="card">
                    <h3><strong>CONSEJO DIRECTIVO</strong></h3>
                </div>
                <button><strong>CONSULTAR</strong></button>
            </div>

            <div class="stats">
                <p style="text-align:left;"><strong>HASTA EL 2009:</strong></p>
                <div class="numbers">
                    <span>
                        <h2>196</h2>&nbsp;miembros
                    </span>
                    <span>
                        <h2>43%</h2>&nbsp;mujeres
                    </span>
                    <span>
                        <h2>57%</h2>&nbsp;hombres
                    </span>
                </div>
            </div>

            <div class="reuniones">
                <div class="contenido">
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
            </div>
        </section>

        <section class="program-cards">
            <div class="card">
                <img src="assets/DSC0342.jpg" alt="">
                <p><strong>Propuesta del programa</strong></p>
            </div>
            <div class="card">
                <img src="assets/body-bg.png" alt="">
                <p><strong>Perfil de asociados</strong></p>
            </div>
            <div class="card">
                <img src="assets/blog-img1.png" alt="">
                <p><strong>Diseño curricular</strong></p>
            </div>
            <div class="card">
                <img src="assets/blog-img3.png" alt="">
                <p><strong>El Colegio de México</strong></p>
            </div>
        </section>
        <!---
        <section class="road-hero">
            <div class="text-container">
                <p>En el marco de la conferencia de las Naciones Unidas para el Medio Ambieinte y el Desarrollo, o como se ha denominado, "La Cumbre de la Tierra", que se celebró en Río de Janeiro en 1992, se creó el Programa LEAD.</p>
                <div class="lead-button">
                    <div class="circle-button">
                        <div class="play-icon">▶</div>
                    </div>
                    <span>EXPERIMENTA LEAD</span>
                </div>
            </div>
        </section>
-->

        <section class="road-hero">
            <div class="text-container">
                <p>En el marco de la conferencia de las Naciones Unidas para el Medio Ambieinte y el Desarrollo, o como se ha denominado, "La Cumbre de la Tierra", que se celebró en Río de Janeiro en 1992, se creó el Programa LEAD.</p>
            </div>
        </section>

        <div class="container-fluid bg-primary-light">
            <div class="row">
                <!-- Sección Historia - 8 columnas -->
                <div class="col-md-8 position-relative">
                    <div class="separator"></div>
                    <section class="history-cta">
                        <h2><strong>Conoce la historia <br> de LEAD México</strong></h2>
                        <button>CONSULTAR</button>
                    </section>
                </div>

                <!-- Sección Ubicación - 4 columnas -->
                <div class="col-md-4">
                    <div class="location">
                        <h4 style="color:white">UBICACIÓN</h4>
                        <a href="https://www.google.com/maps/place/El+Colegio+de+M%C3%A9xico/@19.3038047,-99.2098976,17z/data=!3m1!4b1!4m6!3m5!1s0x85ce017458913985:0xa6be0527e2998dd8!8m2!3d19.3037997!4d-99.207328!16zL20vMDR4dDk3?entry=ttu&g_ep=EgoyMDI0MTIwNC4wIKXMDSoASAFQAw%3D%3D" target="_blank">
                            <div class="info_ubicacion">
                                <img src="assets/ubicacion.svg" alt="Ubicación" style="margin-right: 1rem;">
                                <p style="color: #1d4d25; margin: 0; font-size: 0.9rem;">
                                    Carretera Picacho Ajusco 20, Col. Ampliación Fuentes Del Pedregal, C.p. 14110 Tlalpan, Ciudad De México
                                </p>
                            </div>
                        </a>

                        <div class="map" style="border-radius:15px">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3765.5533844307707!2d-99.20323632559423!3d19.303421981970825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cdff8c11cb0fb7%3A0x86e5c138ebddf0f6!2sCarretera%20Picacho%20Ajusco%2020%2C%20Ampliaci%C3%B3n%20Fuentes%20del%20Pedregal%2C%20Tlalpan%2C%2014110%20Ciudad%20de%20M%C3%A9xico%2C%20CDMX!5e0!3m2!1ses!2smx!4v1702166029113!5m2!1ses!2smx"
                                width="100%"
                                height="300"
                                style="border:0;"
                                allowfullscreen=""
                                loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
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