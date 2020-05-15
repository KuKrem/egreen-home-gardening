$(document).ready(function(){

	var shname=$('#shpnmid');
	var txtshpnm=$('#txtshpnm');
	var shaddr=$('#shpaddrsid');
	var txtshpaddrs=$('#txtshpaddrs');
	var shtel=$('#shptlid');
	var txtshptel=$('#txtshptel');
	var state=false;

	// validation function for check telephone number
  function chkconnumb(cno){
    var re=/^(?:0|94|\+94|0094)?(?:(11|21|23|24|25|26|27|31|32|33|34|35|36|37|38|41|45|47|51|52|54|55|57|63|65|66|67|81|91)(0|2|3|4|5|7|9)|7(0|1|2|5|6|7|8)\d)\d{6}$/;
    return re.test(cno.val());
  }

	// validate shop name
	function validateShname(){
		if(shname.val().length>3){
			shname.removeClass('error');
			shname.addClass('valid');
			txtshpnm.removeClass('error');
			txtshpnm.addClass('valid');
			txtshpnm.text('Valid shop name');
			return true;
		}
		else {
			shname.tooltip('show');
			shname.removeClass('valid');
			shname.addClass('error');
			txtshpnm.removeClass('valid');
			txtshpnm.addClass('error');
			txtshpnm.text('Invalid shop name');
			return false;
		}
	}

	// check existance of the shop name
	function checkSnExistance() {
    var shpchk = shname.val();
    if (shpchk != '' && shpchk != null) {
      $.post('check-shopname-exist.php', {shopchk:shpchk}, function(data){
        if(data!=0){
          shname.removeClass('valid');
          shname.addClass('error');
          txtshpnm.removeClass('valid');
          txtshpnm.addClass('error');
          txtshpnm.text("Shop name already exists");
          state=false;
        } 
        else {
          shname.removeClass('error');
          shname.addClass('valid');
          txtshpnm.removeClass('error');
          txtshpnm.addClass('valid');
          txtshpnm.text("New shop...!");
          state=true;
        }
      });
    }
    else {
      shname.removeClass('valid');
      shname.addClass('error');
      txtshpnm.removeClass('valid');
      txtshpnm.addClass('error');
      txtshpnm.text("Enter valid shop name");
      state=false;
    } 
    return state;
  }

	// validate shop address
	function validateShaddrs(){
		if(shaddr.val().length>15 && shaddr.val().length<200){
			shaddr.removeClass('error');
			shaddr.addClass('valid');
			txtshpaddrs.removeClass('error');
			txtshpaddrs.addClass('valid');
			txtshpaddrs.text('Valid shop address');
			return true;
		}
		else {
			shaddr.tooltip('show');
			shaddr.removeClass('valid');
			shaddr.addClass('error');
			txtshpaddrs.removeClass('valid');
			txtshpaddrs.addClass('error');
			txtshpaddrs.text('Invalid shop address');
			return false;
		}
	}

	// validate shop telephone
	function validateShtel(){
		if(chkconnumb(shtel)){
			shtel.removeClass('error');
			shtel.addClass('valid');
			txtshptel.removeClass('error');
			txtshptel.addClass('valid');
			txtshptel.text('Valid telephone number.');
			return true;
		}
		else {
			shtel.tooltip('show');
			shtel.removeClass('valid');
			shtel.addClass('error');
			txtshptel.removeClass('valid');
			txtshptel.addClass('error');
			txtshptel.text('Invalid telephone number.');
			return false;
		}
	}

	shname.keyup(validateShname);
	shaddr.keyup(validateShaddrs);
	shtel.keyup(validateShtel);

	$('#creatshpid').on('click', function (event) {
		// event.preventDefault();
		if(validateShname()){
			if(checkSnExistance()==true){
				if(validateShaddrs()){
					if(validateShtel()){
						$('#creatshpid').on('click', function (event) {
							$('#shopcrid').submit();
						});
					}
					else {
						alert("Enter valid telephone number");
						return false;
					}
				}
				else {
					alert("Enter valid address.");
					return false;
				}			
			}
			else {
				alert("Shop name already exist.");
				return false;
			}
		}
		else {
			alert("Enter valid shop name.");
			return false;
		}		
	});		

});