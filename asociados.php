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

.main-container img{
    width: 100%;
    height: 100%;
    padding: 10px;
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
            <h2 class="council-title"><span>Asociados</span></h2>

            <img src="assets\IMG\Asociados\LogosAsociados.webp" alt="Logos Asociados" title="Logos Asociados">
        </div>
    </main>
    
    <?php include 'footer.php'; ?>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
</html>