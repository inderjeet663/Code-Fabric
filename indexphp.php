<?php  
session_start();
 ob_start();
 require_once 'phpconnection.php';
 // it will never let you open index(login) page if session is set
 if ( isset($_SESSION['user'])!="" ) {
  header("Location:home.php");
  exit;
 }
 $error = false;
 if( isset($_POST['btn-logIn']) ) { 
 // prevent sql injections/ clear user invalid inputs
  $email = trim($_POST['email']);
  $email = strip_tags($email);
  $email = htmlspecialchars($email);
  $pass = trim($_POST['password']);
  $pass = strip_tags($pass);
  $pass = htmlspecialchars($pass);
  // prevent sql injections / clear user invalid inputs
   if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
   $error = true;
   $errMsg = "Please enter valid email address.";
  }
  // if there's no error, continue to login
  if (!$error) {
   $res=mysql_query("SELECT userId, userfName, userlName,userPassword FROM userdata WHERE userEmail='$email'");
   $row=mysql_fetch_array($res);
   $count = mysql_num_rows($res); // if uname/pass correct it returns must be 1 row
   if( $count == 1 && $row['userPassword']==$pass  ) {
    $_SESSION['user'] = $row['userId'];
     header("Location:home.php");
     exit;
   } else {
    $errMsg = "Try again...";
   }
  }
 }
?>