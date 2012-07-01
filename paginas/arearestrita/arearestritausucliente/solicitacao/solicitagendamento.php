<html>
   <head>
   <title></title>
   </head>
   <body>
   <h2 class="alinha_esq">&nbsp;Agendamento >> Solicitar</h2>
   <p align="left">
   <strong><font color="red">Atenção !</font></strong> Sua solicitação de agendamento,após confirmada por você, será encaminhada
   ao profissional de sua escolha.Este, por sua vez,estará atendendo à sua solicitação
   de acordo com sua disponibilidade.Vale salientar que a resposta à solicitação será 
   efetuada em no máximo 24 horas a contar da data e hora de sua confirmação pelo usuário solicitante.
   Após a confirmação pelo profissional da empresa XYZ o usuário solicitante terá também 
   24 horas para a confirmação desta.Caso esta não seja confirmada,
   neste prazo,o agendamento do compromisso será desconsiderado na agenda do
   profissional da XYZ.
   </p>
   <?php
     $id_usucliente=$_GET["id_usucliente"];
   ?>
   <center>
   <table border="0">
    <form name="frmsolicitagendamento" action="arearestritausucliente/solicitacao/confirmasoluscli.php" method="post" onsubmit="return validaformcaduscliente()">
    <tr>
        <td align="right"> Solicitante :</td>
		<td align="left"><?php echo $nomecli; ?></td>
        <td><input type="hidden" name="txtidsolicitante" maxlength="4" value="<?php echo $id_usucliente?>"></td>
    </tr>
    <tr>
        <td align="right">* Contato :</td>
        <td><input name="txtcontato" id="txcontato" type="text" size="25" maxlength="20" style="background-color:#EEE9E9" readonly="true" > 
                     <!--aqui-->
					 <?php
					 echo "<a href='javascript:consfunc(\"../../consultas/funcionario/buscafunc\")' title='Buscar funcionário'>";?><img src="../../imagens/lupa.jpeg"></td>
                   	 
					 <input name="txtregistro" type="hidden" maxlength="6">		
    </tr>
	<tr>
        <td align="right">* Motivo :</td>
        <td align="left"><input type="text" name="txtmotivo" id="txtmotivo" maxlength="40" size="45"></textarea></td>
    </tr>
    <tr>
       <td><input type="submit" name="btnenvia" value="Confirmar">
       &nbsp;<input type="reset" name="btnlimpa" value="Limpar"></td>
    </tr> 
</form>
</table></center>
    <center><a href="../../logout.php">HOME</a></center>
	&nbsp;
   </body>
</html>