<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
    
    <!--<div class="container d-text-center pt-4">-->

    <h2 class="text-center p-3"> Listar Novedades</h2>      
    <div class="row justify-content-center">

<div class="col-4 p-3 col-md-9 col-sm-5">
    <table class="table table-hover">
        <thead class="table-light">
            <tr>
            <th scope="col">pkidNovedades</th>
            <th scope="col">Remitente</th>
            <th scope="col">tipoNovedad</th>
            <th scope="col">Asunto</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Documento</th>
            <th scope="col">Fecha</th>
            <th scope="col">Respuesta</th>
            <th scope="col">Estado</th>
            <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "../model/conexion.php";
            $sql=$conn->query("SELECT * FROM tbl_novedades");
            while ($datos=$sql->fetch_object()){ ?>
                <div class="col-4 m-5 col-md-9 col-sm-5">
                    <tr>
                        <td><?= $datos->pkidNovedades?></td>
                        <td><?= $datos->remNovedades?></td>
                        <td><?= $datos->TipoNovedad?></td>
                        <td><?= $datos->asuntoNovedades?></td>
                        <td><?= $datos->descNovedades?></td>
                        <td><?= $datos->docNovedades?></td>
                        <td><?= $datos->fecNovedades?></td>
                        <td><?= $datos->resNovedades?></td>
                        <td><?= $datos->estNovedades?></td>    
                        <td>
                            <button><a href="../controller/editarNovedad.php" class="btn btn-outline-primary "Primary><i class="bi bi-pencil-fill"></i></a></button>
                            <button><a href="../controller/eliminarNovedad.php" class="btn btn-outline-danger "Danger><i class="bi bi-trash-fill"></i></a></button>
                        </td>
                    </tr>
                </div>    
            <?php }
            ?>
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>

