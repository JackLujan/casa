<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casa de Cambio</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        p{
            font-family: Arial, sans-serif;
        }

        header {
            background-color: #006b3b;
            color: #fff;
            text-align: center;
            padding: 1rem;
        }

        nav {
            background-color: #f8f9fa;
            padding: 0.5rem;
        }

        nav a {
            text-decoration: none;
            color: #007BFF;
            margin: 0 1rem;
            font-weight: bold;
        }

        main {
            padding: 2rem;
        }

        .welcome-section {
            text-align: center;
            padding: 2rem;
        }

        .card-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin-top: 2rem;
        }

        .card {
            width: 30%;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 1.5rem;
            margin: 1rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .card h3 {
            color: #007BFF;
        }

        .service-section {
            margin-top: 2rem;
        }

        .service {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .service-icon {
            margin-right: 1rem;
        }

        .exchange-rates {
            margin-top: 2rem;
        }

        .exchange-rate {
            display: flex;
            justify-content: space-between;
            border-bottom: 1px solid #ddd;
            padding: 1rem 0;
        }

        footer {
            background-color: #343a40;
            color: #fff;
            text-align: center;
            padding: 1rem;
        }
    </style>
</head>
<body>

    <header>
        <h1>Casa de Cambio</h1>
    </header>

    <nav>
        <a href="index.html">Cerrar sesion</a>
        <a href="servicios.html">Servicios</a>
        <a href="contactanos.html">Contacto</a>
        <a href="InicioSesion.html">InicioSesion/Login</a>
    </nav>

    <main>
        <section class="welcome-section">
            <h2>Bienvenido a nuestra Casa de Cambio</h2>
            <p>Ofrecemos servicios de cambio de divisas con tasas competitivas.</p>
        </section>

        <section class="exchange-rates" id="cotizaciones">
            <?php
            if(isset($_POST['consultar'])){
                $archivo = fopen("Money.csv","r");
                while(($datos = fgetcsv($archivo, 1000, ",")) !== false){
                    echo "<p><strong>Pesos: </strong> " . $datos[0] . "</p>";
                    echo "<p><strong>Conversion: </strong> " . $datos[1] . "</p>";
                    echo "<hr>";
                }
                fclose($archivo);
            }
            ?>

            <!-- Agrega más tasas de cambio según sea necesario -->

        </section>

        
    </main>

    <footer>
        <p>&copy; 2023 Casa de Cambio. Todos los derechos reservados.</p>
    </footer>

</body>
</html>
