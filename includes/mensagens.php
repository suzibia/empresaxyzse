<?php
	function menlog($idmens)
	{
		switch($idmens)
		{
		case 1:{
				$mens1="Preencha o campo Usuário!";
				return $mens1;
				}
		break;
		case 2:{
				$mens1="Preencha o campo Senha!";
				return $mens1;
				}
		break;
		case 3:{
				$mens1="Usuário ou Senha incorretos!";
				return $mens1;
			}
		break;
		case 4:{
				$mens1="Você não efetuou o login!";
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
				$mens1="Departamento já existe!";
				return $mens1;
			}
		break;
		case 8:{
				$mens1="Inclusão efetuada com sucesso!";
				return $mens1;
			}
		break;
		case 9:{
				$mens1="Erro na inclusão!";
				return $mens1;
			}
		break;
		case 10:{
				$mens1="Alteração efetuada com sucesso!";
				return $mens1;
			}
		break;
		case 11:{
				$mens1="Erro na alteração!";
				return $mens1;
			}
		break;
		case 12:{
				$mens1="Exclusão efetuada com sucesso!";
				return $mens1;
			}
		break;
		case 13:{
				$mens1="Erro na exclusão!";
				return $mens1;
			}	
		break;
		case 14:{
				$mens1="Preencha  o campo Registro do Funcionário!";
				return $mens1;
			}	
		break;
		case 15:{
				$mens1="Preencha o campo Departamento do Funcionário!";
				return $mens1;
			}	
		break;
		case 16:{
				$mens1="Preencha o campo Nome do Funcionário!";
				return $mens1;
			}	
		break;
		case 17:{
				$mens1="Funcionário já cadastrado!";
				return $mens1;
			}	
		break;
		case 18:{
				$mens1="Exclusão cancelada! Existe(m) funcionário(s) cadastrado(s) neste Departamento. Para excluir este departamento, deve modificar ou excluir o(s) resgistros do(s) funcionário(s) relacionado(s).";
				return $mens1;
			}	
		break;
		case 19:{
				$mens1=" dado inválido! Deve informar um número inteiro válido para ";
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
				$mens1=" Usuário já existe!";
				return $mens1;
			}	
		break;
		case 24:{
				$mens1="Usuário ou Senha não encontrados!";
				return $mens1;
			}
		break;
		}
	
	}
?>
	