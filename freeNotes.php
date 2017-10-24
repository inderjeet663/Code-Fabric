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
       
        .notes {
            
         
            height : 200px;
        }
       
        .heading {
            color : #333232;
            font-size : 50px;
            text-align : center;
            margin-top : 0px;
            text-shadow: 0px 2px 5px black;
            font-weight: bold;
            
        }
        label,select {
           margin-left :10px;
        }
        
        option {
            font-size : 15px;
            
        }
@media only screen and (max-width: 500px) {
    .notes {
width: 80%;
height:auto;
}
label, select {
    width: 100%;
    font-size: 20px;
}
.button {
width:50%;
margin-top:0%;
}
}
        
    </style>
       
        
        
        
    </head>
    <body >
        
        
        <div class="header">Free Notes  </div> 
        <div class="row">
           <?php include("topMenu.html");
include("leftMenu.html");
include("right.html"); ?>   
            <div class="col-8 notes" >  
                <p class="heading"> Donwload Free Notes </p>
                
                <form name="notesForm" method="POST" action="search.php">
                    <p class="elements"> <label class="label"> University:</label> 
                    <select name="university"> 
                        <option value=""> Select </option>
                        <option value="Punjab university">Punjab university</option>
                        <option value="Punjabi university">Punjabi university</option>
                    </select>
                    <label class="label">  Class: </label>
                    <select name="class"> 
                        <option value=""> Select </option>
                        <option value="MCA"> MCA</option>
                        <option value="M.sc(I.T)">M.sc(I.T)</option>
                    </select>
                    <label class="label">  Subject:</label>
                    <select name="subject"> 
                        <option value=""> Select </option>
                        <option value="C++">C++</option>
                        <option value="Java">Java</option>
                    </select>
                    <label class="label">  Year:</label>
                    <select name="year"> 
                        <option value=""> Select </option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                    </select>
                    </p>
                    <button class="col-2 button" name="btn-notes" > Search </button>
                    
                    
                   
                    
                </form>

            </div>
     <?php include('footer.html'); ?>
            </div>
            
        
    </body>
</html>
