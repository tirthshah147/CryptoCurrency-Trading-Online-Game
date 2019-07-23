<?php
ob_start();
?>

<?php
if (!isset($_GET['forgot2'])){
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
<link href='https://afeld.github.io/emoji-css/emoji.css' rel='stylesheet'>
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
          <form action='back/forgot2back.php' method='POST'>
               <label>One Time Password has been sended to your registered Email Id: <br>".$email."</label><br>
                <label>Wait for 2-3 minutes.</label><br>
               <input type='text' name='fotp' placeholder=' Enter Otp'><br>
               <button type='submit' name='submit'>Submit</button>

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

}else{
    

if (isset($_GET['forgot2'])){
    $data=$_GET['forgot2'];
    
    session_start();
     $email=$_SESSION['femail'];
  $otp=$_SESSION['fotp'];
    
    if ($data=='empty'){
        echo "<script>alert('Fill all the fields!');</script>";
    }
    
    if ($data=='incotp'){
        echo "<script>alert('Enter Correct Otp!');</script>";
    }
    
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
<link href='https://afeld.github.io/emoji-css/emoji.css' rel='stylesheet'>
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
          <form action='back/forgot2back.php' method='POST'>
               <label>One Time Password has been sended to your registered Email Id: <br>".$email."</label><br>
                <label>If not then wait for 3-4 minutes.</label><br>
               <input type='text' name='fotp' placeholder=' Enter Otp'><br>
               <button type='submit' name='submit'>Submit</button>

          </form>
         </div>

       </li>


  </ul>


</div>

</div>





</body>
</html>";

    
}

}

?>



