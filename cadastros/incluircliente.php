<?php
       ob_start();
	   include "../includes/conexao.php";
	   include "../includes/mensagens.php";
	   $nomecli=$_POST['txtnomecli'];
	   $empresa=$_POST['txtempresa'];
	   $fone=$_POST['txtfone'];
	   $email=$_POST['txtemail'];
	   $usuario=$_POST['txtusuario'];
	   $senha=$_POST['txtsenha'];
	   if($nomecli=="")
          {
			
			$mensagem=menlog(20);
			header ("Location:../index.php?mens=$mensagem");
		  }else if($empresa=="")
                 { 
				    $mensagem=menlog(21);
			        header ("Location:../index.php?mens=$mensagem");
                 }else if($fone=="")
                        {
						   $mensagem=menlog(22);
			               header ("Location:../index.php?mens=$mensagem");
                        }else if($usuario=="")
                               {
								 $mensagem=menlog(1);
			                     header ("Location:../index.php?mens=$mensagem");
                               }else if($senha=="")
                                      {
								        $mensagem=menlog(2);
			                            header ("Location:../index.php?mens=$mensagem");
                                      }else if(preg_match("/^\d+$/",$fone)!=1)
		                                     {
			                                   $mensagem=$fone;
											    $mensagem.=menlog(19);//.= significa concatenação de string
											   $mensagem.=" Telefone!";
				                               header ("Location:../index.php?mens=$mensagem");
			                                 }else {								            
													echo "vou verificar e inserir";
													 $senha1=md5($senha);
													 $sql = mysql_query ("SELECT usuario FROM usuarioscliente WHERE usuario='$usuario'") or die (mysql_error());
													 // captura o resultado da consulta e armazena na variável array $dados
													 $dados = mysql_fetch_array($sql);
													 //captura o valor do campo usuario encontrado e armazena em $user_bd
													 $user_bd = $dados['usuario'];
													 //verifica se o conteúdo de $user_bd é igual ao nome de usuario informado
													 if($user_bd == $usuario)
													  {
															$mensagem=menlog(23);
			                                                header ("Location:../index.php?mens=$mensagem");
													  }else {
															  $inclui=mysql_query("INSERT into usuarioscliente (nome,empresa,fone,email,usuario,senha)VALUES('$nomecli','$empresa','$fone','$email','$usuario','$senha1')");
															  if($inclui)
															   { 
                                                                  echo "vou incluir";																
																$mensagem=menlog(8);
			                                                     header ("Location:../index.php?mens=$mensagem");
																}else {
																		echo "não incluiu";
																		$mensagem=menlog(9);
			                                                            header ("Location:../index.php?mens=$mensagem");
																	  }													   
																   
															}
                                       }	
echo "estou na inclusão";									   
				 
			  
			?>
					