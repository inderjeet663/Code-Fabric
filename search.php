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
         <link rel="stylesheet"  type="text/css" href="searchcss.css">
    
        
        
        
    </head>
    <body >
        
        
        <div class="header">Free Notes  </div> 
        <div class="row">
           <?php include("topMenu.html");
include("leftMenu.html");
include("right.html"); ?>   
            <?php
if(isset($_POST['btn-notes']))
{

$ID="";
$University="";
$Class="";
$Subject="";
$Year="";
$Path="";
$serial=1;
$linkpath="";
if($_SERVER['REQUEST_METHOD']=="POST")
{
$University=$_POST["university"];
$Class=$_POST["class"];
$Subject=$_POST["subject"];
$Year=$_POST["year"];
}
$res=mysql_query("SELECT ID, uni, class, sub, year,path FROM notes WHERE uni='$University' OR class='$Class' OR sub='$Subject' OR year='$Year'"); 
$count=mysql_num_rows($res);
if ($count>0) {
    // output data of each row
echo '
<table class=" col-8 tabledata">
    <tr>
          <th> Serial </th> 
            <th> University </th>
             <th>Class</th> 
               <th>Subject</th> 
                <th> Year </th> 
                    <th> Download Link </th>
</tr>';
    while($row = mysql_fetch_array($res))
	 {
$linkpath=$row['path'];

echo '
 <tr> 
         <td> '.$serial.'</td>
 <td> '.$row['uni'].' </td>
 <td>'. $row['class'].' </td> 
<td> '.$row['sub'].' </td> 
<td>'.$row['year'].' </td> 
         <td> <a href=" '.$linkpath.' " download > Download </input> </td>
</tr>
';
$serial++;
}
echo '</table';
        
   
}
 else {
    echo "0 results";
    }
}
if(isset($_POST['btn-books']))
{

$ID="";
$Subject="";
$Author="";
$bookName="";
$Path="";
$serial=1;
$linkpath="";
if($_SERVER['REQUEST_METHOD']=="POST")
{
$Subject=$_POST["subject"];
$Author=$_POST["author"];
}
$res=mysql_query("SELECT * FROM books WHERE subject='$Subject' OR author='$Author' OR author2='$Author' OR author3='$Author' OR author4='$Author'"); 
$count=mysql_num_rows($res);
if ($count>0) {
    // output data of each row
echo '
<table class=" col-8 tabledata">
    <tr>
          <th> Serial </th> 
            <th> Book Name </th>
             <th>Subject</th> 
               <th>Author</th> 
                 
                    <th> Download Link </th>
</tr>';
    while($row = mysql_fetch_array($res))
	 {
$linkpath=$row['path'];
$auth=$row['author']." ".$row['author2']." ".$row['author3']." ".$row['author4'];
echo '
 <tr> 
         <td> '.$serial.'</td>
 <td> '.$row['bookName'].' </td>
 <td>'. $row['subject'].' </td> 
<td> '.$auth.' </td> 

         <td> <a href=" '.$linkpath.' " download > Download </input> </td>
</tr>
';
$serial++;
}
echo '</table';
        
   
}
 else {
    echo "0 results";
    }
}
mysql_close();


?>

            </div>
            <?php include('footer.html'); ?>
        </div>
    </body>
</html>
