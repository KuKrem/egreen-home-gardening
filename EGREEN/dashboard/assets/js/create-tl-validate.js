$(document).ready(function(){

	// check selected value of drop down menu
	function validateSelection() {
		var scropid = $("#slcrop option:selected").val()
		if(scropid == 0) {
			$.alert({
        title: 'Alert!',
        content:'Please select a crop before a Timeline to be created.!'
      });
			// alert("Please select a crop before a Timeline to be created.!");
			return false;
		}
		else {
			return true;
		}
	}

	// submitting form if function returns true
	$('#addtlbtn').on('click', function (event) {
    event.preventDefault();
    if(validateSelection()) {
    	$('#addtline').submit();
    	$.alert({
        title: 'Alert!',
        content:'You started a timeline successfully'
      });
      // alert('You started a timeline successfully');
    }
    else {
    	return false;
    }
  });
})