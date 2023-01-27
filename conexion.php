<?php
    $servername="localhost";
    $username="root";
    $password="";
    $db="album";

    try{
        $conexion = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
	    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "INSERT INTO fotos (nombre,ruta) VALUES ('Jugando con la programacion', 'foto.jpg')";
        
        $conexion->exec($sql);

	    echo "Conexión exitosa";
    }catch(PDOException $e){
        echo "Connection failed: " . $e->getMessage();
    }
?>