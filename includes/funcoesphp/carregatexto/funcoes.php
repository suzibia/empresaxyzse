<?php
function learquivo($nomedoarquivo)
	{
	$fp=fopen($nomedoarquivo,"r");//fopen(), funчуo php que permite abrir arquivo, o parтmetro r (read) leitura.
	//laчo que irс ler todo o conteњdo do arquivo.
	while (!feof($fp))
		{//while, comando de estrutura de repetiчуo que significa enquanto.
		//feof(), Testa pelo fim-de-arquivo (eof- end of file)
		//leitura de cada linha do arquivo.
		$linha=fgets($fp,500);//fgets(), funчуo que lъ uma linha de um ponteiro do arquivo.
		echo $linha;
		echo "<br/>";
		}//fim do laчo
	//fecha o arquivo
	fclose($fp); //fclose(), funчуo php que significa fechar o arquivo.
	}
?>