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
                margin-bottom: 0px;
            }
 
        p {
    text-align: center;
    font-style: oblique;
    font-family: monospace;
    font-size: medium;
     text-align: justify;
      font-size:14px
}
  h2{
border:solid 2px orange;
border-radius: 5px;
}
@media only screen and (max-width: 500px) {
.aboutus {
    width: 100%;
}
h2 {
font-size:15px;
}
}
    </style>
       
        
        
        
    </head>
    <body >
        
        
        <div class="header">About Us</div> 
        <div class="row">
           <?php include("topMenu.html");
include("leftMenu.html");
include("right.html"); ?>   
            <div class="col-8 notes" >  
                <p class="heading">About Us </p>
<div class="col-8 aboutus">
 <h2>What is Code Fabric?</h2>
<p class="aboutusP">
Code Fabric is an Education site. Here, we have tried to provide all needed material like Notes,Books,Video lectures and Online study sites for almost
all classes and Universities of India.One of Good thing is that all the material is free of cost , we are not claiming anything from our valuable Customer .
One and only Motive of creating this site is to provide study material free of cost for seekers .</p>
<h2>Who is Author of this site?</h2>
<p class="aboutusP">This site has been developed by <b>inderjeet singh</b> , who is a student of khalsa college of mohali and presently doing M.sc(IT) from the college which is 
under Punjabi University of Patiala.

</p>


</div>
                
               

            </div>
     <?php include('footer.html'); ?>
            </div>
            
        
    </body>
</html>
