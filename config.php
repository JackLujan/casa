<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('219197867638-6ar7c3h9gj1vilqgi84cfduanb6c1shb.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/casa/InicioSesion.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?>