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

	<title>Terms & Conditions</title>

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
<span id="policieshead">Terms and conditions</span>
<div class="details">
BY SELECTING THE "Yes I agree to the Terms and Conditions" CHECKBOX, YOU ACCEPT THE TERMS AND CONDITIONS BELOW. PLEASE READ THEM CAREFULLY, THEY AFFECT YOUR RIGHTS AND OBLIGATIONS. THE FOLLOWING DESCRIBES THE TERMS ON WHICH NORTHWEST HERALDOFFERS YOU ACCESS TO SERVICES. 
	<br>
	<br>
	<br>
1. Participant Agreement
VOID WHERE PROHIBITED
This Participant Agreement ("Agreement") governs the use of Crypto Cash web site “we," “simulation” or "us") website and use made available through the site (collectively, the "site"). Anyone accessing the site agrees to abide by this Agreement and by the Rules of any contest in which they participate. Those Rules appear under Rules page and are incorporated herein by reference. 
<br>
<br>
<br>

Crypto Cash may modify this Agreement or the Rules at any time, and such modification shall be effective immediately upon posting on the site. Your continued access or use of the site after the modifications have become effective shall be deemed your conclusive acceptance of the modified Agreement or Rules. 
<br>
<br>
<br>
THIS SITE DOES NOT OFFER, SOLICIT OR ARRANGE FOR THE SALE OR PURCHASE OF SECURITIES. THE SITE AND ITS CONTESTS ARE PART OF A STOCK MARKET SIMULATION. NO ACTUAL SECURITIES ARE PURCHASED, SOLD OR TRADED AS PART OF THE SIMULATION. ALL INFORMATION IS PROVIDED FOR ENTERTAINMENT AND EDUCATIONAL PURPOSES ONLY. 
<br>
<br>
<br>
2. General
The simulations are for entertainment and educational purposes only. The site is limited to personal, non-commercial use and the content contained therein may not be copied, modified, duplicated or distributed in any form or for any reason without the express written consent of the owner. Data provided on this site may be delayed as specified by financial exchanges information providers. The owner and its vendors believe their data and text services to be reliable but accuracy is not warranted or guaranteed. 
<br>
<br>
<br>
3. Eligibility
Open to all students currently enrolled at Crypto Cash. To determine your eligibility for a particular contest, consult the Rules. 
<br>
<br>
<br>
4. Registration
Registration for the simulation is an online process. To register, click on the Sign Up  page. By registering to participate on Crypto Cash web site you agree that any and all information you supply in the registration process is current, truthful and complete. You also agree that you, the Participant, will be the only authorized user of the site using your user name and password. You agree not to provide or make known your user name and password to any other person for the purpose of facilitating that person's access and unauthorized use of the site. 

<div class="full"><a  id="show" onclick="more()">Show more</a></div>
<br>
<br>
<br>
<div id="showdetails">
	
5. Copyright Policy
You may not post, distribute, or reproduce in any way any copyrighted material, trademarks or other proprietary information without obtaining the prior written consent of the owner of such proprietary rights. Without limiting the foregoing, if you believe your work has been copied and posted on the Service in a way that constitutes copyright infringement with the following information: an electronic or physical signature of the person authorized to act on behalf of the owner of the copyright interest; a description of the copyrighted work that you claim has been infringed; a description of where the material you claim is infringing is located on the site; your address; telephone number; email address; a written statement by you that you have a good faith belief that the disputed use is not authorized by the copyright owner, its agent, or the law; a statement by you, made under penalty of perjury, that the above information in your notice is accurate and that you are the copyright owner or authorized to act on the copyright owner's behalf. 

<br>
<br>
<br>
<a style="font-weight: bold;color:black">DISCLAIMER: THIS SITE AND THE INFORMATION IT CONTAINS IS MADE AVAILABLE "AS IS," WITHOUT WARRANTY OF ANY KIND, EITHER EXPRESS OR IMPLIED. </a>
<br>
<br>
<br>

