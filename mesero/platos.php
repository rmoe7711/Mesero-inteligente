<html>
<head>
  <meta charset="UTF-8">
<title>

</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script type="text/javascript">
function enviar() {
  // indicamos que se ejecuta la funcion a los 5 segundos de haberse
  // cargado la pagina
  setTimeout(clickbutton, 200);

  function clickbutton() {
    // simulamos el click del mouse en el boton del formulario
    $("#enviar").click();
  
  }
  $('#enviar').on('click',function() {
    console.log('action button clicked');
  });
}

</script>

</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

<link href="../dist/css/bootstrap.min.css" rel="stylesheet">

<body background='res1.jpg'>
<center>

<h1>
Bienvenido Haz tu orden
</h1>

</center>


<center>
<span style="font-size: large;"><span class="Apple-style-span" style="color: red;"><script language="JavaScript" type="text/javascript">
//<![CDATA[
<!--
today = new Date()
if(today.getMinutes() < 10){
pad = "0"}
else
pad = "";
document.write ;if((today.getHours() >=6) && (today.getHours() <=9)){
document.write("Buenos dias")
}
if((today.getHours() >=10) && (today.getHours() <=11)){
document.write("Buenos dias")
}
if((today.getHours() >=12) && (today.getHours() <=19)){
document.write("Buenas tardes")
}
if((today.getHours() >=20) && (today.getHours() <=23)){
document.write("Buenas noches")
}
if((today.getHours() >=0) && (today.getHours() <=3)){
document.write("Buenas noches")
}
if((today.getHours() >=4) && (today.getHours() <=5)){
document.write("Buenos dias")
}


// -->
//]]>
</script></span></span></center>

<br>
<?php 

$id = $_GET['k'];

ini_set('date.timezone','America/Guatemala'); 
$hora = date("G.i A");
echo $hora;

if($hora > 5 && $hora < 11 )
{
?>
<div class="wrapper"> 
 <div id="formulariocontacto">
 <form name="primerformulario"  method="post" action="envio_plato.php">
<fieldset>
<?php 
require("conexion.php");            

echo"<h3>Menu De Platos</h3>";
$result = mysqli_query($conexion,"SELECT  nombre FROM cliente WHERE id = '$id'") or die('Consulta fallida: ' . mysqli_error());
while ($row = mysqli_fetch_row($result)){   
echo "<center>  Nombre Cliente: <input type='text' name='cliente' value=".$row[0]." readonly > </center> <br><br>";

  }
$result = mysqli_query($conexion,"SELECT  plato_id,nombre,precio FROM plato WHERE tiempo = 'Desayuno'") or die('Consulta fallida: ' . mysqli_error());


while ($row = mysqli_fetch_row($result)){   
  
  echo"<input type='radio' required name='group1' value=".$row[0].">".$row[0]."";
   echo "     <input type='text' size='40' readonly value='".$row[1]."'></input>"; 
 echo "     Q. <input type='text' size='5' readonly value ='".$row[2]."'></input>"; 
 
   echo "<br>";
}  
echo "<center>
cantidad: <select name = 'cantidad_platos'>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
</select></center> ";  

echo "<input type = 'hidden' readonly name = 'id' value = '$id'>";
?>
<input type = "submit" id = "enviar" class='btn btn-primary' value = "enviar"></input>
</fieldset>
</form>
</div>
</div>
<?php	
}
if($hora > 11 && $hora < 16)
 {
?>
 	<div class="wrapper"> 
 <div id="formulariocontacto">
 <form name="primerformulario"  method="post" action="envio_plato.php">
<fieldset>
<?php 
require("conexion.php");  
echo"<h3>Menu De Platos</h3>";
$result = mysqli_query($conexion,"SELECT  nombre FROM cliente WHERE id = '$id'") or die('Consulta fallida: ' . mysqli_error());
while ($row = mysqli_fetch_row($result)){   
echo "<center>  Nombre Cliente: <input type='text' name='cliente' value=".$row[0]." readonly > </center> <br><br>";

  }

$result = mysqli_query($conexion,"SELECT  plato_id,nombre,precio FROM plato WHERE tiempo = 'Almuerzo'") or die('Consulta fallida: ' . mysqli_error());

while ($row = mysqli_fetch_row($result)){   
  
  echo"<input type='radio' required name='group1' value=".$row[0].">".$row[0]."";
   echo "     <input type='text' size='40' readonly value='".$row[1]."'></input>"; 
 echo "     Q. <input type='text' size='5' readonly value ='".$row[2]."'></input>"; 
 
   echo "<br>";
}  
echo "<center>
cantidad: <select name = 'cantidad_platos'>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
</select></center> ";  
echo "<input type = 'hidden' readonly name = 'id' value = '$id'>";
?>
<input type = "submit" id = "enviar" class='btn btn-primary' value = "enviar"></input>
</fieldset>
</form>
</div>
</div>
<?php
 }

 if($hora > 16 && $hora < 24)
 {
 	echo "hora de cena";

?>
<div class="wrapper"> 
 <div id="formulariocontacto">
 <form name="primerformulario"  method="post" action="envio_plato.php">
<fieldset>
<?php 
require("conexion.php");            
echo"<h3>Menu De Platos</h3>";
$result = mysqli_query($conexion,"SELECT  nombre FROM cliente WHERE id = '$id'") or die('Consulta fallida: ' . mysqli_error());
while ($row = mysqli_fetch_row($result)){   
echo "<center>  Nombre Cliente: <input type='text' name='cliente' value=".$row[0]." readonly > </center> <br><br>";

  }

$result = mysqli_query($conexion,"SELECT  plato_id,nombre,precio FROM plato WHERE tiempo = 'Cena'") or die('Consulta fallida: ' . mysqli_error());


while ($row = mysqli_fetch_row($result)){   
  
  echo"<input type='radio' required name='group1' value=".$row[0].">".$row[0]."";
   echo "     <input type='text' size='40' readonly value='".$row[1]."'></input>"; 
 echo "     Q. <input type='text' size='5' readonly value ='".$row[2]."'></input>"; 
 
   echo "<br>";
}  
echo "<center>
cantidad: <select name = 'cantidad_platos'>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
</select></center> ";  
echo "<input type = 'hidden' readonly name = 'id' value = '$id'>";
?>
<input type = "submit" id = "enviar" class='btn btn-primary' value = "enviar"></input>
<input type="button" id = "cancelar" class='btn btn-primary' value="Cancelar" onclick="location.href='menu.php?k=<?php echo $id ?>'" />

</fieldset>
</form>
</div>
</div>
<?php
 }

 else{

 	echo "";
 }
?>


</script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/annyang/2.4.0/annyang.min.js"></script>
    <script>
        if (annyang) {
            // Let's define our first command. First the text we expect, and then the function it should call
            var commands = {
                'enviar': function () {
                    enviar();
                },
               
               
            };
            annyang.setLanguage('es-MX');
            annyang.addCommands(commands);
            annyang.debug();
            annyang.start({ continuous: false });
        }
</script>


</body>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 


</html>