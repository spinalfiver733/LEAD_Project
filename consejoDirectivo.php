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

    <?php include 'header.php'; ?>

    <main>
        
        <section class="hero">
            <?php include 'header-lead.php'; ?>
        </section>

        <div class="council-container">
            <h2 class="council-title">CONSEJO DIRECTIVO LEAD-MÉXICO</h2>
            
            <div class="council-list">
                <div class="council-member">
                    <div class="member-image">
                        <img src="assets/IMG/consejoDirectivo/ana-lorena.jpg" alt="Ana Lorena Gudiño Valdez">
                    </div>
                    <div class="member-info">
                        <h3>Ana Lorena Gudiño Valdez</h3>
                        <p>Coordinadora de la Alianza Mexicana-Alemana de Cambio Climático, GIZ México. LEAD Fellow Cohorte 14</p>
                    </div>
                </div>
        
                <div class="council-member">
                    <div class="member-image">
                        <img src="assets/IMG/consejoDirectivo/rodolfo-lacy.jpg" alt="Ana Lorena Gudiño Valdez">
                    </div>
                    <div class="member-info">
                        <h3>Rodolfo Lacy Tamayo</h3>
                        <p>Doctor en Ciencias e Ingeniería Ambientales. LEAD Fellow Cohorte 3</p>
                    </div>
                </div>
        
                <div class="council-member">
                    <div class="member-image">
                        <img src="assets/IMG/consejoDirectivo/adolfo-mejia.jpg" alt="Ana Lorena Gudiño Valdez">
                    </div>
                    <div class="member-info">
                        <h3>Adolfo Mejia Ponce de León</h3>
                        <p>Profesor-Investigador, Departamento de Sociedad y Política Ambiental, CIIEMAD, IPN. LEAD Fellow Cohorte 8</p>
                    </div>
                </div>
        
                <div class="council-member">
                    <div class="member-image">
                        <img src="assets/IMG/consejoDirectivo/ramon-perez.jpg" alt="Ana Lorena Gudiño Valdez">
                    </div>
                    <div class="member-info">
                        <h3>Ramón Pérez Gil Salcido</h3>
                        <p>Presidente de FAUNAM, A. C. Miembro del Consejo de la Unión Internacional para la Conservación de la Naturaleza (IUCN). LEAD Fellow Cohorte 4</p>
                    </div>
                </div>
        
                <div class="council-member">
                    <div class="member-image">
                        <img src="assets/IMG/consejoDirectivo/patricia-romero.jpg" alt="Ana Lorena Gudiño Valdez">
                    </div>
                    <div class="member-info">
                        <h3>Patricia Romero Lankao</h3>
                        <p>Professor, Department of Sociology, University of Toronto Scarborough. Canada Excellence Research Chair in Sustainability Transitions. LEAD Fellow Cohorte 8</p>
                    </div>
                </div>
        
                <div class="council-member">
                    <div class="member-image">
                        <img src="assets/IMG/consejoDirectivo/gemma-santana.jpg" alt="Ana Lorena Gudiño Valdez">
                    </div>
                    <div class="member-info">
                        <h3>Gemma Santana Medina</h3>
                        <p>Directora de Elijo por el Clima, A.C. y Especialista en Agenda 2030 para el Desarrollo Sustentable. LEAD Fellow Cohorte 15</p>
                    </div>
                </div>
        
                <div class="council-member">
                    <div class="member-image">
                        <img src="assets/IMG/consejoDirectivo/eduardo-vega.jpg" alt="Ana Lorena Gudiño Valdez">
                    </div>
                    <div class="member-info">
                        <h3>Eduardo Vega López</h3>
                        <p>Titular de la Coordinación Universitaria para la Sustentabilidad (CoUS), UNAM. LEAD Fellow Cohorte 6</p>
                    </div>
                </div>
        
                <div class="council-member ex-officio">
                    <div class="member-image">
                        <img src="assets/IMG/consejoDirectivo/silvia.giorguli.jpg" alt="Ana Lorena Gudiño Valdez">
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
    
    <?php include 'footer.php'; ?>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
</html>