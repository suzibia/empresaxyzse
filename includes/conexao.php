<?php
	include "config.php";
	/*fun��o PHP que estabelece a conex�o do seu programa com o banco de dados. Deve enviar com par�metros, o nome do servidor, o nome de usu�rio e a senha de acesso para
	este servidor. Importante, esta fun��o retorna um valor booleano true,caso a conex�o tenha sido bem sucedida, e False caso a conex�o tenha sido mal sucedida.*/
	$conexao=mysql_connect($servidor,$usubd,$senhabd);
	/*A verifica��o abaixo utiliza o operador !(not)- operador relacional de nega��o, a fim de  verificar se a conex�o n�o foi bem sucedida.*/
	if(!$conexao)
		{
		die('N�o foi poss�vel a conex�o com o banco:'.mysql_error());
		/*A fun��o die () aborta uma a��o realizada no banco de dados, no caso a conex�o, permitindo que enviemos uma mensagem ai programa sobre o problema ocorrido.
		A fun��o mysql_error()captura o erro ocorrido na transa��o com o banco de dados.*/
		}
		$db_selected=mysql_select_db($banco);
		/*A fun��o mysql_select_db() serve oara selecionar (localizar) uma base de dados (Banco de Dados). Importante, caso o Banco de Dados tenha sido encontrado, o 
		valor true retornado da fun��o, caso contr�rio, o valor false � retornado da fun��o. Notem que devemos passar um par�metro para a fun��o (Nome do banco de 
		dados) que desejamos trabalhar*/
	if(!$db_selected)
	/*Verificando se o banco de dados n�o foi localizado.*/
		{
		die('N�o foi poss�vel localizar o Banco de Dados:'.mysql_error());
		}
?>

	