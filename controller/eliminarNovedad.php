<?php

    if (!empty($_GET["pkidNovedades"])){
        $pkidNovedades = $_GET["pkidNovedades"];

        // Verifica si el registro tiene registros relacionados
        $sql = $conn->query("SELECT COUNT(*) AS cantidad FROM residente_novedades WHERE pkidNovedades = $pkidNovedades");
        $row = $sql->fetch_assoc();

        if ($row["cantidad"] == 0) {
            // El registro no tiene registros relacionados, por lo que se puede eliminar
            $sql = $conn->query("DELETE FROM tbl_novedades WHERE pkidNovedades = $pkidNovedades");
            if ($sql==1) {
                echo '<div class ="alert alert-success"> Novedad eliminada correctamente</div>';
            }else{
                echo '<div class ="alert alert-danger">Error al eliminar la Novedad</div>';
            }
        }else{
            // El registro tiene registros relacionados, por lo que se deben eliminar primero
            $sql = $conn->query("DELETE FROM residente_novedades  WHERE pkidNovedades = $pkidNovedades");
            if ($sql==1) {
                // Los registros relacionados se han eliminado correctamente, por lo que ahora se puede eliminar el registro principal
                $sql = $conn->query("DELETE FROM tbl_novedades WHERE pkidNovedades = $pkidNovedades");
                if ($sql==1) {
                    echo '<div class ="alert alert-success"> Novedad eliminada correctamente</div>';
                }else{
                    echo '<div class ="alert alert-danger">Error al eliminar la Novedad</div>';
                }
            }else{
                // No se pudieron eliminar los registros relacionados, por lo que no se puede eliminar el registro principal
                echo '<div class ="alert alert-danger">No se puede eliminar la Novedad. Tiene registros relacionados</div>';
            }
        }

    }




?>