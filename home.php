
<?php
   require("homephp.php");
?>

<!DOCTYPE html>

<html>
    <head>
        <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
         <meta content="utf-8" http-equiv="encoding">
        <title>Code Fabric</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="format.css"> 
       <link rel="stylesheet" type="text/css" href="homecss.css">
        
        
    </head>
    <body>
        
        
       <?php include("header.html"); 
       ?> 
        <div class="row">
<?php require("topMenu.html");
require("leftMenu.html");

require("right.html"); ?>    
        
            
            <div class="col-4 frame img-1"> <a href="freeNotes.php"> Free notes </a>  </div> 
               <div class="col-4 frame img-2 "><a href="freeBooks.php"> Free books </a> </div>
            <div class="col-4 frame img-3" ><a href="studySites.php"> Study sites </a> </div>
            <div class="col-4 frame  img-4" ><a href="videoLecture.php"> Video lectures </a> </div>
           <?php include("footer.html") ?>
            
            
            
                </div>
            
            
       
        
       
    </body>
</html>
