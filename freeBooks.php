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
        <link rel="stylesheet"  type="text/css" href="freebookcss.css">   
   
        
        
    </head>
    <body >
        
        
        <div class="header">Free Books  </div> 
        <div class="row">
           <?php include("topMenu.html");
include("leftMenu.html");
include("right.html"); ?>   
            <div class="col-8 notes" >  
                <p class="heading"> Donwload Free Books </p>
                
                <form name="booksForm" method="POST" action="search.php">
                    <p class="elements"> <label class="label"> Subject:</label> 
                    <select name="subject"> 
                        <option value=""> Select </option>
                        <option value="Java">Java</option>
                        <option value="C++">C++</option>
                        <option value="DBMS">DBMS</option>
                         <option value="PHP">PHP</option>
                         <option value="MYSQL/PL/SQL">MYSQL/PL/SQL</option>
                         <option value="Software Engineering">Software Engineering</option>
                         <option value="Computer Network">Computer Network</option>
                         <option value="C Programming">C Programming</option>
                    </select>
                    <label class="label">  Author:</label>
                    <input type="text" name="author" value="" placeholder="Author Name"/>
                    
                    </p>
                    <button class="col-2 button" name="btn-books"  > Search </button>
                    
                    
                   
                    
                </form>

            </div>
     <?php include('footer.html'); ?>
            </div>
            
        
    </body>
</html>
