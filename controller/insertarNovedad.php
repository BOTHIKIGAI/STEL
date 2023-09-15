<?php include ("../model/conexion.php");

if (isset($_POST['Registrarnovedad'])){

    $Remitente = $_POST['remNovedades'];
    $tipoNovedad = $_POST['TipoNovedad'];
    $Asunto = $_POST['asuntoNovedades'];
    $Descripcion = $_POST['descNovedades'];
    $Documento = $_POST['docNovedades'];
    $Fecha = $_POST['fecNovedades'];
    $Respuesta = $_POST['resNovedades'];
    $Estado = $_POST['estNovedades'];
    

    $sql = "INSERT INTO tbl_novedades (pkidNovedades, remNovedades, TipoNovedad, asuntoNovedades, descNovedades, docNovedades, fecNovedades, resNovedades, estNovedades, fkidTrabajador) VALUES (null, '$Remitente', '$tipoNovedad', '$Asunto', '$Descripcion', '$Documento' , '$Fecha', '$Respuesta', '$Estado',2)";

    if ($conn->query($sql) === TRUE) {
        echo "Evidencia registrada correctamente";
    } else {
        echo "Error al crear la evidencia: " . $conn->error;
    }
}

    header("location:../view/novedadesResidentes.php");
$conn->close();


?>
