$(document).ready(function(){

	// according to selected province load districts to second drop down
	$("#helppro").change(function() {
	  if ($(this).data('options') === undefined) {
	    /*Taking an array of all options-2 and kind of embedding it on the helppro*/
	    $(this).data('options', $('#helpdis option').clone());
	  }

		$('#helpdis').empty();
	  var id = $(this).val();
	  $.post('districts.php',{proid:id},
  	function(return_data){
  		$.each(return_data.data, function(key,value){
				$("#helpdis").append("<option value='" + value.district_id +"'>"+value.dis_name+"</option>");
			});
  	},"json")
	});

	// according to selected district load towns(regions) to third drop down
  $("#helpdis").change(function() {
    if ($(this).data('options') === undefined) {
      /*Taking an array of all options-2 and kind of embedding it on the helpdis*/
      $(this).data('options', $('#helpreg option').clone());
    }

    $('#helpreg').empty();
    var id = $(this).val();
    $.post('regions.php',{proid:id},
    function(return_data){
      $.each(return_data.data, function(key,value){
        $("#helpreg").append("<option value='" + value.region_id +"'>"+value.town+"</option>");
      });
    },"json")
  });

	// check whether the value of province dropdown greater than 0
  function validateSelectionPro() {
    var proid = $("#helppro option:selected").val()
    if(proid==0) {
      alert("Please select the province before submitting the region.!");
      return false;
    }
    else {
      return true;
    }
  }

  // check whether the value of region dropdown greater than 0
  function validateSelectionTown() {
    var towid = $("#helpreg option:selected").val()
    var toid = $('#helpreg option').length
    if(toid == 0 || towid == 0){
      alert("Seems that your region still not added to the database. Sorry for the inconvenience..! It will be added soon.");
      return false;
    }
    else {
      return true;
    }
  }

  //  submitting form data
  $('#addhelregid').on('click', function (event) {
    event.preventDefault();
    if(validateSelectionPro()){
      if(validateSelectionTown()){
        $('#addhelrgfmid').submit();
      }
      else {
        return false;
      }
    }
    else {
      return false;
    }
  });

});