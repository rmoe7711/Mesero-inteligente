<meta http-equiv="Expires" content="0" /> 
<meta http-equiv="Pragma" content="no-cache" />

<script type="text/javascript">
  if(history.forward(1)){
    location.replace( history.forward(1) );
  }
</script>
<html>
<head>
  <meta charset="UTF-8">
<title>

</title>
<style type="text/css">


#button li a, input{
 font-family: Arial;
 font-size: 11px;
 text-decoration: none;
 float: center;
 padding: 10px;
 background-color: #CCCC99;
 color: #000000;
 }


</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script type="text/javascript">
function confirmar() {
  // indicamos que se ejecuta la funcion a los 5 segundos de haberse
  // cargado la pagina
  setTimeout(clickbutton, 200);

  function clickbutton() {
    // simulamos el click del mouse en el boton del formulario
    $("#confirmar").click();
  
  }
  $('#confirmar').on('click',function() {
    console.log('action button clicked');
  });
}

function cancelar() {
  // indicamos que se ejecuta la funcion a los 5 segundos de haberse
  // cargado la pagina
  setTimeout(clickbutton, 200);

  function clickbutton() {
    // simulamos el click del mouse en el boton del formulario
    $("#cancelar").click();
  
  }
  $('#cancelar').on('click',function() {
    console.log('action button clicked');
  });
}

</script>

</head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

<link href="../dist/css/bootstrap.min.css" rel="stylesheet">


<body background='res1.jpg'>

<center><h1>Detalle De Platillo </h1></center>
<div class="wrapper"> 
 <div id="formulariocontacto">
 <form name="primerformulario" method = "POST" action = "confirmar_plato.php" >
<fieldset>
	<?php
	$id = $_POST['id'];
$idPlato = $_POST['group1'];
$cantidad = $_POST['cantidad_platos'];
$cliente = $_POST['cliente'];
$time = time();
$fechaHoy = date("Y-m-d", $time);


require("conexion.php");
$result = mysqli_query($conexion,"SELECT nombre,precio,tiempo FROM plato WHERE plato_id = '$idPlato'") or die('Consulta fallida: ' . mysqli_error());
while ($row = mysqli_fetch_row($result)){   
echo "<center>";
  echo "Nombre Platillo: <input type='text' size = '50' readonly value='".$row[0]."'></input>";
  echo "<br><br>Precio: <input type='text' readonly value='".$row[1]."'></input>";  
  echo "<br><br>Tiempo: <input type='text' name='tiempo' readonly value='".$row[2]."'></input>";  
 
 $total = $row[1] * $cantidad;
 }
echo "<br><br>Cantidad: <input type='text' name='cantidad' readonly value='$cantidad'></input>";  
 echo "<br><br>Fecha: <input type ='text' readonly name='fechaHoy' value = '$fechaHoy'>";

  echo "<br><br>Total: <input type='text' name='total' readonly value='$total'></input>";  

echo "<input type='hidden' name='idplato' readonly value='$idPlato'></input>";
	echo "<input type='hidden' name='id' readonly value='$id'></input>";

	echo "<br><br>Cliente:   <input type ='text' name='cliente' readonly  value = '$cliente'>";

?>


<br><br>

<input type='submit' id="confirmar" class='btn btn-primary'  value='Confirmar' id='boton1'>
<input type="button" id="cancelar" class='btn btn-primary' value="Cancelar" onclick="location.href='menu.php?k=<?php echo $id ?>'" />
</center>
</fieldset>
</form>
</div>
</div>

</script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/annyang/2.4.0/annyang.min.js"></script>
    <script>
        if (annyang) {
            // Let's define our first command. First the text we expect, and then the function it should call
            var commands = {
                'confirmar': function () {
                    confirmar();
                },
               
               'cancelar': function () {
                    cancelar();
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