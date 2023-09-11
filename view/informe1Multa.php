<?php include ("../model/conexion.php");

$consulta = "SELECT * FROM tbl_multa WHERE tipoMulta = 'Mascota sin correa';";
header("content-type: aplication/vnd.ms-excel; charset=utf-8");
header("content-Disposition: attachment; filename=datos-Multa.xls");
?>

<table border= 1;>
    <caption>Listado de Multas</caption>
    <tr>
        <th>pkidMulta</th>
        <th>Numero de inmueble</th>
        <th>Tipo de multa</th>
        <th>Fecha de multa</th>
        <th>Evidencia</th>
        <th>Valor de multa</th>
        <th>Fecha de Pago</th>
    </tr>

    

<?php
$resultado = mysqli_query($conn, $consulta);
while ($filas = mysqli_fetch_assoc($resultado))
{
    ?>
    <tr>
        <td> <?php echo $filas["pkidMulta"]; ?></td>
        <td> <?php echo $filas["ninmMulta"]; ?></td>
        <td> <?php echo $filas["tipoMulta"]; ?></td>
        <td> <?php echo $filas["fecMulta"]; ?></td>
        <td> <?php echo $filas["evidMulta"]; ?></td>
        <td> <?php echo $filas["valMulta"]; ?></td>
        <td> <?php echo $filas["fpagMulta"]; ?></td>
    </tr>
<?php } ?>    
</table>
