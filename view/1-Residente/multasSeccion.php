<!doctype html>
<html lang="en">
  
    <head>

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
    
        <!-- Menu lateral -->

        <nav class="navbar navbar-expand-lg" style="background-color: #23518C;">

            <div class="container-fluid">

                <a class="navbar-brand" href="paginaInicioModulos.html">
                    <img src="0. Imagenes/0. Logos/3. logo sin  nombre blanco.png" alt="Logo" width="60" height="65" class="d-inline-block align-text-top">
                </a>

                <button class="navbar-toggler btn btn-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">

                    <span class="navbar-toggler-icon"></span>

                </button>

                <div class="collapse navbar-collapse" id="navbarNavDropdown">

                    <ul class="navbar-nav">

                        <li class="nav-item fs-3">
                            <a class="nav-link active text-white" aria-current="page" href="paginaInicioModulos.html">STEL</a>
                        </li>

                        <li class="nav-item dropdown align-self-center">

                            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Usuarios <i class="bi bi-people-fill"></i></a>

                            <ul class="dropdown-menu">

                                <li><a class="dropdown-item" href="consultarUsu.html">Consultar Usuario</a></li>
                                <li><a class="dropdown-item" href="consultarInmueble.html">Consultar Inmueble</a></li>


                            </ul>

                        <li class="nav-item dropdown align-self-center">

                            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Adminstración <i class="bi bi-house"></i></a>

                            <ul class="dropdown-menu">

                                <li><a class="dropdown-item" href="administracionDocumentacion.html">Documentación</a></li>
                                <li><a class="dropdown-item" href="multasSeccion.php">Multas</a></li>
                                <li><a class="dropdown-item" href="carteraSeccion.html">Cartera</a></li>
                                <li><a class="dropdown-item" href="visitantesSeccion.html">Vistantes</a></li>

                            </ul>

                        <li class="nav-item dropdown align-self-center">
                                <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Alquiler Parqueaderos <i class="bi bi-car-front-fill"></i></a>

                            <ul class="dropdown-menu">

                                <li><a class="dropdown-item" href="solicitudesAlquiler.html">Solicitudes alquiler</a></li>
                                <li><a class="dropdown-item" href="cuposParqueadero.html">Cupos parqueadero</a></li>
                                <li><a class="dropdown-item" href="movimientoVehiculo.html">Entrada y Salida</a></li>
                                <li><a class="dropdown-item" href="configuracionAlquiler.html">Configuración</a></li>

                             </ul>

                        </li>
                
                        <li class="nav-item dropdown align-self-center">
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Comunicación <i class="bi bi-broadcast"></i></a>

                            <ul class="dropdown-menu">

                                <li><a class="dropdown-item" href="correspondencia.html">Correspondencia</a></li>
                                <li><a class="dropdown-item" href="novedades.html">Novedades</a></li>

                            </ul>

                        </li>

                        <li class="nav-item align-self-center">
                            <a class="nav-link active text-white d-flex justify-content-end" aria-current="page" href="index.html">Salir</a>
                        </li>
                    
                    </ul>


                </div>

            </div>

        </nav>

        <script>
            function eliminar(){
                var respuesta=confirm("Estas seguro que deseas eliminar?");
                return respuesta;
            }
        </script>

        <!-- Crear formulario -->

                <!-- Explicacion Usuarios -->

                <div class="container d-text-center pt-4 ">

            
                    <div class="row justify-content-center">
                      
                        <div class="col">

                            <h2> Registro Multas</h2>
                            <hr>
        
                            <form action="../controller/insertarMulta.php" method="post">

                                <!-- Inmueble -->

                                <label for="numeroInmueble" class="form-label" style="margin-top: 15px; margin-bottom: 15px; font-weight: 700; color:#23518C;" >Numero Inmueble</label>
                                <input type="tel" class="form-control" name="ninmMulta" aria-describedby="numeor del inmueble con la multa" maxlength="3" placeholder="numero Inmueble...">
                                <!-- Tipo de Multa -->

                                <label for="tipoMulta" style="margin-top: 15px; margin-bottom: 10px; font-weight: 700; color:#23518C">Tipo de multa</label>
                                <select name=tipoMulta class="form-select" aria-label="Tipo de multa">
                                    <option>tipo de multa...</option>
                                    <option> Mascota sin correa</option>
                                    <option>Ruido Excesivo</option>
                                    <option>No recoger excrementos</option>
                                    <option>Estacionamiento indebido</option>
                                    <option>Uso indebido de areas comunes</option>
                                    <option>Exceso de velocidad</option>
                                    <option>Inasistencia a reunion</option>
                                    <option>Discusión con vecino</option>
                                    <option>Mascota sin bozal</option>
                                    <option>Golpe a vehiculo</option>
                                </select>

                                <!-- Fecha Multa -->

                                <label for="fechaMultaPago" class="form-label" style="margin-top: 15px; margin-bottom: 15px; font-weight: 700; color:#23518C" >Fecha de multa</label>
                                <input type="date" class="form-control" name="fecMulta" aria-describedby="fecha_de_asignacion_Multa">

                                <!-- Evidencia de la Multa -->

                                <label for="evidenciaMulta" class="form-label" style="margin-top: 15px; margin-bottom: 10px; font-weight: 700; color:#23518C">Evidencia multa</label>                                            
                                <input class="form-control" type="file" name="evidMulta">

                                <!-- Valor Multa -->

                                <label for="valorMulta" class="form-label" style="margin-top: 15px; margin-bottom: 15px; font-weight: 700; color:#23518C;" >Valor multa</label>
                                <input type="tel" class="form-control" name="valMulta" aria-describedby="valorMulta" maxlength="6" placeholder="valor...">

                                <!-- Pago Multa -->

                                <label for="PagoMulta" class="form-label" style="margin-top: 15px; margin-bottom: 15px; font-weight: 700; color:#23518C;" >Pago multa</label>
                                <input type="date" class="form-control" name="fpagMulta" aria-describedby="fpagMulta" maxlength="6" placeholder="valor...">

                                <button type="submit" class="btn btn-primary mb-3" style="margin-top: 30px; background-color: #0d0d0d; color: #f2ebdc; border: 1px solid rgba(0,0,0,0.15);" name="registrarMulta">Registrar multa</button>
                                
                            </form>
                            
                            <!-- Boton descargar archivo -->
                            <button type="submit" class="btn btn-primary mb-3" style="margin-top: 30px; background-color: #0d0d0d; color: #f2ebdc; border: 1px solid rgba(0,0,0,0.15);" onclick="window.location.href='../view/informeMulta.php'">Descargar</button>
                            
                      
                        </div>
                      
                        <div class="col">

                            <img src="0. Imagenes/15. Multas/0. Multa.png" alt="" style="border-radius: 10px; margin-left: 90px; margin-top: 20px;">

                        </div>
                        
                    
                    </div>
                  
                </div>

        <hr style="margin-left: 115px; margin-right: 115px;">

        <div style="margin-left: 115px; margin-right: 115px; margin-top: 20px; margin-bottom: 25px;">

            <table class="table table-striped" style="width:100%;">
                <thead>
                <tr>
            <th scope="col">pkidMulta</th>
            <th scope="col">inmueble</th>
            <th scope="col">tipoMulta</th>
            <th scope="col">fecha</th>
            <th scope="col">evidencia</th>
            <th scope="col">valor</th>
            <th scope="col">pago</th>
            <th scope="col"></th>
            </tr>
                </thead>
                <tbody>
            <?php
            include "../model/conexion.php";
            include "../controller/eliminarMulta.php";
            //include "../view/editarMulta.php";    
            $sql=$conn->query("SELECT * FROM tbl_multa");
            while ($datos=$sql->fetch_object()){ ?>
                <div class="col-4 m-5 col-md-9 col-sm-5">
                    <tr>
                        <td><?= $datos->pkidMulta?></td>
                        <td><?= $datos->ninmMulta?></td>
                        <td><?= $datos->tipoMulta?></td>
                        <td><?= $datos->fecMulta?></td>
                        <td><?= $datos->evidMulta?></td>
                        <td><?= $datos->valMulta?></td>
                        <td><?= $datos->fpagMulta?></td>
                        <td>
                            <button><a href="../view/editarMulta.php?pkidMulta=<?=$datos->pkidMulta ?>" class="btn btn-outline-primary "Primary><i class="bi bi-pencil-fill" name="Actualizar"></i></a></button>
                            <button><a  onclick="return eliminar()"href="../view/multasSeccion.php?pkidMulta=<?=$datos->pkidMulta ?>" class="btn btn-outline-danger "Danger><i class="bi bi-trash-fill"></i></a></button>
                        </td>
                    </tr>
                </div>    
            <?php }
            ?>
        </tbody>
            </table>

        </div>

        

    </body>
    
</html>