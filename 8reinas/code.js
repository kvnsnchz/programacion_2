
function presiono(button){
	var hidden = "#"+$(button).data('hidden');
	if($(hidden).val()==' '){
		$(hidden).val('x');
	}
	else{
		$(hidden).val(' ');
	} 
	$("#form_game").submit();

}
