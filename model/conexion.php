<<<<<<< HEAD
<?php
    $servidor = '127.0.0.1';
    $user = 'root';
    $clave = '';
    $dbname = 'bd_stel';
    $puerto = '3316'; //en caso de que el puerto del xampp no sea 3306, agregar la variable
    $conn = mysqli_connect($servidor,$user,$clave,$dbname,$puerto);


        if(!$conn){
            die("Error de conexión ".mysqli_connect_error());  
        }else{
            echo "Conexión exitosa :D <br>";
        }

?>
=======
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
>>>>>>> 31159655d75b76549b1f0fa8253db63c5a99b267
