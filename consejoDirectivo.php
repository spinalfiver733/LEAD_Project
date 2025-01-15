<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LEAD México</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
</head>
<style>
    /* Estilos para el contenedor principal */
    .council-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 4rem 10rem;
        background-color: #f8f9fa;
    }

    .council-title {
        color: var(--primary-dark);
        font-size: 2.5em;
        text-align: center;
        margin-bottom: 1rem;
        position: relative;
        padding-bottom: 1rem;
    }

    .council-title::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 100px;
        height: 3px;
        background-color: var(--primary-light);
    }

    /* Lista de miembros */
    .council-list {
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
    }

    /* Estilo de cada miembro */
    .council-member {
        display: flex;
        align-items: center;
        background-color: white;
        padding: 1.5rem;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        border-left: 4px solid var(--primary-light);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        gap: 1.5rem;
    }

    .council-member:hover {
        transform: translateX(10px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .member-info h3 {
        color: var(--primary-dark);
        font-size: 1.25rem;
        margin-bottom: 0.5rem;
        font-weight: bold;
    }

    .member-info p {
        color: #666;
        line-height: 1.5;
        font-size: 0.95rem;
    }

    /* Estilo para la imagen */
    .member-image {
        flex-shrink: 0;
        width: 100px;
        height: 100px;
        border-radius: 10%;
        overflow: hidden;
        border: 3px solid var(--primary-light);
    }

    .member-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* Información del miembro */
    .member-info {
        flex: 1;
    }

    .member-info h3 {
        color: var(--primary-dark);
        font-size: 1.25rem;
        margin-bottom: 0.5rem;
        font-weight: bold;
    }

    .member-info p {
        color: #666;
        line-height: 1.5;
        font-size: 0.95rem;
        margin: 0;
    }

    /* Media Queries */
    @media (max-width: 768px) {
        .council-container {
            padding: 2rem 1rem;
        }

        .council-title {
            font-size: 2em;
            margin-bottom: 2rem;
        }

        .council-member {
            padding: 1.25rem;
        }

        .council-member:hover {
            transform: none;
        }
    }
</style>
<body>
    <header>
        <div class="top-nav">
            <ul>
                <li><a href="index.html">INICIO</a></li>
                <li>APLICAR</li>
                <li >VISITAR</li>
                <li>ESTUDIANTES</li>
                <li>PROFESORADO</li>
                <li>EVALUAMOS</li>
                <li>
                    <div class="search-container">
                        <input type="search" placeholder="Buscar...">
                        <img src="assets/busqueda-de-lupa.svg" alt="buscar" class="search-icon">
                    </div>
                </li>
            </ul>
        </div>
        
        <div class="main-header">
            <div class="logo-container">
                <h1>LEAD México</h1>
                <h2><p>Inspiring leadership for a sustainable world</p></h2>
            </div>
            <img class="main-header"  src="assets/LogoLEAD.webp" alt="LEAD logo">
        </div>
      
        <nav class="main-nav">
            <ul>
                <li><a href="whosLEAD.html"><strong>¿Qué es Lead?</strong></a></li>
                <li><a href="consejoDirectivo.html"><strong>Consejo Directivo</strong></a></li>
                <li><a href="staffLEAD.html"><strong>Staff</strong></a></li>
                <li><strong>LEAD México</strong></li>
                <li><strong>Publicaciones</strong></li>
                <li><strong>Asociados</strong></li>
                <li><strong>Solicitud de ingreso</strong></li>
                <li><a href="mediateca.html"><strong>Mediateca</strong></a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="council-container">
            <h2 class="council-title">CONSEJO DIRECTIVO LEAD-MÉXICO</h2>
            
            <div class="council-list">
                <div class="council-member">
                    <div class="member-image">
                        <img src="assets/consejoDirectivo/ana-lorena.jpg" alt="Ana Lorena Gudiño Valdez">
                    </div>
                    <div class="member-info">
                        <h3>Ana Lorena Gudiño Valdez</h3>
                        <p>Coordinadora de la Alianza Mexicana-Alemana de Cambio Climático, GIZ México. LEAD Fellow Cohorte 14</p>
                    </div>
                </div>
        
                <div class="council-member">
                    <div class="member-image">
                        <img src="assets/consejoDirectivo/rodolfo-lacy.jpg" alt="Ana Lorena Gudiño Valdez">
                    </div>
                    <div class="member-info">
                        <h3>Rodolfo Lacy Tamayo</h3>
                        <p>Doctor en Ciencias e Ingeniería Ambientales. LEAD Fellow Cohorte 3</p>
                    </div>
                </div>
        
                <div class="council-member">
                    <div class="member-image">
                        <img src="assets/consejoDirectivo/adolfo-mejia.jpg" alt="Ana Lorena Gudiño Valdez">
                    </div>
                    <div class="member-info">
                        <h3>Adolfo Mejia Ponce de León</h3>
                        <p>Profesor-Investigador, Departamento de Sociedad y Política Ambiental, CIIEMAD, IPN. LEAD Fellow Cohorte 8</p>
                    </div>
                </div>
        
                <div class="council-member">
                    <div class="member-image">
                        <img src="assets/consejoDirectivo/ramon-perez.jpg" alt="Ana Lorena Gudiño Valdez">
                    </div>
                    <div class="member-info">
                        <h3>Ramón Pérez Gil Salcido</h3>
                        <p>Presidente de FAUNAM, A. C. Miembro del Consejo de la Unión Internacional para la Conservación de la Naturaleza (IUCN). LEAD Fellow Cohorte 4</p>
                    </div>
                </div>
        
                <div class="council-member">
                    <div class="member-image">
                        <img src="assets/consejoDirectivo/patricia-romero.jpg" alt="Ana Lorena Gudiño Valdez">
                    </div>
                    <div class="member-info">
                        <h3>Patricia Romero Lankao</h3>
                        <p>Professor, Department of Sociology, University of Toronto Scarborough. Canada Excellence Research Chair in Sustainability Transitions. LEAD Fellow Cohorte 8</p>
                    </div>
                </div>
        
                <div class="council-member">
                    <div class="member-image">
                        <img src="assets/consejoDirectivo/gemma-santana.jpg" alt="Ana Lorena Gudiño Valdez">
                    </div>
                    <div class="member-info">
                        <h3>Gemma Santana Medina</h3>
                        <p>Directora de Elijo por el Clima, A.C. y Especialista en Agenda 2030 para el Desarrollo Sustentable. LEAD Fellow Cohorte 15</p>
                    </div>
                </div>
        
                <div class="council-member">
                    <div class="member-image">
                        <img src="assets/consejoDirectivo/eduardo-vega.jpg" alt="Ana Lorena Gudiño Valdez">
                    </div>
                    <div class="member-info">
                        <h3>Eduardo Vega López</h3>
                        <p>Titular de la Coordinación Universitaria para la Sustentabilidad (CoUS), UNAM. LEAD Fellow Cohorte 6</p>
                    </div>
                </div>
        
                <div class="council-member ex-officio">
                    <div class="member-image">
                        <img src="assets/consejoDirectivo/silvia.giorguli.jpg" alt="Ana Lorena Gudiño Valdez">
                    </div>
                    <div class="member-info">
                        <h3>MIEMBRO EX OFFICIO</h3>
                        <h3>Silvia Elena Giorguli Saucedo</h3>
                        <p>Presidente, El Colegio de México</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
    <footer>
        <div class="footer-content">
            <div class="lead-international">
                <div class="section-header">
                    <h4>LEAD INTERNATIONAL</h4>
                    <div class="arrow"></div>
                </div>
                <div class="section-content">
                    <ul>
                        <li>África francófona</li>
                        <li>Brasil</li>
                        <li>Canadá</li>
                        <li>China</li>
                        <li>CIS</li>
                        <li>Europa</li>
                        <li>India</li>
                        <li>Indonesia</li>
                        <li>Japón</li>
                        <li>Nigeria</li>
                        <li>Pakistán</li>
                        <li>Sudáfrica</li>
                    </ul>
                </div>
            </div>
    
            <div class="contact">
                <div class="section-header">
                    <h4>CONTACTO</h4>
                    <div class="arrow"></div>
                </div>
                <div class="section-content">
                    <p><strong>Teléfono:</strong><br>
                    +52 55-54-58-30-00</p>
                    <p><strong>Extensiones:</strong><br>3072, 3092, 4173</p>
                    <p><strong>Apartado postal</strong><br>20671</p>
                    <p><strong>Mail</strong><br>
                        Prof. Boris Graizbord<br>
                        Coordinador del Programa De Estudios Avanzados En
                        Desarrollo Sustentable Y Medio Ambiente, Lead-méxico<br>
                    <a href="mailto:leadmex@lead.colmex.mx">leadmex@lead.colmex.mx</a></p>
                </div>
            </div>
    
            <!-- Location section remains unchanged -->
            <div class="location">
                <h4>UBICACIÓN</h4>
                <a href="https://www.google.com/maps/place/El+Colegio+de+M%C3%A9xico/@19.3038047,-99.2098976,17z/data=!3m1!4b1!4m6!3m5!1s0x85ce017458913985:0xa6be0527e2998dd8!8m2!3d19.3037997!4d-99.207328!16zL20vMDR4dDk3?entry=ttu&g_ep=EgoyMDI0MTIwNC4wIKXMDSoASAFQAw%3D%3D" target="_blank">
                    <div class="info_ubicacion">
                        <img src="assets/ubicacion.svg" alt="Ubicación" style="margin-right: 1rem;">
                        <p style="color: #1d4d25; margin: 0; font-size: 0.9rem;">
                            Carretera Picacho Ajusco 20, Col. Ampliación Fuentes Del Pedregal, C.p. 14110 Tlalpan, Ciudad De México
                        </p>
                    </div>
                </a>

                <div class="map">
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
        <hr>
        <div class="footer-bottom">
            <div class="institution">
                <p>El Colegio de México, A.C.</p>
            </div>
            <nav class="footer-nav">
                <ul>
                    <li>Ciudad de México</li>
                    <li>Aviso de privacidad</li>
                    <li>Copyright</li>
                    <li>Mapa del sitio</li>
                    <li>Cómo llegar</li>
                </ul>
            </nav>
        </div>
    </footer>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
</html>