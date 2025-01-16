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

    .main-container {
        padding: 1rem 2rem 2rem 2rem;
        background-color: #f8f9fa;
    }


    .lead-intro h2 {
        color: var(--primary-dark);
        font-size: 2.5em;
        margin-bottom: 1rem;
        text-align: center;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1); /* Sombra sutil al texto */
    }

    .approach-section {
        margin-bottom: 0;
    }

    .mission-section, .vision-section, .approach-section {
        background-color: #fff;
        padding: 1.5rem;
        margin-bottom: 1.5rem;
        border-radius: 12px;
        border: 1px solid rgba(0, 0, 0, 0.05); /* Borde sutil */
        box-shadow: 
            0 10px 15px -3px rgba(0, 0, 0, 0.1),
            0 4px 6px -2px rgba(0, 0, 0, 0.05),
            0 0 0 1px rgba(0, 0, 0, 0.02); /* Sombra más pronunciada y borde refinado */
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .mission-section h3, .vision-section h3, .approach-section h3 {
        color: var(--primary-light);
        margin-bottom: 1.5rem;
        font-size: 1.8em;
        position: relative;
        padding-bottom: 0.5rem;
    }

    .mission-section h3::after, .approach-section h3::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 60px;
        height: 3px;
        background-color: var(--primary-light);
        border-radius: 2px;
    }

    .mission-section h4 {
        color: var(--primary-dark);
        margin: 1.5rem 0;
        font-size: 1.2em;
    }

    .mission-section:hover, .approach-section:hover {
        transform: translateY(-2px);
        box-shadow: 
            0 20px 25px -5px rgba(0, 0, 0, 0.1),
            0 10px 10px -5px rgba(0, 0, 0, 0.04),
            0 0 0 1px rgba(0, 0, 0, 0.02);
    }

    .mission-section ul, .approach-section ul {
        list-style: none;
        padding-left: 1.5rem;
    }

    .mission-section ul li, .approach-section ul li {
        position: relative;
        margin-bottom: 1rem;
        padding-left: 1.5rem;
    }

    .mission-section ul li::before, .approach-section ul li::before {
        content: "•";
        color: var(--primary-light);
        font-size: 1.5em;
        position: absolute;
        left: 0;
        top: -0.2rem;
    }

    .vision-section {
        background: var(--primary-light);
        color: white;
        box-shadow: 
            0 15px 25px -5px rgba(40, 98, 23, 0.25),
            0 10px 10px -5px rgba(40, 98, 23, 0.15),
            0 0 0 1px rgba(40, 98, 23, 0.1);
    }

    .vision-section:hover {
        transform: translateY(-2px);
        box-shadow: 
            0 25px 35px -5px rgba(40, 98, 23, 0.3),
            0 15px 15px -5px rgba(40, 98, 23, 0.2),
            0 0 0 1px rgba(40, 98, 23, 0.1);
    }

    .vision-section h3 {
        color: white;
    }

    .vision-section h3::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 60px;
        height: 3px;
        background-color: white;
        border-radius: 2px;
    }

    .approach-content p {
        margin-bottom: 1.5rem;
        line-height: 1.6;
    }

    /* Media Queries */
    @media (max-width: 768px) {
        .main-container {
            padding: 2rem 1rem;
        }

        .mission-section, .vision-section, .approach-section {
            padding: 1.5rem;
        }

        .lead-intro h2 {
            font-size: 2em;
        }

        .mission-section h3, .vision-section h3, .approach-section h3 {
            font-size: 1.5em;
        }
    }
</style>
<body>

    <?php include 'header.php'; ?>

    <main>

        <section class="hero">
            <?php include 'header-lead.php'; ?>
        </section>
        
        <div class="main-container">
            <h2 class="council-title"><span>Programa LEAD-México</span></h2>
            <br>
            <section class="lead-intro">
                <div class="mission-section">
                    <h3>Misión</h3>
                    <p>El objetivo fundamental del Programa LEAD-México es establecer una plataforma para impulsar la formación de líderes con un conocimiento profundo sobre las metas del desarrollo sustentable y los retos ambientales que México y el mundo enfrentan.</p>
                    
                    <h4>Los objetivos específicos se pueden resumir en tres grandes líneas:</h4>
                    <ul>
                        <li>Evaluar el origen y alcance de los retos ambientales;</li>
                        <li>Encontrar soluciones integrales a problemas complejos sobre los recursos naturales y el medio ambiente que involucran asuntos regionales y transfronterizos, así como delinear estrategias para el uso y administración óptima de los recursos naturales;</li>
                        <li>Implementar mejoras en la gobernanza de los recursos naturales y las políticas ambientales.</li>
                    </ul>
                </div>
            </section>

            <section class="vision-section">
                <h3>Visión LEAD</h3>
                <p>Los egresados del programa LEAD son reconocidos como especialistas y líderes profundamente comprometidos con el medio ambiente y el desarrollo sustentable de México en los diversos sectores de la sociedad (público, privado, social y académico), que contribuyen a implementar las metas del Desarrollo Sustentable en sus diversos ámbitos de acción e intervención.</p>
            </section>

            <section class="approach-section">
                <h3>Enfoque LEAD-México: Aprendizaje en acción</h3>
                <div class="approach-content">
                    <p>Las oficinas de LEAD-México están ubicadas en una de las instituciones educativas más prestigiadas del país: El Colegio de México. Nuestra experiencia educativa se enfoca en desarrollar habilidades prácticas y una sólida formación académica.</p>
                    <p>Las actividades desarrolladas por LEAD México incluyen:</p>
                    <ul>
                        <li>Presentaciones y discusiones con expertos, así como con funcionarios de gobierno a nivel nacional e internacional</li>
                        <li>Representantes de los medios de comunicación, el sector privado y distinguidos académicos</li>
                        <li>Estudios de caso, visitas de campo, simulaciones, módulos a distancia y tareas</li>
                        <li>Un trabajo final de grupo que se presenta en la sesión internacional</li>
                    </ul>
                    <p>Una parte del entrenamiento se realiza en visitas de campo, donde los asociados LEAD pueden apreciar los retos que involucran las iniciativas de desarrollo sustentable e interactúan con los actores relevantes involucrados.</p>
                </div>
            </section>
        </div>
    </main>
    
    <?php include 'footer.php'; ?>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
</html>