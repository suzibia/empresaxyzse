<?php
ob_start();
include "../../../../../includes/mensagens.php";
include "../../../../../includes/conexao.php";
$registro=$_GET['registro'];
$departamento=$_POST['txtiddepartamento'];
$nome=$_POST['txteditanomefunc'];
$telefone=$_POST['txteditafone'];
$email=$_POST['txteditaemail'];
if ($nome=="")
	{
		$mensagem=menlog(16);
		header("Location:edita_cad_func.php?mens=$mensagem");	
	}
else{
			$altera=mysql_query("UPDATE funcionarios SET nomefunc='$nome', fonecontato='$telefone', email='$email', departamentos_id_departamento='$departamento' WHERE registro='$registro'");
			if($altera)
				{
					$mensagem=menlog(10);
					header("Location:edita_cad_func.php?mens=$mensagem");
				}else{
					$mensagem=menlog(11);
					header("Location:edita_cad_func.php?mens=$mensagem");
				}
	}

?>