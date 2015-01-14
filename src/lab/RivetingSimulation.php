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
	<li><a href="Riveting.php">Riveting</a></li>	
	<li class="dir"><a href="#">Simulations</a>
	<ul>	
	<li><a href="RivetingSimulation.php?Riveting/RivetingProcess.mp4">Riveting process</a></li>
	<li class="dir"><a href="#">Rivet Forming</a>
	<ul>
	<li><a href="RivetingSimulation.php?Riveting/RivetForming.mp4">Rivet forming</a></li>
	<li><a href="RivetingSimulation.php?Riveting/RivetStrainForming.mp4">Rivet forming with strain</a></li>
	<li><a href="RivetingSimulation.php?Riveting/RivetCurveForming.mp4">Rivet forming with forging force</a></li>
	</ul>
	</li>
	<li class="dir"><a href="#">Split riveting</a>
	<ul>
	<li><a href="RivetingSimulation.php?Riveting/RivetingSplit.mp4">Split Riveting</a></li>
	<li><a href="RivetingSimulation.php?Riveting/SplitRiveting_Kinematics.mp4">Split Riveting - Initial Kinematics</a></li>
	<li><a href="RivetingSimulation.php?Riveting/SplitRiveting_CutSection.mp4">Split Riveting Cut-Section</a></li>
	</ul>
	</li>
	<li class="dir"><a href="#">Flat Riveting</a>
	<ul>
	<li><a href="RivetingSimulation.php?Riveting/FlatRiveting.mp4">Flat Riveting</a></li>
	<li><a href="RivetingSimulation.php?Riveting/FlatStrainRiveting.mp4">Flat Riveting with Strain</a></li>
	<li><a href="RivetingSimulation.php?Riveting/FlatCurveRiveting.mp4">Flat Riveting with Graph</a></li>
	</ul>
	</li>
	</ul>
	</li>
	<li><a href="MCQ_Riveting.php">Self Check Quiz</a></li>
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
if(stristr($value,RivetingSplit))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
Riveting is a popular method of fastening and joining because of its simplicity, dependability and low cost. In this case when we have split rivets been employed for riveting, we take care that only upper plate gets pierced whereas in the lower plate the rivets are partially penetrated along its thickness.
This video shows the process of riveting by incorporating the split rivets for joining the two metallic plates together. The screen is been divided into four sections. On the top left side we have the assembled view of this process in motion which is depicting the kinematics of various parts involved. 
The punch whose motion is been guided by the guide, presses the rivet against the two plates, such that it completely pierces the upper one and gets penetrates to about half the length in lower one, taking a slight bend at its pointed edges at the end of its journey to the lower plate, in order to form a strong joint. The other three screen parts depicts the equilateral strains produced, under deformation.
</td></tr></table>
<?php
}elseif(stristr($value,FlatRiveting))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
In the given simulation video one can see the hot riveting process. In this video the rivet is used to tie the two sheets. The various parts of the process are punch, lower, two sheets one over other and the rivet. The process is hot forming in nature. The left hand side of the video shows the positions of various components of the process. 
Initially the rivet is placed in its position and the punch is moved downward to press the rivet from the top. The right hand top side of the simulation video shows the initial billet and final billet. The right hand bottom side of the video shows the variation in the billet during the deformation.
</td></tr></table>
<?php
}elseif(stristr($value,FlatStrainRiveting))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
In the given simulation video one can see the hot riveting process. In this video the rivet is used to tie the two sheets. The various parts of the process are punch, lower, two sheets one over other and the rivet. The process is hot forming in nature. 
The left hand side of the video shows the positions of various components of the process. The material of the billet is brass and the temperature is 150<sup>o</sup>C. Initially the rivet is placed in its position and the punch is moved downward to press the rivet from the top.
The right hand top side of the simulation video shows the various component like  upper die, lower die, sheet-1 and sheet-2. The right hand bottom side of the video shows the strain with mesh in the billet  during the deformation.
</td></tr></table>
<?php
}elseif(stristr($value,FlatCurveRiveting))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
In the given simulation video the rivet is placed in its position and the punch is moved downward to press the rivet from the top. The right hand top side of the simulation video shows the strain generated during the deformation. At the end of the process the equivalent strain on the rivet rises upto 3.1827.
The rivet is deformed severely from the top and hence the mechanical strength of the rivet is highly improved. The right hand bottom side of the video shows the variation of the force during the deformation.
</td></tr></table>
<?php
}elseif(stristr($value,RivetForming))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
In the left hand side of the simulation video we can see the processing and arrangement of the punch and the billet and lower die. Similarly in the right hand top side of the video we can see the initial billet and final billet. In the right hand bottom side of the video we can depict the variation in the billet during the riveting operation.
</td></tr></table>
<?php
}elseif(stristr($value,RivetingProcess))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
The video depicts the riveting process. A typical rivet initially has a head, body and a tail. The first picture in the video shows a general process of cold riveting. The process of riveting shows two halves of cylinder. 
The green and yellow dies are used for the riveting process and the rivet is shown by red. As the die moves, it deforms the rivet and permanently joins the two halves of cylinder. The final deformed rivet head of the rivet is shown at the end of video.
</td></tr></table>
<?php
}elseif(stristr($value,SplitRiveting_Kinematics))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
This simulation depicts the set-up of the split riveting process. In this video, we could see that on the left side of the screen, we have the full assembly of the riveting process using split type of rivet consisting of guide, 
punch, rivet (billet), upper plate, lower plate and lower fixed die; which is  meant for joining the two plates shown in green and yellow colour together. 
The right side of the screen shows the kinematics of the punch, rivet, upper and lower plate in a more simplified manner along with the meshing.
</td></tr></table>
<?php
}elseif(stristr($value,SplitRiveting_CutSection))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
This simulation depicts the simulation results coming from the split riveting process using the cut plane sectioning technique. In this video, we could see that on the left side of the screen, 
there is a pattern marked by various colour changes which depicts various zones pertaining to amount of contact between the surfaces. The right side of the screen shows the equilateral 
strain region pertaining to joining operation of the two plates. Take note of the contour lines near the mating end of the rivet with the two plates, this is more concentrated at the end of the rivet which is immersed in the two plates.
</td></tr></table>
<?php
}elseif(stristr($value,RivetStrainForming))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
Riveting is type of the forming operation. In a given simulation of cold forming process is used. The riveting operation is normally done in the two step but for ease of the riveting operation done in a single step. 
Consider the various perimeter of the simulation. The material of the billet is plane carbon steel and the temperature of the billet is 20<sup>o</sup>C. In the simulation video the billet is in finite element to have better analysis of the force. 
In this simulation the hydraulic press is used for riveting operation. In the right  hand top side of the simulation video we can see the image of punch and the billet and lower die. 
Similarly in the right hand bottom side of the video we can see the variation in the billet during the riveting operation. In the right hand side of the video we can see the processing of the riveting operation.
</td></tr></table>
<?php
}elseif(stristr($value,RivetCurveForming))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
In the left hand side of the simulation video we can see the variation of strain in the billet during riveting operation. Similarly in the right hand top side of the video we can see thevariation of 
strain with mesh in the billet during riveting operation. In the right hand bottom side of the video one can depict the variation of temperature in the billet during the operation by the graph.
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