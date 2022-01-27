
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<link rel="stylesheet" type="text/css" href="estilo.css" media = "screen">
<link rel="stylesheet" type="text/css" href="imprimir.css" media = "print">

<script src="jquery-2.1.4.min.js"></script>

<script src="jspdf.debug.js"></script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />



<title>Reporte de Vídeos</title>



</head>



<body>

    <div id="reporte">
<?php
echo"<center>";
require("conexion.php");            


$result = mysqli_query($conexion,"SELECT cliente.nombre, plato.nombre, plato.ingredientes,plato_pedido.cantidad,plato_pedido.plato_pedido_id FROM plato_pedido INNER JOIN plato ON plato_pedido.plato_id = plato.plato_id INNER JOIN  cliente ON plato_pedido.cliente = cliente.id WHERE atendido = 1 ORDER BY plato_pedido_id") or die('Consulta fallida: ' . mysqli_error());



echo "<table class = 'listado' >";  
echo "<tr>";  
echo "<th>Cliente</th>";  
echo "<th>Pedido</th>";  
echo "<th>Ingredientes</th>"; 
echo "<th>Cantidad</th>";  
echo "</tr>";  
echo "<center><h1> pedidos de platillos atendidos</h1></center>";

while ($row = mysqli_fetch_row($result)){   
    echo "<tr>";  
    echo "<td>".$row[0]."</td>";  
    echo "<td>".$row[1]."</td>";  
    echo "<td>".$row[2]."</td>";  
   echo "<td>".$row[3]."</td>";
  
    echo "</tr>";  

}  

echo "</table>";
echo "</center>";
?>
</div>




</body>
<script>

DescargarPDF('reporte','Archivo');

function DescargarPDF(ContenidoID,nombre) {

    

    var pdf = new jsPDF('p', 'pt', 'letter');

    

    html = $('#'+ContenidoID).html();

    

    specialElementHandlers = {};

    

    margins = {top: 10,bottom: 20,left: 80,width: 1000};

    

    pdf.fromHTML(html, margins.left, margins.top, {'width': margins.width},function (dispose) {pdf.save(nombre+'.pdf');}, margins);

    

}

</script>
</html>

