<?php
	session_start();//Iniciar sessгo
	$_SESSION=array();//Limpando o array SESSION
	session_destroy();//Funзгo que destrуi uma sessгo
	header ("Location:index.php");
?>