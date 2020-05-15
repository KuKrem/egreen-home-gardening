$(document).ready(function(){

  $("#cmntadd<?php echo $result['np_id']; ?>").click(function(){
    // reset code
    var npostid=$('jentid<?php echo $result['jentry_id']; ?>');
    var comentid="cmntid<?php echo $result['np_id']; ?>";
    var comentimg="cmntimgid<?php echo $result['np_id']; ?>";
    var user="userid<?php echo $result['jentry_id']; ?>";

    // var bdgtoclr = "badge<?php echo $result['journal_id']; ?>";
    // var noofunseen = "<?php echo $unseen_notif; ?>";
    // var slctdjid = "<?php echo $result['journal_id']; ?>";
    alert(npostid+" "+comentid+" "+comentimg+" "+user);
    // if (noofunseen>0) {
    //   $.post('set-seen-noti.php', {id:slctdjid, num:noofunseen}, function(data){
    //     if(data!=0){
    //       $("#badge<?php echo $result['journal_id']; ?>").text('0');
    //       // bdgtoclr = 0;
    //     }
    //   });
    // }
  });
})