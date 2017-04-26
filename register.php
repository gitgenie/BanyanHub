<?php
 ob_start();
 session_start();
error_reporting(E_ALL);

 if( isset($_SESSION['user'])!="" ){
  header("Location: landing.php");
 }
 include_once 'dbconnect.php';

 $error = false;

// if ( isset($_POST['btn-signup']) ) {
  // clean user inputs to prevent sql injections
  $name = trim($_POST['name']);
  $name = strip_tags($name);
  $name = htmlspecialchars($name);
  
  $email = trim($_POST['email']);
  $email = strip_tags($email);
  $email = htmlspecialchars($email);
  
  $pass = trim($_POST['password']);
  $pass = strip_tags($pass);
  $pass = htmlspecialchars($pass);
 
$class = trim($_POST['class']);
  $class = strip_tags($class);
  $class = htmlspecialchars($class);

$schoolname = trim($_POST['schoolName']);
  $schoolname = strip_tags($schoolname);
  $schoolname = htmlspecialchars($schoolname);
  
  // basic name validation
  if (empty($name)) {
   $error = true;
   $nameError = "Please enter your full name.";
  } else if (strlen($name) < 3) {
   $error = true;
   $nameError = "Name must have atleat 3 characters.";
  } else if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
   $error = true;
   $nameError = "Name must contain alphabets and space.";
  }
  
  //basic email validation
  if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
   $error = true;
   $emailError = "Please enter valid email address.";
  } else {
   // check email exist or not
   $query = "SELECT email FROM bantab WHERE email='$email'";
   $result = mysql_query($query);
   $count = mysql_num_rows($result);
   if($count!=0){
    $error = true;
    $emailError = "Provided Email is already in use.";
   }
  }
  // password validation
  if (empty($pass)){
   $error = true;
   $passError = "Please enter password.";
  } else if(strlen($pass) < 6) {
   $error = true;
   $passError = "Password must have atleast 6 characters.";
  }
  
  // password encrypt using SHA256();
  $password = hash('sha256', $pass);
      
  // if there's no error, continue to signup
  if( !$error ) {
 
   $query = "INSERT INTO bantab(name,email,password,class1, schoolname) VALUES('$name','$email','$password','$class','$schoolname')";
     
   $res = mysql_query($query) or die ('Error updating database: '.mysql_error());
//die(print_r($res, true)); 
     
   if ($res) {
        header("Location: index.php");
       die(print_r("success", true)); 
    $errTyp = "success";
    $errMSG = "Successfully registered, you may login now";
    unset($name);
    unset($email);
    unset($pass);
   } else {
    $errTyp = "danger";
    $errMSG = "Something went wrong, try again later..."; 
   } 
    
  }
 //}
?>