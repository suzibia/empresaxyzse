<?php
	ob_start();
	session_start();
	include "../../includes/mensagens.php";
	include "../../includes/valida_sessao.php";	
	include "../../includes/conexao.php";
?>
<html>
	<head>
		
		<title>::Página principal - ÁREA RESTRITA::</title>
		<link href="../../css/layout.css" rel="stylesheet">
		<script language="javascript" src="../../arquivojs/arquivo.js"></script>
		<script language="javascript" type="text/javascript">
			function valida_cadepto(form)
			{
				if(form.elements[0].value=="") {
					alert("Preencha o campo Sigla!");
					form.elements[0].focus();
					return false;
				} else if(form.elements[1].value=="") {
					alert("Preencha o campo Nome do departamento!");
					form.elements[1].focus();
					return false;
				} else return true;
			}
			function valida_cadfunc(form)
			{
				if(form.elements[0].value=="")
				{
					alert("Preencha o campo Registro!");
					form.elements[0].focus();
					return false;
				}
				else if(form.elements[1].value=="")
				{
					alert("Preencha o campo Departamento!");
					form.elements[1].focus();
					return false;
				}
				else if(form.elements[3].value=="")
				{
					alert("Preencha o campo nome!");
					form.elements[2].focus();
					return false;
				} else return true;
			}		
		</script>
	</head>
	<body>
	<div id="geral">
		<div id="cabecalho"></div>
		<div id="divisoria">
			<div id="saida"><a href="../../logout.php">Sair</a></div>
		</div><!--fechar div divisoria-->	
			<div id="esquerdares">
				<?php
					//inicio expira sessão
					/*$registro=$_SESSION['registro'];
					$limite=$_SESSION['limite'];
					if($registro)
					{
					$segundos=time()-$registro;
					}
					if($segundos>$limite)
					{
					session_destroy();
					die("Sua sessão expirou!");
					}
					else{
					$_SESSION['registro']=time();
					}*/				
				//fim expira sessão
					$funcreg=$_SESSION["funcreg"];
					$res=mysql_query("Select nomefunc from funcionarios where registro='$funcreg'");
					$dados=mysql_fetch_array($res);
					$nomefuncionario=$dados["nomefunc"];
					echo "<center>"."<img src='../../imagens/usuario.png'>"."<br/>";
					echo $nomefuncionario."<br/>"."</center>";
					echo "<br/>"."<br/>";
				?>
				&nbsp;&nbsp;&nbsp;&nbsp;<img src="../../imagens/alias_path.gif">Menu
				</br></br>
				<div id="NavbarMenu">
					<div id="NavbarMenuleft">
					<div id="nav">
						<?php
							if($_SESSION["permissao"]==0)
								{
								echo "Aguarde!Não perdes por esperar";
								}elseif($_SESSION["permissao"]==1)
									{
									?>
									<!-- O evento onclick chama a função animacao, localizada no arquivo.js, passando para a mesma o nome do menu-->
									<div class="menu" onclick="animacao('cad')">Cadastros</div>
										<div style="display:none;" id="cad">
											<div class="submenu"><a href="restritaprincipal.php?pasta=arearestritausufuncop/cadastros/caddepto&arq=caddepto&tparq=php">Departamentos</a></div>
											<div class="submenu"><a href="restritaprincipal.php?pasta=arearestritausufuncop/cadastros/cadfunc&arq=cadfunc&tparq=php">Funcionários</a></div>
										</div>
									<?php
									}elseif($_SESSION["permissao"]==2)
									{
									echo "Aguarde! Não perdes, também, por esperar";
									}									
							?>	
					</div><!--fechar a div nav-->
					</div><!--fechar a div:NavbarMenuleft-->
				</div><!--Fechar a div: NavbarMenu.-->
			</div><!--fechar div esquerdares-->	
			<div id="meioarear">
				<?php
					if(isset($_GET["mens"]))
					{
						$mens=$_GET["mens"];
						echo"<div id='mensagem'>
								<center>
									<table>
										<tr>
											<td>"."<img src='../../imagens/warning.gif'>"."</td>
											<td>"."$mens"."</td>
										</tr>
									</table>
								</center>
								<a href='restritaprincipal.php?pasta=arearestritausufuncop/cadastros/caddepto&arq=caddepto&tparq=php'>Retornar</a>
							</div>";
					}else{
							if(isset($_GET["pasta"])&&isset($_GET["arq"])&&isset($_GET["tparq"]))//&&=operador lógico (E)
							{
							//se as variáveis de parâmetros estiverem setadas (contiverem valores).
							$pasta=$_GET["pasta"];
							$arq=$_GET["arq"];
							$tparq=$_GET["tparq"];
								if($tparq=="html")
								{
								$extensao="html";
								}else{
									$extensao="php";
									}
							include"$pasta/$arq".".$extensao";
							}
						}	
				?>					
			</div><!--fechar div meioarear-->
		<div id="divisoria">
		</div><!--fechar segunda div divisoria-->
		<div id="rodape">
			<br/>&copy Desenvolvido pelos alunos do curso de Programação do SENAC - Todos os direitos reservados
		</div><!--fechar div rodape-->
	</div><!--fechar div geral-->	
	</body>
</html>
		
