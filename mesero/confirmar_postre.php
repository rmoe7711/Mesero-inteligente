<?php
$id = $_POST['id'];
$idPostre = $_POST['id_postre'];
$cantidad = $_POST['cantidad'];
$fechaHoy = $_POST['fechaHoy'];
$total = $_POST['total'];


require("conexion.php");

$sql = "INSERT INTO postre_pedido(cliente,fecha_pedido,cantidad,total,atendido,arriba,abajo,id_postre) 
VALUES('$id','$fechaHoy',$cantidad,$total,0,0,0,$idPostre)";

mysqli_query($conexion,$sql);
echo "exito";
echo "<script> location.href='menu.php?k=$id' </script>";

?>