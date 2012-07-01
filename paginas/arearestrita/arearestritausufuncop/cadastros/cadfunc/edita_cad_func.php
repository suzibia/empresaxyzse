<?php
include "../../../../../includes/mensagens.php"; 
?>
<html>
<head>
<title>:: INFORMATIVO ONLINE - [AUTENTICAÇÃO DE USUÁRIO] ::</title>
<link href="../../../../../css/layout.css" rel="stylesheet" />
<script language="javascript" src="../../../../../arquivojs/arquivo.js"> </script>
<script language="javascript" type="text/javascript">
	function edita_cad_func(form)
	{
		if(form.elements[2].value=="")
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
		 <div id="divisoria"></div>
         <div id="meio">
		           <?php
				     		 
							 if (isset($_GET['mens']))
			                  {
			                   echo "<div id='mensagem'>";
							   $mens=$_GET['mens'];
				               echo "<center>
			                   			<table>
			                   				<tr>
							   					<td><img src='../../../../../imagens/warning.gif'></td>
						       					<td>".$mens."</td>
			                   				</tr>
			                   			</table>
							   		</center>
							  		</div>";
						      }else {
					                  $registro=$_GET['registro'];
				                      $nomedepto=$_GET['nomedepto'];
				                      $nomefunc=$_GET['nomefunc'];
				                      $telefone=$_GET['telefone'];
				                      $email=$_GET['email'];
				                      $sigla=$_GET['sigla'];
			                          echo "<center> <br /><br />";
									  echo "<strong><font size='4'>:: EDITAR FUNCIONÁRIOS ::</font></strong>";
									  echo "<br /><br /><br />";
							?>
							<table>
								<form name='frmeditafunc' method='post' action = 'val_edita_cad_func.php?registro=<?php echo $registro; ?>' onsubmit='return edita_cad_func(this)'>
						
									<tr>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td align='right'> Registro :</td>
										<td align='left'><?php echo $registro; ?></td>
									</tr>
									<tr>
										<td align='right'>* Departamento :</td>
								  		<td align='left'><input name='txtdepto' id='txteditadepto' type='text' size='25' maxlength='20' readonly='true' style="background-color:#EEE9E9" value= '<?php echo $nomedepto; ?>'>
								  		<?php
					 					echo "<a href='javascript:consdepto(\"../../../../../consultas/departamento/buscadepto\")' title='Buscar departamento'>" ?>
					 					<img src="../../../../../imagens/lupa.jpeg"></td>
					 					<input type="hidden" name="txtiddepartamento" id="txtiddepartamento" value="<?php echo $sigla; ?>">
									</tr>
									<tr>
										<td align='right'>* Nome do Funcionário:</td>
								  		<td align='left'><input name='txteditanomefunc' id='txteditanomefunc' type='text' size='35' maxlength='40' value= '<?php echo $nomefunc; ?>'></td>
									</tr>
									<tr>
										<td align='right'> Telefone:</td>
								  		<td align='left'><input name='txteditafone' id='txteditafone' type='text' size='10' maxlength='15' value= '<?php echo $telefone; ?>'></td>
									</tr>
									<tr>
										<td align='right'> Email:</td>
								  		<td align='left'><input name='txteditaemail' id='txteditaemail' type='text' size='50' maxlength='55' value= '<?php echo $email; ?>'></td>
									</tr>
									<tr>
										<td>&nbsp;</td>
										<td>&nbsp;</td>
								  	</tr>
									<tr>
										<td align='right'><input type='submit' name='btnedenvia' value='Confirmar'></td>
									</tr>
								</form>
							</table>
					  	</center>
					<?php
								    }

										echo "<a href = '../../../restritaprincipal.php?pasta=arearestritausufuncop/cadastros/cadfunc&arq=cadfunc&tparq=php'>Retornar</a>";	 
				                      ?>
				
		   <br />
		   <!--<a href = 'javascript:history.back()'>Retornar</a> -->
		  </div>
		 <div id="divisoria"></div>
         <div id="rodape">
		  <br>&copy; Desenvolvido pelos alunos do curso de programação PHP SENAC - Todos os direitos reservados.
		 </div>		 
     </div>
</body>
</html>
