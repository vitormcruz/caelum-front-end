document.querySelector("#form_busca").onsubmit=validaBusca;
setInterval(trocaBanner, 8000);


function validaBusca(){
	var valorBusca = document.querySelector("#q").value;
	if(!valorBusca || valorBusca === ""){
		alert('Tem que informar o valor da busca');
		return false;
	}
}


var bannerDaVez = "";
function trocaBanner(){
	if(bannerDaVez === ""){
		bannerDaVez = "-2";
	} else{
		bannerDaVez = "";
	}
    
	document.querySelector(".destaque img").src = "img/destaque-home" + bannerDaVez + ".png";
}

$(".painel").addClass("painel-compacto");

$(".painel button").click(function(){
	$(this).closest(".painel").removeClass("painel-compacto");
})