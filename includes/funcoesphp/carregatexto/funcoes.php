<?php
function learquivo($nomedoarquivo)
	{
	$fp=fopen($nomedoarquivo,"r");//fopen(), fun��o php que permite abrir arquivo, o par�metro r (read) leitura.
	//la�o que ir� ler todo o conte�do do arquivo.
	while (!feof($fp))
		{//while, comando de estrutura de repeti��o que significa enquanto.
		//feof(), Testa pelo fim-de-arquivo (eof- end of file)
		//leitura de cada linha do arquivo.
		$linha=fgets($fp,500);//fgets(), fun��o que l� uma linha de um ponteiro do arquivo.
		echo $linha;
		echo "<br/>";
		}//fim do la�o
	//fecha o arquivo
	fclose($fp); //fclose(), fun��o php que significa fechar o arquivo.
	}
?>