<?php
 ob_start();
 session_start();
 require_once 'phpconnection.php';
 
 // if session is not set this will redirect to login page
 if( !isset($_SESSION['user']) ) {
  header("Location: index.php");
  exit;
 }
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Code Fabric</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="format.css">
        <link rel="stylesheet" type="text/css" href="button.css">
           
    <style>
       
        .heading {
            color : #333232;
            font-size : 50px;
            text-align : center;
            margin-top : 0px;
            text-shadow: 0px 2px 5px black;
            font-weight: bold;
            margin-bottom:0px;
 }
        h2{
border:solid 2px orange;
border-radius: 5px;
}
    </style>
       
        
        
        
    </head>
    <body >
        
        
        <div class="header">Contact Us</div> 
        <div class="row">
           <?php include("topMenu.html");
include("leftMenu.html");
include("right.html"); ?>   
            <div class="col-8 notes" >  
                <p class="heading">Contact Us </p>
         <h2>Send e-mail to codefabric.com:</h2>

<form action="mailto:inderjeetsandhu702@gmail.com" method="post" id="emailfrm" enctype="text/plain">
Name:<br>
<input type="text" name="name"><br>
E-mail:<br>
<input type="text" name="mail"><br>
Comment:<br>
<textarea rows="4" cols="50" name="comment" form="emailfrm"> Enter your message here! </textarea>
<br>
<input type="submit" value="Send">
<input type="reset" value="Reset">
</form>






                
               

            </div>
<div class="col-8 whatsappus">
            <h2> Whats App us  +919001000663 </h2>
          </div>
     <?php include('footer.html'); ?>
            </div>
            
        
    </body>
</html>
