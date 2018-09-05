$('#pwdReveal').on("click", function () {
		    var x = document.getElementById("toggleReveal");
		    if (x.type === "password") {
		        x.type = "text";
		    } else {
		        x.type = "password";
		    }
});

// var termsConfirm = document.getElementById("termsConfirm");
// var registerBtn = document.getElementById("registerButton");
// if(termsConfirm.checked == false){
//   console.log("Terms & Conditions not confirmed");
//   registerBtn.disabled = true;
// }
