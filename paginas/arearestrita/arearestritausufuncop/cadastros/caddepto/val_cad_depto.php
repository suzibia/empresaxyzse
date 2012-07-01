<?php
	ob_start();
	include"../../../../../includes/mensagens.php";
	include"../../../../../includes/conexao.php";
	$sigladepto=strtoupper($_POST["txtsigla"]);//Função PHP que converte uma string (cadeia de caracteres)em maiúsculo.str=string/upper=maiúsculo/to=para
	$nomedepto=$_POST["txtnome"];
	if($sigladepto=="")
	{
		$mensagem=menlog(5);
		header("Location:../../../restritaprincipal.php?mens=$mensagem");
	} elseif($nomedepto=="")
	{
		$mensagem=menlog(6);
		header("Location:../../../restritaprincipal.php?mens=$mensagem");
	}else{
		/*Verificando na tabela 'departamentos' se existe a sigla digitada*/
			$sql=mysql_query("SELECT id_departamento FROM departamentos WHERE id_departamento='$sigladepto'")or die (mysql_error());
			$linha=mysql_num_rows($sql);
			if($linha>=1)
				{
				$mensagem=menlog(7);
				header("Location:../../../restritaprincipal.php?mens=$mensagem");
				}else {
					//INSERT:comando SQL para inserir dados em uma tabela no Banco de dados.INTO:'em' ou 'na'.
						$inclui=mysql_query("INSERT into departamentos(id_departamento,nome)VALUES('$sigladepto','$nomedepto')") ;
					/*Quando existe variáveis boleanas é possível usar:if($inclui) é igual: if($inclui==true)/ if(!$inclui) é igual: if($inclui==false)*/
						if($inclui)
							{
							$mensagem=menlog(8);
							header("Location:../../../restritaprincipal.php?mens=$mensagem");
							}else{
									$mensagem=menlog(9);
									header("Location:../../../restritaprincipal.php?mens=$mensagem");
								}
					}
	}
?>
			
	