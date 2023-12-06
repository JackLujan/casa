<?php
// Conectar a la base de datos (ajusta los valores según tu configuración)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "casa";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

// Obtener los datos JSON del cuerpo de la solicitud
$data = json_decode(file_get_contents("php://input"), true);

// Obtener los datos individuales
$tar = $_POST['tarjeta'];
$num = $_POST['Num'];
$tit = $_POST['tit'];
$expr = $_POST['expir'];
$CVV = $_POST['cvv'];

// Preparar la consulta SQL para insertar los datos
$sql = "INSERT INTO tarjetas (TipoTarjeta, NumeroTarjeta, Titular, FechaVeci, CVV)
        VALUES ('$tar', '$num', '$tit', '$expr', '$CVV')";

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    echo "<script>window.location='servicios.php'</script>'";
} else {
    echo "Error al guardar los datos en la base de datos: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>