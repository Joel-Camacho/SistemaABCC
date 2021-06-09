<?php
	require("../includes/constants.php");
	require("../includes/functions.php");

	$y=query("SELECT * FROM perfume WHERE id=?", $_GET['id_perfume'])[0];

	require("../templates/header.php");
	require("../templates/perfume.php");
?>
