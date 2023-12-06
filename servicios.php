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
        header input{
            height: 50px;
            width: 150px;
            background-color: #258d19;
            color: #fff;
            border:none;
            border-radius:10px;
        }
        header input:hover{
            background-color: #4ea93b;
        }

        nav {
            background-color: #b4ff9a;
            padding: 0.5rem;
        }

        nav a {
            text-decoration: none;
            color: #007BFF;
            margin: 0 1rem;
            font-weight: bold;
        }
        nav button{
            height: 50px;
            width: 150px;
            background-color: #258d19;
            color: #fff;
            border:none;
            border-radius:10px;
        }
        nav button:hover{
            background-color: #4ea93b;
        }

        main {
            padding: 2rem;
        }

        .welcome-section {
            text-align: center;
            padding: 2rem;
            border: 2px solid #92e27a;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            border-radius: 10px;
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
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            text-align: center;
        }

        .card h3 {
            color: #007BFF;
        }

        .service-section {
            text-align: center;
            margin-top: 2rem;
            border: 2px solid #92e27a;
            box-shadow: 0 0 10px rgba(0, 0, 0 , 0.3);
            border-radius: 10px
        }
        .service-section button{
            height: 50px;
            width: 150px;
            background-color: #258d19;
            color: #fff;
            border:none;
            border-radius:10px;
        }
        .service-section button:hover{
            background-color: #4ea93b;
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
        .geo{
            border: 2px solid #92e27a;
            margin-left: 15rem;
            margin-right: 15rem;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
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
        <form action="logout.php"> 
            <input type="submit" name="cerrar" id="cerrar" value="Cerrar sesion">
        </form>
        <h1>Casa de Cambio</h1>
    </header>

    <nav>
        <a href="Cotizaciones.html"><button>Cotizaciones</button></a>
        <a href="contactanos.html"><button>Contacto</button></a>
        <a href="InicioSesion.php"><button>InicioSesion/Login</button></a>
    </nav>

    <main>
        <section class="welcome-section">
            <h2>Bienvenido a nuestra Casa de Cambio</h2>
            <p>Ofrecemos servicios de cambio de divisas con tasas competitivas.</p>
        </section>

        <section class="service-section" id="servicios">
                            <h3>Cambio de Divisas</h3>
                            <p>Ofrecemos tasas competitivas para cambiar diversas monedas extranjeras.</p>
                            <a href="divisas.html"><button>Compra de divisas</button></a>
                            <p></p>
                    </div>

        </section>

    </main>
    <center>
        <section class="geo">
        <h2>Encuentranos aqui!</h2>
        <iframe
        width="600"
        height="450"
        style="border:0"
        loading="lazy"
        allowfullscreen
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3601.448609579463!2d-106.42889958497018!3d31.70530765669149!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86e744bbe74ac667%3A0x27166e8dab4f1be4!2sCl.%20Jos%C3%A9%20de%20Iturrigaray%206800%2C%20Campestre%2C%2032694%20Ju%C3%A1rez%2C%20Chih.!5e0!3m2!1ses!2ses!4v1640854378795!5m2!1ses!2ses"
    ></iframe>

    <p>O puedes abrir el enlace directamente en <a href="https://maps.app.goo.gl/4VKSss4T2bMHqFRw9" target="_blank">Google Maps</a>.</p>
    </section>

    </center>
    <footer>
        <p>&copy; 2023 Casa de Cambio. Todos los derechos reservados.</p>
    </footer>

</body>
</html>

