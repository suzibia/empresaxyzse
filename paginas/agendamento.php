<?php

   include "includes/funcoesphp/carregatexto/funcoes.php" ;
?>
<html>
   <head>
   <title></title>
   </head>
   <body>
   <h2 class="alinha_esq">&nbsp;Agendamento On-line !</h2>
   <p align="justify">
   <table>
   <tr>
   <td><img src="imagens/agenda.png"></td>
   <td>
    <p> 
	
   <?php
	     learquivo("arquivostextos/textoagendamento.txt") ;
   ?> 
   </p>
   
   </td>
   </table>
    <center><a href="index.php?pasta=paginas&arq=formautenticausucli&tparq=html">Solicitar agendamento </a></center>
	&nbsp;
   </body>
</html>