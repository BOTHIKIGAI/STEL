<?php
include ("../model/conexion.php");

    if (isset($_POST["Actualizar"])) 

    
    {  
        $id = $_POST["id"];
        $remNovedades = $_POST["remNovedades"];
        $TipoNovedad = $_POST["TipoNovedad"];
        $asuntoNovedades = $_POST["asuntoNovedades"];
        $descNovedades = $_POST["descNovedades"];
        $docNovedades =$_POST["docNovedades"];
        $fecNovedades = $_POST["fecNovedades"];
        $resNovedades = $_POST["resNovedades"];
        $estNovedades = $_POST["estNovedades"];

        $sql=$conn->query("UPDATE  tbl_novedades SET remNovedades ='$remNovedades',
        TipoNovedad ='$TipoNovedad', asuntoNovedades = '$asuntoNovedades', descNovedades = '$descNovedades',
        docNovedades = '$docNovedades', fecNovedades = '$fecNovedades', resNovedades = '$resNovedades', estNovedades = '$estNovedades' WHERE pkidNovedades = $id");

       if($sql == 1){
           header ("location:../view/novedadesResidentes.php");
       }else {
           echo "<div class = 'alert alert-danger'>Error al modificar </div>";
       }
    }

?>
