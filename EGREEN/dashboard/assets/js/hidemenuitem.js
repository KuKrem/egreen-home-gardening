$(document).ready(function(){
	
	var role=$('#rolectch').val();
	// alert(role);

	if(role!=1) {
		$('#addcropmi').hide();
		$('#addregionmi').hide();
		$('#viewcropsmi').hide();
		$('#allusersmi').hide();
		// $('#adminhead').hide();
	}

	// show menu items for planters
	if(role!=1 && role!=2 && role!=6 && role!=7 && role!=8 && role!=12 && role!=13 && role!=14 && role!=16) {
		$('#crejournalmi').hide();
		$('#myjournalsmi').hide();
		// $('#allusersmi').hide();
	}

	// show menu items for instructors
	if(role!=1 && role!=3 && role!=6 && role!=9 && role!=10 && role!=12 && role!=13 && role!=15 && role!=16) {
		$('#cretimelinemi').hide();
		$('#mytimelinesmi').hide();
	}

	// show menu items for shopkeepers
	if(role!=1 && role!=4 && role!=8 && role!=9 && role!=11 && role!=12 && role!=14 && role!=15 && role!=16) {
		$('#myshopmi').hide();
		$('#creshopmi').hide();
	}

	// show menu items for helers
	if(role!=1 && role!=5 && role!=8 && role!=10 && role!=11 && role!=13 && role!=14 && role!=15 && role!=16) {
		$('#selectregmi').hide();
		$('#ihelpermi').hide();
	}
});