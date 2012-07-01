<?php
function pesquisabd ($tabelaf,$palavra_chavef,$procuraf,$ordemf,$limitf)
	{
	if ($procuraf==1)
		{
		/*Comando SQL LIKE, permite a consulta por palavras-chave informadas em uma busca,
		para isso utiliza o sinal de %. 
		%abc - procura por palavras que terminem por abc.
		abc% - procura por palavras que iniciam com abc.
		/%abc% - procura por palavras que iniciam ou terminam por abc.*/
		$qr="SELECT * FROM $tabelaf WHERE id_departamento LIKE '%$palavra_chavef%' ORDER BY id_departamento $ordemf LIMIT $limitf";
		return $qr;
		}else if($procuraf==2)
			{
			$qr="SELECT * FROM $tabelaf WHERE nome LIKE '%$palavra_chavef%' ORDER BY nome $ordemf LIMIT $limitf";
			return $qr;
			}else if ($procuraf==0)
				{
				$qr="SELECT * FROM $tabelaf LIMIT $limitf";
				return $qr;
				}			
	}	
	/*cidbd= código do identificador do campo no BD, cidinf= código do identificador.*/
function integridadetabelas($tabela,$cidbd,$cidinf)
	{
	$sql=mysql_query("SELECT * FROM $tabela WHERE $cidbd='$cidinf'");
	//echo "SELECT * FROM $tabela WHERE $cidbd='$cidinf'"; (teste para ver se está funcionando)
	$num=mysql_num_rows($sql);
		
		if($num>=1)
			{
			 if($tabela=="funcionarios")
				{
				 $mensagem=menlog(18);
				}
				return $mensagem;
			}else return "";
	}


?>