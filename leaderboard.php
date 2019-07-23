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

	<title>Challenges/Leaderboard</title>

     <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="shortcut icon" type="img/png" href="images/logo33.png">
    <link rel="stylesheet" type="text/css" href="leaderboard5.css">
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

 <hr style="border-color:orange;height:2px">
<div id="colorh">
<span id="headc">Weekly Challenge</span><br>
<span id="headd">7 Days remaining for the completion of the Challenge ! </span><br><br>
<div id="challenge">Challenge: Make your CryptoCash > 10,000 CC </div><br>
<div id="compamou">

   <ul>

   <li> Total Challenge Completors: <?php   

     $sql="SELECT * FROM users WHERE cc>5000 ORDER BY cc DESC;";
     $result=mysqli_query($conn,$sql);
     $resultnumber=mysqli_num_rows($result);
     
     $finalresultnumber=0+$resultnumber;
     echo $finalresultnumber;


     ?></li>

   <li>Total Amount: &#8377 5000</li>


   </ul>


</div>
</div>

<br><br><br><br>

 <table>

<tr>

<td><h2>Rank</h2></td>
<td></td>
<td><h2>User Name</h2></td>
<td><h2>CryptoCash</h2></td>

</tr>

<?php

$i=0;

while ($row=mysqli_fetch_assoc($result)) {

  if ($row['profilestatus']==0) {
       $row['profilepath']='default.jpg';
    }

$i++;

echo "	
<tr>

<td>".$i."</td>
<td><img src='mainprofile/".$row['profilepath']."'></td>
<td>".$row['username']."</td>
<td>".$row['cc']."  CC</td>
</tr>";
	
}

?>



</table>


<br>
<br>
<br>

</body>
</html>

 
