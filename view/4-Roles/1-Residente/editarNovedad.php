<?php include ("../model/conexion.php");
    $id = $_GET['pkidNovedades'];
    
    $sql = $conn->query("SELECT * FROM tbl_novedades WHERE pkidNovedades = $id");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>STEL</title>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <link rel="shortcout icon" href="0. Imagenes/0. Logos/3. logo sin  nombre blanco.png">
        <link rel="stylesheet" type="text/css" href="1. CSS/2. Modulos.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
        <link rel="stylesheet" type="text/css" href="1. CSS/2. Modulos.css">

        <script src="https://code.jquery.com/jquery-3.5.1.js" defer></script>
        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js" defer></script>
        <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js" defer></script>
        <script src="2. JavaScript/modulos.js" defer></script>
    
</head>
<body>

    <div class="container d-text-center pt-4 ">

                    
        <div class="row justify-content-center">

            <div class="col">

                    <h2> Modificar Novedad</h2>
                    <hr>
                    <form action="../controller/editarNovedad1.php" method="post">

                
                    <?php
                        include ("../controller/editarNovedad1.php");
                        while ($datos=$sql->fetch_object()){?>
                                            <input type="hidden" name="id" value="<?=$_GET["pkidNovedades"] ?>"> 
                                            <label for="remitenteNovedad" class="form-label" style="margin-top: 15px; margin-bottom: 15px; font-weight: 700; color:#23518C">Nombre Remitente</label>
                                            <input type="text" class="form-control" name="remNovedades" aria-describedby="Remitente" maxlength="15" placeholder="Nombre" value="<?=$datos-> remNovedades  ?>">
                                            <!-- Tipo novedad -->

                                            <label for="tipoNovedad1" style="margin-top: 15px; margin-bottom: 10px; font-weight: 700; color:#23518C">Tipo de Novedad</label>
                                            <input type="text" name="TipoNovedad" value="<?=$datos->TipoNovedad ?>"><br>
                                                                    
                                            <!-- Asunto de Novedad -->

                                            <label for="asuntonovedad" class="form-label" style="margin-top: 15px; margin-bottom: 15px; font-weight: 700; color:#23518C" >Asunto Novedad</label>
                                            <input type="text" class="form-control" name="asuntoNovedades" aria-label="Asunto" value="<?=$datos->asuntoNovedades ?>">

                                            <!-- Descripción -->


                                            <label for="descripcionNovedad" class="form-label" style="margin-top: 15px; margin-bottom: 15px; font-weight: 700; color:#23518C" >Descripción novedad</label>
                                            <div class="form-floating">
                                                <textarea class="form-control" placeholder="Leave a comment here" name="descNovedades" style="height: 100px" maxlength="180" value=" <?=$datos-> descNovedades  ?>"></textarea>
                                                <label for="descripcionNovedad" style="font-size: 13px;">Razon</label>
                                            </div>

                                    
                                            <!-- Documento Novedad -->

                                            
                                            <label for="documentoNovedad" class="form-label" style="margin-top: 15px; margin-bottom: 15px; font-weight: 700; color:#23518C;" >Documento Novedad</label>
                                            <input type="file" class="form-control" name="docNovedades" value="<?=$datos->docNovedades?>"><br>

                                            <!-- Fecha Evidencia -->

                                            <label for="fechaNovedades" class="form-label" style="margin-top: 15px; margin-bottom: 15px; font-weight: 700; color:#23518C;" >Fecha Novedad</label>
                                            <input type="date" class="form-control" name="fecNovedades" aria-describedby="fecha_de_asignacion_Novedad" value="<?=$datos->fecNovedades?>">
                        
                                             <!-- Respuesta novedad -->

                                             <label for="respuestanovedad"  style="margin-top: 15px; margin-bottom: 10px; font-weight: 700; color:#23518C">Respuesta Novedad</label>
                                             <input type="text" name="resNovedades" value="<?=$datos->resNovedades ?>"><br>

                                             <!-- Estado novedad -->

                                             <label for="estadoNovedad" style="margin-top: 15px; margin-bottom: 10px; font-weight: 700; color:#23518C">Estado Novedad</label>
                                             <input type="text" name="estNovedades" value="<?=$datos->estNovedades ?>"><br>
         
                        <?php }
                        ?>
                    

                    <button type="submit" class="btn btn-primary mb-3" style="margin-top: 30px; background-color: #0d0d0d; color: #f2ebdc; border: 1px solid rgba(0,0,0,0.15);" name="Actualizar">Actualizar Novedad </button>

                </form>

                
        
            </div>
        
            <!-- Imagen -->
              
            <div class="col">

                <img src="0. Imagenes/21. Novedades/2-NovResidenteForm.png" alt="" style="border-radius: 10px; margin-left: 90px; margin-top: 20px;">

            </div>


        </div>

    </div>
                              
</body>
</html>
