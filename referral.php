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

	<title>Referral</title>

 <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="shortcut icon" type="img/png" href="images/logo33.png">
	<link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="referral2.css">
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
<li><a href='leaderboard.php'>Challenges & Leaderboard</a></li> 

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
<li><a href='rules.php'>Rules</a></li><br>
<li><a href='referearn.php'>Refer & Earn</a></li><br>
<li><a href='referral.php'>Referral</a></li><br>
<li><a href='AboutUs.php'>About Us</a></li><br>
<li><a href='tnc.php'>Terms & Conditions</a></li><br>
<li><a href='privacy.php'>Privacy Policy</a></li><br>
<li><a href='back/logout.php'>Log Out</a></li><br>



</ul>

</div>"

?>


<?php

echo "";



?>
<?php


echo" 
<div id='refernearn'>

	<span>Referral!</span>

<ul>
	
	<li></li>
	<li><a id='friendhead'>Earn with friends     <i class='em em-grinning'></i></a>
      <div id='refercode'><a id='invite'>Enter Your friend refer code,</a>
                          <a id='get'>Get  <img src='images/crypcoinfinal.png'> <span>500</span>, Give <img src='images/crypcoinfinal.png'> <span>500</span></a><br>    
                          <a id='more'> and more!<button>Enter</button></a>


      </div>

	</li>
	<div id='code'>
	<button><a>Enter Your Friend Refer Code Below</a></button>
	<form method='POST' action='back/referralback.php'>
	<input type='text' name='refercode' placeholder='Enter Here'>
	<button type='submit' name='submit'>GET</button>
	</div>

	</form>
    

</ul>

	

</div>"

?>



<?php

if (isset($_GET['referral'])) {

	$data=$_GET['referral'];

	if ($data=='already') {
		echo "<script>alert('Sorry but You have already entered refer code once and you cannot enter refer code more than 1 time.');</script>";
	}

	if ($data=='success') {
		echo "<script>alert('Congratulations! You have successfully entered your friends Refer Code. CC have been added to your Account Successfully!')</script>";
		echo "<audio autoplay>
	
<source src='audio/coins-in-hand-1.mp3' type='audio/mp3' />

</audio>";
	}

	if ($data=='incorrectcode') {
		echo "<script>alert('Please Enter Valid Refer Code.')</script>";
	}
}



?>



</body>
</html>
