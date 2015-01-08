<?php session_start(); ?>
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
	<li><a href="Extrusion.php">Extrusion</a></li>
	<li class="dir"><a href="#">Simulation Bench</a>
	<ul>
	<li><a href="Aluminium.php">Simulation bench for aluminium</a></li>
	<li><a href="Titanium.php">Simulation bench for titanium</a></li>		
	</ul> 
	</li>
	<li><a href="Extrusioncomp.php">Comparative Simulation</a></li>
	<li class="dir"><a href="#">Applications</a>
	<ul>
	<li class="dir"><a href="#">Seamless Pipe</a>
	<ul>	
	<li><a href="Extru_Experiment.php?EXTRUSION/Applications/SeamlessPipe.mp4">Seamless pipe</a></li>
	<li><a href="Extru_Experiment.php?EXTRUSION/Applications/SeamlessCurvePipe.mp4">Seamless pipe with forging force</a></li>
	</ul>
	</li>
	<li><a href="Extru_Experiment.php?EXTRUSION/Applications/PipeExtrusion.mp4">Pipe Extrusion</a></li>
	<li><a href="Extru_Experiment.php?EXTRUSION/Applications/TurbineBlade.mp4">Turbine Blade</a></li>
	<li><a href="Extru_Experiment.php?EXTRUSION/Applications/GolfStick.mp4">Golf Stick</a></li>	
	</ul>
	</li>
	<li class="dir"><a href="#">Special Cases</a>
	<ul>
	<li><a href="Extru_Experiment.php?EXTRUSION/SpecialCases/Angle.mp4">CASE-1</a></li>
	<li><a href="Extru_Experiment.php?EXTRUSION/SpecialCases/EX1.mp4">CASE-2</a></li>
	<li><a href="Extru_Experiment.php?EXTRUSION/SpecialCases/EX2.mp4">CASE-3</a></li>
	<li><a href="Extru_Experiment.php?EXTRUSION/SpecialCases/EX3.mp4">CASE-4</a></li>
	<li><a href="Extru_Experiment.php?EXTRUSION/SpecialCases/EX4.mp4">CASE-5</a></li>
	<li><a href="Extru_Experiment.php?EXTRUSION/SpecialCases/EX5.mp4">CASE-6</a></li>
	<li><a href="Extru_Experiment.php?EXTRUSION/SpecialCases/EX6.mp4">CASE-7</a></li>
	<li><a href="Extru_Experiment.php?EXTRUSION/SpecialCases/EX7.mp4">CASE-8</a></li>
	<li><a href="Extru_Experiment.php?EXTRUSION/SpecialCases/EXFin.mp4">CASE-9</a></li>
	<li><a href="Extru_Experiment.php?EXTRUSION/SpecialCases/EXSlot1.mp4">CASE-10</a></li>
	<li><a href="Extru_Experiment.php?EXTRUSION/SpecialCases/EXSlot2.mp4">CASE-11</a></li>
	</ul> 
	</li>
	<li><a href="MCQ_Extrusion.php">Self Check Quiz</a></li>
