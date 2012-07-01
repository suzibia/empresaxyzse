<?php
	include "config.php";
	/*função PHP que estabelece a conexão do seu programa com o banco de dados. Deve enviar com parâmetros, o nome do servidor, o nome de usuário e a senha de acesso para
	este servidor. Importante, esta função retorna um valor booleano true,caso a conexão tenha sido bem sucedida, e False caso a conexão tenha sido mal sucedida.*/
	$conexao=mysql_connect($servidor,$usubd,$senhabd);
	/*A verificação abaixo utiliza o operador !(not)- operador relacional de negação, a fim de  verificar se a conexão não foi bem sucedida.*/
	if(!$conexao)
		{
		die('Não foi possível a conexão com o banco:'.mysql_error());
		/*A função die () aborta uma ação realizada no banco de dados, no caso a conexão, permitindo que enviemos uma mensagem ai programa sobre o problema ocorrido.
		A função mysql_error()captura o erro ocorrido na transação com o banco de dados.*/
		}
		$db_selected=mysql_select_db($banco);
		/*A função mysql_select_db() serve oara selecionar (localizar) uma base de dados (Banco de Dados). Importante, caso o Banco de Dados tenha sido encontrado, o 
		valor true retornado da função, caso contrário, o valor false é retornado da função. Notem que devemos passar um parâmetro para a função (Nome do banco de 
		dados) que desejamos trabalhar*/
	if(!$db_selected)
	/*Verificando se o banco de dados não foi localizado.*/
		{
		die('Não foi possível localizar o Banco de Dados:'.mysql_error());
		}
?>

	