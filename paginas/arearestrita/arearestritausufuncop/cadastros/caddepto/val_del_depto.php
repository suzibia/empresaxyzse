<?php
	ob_start();
	include "../../../../../includes/mensagens.php";
	include "../../../../../includes/conexao.php";
	include"../../../../../includes/funcoesphp/funcoesbd/funcoesbd.php";
	$id_departamento=$_GET["id"];
	$integridade=integridadetabelas ("funcionarios","departamentos_id_departamento",$id_departamento);/*"funcionarios= nome da tabela, departamentos_id_departamento:campo que deve ser consultado.$id_departamento:(sigla)variável."*/
	if($integridade!="")
	{
      
	   header("Location:../../../restritaprincipal.php?mens=$integridade");	
	}else{
		
			$res=mysql_query("DELETE FROM departamentos WHERE id_departamento='$id_departamento'");
			if($res)
				{
				  $mensagem=menlog(12);
				  header ("Location:../../../restritaprincipal.php?mens=$mensagem");
				}else {
				        $mensagem=menlog(13);
				        header ("Location:../../../restritaprincipal.php?mens=$mensagem");
				      }	
		 }
?>			
