<?php
    include_once( "conexion.php");

    $cedula= isset($_GET['cedula']) ? trim($_GET['cedula']) :'';

    $query = "SELECT * FROM empleado WHERE cedula = :cedula";
    $stmt= $conn->prepare($query);
    $stmt->bindParam(":cedula", $cedula, PDO::PARAM_STR);
    $stmt->execute();
    $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

    $res=[];

    $res[]= $resultado;

    echo json_encode($res);

?>

