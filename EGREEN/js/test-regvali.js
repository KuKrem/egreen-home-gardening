// validate last name
	function validateLname(){
		if(lname.val().length<3){
			lname.removeClass('valid');
			lname.addClass('error');
			txtlname.removeClass('valid');
			txtlname.addClass('error');
			txtlname.text('Last Name must be 3 character or more');
			return false;
		}
		else{
			if(chkname(lname)){
				lname.removeClass('error');
				lname.addClass('valid');
				txtlname.removeClass('error');
				txtlname.addClass('valid');
				txtlname.text('Valid Last name');
				return true;
			}
			else{
				lname.removeClass('valid');
				lname.addClass('error');
				txtlname.removeClass('valid');
				txtlname.addClass('error');
				txtlname.text('Invalid characters');
				return false;
			}
			else {
				name.tooltip('show');
			}
		}
	}

	// validate username
	function validateUname(){
		if(uname.val().length>10 || uname.val().length<3){
			uname.removeClass('valid');
			uname.addClass('error');
			txtuname.removeClass('valid');
			txtuname.addClass('error');
			txtuname.text('Username must be between 3 and 10 characters');
			return false;
		}
		else{
				uname.removeClass('error');
				uname.addClass('valid');
				txtuname.removeClass('error');
				txtuname.addClass('valid');
				txtuname.text('Valid username');
				return true;
		}
	}

	// Validate password
	function validatePword(){
		if(pword.val().length>12 || pword.val().length<3){
			pword.removeClass('valid');
			pword.addClass('error');
			txtpass.removeClass('valid');
			txtpass.addClass('error');
			txtpass.text('Password should be equal or less than 12 characters');
			return false;
		}
		else{
			pword.removeClass('error');
			pword.addClass('valid');
			txtpass.removeClass('error');
			txtpass.addClass('valid');
			txtpass.text('Valid Password');
			return true;
		}
	}

	// validate confirm password
	function validateCpword(){
		if(pword.val() === cpword.val() && cpword.val() != ''){
			cpword.removeClass('error');
			cpword.addClass('valid');
			txtconfpass.removeClass('error');
			txtconfpass.addClass('valid');
			txtconfpass.text('Passwords matched');
			return true;
		}
		else{
			cpword.removeClass('valid');
			cpword.addClass('error');
			txtconfpass.removeClass('valid');
			txtconfpass.addClass('error');
			txtconfpass.text('Password mismatch detected');
			return false;
		}
	}

	// validating certificate images
	function validateFileType(value) {
    var idxDot = value.lastIndexOf(".") + 1;
    var extFile = value.substr(idxDot, value.length).toLowerCase();
	  console.log(extFile);
    if (extFile == "jpg" || extFile == "jpeg" || extFile == "png") {
     	return true;
    } else {
      	return false;
    }
  }

  // validating instructor certificate
  function validInsCert() {
  	var ici_size = (ici != '' || ici != '') ? $("#inscertimg")[0].files[0].size : 0;
  	if (ici != '' && ici != null) {
      // alert("Please upload valid file.!");
      return false;
    } else if (ici != '' && ici != null && ici_size > 3000000) {
        // alert("Image size should be less than 3MB.!");
        return false; 
  	}
  }

  // validating shopkeeper certificate
  function validShoCert() {
  	var sci_size = (sci != '' || sci != '') ? $("#shocertimg")[0].files[0].size : 0;
  	if (sci != '' && sci != null) {
      // alert("Please upload valid file.!");
      return false;
    } else if (sci != '' && sci != null && sci_size > 3000000) {
      // alert("Image size should be less than 3MB.!");
      return false; 
  	}
  }

  // validating helper certificate
  function validHelCert() {
  	var hci_size = (hci != '' || hci != '') ? $("#helpcertimg")[0].files[0].size : 0;
  	if (hci != '' && hci != null) {
      // alert("Please upload valid file.!");
      return false;
    } else if (hci != '' && hci != null && hci_size > 3000000) {
        // alert("Image size should be less than 3MB.!");
        return false; 
  	}
  }

	// validating selecting at least one checkbox
	function validateCheckBox() {
		if(pid.prop("checked")===false && iid.prop("checked")===false && sid.prop("checked")===false && hid.prop("checked")===false){
			alert ("Please select at least one role...!");
			return false;
		}
		else {
			return true;
		}
	}
	
	// validating instructor block in register form
	function validateInsBlock() {
		if (iid.prop("checked")===true && !validateNoOfYearsIns()) {
			alert("Please enter at least 0 as the instructor experience.");
			return false;
		}
		else if (iid.prop("checked")===true && (ici != '' || ici != null)) {
			alert("Please upload an image for instructor certificate.");
			return false;
		}
		else if (iid.prop("checked")===true !validateFileType(ici)) {
			alert("Please upload valid file type for instructor certificate (jpg/jpeg/png)");
			return false;
		}
		else if (iid.prop("checked")===true !validInsCert()) {
			alert("Instructor certificate image size should be less than 3MB.!");
			return false;
		}
		else {
			return true;
		}
	}

	// validating shopkeeper block in register form
	function validateShoBlock() {
		if (sid.prop("checked")===true && !validateNoOfYearsSho()) {
			alert("Please enter at least 0 as the shopkeeper experience.");
			return false;
		}
		else if (sid.prop("checked")===true && (sci != '' || sci != null)) {
			alert("Please upload an image for shopkeeper certificate.");
			return false;
		}
		else if (sid.prop("checked")===true !validateFileType(sci)) {
			alert("Please upload valid file type for shopkeeper certificate (jpg/jpeg/png)");
			return false;
		}
		else if (sid.prop("checked")===true !validShoCert()) {
			alert("shopkeeper certificate image size should be less than 3MB.!");
			return false;
		}
		else {
			return true;
		}
	}

	// validating helper block in register form
	function validateHelBlock() {
		if (hid.prop("checked")===true && !validateNoOfYearsHelp()) {
			alert("Please enter at least 0 as the helper experience.");
			return false;
		}
		else if (hid.prop("checked")===true && (hci != '' || hci != null)) {
			alert("Please upload an image for helper certificate.");
			return false;
		}
		else if (hid.prop("checked")===true !validateFileType(hci)) {
			alert("Please upload valid file type for helper certificate (jpg/jpeg/png)");
			return false;
		}
		else if (hid.prop("checked")===true !validHelCert()) {
			alert("Helper certificate image size should be less than 3MB.!");
			return false;
		}
		else {
			return true;
		}
	}

	// Validate instructor experience - no of years
	function validateNoOfYearsIns(){
		if(insworkexp.val().length>2){
			insworkexp.removeClass('valid');
			insworkexp.addClass('error');
			txtinsexp.removeClass('valid');
			txtinsexp.addClass('error');
			txtinsexp.text('Invalid number');
			return false;
		}
		else{
			if(chknoofyears(insworkexp)){
				insworkexp.removeClass('error');
				insworkexp.addClass('valid');
				txtinsexp.removeClass('error');
				txtinsexp.addClass('valid');
				txtinsexp.text('Number accepted');
				return true;
			}
			else{
				insworkexp.removeClass('valid');
				insworkexp.addClass('error');
				txtinsexp.removeClass('valid');
				txtinsexp.addClass('error');
				txtinsexp.text('Invalid number');
				return false;
			}
		}
	}

	// Validate shopkeeper experience - no of years
	function validateNoOfYearsSho(){
		if(showorkexp.val().length>2){
			showorkexp.addClass('error');
			txtshoexp.removeClass('valid');
			txtshoexp.addClass('error');
			txtshoexp.text('Invalid number');
			return false;
		}
		else{
			if(chknoofyears(showorkexp)){
				showorkexp.removeClass('error');
				showorkexp.addClass('valid');
				txtshoexp.removeClass('error');
				txtshoexp.addClass('valid');
				txtshoexp.text('Number accepted');
				return true;
			}
			else{
				showorkexp.removeClass('valid');
				showorkexp.addClass('error');
				txtshoexp.removeClass('valid');
				txtshoexp.addClass('error');
				txtshoexp.text('Invalid number');
				return false;
			}
		}
	}

	// Validate helper experience - no of years
	function validateNoOfYearsHelp(){
		if(helpworkexp.val().length>2){
			helpworkexp.addClass('error');
			txthelpexp.removeClass('valid');
			txthelpexp.addClass('error');
			txthelpexp.text('Invalid number');
			return false;
		}
		else{
			if(chknoofyears(helpworkexp)){
				helpworkexp.removeClass('error');
				helpworkexp.addClass('valid');
				txthelpexp.removeClass('error');
				txthelpexp.addClass('valid');
				txthelpexp.text('Number accepted');
				return true;
			}
			else{
				helpworkexp.removeClass('valid');
				helpworkexp.addClass('error');
				txthelpexp.removeClass('valid');
				txthelpexp.addClass('error');
				txthelpexp.text('Invalid number');
				return false;
			}
		}
	}

	fname.keyup(validateFname);
	lname.keyup(validateLname);
	uname.keyup(validateUname);
	pword.keyup(validatePword);
	cpword.keyup(validateCpword);
	insworkexp.keyup(validateNoOfYearsIns);
	showorkexp.keyup(validateNoOfYearsSho);
	helpworkexp.keyup(validateNoOfYearsHelp);
	// regbtn.button().click(validateCheckBox);


	$("form").submit(function(event) {
		if($.trim(fname.val()) === "" || $.trim(lname.val()) === "" || $.trim(uname.val()) === "" || $.trim(pword.val()) === "" || $.trim(cpword.val()) === "" || !validateCheckBox() || !validateInsBlock() || !validateShoBlock() || !validateHelBlock()){
			event.preventDefault();
			fname.tooltip('show');
			lname.tooltip('show');
			uname.tooltip('show');
			pword.tooltip('show');
			cpword.tooltip('show');
			pid.tooltip('show');
			iid.tooltip('show');
			sid.tooltip('show');
			hid.tooltip('show');
			return false;
		}
	});


	 // function for check experience of roles without planter
  function validateExpNo(num) {
  	if (num.val().length>2 || !chknoofyears(num)){
  		return false;
  	}
  	else {
  		return true;
  	}
  }



  // if ($('iid').attr('checked')===true) {
		// if (iid.prop("checked") == true){
			$('input[type="checkbox"]').click(function(){
			if($(iid).prop("checked") == true){
			if(!validateNoOfYearsIns(insworkexp)) {
				alert ('Enetr valid number 0-99 for instructor experience.');
				insworkexp.focus();
				return false;
			}
			else if (ici == '' && ici == null) {
				alert ('Instructor certificate can\'t be empty');
				return false;
			}
			else if (ici != '' && ici != null && !validateFileType(ici)) {
				alert('Allowed file types are jpeg,jpg and png for Instructor certificate');
				return false;
			}
			else if (ici != '' && ici != null && !validateFileSize(ici)) {
				alert('Max file size 3Mb for Instructor Certificate');
				return false;
			}
			else {
				return true;
			}
		}
		// else {
		// 	alert('goog');
		// }
	});	



