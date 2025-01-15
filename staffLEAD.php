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
    /* Contenedor principal */
.staff-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 4rem 10rem;
    background-color: #f8f9fa;
}

/* Lista de staff */
.staff-list {
    display: flex;
    flex-direction: column;
    gap: 1.5rem;
    margin-top: 3rem;
}

/* Estilo de cada miembro */
.staff-member {
    background-color: white;
    padding: 1.5rem;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
    border-left: 4px solid var(--primary-light);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.staff-member:hover {
    transform: translateX(10px);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

/* Rol del miembro */
.member-role {
    color: var(--primary-light);
    font-weight: bold;
    font-size: 0.9rem;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 0.5rem;
}

/* Información del miembro */
.member-info h3 {
    color: var(--primary-dark);
    font-size: 1.25rem;
    margin-bottom: 0.5rem;
}

.member-info .position {
    color: #666;
    font-weight: 500;
    margin-bottom: 0.5rem;
}

.member-info .institution {
    color: #666;
    font-size: 0.95rem;
    margin-bottom: 0.25rem;
}

.member-info .email {
    display: inline-block;
    color: var(--primary-light) !important;
    text-decoration: none;
    margin-top: 0.5rem;
    transition: color 0.3s ease;
}

.member-info .email:hover {
    color: var(--primary-dark) !important;
    text-decoration: underline !important;
}

/* Media Queries */
@media (max-width: 768px) {
    .staff-container {
        padding: 2rem 1rem;
    }

    .council-title {
        font-size: 2em;
    }

    .staff-member {
        padding: 1.25rem;
    }

    .staff-member:hover {
        transform: none;
    }
}
</style>
<body>

    <?php include 'header.php'; ?>

    <main>

        <section class="hero">
            <?php include 'header-lead.php'; ?>
        </section>

        <div class="staff-container">
            <h2 class="council-title"><span>Staff</span></h2>
            
            <div class="staff-list">
                <div class="staff-member">
                    <div class="member-role">COORDINADOR</div>
                    <div class="member-info">
                        <h3>Boris Gregorio Graizbord Ed</h3>
                        <p class="position">Profesor-Investigador</p>
                        <p class="institution">Centro de Estudios Demográficos Urbanos y Ambientales (CEDUA)</p>
                        <p class="institution">El Colegio de México</p>
                        <a href="mailto:graizbord@lead.colmex.mx" class="email">graizbord@lead.colmex.mx</a>
                    </div>
                </div>
        
                <div class="staff-member">
                    <div class="member-role">COORDINADORA ACADÉMICA</div>
                    <div class="member-info">
                        <h3>Amira Solano Azar</h3>
                        <p class="institution">Centro de Estudios Demográficos Urbanos y Ambientales (CEDUA)</p>
                        <p class="institution">El Colegio de México</p>
                        <a href="mailto:asolano@colmex.mx" class="email">asolano@colmex.mx</a>
                    </div>
                </div>
        
                <div class="staff-member">
                    <div class="member-role">ASISTENTE INVESTIGACIÓN</div>
                    <div class="member-info">
                        <h3>Omar López Ibarra</h3>
                        <p class="institution">Centro de Estudios Demográficos Urbanos y Ambientales (CEDUA)</p>
                        <p class="institution">El Colegio de México</p>
                        <a href="mailto:olopez@colmex.mx" class="email">olopez@colmex.mx</a>
                    </div>
                </div>
        
                <div class="staff-member">
                    <div class="member-role">ASISTENTE ADMINISTRATIVO</div>
                    <div class="member-info">
                        <h3>César Montenegro Silva</h3>
                        <p class="institution">Centro de Estudios Demográficos Urbanos y Ambientales (CEDUA)</p>
                        <p class="institution">El Colegio de México</p>
                        <a href="mailto:cmonte@colmex.mx" class="email">cmonte@colmex.mx</a>
                    </div>
                </div>
        
                <div class="staff-member">
                    <div class="member-role">SECRETARIA</div>
                    <div class="member-info">
                        <h3>Vanessa Salmerón Braulio</h3>
                        <p class="institution">Centro de Estudios Demográficos Urbanos y Ambientales (CEDUA)</p>
                        <p class="institution">El Colegio de México</p>
                        <a href="mailto:vsalmeron@colmex.mx" class="email">vsalmeron@colmex.mx</a>
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