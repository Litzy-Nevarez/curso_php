<?php

    session_start();

    $_SESSION["usuario"]="Litzy";
    $_SESSION["status"]="logueado";

    echo "Sesion iniciada"."<br>";

    echo "Usuario: ".$_SESSION["usuario"]." estatus: ".$_SESSION["status"];


?>