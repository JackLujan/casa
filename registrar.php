<?php
//Para registrar
include('conexion.php');
$nom=$_POST["nombre"];
$cor=$_POST["correo"];
$cont=$_POST["conte"];
$tele=$_POST["tele"];
$queryusuario = mysqli_query($conn,"SELECT * FROM usuarios WHERE correo ='$correo'");
$nr = mysqli_num_rows($queryusuario);
if ($nr == 0)
{
$queryregistrar = "INSERT INTO usuarios(Nombre, Correo, Contraseña, Telefono) values('$nom','$cor','$cont','$tele')";
if(mysqli_query($conn,$queryregistrar))
{
echo "<script> alert('Usuario registrado: $nom');window.location=
'login.html' </script>";
}
else
{
echo "Error: " .$queryregistrar."<br>".mysql_error($conn);
}
}
else
{
echo "<script> alert('Error al registrar! Intentar de nuevo:');window.location= 'InicioSesion.html' </script>";
}
/*TDM34*/
?>
