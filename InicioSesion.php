<?php

//index.php

//Include Configuration File
include('config.php');

$login_button = '';


if(isset($_GET["code"]))
{

 $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);


 if(!isset($token['error']))
 {
 
  $google_client->setAccessToken($token['access_token']);

 
  $_SESSION['access_token'] = $token['access_token'];


  $google_service = new Google_Service_Oauth2($google_client);

 
  $data = $google_service->userinfo->get();

 
  if(!empty($data['given_name']))
  {
   $_SESSION['user_first_name'] = $data['given_name'];
  }

  if(!empty($data['family_name']))
  {
   $_SESSION['user_last_name'] = $data['family_name'];
  }

  if(!empty($data['email']))
  {
   $_SESSION['user_email_address'] = $data['email'];
  }

  if(!empty($data['gender']))
  {
   $_SESSION['user_gender'] = $data['gender'];
  }

  if(!empty($data['picture']))
  {
   $_SESSION['user_image'] = $data['picture'];
  }
 }
}


if(!isset($_SESSION['access_token']))
{

 $login_button = '<a href="'.$google_client->createAuthUrl().'">Login With Google</a>';
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - Casa de Cambio</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
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
        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 8px;
            color: #2ecc71; /* Verde oscuro */
        }
        input, textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #2ecc71; /* Verde oscuro */
            border-radius: 4px;
        }
        button {
            background-color: #2ecc71; /* Verde oscuro */
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #27ae60; /* Verde más claro al pasar el mouse */
        }
        nav a {
            text-decoration: none;
            color: #007BFF;
            margin: 0 1rem;
            font-weight: bold;
        }
        nav{
            background-color: #f8f9fa;
        }
        .container a{
            text-decoration: none;
            color: #007BFF;
            font-weight: bold;
        }

    </style>
</head>
<body>

    <header>
        <h1>Casa de Cambio</h1>
    </header>

    <nav>
        <a href="index.html">Regresar a pagina principal</a>
    </nav>

    <div class="container">
        <h1 style="color:#2ecc71">Para seguir adelante, favor de registrarse o iniciar sesion</h1>
        <h2 style="color: #2ecc71;">Formulario de Registro - Casa de Cambio</h2>
        <form action="registrar.php" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="correo">Correo electrónico:</label>
            <input type="email" id="correo" name="correo" required>

            <label for="contra">Contraseña:</label>
            <input type="password" id="contra" name="conte" required>

            <label for="telef">Telefono:</label>
            <input type="text" name="tele" id="tele" required>

            <button type="submit">Registrarse</button>
            <br>
            <div class="container">
                <br />
                <br />
                <div class="panel panel-default">
                <?php
                if($login_button == '')
                {
                    echo "<script> alert('Usuario registrado.');window.location='servicios.php' </script>";
                }
                else
                {
                    echo '<div align="center">'.$login_button . '</div>';
                }
                ?>
                </div>
                </div>
            <br>
            <a href="Login.html">Ya tienes cuenta? Inicia sesion!</a>
        </form>
    </div>

</body>
</html>
