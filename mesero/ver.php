<meta http-equiv="Expires" content="0" /> 
<meta http-equiv="Pragma" content="no-cache" />

<script type="text/javascript">
  if(history.forward(1)){
    location.replace( history.forward(1) );
  }
</script>
<html>
<head>
<meta http-equiv="refresh" content="5">

<title>
</title>
<style type="text/css">
table {
   width: 80%;
}
th, td {
   width: 25%;
   text-align: left;
}
</style>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

<link href="../dist/css/bootstrap.min.css" rel="stylesheet">

<body>
<a href="index.php" type = "button"> Cerrar Sesion</a>
<br>    
<?php 

$id = $_GET['k'];
echo $id;
echo"<center>";
require("conexion.php");            


$result = mysqli_query($conexion,"SELECT cliente.nombre, plato.nombre, plato.ingredientes,plato_pedido.cantidad,plato_pedido.plato_pedido_id FROM plato_pedido INNER JOIN plato ON plato_pedido.plato_id = plato.plato_id INNER JOIN  cliente ON plato_pedido.cliente = cliente.id WHERE atendido = 0 ORDER BY plato_pedido_id") or die('Consulta fallida: ' . mysqli_error());



echo "<table>";  
echo "<tr>";  
echo "<th>Cliente</th>";  
echo "<th>Pedido</th>";  
echo "<th>Ingredientes</th>"; 
echo "<th>Cantidad</th>"; 
echo "<th>Atendido</th>"; 
echo "</tr>";  
echo "<center><h1> pedidos de platillos Pendientes</h1></center>";

while ($row = mysqli_fetch_row($result)){   
    echo "<tr>";  
    echo "<td>".$row[0]."</td>";  
    echo "<td>".$row[1]."</td>";  
    echo "<td>".$row[2]."</td>";  
   echo "<td>".$row[3]."</td>";
   $k=$row[4];  
 echo "<td><a type='button' class='btn btn-primary' href='plato_atendido.php?k=$k&p=$id'> ok </a> </td>";
 
    echo "</tr>";  

}  



echo "<br><br>";


$result = mysqli_query($conexion,"SELECT cliente.nombre, bebida.nombre_be, bebida_pedido.cantidad,bebida_pedido.bebida_pedido_id FROM bebida_pedido INNER JOIN bebida ON bebida_pedido.bebida_id = bebida.bebida_id INNER JOIN  cliente ON bebida_pedido.cliente = cliente.id WHERE atendido = 0 ORDER BY bebida_pedido_id") or die('Consulta fallida: ' . mysqli_error());

echo "<table>";  
echo "<tr>";  
echo "<th>Cliente</th>";  
echo "<th>Pedido</th>";  
echo "<th>Cantidad</th>";
echo "<th>Atendido</th>";   
echo "</tr>";  
echo "<center><h1> pedidos de bebidas Pendientes </h1></center>";

while ($row = mysqli_fetch_row($result)){   
    echo "<tr>";  
    echo "<td>".$row[0]."</td>";  
    echo "<td>".$row[1]."</td>";  
    echo "<td>".$row[2]."</td>";    
    $k2=$row[3];
 echo "<td><a type='button' class='btn btn-primary' href='bebida_atendido.php?k=$k2&p=$id'> ok </a> </td>";
 
    echo "</tr>";  
} 


echo "<br><br>";


$result = mysqli_query($conexion,"SELECT cliente.nombre, postre.nombre,postre.ingrediente, postre_pedido.cantidad,postre_pedido.postre_pedido_id FROM postre_pedido INNER JOIN postre ON postre_pedido.id_postre = postre.id_postre INNER JOIN  cliente ON postre_pedido.cliente = cliente.id WHERE atendido = 0 ORDER BY postre_pedido_id") or die('Consulta fallida: ' . mysqli_error());

echo "<table>";  
echo "<tr>";  
echo "<th>Cliente</th>";  
echo "<th>Pedido</th>";  
echo "<th>Ingrediente</th>"; 
echo "<th>Cantidad</th>"; 
echo "<th>Atendido</th>";  
echo "</tr>";  
echo "<center><h1> pedidos de postres Pendientes </h1></center>";

while ($row = mysqli_fetch_row($result)){   
    echo "<tr>";  
    echo "<td>".$row[0]."</td>";  
    echo "<td>".$row[1]."</td>";  
    echo "<td>".$row[2]."</td>"; 
    echo "<td>".$row[3]."</td>";   
    $k3 = $row[4];
 echo "<td><a type='button' class='btn btn-primary' href='postre_atendido.php?k=$k3&p=$id'> ok </a> </td>";
 
    echo "</tr>";  
} 



?>
</center>

</body>


</html>