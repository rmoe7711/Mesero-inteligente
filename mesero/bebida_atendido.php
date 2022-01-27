<?php
$id = $_GET['k'];
$id2 = $_GET['p'];
echo $id;
require("conexion.php");
$sql = "UPDATE bebida_pedido SET atendido = 1 WHERE bebida_pedido_id = $id";

mysqli_query($conexion,$sql);
echo "exito";
echo "<script> location.href='ver.php?k=$id2' </script>";
?>