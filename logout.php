<?php
	session_start();//Iniciar sess�o
	$_SESSION=array();//Limpando o array SESSION
	session_destroy();//Fun��o que destr�i uma sess�o
	header ("Location:index.php");
?>