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
$montoCambiar = $data['montoCambiar'];
$convertido = $data['convertido'];
$fechaRecogido = $data['fechaRecogido'];  // Puedes ajustar esto según sea necesario
$nombreCliente = $data['nombreCliente'];
$direccion = $data['direccion'];

// Preparar la consulta SQL para insertar los datos
$sql = "INSERT INTO casa (MontoCambiar, Convertido, FechaConversion, NombreCliente, Direccion)
        VALUES ('$montoCambiar', '$convertido', NOW(), '$nombreCliente', '$direccion')";

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    echo "Datos guardados exitosamente en la base de datos";
} else {
    echo "Error al guardar los datos en la base de datos: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>