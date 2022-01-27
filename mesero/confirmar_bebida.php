<?php
$id = $_POST['id'];
$idBebida = $_POST['id_bebida'];
$cantidad = $_POST['cantidad'];
$fechaHoy = $_POST['fechaHoy'];
$total = $_POST['total'];

require("conexion.php");

$sql = "INSERT INTO bebida_pedido(cliente,fecha_pedido,cantidad,total,atendido,arriba,abajo,bebida_id) 
VALUES($id,'$fechaHoy',$cantidad,$total,0,0,0,$idBebida)";

mysqli_query($conexion,$sql);
echo "exito";
echo "<script> location.href='menu.php?k=$id' </script>";

?>