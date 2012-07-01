<html>
<head>
<title></title>
</head>
<body>
  	      <center><br />
			 <strong><font size="4">::CADASTRAR DEPARTAMENTOS::</font></strong>
			 <table border=0>
			 <form name="frmcadepto" action="arearestritausufuncop/cadastros/caddepto/val_cad_depto.php" method="post" onsubmit="return valida_cadepto(this);">  
                  <tr>
                     <td>&nbsp;</td>
                  </tr>
                  <tr>       
                     <td align="right">* Sigla :</td>
                     <td align="left"><input name="txtsigla" id="txtsigla" type="text" maxlength="6" size="11" style="text-transform:uppercase;" ></td>    
                  </tr>    
                  <tr>       
                     <td align="right">* Nome :</td>
                     <td align="left"><input name="txtnome" id="txtnome" type="text" size="25" maxlength="20"></td>    
                 </tr>    
                 
                 <tr>       
                     <td>&nbsp;</td>
                     <td>&nbsp;</td>    
                 </tr> 				 
                 <tr>
				   <td align="right"><input type="submit" name="btnenvia" value="Confirmar"></td>
                   <td align="left">&nbsp;<input type="reset" name="btnlimpa" value="Limpar"></td>
                 </tr> 
              </form> 				 
              </table>
           </center>
		   <br/>
				<strong>DEPARTAMENTOS CADASTRADOS</strong>
				<br/><br/>
				<table border="1" align="center" bordercolor="#77b9ed" width="60%">
					<tr>
						<td align="center" width="6%"><font size="2"><strong>SIGLA</strong></font></td>
						<td align="center" width="44%"><font size="2"><strong>NOME</strong></font></td>
						<td align="center" width="5%"><font size="2"><strong>Editar</strong></font></td>
						<td align="center" width="5%"><font size="2"><strong>Excluir</strong></font></td>
					</tr>
					<tr>
						<?php
							$sql=mysql_query("SELECT * FROM departamentos");
							/*Estrutura de repetição que irá imprimir os dados do departamento enquanto houverem registros ou linhas no array $dados*/
							while($dados=mysql_fetch_array($sql))
								{//Início da estrutura de repetição
								$id_departamento=$dados["id_departamento"];
								$nome=$dados["nome"];
						?>
						<td align="center"><font size="2"><?php echo $id_departamento?></font></td>
						<td><font size="2"><?php echo $nome?></font></td>
						<?php
							echo "<td align='center'><a href='arearestritausufuncop/cadastros/caddepto/edita_cad_depto.php?iddepto=$id_departamento&nome=$nome'><img src='../../imagens/editar.jpg' align='center' title='Editar departamento'></a></td>";
							echo "<td align='center'><a href='arearestritausufuncop/cadastros/caddepto/val_del_depto.php?id=$id_departamento' onClick='return confirma(\"$nome\")'><img src='../../imagens/excluir.jpg' align='center' title='Excluir departamento'></a></td>";
						?>
					</tr>
						<?php
								}
						?>
				</table>	
				<br/>
	      <a href="../../logout.php"><strong>HOME</strong></a>
				<br/>
</body>
</html>
