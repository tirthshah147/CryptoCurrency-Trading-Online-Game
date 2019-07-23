<?php
if (isset($_GET['signup'])) {
  $data=$_GET['signup'];
  if ($data=='success') {
    echo "<script>alert('Congratulations! Your number has successfully Registered and You have successfully Signed Up.');</script>";
    
    echo " <audio autoplay>
  
<source src='audio/AUD-20180406-WA0029.mp3' type='audio/mp3' />

</audio>";
  }
}
?>








 


<?php
if (isset($_GET['login'])) {
  $data=$_GET['login'];
  if ($data=='empty') {
    echo "<script>alert('Fill all the fields.');</script>";
  }

  if ($data=='incorrectpwd') {
    echo "<script>alert('Enter correct Username or Password.');</script>";
  }

  if ($data=='notsign') {
    echo "<script>alert('You have not Signed Up yet. SignUp first.');</script>";
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
<link rel="stylesheet" type="text/css" href="login2.css">
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
          <form action="back/loginback.php" method="POST">
               <label>Log In</label><br>
               <input type="text" name="uid" placeholder="Username"><br>
               <input type="password" name="pwd" placeholder="Password"><br>
               <span id="forgot"><a href="forgot.php">FORGOT PASSWORD?</a></span>
               <button type="submit" name="submit">LOG IN</button>

          </form>
         </div>

       </li>


  </ul>


</div>

</div>





</body>
</html>