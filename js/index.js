

$(document).ready(function () {
  	$('#termSection').click(function() {
    	$("#terms").css("display", "block");
  	});
    
    $("#loginButton").click(function(e){
		e.preventDefault();
		var email = $("#loginEmail").val();
		var password = $("#loginPassword").val();
		if(email ==''|| password==''){
			alert("Some Fields are Blank. Please fill all the fields.");   	
		}else{
	 // Returns successful data submission message when the entered information is stored in database.
			$.post("login.php",{ email: email, password: password}, function(login, a,b){
				console.log("hello moto");
			 console.log('success?=='+login+" "+a+" "+JSON.stringify(b)+" ");
//				 console.log('success?=='+login[3]);
			if (login !=="") {
				$('#form')[0].reset();
	//		       if(login === 'wings'){
	//                window.location.href = "wings/logout.php";
	//            } else{	
	//                 window.location.href = "wings/logout.php";
	////            }
			   // window.location.href ="chungs.php";
				//$(document).empty();
//				document.write(login,a,b,c);
window.location.href ="wings/newWings/index.php";
			} else {
				$(".alert-danger").val("Wrong username or password!");
				//alert('Wrong username or password!');
			}
		});
		}
	});
});