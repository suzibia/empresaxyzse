<?php
  ob_start();
  include "../../../../../includes/mensagens.php";//inclui este arquivo para acessar as mensagens
  include "../../../../../includes/conexao.php";//inclui este arquivo para fazer a conex�o com o banco de dados
  $registro=$_POST["txtregistro"];
  $nomedepto=$_POST["txtdepto"];
  $sigladepto=strtoupper($_POST["txtiddepartamento"]);
  $nomefunc=$_POST["txtnome"];
  $fone=$_POST["txtfone"];
  $email=$_POST["txtemail"];
  if($registro=="")
   {
     $mensagem=menlog(14);
     header ("Location:../../../restritaprincipal.php?mens=$mensagem");
   }elseif($nomedepto=="")
	     {
	         $mensagem=menlog(15);
		     header ("Location:../../../restritaprincipal.php?mens=$mensagem");
		 }elseif($nomefunc=="")
		       {
			      $mensagem=menlog(16);
		          header ("Location:../../../restritaprincipal.php?mens=$mensagem");
			   }else{
			         $sql = mysql_query("SELECT * FROM funcionarios WHERE registro='$registro'")or die(  mysql_error());
                     //captura o resultado da consulta e armazena na vari�vel array $dados
                     $dados=mysql_fetch_array($sql);
                     //captura o valor do campo registro encontrado e armazena em $registro_bd
                     $registro_bd=$dados['registro'];
                     //verifica se o conte�do de $registro_bd � igual ao n�mero do registro do funcion�rio informado pelo operador
                     if ($registro_bd == $registro)
                      {
                       $mensagem=menlog(17); //Funcion�rio j� cadastrado
				       header ("Location:../../../restritaprincipal.php?mens=$mensagem");
				      }else{
                            $inclui=mysql_query("INSERT into funcionarios (registro,departamentos_id_departamento,nomefunc,fonecontato,email)VALUES('$registro','$sigladepto','$nomefunc','$fone','$email')");
						    if($inclui)
						     { 
						      $mensagem=menlog(8);
			                  header ("Location:../../../restritaprincipal.php?mens=$mensagem");
						     }else {
								     $mensagem=menlog(9);
			                         header ("Location:../../../restritaprincipal.php?mens=$mensagem");
							       }
	
                      }
	          }
	?>
