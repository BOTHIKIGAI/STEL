<?php
include ("../model/conexion.php");
//var_dump();die();
    if (isset($_POST["Actualizar"])) 

    
    {
        
            $id = $_POST["id"];
            $ninmMulta = $_POST["ninmMulta"];
            $tipoMulta = $_POST["tipoMulta"];
            $fecMulta = $_POST["fecMulta"];
            $evidMulta = $_POST["evidMulta"];
            $valMulta = $_POST["valMulta"];
            $fpagMulta = $_POST["fpagMulta"];

            $sql=$conn->query("UPDATE  tbl_multa SET ninmMulta =$ninmMulta,
             tipoMulta ='$tipoMulta', fecMulta = '$fecMulta', evidMulta = '$evidMulta',
              valMulta = $valMulta, fpagMulta = '$fpagMulta' WHERE pkidMulta = $id");

            if($sql == 1){
                header ("location:../view/multasSeccion.php");
            }else {
                echo "<div class = 'alert alert-danger'>Error al modificar </div>";
            }
    }

?>





