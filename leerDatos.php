<?php
    $servername="localhost";
    $username="root";
    $password="";
    $db="album";

    try{
        $conexion = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
	    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT * FROM `fotos`";
        
        $sentencia=$conexion->prepare($sql);
        $sentencia->execute();

        $resultado=$sentencia->fetchAll();

        //print_r($resultado);

        foreach($resultado as $foto){
            echo $foto['nombre']."<br>";
        }

	    echo "Conexión exitosa";
    }catch(PDOException $e){
        echo "Connection failed: " . $e->getMessage();
    }
?>