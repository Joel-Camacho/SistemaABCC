<?php

    require("../includes/constants.php");
    require("../includes/functions.php");

    $elimination=query("DELETE FROM `perfume` WHERE `id`=?",$_GET["id"]);

    //echo("Eliminado correctamente");
    redirect();

?>