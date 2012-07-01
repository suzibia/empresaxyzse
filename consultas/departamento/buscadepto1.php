<html>
  <head>
  <title></title>
  <script>
  function enviar(nome,sigla){ 
  
				opener.document.forms[0].txtdepto.value=nome;
				opener.document.forms[0].txtiddepartamento.value=sigla;
				window.close();    
  }
  </script>  
  </head>
<body>
<script>  
			    
</script>
<?php
include "../../includes/conexao.php";
include "../../includes/funcoesphp/funcoesbd/funcoesbd.php";
$tabela="departamentos";
$palavra_chave = mysql_real_escape_string($_POST['palavra_chave']);//Escapa espaços vazios
$procura=$_POST['procura'];
$ordem=$_POST['ordem'];
$limit=99999;
$qr=pesquisabd($tabela,$palavra_chave,$procura,$ordem,$limit);
$sql=mysql_query($qr);
		echo "
			  <center>
			  <table width='100%' border='1px' bordercolor='#000'>
				<tr>
				   <td align='center' width='40%'><font size = '2'>Sigla</td>
				   <td align='center' width='60%'><font size = '2'>Nome</td>
				</tr>
				<tr>
			";
			while($dados=mysql_fetch_array($sql))
			{
			
				$sigla=$dados['id_departamento'];
				$nome=$dados['nome'];
				
				?>
					 <td bgcolor='#CAE1FF' class='alinha_cnt' align='center'><font size = '2'><?php echo $sigla;?></td>
					 
					 <td bgcolor='#4682B4' class='alinha_cnt' align='center'><font size = '2'><a href='#' onClick="return enviar('<?php echo $nome;?>','<?php echo $sigla?>');" border='none'><?php echo $nome;?></a></td>
				     
				</tr>
				
			<?php
			}
			echo "</table></center>";
 
?>
</body>
</html>