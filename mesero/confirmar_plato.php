<?php
$id = $_POST['id'];
$idPlato = $_POST['idplato'];
$cantidad = $_POST['cantidad'];
$fechaHoy = $_POST['fechaHoy'];
$tiempo = $_POST['tiempo'];
$total = $_POST['total'];

require("conexion.php");

$sql = "INSERT INTO plato_pedido(fecha_pedido,cliente,cantidad,tiempo,total,atendido,arriba,abajo,plato_id) 
VALUES('$fechaHoy',$id,$cantidad,'$tiempo',$total,0,0,0,$idPlato)";

mysqli_query($conexion,$sql);
echo "exito";
echo "<script> location.href='menu.php?k=$id' </script>";
?>