We make no guarantee that the information on this site is up to date, accurate, or complete and you should not rely on it for any decision or to take any action. By entering the simulation, you agree to waive any right to claim any ambiguity or error in the Rules or the Simulation itself and agree to be bound by these Rules and by all decisions Crypto Cash, which are binding and final. Failure to comply with these rules may result in disqualification from this simulation. In the event of any unanticipated occurrence that was not fully addressed by the Rules for Crypto Cash may modify the Rules to address such occurrence. Any changes to the Rules will be posted on the site. Crypto Cash conveys the information available on this site without responsibility for accuracy and Participants agree that errors contained in such information shall not be made the basis for any claim, demand or cause of action. We hereby disclaim any warranty that the information on this site will be free of interruption or that the site is free of viruses, worms, Trojan horses or other code that manifest contaminating or destructive properties. Crypto Cash is not responsible for telecommunications, network, electronic, technical or computer failures of any kind, inaccurate transcription of entry information, errors in any promotional or marketing materials, errors in these rules, any human or electronic error, including but not limited to, the administration of this simulation, or for entries that are stolen, misdirected, garbled, delayed by computer transmissions, lost, late or damaged. 

<br>
<br>
<br> 
<a style="font-weight: bold;color:black">CONTEST DISCLAIMER: All decisions by Crypto Cash in computing points, creating awards, conducting drawings or in conducting any and all other aspects of the simulation are made by Virtual Crypto-Currency Market Game in its sole discretion and are final and not subject to appeals. 
<br>
<br>
<br>
THE PROVIDERS OF THE SIMULATION SHALL BEAR NO LIABILITY WHATSOEVER IN CONNECTION WITH THE DESIGN, DEVELOPMENT OR ADMINISTRATION OF ANY SIMULATION OR IN ANY OTHER RESPECT IN CONNECTION WITH YOUR INTERACTION WITH THE SITE OR PARTICIPATION IN THIS SIMULATION.
 </a>
<br>
<br>
<br>  
7. Site Performance
Crypto Cash and the simulation providers are not liable for any delay or failure of the site or the simulation to perform. There is no guarantee that Participants will be able to access the site whenever and wherever desired. There may be extended periods of time when you cannot access the site for various reasons, many beyond our control. Heavy player traffic on the site may affect your access to the site. No corrections or adjustments will be made for trades, attempted trades or missed trades affected by the site's operation or downtime. The Simulation will not recognize the attempted trades the site did not process. 

<br>
<br>
<br> 
8. No Investment Advice by Crypto Cash
Crypto Cash does not provide tax, legal, or investment advice, nor is it authorized to provide such advice for the purposes of this simulation. We do not endorse any opinions, recommendations or predictions regarding stock performances that are posted on or linked from the site. Mention of a particular security on the site does not constitute a recommendation by Crypto Cash to buy, sell or hold that or any other security, nor is it to be considered an offer or a solicitation of an offer to buy or sell any actual security. You hereby agree that any investment decisions you make will be based solely on your evaluation of your financial circumstances, investment objectives, risk tolerance, financial condition and liquidity needs. We accept no liability for any direct or consequential loss arising from any use of the information available on the site. 

<br>
<br>
<br>  
9. Indemnification
You agree to indemnify, defend and hold harmless Crypto Cash, its officers, directors, employees, agents and affiliates from and against all losses, expenses, damages and costs, including reasonable attorneys' fees, arising out of or relating to any violation of this Agreement or any other wrongful activity related to use of the site (including but not limited to infringement of third parties' worldwide intellectual property rights or negligent or wrongful conduct) by you or any other person accessing the site using your user name and password. Winners assume all liability for any injury or damages caused or claimed to be caused by his or her participation in the simulation and/or the acceptance and/or use of any prize, and release Crypto Cash and its parents, subsidiaries, affiliates, agents and assigns and advertising and promotional agencies and their respective officers, directors, and employees (collectively "Released Parties") from any such liability. Released Parties assume(s) no responsibility for any injury or damage to Participant's or to any other person's computer relating to or resulting from this simulation. Entry constitutes permission (except where prohibited by law) to use winner's name, city, state, likeness and/or voice for purposes of advertising, promotion and publicity without additional compensation. Any attempt by a Participant or any other individual to deliberately damage any online service or website or undermine the legitimate operation of the simulation or the site is a violation of criminal and civil laws and should such an attempt be made, Crypto Cash reserves the right to seek damages and/or other remedies from any such person to the fullest extent permitted by law. 

