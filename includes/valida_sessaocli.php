<?php
    ob_start();
	include "../../includes/mensagens.php";
	
    session_start ();
    
    if (!isset($_SESSION['id_sessao']))
	 {
	  unset ($_SESSION['id_sessao']);
	  $mens1=menlog(4); 
	  header ("Location:../../autenticausucliente.php?mens=$mens1");
	  exit;
     } else {
	         if ($_SESSION['id_sessao'] != session_id())
		      {
		       unset ($_SESSION['id_sessao']);
			   $mens1=menlog(4);
		       header ("Location:../../autenticausucliente.php?mens=$mens1");
			   exit;
	         }else {  
	                  $id_usucliente=$_SESSION['id_usucliente'];
					  $nomecli=$_SESSION['nomecli'];
					  $empresa=$_SESSION['empresa'];
					  $fone=$_SESSION['fone'];
					  $email=$_SESSION['email'];
					  $usuariocli=$_SESSION['usuario'];
					  $senhacli=$_SESSION['senha'];
		           }
           }


?>