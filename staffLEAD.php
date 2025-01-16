<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LEAD México - Staff</title>
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

    .main-container {
        padding: 1rem 2rem 2rem 2rem;
        background-color: #fff;
    }

    .council-title {
        text-align: center;
        margin-bottom: 3rem;
        color: var(--primary-dark);
        font-size: 2.5em;
    }

    .council-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 2rem;
    }

    .council-member {
        display: flex;
        background-color: white;
        overflow: hidden;
    }

    .member-left {
        width: 50%;
        padding: 1.5rem;
        display: flex;
        flex-direction: column;
        align-items: center;
        background-color: #f8f9fa;
    }

    .member-image-container {
        width: 250px;
        height: 250px;
        border-radius: 50%;
        overflow: hidden;
        margin-bottom: 1.5rem;
    }

    .member-image-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .member-name {
        text-align: center;
        background: var(--primary-dark);
        padding: 5px;
        width: 100%;
    }

    .member-name h3 {
        color: white;
        font-size: 1.2rem;
        margin: 0;
        font-family: 'DaxBold', sans-serif;
    }

    .member-right {
        width: 50%;
        padding: 1.5rem;
        display: flex;
        flex-direction: column;
        justify-content: center;
        gap: 1rem;
    }

    .member-position p {
        font-size: 1rem;
        color: white;
        line-height: 1.4;
        margin: 0;
        background: var(--primary-light);
        padding: 8px;
        text-align: center;
        font-family: 'DaxBold', sans-serif;
    }

    .member-email {
        text-align: center;
    }

    .member-email a {
        color: var(--primary-dark);
        text-decoration: none;
        font-weight: 600;
        font-size: 0.9rem;
        font-family: 'DaxBold', sans-serif;
    }

    .member-email a:hover {
        text-decoration: underline;
    }

    @media (max-width: 1200px) {
        .council-grid {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 768px) {
        .council-member {
            flex-direction: column;
        }

        .member-left,
        .member-right {
            width: 100%;
            padding: 1.5rem;
        }

        .member-image-container {
            width: 120px;
            height: 120px;
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

        <div class="main-container">
            <h2 class="council-title"><span>Staff</span></h2>
            <div class="council-grid">
                <!-- Coordinador -->
                <div class="council-member">
                    <div class="member-left">
                        <div class="member-image-container">
                            <img src="assets\IMG\Fotos Staff\Boris.webp" alt="Boris Gregorio Graizbord Ed">
                        </div>
                        <div class="member-name">
                            <h3>Boris Gregorio Graizbord Ed</h3>
                        </div>
                    </div>
                    <div class="member-right">
                        <div class="member-position">
                            <p>COORDINADOR<br>
                            Profesor-Investigador<br>
                            Centro de Estudios Demográficos Urbanos y Ambientales (CEDUA)<br>
                            El Colegio de México</p>
                        </div>
                        <div class="member-email">
                            <a href="mailto:graizbord@lead.colmex.mx">graizbord@lead.colmex.mx</a>
                        </div>
                    </div>
                </div>

                <!-- Coordinadora Académica -->
                <div class="council-member">
                    <div class="member-left">
                        <div class="member-image-container">
                            <img src="assets\IMG\Fotos Staff\Amira.webp" alt="Amira Solano Azar">
                        </div>
                        <div class="member-name">
                            <h3>Amira Solano Azar</h3>
                        </div>
                    </div>
                    <div class="member-right">
                        <div class="member-position">
                            <p>COORDINADORA ACADÉMICA<br>
                            Centro de Estudios Demográficos Urbanos y Ambientales (CEDUA)<br>
                            El Colegio de México</p>
                        </div>
                        <div class="member-email">
                            <a href="mailto:asolano@colmex.mx">asolano@colmex.mx</a>
                        </div>
                    </div>
                </div>

                <!-- Asistente Investigación -->
                <div class="council-member">
                    <div class="member-left">
                        <div class="member-image-container">
                            <img src="assets\IMG\Fotos Staff\Omar.webp" alt="Omar López Ibarra">
                        </div>
                        <div class="member-name">
                            <h3>Omar López Ibarra</h3>
                        </div>
                    </div>
                    <div class="member-right">
                        <div class="member-position">
                            <p>ASISTENTE INVESTIGACIÓN<br>
                            Centro de Estudios Demográficos Urbanos y Ambientales (CEDUA)<br>
                            El Colegio de México</p>
                        </div>
                        <div class="member-email">
                            <a href="mailto:olopez@colmex.mx">olopez@colmex.mx</a>
                        </div>
                    </div>
                </div>

                <!-- Asistente Administrativo -->
                <div class="council-member">
                    <div class="member-left">
                        <div class="member-image-container">
                            <img src="assets\IMG\Fotos Staff\Cesar.webp" alt="César Montenegro Silva">
                        </div>
                        <div class="member-name">
                            <h3>César Montenegro Silva</h3>
                        </div>
                    </div>
                    <div class="member-right">
                        <div class="member-position">
                            <p>ASISTENTE ADMINISTRATIVO<br>
                            Centro de Estudios Demográficos Urbanos y Ambientales (CEDUA)<br>
                            El Colegio de México</p>
                        </div>
                        <div class="member-email">
                            <a href="mailto:cmonte@colmex.mx">cmonte@colmex.mx</a>
                        </div>
                    </div>
                </div>

                <!-- Secretaria -->
                <div class="council-member">
                    <div class="member-left">
                        <div class="member-image-container">
                            <img src="assets\IMG\Fotos Staff\Vanessa.webp" alt="Vanessa Salmerón Braulio">
                        </div>
                        <div class="member-name">
                            <h3>Vanessa Salmerón Braulio</h3>
                        </div>
                    </div>
                    <div class="member-right">
                        <div class="member-position">
                            <p>SECRETARIA<br>
                            Centro de Estudios Demográficos Urbanos y Ambientales (CEDUA)<br>
                            El Colegio de México</p>
                        </div>
                        <div class="member-email">
                            <a href="mailto:vsalmeron@colmex.mx">vsalmeron@colmex.mx</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
    <?php include 'footer.php'; ?>
</body>
</html>