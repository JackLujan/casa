<?php
include('conexion.php');
$usu=$_POST["nombre"];
$cor=$_POST["correo"];
$con=$_POST["conte"];
//Para iniciar sesión
$queryusuario = mysqli_query($conn,"SELECT * FROM usuarios WHERE Nombre='$usu' and Correo = '$cor' and Contraseña= '$con' ");
$nr = mysqli_num_rows($queryusuario);
if ($nr == 1)
{
echo "<script> alert('Usuario logueado.');window.location='servicios.php' </script>";
}
else
{
echo "<script> alert('Usuario, contraseña o correo incorrecto, intente de nuevo');window.location= 'login.html' </script>";
}
?>
