<!DOCTYPE HTML public "-w3c//dtd//xhtml 1.0 transitional//en" "http://www.w3.org/tr/xhtml1/dtd/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Virtual Lab-Dayalbagh Educational Institute</title>
<link rel="shortcut icon" type="image/x-icon" href="images/icon.ico">
<link href="css/main.css" rel="stylesheet" type="text/css">
<link href="css/dropdown.css" media="all" rel="stylesheet" type="text/css" />
<link href="css/advanced.css" media="all" rel="stylesheet" type="text/css" />
<script language="javascript">
<!-- 
var isNS = (navigator.appName == "Netscape") ? 1 : 0;
  if(navigator.appName == "Netscape") document.captureEvents(Event.MOUSEDOWN||Event.MOUSEUP);
  function mischandler(){
   return false;
 }
  function mousehandler(e){
 	var myevent = (isNS) ? e : event;
 	var eventbutton = (isNS) ? myevent.which : myevent.button;
    if((eventbutton==2)||(eventbutton==3)) return false;
 }
 document.oncontextmenu = mischandler;
 document.onmousedown = mousehandler;
 document.onmouseup = mousehandler;
 
window.onload = init; 
function init() {
  disableDraggingFor(document.getElementById("draggingDisabled"));
} 
function disableDraggingFor(element) {
  // this works for FireFox and WebKit in future according to http://help.dottoro.com/lhqsqbtn.php
  element.draggable = false;
  // this works for older web layout engines
  element.onmousedown = function(event) {
                event.preventDefault();
                return false;
};
}
-->
</script>
</head>
<body id="draggingDisabled" bgcolor="#FFFFFF">
<div id="header_main"></div>
<div id="header">
<ul class="dropdown dropdown-horizontal">
<?php
ini_set("display_errors","Off");
echo <<<EOQ
	<li><a href="home.php">Home</a></li>
	<li><a href="Crankshaft.php">Crankshaft</a></li>
	<li class="dir"><a href="#">Simulations</a>
	<ul>
	<li><a href="CrankSimulation.php?CrankShaft/SingleCylinder_Crankshaft.mp4">Single cylinder crankshaft</a></li>
	<li class="dir"><a href="#">Multi cylinder crankshaft step-1</a>
	<ul>
	<li><a href="CrankSimulation.php?CrankShaft/MultiCylinder_Crankshaft.mp4">Multi cylinder crankshaft</a></li>
	<li><a href="CrankSimulation.php?CrankShaft/CrankshaftView.mp4">Multi cylinder crankshaft with strain</a></li>
	<li><a href="CrankSimulation.php?CrankShaft/CrankshaftGraph.mp4">Multi cylinder crankshaft with Curve</a></li>
	</ul>
	</li>
	<li class="dir"><a href="#">Multi cylinder crankshaft step-2</a>
	<ul>
	<li><a href="CrankSimulation.php?CrankShaft/NextCrankshaft.mp4">Multi cylinder crankshaft</a></li>
	<li><a href="CrankSimulation.php?CrankShaft/ViewCrankshaft.mp4">Multi cylinder crankshaft with strain</a></li>
	<li><a href="CrankSimulation.php?CrankShaft/CurveCrankshaft.mp4">Multi cylinder crankshaft with Curve</a></li>
	</ul>
	</li>
	</ul>
	</li>
	<li><a href="MCQ_Crankshaft.php">Self Check Quiz</a></li>
EOQ;
?>
</ul></div>
<div><center>
<?php
	$value = $_SERVER['QUERY_STRING'];
	print <<<EOQ
	   <object id="player" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" name="player" width="1020" height="600"> 
		<param name="movie" value="player.swf"/> 
		<param name="allowfullscreen" value="true"/> 
		<param name="wmode" value="transparent"/>
		<param name="allowscriptaccess" value="always"/> 
		<param name="flashvars" value="file=$value&autostart=true&repeat=always&image=images/DEILOGO.jpg"/> 
		<embed 
			wmode="transparent"
			type="application/x-shockwave-flash"
			id="player2"
			name="player2"
			src="player.swf" 
			width="1020" 
			height="600"
			allowscriptaccess="always" 
			allowfullscreen="true"
			flashvars="file=$value&autostart=true&repeat=always&image=images/DEILOGO.jpg"/> 
	</object> 
