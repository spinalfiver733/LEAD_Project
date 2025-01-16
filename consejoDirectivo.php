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

/* Estilos para el lado izquierdo */
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
    background:  var(--primary-dark);
    padding: 5px;
}

.member-name h3 {
    color: white;
    font-size: 1.2rem;
    margin: 0;
    font-family: 'DaxBold', sans-serif;
}

/* Estilos para el lado derecho */
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
    color: #333;
    line-height: 1.4;
    margin: 0;
    background: var(--primary-light);
    color: white;
    padding: 8px;
    text-align: center;
    font-family: 'DaxBold', sans-serif;
}

.member-fellow p {
    color: var(--primary-dark);
    font-weight: 600;
    font-size: 0.9rem;
    margin: 0;
    padding: 3px;
    text-align: center;
    font-family: 'DaxBold', sans-serif;
}

/* Media Queries */
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
<body>

    <?php include 'header.php'; ?>

    <main>
        
        <section class="hero">
            <?php include 'header-lead.php'; ?>
        </section>

        <!-- Estructura HTML -->
        <div class="main-container">
            <h2 class="council-title"><span>Consejo Directivo</span></h2>
            <br>
            <div class="council-grid">
                <!-- Primer miembro -->
                <div class="council-member">
                    <div class="member-left">
                        <div class="member-image-container">
                            <img src="assets\IMG\consejoDirectivoPruebas\Ana.webp" alt="Ana Lorena Gudiño Valdez">
                        </div>
                        <div class="member-name">
                            <h3>Ana Lorena Gudiño Valdez</h3>
                        </div>
                    </div>
                    <div class="member-right">
                        <div class="member-position">
                            <p>Coordinadora de la Alianza Mexicana-Alemana de Cambio Climático, GIZ México</p>
                        </div>
                        <div class="member-fellow">
                            <p>LEAD Fellow Cohorte 14</p>
                        </div>
                    </div>
                </div>

                <!-- Segundo miembro -->
                <div class="council-member">
                    <div class="member-left">
                        <div class="member-image-container">
                            <img src="assets\IMG\consejoDirectivoPruebas\Rodolfo.webp" alt="Rodolfo Lacy Tamayo">
                        </div>
                        <div class="member-name">
                            <h3>Rodolfo Lacy Tamayo</h3>
                        </div>
                    </div>
                    <div class="member-right">
                        <div class="member-position">
                            <p>Doctor en Ciencias e Ingeniería Ambientales</p>
                        </div>
                        <div class="member-fellow">
                            <p>LEAD Fellow Cohorte 3</p>
                        </div>
                    </div>
                </div>

                <div class="council-member">
                    <div class="member-left">
                        <div class="member-image-container">
                            <img src="assets\IMG\consejoDirectivoPruebas\Adolfo.webp" alt="Adolfo Mejia Ponce de León">
                        </div>
                        <div class="member-name">
                            <h3>Adolfo Mejia Ponce de León</h3>
                        </div>
                    </div>
                    <div class="member-right">
                        <div class="member-position">
                            <p>Profesor-Investigador, Departamento de Sociedad y Política Ambiental, CIIEMAD, IPN.</p>
                        </div>
                        <div class="member-fellow">
                            <p>LEAD Fellow Cohorte 8</p>
                        </div>
                    </div>
                </div>

                <div class="council-member">
                    <div class="member-left">
                        <div class="member-image-container">
                            <img src="assets\IMG\consejoDirectivoPruebas\Ramon.webp" alt="Ramón Pérez Gil Salcido">
                        </div>
                        <div class="member-name">
                            <h3>Ramón Pérez Gil Salcido</h3>
                        </div>
                    </div>
                    <div class="member-right">
                        <div class="member-position">
                            <p>Presidente de FAUNAM, A. C. Miembro del Consejo de la Unión Internacional para la Conservación de la Naturaleza (IUCN).</p>
                        </div>
                        <div class="member-fellow">
                            <p>LEAD Fellow Cohorte 4</p>
                        </div>
                    </div>
                </div>

                <div class="council-member">
                    <div class="member-left">
                        <div class="member-image-container">
                            <img src="assets\IMG\consejoDirectivoPruebas\Patricia.webp" alt="Patricia Romero Lankao">
                        </div>
                        <div class="member-name">
                            <h3>Patricia Romero Lankao</h3>
                        </div>
                    </div>
                    <div class="member-right">
                        <div class="member-position">
                            <p>Professor, Department of Sociology, University of Toronto Scarborough. Canada Excellence Research Chair in Sustainability Transitions.</p>
                        </div>
                        <div class="member-fellow">
                            <p>LEAD Fellow Cohorte 8</p>
                        </div>
                    </div>
                </div>

                <!-- Segundo miembro -->
                <div class="council-member">
                    <div class="member-left">
                        <div class="member-image-container">
                            <img src="assets\IMG\consejoDirectivoPruebas\Gemma.webp" alt="Gemma Santana Medin">
                        </div>
                        <div class="member-name">
                            <h3>Gemma Santana Medin</h3>
                        </div>
                    </div>
                    <div class="member-right">
                        <div class="member-position">
                            <p>Directora de Elijo por el Clima, A.C. y Especialista en Agenda 2030 para el Desarrollo Sustentable.</p>
                        </div>
                        <div class="member-fellow">
                            <p>LEAD Fellow Cohorte 15</p>
                        </div>
                    </div>
                </div>

                <div class="council-member">
                    <div class="member-left">
                        <div class="member-image-container">
                            <img src="assets\IMG\consejoDirectivoPruebas\Eduardo.webp" alt="Eduardo Vega López">
                        </div>
                        <div class="member-name">
                            <h3>Eduardo Vega López</h3>
                        </div>
                    </div>
                    <div class="member-right">
                        <div class="member-position">
                            <p>Titular de la Coordinación Universitaria para la Sustentabilidad (CoUS), UNAM.</p>
                        </div>
                        <div class="member-fellow">
                            <p>LEAD Fellow Cohorte 6</p>
                        </div>
                    </div>
                </div>

                <div class="council-member">
                    <div class="member-left">
                        <div class="member-image-container">
                            <img src="assets\IMG\consejoDirectivoPruebas\Silvia.webp" alt="Silvia Elena Giorguli Saucedo">
                        </div>
                        <div class="member-name">
                            <h3>Silvia Elena Giorguli Saucedo</h3>
                        </div>
                    </div>
                    <div class="member-right">
                        <div class="member-position">
                            <p>Presidente, El Colegio de México</p>
                        </div>
                        <div class="member-fellow">
                            <p>MIEMBRO EX OFFICIO</p>
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