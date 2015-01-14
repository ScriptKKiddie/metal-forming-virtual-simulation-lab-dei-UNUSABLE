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
	<li><a href="Rod.php">Connecting Rod</a></li>
	<li class="dir"><a href="#">Simulations</a>
	<ul>
	<li class="dir"><a href="#">Forming of connecting rod step-1</a>
	<ul>
	<li><a href="RodSimulation.php?Connecting_Rod/SimulationSetup_1.mp4">Simulation Setup of step-1</a></li>
	<li><a href="RodSimulation.php?Connecting_Rod/RodStrain_1.mp4">Step-1 with strain</a></li>
	</ul>
	</li>
	<li class="dir"><a href="#">Forming of connecting rod step-2</a>
	<ul>
	<li><a href="RodSimulation.php?Connecting_Rod/SimulationSetup_2.mp4">Simulation Setup of step-2</a></li>
	<li><a href="RodSimulation.php?Connecting_Rod/RodStrain_2.mp4">Step-2 with strain</a></li>	
	</ul>
	</li>
	</ul>
	</li>
	<li><a href="MCQ_Rod.php">Self Check Quiz</a></li>
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
if(stristr($value,SimulationSetup_1))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
Connecting rod forming process comprises billet compression and deformation by closed impression die forming process. The upper half section of the connecting rod is impressed on the upper die while lower half of the connecting rod is impressed on the lower die. Right hand side of video shows initial, pre formed and final billet and lower half shows the dies. 
The material of the billet is manganese alloy steel and maintaining temperature of billet to 1250<sup>o</sup>C the forming of connecting rod take place. The variation of equivalent strain are shown over here at right hand side of video. Hydraulic press is used to deform the billet. The upper die with hydraulic press compresses the billet with very high force 
in downward direction and deforms it. Due to high deforming force and high billet temperature, material starts deforming plastically and moves into the impressions created in the upper and lower die. At the final height the billet is deformed into semi-finished connecting rod. Final shape is obtained after various heat treatment processes and machining of 
the semi-finished connecting rod. Preform connecting rod is shown at the end.
</td></tr></table>
<?php
}elseif(stristr($value,RodStrain_1))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
Connecting rod forming process comprises billet compression and deformation by closed impression die forming process. The upper half section of the connecting rod is impressed on the upper die while lower half of the connecting rod is impressed on the lower die. The material of the billet is manganese alloy steel and maintaining temperature of billet 
to 1250<sup>o</sup>C the forming of connecting rod take place. The variation of equivalent strain are shown over here at right hand side of video. Hydraulic press is used to deform the billet. The upper die with hydraulic press compresses the billet with very high force in downward direction and deforms it. Due to high deforming force and high billet temperature, 
material starts deforming plastically and moves into the impressions created in the upper and lower die. At the final height the billet is deformed into semi-finished connecting rod. Final shape is obtained after various heat treatment processes and machining of the semi-finished connecting rod. Preform connecting rod is shown at the end.
</td></tr></table>
<?php
}elseif(stristr($value,SimulationSetup_2))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
Connecting rod forming process comprises billet compression and deformation by closed impression die forming process. The upper half section of the connecting rod is impressed on the upper die while lower half of the connecting rod is impressed on the lower die. Right hand side of video shows initial, pre formed and final billet and lower half shows the dies. 
Considering various parameters and maintaining temperature of billet to 1250<sup>o</sup>C the forming of connecting rod take place. The material of the billet is manganese alloy steel. Hydraulic press is used to deform the billet. The upper die with hydraulic press compresses the billet with very high force in downward direction and deforms it. 
Due to high deforming force and high billet temperature, material starts deforming plastically and moves into the impressions created in the upper and lower die. At the final height the billet is deformed into semi-finished connecting rod. Final shape is obtained after various heat treatment processes and machining of the semi-finished connecting rod. Final connecting rod is shown at the end.
</td></tr></table>
<?php
}elseif(stristr($value,RodStrain_2))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
Connecting rod forming process comprises billet compression and deformation by closed impression die forming process. The upper half section of the connecting rod is impressed on the upper die while lower half of the connecting rod is impressed on the lower die. Considering various parameters and maintaining temperature of billet to 1250<sup>o</sup>C the forming of connecting rod take place. 
The variation of equivalent strain are shown over here at right hand side of video. The material of the billet is manganese alloy steel. Hydraulic press is used to deform the billet. The upper die with hydraulic press compresses the billet with very high force in downward direction and deforms it. Due to high deforming force and high billet temperature, material starts deforming plastically and 
moves into the impressions created in the upper and lower die. At the final height the billet is deformed into semi-finished connecting rod. Final shape is obtained after various heat treatment processes and machining of the semi-finished connecting rod. Final connecting rod is shown at the end.
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