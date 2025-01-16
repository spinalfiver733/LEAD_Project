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
        .publicaciones-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 1rem 1rem;
            background-color: #f8f9fa;
        }

        .biblioteca {
            margin: 2rem 0;
        }

        .seccion-libros {
            margin-bottom: 1px;
            position: relative;
            min-height: 300px;
        }

        .titulo-seccion {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1rem;
            color: #5cb439;
            padding: 0 1rem;
        }

        .repisa-imagen {
            width: 100%;
            height: auto;
            max-width: 1100px;
            position: absolute;
            bottom: 0;
            left: 0;
            z-index: 1;
        }

        .libros-container {
            position: absolute;
            top: 0;
            left: 8%;
            right: 8%;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 40px;
            z-index: 2;
        }

        .libro {
            width: 100%;
            height: auto;
            max-height: 160px;
            object-fit: contain;
            opacity: 1;
            transition: opacity 0.3s ease;
        }

        .libro:hover {
            transform: scale(1.3);
            z-index: 10;
        }

        .libro.hiding {
            opacity: 0;
        }

        .navigation-buttons {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 100%;
            z-index: 3;
            display: flex;
            justify-content: space-between;
            padding: 0 20px;
        }

        .nav-button {
            background-color: white;
            color: #1B5E20;
            border: none;
            padding: 8px 16px;
            border-radius: 4px;
            cursor: pointer;
            opacity: 0.8;
            transition: opacity 0.3s;
        }

        .nav-button:hover {
            opacity: 1;
        }

        .nav-button:disabled {
            background-color: #ccc;
            cursor: not-allowed;
        }

        .ver-mas {
            color: #1B5E20;
            text-decoration: none;
            cursor: pointer;
        }

        .repisa-wrapper {
            position: relative;
            padding-top: 242px;
        }

        @media (max-width: 768px) {
            .libros-container {
                grid-template-columns: repeat(2, 1fr);
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

        <div class="publicaciones-container">
            <h2 class="council-title"><span>Publicaciones</span></h2>
            <br>
            <div class="biblioteca">
                <!-- Sección Cuadernos de Viaje -->
                <div class="seccion-libros">
                    <div class="titulo-seccion">
                        <h3>Cuadernos de Viaje</h3>
                    </div>
                    <div class="repisa-wrapper">
                        <div class="navigation-buttons">
                            <button class="nav-button prev-button" onclick="previousBooks('cuadernos')" disabled>← Anterior</button>
                            <button class="nav-button next-button" onclick="nextBooks('cuadernos')">Siguiente →</button>
                        </div>
                        <div class="libros-container" id="cuadernos-container">
                            <img src="assets/SVG/Libros/SerieCuadernosTrabajo/1.1.svg" alt="La calidad del aire" class="libro">
                            <img src="assets/SVG/Libros/SerieCuadernosTrabajo/1.2.svg" alt="Población y ambiente" class="libro">
                            <img src="assets/SVG/Libros/SerieCuadernosTrabajo/1.3.svg" alt="Partidos políticos" class="libro">
                            <img src="assets/SVG/Libros/SerieCuadernosTrabajo/1.4.svg" alt="Temas ambientales" class="libro">
                        </div>
                        <img src="assets/SVG/Repisa.svg" alt="Repisa 1" class="repisa-imagen">
                    </div>
                </div>

                <!-- Sección Foros del Ajusco -->
                <div class="seccion-libros">
                    <div class="titulo-seccion">
                        <h3>Foros del Ajusco</h3>
                    </div>
                    <div class="repisa-wrapper">
                        <div class="navigation-buttons">
                            <button class="nav-button prev-button" onclick="previousBooks('foros')" disabled>← Anterior</button>
                            <button class="nav-button next-button" onclick="nextBooks('foros')">Siguiente →</button>
                        </div>
                        <div class="libros-container" id="foros-container">
                            <img src="assets\SVG\Libros\ForosAjusco\Rectangle 2.svg" alt="Desarrollo sostenible" class="libro">
                            <img src="assets\SVG\Libros\ForosAjusco\Rectangle 3.svg" alt="Desarrollo sustentable" class="libro">
                        </div>
                        <img src="assets/SVG/Repisa.svg" alt="Repisa 2" class="repisa-imagen">
                    </div>
                </div>

                <!-- Sección Otras Publicaciones -->
                <div class="seccion-libros">
                    <div class="titulo-seccion">
                        <h3>Otras publicaciones</h3>
                    </div>
                    <div class="repisa-wrapper">
                        <div class="navigation-buttons">
                            <button class="nav-button prev-button" onclick="previousBooks('otras')" disabled>← Anterior</button>
                            <button class="nav-button next-button" onclick="nextBooks('otras')">Siguiente →</button>
                        </div>
                        <div class="libros-container" id="otras-container">
                            <img src="assets/SVG/Libros/OtrasPublicaciones/3.1.svg" alt="Publicación 1" class="libro">
                            <img src="assets/SVG/Libros/OtrasPublicaciones/3.2.svg" alt="Publicación 2" class="libro">
                            <img src="assets/SVG/Libros/OtrasPublicaciones/3.3.svg" alt="Publicación 3" class="libro">
                            <img src="assets/SVG/Libros/OtrasPublicaciones/3.4.svg" alt="Publicación 4" class="libro">
                        </div>
                        <img src="assets/SVG/Repisa.svg" alt="Repisa 3" class="repisa-imagen">
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include 'footer.php'; ?>

<script>
    const booksData = {
        cuadernos: {
            currentPage: 0,
            books: [
                'assets/SVG/Libros/SerieCuadernosTrabajo/1.1.svg',
                'assets/SVG/Libros/SerieCuadernosTrabajo/1.2.svg',
                'assets/SVG/Libros/SerieCuadernosTrabajo/1.3.svg',
                'assets/SVG/Libros/SerieCuadernosTrabajo/1.4.svg',
                'assets/SVG/Libros/SerieCuadernosTrabajo/1.5.svg',
                'assets/SVG/Libros/SerieCuadernosTrabajo/1.6.svg',
                'assets/SVG/Libros/SerieCuadernosTrabajo/1.7.svg',
                'assets/SVG/Libros/SerieCuadernosTrabajo/1.8.svg',
            ]
        },
        foros: {
            currentPage: 0,
            books: [

            ]
        },
        otras: {
            currentPage: 0,
            books: [
                'assets/SVG/Libros/OtrasPublicaciones/3.1.svg',
                'assets/SVG/Libros/OtrasPublicaciones/3.2.svg',
                'assets/SVG/Libros/OtrasPublicaciones/3.3.svg',
                'assets/SVG/Libros/OtrasPublicaciones/3.4.svg',
                'assets/SVG/Libros/OtrasPublicaciones/3.5.svg',
                'assets/SVG/Libros/OtrasPublicaciones/3.6.svg',
                'assets/SVG/Libros/OtrasPublicaciones/3.7.svg'
            ]
        }
    };

    function updateButtons(section) {
        const container = document.querySelector(`#${section}-container`).parentElement;
        const prevButton = container.querySelector('.prev-button');
        const nextButton = container.querySelector('.next-button');
        const data = booksData[section];
        
        prevButton.disabled = data.currentPage === 0;
        nextButton.disabled = (data.currentPage + 1) * 4 >= data.books.length;
    }

    async function updateBooks(section, direction) {
        const container = document.querySelector(`#${section}-container`);
        const data = booksData[section];
        const currentBooks = container.querySelectorAll('.libro');
        
        // Añadir clase para la animación de salida
        currentBooks.forEach(book => book.classList.add('hiding'));
        
        // Esperar a que termine la animación
        await new Promise(resolve => setTimeout(resolve, 300));
        
        // Calcular el nuevo índice de página
        if (direction === 'next') {
            data.currentPage++;
        } else {
            data.currentPage--;
        }
        
        // Calcular el rango de libros a mostrar
        const startIdx = data.currentPage * 4;
        const endIdx = Math.min(startIdx + 4, data.books.length);
        
        // Actualizar los src de las imágenes
        container.innerHTML = '';
        for (let i = startIdx; i < endIdx; i++) {
            const img = document.createElement('img');
            img.src = data.books[i];
            img.alt = `Libro ${i + 1}`;
            img.className = 'libro';
            container.appendChild(img);
        }
        
        updateButtons(section);
    }

    function nextBooks(section) {
        if (booksData[section].currentPage * 4 < booksData[section].books.length - 4) {
            updateBooks(section, 'next');
        }
    }

    function previousBooks(section) {
        if (booksData[section].currentPage > 0) {
            updateBooks(section, 'prev');
        }
    }

    // Inicializar los botones
    document.addEventListener('DOMContentLoaded', () => {
        updateButtons('cuadernos');
        updateButtons('foros');
        updateButtons('otras');
    });
</script>

</body>
</html>