<br>
<br>
<br> 
10. Crypto Cash Proprietary Right to Content
Winners of any phase of the simulation waive all rights of privacy and publicity and expressly allow Crypto Cash to publicize their names and prizes as it sees fit if any are offered. 
<br>
<br>
<br>
You hereby agree that any information transmitted to the site in connection with the simulation is not confidential and acknowledge that you have no expectation of privacy with respect to such information, subject to the terms of the site's Privacy Policy. By completing a registration, you hereby agree that any and all information that you supply in the registration process is current, truthful and complete. To the extent that any such information is not current, truthful and complete, you may be disqualified from the simulation and become illegible for prizes. 
<br>
<br>
<br>
11. Content Posted and Activities on the Site
You understand and agree that Crypto Cash may review and edit or delete any content, messages, photos or profiles (collectively, "Content") that in the sole judgment of Crypto Cash, violates this Agreement or which may be offensive, illegal or violate the rights, harm, or threaten the safety of any of Crypto Cash Participants. The following is a partial list of the type of Content and Activities that are illegal or prohibited on the site. We reserve the right to investigate and take appropriate legal action in its sole discretion against anyone who violates this provision, including without limitation, removing the offending Content from the Service and terminating the registration of each violator. Prohibited Content and Activities include, but are not limited to: 
<ul>

<li>Content that is patently offensive and promotes racism, bigotry, hatred or physical harm of any kind against any group or individual </li>
<li>Activity that harasses or advocates harassment of another person. </li>
<li>Transmitting "junk mail", "chain letters," or unsolicited mass mailing or "spamming". </li>
<li>Engaging in advertising to, or solicitation of, any Participant to buy or sell any products or services through the Service, including sports picks information. 
	 </li>
<li>Promoting information that you know is false or misleading or promotes illegal activities or conduct that is abusive, threatening, obscene, defamatory or libellous. 
	</li>
<li>Creating restricted or password only access pages or hidden pages or images (those not linked to or from another accessible page). 
	</li>
<li>Providing material that exploits people under the age of 18 in a sexual or violent manner or solicits personal information from anyone under 18. 
	</li>
<li>Soliciting passwords or personal identifying information for commercial or unlawful purposes from other users. 
	</li>
<li>Providing commercial activities and/or sales without our prior written consent such as contests, sweepstakes, barter, advertising, or pyramid schemes. 
	</li>
<li>Modifying, adapting, translating, or reverse engineering any portion of the service. 
	</li>
<li>Removing any copyright, trademark or other proprietary rights notices contained in or on the service. 
	</li>
<li>Using any robot, spider, site search/retrieval application, or other device to retrieve or index any portion or Crypto Cash service. 
	</li>
<li>Reformatting or framing any portion of the web pages that are part of the service. 
	</li>
<li>Creating user accounts by automated means or under false or fraudulent pretences. 
	</li>
<li>Submitting Materials that falsely express or imply that such Materials are sponsored or endorsed by Crypto Cash. 
	</li>
<li>Submitting Materials that infringe misappropriate or violate the intellectual property, publicity, privacy or other proprietary rights of any party. 
	</li>
<li>Transmitting any viruses, worms, defects, Trojan horses or other items of a destructive nature. 
	</li>
<li>Submitting Materials that are unlawful or promote or encourage illegal activity.</li>
</ul>

