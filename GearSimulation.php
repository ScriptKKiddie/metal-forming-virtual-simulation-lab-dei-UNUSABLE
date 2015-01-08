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
	<li><a href="Gear.php">Gear Manufacturing</a></li>	
	<li class="dir"><a href="#">Simulations</a>
	<ul>
	<li class="dir"><a href="#">Gear</a>
	<ul>
	<li><a href="GearSimulation.php?Gear/GearSetup.mp4">Gear setup</a></li>
	<li><a href="GearSimulation.php?Gear/GearStrain.mp4">Gear with strain</a></li>
	<li><a href="GearSimulation.php?Gear/GearGraph.mp4">Gear with curve</a></li>
	</ul>
	</li>
	<li class="dir"><a href="#">Bevel Gear</a>
	<ul>
	<li><a href="GearSimulation.php?Gear/GearBevelSetup.mp4">Bevel gear step-1</a></li>
	<li><a href="GearSimulation.php?Gear/NextBevelGear.mp4">Bevel gear step-2</a></li>
	<li><a href="GearSimulation.php?Gear/GearBevelStrain.mp4">Bevel gear with strain</a></li>
	</ul>
	</li>
	</ul>
	</li>
	<li><a href="MCQ_Gear.php">Self Check Quiz</a></li>
EOQ;
?>
</ul></div>
<div><center>
<?php
	$value = $_SERVER['QUERY_STRING'];
	print <<<EOQ
	    <object id="player" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" name="player" width="1020" height="582"> 
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
			height="582"
			allowscriptaccess="always" 
			allowfullscreen="true"
			flashvars="file=$value&autostart=true&repeat=always&image=images/DEILOGO.jpg"/> 
		</object> 
EOQ;
if(stristr($value,GearSetup))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
The video shows the process of gear formation using extrusion process. On the left side, one can observe the setup for gear extrusion. The extrusion die is shown with green and the punch is shown with yellow. The billet with mesh is shown in red. As the punch pushes the billet in the extrusion die, 
teeth of gear embossed in the die are engraved in the billet. On the right hand side, the picture shows three pictures. The red picture at top is the initial billet, the red picture in middle is the billet with teeth engraved after extrusion and the bottom picture shows the final gear after machining.
</td></tr></table>
<?php
}elseif(stristr($value,GearGraph))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
The video shows the process of gear formation using extrusion process. On the left side, one can observe the setup for gear extrusion. The extrusion die is shown with green and the punch is shown with yellow. The billet with mesh is shown in red. As the punch pushes the billet in the extrusion die, 
teeth of gear embossed in the die are engraved in the billet. On the right hand side, the graph is drawn between Force on Punch versus Pilot Height taking Pilot Height in milli-meters on X axis and Force in Tonnes on Y axis.
</td></tr></table>
<?php
}elseif(stristr($value,GearStrain))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
The video shows the process of gear formation using extrusion process. On the left side, one can observe the setup for gear extrusion. The extrusion die is shown with green and the punch is shown with yellow. The billet with mesh is shown in red. As the punch pushes the billet in the extrusion die, 
teeth of gear embossed in the die are engraved in the billet. On the right hand side, one can see the different strain contours, which can be determined by comparison with scale on the left of screen.
</td></tr></table>
<?php
}elseif(stristr($value,GearBevelSetup))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
This simulation shows the formation of straight bevel gears using forging. The right side shows the dies used for the step -1. Simulation for step 1 shows the initial billet placed with the dies used in step 1. The yellow die deforms the initial billet into an intermediate phase. 
The yellow die is moving in downward direction whereas green die is stationary. On the right is shown the billet deformed in the first step.
</td></tr></table>
<?php
}elseif(stristr($value,NextBevelGear))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
This is a simulation for step 2 of bevel gear formation. The resultant billet from step 1 is used for the final gear for formation in the second step. The image on the top right corner shows the dies used for step-2. 
The yellow is the upper die which forces down the billet to the required shape. The yellow die is moving in downward direction whereas green die is stationary. The image of billet on the right shows the deformation produced in the billet from step-1 to the desired shape.
</td></tr></table>
<?php
}elseif(stristr($value,GearBevelStrain))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
This simulation shows the generation of equivalent strain during the step -1 of bevel gear formation. The top right simulation shows the formation of equivalent strain as the upper die moves down. The average equivalent strain generated is 0.61 . 
The graph for the forging force is shown in the bottom right corner. The maximum force is 10.2 Tones. The simulation at left shows the simulation for bevel gear forging for step -1.
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