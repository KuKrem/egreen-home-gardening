$(document).ready(function(){

  // getting input fields' id s from the registration form
  var cn=$('#cropname');
  var txtcropname=$('#txtcropname');
  var state = false;

  // function for checking crop name
  function chkcropname(name) {
    var crp = /^[A-Z][a-z]+\D+/;
    return crp.test(name.val());
  }

  // validating crop name
  function validateCropname(){
    if(cn.val().length>2 && chkcropname(cn) && $.trim(cn.val()) != null && $.trim(cn.val()) != ''){
      cn.removeClass('error');
      cn.addClass('valid');
      txtcropname.removeClass('error');
      txtcropname.addClass('valid');
      txtcropname.text('Valid crop name');
      return true;
    }
    else if($.trim(cn.val()) === null || $.trim(cn.val()) === '' || !chkcropname(cn)) {
      cn.tooltip('show');
      cn.removeClass('valid');
      cn.addClass('error');
      txtcropname.removeClass('valid');
      txtcropname.addClass('error');
      txtcropname.text('Invalid characters or too short, minimum 3 characters');
      return false;
    }
  }

  function checkExistance() {
   var crpchk = cn.val();
   if (crpchk != '' && crpchk != null) {
    $.post('check-crop-exist.php', {cropchk:crpchk}, function(data){
      if(data!=0){
        cn.removeClass('valid');
        cn.addClass('error');
        txtcropname.removeClass('valid');
        txtcropname.addClass('error');
        txtcropname.text("Crop already exists");
        state=false;
      } 
      else {
        cn.removeClass('error');
        cn.addClass('valid');
        txtcropname.removeClass('error');
        txtcropname.addClass('valid');
        txtcropname.text("Crop name updated...!");
        state=true;
      }
    });
   }
   else {
    cn.removeClass('valid');
    cn.addClass('error');
    txtcropname.removeClass('valid');
    txtcropname.addClass('error');
    txtcropname.text("Enter valid crop name");
    state=true;
   } 
   return state;
  }

  cn.keyup(validateCropname);
       

  $('#adcrpbtn').click(function(){
    var all = $('#add_crop').serialize();
  
    if(validateCropname()){
      if(checkExistance()==true){
        $('#add_crop').submit();
        $.alert({
          title: 'Alert!',
          content:'Crop updated successfully',          
        });
        // alert('Crop updated successfully');
      }else{
        return false;
      }
    }
    else {
      $.alert({
        title: 'Alert!',
        content:'Please enter a valid "Crop Name". First letter should be capital'
      });
      // alert('Please enter a valid "Crop Name". First letter should be capital');
      return false;
    }
  });
});