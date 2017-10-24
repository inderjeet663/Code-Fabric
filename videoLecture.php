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
            
 
        
    </style>
       
        
        
        
    </head>
    <body >
        
        
        <div class="header">Video Lecture</div> 
        <div class="row">
           <?php include("topMenu.html");
include("leftMenu.html");
include("right.html"); ?>   
            <div class="col-8 notes" >  
                <p class="heading">Not Available Yet </p>
                
               

            </div>
     <?php include('footer.html'); ?>
            </div>
            
        
    </body>
</html>
