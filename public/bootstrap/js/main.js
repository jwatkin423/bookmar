$(document).ready( function($) {
	$("#sbmt").hide();

	$("#password1").on("change keyup paste click", function() {
		var p = $("#password1").val();
		if (p.length < 3) {
			$("#pwd1").addClass("danger");
			$("#label-password-match").text("Password needs to be 8 characters");
			$("#password1").focus();
			$("#sbmt").hide();
		} else if (p.length > 4 && p.length < 8) {
			$("#pwd1").removeClass("danger");
			$("#pwd1").addClass("warning");
			$("#label-password-match").text("Getting close!");
			$("#password1").focus();
			$("#sbmt").hide();
		} else if (p.length >= 8) {
			$("#pwd1").removeClass("warning");
			$("#pwd1").addClass("success");
			$("#label-password-match").text("Password is a good length");
			$("#password1").focus();
			$("#sbmt").hide();
		}
	});

	$("#password2").on("change keyup paste click", function() {
		var p1 = $("#password1").val();
		var p2 = $("#password2").val();
		console.log(p1 + ' ' + p2);
		if(p1 != p2) {
			$("#pwd1").addClass("danger");
			$("#pwd2").addClass("danger");
			$("#label-password-match").text("Passwords don't match!");
			$("#sbmt").hide();
		} else {
			$("#pwd1").removeClass("danger");
			$("#pwd2").removeClass("danger");
			$("#pwd1").addClass("success");
			$("#pwd2").addClass("success");
			$("#label-password-match").text("Passwords match!");
			$("#sbmt").hide();
		}
		if (p1.length >=8 && p1 == p2) {
			$("#sbmt").show();
		}
	});


});