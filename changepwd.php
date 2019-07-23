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

  <title>Change Password</title>

 <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="shortcut icon" type="img/png" href="images/logo33.png">
    <link rel="stylesheet" type="text/css" href="changepwd2.css">
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

<br><br>



<div id="loginbox" style="background-color:#f8f6f6 ">
  
  <ul>
       <li></li>
       <li>
    
         <div id="form">
          <form action="back/changepwdback.php" method="POST">
               <label>Change Password</label><br>
               <input type="text" name="oldpwd" placeholder="Old Password"><br>
               <input type="password" name="newpwd" placeholder="New Password"><br>
               <button type="submit" name="submit">Change</button>

          </form>
         </div>

       </li>


  </ul>


</div>


<?php

if (isset($_GET['change'])) {
  
  $data=$_GET['change'];

  if ($data=='success') {
    echo "<script>alert('Your Password has been successfully changed !');</script>";
  }elseif($data=='nomatch') {
    echo "<script>alert('Your Old Password is incorrect.');</script>";
  }elseif($data=='empty') {
    echo "<script>alert('Fill all the fields. ');</script>";
  }


}


?>

</body>
</html>


