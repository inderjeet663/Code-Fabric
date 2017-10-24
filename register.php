<?php 
ob_start();
session_start();
if( isset($_SESSION['user'])!="")
            {
            header("location: home.php");
}
          include_once 'phpconnection.php';
            $error = false;
            $errMsg2="";
if(isset($_POST['btn-signup'])) 
           {
//clear user input to sql injection
            $fname=trim($_POST['fName']);
            $fname=strip_tags($fname);
            $fname=htmlspecialchars($fname);
  

            $lname=trim($_POST['lName']);
            $lname=strip_tags($lname);
            $lname=htmlspecialchars($lname);


            $email=trim($_POST['email']);
            $email=strip_tags($email);
            $email=htmlspecialchars($email);

            $pass=trim($_POST['password']);
            $pass=strip_tags($pass);
            $pass=htmlspecialchars($pass);

    if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
                                                $error = true;
                                                $errMsg = "Please enter valid email address.";
                                                 }

// check email exist or not 
$query = "SELECT userEmail FROM userdata WHERE userEmail='$email'";


   $result = mysql_query($query);
   $count = mysql_num_rows($result);

   if($count!=0){
            $error = true;
            $errMsg="Provided Email is already in use.";
                }

// password encrypt using SHA256();
 // $password = hash('sha256', $pass);
if( !$error )   {

                 $query = "INSERT INTO userdata(userfName,userlName,userEmail,userPassword) VALUES('$fname','$lname','$email','$pass')";

                      $res = mysql_query($query);
 
           

if($res) {

                        $success = "Successfully registered, you may login now";
                         unset($fname);
                         unset($lname);
                          unset($email);
                             unset($pass);
                       }else {
                         $errMsg2="try again"; 
                       } 
}
 
                
}
?>


<!DOCTYPE html>

<html>
    <head>
        <title>Code Fabric</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="format.css">

           
    <style>
     
       
        
     
       
        .heading {
            color : #333232;
            font-size : 50px;
            text-align : center;
            margin-top : 0px;
            text-shadow: 0px 2px 5px black;
            font-weight: bold;
            
            
        }
    
      .button {
               font-size : larger;
                background-color: white;
               padding : 4px;
               text-align:center;
              margin-left : 25%;
               border-radius :5px;
              box-shadow : 0px 1px 5px black;
            
               
}
.signUp tr td {
    padding: 0%;
        }
 .input{
width:70%;
 border: 1px solid #ccc;
  border-radius: 4px;
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  min-height: 40px;
  padding: 4px 20px 4px 8px;
  font-size: 15px;
  -moz-transition: all .2s linear;
  -webkit-transition: all .2s linear;
  transition: all .2s linear;
}
.input:focus
{
  
  border-color: #51a7e8;
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1),0 0 5px rgba(81,167,232,0.5);
  outline: none;
}
.input:hover
{
background-color:lightgoldenrodyellow;
}
span{
visibility : hidden;
color: red;
}
 .msg {
  color :red;
text-align:center;
}
 @media only screen and (max-width: 500px) {
        .signUp {
    width: 80%;
}
.signUp tr td {
    padding: 0%;
    display: inline-table;
    width: 100%;
}
.button {
padding: 2px;
width:50%;
margin-left: 0%;
}
.input{
width:100%;
}
}
 
        </style>
   </head>
    <body >
<script type="text/javascript">  
          function validateform(){  
        
         var fname=document.rForm.fName.value;
          
         var lname=document.rForm.lName.value;
        
         var email=document.rForm.email.value;
         
         var pass=document.rForm.password.value;
         
            //email validation
           
      var atindex=email.indexOf("@");
      
       var dotindex=email.lastIndexOf(".");
        if(!isNaN(fname))
{
               document.getElementById("fnameErr").style.visibility="visible";
                  return false;
}
else
{
    document.getElementById("fnameErr").style.visibility="hidden";
}
    
if(!isNaN(lname))
{
               document.getElementById("lnameErr").style.visibility="visible";
                  return false;
}
else
{
    document.getElementById("lnameErr").style.visibility="hidden";
}

       
           if(atindex<1||(dotindex-atindex<2))
{
           document.getElementById("emailErr").style.visibility="visible";
           
               return false;
}
else
{
    document.getElementById("emailErr").style.visibility="hidden";
}
          //name validate
            
if(pass.length<6)
{
document.getElementById("passErr").style.visibility="visible";
return false;
}
else
{
    document.getElementById("passErr").style.visibility="hidden";
}
   return true;
}  
</script>
        
        
        <div class="header">Sign Up  </div> 
        <div class="row">
           <?php 
include("leftMenulog.html");
include("right.html"); ?> 

<form name="rForm" method="POST"  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"  onsubmit="return(validateform());">
                         <p class="msg"> <?php echo $errMsg , $errMsg2;  ?>  </p>
                         <p style="color:green; text-align:center;"> <?php echo $success; ?> </p>
                  <table class="col-8 signUp">
                  <tr class="col-12">
                     <td class="col-2"> <label > First Name :</label> </td> 
                      <td class="col-10"> 
                         <input class="input" type="text" name="fName" placeholder="Rock" required/>
                         <span id="fnameErr">
                            Only Characters!
                         </span>
                      </td> 
                  </tr>
                         <tr class="col-12">
                             <td class="col-2">
                                 <label>Last Name : </label> 
                             </td> 
                           <td class="col-10"> 
                               <input class="input" type="text" name="lName" placeholder="Johanson" required/> 
                               <span id="lnameErr">
                                   Only Characters!
                               </span> 
                           </td>
                         </tr>
                      
                      
                         <tr class="col-12"> <td class="col-2"> <label > Email:</label> </td>
                          <td class="col-10"><input class="input" type="text" name="email" placeholder="xyz@example.com" required/> 
                              <span id="emailErr">Provide valid email!</span> </td> </tr>
                      
                     
                          <tr class="col-12"><td class="col-2"> <label> Password:</label> </td> 
                          <td class="col-10"><input class="input" type="password" name="password" placeholder="********" required/> 
                              <span id="passErr">At least 6 words!</span> </td> </tr>
                      
                      
                      
                  </table>

    <input class="col-2 button" type="submit" name="btn-signup" value="Sign Up" />
    </form>
           

            
            <?php include('footer.html'); ?>
        </div>
    </body>
</html>
