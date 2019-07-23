<?php
ob_start();
session_start();
if (isset($_SESSION['femail'])) {

  $email=$_SESSION['femail'];
  $otp=$_SESSION['fotp'];

  echo "<!DOCTYPE html>
<html>
<head>
	<script type='text/javascript'>
  window.addEventListener('load',function (){
     var load_screen=document.getElementById('load_screen');
     document.body.removeChild(load_screen);
     document.getElementById('whole').style.display='block';
  });

     

	</script>



  <link rel='shortcut icon' type='img/png' href='images/logo33.png'>
<link rel='stylesheet' type='text/css' href='forgot2.css'>
	<title>Forgot Password</title>
    
     <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    
</head>
<body>

  <div id='load_screen'><img id='load' src='images/crypcoinfinal.png'></div>

<div id='whole'>
<div id='first'>
  
<ul>
<li><a href='index.php'><img src='images/logo32.png'></a></li>
<li><a href='AboutUs.php'><span>Crypto</span>Cash</a></li>
<li><a href='index.php'>Home</a></li>
<li><a href='signup.php'>Sign Up</a></li>

</ul>

</div>

<br>
<br>
<br>
<br>
<br>
<br>


<div id='loginbox' style='background-color:#f8f6f6 '>
  
  <ul>
       <li></li>
       <li>
    
         <div id='form'>
          <form action='back/forgot3back.php' method='POST'>
               <label>Enter New Password</label><br>
               <input type='password' name='fnewpwd' placeholder=' Enter New Password'><br>
               <button type='submit' name='submit'>Change</button>

          </form>
         </div>

       </li>


  </ul>


</div>

</div>





</body>
</html>";

}else{

    header('Location: login.php');

}


?>

<?php

if (isset($_GET['forgot3'])){
    $data=$_GET['forgot3'];
    if ($data=='empty'){
        echo "<script>alert('Your new password field is empty.');</script>";
    }
    
}


?>

