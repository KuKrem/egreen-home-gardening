$(document).ready(function(){
	var jname=$('#journid');
	var txtjourname=$('#txtjourname');
  var tid=$('#townid');
  var numger=$('#numofgid');
  var txtnumofger=$('#txtnumofger');

  // validation function for number of germinators
  function chkdaynum(num){
    var re=/^[1-9][0-9]*$/;
    return re.test(num.val());
  }

	// validating journal name
  function validateJournalnname(){
    if(jname.val().length>2 && $.trim(jname.val()) != null && $.trim(jname.val()) != ''){
      jname.removeClass('error');
      jname.addClass('valid');
      txtjourname.removeClass('error');
      txtjourname.addClass('valid');
      txtjourname.text('Valid Journal name');
      return true;
    }
    else if(jname.val().length<3 || $.trim(jname.val()) === null || $.trim(jname.val()) === '') {
      jname.tooltip('show');
      jname.removeClass('valid');
      jname.addClass('error');
      txtjourname.removeClass('valid');
      txtjourname.addClass('error');
      txtjourname.text('Too short, minimum 3 characters');
      return false;
    }
  }

  // validating timeline day number
  function checkNumOfGermin() {
    if(numger.val()>0 && chkdaynum(numger)){
      numger.removeClass('error');
      numger.addClass('valid');
      txtnumofger.removeClass('error');
      txtnumofger.addClass('valid');
      txtnumofger.text('Valid number');
      return true;
    } 
    else {
      numger.tooltip('show');
      numger.removeClass('valid');
      numger.addClass('error');
      txtnumofger.removeClass('valid');
      txtnumofger.addClass('error');
      txtnumofger.text('Invalid number. It should be greater than 0');
      return false;
    }
  }

  // check whether the value of crop dropdown greater than 0
  function validateSelectionCrop() {
    var croid = $("#cropid option:selected").val()
    if(croid==0) {
      alert("Please select the crop before a journal to be created.!");
      return false;
    }
    else {
      return true;
    }
  }

  // check whether the value of province dropdown greater than 0
  function validateSelectionPro() {
    var proid = $("#provinceid option:selected").val()
    if(proid==0) {
      alert("Please select the province before a journal to be created.!");
      return false;
    }
    else {
      return true;
    }
  }

  // check whether the value of town dropdown greater than 0
  function validateSelectionTown() {
    var towid = $("#townid option:selected").val()
    // var toid = tid.val();
    // if ($('#townid option').length == 0) {
    // if(toid == null ) {
    var toid = $('#townid option').length
    if(toid == 0 || towid == 0){
    // if ($("select#townid").children().size() == 1) {
      alert("Seems that your region still not added to the database. Sorry for the inconvenience..! It will be added soon.");
      return false;
    }
    else {
      return true;
    }
  }

  // according to selected province load districts to second drop down
  $("#provinceid").change(function() {
    if ($(this).data('options') === undefined) {
      /*Taking an array of all options-2 and kind of embedding it on the provinceid*/
      $(this).data('options', $('#districtid option').clone());
    }

    $('#districtid').empty();
    var id = $(this).val();
    $.post('districts.php',{proid:id},
    function(return_data){
      $.each(return_data.data, function(key,value){
        $("#districtid").append("<option value='" + value.district_id +"'>"+value.dis_name+"</option>");
      });
    },"json")
  });

  // according to selected district load towns(regions) to third drop down
  $("#districtid").change(function() {
    if ($(this).data('options') === undefined) {
      /*Taking an array of all options-2 and kind of embedding it on the districtid*/
      $(this).data('options', $('#townid option').clone());
    }

    $('#townid').empty();
    var id = $(this).val();
    $.post('regions.php',{proid:id},
    function(return_data){
      $.each(return_data.data, function(key,value){
        $("#townid").append("<option value='" + value.region_id +"'>"+value.town+"</option>");
      });
    },"json")
  });

  jname.keyup(validateJournalnname);
  numger.keyup(checkNumOfGermin);

  //  submitting form data
  $('#creajourid').on('click', function (event) {
    event.preventDefault();
    if(validateJournalnname()){
      if(validateSelectionCrop()){
        if(checkNumOfGermin()){
          if(validateSelectionPro()){
            if(validateSelectionTown()){
              // if(checkExistance()==true){
              // if(validateSelectionPro()) {
              // $('#creajourid').on('click', function (event) {
              $('#addjourid').submit();
              // });
            }
            else {
              return false;
            }
          }
          else {
            return false;
          }
        }
        else {
          alert('Please enter a valid number of germinators.');
          return false;
        }
      }
      else{
        return false;
      }
    }
    else {
      alert('Please enter a valid "Journal Name".');
      return false;
    }
  });
})
