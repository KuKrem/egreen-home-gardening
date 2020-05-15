$(document).ready(function(){
	
	var role=$('#rolectch').val();
	// alert(role);

	if(role!=1) {
		$('#admin1').hide();
		$('#check1').hide();
		$('#adminhead').hide();
		$('#checknew1').hide();
		$('#checknew2').hide();
		
	}

	if(role!=1 && role!=2 && role!=6 && role!=7 && role!=8 && role!=12 && role!=13 && role!=14 && role!=16) {
		$('#check2').hide();
		$('#planterhead').hide();
	}

	if(role!=1 && role!=3 && role!=6 && role!=9 && role!=10 && role!=12 && role!=13 && role!=15 && role!=16) {
		$('#check3').hide();
		$('#instructorhead').hide();
	}

	if(role!=1 && role!=4 && role!=8 && role!=9 && role!=11 && role!=12 && role!=14 && role!=15 && role!=16) {
		$('#check4').hide();
		$('#shopkeeperhead').hide();
	}

	if(role!=1 && role!=5 && role!=8 && role!=10 && role!=11 && role!=13 && role!=14 && role!=15 && role!=16) {
		$('#check5').hide();
		$('#helperhead').hide();
	}
});