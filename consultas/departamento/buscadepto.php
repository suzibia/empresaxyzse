<html>
	<head>
	<title>:: DESENVOLVIMENTO TÉCNICO - CONSULTAR DEPARTAMENTOS ::</title>
		<link href="../../css/layout.css" rel="stylesheet" /> 
	</head>
	<body style="background-color:#FFF;">
	    <div id="meio">
		<br />
		<div class="barra_maisopcoes">
		<form method="post" action="buscadepto.php?arq=buscadepto1">
         <table border="0">
	      <tr>
	        <td>Buscar por:</td> 
	        <td ><input type="text" name="palavra_chave" maxlength="35" size="40" /></td>
	        <td ><select name="procura" id="procura">
		         <option value="0">-- ESCOLHA --</option>
				 <option value="1">Sigla</option>
		         <option value="2">Nome</option>
		         </select>
			</td>
	        <td><input type="hidden" name="ordem" value="ASC" />
	            <input type="submit" value="OK!" title="" /></td>
	      </tr>
	</table>
	</form>

		</div>
		<br />
		<?php
		       if (isset($_GET['arq']))
				{
		          $arq=$_GET['arq'];
				  include "$arq".".php";
				}
			?>
		</div>
		
	
	</body>
</html>