<br>
<br>
<br>
While Crypto Cash prohibits such conduct and content on its site, you understand and agree that you nonetheless may be exposed to such materials and that you use the service at your own risk.
<br>
<br>
<br> 
You must use the Service in a manner consistent with any and all applicable laws and regulations. You may not engage in advertising to, or solicitation of, any Participant to buy or sell any products or services through the Service. Although Crypto Cash cannot monitor the conduct of its Participants off the site, it is also a violation of these rules to use any information obtained from the Service to harass, abuse or harm another person or to contact, advertise to, solicit or sell to any Participant without their prior explicit consent. 
<br>
<br>
<br>
You may not use the service for any illegal or unauthorized purpose. Users agree to comply with all local rules regarding online conduct and acceptable content, including laws regulating the export of data from India or your country of residence. 
<br>
<br>
<br>
You are solely responsible for your conduct and any data, text, information, graphics, photos, profiles, audio and video clips, links and other content that you submit, post, and display on the service.
<br>
<br>
<br> 
We may, but shall have no obligation to, remove materials that we determine in our sole discretion are unlawful, fraudulent, threatening, libellous, defamatory, obscene or otherwise objectionable, or infringes or violates any party's intellectual property or other proprietary rights or these Terms of Service. 
<br>
<br>
<br>
12. Proprietary Rights to Third Party Content
<br>
By submitting, posting or displaying any Materials, including but not limited to commentary, blogs and opinion, on or through the simulation website, you automatically grant to us a worldwide, non-exclusive, sublicense able, transferable, royalty-free, perpetual, irrevocable right to copy, distribute, create derivative works of, publicly perform and display such Materials. Except for that information which is in the public domain or for which you have been given written permission, you may not copy, modify, publish, transmit, distribute, perform, display or sell any such proprietary information.
<br>
<br>
<br> 
13. Privacy
<br>
Except as noted in Paragraph 14 [Termination of Registration], of this Agreement, our use and disclosure of your personal information is governed by our Privacy Statement, which is hereby incorporated by reference into this Agreement.
<br>
<br>
<br> 
14. Termination of Registration
<br>
Crypto Cash reserves the right to prevent access by any Participant who acts irresponsibly or inappropriately in playing the simulation. Although all trading in the is fictional, Participants are expected to engage in trading activity that fully complies with all federal, state and/or provincial or specific securities country laws (including, without limitation, a prohibition against insider trading), as if you were trading actual stocks. Crypto Cash reserves the right to terminate Contest participation by any Participants suspected of cheating, attempting to exploit the contest or other inappropriate behaviour. We, at our sole discretion, may terminate or suspend your participation in the simulation for any reason. Any suspected fraudulent, abusive or illegal activity may be grounds for termination of a contest, in whole or in part, without liability to any contestant in that contest. Such activity also may be referred to appropriate law enforcement authorities. During the simulation(s), strict rules regarding player behaviour will be enforced. These may include penalties, up to and including disqualification, for foul language, abuse of players or any other person during the Event, or any other behaviour that Crypto Cash, in its sole judgment, believes to be detrimental to its conduct of the contest(s). If you are penalized or disqualified from the simulation(s) as a result of any rules infraction all prizes will be forfeited.
<br>
<br>
<br> 
15. Electronic Communications
<br>
By registering for the simulation, you agree to receive updates in the form of emails throughout the Term. By registering with us, you also agree to conduct business with us electronically and via the internet and to receive all required notices and disclosures in electronic format, including but not limited to email messages to an authorized email address that you have provided us. These email messages may contain the required notice or disclosure or may alert you to the availability of such a notice or disclosure on our website. We also reserve the right to effect delivery of notices or disclosures by posting to our site with no email transmission, to the extent permitted by applicable law. To access any of these notices or disclosures and to receive email messages, all you need is a valid email address, access to the internet and any generally available commercially available Web browser, such as Internet Explorer or Netscape Navigator.
<br>
<br>
<br> 
16. Assignability
<br>
You may not transfer any rights or obligations you may have under this Agreement. We reserve the right to transfer or to subcontract any right or obligation under this Agreement at our sole discretion without your consent.
<br>
<br>
<br> 
17. Severability
<br>
If any term or provision of this Agreement is found by a court of competent jurisdiction to be illegal, invalid or otherwise unenforceable, such term or provision shall not affect the Agreement's other terms or provisions, or the whole of this Agreement, but such term or provision shall be deemed modified to the extent deemed necessary to render such term or provision enforceable, and the rights and obligations of the Parties shall be construed and enforced accordingly, preserving to the fullest permissible extent the intent of the parties and the Agreement's purposes.
<br>
<br>
<br> 
18. Links
<br>
There are no unauthorized links permitted.
<br>
<br>
<br> 
19. No Third-Party Beneficiaries
<br>
A person who is not a party to this Agreement has no rights under this Agreement.
<br>
<br>
<br> 
20. Governing Law
<br>
This Agreement shall be governed by the laws of India.
<br>
<br>
<br> 



</div>

</div>



</body>
</html>