<?php
	ob_start();
	//session_start();
	if(!isset($_SESSION["id_sessao"]))
		{
		unset($_SESSION["id_sessao"]);
		$mensa=menlog(4);
		header("location:../../autenticausufunc.php?mens=$mensa");/*variável de parâmetro(elemento que permite levar para outro lugar/passar dados)= mens.
																	pode ser link ou por direcionamento.*/	
		exit;//Comando que encerra a rotina do script e retira o usuário da página que tentou acessar.
		}else 
		if($_SESSION["id_sessao"]!=session_id())//!=>>operador relacional diferente(==igual)(!=diferente)(!não)
			{
			unset($_SESSION["id_sessao"]);
			$mensa=menlog(4);
			header("location:../../autenticausufunc.php?mens=$mensa");
			exit;
			}
?>