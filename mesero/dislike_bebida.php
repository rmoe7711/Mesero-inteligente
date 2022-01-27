<?php
$id = $_GET['k'];
$id2 = $_GET['p'];
echo $id;
require("conexion.php");
$sql = "UPDATE bebida_pedido SET arriba = 0, abajo = 1 WHERE bebida_pedido_id = $id";

mysqli_query($conexion,$sql);
echo "exito";
echo "<script> location.href='ver_cajero.php?k=$id2' </script>";
?>