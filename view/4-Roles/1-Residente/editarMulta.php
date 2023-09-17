<?php include ("../model/conexion.php");
    $id = $_GET['pkidMulta'];
    
    $sql = $conn->query("SELECT * FROM tbl_multa WHERE pkidMulta = $id");
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

                <h2> Modificar Multa</h2>
                <hr>
                <form action="../controller/editarMulta1.php" method="post">


                    <!-- Inmueble -->
                        <?php
                        include ("../controller/editarMulta1.php");
                        while ($datos=$sql->fetch_object()){?>
                                            <input type="hidden" name="id" value="<?=$_GET["pkidMulta"] ?>"> 
                                            <label for="numeroInmueble" class="form-label" style="margin-top: 15px; margin-bottom: 15px; font-weight: 700; color:#23518C">Numero Inmueble</label>
                                            <input type="tel" class="form-control" name="ninmMulta" aria-describedby="numeor del inmueble con la multa" maxlength="3" placeholder="numero Inmueble..." value="<?=$datos-> ninmMulta ?>">
                                            <!-- Tipo de Multa -->

                                            <label for="tipoMulta" style="margin-top: 15px; margin-bottom: 10px; font-weight: 700; color:#23518C">Tipo de multa</label>
                                            <input type="text" name="tipoMulta" value="<?=$datos->tipoMulta ?>"><br>
                                            
                                            <!-- Fecha Multa -->

                                            <label for="fechaMultaPago" class="form-label" style="margin-top: 15px; margin-bottom: 15px; font-weight: 700; color:#23518C" >Fecha de multa</label>
                                            <input type="date" class="form-control" name="fecMulta" aria-describedby="fecha_de_asignacion_Multa" value="<?=$datos->fecMulta ?>">

                                            <!-- Evidencia de la Multa -->

                                                <label for="evidenciaMulta" class="form-label" style="margin-top: 15px; margin-bottom: 10px; font-weight: 700; color:#23518C">Evidencia multa</label>                                            
                                                <input class="form-control" type="file" name="evidMulta" value="<?=$datos->evidMulta ?>">

                                            <!-- Valor Multa -->

                                            
                                            <label for="valorMulta" class="form-label" style="margin-top: 15px; margin-bottom: 15px; font-weight: 700; color:#23518C;" >Valor multa</label>
                                            <input type="tel" class="form-control" name="valMulta" aria-describedby="valorMulta" maxlength="6" placeholder="valor..." value="<?=$datos->valMulta?>">

                                            <!-- Pago Multa -->

                                            <label for="PagoMulta" class="form-label" style="margin-top: 15px; margin-bottom: 15px; font-weight: 700; color:#23518C;" >Pago multa</label>
                                            <input type="date" class="form-control" name="fpagMulta" aria-describedby="fpagMulta" maxlength="6" placeholder="valor..." value="<?=$datos->fpagMulta?>">
                        <?php }
                        ?>
                    

                    <button type="submit" class="btn btn-primary mb-3" style="margin-top: 30px; background-color: #0d0d0d; color: #f2ebdc; border: 1px solid rgba(0,0,0,0.15);" name="Actualizar">Actualizar multa</button>

                </form>

                
        
            </div>
        
            <div class="col">

                <img src="0. Imagenes/15. Multas/0. Multa.png" alt="" style="border-radius: 10px; margin-left: 90px; margin-top: 20px;">

            </div>
            

        </div>

    </div>
                                              
</body>
</html>
