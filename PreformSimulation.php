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
	<li class="dir"><a href="PreformDefects.php">Preformed Defects</a>
	<ul>
	<li><a href="Defects.php">Forging Defects</a></li>
	</ul>
	</li>
	<li class="dir"><a href="#">Simulations</a>
	<ul>
	<li><a href="PreformSimulation.php?Defects/FlatSurfaceEffect.mp4">Effect of flat surface with the sharp corner</a></li>
	<li><a href="PreformSimulation.php?Defects/ThicknessEffect.mp4">Effect of small web thickness</a></li>
	<li><a href="PreformSimulation.php?Defects/SurfaceDefect.mp4">Surface defect</a></li>
	<li><a href="PreformSimulation.php?Defects/ShearingAnalysis.mp4">Shearing defect</a></li>
	<li><a href="PreformSimulation.php?Defects/DefectCombination.mp4">Combination of defects</a></li>
	</ul>
	</li>
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
if(stristr($value,FlatSurfaceEffect))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
In this simulation on the left side of the screen we can see the initial set-up of this forging process consisting of upper die, lower die and a billet. The upper die with the particular profile presses against the billet as it comes down in its downward stroke and imparts a specific shape to the billet, which is backed up by the lower stationary die. Here we can see that as the upper die moves down the sharpened 
edge protruding from the upper die meets with the sharp edges of the billet which increases friction, and due to inherited die design flaw (that usually occurs when dealing with such shapes) the billet could not be able to completely fill the die cavity at the end of the stroke. The right side of the screen shows the simulation results obtained from the effective strain analysis carried out during this process.
</td></tr></table>
<?php
}elseif(stristr($value,ThicknessEffect))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
In this simulation on the left side of the screen we can see the initial set-up of this forging process consisting of upper die, lower die and a billet. The upper die with the particular profile presses against the billet as it comes down in its downward stroke and imparts a specific shape to the billet, which is backed up by the lower stationary die. Here we can see that as the upper die 
moves down to its final stroke length, the billet material flows towards the closed die cavity to cover up the space available there, but due to the small web thickness present in the billet the cavity is seen in the magnified view between billet and the die. The right side of the screen shows the simulation results obtained from the effective strain analysis carried out during this process.
</td></tr></table>
<?php
}elseif(stristr($value,SurfaceDefect))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
In this simulation on the top side of the screen we can see the initial set-up of this forging process consisting of upper die, lower die and a billet. The upper die with the particular profile presses against the billet as it comes down in its downward stroke and imparts a specific shape to the billet, which is backed up by the lower stationary die. Here we can see that as upper die moves down to its final stroke length, 
the billet material flows to the closed die cavity to cover up the space available there, but due to improper die design, the material could not be able to fill up the complete space and this results in the final surface defect arising. The bottom side of the screen shows the simulation results obtained from the effective strain analysis carried out during this process. One can see the strain concentrated zones in the billet which depicts the formation of cracks and other kind of surface irregularities.
</td></tr></table>
<?php
}elseif(stristr($value,ShearingAnalysis))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
In this simulation on the left side of the screen we can see the initial set-up of this forging process consisting of upper die, lower die and a billet. The upper die with the particular profile presses against the billet as it comes down in its downward stroke and imparts a specific shape to the billet, which is backed up by 
the lower stationary die. As the upper die comes in contact with the billet surface, we can see that the material on contact zone instead of flowing inside the cavity gets sheared away from the confined path. The right side of the screen shows the simulation results obtained from the effective strain analysis carried out during this process.
</td></tr></table>
<?php
}elseif(stristr($value,DefectCombination))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
In this simulation on the top side of the screen we can see the initial set-up of this forging process consisting of upper die, lower die and a billet. The upper die with the particular profile presses against the billet as it comes down in its downward stroke and imparts a specific shape to the billet, which is backed up by the lower stationary die. 
The final formed billet consists of defects like the under-filled portions, cracks, sheared zones, buckled areas etc. The bottom side of the screen shows the simulation results obtained from the effective strain analysis carried out during this process. One can see the strain concentrated zones in the billet which depicts the formation of cracks and other kind of surface irregularities.
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