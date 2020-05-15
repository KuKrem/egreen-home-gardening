$(document).ready(function(){
	var selmet=$('#sellmethodid');
	var txtsellmet=$('#txtsellmet');

	// validating selling method
  function checkSellingMet() {
    if(selmet.val().length>5){
      selmet.removeClass('error');
      selmet.addClass('valid');
      txtsellmet.removeClass('error');
      txtsellmet.addClass('valid');
      txtsellmet.text('Valid method');
      return true;
    } 
    else {
      selmet.tooltip('show');
      selmet.removeClass('valid');
      selmet.addClass('error');
      txtsellmet.removeClass('valid');
      txtsellmet.addClass('error');
      txtsellmet.text('Invalid method.');
      return false;
    }
  }

	// check whether the value of crop dropdown greater than 0
  function validateSelectionCrop() {
    var croid = $("#cropid option:selected").val()
    if(croid==0) {
      alert("Please select the crop before adding an item.!");
      return false;
    }
    else {
      return true;
    }
  }

  // check whether the value of item nature dropdown greater than 0
  function validateSelectionItemNat() {
    var itemnatuid = $("#itmnatid option:selected").val()
    if(itemnatuid==0) {
      alert("Please select the nature before adding an item.!");
      return false;
    }
    else {
      return true;
    }
  }

	function readURL(input) {   
    if (input.files && input.files[0]) {   
      var reader = new FileReader();
      var filename = $("#shpitmimgid").val();
      filename = filename.substring(filename.lastIndexOf('\\')+1);
      reader.onload = function(e) {
        debugger;      
        $('#blah').attr('src', e.target.result);
        $('#blah').hide();
        $('#blah').fadeIn(500);      
        $('.custom-file-label').text(filename);             
      }
      reader.readAsDataURL(input.files[0]);    
    } 
    $(".alert").removeClass("loading").hide();
  }

  $("#shpitmimgid").on('click',function(){      
    //RecurFadeIn();
  });

  $("#shpitmimgid").change(function(event) {  
    RecurFadeIn();
    readURL(this);    
  });

  function RecurFadeIn(){ 
    console.log('ran');
    FadeInAlert("Wait for it...");  
  }

  function FadeInAlert(text){
    $(".alert").show();
    $(".alert").text(text).addClass("loading");  
  }

  // function for check item images file type
  function validateFileType(value) {
    var idxDot = value.lastIndexOf(".") + 1;
    var extFile = value.substr(idxDot, value.length).toLowerCase();
    console.log(extFile);
    if (extFile == "jpg" || extFile == "jpeg" || extFile == "png" || extFile == "gif") {
      return true;
    } else {
        return false;
    }
  }

  // validating item image
  function validateItemImg() {
    var imgsizetle = ($('#shpitmimgid').val() != '' || $('#shpitmimgid').val() != '') ? $("#shpitmimgid")[0].files[0].size : 0;
    
    if($('#shpitmimgid').val() != null && $('#shpitmimgid').val() != ''){
      if(!validateFileType($('#shpitmimgid').val())){
        alert('Allowed file types are jpeg,jpg,png and gif');
        return false;
      }
      else if(validateFileType($('#shpitmimgid').val()) && imgsizetle > 2097152){
        alert('Max file size is 2Mb.');
        return false;
      }
      else {
        return true;
      }
    }
    else {
      return true;
    }
  }

  selmet.keyup(checkSellingMet);

  // validating whole journal entry add form and sumbitting data if no errors.
  $('#additemid').on('click', function (event) {
    event.preventDefault();
   	if(validateSelectionCrop()){
      if(validateSelectionItemNat()){
  			if(checkSellingMet()){
  				if(validateItemImg()){
	          $('#additemid').on('click', function (event) {
	            $('#additemfrmid').submit();
	          });
        	}
	        else {
	        	return false;
	        }
        }
        else{
          return false;
        }
      }
      else{
        return false;
      }
    }
    else{
      return false;
    }
  });

});