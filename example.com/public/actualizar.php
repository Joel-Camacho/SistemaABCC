<?php

    require("../includes/constants.php");
    require("../includes/functions.php");

    $nombre=$_POST["nombre"];
    $tamaño=$_POST["tamaño"];
    $precio=$_POST["precio"];
    $imagen=$_POST["imagen"];
    $receta=$_POST["receta"];

    $inserccion=query("UPDATE `perfume` SET `nombre` = ?, `tamaño` = ?, `imagen` = ?, `precio` = ?, `receta` = ? WHERE `perfume`.`id` = ?;",$nombre,$tamaño,$imagen,$precio,$receta,$_GET["id"]);
    
    redirect();

?>