<?php
    $servidor = '127.0.0.1';
        $user = 'root';
        $clave = '';
        $dbname = 'bd_stel2';
        $puerto =  '3316';
        $conn = mysqli_connect($servidor,$user,$clave,$dbname,$puerto);


        if(!$conn){
            die("Error de conexión ".mysqli_connect_error());  
        }else{
            echo "Conexión exitosa :D <br>";
        }

?>
