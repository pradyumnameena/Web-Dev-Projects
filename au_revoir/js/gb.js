// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
    form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false){
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();

function validateForm(){
	var entryn = document.forms["myform"]["entrynumber"].value;
	var message = document.forms["myform"]["message"].value;
	
	var year = /(2014|2015|2016)/g;
	var branch = /(AM|CR|AS|BE|BL|BM|CH|CY|CE|CS|EE|ES|HU|IT|AN|SI|ID|SM|MA|ME|PH|PT|RD|BS|TT|VE)/g;
	var pcode = /[1-9,A-Z]/g;
	var number = /[0-9]/g;

	if((entryn.length!=11 && entryn.length!=0)){
		alert("Enter a valid entry number.Alphabets in entry number should be in CAPS.");
		return false;
	}

	var year_string = entryn.substr(0,4);
	var branch_string = entryn.substr(4,6);
	var pcodestring = entryn.substr(6,7);
	var numstring = entryn.substr(7,11);

	var yearResult = year_string.match(year);
	var branchResult = branch_string.match(branch);
	var pcodeResult = pcodestring.match(pcode);
	var numberResult = numstring.match(number);
	
	if(entryn.length!=0 && (yearResult==null || branchResult==null || pcodeResult==null || numberResult==null)){
		alert("Enter a valid entry number.Alphabets in entry number should be in CAPS.");
		return false;
	}
}