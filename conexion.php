<?php
    //configuracion de acceso a la base de datos

    $host= "localhost";
    $dbname="horasextra";
    $dbuser="root";

    $dns = "mysql:host=$host;port=3306;dbname=$dbname;user=$dbuser";

    try {
       $conn = new PDO($dns);
       if ($conn) {
         //echo "Conexion existosa";
       }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

?>