<html>
	<head>
		<title>::EMPRESA XYZ - Principal::</title>
		<link href="css/layout.css" rel="stylesheet">
		<script language="javascript">
			function validaformlogin()
			{
				if(document.forms[0].elements[0].value=="")
				{
					alert("Preencha o campo usuário!");
					document.forms[0].elements[0].focus();
					return false;
				}else
					if(document.forms[0].elements[1].value=="")
					{
						alert("Preencha o campo Senha!");
						document.forms[0].elements[1].focus();
						return false;
					}else
						return true;
			}
		</script>
	</head>
	<body>
		<div id="geral">
			<div id="cabecalho">
			</div>
			<div id="divisoria">
			<table align="center">
				<form name="frmlogin" method="post" action="autenticausufunc.php" onsubmit="return validaformlogin(this)">
					<tr>
						<td><font color="#D3D3D3">Usuário:<input name="txtusuario" type="text" size="25" maxlength="25"></font></td>
						<td><font color="#D3D3D3">Senha:<input name="txtsenha" type="password" size="15" maxlength="20"></font></td>
						<td><input type="submit" name="btnenvia" value="OK"></td>
					</tr>
				</form>
			</table>
			</div>
			<div id="esquerda">
			<div class="menu_links"><img src="imagens/alias_path.gif"><a href="index.php?pasta=paginas&arq=quemsomos&tparq=html">Quem somos</a></div><br/>
			<div class="menu_links"><img src="imagens/alias_path.gif"><a href="index.php?pasta=paginas&arq=oqueoferecemos&tparq=html">O que oferecemos</a></div><br/>
			<div class="menu_links"><img src="imagens/alias_path.gif"><a href="index.php?pasta=paginas&arq=agendamento&tparq=php">Agendamento</a></div><br/>
			<div class="menu_links"><img src="imagens/alias_path.gif"><a href="">Entre em contato</a></div><br/>
			<img src="imagens/image.gif"><a href="index.php?pasta=cadastros&arq=cadastrouscliente&tparq=html">Cadastre-se &nbsp &nbsp &nbsp </a><br/>
			</div>
			<div id="meio">
			<?php 
		/*Aqui estaremos carregando, dinamicamente, as páginas de nossa aplicação.*/
				if(isset($_GET["mens"]))
					{
						$mens=$_GET["mens"];
						echo"<div id='mensagem'>
								<center>
									<table>
										<tr>
											<td>"."<img src='imagens/warning.gif'>"."</td>
											<td>"."$mens"."</td>
										</tr>
									</table>
								</center>
								<a href='javascript:history.back()'>Retornar</a>
							</div>";
					}else {
							
							if(isset($_GET["pasta"])&& isset($_GET["arq"])&& isset($_GET["tparq"]))
							{
						
							 $pasta=$_GET["pasta"];
							 $arq=$_GET["arq"];
							 $tparq=$_GET["tparq"];
							 if($tparq=="html")
							{
								$extensao="html";
							}else $extensao="php";
						include "$pasta/$arq."."$extensao";
							}else 
								{
								include"paginas/entrada.html";	
								}
						  }
			?>
			</div>
			<div id="divisoria">
			</div>
			<div id="rodape">
				<br/>&copy Desenvolvido pelos alunos do curso de Programação do SENAC - Todos os direitos reservados
			</div>
		</div><!--fechar a div geral-->
	</body>
</html>	