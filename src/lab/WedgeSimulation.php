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
	<li class="dir"><a href="WedgeRolling.php" title="Transverse Wedge Rolling">Wedge Rolling</a>
	<ul>
	<li><a href="Rolling_Process.php">Rolling Process</a></li>
	<li><a href="Ring_Rolling.php">Ring Rolling</a></li>
	<li><a href="ThreadRolling.php">Thread Rolling</a></li>
	</ul>
	<li class="dir"><a href="#">Simulations</a>
	<ul>
	<li><a href="WedgeSimulation.php?Rolling/WedgeRolling/PlanetaryRolling.mp4" title="Transverse Wedge Rolling">Using Planetary Rolls</a></li>
	<li><a href="WedgeSimulation.php?Rolling/WedgeRolling/ThreeRolls.mp4" title="Transverse Wedge Rolling">Using Three Rolls</a></li>
	</ul>
	</li>
	</li>
	<li><a href="MCQ_WedgeRolling.php">Self Check Quiz</a></li>
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
if(stristr($value,PlanetaryRolling))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
In this simulation we can see that on the left side of the screen we have the full set up of the Transverse Wedge Rolling process using planetary rolls is taking place. This includes components like- the outer roll, the inner roll and the billet in between. 
Here we can see that the wedge shaped profile included in both the outer and inner rolls, drives against the surface of the billet in an opposite sense of rotation, making the grooved surface on the billet. 
The right hand top corner shows the result of effective strain generated during this process, the concentration of strain in the contact zone increases as the gap between two concentric wedge shaped rolls decreases. 
The right hand bottom corner shows the graph between torque applied by rolls versus time taken.
</td></tr></table>
<?php
}elseif(stristr($value,ThreeRolls))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
In this simulation we can see that on the left side of the screen we have the full set up of the Transverse Wedge Rolling process using three rolls is taking place. This includes components like- three equidistant rolls and the billet in between them. 
Here we can see that the wedge shaped profile embossed on the surface of all three rolls drives against the surface of the billet in an opposite sense of rotation, making the grooved surface on the billet. 
The right hand top corner shows the result of effective strain generated during this process, the concentration of strain in the contact zone increases as the gap between three equidistant wedge shaped rolls decreases. 
The right hand bottom corner shows the graph between force on rolls versus time taken.
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