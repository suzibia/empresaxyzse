<?php
	function menlog($idmens)
	{
		switch($idmens)
		{
		case 1:{
				$mens1="Preencha o campo Usu�rio!";
				return $mens1;
				}
		break;
		case 2:{
				$mens1="Preencha o campo Senha!";
				return $mens1;
				}
		break;
		case 3:{
				$mens1="Usu�rio ou Senha incorretos!";
				return $mens1;
			}
		break;
		case 4:{
				$mens1="Voc� n�o efetuou o login!";
				return $mens1;
			}
		break;
		case 5:{
				$mens1="Preencha o campo sigla do departamento!";
				return $mens1;
			}
		break;
		case 6:{
				$mens1="Preencha o campo nome do departamento!";
				return $mens1;
			}
		break;
		case 7:{
				$mens1="Departamento j� existe!";
				return $mens1;
			}
		break;
		case 8:{
				$mens1="Inclus�o efetuada com sucesso!";
				return $mens1;
			}
		break;
		case 9:{
				$mens1="Erro na inclus�o!";
				return $mens1;
			}
		break;
		case 10:{
				$mens1="Altera��o efetuada com sucesso!";
				return $mens1;
			}
		break;
		case 11:{
				$mens1="Erro na altera��o!";
				return $mens1;
			}
		break;
		case 12:{
				$mens1="Exclus�o efetuada com sucesso!";
				return $mens1;
			}
		break;
		case 13:{
				$mens1="Erro na exclus�o!";
				return $mens1;
			}	
		break;
		case 14:{
				$mens1="Preencha  o campo Registro do Funcion�rio!";
				return $mens1;
			}	
		break;
		case 15:{
				$mens1="Preencha o campo Departamento do Funcion�rio!";
				return $mens1;
			}	
		break;
		case 16:{
				$mens1="Preencha o campo Nome do Funcion�rio!";
				return $mens1;
			}	
		break;
		case 17:{
				$mens1="Funcion�rio j� cadastrado!";
				return $mens1;
			}	
		break;
		case 18:{
				$mens1="Exclus�o cancelada! Existe(m) funcion�rio(s) cadastrado(s) neste Departamento. Para excluir este departamento, deve modificar ou excluir o(s) resgistros do(s) funcion�rio(s) relacionado(s).";
				return $mens1;
			}	
		break;
		case 19:{
				$mens1=" dado inv�lido! Deve informar um n�mero inteiro v�lido para ";
				return $mens1;
			}	
		break;
		case 20:{
				$mens1=" Preencha o campo Nome do cliente! ";
				return $mens1;
			}	
		break;
		case 21:{
				$mens1="Preencha o campo Empresa";
				return $mens1;
			}	
		break;
		case 22:{
				$mens1=" Preencha o campo telefone!";
				return $mens1;
			}	
		break;
		case 23:{
				$mens1=" Usu�rio j� existe!";
				return $mens1;
			}	
		break;
		case 24:{
				$mens1="Usu�rio ou Senha n�o encontrados!";
				return $mens1;
			}
		break;
		}
	
	}
?>
	