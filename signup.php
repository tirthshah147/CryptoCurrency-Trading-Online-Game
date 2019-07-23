
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
<link rel="stylesheet" type="text/css" href="signup2.css">
	<title>SIGNUP</title>
    
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
<li><a href="login.php">Log In</a></li>

</ul>

</div>

<br>
<br>
<br>
<br>
<br>
<br>


<div id="signupbox" style="background-color:#f8f6f6 ">
  
  <ul>
       <li></li>
       <li>
         
           <h1>SIGNUP STEP 1</h1>
           
         <div id="form">
          <form action="back/signupback.php" method="POST">
               <label>Sign Up</label><br>
               <input type="text" name="first" placeholder="First Name"><br>
               <input type="text" name="last" placeholder="Last Name"><br>
               <input type="text" name="email" placeholder="Email"><br>
               <input type="text" name="number" placeholder="Paytm Registered Mobile Number"><br>
               <input type="text" name="uid" placeholder="Username"><br>
               <input type="password" name="pwd" placeholder="Password"><br>
               <input style='width:20px;box-shadow:0px 0px 0px 0px white ;margin-right:0px' type='checkbox' name='tnc' value='tnc'><label style='position:relative;left:0%;font-size:20px'>Accept <a href='tnc.php'>Terms & Condition</a></label><br>
               <span id="login"><span>Already a User?</span><a href="login.php">Log In</a></span>
               <button type="submit" name="submit">NEXT</button>

          </form><br><br><br>
         </div>

       </li>

  </ul>


</div>

</div>

<?php
if (isset($_GET['signup'])) {
  $data=$_GET['signup'];
  if ($data=='empty') {
    echo "<script>alert('Fill all the fields')</script>";
  }

  if ($data=='char') {
    echo "<script>alert('Enter Valid characters for your First Name and Last Name. Only (a-z & A-z) are considered as Valid Characters.')</script>";
  }

  if ($data=='email') {
    echo "<script>alert('Enter Valid Format for your Email.')</script>";
  }

  if ($data=='number') {
    echo "<script>alert('Enter Valid Format for your Paytm Registered Mobile Number. Only number with 10 digits is required.')</script>";
  }

   if ($data=='undertaken') {
    echo "<script>alert('This Username is already taken. Use another Username for your Account.')</script>";
  }
  
  if ($data=='undertakenn') {
    echo "<script>alert('This Mobile Number is already Registered. Use another Mobile Number.')</script>";
  }
  
  if ($data=='tnc') {
    echo "<script>alert('Accept Terms & Conditions to proceed.')</script>";
  }




}



?>

</body>
</html>
