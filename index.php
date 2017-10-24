<?php
    require("indexphp.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
<meta content="utf-8" http-equiv="encoding">
        <title>Code Fabric</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" type="text/css" href="format.css">
         <link rel="stylesheet"  type="text/css" href="indexcss.css">
</head>
    <body >
<script type="text/javascript">  
          function validateLogIn(){  
       var email=document.lForm.email.value;
         var pass=document.lForm.password.value;
         //email validation
           var atindex=email.indexOf("@");
         var dotindex=email.lastIndexOf(".");
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
            
   return true;
}  
</script>
        
        
        <div class="header">Log In </div> 
        <div class="row">

          <?php 
include("leftMenulog.html");
include("right.html"); ?> 

<form name="lForm" method="POST"  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?> "  onsubmit="return(validateLogIn());">
                          <p style="text-align:center; color:orange; padding-top:5px;"> Please Login to Continue! </p>
                         <p class="msg"> <?php echo $errMsg , $errMsg2;  ?>  </p>
                  <table class="col-8 logIn">
                 
                      
                      
                         <tr class="col-12"> <td class="col-2"> <label > Email:</label> </td>
                          <td class="col-10"><input class="input" type="text" name="email" placeholder="xyz@example.com" required/> 
                              <span id="emailErr">Provide valid email!</span> </td> </tr>
                      
                     
                          <tr class="col-12"><td class="col-2"> <label> Password:</label> </td> 
                          <td class="col-10"><input class="input" type="password" name="password" placeholder="********" required/> 
                              <span id="passErr">At least 6 words!</span> </td> </tr>
                      
                      
                      
                  </table>

    <input class="col-2 button" type="submit" name="btn-logIn" value="Log In" />
    </form>

        <a href="register.php" class="col-2 apply acbutton">Create New Account</a>   

            
            <?php include('footer.html'); ?>
        </div>
    </body>
</html>
