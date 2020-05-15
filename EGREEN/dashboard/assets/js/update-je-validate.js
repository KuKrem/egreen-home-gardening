$(document).ready(function(){

  var numger=$('#noofgerid');
  var descr=$('#decript');
  var jeimage=$('#jeimageid').val();
  var imgsizetle = (jeimage != '' || jeimage != '') ? $("#jeimageid")[0].files[0].size : 0;
  var txtnoofger=$('#txtnoofger');
  var txtdescrip=$('#txtdescrip');  
  var jenid=$('#jentid');  
  var jentimgid=$('#jeimgid');

  // validation function for check day number of germinators
  function chknoofgernum(num){
    var re=/^[1-9][0-9]*$/;
    return re.test(num.val());
  }

  function readURL(input) {   
    if (input.files && input.files[0]) {   
      var reader = new FileReader();
      var filename = $("#jeimageid").val();
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

  $("#jeimageid").on('click',function(){      
    //RecurFadeIn();
  });

  $("#jeimageid").change(function(event) {  
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

  // check timeline entry image is the default one
  function checkJEntryImageNo(){
    if($('#blah').attr('src')=="../images/jrnimg/author-img1.jpg"){
      $('#rmvjeimgid').hide();
    }
  }

  // validating journal entry number of germinators
  function checkNumberofGer() {
    if(numger.val()<100 && numger.val()>0 && chknoofgernum(numger)){
      numger.removeClass('error');
      numger.addClass('valid');
      txtnoofger.removeClass('error');
      txtnoofger.addClass('valid');
      txtnoofger.text('Valid number');
      return true;
    } 
    else {
      numger.tooltip('show');
      numger.removeClass('valid');
      numger.addClass('error');
      txtnoofger.removeClass('valid');
      txtnoofger.addClass('error');
      txtnoofger.text('Invalid number.');
      return false;
    }
  }

  // validating timeline description
  function checkDescription() {
    if(descr.val().length<300 && descr.val().length>5){
      descr.removeClass('error');
      descr.addClass('valid');
      txtdescrip.removeClass('error');
      txtdescrip.addClass('valid');
      txtdescrip.text('Valid length');
      return true;
    } 
    else {
      descr.tooltip('show');
      descr.removeClass('valid');
      descr.addClass('error');
      txtdescrip.removeClass('valid');
      txtdescrip.addClass('error');
      txtdescrip.text('Too short/long. Max length 300, Min length 5');
      return false;
    }
  }

  // function for check journal entry images file type
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

  // validating journal entry image
  function validateJentryImg() {
    var imgsizetle = ($('#jeimageid').val() != '' || $('#jeimageid').val() != '') ? $("#jeimageid")[0].files[0].size : 0;
    
    if($('#jeimageid').val() != null && $('#jeimageid').val() != ''){
      if(!validateFileType($('#jeimageid').val())){
        alert('Allowed file types are jpeg,jpg,png and gif');
        return false;
      }
      else if(validateFileType($('#jeimageid').val()) && imgsizetle > 2097152){
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

  numger.keyup(checkNumberofGer);
  descr.keyup(checkDescription);

  // cornfirm of removing journal entry image
  $("#rmvjeimgid").click(function(e){
    e.preventDefault();
    var id_tle = jenid.val();
    var img_path = jentimgid.val();
    if(confirm('Are you sure to remove journal entry image ?')) {
      $.post('remove-je-img.php', {id:id_tle, img:img_path}, function(data){
        if(data!=0){
          alert ("Journal entry image was removed successfully.");
          $('#blah').attr('src', "../images/jrnimg/author-img1.jpg");
          location.reload();
          // state = false;
        } 
        else {
          alert ("Journal entry image cannot be removed.");
        }
      });  
    } 
    else {
      alert ("Kept image..!");
    }
  });

  // validating whole journal entry add form and sumbitting data if no errors.
  $('#jeadd').on('click', function (event) {
    event.preventDefault();
    if(checkNumberofGer()){
      if(checkDescription()){
        if(validateJentryImg()){
          $('#jeadd').on('click', function (event) {
            $('#jentryform').submit();
          });
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

})

