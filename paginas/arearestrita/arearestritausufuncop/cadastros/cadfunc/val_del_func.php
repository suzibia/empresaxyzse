<?php
ob_start();
include "../../../../../includes/mensagens.php";
include "../../../../../includes/conexao.php";
include "../../../../../includes/funcoesphp/funcoesbd/funcoesbd.php";
$registro=$_GET['delregistro'];

$res = mysql_query("DELETE FROM funcionarios WHERE registro='$registro'");
if($res)
{
  $mensagem=menlog(12);
  header ("Location:../../../restritaprincipal.php?mens=$mensagem");
}else {
    $mensagem=menlog(13);
    header ("Location:../../../restritaprincipal.php?mens=$mensagem");
}	

?>