<?php
	ob_start();/*Função utilizada para priorizar a passagem de dados para o servidor de sessão, cookies, header() e outras.*/
	include "includes/mensagens.php";
	include "includes/conexao.php";
?>
<html>
	<head>
		<title>::EMPRESA XYZ - [AUTENTICAÇÃO DE USUÁRIO]::</title>
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
									/*Abaixo estrutura condicional que verifica se a variável mens contém valor, no caso, esta só conterá valor se a validação de 
									sessão foi executada.*/
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
																/*A instrução abaixo está executando a instrução SQL que verifica, na tabela usuariosfunc, se o usuário
																e senha informados no formulário encontra-se cadastrado. Função mysql_query(), executa uma instrução 
																SQL em sua aplicação. A variável $res armazena o resultado desta consulta, podendo este ser 
																um conjunto vazio ou uma tabela contendo a(s) linha(s) localizadas(s).*/
															  $res=mysql_query("SELECT * from usuariosfunc WHERE usuario='$usuario' and senha='$senha1'");
																/*A função mysql_num_rows() captura o número de linhas resultantes de uma consulta SQL. No caso estamos
																capturando o número de linhas resultantes da consulta a partir da variável $res.*/
															  $linhas=mysql_num_rows($res);
															if($linhas>=1)
															{
															  $dados=mysql_fetch_array($res);
															  $id_usuario_bd=$dados["id_usuario"]."<br>";
															  $funcregbd=$dados["funcionarios_registro"];
															  $usuario_bd=$dados["usuario"]."<br>";
																//echo $senha_bd=$dados["senha"]."<br>";
															  $permissao_bd=$dados["permissao"]."<br>";
																/*Abaixo criar uma sessão com as respectivas variáveis de sessão.*/	
															session_start();//início da sessão
															//inicio expira sessão
															date_default_timezone_set("Brazil/East");
															$tempolimite=3600;
															//fim expira sessão.																								
																$_SESSION["id_usuario"]=$id_usuario_bd;
																$_SESSION["funcreg"]=$funcregbd;
																$_SESSION["usuario"]=$usuario_bd;
																$_SESSION["permissao"]=$permissao_bd;
																$_SESSION["id_sessao"]=session_id();//Cria automaticamente, uma identificação para a sessão
																/*Função PHP que permite o redicionamento automático de páginas. Está ainda permite a passagem de 
																dados por parâmetro.*/
															header("Location:paginas/arearestrita/restritaprincipal.php");
															//reinício expira
															$_SESSION['registro']=time();
															$_SESSION['limite']=$tempolimite;
															//fim expira
															mysql_close($conexao);//Fechando conexão com o banco de dados
															}else echo$mensagem=menlog(3);
															}
												}/*Fechar o else para o caso de não existir mensagem de validação.*/ 			
									?>
								</td>
							</tr>
						</table>
					</center>
					<!--A instrução abaixo é escrita para a criação de um link que permite o retorno para a página anterior, no caso a index.php,sem apagar
					os dados do formulário. Notem que estamos embutindo javascrit no html.-->
					<a href="javascript:history.back()">Retornar</a>
				</div>
			</div>
			<div id="divisoria"></div>
			<div id="rodape">
			<br/>&copy Desenvolvido pelos alunos do curso de Programação do SENAC - Todos os direitos reservados
			</div>
		</div>
	</body>
</html>
			
			
			