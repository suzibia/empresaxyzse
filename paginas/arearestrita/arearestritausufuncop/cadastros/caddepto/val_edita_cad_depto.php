<?php
	ob_start();
	include "../../../../../includes/mensagens.php";
	include "../../../../../includes/conexao.php";
	$sigladepto=$_GET["iddepto"];
	$nomedepto=$_POST["txtednome"];
	if($nomedepto=="")
		{
		$mensagem=menlog(6);
		header ("Location:edita_cad_depto.php?mens=$mensagem");
		}else{
			/*UPDATE:comando SQL para alterar dados de um campo na tabela.
			SET:comando que aponta ou referencia os campos da tabela que ser�o alterados.
			A vari�vel $altera receber� como resultado desta transa��o True, se altera��o efetuada com sucesso
			ou False, se problemas na altera��o.*/
			$altera=mysql_query("UPDATE departamentos SET nome='$nomedepto' WHERE id_departamento='$sigladepto'");
			if($altera)
				{
				$mensagem=menlog(10);
				header ("Location:edita_cad_depto.php?mens=$mensagem");
				}else{
					  $mensagem=menlog(11);
					  header ("Location:edita_cad_depto.php?mens=$mensagem");
					 }
					 
				
			
			}	
		
		
?>