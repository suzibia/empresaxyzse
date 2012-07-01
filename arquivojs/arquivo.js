/*Arquivo javascript*/

function animacao(obj) {
	var YY = -1;
	var XX = 1;
	var el = document.getElementById(obj);
	/*
	  A declaração display: block faz com que o 
	  elemento HTML seja renderizado como bloco,
	  tal como os parágrafos e os cabeçalhos o são.
	  Um bloco contém um espaço em branco tanto
	  em cima como embaixo e não permite outros
	  elementos HTML ao lado, exceto quando
	  tiver sido declarado ao contrário
	  (por exemplo, declarar a propriedade float
	  para o elemento próximo ao bloco).
	*/
	if(el.style.display != "block") {
	
	/*Com essa Action, você poderá colocar um
	tempo para executar as ações*/
	/*O método setInterval () chama uma função ou avalia
	uma expressão em intervalos especificado (em milissegundos)*/
		var teste = window.setInterval(function() {
		//alert("Valor de yy "+yy);
		YY++;
		//alert("Valor de yy " + yy);
		if (YY < 1) {
		    //alert("Valor de yy " + yy);
			el.style.display = "block";
			el.style.position = "relative";
			el.style.top=YY+document.body.scrollTop;
		}
	},10);
	}else {
	       var teste = window.setInterval(function() {
		   XX=XX-1;
		   if (XX > -1) {
			el.style.top=XX+document.body.scrollTop;
		}else { clearInterval(teste);el.style.display = "none"; }
	},10);
	}
}

function confirma(cad) {
	var	ask=confirm("Confirma exclusão: "+cad+" ?"); //Confirm () - função javascript que reproduz uma caixa de diálogo.
	
	if(ask) {
		return true;
	} else return false;
}

function consdepto(arq){
	window.open(arq + ".php", "myWindow", "status=1, height=700, width=827, resizable=-1, scrollbars=yes")
}
	
