<?php

    require("../includes/constants.php");
    require("../includes/functions.php");

    $nombre=$_POST["nombre"];
    $tamaño=$_POST["tamaño"];
    $precio=$_POST["precio"];
    $imagen=$_POST["imagen"];
    $receta=$_POST["receta"];
    
    $inserccion=query("INSERT INTO `perfume` (`id`, `nombre`, `tamaño`, `imagen`, `precio`, `receta`) VALUES (NULL,?,?,?,?,?);",$nombre,$tamaño,$imagen,$precio,$receta);
    var_dump($inserccion);

    //echo("Guardado correctamente");
    redirect();

?>