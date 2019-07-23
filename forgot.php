<?php

if (isset($_GET['forgot'])){
    
    $data=$_GET['forgot'];
    
    if ($data=='signupfirst'){
        echo "<script>alert('You have not Signed Up yet! Sign up first.');</script>";
    }
    
    if ($data=='empty'){
        echo "<script>alert('Fill all the fields.');</script>";
    }
    
}


?>


<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">
  window.addEventListener("load",function (){
     var load_screen=document.getElementById("load_screen");
     document.body.removeChild(load_screen);
     document.getElementById('whole').style.display='block';
  });

     

	</script>



  <link rel="shortcut icon" type="img/png" href="images/logo33.png">
<link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="forgot.css">
	<title>LOGIN</title>
    
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>

  <div id="load_screen"><img id="load" src="images/crypcoinfinal.png"></div>

<div id="whole">
<div id="first">
  
<ul>
<li><a href="index.php"><img src="images/logo32.png"></a></li>
<li><a href="AboutUs.php"><span>Crypto</span>Cash</a></li>
<li><a href="index.php">Home</a></li>
<li><a href="signup.php">Sign Up</a></li>

</ul>

</div>

<br>
<br>
<br>
<br>
<br>
<br>


<div id="loginbox" style="background-color:#f8f6f6 ">
  
  <ul>
       <li></li>
       <li>
    
         <div id="form">
          <form action="back/forgotback.php" method="POST">
               <label>Forgot Password?</label><br>
               <input type="text" name="fuid" placeholder=" Enter Username"><br>
               <button type="submit" name="submit">Submit</button>

          </form>
         </div>

       </li>


  </ul>


</div>

</div>





</body>
</html>