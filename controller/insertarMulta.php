<?php include ("../model/conexion.php");

if (isset($_POST['registrarMulta'])){

    $inmueble = $_POST['ninmMulta'];
    $tipoMulta = $_POST['tipoMulta'];
    $fecha = $_POST['fecMulta'];
    $evidencia = $_POST['evidMulta'];
    $valor = $_POST['valMulta'];
    $pago = $_POST['fpagMulta'];

    $sql = "INSERT INTO tbl_multa (pkidMulta, ninmMulta, tipoMulta, fecMulta, evidMulta, valMulta, fpagMulta, fkidInmueble, fkidTrabajador) VALUES (null, '$inmueble', '$tipoMulta', '$fecha', '$evidencia', '$valor', '$pago', null, 2)";

    if ($conn->query($sql) === TRUE) {
        echo "Multa registrada correctamente";
    } else {
        echo "Error al crear la multa: " . $conn->error;
    }
}

    header("location:../view/multasSeccion.php");
$conn->close();


?>
