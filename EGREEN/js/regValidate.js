$(document).ready(function(){

	// getting input fields' id s from the registration form
	var fname=$('#firstname');
	var txtfname=$('#txtfname');
	var lname=$('#lastname');
	var txtlname=$('#txtlname');
	var uname=$('#username');
	var txtuname=$('#txtuname');
	var pword=$('#password');
	var txtpass=$('#txtpass');
	var cpword=$('#confpass');
	var txtconfpass=$('#txtconfpass');
	var insworkexp=$('#insworkexp');
	var txtinsexp=$('#txtinsexp');
	var showorkexp=$('#showorkexp');
	var txtshoexp=$('#txtshoexp');
	var helpworkexp=$('#helpworkexp');
	var txthelpexp=$('#txthelpexp');
	var pid=$('#chkPla');
	var iid=$('#chkIns');
	var sid=$('#chkShop');
	var hid=$('#chkHelp');
	var regbtn=$('#regbutton');
	var ici=$('#inscertimg').val();
	var sci=$('#shocertimg').val();
	var hci=$('#helpcertimg').val();
	var txtinscert=$('#txtinscert');
	var txtshocert=$('#txtshocert');
	var txthelcert=$('#txthelcert');
	var imgsizeins = (ici != '' || ici != '') ? $("#inscertimg")[0].files[0].size : 0;
	var imgsizesho = (sci != '' || sci != '') ? $("#shocertimg")[0].files[0].size : 0;
	var imgsizehel = (hci != '' || hci != '') ? $("#helpcertimg")[0].files[0].size : 0;
	$form = this;



var idsArr = [];

$('#regbutton').find('input[type=checkbox]:checked').each(function() {
    idsArr.push(this.value);
});

console.log(idsArr);



	$('#exIns').hide();
  $('#certIns').hide();
  $('#exHelp').hide();
  $('#certHelp').hide();
  $('#exShop').hide();
  $('#certShop').hide();

	// validation function for check fname and lname
	function chkname(name){
		var re=/^[a-z ,.'-]+$/i;
		return re.test(name.val());
	}

	// validation function for experience of instructor, shopkeeper and helper 
	function chknoofyears(years){
		var re=/^[0-9,.'-]+$/i;
		return re.test(years.val());
	}

	// validate first name
	function validateFname(){
		if(fname.val().length>2 && chkname(fname) && $.trim(fname.val()) != null && $.trim(fname.val()) != ''){
			fname.removeClass('error');
			fname.addClass('valid');
			txtfname.removeClass('error');
			txtfname.addClass('valid');
			txtfname.text('Valid first name');
			return true;
		}
		else if($.trim(fname.val()) === null || $.trim(fname.val()) === '' || !chkname(fname)) {
			fname.tooltip('show');
			fname.removeClass('valid');
			fname.addClass('error');
			txtfname.removeClass('valid');
			txtfname.addClass('error');
			txtfname.text('Invalid characters or too short');
			return false;
		}
	}

	// validate last name
	function validateLname(){
		if(lname.val().length>2 && chkname(lname) && $.trim(lname.val()) != null && $.trim(lname.val()) != ''){
			lname.removeClass('error');
			lname.addClass('valid');
			txtlname.removeClass('error');
			txtlname.addClass('valid');
			txtlname.text('Valid last name');
			return true;
		}
		else if($.trim(lname.val()) === null || $.trim(lname.val()) === '' || !chkname(lname)) {
			lname.tooltip('show');
			lname.removeClass('valid');
			lname.addClass('error');
			txtlname.removeClass('valid');
			txtlname.addClass('error');
			txtlname.text('Invalid characters or too short');
			return false;
		}
	}

	// validating username
	function validateUname() {
		if(uname.val().length>2 && uname.val().length<=12 && $.trim(uname.val()) != null && $.trim(uname.val()) != ''){
			uname.removeClass('error');
			uname.addClass('valid');
			txtuname.removeClass('error');
			txtuname.addClass('valid');
			txtuname.text('Valid username');
			return true;
		}
		else {
			uname.tooltip('show');
			uname.removeClass('valid');
			uname.addClass('error');
			txtuname.removeClass('valid');
			txtuname.addClass('error');
			txtuname.text('Too short/long, maximun 12 and minimum 3 characters');
			return false;
		}
	}

	// validating password
	function validatePword() {
		if(pword.val().length>2 && pword.val().length<=12){
			pword.removeClass('error');
			pword.addClass('valid');
			txtpass.removeClass('error');
			txtpass.addClass('valid');
			txtpass.text('Valid password');
			return true;
		}
		else {
			pword.tooltip('show');
			pword.removeClass('valid');
			pword.addClass('error');
			txtpass.removeClass('valid');
			txtpass.addClass('error');
			txtpass.text('Invalid password');
			return false;
		}
	}

	// validating confirm password
	function validateCpword() {
		if(cpword.val() === pword.val() && cpword.val() != ''){
			cpword.removeClass('error');
			cpword.addClass('valid');
			txtconfpass.removeClass('error');
			txtconfpass.addClass('valid');
			txtconfpass.text('Passwords matched');
			return true;
		}
		else {
			cpword.tooltip('show');
			cpword.removeClass('valid');
			cpword.addClass('error');
			txtconfpass.removeClass('valid');
			txtconfpass.addClass('error');
			txtconfpass.text('Passwords mismatch detected');
			return false;
		}
	}

	// validating selecting at least one checkbox
	function validateCheckbox() {
    var n = $("input:checked").length;    
	    if(n == 0) {
	    	alert('Select at least one role');
    		pid.tooltip('show');
    		iid.tooltip('show');
    		sid.tooltip('show');
    		hid.tooltip('show');
        return false;
	    } else {
        return true;
    }
  }

  // Validate instructor experience - no of years
	function validateNoOfYearsIns(){
		if(insworkexp.val()<100 && insworkexp.val()>=0 && chknoofyears(insworkexp)){
			insworkexp.removeClass('error');
			insworkexp.addClass('valid');
			txtinsexp.removeClass('error');
			txtinsexp.addClass('valid');
			txtinsexp.text('Number accepted');
			return true;
		}
		else{
			insworkexp.tooltip('show');
			insworkexp.removeClass('valid');
			insworkexp.addClass('error');
			txtinsexp.removeClass('valid');
			txtinsexp.addClass('error');
			txtinsexp.text('Invalid number');
			return false;
		}
	}

	// Validate shopkeeper experience - no of years
	function validateNoOfYearsSho(){
		if(showorkexp.val()<=100 && showorkexp.val()>=0 && chknoofyears(showorkexp)){
			showorkexp.removeClass('error');
			showorkexp.addClass('valid');
			txtshoexp.removeClass('error');
			txtshoexp.addClass('valid');
			txtshoexp.text('Number accepted');
			return true;
		}
		else{
			showorkexp.tooltip('show');
			showorkexp.removeClass('valid');
			showorkexp.addClass('error');
			txtshoexp.removeClass('valid');
			txtshoexp.addClass('error');
			txtshoexp.text('Invalid number');
			return false;
		}
	}

	// Validate helper experience - no of years
	function validateNoOfYearsHel(){
		if(helpworkexp.val()<=100 && helpworkexp.val()>=0 && chknoofyears(helpworkexp)){
			helpworkexp.removeClass('error');
			helpworkexp.addClass('valid');
			txthelpexp.removeClass('error');
			txthelpexp.addClass('valid');
			txthelpexp.text('Number accepted');
			return true;
		}
		else{
			helpworkexp.tooltip('show');
			helpworkexp.removeClass('valid');
			helpworkexp.addClass('error');
			txthelpexp.removeClass('valid');
			txthelpexp.addClass('error');
			txthelpexp.text('Invalid number');
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

  // view relavant fields instructor checkbox selection
	function validateInsCheckBox() {
		$('input[id="chkIns"]').click(function(){
			if($(iid).prop("checked") == true){
				$('#exIns').show(1000);
        $('#certIns').show(1000);
      }
      else{
        $('#exIns').hide(1000);
        $('#certIns').hide(1000);
      }
		});	
	}

	// view relavant fields shopkeeper checkbox selection
	function validateShoCheckBox() {
		$('input[id="chkShop"]').click(function(){
			if($(sid).prop("checked") == true){
				$('#exShop').show(1000);
        $('#certShop').show(1000);
      }
      else{
        $('#exShop').hide(1000);
        $('#certShop').hide(1000);
      }
		});	
	}

	// view relavant fields helper checkbox selection
	function validateHelCheckBox() {
		$('input[id="chkHelp"]').click(function(){
			if($(hid).prop("checked") == true){
				$('#exHelp').show(1000);
        $('#certHelp').show(1000);
      }
      else{
        $('#exHelp').hide(1000);
        $('#certHelp').hide(1000);
      }
		});	
	}

	// validating instructor sub form experience and certificate
	function validateInsSubForm() {
		var imgsizeins = ($('#inscertimg').val() != '' || $('#inscertimg').val() != '') ? $("#inscertimg")[0].files[0].size : 0;
		if($(iid).prop("checked") == true && !validateNoOfYearsIns()){
			alert('Enter valid number 0-99 for instructor experience.');
			return false;
		}
		if($(iid).prop("checked") == true && ($('#inscertimg').val() == null || $('#inscertimg').val() == '')){
			alert('Upload certificate image for instructor.');
			return false;
		}
		else if($(iid).prop("checked") == true && !validateFileType($('#inscertimg').val())){
			alert('Allowed file types are jpeg,jpg and png for Instructor certificate');
			return false;
		}
		else if($(iid).prop("checked") == true && validateFileType($('#inscertimg').val()) && imgsizeins > 2097152){
			alert('Max file size is 2Mb for Instructor certificate');
			return false;
		}
		else {
			return true;
		}
	}

	// validating shopkeeper sub form experience and certificate
	function validateShoSubForm() {
		var imgsizesho = ($('#shocertimg').val() != '' || $('#shocertimg').val() != '') ? $("#shocertimg")[0].files[0].size : 0;
		if($(sid).prop("checked") == true && !validateNoOfYearsSho()){
			alert('Enter valid number 0-99 for shopkeeper experience.');
			return false;
		}
		if($(sid).prop("checked") == true && ($('#shocertimg').val() == null || $('#shocertimg').val() == '')){
			alert('Upload certificate image for shopkeeper.');
			return false;
		}
		else if($(sid).prop("checked") == true && !validateFileType($('#shocertimg').val())){
			alert('Allowed file types are jpeg,jpg and png for shopkeeper certificate');
			return false;
		}
		else if($(sid).prop("checked") == true && validateFileType($('#shocertimg').val()) && imgsizesho > 2097152){
			alert('Max file size is 2Mb for shopkeeper certificate');
			return false;
		}
		else {
			return true;
		}
	}

	// validating helper sub form experience and certificate
	function validateHelSubForm() {
		var imgsizehel = ($('#helpcertimg').val() != '' || $('#helpcertimg').val() != '') ? $("#helpcertimg")[0].files[0].size : 0;
		if($(hid).prop("checked") == true && !validateNoOfYearsHel()){
			alert('Enter valid number 0-99 for helper experience.');
			return false;
		}
		if($(hid).prop("checked") == true && ($('#helpcertimg').val() == null || $('#helpcertimg').val() == '')){
			alert('Upload certificate image for helper.');
			return false;
		}
		else if($(hid).prop("checked") == true && !validateFileType($('#helpcertimg').val())){
			alert('Allowed file types are jpeg,jpg and png for helper certificate');
			return false;
		}
		else if($(hid).prop("checked") == true && validateFileType($('#helpcertimg').val()) && imgsizehel > 2097152){
			alert('Max file size is 2Mb for helper certificate');
			return false;
		}
		else {
			return true;
		}
	}

 	fname.keyup(validateFname);
	lname.keyup(validateLname);
	uname.keyup(validateUname);
	pword.keyup(validatePword);
	cpword.keyup(validateCpword);
	insworkexp.keyup(validateNoOfYearsIns);
	showorkexp.keyup(validateNoOfYearsSho);
	helpworkexp.keyup(validateNoOfYearsHel);
	validateInsCheckBox();
	validateShoCheckBox();
	validateHelCheckBox();

	// validating whole registration form and sumbitting data if no errors.
	$('#regbutton').on('click', function (event) {
		event.preventDefault();
		if(validateFname()){
			if(validateLname()){
				if(validateUname()){
					if(validatePword()){
						if(validateCpword()){
							if(validateCheckbox()){
								if(validateInsSubForm()){
									if(validateShoSubForm()){
										if(validateHelSubForm()){
											$('#regbutton').on('click', function (event) {
												$('#regform1').submit();
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
				}
				else{
					return false;
				}
			}
			else{
				return false;
			}
		}
		else {
			return false;
		}
	});

	$('#login').click(function() {
		window.location.href = 'login.php';
	});
});