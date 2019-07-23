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

	<title>My Portfolio</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="shortcut icon" type="img/png" href="images/logo33.png">
    <link rel="stylesheet" type="text/css" href="portfolio2.css">
</head>
<body>

<div id="first">
  
<ul>
<li><a href="portfolio.php"><img src="images/logo32.png"></a></li>
<li><a href="AboutUs.php"><span>Crypto</span>Cash</a></li>
<li><a><?php echo "Hello ".$uid; ?></a></li>
<li><a href="back/logout.php">Log Out</a></li>

</ul>

</div>

<div id="second">

<ul>
<li><img src="images/Circle-Solid-List-512.png" onclick="slide()" id="slidebutton"></li>
<li><a>My Portfolio</a></li>
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


<hr width="20px">

<div id="head">
   <ul>
   <li>CryptoCash</li>
   <li><div style="width:60%"><img src="images/crypcoinfinal.png"></div><div><a><?php  echo $row2['cc'] ?></a></div></li>
   </ul>


</div>


<table>

<tr>

<td><h1>Sr No.</h1></td>
<td></td>
<td><h1>Name</h1></td>
<td><h1>Quantity</h1></td>

</tr>

<?php

$sql="SELECT * FROM cryptomarket";
$result=mysqli_query($conn,$sql);


$sql2="SELECT * FROM users WHERE username='$uid';";
$result2=mysqli_query($conn,$sql2);
$resultcheck=mysqli_num_rows($result);
if ($resultcheck<1) {
	header('Location: signup.php');
}else{

   $row2=mysqli_fetch_assoc($result2);
   
   while ($row=mysqli_fetch_assoc($result)) {
   	
    $name=$row['name'];
    echo "
    <tr>

<td><a>".$row['id']."</a></td>
<td><img src='".$row['imageuser']."'></td>
<td><a>".$row['name']."</a></td>
<td><a>".$row2[$name]."</a></td>


   </tr>";

   }



}
?>


</table>

<?php

if (isset($_GET['login'])) {
  $data=$_GET['login'];
  if ($data=='success') {
    echo "<script>alert('Congratulations! You have successfully Logged In');</script>";
    echo "<audio autoplay>
  

<source src='audio/AUD-20180406-WA0029.mp3' type='audio/mp3' />

</audio>";

   
  }

}


?>


 
</body>
</html>