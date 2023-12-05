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

        footer {
            background-color: #343a40;
            color: #fff;
            text-align: center;
            padding: 1rem;
        }
        #consultar{
            width: 500px;
            height: 100px;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 25px;

        }
    </style>
</head>
<body>

    <header>
        <h1>Casa de Cambio</h1>
    </header>

    <nav>
        <form action="logout.php"> 
            <input type="submit" name="cerrar" id="cerrar" value="Cerrar sesion">
        </from>
        <a href="Cotizaciones.php">Cotizaciones</a>
        <a href="contactanos.html">Contacto</a>
        <a href="InicioSesion.php">InicioSesion/Login</a>
    </nav>

    <main>
        <section class="welcome-section">
            <h2>Bienvenido a nuestra Casa de Cambio</h2>
            <p>Ofrecemos servicios de cambio de divisas con tasas competitivas.</p>
        </section>

        <section id="cotizaciones">
            <h2>Cotizaciones</h2>
            <p>Te cotizamos con el tipo de efectivo que desees</p>
            <form action="Cotizaciones.php" method="post">
                <input type="submit" name="consultar" id="consultar" value="Ver Cotizaciones">
            </form>
        </section>

        <section class="service-section" id="servicios">
            <h2>Servicios</h2>

            <div class="service">
                <div class="service-icon">🌍</div>
                <div class="service-info">
                    <h3>Cambio de Divisas</h3>
                    <p>Ofrecemos tasas competitivas para cambiar diversas monedas extranjeras.</p>
                </div>
            </div>

            <div class="service">
                <div class="service-icon">💵</div>
                <div class="service-info">
                    <h3>Compra y Venta</h3>
                    <p>Facilitamos la compra y venta de monedas extranjeras para tus necesidades financieras.</p>
                </div>
            </div>

            <div class="service">
                <div class="service-icon">🔄</div>
                <div class="service-info">
                    <h3>Transferencias Internacionales</h3>
                    <p>Realizamos transferencias internacionales de fondos de manera segura y eficiente.</p>
                </div>
            </div>

        </section>

        <section id="contacto">
            <h2>Contacto</h2>
            <!-- Aquí puedes agregar un formulario de contacto o información de contacto -->
        </section>

        <div class="card-container">
            <div class="card">
                <h3>Cambio de efectivo</h3>
                <p>Cambio de dinero por peso, dolar, euro.</p>
            </div>
            <div class="card">
                <h3>Compra</h3>
                <p>Compra de divisas que no necesites.</p>
            </div>
            <div class="card">
                <h3>Venta</h3>
                <p>venta de divisas en buen estado.</p>
            </div>
        </div>
    </main>

    <footer>
        <p>&copy; 2023 Casa de Cambio. Todos los derechos reservados.</p>
    </footer>

</body>
</html>
