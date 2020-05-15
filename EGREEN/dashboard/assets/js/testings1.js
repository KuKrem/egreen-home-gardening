$('#rmvtleimg').on('click', function (event) {
    function ConfirmRemoveImg() {
      // console.log("eeeeeeee");
      var x = confirm("Are you sure you want to remove timeline image?");
      console.log("eeeeeeee");
      if (x)
        $.ajax({
          // console.log("eeeeeeee");
        url:"update-tl-entry-save.php", //the page containing php script
        type: "POST", //request type
        // success:function(result){
         // alert(result);
       // }
      });
    }
    ConfirmRemoveImg();
  });


// --------------------------------------------------------------
    

    // alert (img_path);

$.ajax({
        type: 'post',
        url: 'remove-tle-img.php',
        data: {
          id: id_tle,
          img: img_path
        },
        success: function(response) {
          // alert(response);
          if(response == "success") {
                $('#blah').attr('src', "a.jpg");
                alert("Timeline entry image removed successfully");
            } else if(response == "error") {
                 alert('Something is wrong');
            }
          // // $("#"+id).remove();
          
        },
        error: function() {
           alert('Something is wrong');
        }
      });

// ---------------------------------------------------


  // if(isset($_POST['remvtleimg'])){
//   if(isset($_GET['id'])){
//     $timelnenid=$_POST['tileid'];
//     $photoname = $_POST['tleimg'];
//     if (!unlink($photoname)) {
//       $_SESSION['error']="Timeline image cannot be removed.!";
//       // echo ("Error deleting $photoname");
//       header('Location: update-tl-entry.php?tleid='.$timelnenid);
//     }
//     else {
//       $_SESSION['success']="Timeline image removed successfully.!";
//       // echo ("Error deleting $photoname");
//       header('Location: update-tl-entry.php?tleid='.$timelnenid);
//     }
// }


=======================================================================================

// $('#cmntimgid<?php echo $result['np_id']; ?>').on("change", function(){ 
                              // uploadFile(); });

                            // $("#cmntimgid<?php echo $result['np_id']; ?>").click(function(){
                              function readURL(input) {   
                              if (input.files && input.files[0]) {   
                                var reader = new FileReader();
                                var filename = $("#cmntimgid<?php echo $result['np_id']; ?>").val();
                                filename = filename.substring(filename.lastIndexOf('\\')+1);
                                reader.onload = function(e) {
                                  debugger;      
                                  $('#blah<?php echo $result['np_id']; ?>').attr('src', e.target.result);
                                  $('#blah<?php echo $result['np_id']; ?>').hide();
                                  $('#blah<?php echo $result['np_id']; ?>').fadeIn(500);      
                                  $('.custom-file-label').text(filename);             
                                }
                                reader.readAsDataURL(input.files[0]);    
                                  } 
                                  
                                  $(".alert").removeClass("loading").hide();
                                }

                                $("#cmntimgid<?php echo $result['np_id']; ?>").on('click',function(){      
                                  //RecurFadeIn();
                                });

                                $("#cmntimgid<?php echo $result['np_id']; ?>").change(function(event) {  
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
                            // });      