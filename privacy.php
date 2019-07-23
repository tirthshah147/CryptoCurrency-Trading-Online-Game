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



     var i=0;


     function more(){

     	i++;
	if (i%2==1) {
        document.getElementById('showdetails').style.display='block';
        document.getElementById('show').innerHTML='Show Less';
	}

	if (i%2==0) {
        document.getElementById('showdetails').style.display='none';
        document.getElementById('show').innerHTML='Show More';
	}

     }



</script>

	<title>Privacy Policy</title>

 <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="shortcut icon" type="img/png" href="images/logo33.png">
    <link rel="stylesheet" type="text/css" href="potn.css">
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
<span id="policieshead">Privacy Policy</span>
<div class="details">
Crypto Cash team recognizes and respects the privacy expectations of participants in its simulations. This Privacy Statement explains how we collect, use and protect your personally identifying information ("Personal Information") and under what circumstances it may be disclosed. This Privacy Statement is incorporated into our Agreement. All capitalized terms not defined herein are defined in that Agreement. 
	<br>
	<br>
	<br>
We reserve the right to change this Privacy Statement from time to time, consistent with applicable privacy and other laws. Unless prohibited by applicable law, any such change will apply thirty (30) days from date of posting on our site, unless you object ("opt-out") as provided below before that date. Your continued use of this site following such changes signifies your acceptance of those changes.
<br>
<br>
<br>
This Privacy Statement is incorporated into our Agreement. All capitalized terms not defined herein are defined in that Agreement. We reserve the right to change this Privacy Statement from time to time consistent with applicable privacy and other laws. Unless prohibited by applicable law, any such change will apply thirty (30) days from date of posting on our Site, unless you object ("opt-out") as provided below before that date. Your continued use of this site following such changes signifies your acceptance of those changes. 
<br>
<br>
<br>
<div class="full"><a  id="show" onclick="more()">Show more</a></div>
<br>
<br>	
<br>
<div id="showdetails">

The Information We Collect and How We Collect It Crypto Cash team collects personal Information from registered participants. As a condition of registration, participants may provide their name, address, and email address. Crypto Cash team may also collect additional information from participants and other visitors to the site through cookies or web beacons as detailed below. 
<br>
<br>
<br>
Crypto Cash is the sole owner of the information collected through our site. We sell, share or rent this information to others only in ways that are disclosed in this privacy statement or with your express consent.
<br>
<br>
<br>
Purpose of the Information Crypto Cash collects Personal Information from our participants to facilitate our simulations, including determining participants' eligibility. Personal Information allows us to keep track of our individual participants' performance, notify winners of their prizes and how those prizes may be collected and publicize results. The information further allows us to contact participants to announce contest updates or new contests.
<br>
<br>
<br> 
To Whom We Disclose the Information Crypto Cash will not sell or disclose your Personal Information to third parties in select circumstances as detailed in the following paragraph of this Privacy Statement.  First, as noted in the Agreement, we may publicize the names, likenesses and other information concerning winners of the contests as we deem appropriate.
<br>
<br>
<br>  

Second, we will not disclose your Personal Information to contractors or service providers who may provide services or perform functions on our behalf, such as an information technology service provider. Those contractors and service providers are permitted to use your Personal Information only for the purpose for which it has been provided and may not disclose it to any other third party except at our express direction and consistently with this Privacy Statement.
<br>
<br>
<br> 
Other Information Collected Through the Site Crypto Cash also collects other information through its site for personalization purposes to make it more interesting to you. Our site uses cookies, which are pieces of information that a website sends to your computer while you are viewing our site. While a cookie assigns a random, unique number to your computer, it does not contain information that would personally identify you even though we can associate the cookie with any personally identifying information that you provide us while visiting our site. This cookie is exclusive to Crypto Cash and we do not provide access to the cookie to any third party. While most browsers allow you to refuse cookies, this act will limit system performance and may even cause certain site features to malfunction or not to work.
<br>
<br>
<br>  
Our site also uses "web beacons." Web beacons are small pieces of data that are embedded in images on website pages. Web beacons allow us to analyse our site's traffic patterns, such as the frequency with which our users visit various parts of the site. The beacons' use may involve the transmission of information either directly to us or to another party authorized by us to collect information on our behalf. Web beacons may also be in HTML emails we send our participants and used to determine whether the participants have opened those emails or clicked on their links. Web beacons' information may be collected in a form that is personally identifiable.
<br>
<br>
<br> 
Opting Out of Changes to This Privacy Statement From time to time, we may amend this Privacy Statement. Should any amendments create additional ways in which we may collect or disclose your Personal Information, you may opt out of those amendments by e-mailing us within 30 days of the posting of the revised Privacy Statement on the site. We will always identify the date this Privacy Statement was last revised at the top of the statement. It is your responsibility to monitor the statement periodically to determine whether there have been changes. Opting out of an amendment to this Privacy Statement may subject you to termination of your registration and participation in any ongoing or future contests at our sole election and upon notice to you. 
<br>
<br>
<br>
Corrections To correct Personal Information you have submitted or if you have any questions about this Privacy Statement, contact us.




</div>

</div>


</body>
</html>
