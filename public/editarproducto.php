<?php
    require("../includes/functions.php");
    require("../includes/constants.php");

    $y=query("SELECT * FROM perfume WHERE id=?", $_GET['id'])[0];
    
    require("../templates/header.php");
    require("../templates/formeditar.php");
?>