<!DOCTYPE html>
<html>
<head>  
	<script type="text/javascript">

  window.addEventListener("load",function (){
     var load_screen=document.getElementById("load_screen");
     document.body.removeChild(load_screen);
     document.getElementById('whole').style.display='block';
  });


    var images=['guideslide/17.JPG','guideslide/1.JPG','guideslide/2.JPG','guideslide/3.JPG','guideslide/4.JPG','guideslide/5.JPG','guideslide/6.JPG','guideslide/15.JPG','guideslide/7.JPG','guideslide/16.JPG','guideslide/8.JPG','guideslide/9.JPG','guideslide/10.JPG','guideslide/11.JPG','guideslide/12.JPG','guideslide/13.JPG','guideslide/14.JPG','guideslide/18.JPG'];

    var i=0;

  function next(){
         
   i++;

  if (i>17) {
    i=0;
  }
  
   document.getElementById('slider').src=images[i];


  }



  function prev(){

  i--;

  if (i<0) {
    i=17;
  }
  
   document.getElementById('slider').src=images[i];

  }

   

	</script>
  <link rel="shortcut icon" type="img/png" href="images/logo33.png">
<link rel="stylesheet" type="text/css" href="guide.css">
	<title>User Guide</title>
    
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
<hr width="100%" style="border-style: solid;border-color:orange">


<div id="slide">
<ul>
  
<li><center><button onclick="prev()"><</button></center></li>
<li><img src="guideslide/17.JPG" id="slider"></li>
<li><center><button onclick="next()">></button></center></li>
</ul>
</div>


<div id="mobile">
<center><button onclick="prev()"><</button><button onclick="next()">></button></center>
</div>

</div>
</body>
</html>