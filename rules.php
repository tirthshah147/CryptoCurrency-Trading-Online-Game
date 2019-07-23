<?php
ob_start();
include_once 'back/dbh.php';

?>


<?php

session_start();
if (isset($_SESSION['uid'])) {
  $uid=$_SESSION['uid'];
  $sql2="SELECT * FROM users WHERE username='$uid';";
    $result2=mysqli_query($conn,$sql2);
    $row2=mysqli_fetch_assoc($result2);

}else{
  header('Location: login.php');
}

?>



<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">

  var a=0;
  
function slide(){
  a++;
  if (a%2==1) {
        document.getElementById('slidebutton').style.left='30%';
        document.getElementById('slidebar').style.left='0%';
  }

  if (a%2==0) {
        document.getElementById('slidebutton').style.left='-45%';
        document.getElementById('slidebar').style.left='-100%';
  }

}


</script>

  <title>Rules</title>

 <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="shortcut icon" type="img/png" href="images/logo33.png">
    <link rel="stylesheet" type="text/css" href="rules.css">
</head>
<body>

<div id="first">
  
<ul>
<li><a href="portfolio.php"><img src="images/logo32.png"></a></li>
<li><a href="AboutUs.php"><span>Crypto</span>Cash</a></li>
<li><a><?php echo "Hello ".$uid; ?></a></li>
<li><img src="images/crypcoinfinal.png"><div id="cc"><?php echo $row2['cc'] ?></div></li>
<li><a href="back/logout.php">Log Out</a></li>

</ul>

</div>

<div id="second">

<ul>
<li><img src="images/Circle-Solid-List-512.png" onclick="slide()" id="slidebutton"></li>
<li><a href="portfolio.php">My Portfolio</a></li>
<li><a href="trade.php">Trade</a></li>
<li><a href="leaderboard.php">Challenges & Leaderboard</a></li> 

</ul>

</div>


<?php

    $uid=$_SESSION['uid'];
  $sql2="SELECT * FROM users WHERE username='$uid';";
    $result2=mysqli_query($conn,$sql2);
    $row2=mysqli_fetch_assoc($result2);

    if ($row2['profilestatus']==0) {
       $row2['profilepath']='default.jpg';
    }

 echo "<div id='slidebar'>

 <div id='backprofile'>
  
<a id='myprofile' href='myprofile.php'><div id='profile'"." "."style=".'"background-image:url('."'mainprofile/".$row2['profilepath']."');".'"'."></div></a><br>"
."<a class='fnl' href='myprofile.php'>".$row2['firstname']." ".$row2['lastname']."
</a><br><a class='fnl' href='myprofile.php'>".$row2['username']."</a>
</div>
<br><br>
<ul>
<li><img src='images/crypcoinfinal.png'><a href='buycc.php'>Buy CC </a></li><br>
<li><a href='referearn.php'>Refer & Earn</a></li><br>
<li><a href='referral.php'>Referral</a></li><br>
<li><a href='AboutUs.php'>About Us</a></li><br>
<li><a href='tnc.php'>Terms & Conditions</a></li><br>
<li><a href='privacy.php'>Privacy Policy</a></li><br>
<li><a href='back/logout.php'>Log Out</a></li><br>



</ul>

</div>"

?>
<br><br>
<hr width="100%" style="border-style: solid;border-color:orange">
<br>
<br>

<span id="ruleshead">Rules</span>
<br>
<br>

<div id="rules">

<ul>

  <li class="rn"><center><img src="images/1.png"></center></li>
  <li>1 <img src="images/crypcoinfinal.png"> = 1 <img src="images/dollar.png"></li>
  <li class="rn"><center><img src="images/2.png"></center></li>
  <li>User will win PayTm cash if and only if he/she completes the Weekly Challenge.</li>
  <li class="rn"><center><img src="images/3.png"></center></li>
  <li>After Results User's CryptoCash will be reset to <br><h2>5000</h2> <h1> + </h1><h2>Refered Friends</h2> <h1> * </h1><h2>500</h2><br> So Refer More for your future benefits!</li>
  <li class="rn"><center><img src="images/4.png"></center></li>
  <li>User can enter his/her friends Refer Code just once.</li>
  <li class="rn"><center><img src="images/5.png"></center></li>
  <li>The trading system will work according to the CryptoCurrency Market displayed in the trade tab.<br><br>The CryptoCash will be Subtracted/Added in users account as User Buys/Sells CryptoCurrencies. </li>
  <li class="rn"><center><img src="images/6.png"></center></li>
  <li>User will be awarded PayTm cash in his/her PayTm wallet within 24 Hours of the result.<br><br><br><br><br></li>
   
</ul>

</div>

</div>
</body>
</html>