EOQ;
?>
</ul></div>
<div><center>
<?php
$speech = $_SESSION['speech'];
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
if(!empty($speech)){
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
<?php
echo $speech;
?>
</td></tr></table>
<?php
}
unset($_SESSION['speech']);
//session_destroy();
if(stristr($value,ExtrusionAngles))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
In this video you can comparatively see the extrusion process of Aluminium pipe and solid pipe. In upper and lower left half of the video pipe extrusion process is shown  Which comprises of a mandrel in the extrusion die. On the upper half  Ram velocity is set as 1mm per sec. Die angle is specified as 60<sup>o</sup> and it is specified that there is no friction during this cold extrusion process  And on lower left half Ram velocity is set as 1mm per sec.  Die angle is specified as 90<sup>o</sup> and it is specified that there is no friction during this cold extrusion process.  Lower right half is showing  solid Extrusion process where Ram velocity is set as 1mm per sec.  
Die angle is specified as 45<sup>o</sup> and it is specified that there is high friction during this HOT extrusion process. Extrusion  forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section. One fourth of the solid shaft is shown over the screen because this solid shaft is axis symmetric with X and Y direction.
</td></tr></table>
<?php
}elseif(stristr($value,RadiusExtrusion))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
In this video you can comparatively see extrusion process of Aluminium solid shaft with 50% reduction in diameter of the billet. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. In the right half of the video Ram velocity is set as 1mm per sec. Die angle is specified as 60<sup>o</sup> and it is specified that there is high friction during this cold extrusion process. On the left half of the video we  give the radius of 5 mm and other conditions are kept same. 
Difference on the extrusion forces can be seen over the graph for both the Extrusion process of solid shaft formation with and without radius. As the pilot height reduces the force required to extrusion of pipe is increases. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section. One fourth of the solid shaft is shown over the screen because this solid shaft is axis symmetric with X and Y direction.
</td></tr></table>
<?php
}elseif(stristr($value,SolidPipe))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
In this video you can comparatively see  the extrusion process of Aluminium  pipe and solid pipe. In Right half of the video  pipe extrusion process is shown  Which comprises of a mandrel in the extrusion die. On left half of the section solid shaft extrusion process is shown. For both process  Ram velocity is set as 1mm per sec. Die angle is specified as 60<sup>o</sup> and it is specified that there is High  friction during this cold extrusion process are maintained.  Extrusion  forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. 
As the pilot height reduces the force required to extrusion of pipe is increases. The graph between extrusion force and pilot height shows that extrusion forces are high during the Pipe extrusion process than solid shaft  extrusion. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section. One fourth of the solid shaft is shown over the screen because this solid shaft is axis symmetric with X and Y direction.
</td></tr></table>
<?php
}elseif(stristr($value,Angle))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
In this video you can see the extrusion process of Aluminium material billet which comprises of a mandrel of different shape in the extrusion die. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. 
Right hand side picture showing different parts include in the process. There is Upper die, lower die, mandrel, billet. You can easily see the different section of mandrel. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section. The upper die is moving and lower die is stationary in extrusion process.
</td></tr></table>
<?php
}elseif(stristr($value,EX1))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
In this video you can see the extrusion process of Aluminium material billet which comprises of a mandrel of different shape in the extrusion die. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. 
Right hand side picture showing different parts include in the process. You can easily see the different section of mandrel. Left side coloured strip shows equivalent strain variation in the billet. The upper die is moving and lower die is stationary in extrusion process.
</td></tr></table>
<?php
}elseif(stristr($value,EX2))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
In this video you can see the extrusion process of Aluminium material billet which comprises of a mandrel of different shape in the extrusion die. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. 
Right hand side picture showing different parts include in the process. You can easily see the different section of mandrel. Left side coloured strip shows equivalent strain variation in the billet. The upper die is moving and lower die is stationary in extrusion process.
</td></tr></table>
<?php
}elseif(stristr($value,EX3))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
In this video you can see the extrusion process of Aluminium material billet which comprises of a mandrel of different shape in the extrusion die. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. 
Right hand side picture showing different parts include in the process. You can easily see the different section of mandrel. Left side coloured strip shows equivalent strain variation in the billet. The upper die is moving and lower die is stationary in extrusion process. One fourth of the solid shaft is shown over the screen because this solid shaft is axis symmetric with X and Y direction.
</td></tr></table>
<?php
}elseif(stristr($value,EX4))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
In this video you can see the extrusion process of Aluminium material billet which comprises of a mandrel of different shape in the extrusion die. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. 
Right hand side picture showing different parts include in the process. You can easily see the different section of mandrel. Left side coloured strip shows equivalent strain variation in the billet. The upper die is moving and lower die is stationary in extrusion process.
</td></tr></table>
<?php
}elseif(stristr($value,EX5))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
In this video you can see the extrusion process of Aluminium material billet which comprises of a mandrel of different shape in the extrusion die. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. 
Right hand side picture showing different parts include in the process. At the lower picture you can easily see the different section of mandrel. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section. The upper die is moving and lower die is stationary in extrusion process. One fourth of the solid shaft is shown over the screen because this solid shaft is axis symmetric with X and Y direction.
</td></tr></table>
<?php
}elseif(stristr($value,EX6))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
In this video you can see the extrusion process of Aluminium material billet which comprises of a mandrel of different shape in the extrusion die. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. 
Right hand side picture showing different parts include in the process. You can easily see the different section of mandrel. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section. The upper die is moving and lower die is stationary in extrusion process.
</td></tr></table>
<?php
}elseif(stristr($value,EX7))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
In this video you can see the extrusion process of Aluminium material billet which comprises of a mandrel of different shape in the extrusion die. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. 
Right hand side picture showing different parts include in the process. You can easily see the different section of mandrel. Left side coloured strip shows equivalent strain variation in the billet. The upper die is moving and lower die is stationary in extrusion process.
</td></tr></table>
<?php
}elseif(stristr($value,EXFin))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
In this video you can see the extrusion process of Aluminium material billet which comprises of a mandrel of different shape in the extrusion die. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. 
Right hand side picture showing different parts include in the process. You can easily see the different section of mandrel. Left side coloured strip shows equivalent strain variation in the billet. The upper die is moving and lower die is stationary in extrusion process.
</td></tr></table>
<?php
}elseif(stristr($value,EXSlot1))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
In this video you can see the extrusion process of Aluminium material billet which comprises of a mandrel of different shape in the extrusion die. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. 
Right hand side picture showing different parts include in the process. You can easily see the different section of mandrel. Left side coloured strip shows equivalent strain variation in the billet. The upper die is moving and lower die is stationary in extrusion process. In the graph you can see that for pilot height from 80mm to 0mm the extrusion forces approximately constant.
</td></tr></table>
<?php
}elseif(stristr($value,EXSlot2))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
In this video you can see the extrusion process of Aluminium material billet which comprises of a mandrel of different shape in the extrusion die. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. 
As the pilot height reduces the force required to extrusion of pipe is increases. Right hand side picture showing different parts include in the process. 
You can easily see the different section of mandrel. Left side coloured strip shows equivalent strain variation in the billet. The upper die is moving and lower die is stationary in extrusion process. One fourth of the solid shaft is shown over the screen because this solid shaft is axis symmetric with X and Y direction.
</td></tr></table>
<?php
}elseif(stristr($value,SeamlessPipe))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
Seamless pipe is formed by forming process. Forming  process may be defined as an extrusion process, normally performed  at the end of  semi-solid round to produces a larger cross-section. Extrusion process can be carried out cold or hot. In a given simulation of seamless pipe forming, cold extrusion process is used. The seamless pipe is normally done in the three steps but for ease of the simulation, 
seamless pipe is made in a single step. Consider the various parameters of this simulation. The material of the billet is aluminium. The temperature of the billet is 20<sup>o</sup>C. In the simulation video the billet is divided into small finite element to have better analysis of the force. The hydraulic press is used for deformation. In the right hand top side of the simulation video 
one can see the upper die or punch, the billet and lower die and seamless pipe. In the left hand bottom side of the video one can depict the variation of strain in the billet during the extrusion operation. Similarly in the right hand side we can see the extrusion process and arrangement of the die and billet.
</td></tr></table>
<?php
}elseif(stristr($value,TurbineBlade))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
The setup for turbine blade forging is as shown in the video. The yellow part is the plunger, the red part is the billet and the green part holds the blade cavity. During the process, the plunger pushes the billet from left hand side. The billet while moving inside the cavity deforms and takes the shape of the blade cavity inside the green die. 
In the video, one could see the blue mesh of the blade being formed during the process of forging. One could visualize the mesh size changing which gives an idea about the forces acting on the billet.The finished blade is shown at the end of the video.
</td></tr></table>
<?php
}elseif(stristr($value,GolfStick))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
The video shows the manufacturing of golf stick using metal forming techniques. A typical golf consist of shaft and loft without any seam with a handle for grip. A die for extrusion of shaft of golf stick is shown in grey. A sectioned view of the die shows the threaded portion for handle grip. 
In step one, a red billet is placed at the top of the cavity in green extrusion die. A yellow plunger presses the red billet shaft channel in extrusion die. It also has an accumulated portion for loft at the end of die. The billet progressing in the die can be seen and temperature of billet 
can be determined by the scale on left side. After extrusion, forging of loft is done to have different club heads. The dies shown in green and yellow can have different cavities depending upon the club. After forging with dies the final  loft section is shown at end of the video.
</td></tr></table>
<?php
}elseif(stristr($value,PipeExtrusion))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
In this simulation large diameter pipe is extruded into small diameter pipe using mandrel. Mandrel is used to form the inner diameter of extruded pipe, by changing the dimensions of mandrel, pipe thickness and inner diameter can be altered.
</td></tr></table>
<?php
}elseif(stristr($value,SeamlessCurvePipe))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
In the left hand side of the video one can depict the variation of strain with mesh  in the billet during the extrusion operation. In the right hand side of the video one can depict the variation of the temperature in the billet during the operation by the graph. The graph plot between the force and pilot height.
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