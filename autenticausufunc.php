<?php
	ob_start();/*Fun��o utilizada para priorizar a passagem de dados para o servidor de sess�o, cookies, header() e outras.*/
	include "includes/mensagens.php";
	include "includes/conexao.php";
?>
<html>
	<head>
		<title>::EMPRESA XYZ - [AUTENTICA��O DE USU�RIO]::</title>
		<link href="css/layout.css" rel="stylesheet">
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
									/*Abaixo estrutura condicional que verifica se a vari�vel mens cont�m valor, no caso, esta s� conter� valor se a valida��o de 
									sess�o foi executada.*/
									if(isset($_GET["mens"]))
										{
										$mens=$_GET["mens"];
										echo $mens;
										}else 	{									
										        $usuario=$_POST["txtusuario"];
										        $senha=$_POST["txtsenha"];
												if($usuario=="")
											     {
											       echo$mensagem=menlog(1);
											     }elseif($senha=="")
												      {
												        echo$mensagem=menlog(2);
												      }else {
													          $senha1=md5($senha);
																/*A instru��o abaixo est� executando a instru��o SQL que verifica, na tabela usuariosfunc, se o usu�rio
																e senha informados no formul�rio encontra-se cadastrado. Fun��o mysql_query(), executa uma instru��o 
																SQL em sua aplica��o. A vari�vel $res armazena o resultado desta consulta, podendo este ser 
																um conjunto vazio ou uma tabela contendo a(s) linha(s) localizadas(s).*/
															  $res=mysql_query("SELECT * from usuariosfunc WHERE usuario='$usuario' and senha='$senha1'");
																/*A fun��o mysql_num_rows() captura o n�mero de linhas resultantes de uma consulta SQL. No caso estamos
																capturando o n�mero de linhas resultantes da consulta a partir da vari�vel $res.*/
															  $linhas=mysql_num_rows($res);
															if($linhas>=1)
															{
															  $dados=mysql_fetch_array($res);
															  $id_usuario_bd=$dados["id_usuario"]."<br>";
															  $funcregbd=$dados["funcionarios_registro"];
															  $usuario_bd=$dados["usuario"]."<br>";
																//echo $senha_bd=$dados["senha"]."<br>";
															  $permissao_bd=$dados["permissao"]."<br>";
																/*Abaixo criar uma sess�o com as respectivas vari�veis de sess�o.*/	
															session_start();//in�cio da sess�o
															//inicio expira sess�o
															date_default_timezone_set("Brazil/East");
															$tempolimite=3600;
															//fim expira sess�o.																								
																$_SESSION["id_usuario"]=$id_usuario_bd;
																$_SESSION["funcreg"]=$funcregbd;
																$_SESSION["usuario"]=$usuario_bd;
																$_SESSION["permissao"]=$permissao_bd;
																$_SESSION["id_sessao"]=session_id();//Cria automaticamente, uma identifica��o para a sess�o
																/*Fun��o PHP que permite o redicionamento autom�tico de p�ginas. Est� ainda permite a passagem de 
																dados por par�metro.*/
															header("Location:paginas/arearestrita/restritaprincipal.php");
															//rein�cio expira
															$_SESSION['registro']=time();
															$_SESSION['limite']=$tempolimite;
															//fim expira
															mysql_close($conexao);//Fechando conex�o com o banco de dados
															}else echo$mensagem=menlog(3);
															}
												}/*Fechar o else para o caso de n�o existir mensagem de valida��o.*/ 			
									?>
								</td>
							</tr>
						</table>
					</center>
					<!--A instru��o abaixo � escrita para a cria��o de um link que permite o retorno para a p�gina anterior, no caso a index.php,sem apagar
					os dados do formul�rio. Notem que estamos embutindo javascrit no html.-->
					<a href="javascript:history.back()">Retornar</a>
				</div>
			</div>
			<div id="divisoria"></div>
			<div id="rodape">
			<br/>&copy Desenvolvido pelos alunos do curso de Programa��o do SENAC - Todos os direitos reservados
			</div>
		</div>
	</body>
</html>
			
			
			