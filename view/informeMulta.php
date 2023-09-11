<?php include ("../model/conexion.php");
echo '<h3> Puede ver la información de las multas</h3>';
echo '<h3> si desea descargar el informe en excel, de clic en el boton GENERAR_XLS.</h3>';	
$consulta = "SELECT * FROM tbl_multa WHERE tipoMulta = 'Mascota sin correa';";
$resultado = mysqli_query($conn, $consulta);
$filas=mysqli_num_rows($resultado);

echo '<table border=1;>';
echo '<tr><th>pkidMulta</th>
<th>Numero de inmueble</th>
<th>Tipo de multa</th>
<th>Fecha de multa</th>
<th>Evidencia de multa</th>
<th>Valor de multa</th>
<th>Fecha pago multa</th>';

while ($filas=mysqli_fetch_row($resultado))
{
    echo '<tr><td>'.$filas[0].'</td><td>'.$filas[1].'</td><td>'.$filas[2].'</td><td>'.$filas[3].'</td><td>'.$filas[4].'</td><td>'.$filas[5].'</td><td>'.$filas[6].'</td><tr>';
    
}
echo '</table>';
echo '<table><tr><td><form action="../view/informe1Multa.php" method="post">
        <input type="submit" value="GENERAR_XLS"></form></table>';   

?>