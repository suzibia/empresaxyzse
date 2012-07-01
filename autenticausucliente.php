<?php
ob_start();
include "includes/mensagens.php"; 
include "includes/conexao.php"; 
?>
<html>
<head>
<title>:: INFORMATIVO ONLINE - [AUTENTICAÇÃO DE USUÁRIO] ::</title>
<link href="css/layout.css" rel="stylesheet" />
</head>
<body>
     <div id="geral">
	     <div id="cabecalho"></div>
		 <div id="divisoria"></div>
         <div id="meio">
		  <div id="mensagem">
		     <center>
			  <table>
			     <tr>
			        <td><img src="imagens/warning.gif"></td>
				     <td>
	                    <?php
				     		 /*
							   Abaixo estrutura condicional
							   que verifica se a variável mens
							   contém valor, no caso, esta
							   só conterá valor se a validação
							   de sessão foi executada e se não
							   foi encontrada nenhuma sessão ativa.
							  */
							 if (isset($_GET['mens']))
			                  {
			                   $mens=$_GET['mens'];
				               echo "<center>";
			                   echo "<table>";
			                   echo "<tr>";
						       echo "<td>"."$mens"."</td>";
			                   echo "</tr>";
			                   echo "</table>";
						      }else {
					                  $usuario=$_POST['txtusucli'];
				                      $senha=$_POST['txtsenhacli'];
			                          if($usuario=="")
			                           {
				                        $mensagem=menlog(1);
				 	                    echo $mensagem;
				                       }elseif($senha=="")
						                     {
						        	           $mensagem=menlog(2);
				 	                           echo $mensagem;
							                 }else{
							                       /*
												     Se todos os campos estiverem preenchidos.
												   */
												   $senha1=md5($senha);
												   $res=mysql_query("SELECT * FROM usuarioscliente WHERE usuario ='$usuario'",$conexao);
									               //armazena em $linhas a qtde de linhas resultante da consulta
									               $linhas=mysql_num_rows($res);
									               //Armazena no array $dados os dados resultantes da consulta
									               $dados=mysql_fetch_array($res);
												   $bd_idusuario=$dados['id_usucliente'];
												   $bd_nomecli=$dados['nome'];
									               $bd_empresa=$dados['empresa'];
									               $bd_fone=$dados['fone'];
									               $bd_email=$dados['email'];
												   $bd_usr=$dados['usuario'];
												   $bd_senha=$dados['senha'];
									               if ($linhas)//se houver(rem) linha(s) resultante(s) da consulta?
				                                    {
											          if (($bd_usr==$usuario)and($bd_senha==$senha1))
											           {//se o usuário e senha informados corresponderem ao banco de dados?
	                                                     session_start();//inicia a sessão
												         $_SESSION['id_usucliente']=$bd_idusuario;
														 $_SESSION['nomecli']=$bd_nomecli;
														 $_SESSION['empresa']=$bd_empresa;
												         $_SESSION['fone']=$bd_fone;
												         $_SESSION['email']=$bd_email;
												         $_SESSION['usuario']=$bd_usr;
														 $_SESSION['senha']=$bd_senha;
														 $_SESSION['id_sessao']=session_id();//cria variável de sessão com o número de identificação desta
												         header ("Location:paginas/arearestrita/restritaprincipalusucli.php");
														 mysql_close($conexao);
											            } elseif (($bd_usr==$usuario)and($bd_senha!=$senha1))
													            {
													              
																  $mens=menlog(24);
													              echo $mens;
							   
												                }else{
															           
																	   $mens=menlog(24);
															           echo $mens;
												                     }
										            }else{
	  				 	                     
											               $mens=menlog(24);
											               echo $mens;
                                                         }
								                  }
								    }

											 
				 ?>
				 </td>
			  </tr>
           </table>	
		   <a href = 'javascript:history.back()'>Retornar</a> 
		  </div>
		 </div>
		 <div id="divisoria"></div>
         <div id="rodape">
		  <br>&copy; Desenvolvido pelos alunos do curso de programação PHP SENAC - Todos os direitos reservados.
		 </div>		 
     </div>
</body>
</html>

