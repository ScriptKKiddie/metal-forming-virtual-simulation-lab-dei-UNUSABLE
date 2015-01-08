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
	<li class="dir">Simulations
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
<div style="background-image:url(images/content_bg.jpg);position: relative; margin:auto; width: 1024px; min-height:550px;">
<div class="box">
<h2>Gear</h2><br/>
A gear is a rotating machine part having cut teeth, or cogs, which mesh with another toothed part in order to transmit torque. Two or more gears working in tandem are called a transmission and can produce a mechanical advantage through a gear ratio and thus may be considered a simple machine. Geared devices can change the speed, torque, and direction of a power source.
<br/><center><img src="images/Gear.png" alt="Gear" height="160" width="220"><br/>Figure: Gear</center><br/>
<span class="blue">Manufacturing Gears by Extrusion</span>: Extruding is used to form teeth on long rods, which are then cut into usable lengths and machined for bores and keyways etc. Nonferrous materials such as Aluminium and Copper alloys are commonly extruded rather than steels. This result in good surface finishes with clean edges and pore free dense structure with higher strength.
<br/><br/><center><img src="images/GearsManufacturing.png" alt="Gears Manufacturing"><br/>Figure: Gears Manufacturing</center><br/>
References:<br/>
http://en.wikipedia.org/wiki/Gear<br/>
http://nptel.iitm.ac.in/courses/IIT-MADRAS/Machine_Design_II/pdf/2_5.pdf
</div></div> 
<div id="footer">
&copy; Metal Forming Virtual Simulation Lab - Dayalbagh Educational Institute (www.dei.ac.in)
</div>
</body>
</html>