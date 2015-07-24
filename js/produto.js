$("input[name=tamanho]").on("input", function(){
	$("output[name=valortamanho]").val(this.value);
});