EOQ;
if(stristr($value,SingleCylinder_Crankshaft))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
The Crankshaft Forging process produces a crankshaft which has higher metal density, and greater strength and resistance to flexing. Every engine is different and has different requirements. So, depending on the needs and type of engine, the relevant crankshaft is used it can be either forged crankshaft or a cast crankshaft or it can be a billet crankshaft.
In the given video of simulation, one can see the crankshaft forming process. In this process the billet is compressed and deformed by closed impression die forming process. In this process the upper half section of the crankshaft is impressed on the upper die while lower half of the crankshaft is impressed on the lower die.
Now consider the various parameters used in the crankshaft forming process. The material of the billet is chromium alloy steel. The initial temperature of the billet is 1100<sup>o</sup>C . The billet is placed over lower die. The hydraulic press is used to deform the billet.
The left hand portion the video shows the deformation of billet. The upper die with hydraulic press compresses the billet with very high force in downward direction and severely deform it. Due to high deforming force and  high billet temperature ,material starts deforming plastically and moves into the impressions  created in the upper and lower die. 
At the final height the billet is deformed into semi-finished crankshaft. Final shape is obtained after various heat treatment processes and machining of the semi-finished crankshaft. The upper right -hand side of the video shows the variation of the strain at various regions of the billet during deformation process. 
Initially the strain in the billet is zero but at the end of the operation the equivalent strain rises upto 1.38. Similarly  lower right-hand side of the video shows the variation of the temperature of the billet. Final crankshaft is shown at the end .It has parts crankpin, shaft and the counter-weights in semi-finished condition.
</td></tr></table>
<?php
}elseif(stristr($value,MultiCylinder_Crankshaft))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
On the left hand side one can see the crankshaft hot forging-step 1. On the extreme left, the scale shows the equivalent strains generated in the crankshaft. On the right hand side, the picture shows 3 red parts. The 1<sup>st</sup> red part is the initial billet which is used for 1<sup>st</sup> step forging. 
The 2nd red part shows the forged billet after the 1<sup>st</sup> step. This is the intermediate step. The 3rd  red part shows the final forged crankshaft after forging in step-2. The lower two yellow parts shows the upper dies used for step 1 and step 2 processes respectively. The green coloured part shows the lower die which used for both steps.
</td></tr></table>
<?php
}elseif(stristr($value,CrankshaftView))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
On the left hand side, one can see the hot  forming operation on crankshaft in step 1. On the right hand, top side, the equivalent strains generated in crankshaft are observed when seen from front where as on the right hand bottom end, the equivalent strains generated in crankshaft are observed when seen from bottom. 
The scales on the right side of screen shows, the equivalent strains generated in the crankshaft.
</td></tr></table>
<?php
}elseif(stristr($value,CrankshaftGraph))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
On the left hand side, one can see the process of crankshaft hot forging-step 1. On the extreme left, the scale shows the equivalent strains generated in the crankshaft. 
On the right hand side, the graph for the upper die shows Force Vs Time graph. On X axis, Time is taken in seconds and on Y- axis,  Force is taken in Tonnes. The maximum force needed for hot forming in  Step 1 is around 809 tonnes.
</td></tr></table>
<?php
}elseif(stristr($value,NextCrankshaft))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
On the left hand side, one can see the forming operation on crankshaft in step 2. On the right hand, top side, the equivalent strains generated in crankshaft are observed when seen from front where as on the right hand bottom end, the equivalent strains generated in crankshaft are observed when seen from bottom. 
The scales on the right side of screen shows, the equivalent strains generated in the crankshaft.
</td></tr></table>
<?php
}elseif(stristr($value,ViewCrankshaft))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
On the left hand side one can see the Step 2 of crankshaft hot forging. One can visualize the changes in microstructure in crankshaft by seeing changes in the mesh. On the right hand side, the picture shows 3 red parts. The 1<sup>st</sup> red part is the initial billet which is used for 1<sup>st</sup> step forging. 
The 2nd red part shows the forged billet after the 1<sup>st</sup> step. This is the intermediate step. The 3rd  red part shows the final forged crankshaft after forging in step-2. The lower two yellow parts shows the upper dies used for step 1 and step 2 processes respectively. The green coloured part shows the lower die which used for both steps.
</td></tr></table>
<?php
}elseif(stristr($value,CurveCrankshaft))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
On the left hand side, one can see the process of crankshaft hot forging-step 2. On the right hand side, the graph for the upper die shows Force Vs Time graph. On X axis, Time is taken in seconds and on Y- axis, Force is taken in Tonnes.
</td></tr></table>
<?php
}
?>
</center></div>
<div id="footer">
&copy; Metal Forming Virtual Simulation Lab - Dayalbagh Educational Institute (www.dei.ac.in)
</div>	
</body>
</html>