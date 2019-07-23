<?php
ob_start();
include_once 'back/dbh.php';
session_start();

?>




<?php


if (isset($_SESSION['uid'])) { 

	if (isset($_SESSION['name'])) {
	
	$name=$_SESSION['name'];

	$sql="SELECT * FROM cryptomarket WHERE name='$name';";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);

	$uid=$_SESSION['uid'];

	$sql2="SELECT * FROM users WHERE username='$uid';";
    $result2=mysqli_query($conn,$sql2);
    $row2=mysqli_fetch_assoc($result2);

}else{
	$name=$_POST['submit'];
	$_SESSION['name']=$name;
	header("Location: buynsell.php");
}
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
        document.getElementById('show').style.display='none';
	}

	if (a%2==0) {
        document.getElementById('slidebutton').style.left='-45%';
        document.getElementById('slidebar').style.left='-100%';
        document.getElementById('show').style.display='block';
	}

}

  var i=0;

function show(){

	i++;
	if (i%2==1) {
        document.getElementById('show').innerHTML='Show Less Details';
        document.getElementById('description').style.display='block';

	}

	if (i%2==0) {
        document.getElementById('show').innerHTML='Show More Details';
        document.getElementById('description').style.display='none';
	}

}



</script>

	<title>Trade</title>

 <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="shortcut icon" type="img/png" href="images/logo33.png">
    <link rel="stylesheet" type="text/css" href="buynsell.css">
</head>
<body>

<div id="first">
  
<ul>
<li><a href="portfolio.php"><img src="images/logo32.png"></a></li>
<li><a href="AboutUs.php"><span>Crypto</span>Cash</a></li>
<li><a><?php echo "Hello ".$uid; ?></a></li>
<li><?php echo "<img src='".$row['imageuser']."'>";?><div class="crypt"><?php echo $row2[$name] ?></div></li>
<li><img src="images/crypcoinfinal.png"><div class="cc"><?php echo $row2['cc'] ?></div></li>
<li><a href="back/logout.php">Log Out</a></li>

</ul>

</div>

<div id="second">

<ul>
<li><img src="images/Circle-Solid-List-512.png" onclick="slide()" id="slidebutton"></li>
<li><a href="portfolio.php">My Portfolio</a></li>
<li><a>Trade</a></li>
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
<li><a href='rules.php'>Rules</a></li><br>
<li><a href='referearn.php'>Refer & Earn</a></li><br>
<li><a href='referral.php'>Referral</a></li><br>
<li><a href='AboutUslogged.php'>About Us</a></li><br>
<li><a href='tnc.php'>Terms & Conditions</a></li><br>
<li><a href='privacy.php'>Privacy Policy</a></li><br>
<li><a href='back/logout.php'>Log Out</a></li><br>



</ul>

</div>"

?>


<hr>


<div id="headform">

<form action="tradecrypto.php" method="POST">
<button type="submit">GO BACK</button>
</form>

<form action="tradecrypto.php" method="POST">
	<button type="submit">Trade CryptoCurrencies</button>
</form>
 
 </div>

  <hr style="border-color:orange;height:2px">

  <?php

$name=$_SESSION['name'];
$sql="SELECT * FROM cryptomarket WHERE name='$name';";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

echo "<div id='main'>

<ul>

 <li><img src='".$row['imageuser']."'></li>
 <li>
 <center><div id='headname'>".$row['name']."</div></center><br><br><br>


 <span class='sub'>Market Capitalization:</span><a class='subval'>"."  ".$row['market_cap']."</a><br><br>
 <span class='sub'>Price:</span><a class='subval'>"."  ".$row['price']."</a><br><br>
 <span class='sub'>Change(24hr):</span>"."  ".$row['changes']."<br><br>
  <span class='sub'>Volume:</span><a class='subval'>"."  ".$row['volume']."</a><br><br>
  <span class='sub'>Circulating Supply:</span><a class='subval'>"."  ".$row['circulating_supply']."</a><br><br><br><br><br>



 </li>

<li><a id='show' onclick='show()'>Show More Details</a><br><div id='description'>".$row['description']

."</div>
</li>

 <li>
 <div id='enter'>

<span>Enter Quantity:</span> </div> 

<div class='quantity'>
<form method='POST' action='back/buynsellback.php'>
<input type='number' name='quantity' step='0.0001'></div> <br><br>

<div id='bns'>
<button type='submit' name='buy' value='".$name."'>BUY</button>
<button type='submit' name='sell' value='".$name."'>SELL</button>
</div>

</form></li>

<li></li>

</ul>

</div>";

?>  



<?php

if (isset($_GET['buy'])) {
  
   $data=$_GET['buy'];

   if ($data=='insuffcredit') {
    echo "<script>alert('You have insufficient CC to buy this CryptoCurrency.');</script>";
   }

   if ($data=='success') {
    echo "<script>alert('Felicidades! You have successfully buy CryptoCurrency. Trade More Learn More Earn More.');</script>";
    echo "<audio autoplay>
  
<source src='audio/coins-in-hand-1.mp3' type='audio/mp3' />

</audio>";
   }
   

}


if (isset($_GET['sell'])) {
  
   $data=$_GET['sell'];

   if ($data=='insuffcryptos') {
    echo "<script>alert('You have insufficient CryptoCurrency to sell.');</script>";
   }

   if ($data=='success') {
    echo "<script>alert('Felicidades! You have successfully sell CryptoCurrency. Trade More Learn More Earn More.');</script>";
    echo "<audio autoplay>
  
<source src='audio/coins-in-hand-1.mp3' type='audio/mp3' />

</audio>";
   }
   

}



?>


</body>
</html>


