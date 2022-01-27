<html>
<head>
<title>
</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

<link href="../dist/css/bootstrap.min.css" rel="stylesheet">

<body background="res1.jpg">

<?php


$nombre = $_POST['nombre'];
$password = $_POST['password'];

require("conexion.php");

$consulta = mysqli_query($conexion,"SELECT  * FROM cliente WHERE nombre = '$nombre'");  

$totalFilas  =  mysqli_num_rows($consulta);  

if($totalFilas == 0)
{ 
	
	
$sql = "INSERT INTO cliente(nombre,password) VALUES('$nombre','$password')";
mysqli_query($conexion,$sql);

echo "<script> location.href='logeo.php' </script>";


 }

else
{

echo "<h2>el El usuario ya existe ingresa uno valido</h2>";
echo "<br><br><a href='index.php' class='btn btn-primary btn-lg' type='button'>Ir a Registro</a>";
}
 	
 


?>

</body>
</html>