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
	<li class="dir"><a href="Defects.php">Forging Defects</a>
	<ul>
	<li><a href="PreformDefects.php">Preformed Defects</a></li>
	</ul>
	</li>
	<li class="dir"><a href="#">Simulations</a>
	<ul>
	<li class="dir"><a href="#">LAPS AND FOLDS</a>
	<ul>
	<li><a href="DefectSimulation.php?Defects/BucklingGraph.mp4">BUCKLING DEFECT - INITIAL KINEMATICS</a></li>
	<li><a href="DefectSimulation.php?Defects/Buckling_Strain.mp4">BUCKLING DEFECT - EQUIVALENT STRAIN</a></li>
	<li><a href="DefectSimulation.php?Defects/Shearing_Kinematics.mp4">SHEARING DEFECT - INITIAL KINEMATICS</a></li>
	<li><a href="DefectSimulation.php?Defects/Shearing_Strain.mp4">SHEARING DEFECT - EQUIVALENT STRAIN</a></li>
	</ul>
	</li>	
	<li><a href="DefectSimulation.php?Defects/OverFills.mp4">OVERFILLS</a></li>
	<li class="dir"><a href="#">UNDER FILLS</a>
	<ul>
	<li><a href="DefectSimulation.php?Defects/UnderFills1.mp4"><abbr title="Due to incorrect billet size">CASE-1</abbr></a></li>
	<li><a href="DefectSimulation.php?Defects/UnderFills2.mp4"><abbr title="Due to incomplete material flow at corners">CASE-2</abbr></a></li>
	</ul>
	</li>
	<li><a href="DefectSimulation.php?Defects/MultipleDefects.mp4">MULTIPLE DEFECTS</a></li>
	</ul>
	</li>
	<li><a href="MCQ_Defects.php">Self Check Quiz</a></li>
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
if(stristr($value,BucklingGraph))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
This simulation depicts one of the type of defect which occurs during certain forging operations, called as Buckling defect. In this video, we could see that on the left side of the screen we have the set up of the general forging process, in which an upper die presses against the billet which is backed up by another lower die of the shape.  
As the billet is getting deformed, one can see that in the middle section of it where the billet becomes very narrow in shape, there the unusual buckling and overlapping of billet material into one another takes place. This causes the final formed product to have reduced strength as well as irregular surface accuracy to be created, which is highly undesirable. 
The top right side shows this defect  in more magnified manner. The lower right side of screen shows the graph between Force acting on die versus the time. It depicts the amount of force increasing with the action of pressing the upper die on the billet, at point where billet is deformed to its end form, then this force gets tremendously increased.
</td></tr></table>
<?php
}elseif(stristr($value,Buckling_Strain))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
This simulation depicts the results coming from the Finite Element Analysis for the one of the type of forging defect called as buckling defect. In this video, we could see that on the left side of the screen we have the varying contact zones representing the portions where the contact between the billet and die comes into picture in the legend on the left side of the screen. 
Note that the green colour showing the contact of die at upper neck of the billet which is the cause of this defect. The right side of the screen shows the result coming as equilateral strain, with various colour codes according to the amount of strain coming. The change of colour from blue into green and then into yellow sections according to the level of strain been generated during this process.
</td></tr></table>
<?php
}elseif(stristr($value,OverFills))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
Overfills are another geometrical defect commonly caused by inadequate press force, energy and/or power. These may be symptomatic of the use of undersized equipment on jobs that are too big for it. Also, the improper control of lubricant vapours can cause this type of defect.<br/> 
In this simulation we could see the flash appearing as the die closes to its final position such that at the end of the stroke there is tremendous amount of increase in the die pressure which we could visualise through the peak rise in the shown graph (that is maximum at the moment of the maximum flash appearance in the end).
</td></tr></table>
<?php
}elseif(stristr($value,UnderFills1))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
Underfills are another geometrical defect commonly caused by inadequate press force, energy and/or power. These may be symptomatic of the use of undersized equipment on jobs that are too big for it. 
In this type of underfill defect, we see that part produced by the normal forging technique is left with certain amount of billet part left under filled as the work piece volume is insufficient to fill the complete cavity space provided in between the two die halves. This type of defect is generally caused due to the improper die design.  Also note the roughened surface near the region of such deficiency. 
<br/>The part produced is left with major problem of dimensional inaccuracy, which later could not be corrected by subsequent machining operations and hence the part is supposed to be rejected. Thus it is recommended to check up for the die design or to take sufficiently large size of the billet at before hand.
</td></tr></table>
<?php
}elseif(stristr($value,UnderFills2))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
In this type of underfill defect, we would observe that the part produced by the normal forging techniques is unable to reach to the sharp corners or side edges of the die cavity either due to lack of fluidity in material of work piece i.e. flow characteristics or 
due to pre-mature solidification of the heated billet as they loose their plastic behaviour in their journey to such narrow and cooled portions present in the die. Preventing the geometrical accuracy of the final work piece to be created. Thus forming undulated surfaces as shown in the simulation provided.  
<br/>So we need to keep the check on the material physical properties and also the initial temperature of the billet before being forged sufficiently in case when we need to deform the part to good extent.
</td></tr></table>
<?php
}elseif(stristr($value,Shearing_Kinematics))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
This simulation depicts one of the common type of defect which occurs in forging called Shearing defect. In this video, we could see that on the left side of the screen we have the set up of the general forging process, in which an upper die presses against the billet, deforming it in the usual manner, 
but due to certain design error of the die, we have shearing of the material of the billet instead of usual deformation of the billet. This is pointed by the arrow on the right side of the screen at the end of the simulation.
</td></tr></table>
<?php
}elseif(stristr($value,Shearing_Strain))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
This simulation depicts the results coming from the Finite Element Analysis. In this video, we could see that on the left side of the screen we have the varying contact zones representing the portions where the contact between the billet and die comes into picture in the legend on the left side of the screen. Note that the green colour showing the contact of die at upper neck of the billet 
which is the cause of this defect. The right side of the screen shows the result coming as equilateral strain, with various colour codes according to the amount of strain coming. The change of colour from blue into green and yellow sections showing the strained portions on the billet which shows the defect coming on the surface of the billet.
</td></tr></table>
<?php
}elseif(stristr($value,MultipleDefects))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
The given simulation describes the various kinds of defects that are arising during a general forging process. Here on the left section of the screen we can see the initial die set-up with the billet in between. The profile of the upper and the lower die is a bit complicated and due to such intricate profile, 
the formed billet carries multiple types of defects. These defects are shown in detailed view on top right side of the screen with their respective arrows, like the undulated surface cracks in the middle portion, the sheared zone, and finally the flashed part that is emerging out of the billet. 
The graph on the lower right corner shows the variation of force on die versus time, that depicts the contact forces arising due to impact on the billet at various point in time.
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