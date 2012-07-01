<html>
<head>
<title></title>
<script language="javascript" src="../../arquivojs/arquivo.js"> </script>
</head>
<body>
  	      <center><br />
			 
			 <strong><font size="4">::CADASTRAR FUNCIONÁRIOS::</font></strong>
			 <table border=0>
			 <form name="frmcadfunc" action="arearestritausufuncop/cadastros/cadfunc/val_cad_func.php" method="post" onsubmit="return valida_cadfunc(this)">  
                  <tr>
                     <td>&nbsp;</td>
					 <td>&nbsp;</td>
					 <td>&nbsp;</td>
                  </tr>
                  <tr>       
                     <td align="right">* Registro :</td>
                     <td align="left"><input name="txtregistro" id="txtregistro" type="text" maxlength="6" size="11"></td> 
                     <td align="left">&nbsp;</td>					 
                  </tr>    
                  <tr>       
                     <td align="right">* Departamento :</td>
                     <td><input name="txtdepto" id="txtdepto" type="text" size="25" maxlength="20" style="background-color:#EEE9E9" readonly="true" > 
                     <!--aqui-->
					 <?php
					 echo "<a href='javascript:consdepto(\"../../consultas/departamento/buscadepto\")' title='Buscar departamento'>"?><img src="../../imagens/lupa.jpeg"></td>
                   	 
					 <input name="txtiddepartamento" type="hidden" maxlength="6">					 
                 </tr>    
                 <tr>       
                     <td align="right">* Nome :</td>
                     <td align="left"><input name="txtnome" id="txtnome" type="text" maxlength="35" size="40"></td>    
                     <td align="left">&nbsp;</td>
				  </tr>
				  <tr>       
                     <td align="right">  Telefone :</td>
                     <td align="left"><input name="txtfone" id="txtfone" type="text" maxlength="10" size="15"></td>    
                     <td align="left">&nbsp;</td>
				  </tr>
				  <tr>       
                     <td align="right">  Email :</td>
                     <td align="left"><input name="txtemail" id="txtemail" type="text" maxlength="50" size="55"></td>    
                     <td align="left">&nbsp;</td>
				  </tr>
                 <tr>       
                     <td>&nbsp;</td>
                     <td>&nbsp;</td> 
                     <td>&nbsp;</td>					 
                 </tr> 				 
                 <tr>
				   <td align="right"><input type="submit" name="btnenvia" value="Confirmar"></td>
                   <td align="left">&nbsp;<input type="reset" name="btnlimpa" value="Limpar"></td>
                   <td align="left">&nbsp;</td>
				 </tr> 
              </form> 				 
              </table>
           
            <br />
			<strong>FUNCIONÁRIOS CADASTRADOS</strong>
			<br/><br/>
			<table border="1" align="center" bordercolor="#77b9ed" width="70%">
			<tr>
				<td align="center" width="6%"><font size="2"><strong>REGISTRO</strong></font></td>
				<td align="center" width="34%"><font size="2"><strong>DEPARTAMENTO</strong></font></td>
				<td align="center" width="20%"><font size="2"><strong>NOME</strong></font></td>
				<td align="center" width="5%"><font size="2"><strong>Editar</strong></font></td>
				<td align="center" width="5%"><font size="2"><strong>Excluir</strong></font></td>
			</tr>
			<tr>
						<?php
							$sql=mysql_query("SELECT funcionarios.registro,funcionarios.nomefunc,departamentos.nome,funcionarios.departamentos_id_departamento,funcionarios.fonecontato,funcionarios.email FROM funcionarios INNER JOIN departamentos ON funcionarios.departamentos_id_departamento=departamentos.id_departamento ORDER BY funcionarios.registro ASC");
							/*Estrutura de repetição que irá imprimir os dados do departamento enquanto houverem registros ou linhas no array $dados*/
							while($dados=mysql_fetch_array($sql))
								{//Início da estrutura de repetição
								 $registro=$dados["registro"];
								 $nomedepto=$dados["nome"];
								 $nomefunc=$dados["nomefunc"];
								 $telefone=$dados["fonecontato"];
								 $email=$dados["email"];
								 $sigla=$dados["departamentos_id_departamento"];
						?>
						<td align="center"><font size="2"><?php echo $registro?></font></td>
						<td align="center"><font size="2"><?php echo $nomedepto?></font></td>
						<td><font size="2"><?php echo $nomefunc?></font></td>
						<?php
							echo "<td align='center'><a href='arearestritausufuncop/cadastros/cadfunc/edita_cad_func.php?registro=$registro&nomedepto=$nomedepto&nomefunc=$nomefunc&telefone=$telefone&email=$email&sigla=$sigla'><img src='../../imagens/editar.jpg' align='center' title='Editar funcionário'></a></td>";
						?>
							<td align='center'>
								<a href='arearestritausufuncop/cadastros/cadfunc/val_del_func.php?delregistro=<?php echo $registro; ?>' onClick='return confirma("Registro <?php echo $registro; ?>")'>
									<img src='../../imagens/excluir.jpg' align='center' title='Excluir funcionário'>
								</a>
							</td>
			</tr>
						<?php
								}
						?>
			</table>
             </center>
			  
			  
		      <br />
	      <!--<a href="../../logout.php"><strong>HOME</strong></a>-->
</body>
</html>
