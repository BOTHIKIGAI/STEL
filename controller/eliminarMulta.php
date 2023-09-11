<?php
    if (!empty($_GET["pkidMulta"])){
        $pkidMulta = $_GET["pkidMulta"];
        $sql = $conn->query("DELETE FROM tbl_multa where pkidMulta = $pkidMulta");
        if ($sql==1) {
           echo '<div class ="alert alert-success"> Multa eliminada correctamente</div>'; 
        }else{
            echo '<div class ="alert alert-danger">Error al eliminar la multa</div>'; 
        }

    }

?>