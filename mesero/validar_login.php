<html>
<head>
<title>

</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

<link href="../dist/css/bootstrap.min.css" rel="stylesheet">

<body background='res1.jpg'>

<div class="wrapper"> 
 <div id="formulariocontacto">
 <form name="primerformulario"  method="post" action="menu.php">
<fieldset>

<?php

$nombre = $_POST['nombre'];
$password = $_POST['password'];


require("conexion.php");

$consulta = mysqli_query($conexion,"SELECT  * FROM cliente WHERE nombre = '$nombre'");  

$totalFilas  =  mysqli_num_rows($consulta);  

if($totalFilas == 0)
{ 

echo "<h2>El usuario no existe<br></h2>";
echo "<br><br> <a type='button' class='btn btn-primary' href='logeo.php'>Ir a Login</a>";
echo "<br><br> <a type='button' class='btn btn-primary' href='index.php'>Ir a Registro</a>";	
	
}

else
{

while ($row = mysqli_fetch_row($consulta))

{   



if($nombre == 'chef' && $password == 'chef123')
{
$id = $row[0];

	echo "<script> location.href='ver.php?k=$id' </script>";

}

if($nombre == 'cajero' && $password == 'cajero123')
{

	$id = $row[0];

	echo "<script> location.href='ver_cajero.php?k=$id' </script>";
}

if($nombre == 'admin' && $password == 'admin')
{

	$id = $row[0];

	echo "<script> location.href='imprimir.php?k=$id' </script>";
}

if($row[1] == $nombre && $row[2] == $password)
{
$id = $row[0];

echo "<center>";

  	echo "<h1>exito</h1>";
echo "<script> location.href='menu.php?k=$id' </script>";

	 
echo "</center>";
}




else {

echo "<h2>usuario o contraseña invalidos</h2>";
echo "<br><br> <a type='button' class='btn btn-primary' href='logeo.php'>Ir a Login</a>";
}

 }

}
 	
?>


    
</fieldset>
</form>
</div>
</div>
</body>
</html>
