<?php
include "../../../../../includes/mensagens.php"; 
?>
<html>
<head>
<title>:: INFORMATIVO ONLINE - [AUTENTICAÇÃO DE USUÁRIO] ::</title>
<link href="../../../../../css/layout.css" rel="stylesheet" />
<script language="javascript">
	function edita_cadepto(form)
		{
		if(form.elements[0].value=="")
			{
			alert("Preencha o campo Nome!");
			form.elements[0].focus();
			return false;
			}else
			return true;
		}		
</script>
</head>
<body>
     <div id="geral">
	     <div id="cabecalho"></div>
		 <div id="divisoria"></div>
         <div id="meio">
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
			                   echo "<div id='mensagem'>";
							   $mens=$_GET['mens'];
				               echo "<center>";
			                   echo "<table>";
			                   echo "<tr>";
							   echo "<td>"."<img src='../../../../../imagens/warning.gif'>"."</td>";
						       echo "<td>"."$mens"."</td>";
			                   echo "</tr>";
			                   echo "</table>";
							   echo "</center>";
							   echo "</div>";
						      }else {
					                  $iddepto=$_GET['iddepto'];
				                      $nome=$_GET['nome'];
			                          echo "<center> <br /><br />";
									  echo "<strong><font size='4'>:: EDITAR DEPARTAMENTOS ::</font></strong>";
									  echo "<br /><br /><br />";
									  echo "<table>";
									  echo "<form name='frmeditadepto' method='post' action='val_edita_cad_depto.php?iddepto=$iddepto' onsubmit='return edita_cadepto(this)'";
									  echo "<tr>";
									  echo "<td>&nbsp;</td>";
									  echo "</tr>";
									  echo "<tr>";
									  echo "<td align='right'> Sigla :</td>";
									  echo "<td align='left'>$iddepto</td>";
									  /*echo"<input name='txtiddepto' id='txtiddepto' type='hidden' size='25' maxlength='20' value= '$iddepto'></td>";
									  Outra opção, no entanto, é por método post.*/
									  echo "</tr>";
									  echo "<tr>";
									  echo "<td align='right'>* Nome :</td>";
									  echo "<td align='left'><input name='txtednome' id='txtednome' type='text' size='25' maxlength='20' value= '$nome'></td>";
									  echo "</tr>";
									  echo "<tr>";
									  echo "<td>&nbsp;</td>";
									  echo "<td>&nbsp;</td>";
									  echo "</tr>";
									  echo "<tr>";
									  echo "<td align='right'><input type='submit' name='btnedenvia' value='Confirmar'></td>";
									  echo "</tr>";
									  echo "</form>";
									  echo "</table>";
									  echo "</center>";
								    }

										echo "<a href = '../../../restritaprincipal.php?pasta=arearestritausufuncop/cadastros/caddepto&arq=caddepto&tparq=php'>Retornar</a>";	 
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

