<?php
require_once 'dbconnect.php';
	
$error = false;
//die(print_r("hi login.php", true));
//if ( isset($_POST['btn-login'])) {			
		// prevent sql injections/ clear user invalid inputs
		$email = trim($_POST['email']);
		$email = strip_tags($email);
		$email = htmlspecialchars($email);
		
		$pass = trim($_POST['password']);
		$pass = strip_tags($pass);
		$pass = htmlspecialchars($pass);
		// prevent sql injections / clear user invalid inputs
	
		if(empty($email)){
			$error = true;
			$emailError = "Please enter your email address.";
		} else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
			$error = true;
			$emailError = "Please enter valid email address.";
		}
		
		if(empty($pass)){
			$error = true;
			$passError = "Please enter your password.";
		}
		
		// if there's no error, continue to login
		if (!$error) {
			$password1 = hash('sha256', $pass); // password hashing using SHA256
			$res=mysql_query("SELECT name, email, password, class1 FROM bantab WHERE email='$email'")  or die(mysql_error());
			$row=mysql_fetch_array($res);
			$count = mysql_num_rows($res); // if uname/pass correct it returns must be 1 row
			
			//die(print_r(hash('sha256', "123456"), true));
			if($count ===1 &&  $row['password']==$password1 ) {
				//$_SESSION['user'] = $row['userId'];qz
				print_r($row);
                session_start();
	           $_SESSION['sid']=session_id();
                $_SESSION['username'] = $row['name'];
				//echo '<script>console.log('.$row['class1'].')</script>';
                if($row['class1'] == 10){
                  header("location: sslc/index.php");
                } else {
//				   header("location: wings/newWings/index.html");
				//	header("wings");
                }
			} else {
				$errMSG = "Incorrect Credentials, Try again...";
			}
				
		}
//}
		
    ?>