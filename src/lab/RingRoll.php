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
	<li class="dir"><a href="Ring_Rolling.php">Ring Rolling</a>
	<ul>
	<li><a href="Rolling_Process.php">Rolling Process</a></li>
	<li><a href="ThreadRolling.php">Thread Rolling</a></li>
	<li><a href="WedgeRolling.php" title="Transverse Wedge Rolling">Wedge Rolling</a></li>
	</ul>
	</li>
	<li class="dir"><a href="#">Simulations</a>
	<ul>
	<li class="dir"><a href="#">FLAT RING</a>
	<ul>
	<li><a href="RingRoll.php?ROLLING/RingRolling/FlatringSetup.mp4">Flat ring setup</a></li>
	<li><a href="RingRoll.php?ROLLING/RingRolling/FlatringStrain.mp4">Flat ring with strain</a></li>
	</ul>
	</li>
	<li class="dir"><a href="#">CURVED RING</a>
	<ul>	
	<li><a href="RingRoll.php?ROLLING/RingRolling/CurvedringSetup.mp4">Curved ring setup</a></li>
	<li><a href="RingRoll.php?ROLLING/RingRolling/CurvedringStrain.mp4">Curved ring with strain</a></li>
	</ul>
	</li>
	</ul>
	</li>
	<li><a href="MCQ_RingRolling.php">Self Check Quiz</a></li>
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
if(stristr($value,FlatringSetup))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
Ring Rolling is a metal forming process, which is used for rolling of rings. In this video, one can easily understand, how the ring rolling process is performed. The king in yellow color roll rolls over the ring which is shown in red against friction and the mandrel in green color exert pressure on opposite face, 
due to this the thickness of the ring continuously decreases and the diameter of the ring increases. The two conical rolls are placed axially to ensure that the width of the ring remains constant during the process. The shape of the ring can be made of different shapes by changing the surface of the king roll and the mandrel. 
In this video the ring is of flat surface. The image shows the initial and final condition of the ring. In the close up view one can clearly see the change in the shape of the ring, the change in mesh elements and position during the process.
</td></tr></table>
<?php
}elseif(stristr($value,FlatringStrain))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
Ring rolling process is used to roll a ring. It is rolled by the help of king roll and the mandrel. The width is maintained by the help of conical rolls. This video shows the equivalent strain generated and the plot of force applied by the mandrel in rolling the ring to its desired flat shape during hot ring rolling process. 
The value of equivalent strain increases from 0 to 4.56 as the mandrel rolls the ring. Change in the value of equivalent strain refers to the refinement of the microstructure of the material. Higher the equivalent strain more finer is the microstructure. 
As the process initiates the force applied increases very steeply then remains approximately constant. The maximum value of the force applied is 78 tones. Lower the value of forging force, more easily a metal forming process can be done, and there is a requirement of machinery of lower size.
</td></tr></table>
<?php
}elseif(stristr($value,CurvedringSetup))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
Ring Rolling is a metal forming process, which is used for rolling of rings. In this video, one can easily understand, how the ring rolling process is performed. The king in yellow color roll rolls over the ring which is shown in red against friction and the mandrel in green color exert pressure on opposite face, 
due to this the thickness of the ring continuously decreases and the diameter of the ring increases. The two conical rolls are placed axially to ensure that the width of the ring remains constant during the process. The shape of the ring can be made of different shapes by changing the surface of the king roll and the mandrel. 
In this video the ring is of curved surface. The image shows the initial and final condition of the ring. In the close up view one can clearly see the change in the shape of the ring, the change in mesh elements and position during the process.
</td></tr></table>
<?php
}elseif(stristr($value,CurvedringStrain))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
Ring rolling process is used to roll a ring. It is rolled by the help of king roll and the mandrel. The width is maintained by the help of conical rolls. This video shows the equivalent strain generated and the plot of force applied by the mandrel in rolling the ring to its desired curved shape during hot ring rolling process. 
The value of equivalent strain increases from 0 to 13.9083 as the mandrel rolls the ring. Change in the value of equivalent strain refers to the refinement of the microstructure of the material. Higher the equivalent strain more finer is the microstructure. 
As the process initiates the force applied increases very steeply then remains approximately constant. The maximum value of the force applied is 78 tones. Lower the value of forging force, more easily a metal forming process can be done, and there is a requirement of machinery of lower size.
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