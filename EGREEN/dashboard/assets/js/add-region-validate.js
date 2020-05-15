$(document).ready(function(){

	var reginame = $('#regid');
	var txtregname = $('#txtregname');
	var state=false;

	// according to selected province load districts to second drop down
	$("#prolistid").change(function() {
	  if ($(this).data('options') === undefined) {
	    /*Taking an array of all options-2 and kind of embedding it on the prolistid*/
	    $(this).data('options', $('#dislistid option').clone());
	  }

		$('#dislistid').empty();
	  var id = $(this).val();
	  $.post('districts.php',{proid:id},
  	function(return_data){
  		$.each(return_data.data, function(key,value){
				$("#dislistid").append("<option value='" + value.district_id +"'>"+value.dis_name+"</option>");
			});
  	},"json")
	});

	// function for checking region name
  function chkregname(name) {
    var crp = /^[A-Z][a-z]+\D+/;
    return crp.test(name.val());
  }

  // validating region name
  function validateRegionname(){
    if(reginame.val().length>2 && chkregname(reginame) && $.trim(reginame.val()) != null && $.trim(reginame.val()) != ''){
      reginame.removeClass('error');
      reginame.addClass('valid');
      txtregname.removeClass('error');
      txtregname.addClass('valid');
      txtregname.text('Valid region name');
      return true;
    }
    else if($.trim(reginame.val()) === null || $.trim(reginame.val()) === '' || !chkregname(reginame)) {
      reginame.tooltip('show');
      reginame.removeClass('valid');
      reginame.addClass('error');
      txtregname.removeClass('valid');
      txtregname.addClass('error');
      txtregname.text('Invalid characters or too short, minimum 3 characters');
      return false;
    }
  }

  // check existance of region
  function checkExistance() {
    var regionchk = reginame.val();
    if (regionchk != '' && regionchk != null) {
      $.post('check-region-exist.php', {regchk:regionchk}, function(data){
        if(data!=0){
          reginame.removeClass('valid');
          reginame.addClass('error');
          txtregname.removeClass('valid');
          txtregname.addClass('error');
          txtregname.text("Region already exists");
          state=false;
        } 
        else {
          reginame.removeClass('error');
          reginame.addClass('valid');
          txtregname.removeClass('error');
          txtregname.addClass('valid');
          txtregname.text("New region...!");
          state=true;
        }
      });
    }
    else {
      cn.removeClass('valid');
      cn.addClass('error');
      txtcropname.removeClass('valid');
      txtcropname.addClass('error');
      txtcropname.text("Enter valid Region name");
      state=true;
    } 
    return state;
  }

	// check whether the value of province dropdown greater than 0
	function validateSelectionPro() {
		var proid = $("#prolistid option:selected").val()
		if(proid==0) {
      $.alert({
        title: 'Alert!',
        content:'Please select the province before a region to be created.!'
      });
			// alert("Please select the province before a region to be created.!");
			return false;
		}
		else {
			return true;
		}
	}

	reginame.keyup(validateRegionname);
	// validateSelectionPro();

	//  submitting form data
	$('#addregbtn').on('click', function (event) {
    event.preventDefault();
    if(validateRegionname()){
    	if(checkExistance()==true){
    		if(validateSelectionPro()) {
		      // $('#addregbtn').on('click', function (event) {
		        $('#adregion').submit();
		      // });
	    	}
		    else {
		    	return false;
		    }
    	}
	    else{
	      return false;
	    }
	  }
	  else {
      $.alert({
        title: 'Alert!',
        content:'Please enter a valid "Region Name". First letter should be capital'
      });
	  	// alert('Please enter a valid "Region Name". First letter should be capital');
      return false;
	  }
  });

})