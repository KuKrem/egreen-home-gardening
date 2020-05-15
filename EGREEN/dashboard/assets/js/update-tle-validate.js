$(document).ready(function(){

  var daynumb=$('#dayno');
  var descr=$('#decript');
  var tleimage=$('#entryimg').val();
  var imgsizetle = (tleimage != '' || tleimage != '') ? $("#entryimg")[0].files[0].size : 0;
  var txtdayno=$('#txtdayno');
  var txtdescrip=$('#txtdescrip');
  var tleid=$('#timleid');
  var tleimage=$('#tleimgid');

  // validation function for check day number
  function chkdaynum(num){
    var re=/^[1-9][0-9]*$/;
    return re.test(num.val());
  }

  function readURL(input) { 
    if (input.files && input.files[0]) {  
      var reader = new FileReader();
      var filename = $("#entryimg").val();
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

  $("#entryimg").on('click',function(){      
    //RecurFadeIn();
  });

  $("#entryimg").change(function(event) {  
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
  function checkTimelineEImageNo(){
     // $('#blah').attr('src').change(function() {
      // alert($('#blah').attr('src'));
    // $('#blah').contentchanged() {
    //   alert('changed');
    if($('#blah').attr('src')=="../images/tlimg/author-img1.jpg"){
      $('#rmvtleimg').hide();
    }
    // else if($('#blah').attr('src')!="../images/tlimg/author-img1.jpg"){
    //   $('#rmvtleimg').show();
    // }
    // });
  }

  // // check timeline entry image is a uploded one.
 //  $('#blah').attr('src').change(function() {
 //  // function checkTimelineEImageYes(){
 //    // $('#blah').contentchanged() {
 //      if($('#blah').attr('src')!="../images/tlimg/author-img1.jpg") {
 //        $('#rmvtleimg').show();
 //      }
 //    // }
 //    // checkTimelineEImageYes();   
 // });
// checkTimelineEImageYes();

  // validating timeline day number
  function checkDayNumber() {
    if(daynumb.val()<1100 && daynumb.val()>0 && chkdaynum(daynumb)){
      daynumb.removeClass('error');
      daynumb.addClass('valid');
      txtdayno.removeClass('error');
      txtdayno.addClass('valid');
      txtdayno.text('Valid day number');
      return true;
    } 
    else {
      daynumb.tooltip('show');
      daynumb.removeClass('valid');
      daynumb.addClass('error');
      txtdayno.removeClass('valid');
      txtdayno.addClass('error');
      txtdayno.text('Invalid day number. It should be between 0-1100');
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

  // function for check certificate images file type
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

  // validating timeline entry image
  function validateTimelineImg() {
    var imgsizetle = ($('#entryimg').val() != '' || $('#entryimg').val() != '') ? $("#entryimg")[0].files[0].size : 0;
    
    if($('#entryimg').val() != null && $('#entryimg').val() != ''){
      if(!validateFileType($('#entryimg').val())){
        alert('Allowed file types are jpeg,jpg,png and gif');
        return false;
      }
      else if(validateFileType($('#entryimg').val()) && imgsizetle > 2097152){
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

  daynumb.keyup(checkDayNumber);
  descr.keyup(checkDescription);
  checkTimelineEImageNo();
  // checkTimelineEImageYes();

  // cornfirm of removing timeline image
  $("#rmvtleimg").click(function(e){
    e.preventDefault();
    var id_tle = tleid.val();
    var img_path = tleimage.val();
    if(confirm('Are you sure to remove timeline entry image ?')) {
      $.post('remove-tle-img.php', {id:id_tle, img:img_path}, function(data){
        if(data!=0){
          alert ("Timeline entry image was removed successfully.");
          $('#blah').attr('src', "../images/tlimg/author-img1.jpg");
          location.reload();
          // state = false;
        } 
        else {
          alert ("Timeline entry image cannot be removed.");
        }
      });  
    } 
    else {
      alert ("Kept image..!");
    }
  });

  // validating whole registration form and sumbitting data if no errors.
  $('#tleupdate').on('click', function (event) {
    event.preventDefault();
    if(checkDayNumber()){
      if(checkDescription()){
        if(validateTimelineImg()){
          $('#tleupdate').on('click', function (event) {
            $('#tlentryupform').submit();
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