function validateInsBlock() {
		$('input[id="chkIns"]').click(function(){
      if($(iid).prop("checked") == true){
        alert("Checkbox is checked.");
      }
      else if($(iid).prop("checked") == false){
        alert("Checkbox is unchecked.");
      }
    });
	}


	if(validateInsCheckBox() && !validateNoOfYearsIns()) {
			alert('Enetr valid number 0-99 for instructor experience.');
			return false;
		}
		else if(validateInsCheckBox() && !validateFileType(ici)) {
			alert('Allowed file types are jpeg,jpg and png for Instructor certificate');
			return false;
		}
		else if (validateInsCheckBox() && validateFileType(ici) && imgsizeins >3145728) {
			alert('Max file size is 3Mb for Instructor Certificate');
			return false;
		}
		else {
			return true;
		}


		$('#regbutton').on('click', function (event) {
		// $("#regform1").submit(function(event) {
		event.preventDefault();
		mainRegistration();
		// mainRegistration();
		// validateFname();
		// validateLname();
		// validateUname();
		// validatePword();
		// validateCpword();
		// validateCheckbox();
		// console.log("ffffff");
		// validateInsCheckBox();
		// validateInsSubForm();
		// validateShoSubForm();
		// validateHelSubForm();
		// console.log("ffffff");
		// $('#regform1').submit();
	});


		// $('#regbutton').on('click', function () {
												$('#regform1').submit();
											// $("#regform1").submit(function() {
  									// 		alert("Data submitted successfully.");
  									// 			// event.preventDefault();
											// });