<?php
include "../../includes/valida_sessaocli.php";
include "../../includes/conexao.php";
?>
<html>
<head>
<title>:: DESENVOLVIMENTO TÉCNICO - ÁREA RESTRITA ::</title>
<link href="../../css/layout.css" rel="stylesheet" />
<script language="javascript" src="../../arquivojs/arquivo.js"> </script>
</head>
<body>
<div id="geral">
    <div id="cabecalho"></div>
	<div id="divisoria">
	<div id='sair'><a href="../../logout.php">sair </a></div>
	</div>
	<div id='esquerdares'>
	    <?php
		    echo "<center>"."<img src='../../imagens/usuario.png'>"."<br>";
			echo "Olá, ".$nomecli."<br>"."</center>";
			echo "<br /><br />";
		?>
	&nbsp;&nbsp;&nbsp;&nbsp;<img src="../../imagens/alias_path.gif">Menu
	<br /><br />
	<div id='NavbarMenu'>
	<div id='NavbarMenuleft'>
	<div id='nav'>
	
		<div class="menu" onclick="animacao('agend')">Agendamento</div>
		<div style="display:none;" id="agend">
			<div class="submenu"><a href="restritaprincipalusucli.php?pasta=arearestritausucliente/solicitacao&arq=solicitagendamento&tparq=php&id_usucliente=<?php echo $id_usucliente;?>">Solicitar</a></div>
		</div>
		<div class="menu" onclick="animacao('cons')">Consultas</div>
		<div style="display:none;" id="cons">
			<div class="submenu"><a href="restritaprincipalusucli.php?pasta=arearestritausucliente/verasolicitacao&arq=csagdencaminhados&tparq=php&id_usucliente=<?php echo $id_usucliente;?>">Agendamentos encaminhados</a></div>
			<div class="submenu"><a href="restritaprincipalusucli.php?pasta=arearestritausucliente/verasolicitacao&arq=csagdconfirmados&tparq=php&id_usucliente=<?php echo $id_usucliente;?>">Agendamentos confirmados</a></div>
		</div>
	 
	
	
	
	      </div>
	      </div>
	      </div>
    </div>
    <div id='meioarear'>
    <?php
        if (isset($_GET['mens']))
		 {
		   echo "<div id='mensagem'>";
		   $mens=$_GET['mens'];
		   echo "<center>";
		   echo "<table>";
		   echo "<tr>";
		   echo "<td>"."<img src='../../imagens/warning.gif'>"."</td>";
   		   echo "<td>"."$mens"."</td>";
		   echo "</tr>";
		   echo "</table>";
		   echo "<a href = 'restritaprincipalusucli.php?pasta=arearestritausucliente/solicitacao&arq=solicitagendamento&tparq=php&id_usucliente=$id_usucliente'>Retornar</a>";
		   echo "</div>";
		}else{
               if (isset($_GET['pasta'])&& isset($_GET['arq'])&& isset($_GET['tparq']))
	            {
	              $pasta=$_GET['pasta'];
	              $arq=$_GET['arq'];
	              $tparq=$_GET['tparq'];
	              if($tparq=='html')
	               {
		            $extensao="html";
		           }else{
		                 $extensao="php";
		                }
		          include "$pasta/$arq".".$extensao";
	            }
			 }
    ?>
     </div>
         <div id="divisoria"></div>
         <div id="rodape">
		  <br>&copy; Desenvolvido pelos alunos do curso de programação PHP SENAC - Todos os direitos reservados.
		 </div>
</div>

</body>
</html>
