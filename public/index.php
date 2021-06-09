<?php
	
	require("../includes/constants.php");
	require("../includes/functions.php");

	if(isset($_GET['q'])){
		$perfume=query("SELECT * FROM perfume WHERE nombre LIKE ?", "%".$_GET['q']."%");
	}else{
		$perfume=query("SELECT * FROM perfume");
	}

	require("../templates/header.php");
    require("../templates/index.php");
?>
