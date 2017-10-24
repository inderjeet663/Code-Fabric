<?php session_start();
 ob_start();
 require_once 'phpconnection.php';
 // if session is not set this will redirect to login page
 if( !isset($_SESSION['user']) ) {
  header("Location:index.php");
 // exit;
 }
 // select loggedin users detail
 $res=mysql_query("SELECT * FROM userdata WHERE userId=".$_SESSION['user']);
 $userRow=mysql_fetch_array($res);
?>
