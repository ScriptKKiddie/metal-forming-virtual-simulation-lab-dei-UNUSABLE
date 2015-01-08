<?php 
session_start(); 
ini_set("display_errors","Off");
?>
<!DOCTYPE HTML public "-w3c//dtd//xhtml 1.0 transitional//en" "http://www.w3.org/tr/xhtml1/dtd/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Virtual Lab-Dayalbagh Educational Institute</title>
<link rel="shortcut icon" type="image/x-icon" href="images/icon.ico">
<link href="css/main.css" rel="stylesheet" type="text/css">
<link href="css/dropdown.css" media="all" rel="stylesheet" type="text/css" />
<link href="css/advanced.css" media="all" rel="stylesheet" type="text/css" />
<style type="text/css">
h1{
font-family:Georgia,arial;
font-size:21px;
text-align:right;
}
b{
color: #8A1134;
font-family:Georgia,arial;
font-weight:normal;
font-size:19px;
}
</style>
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
<div style="background-image:url(images/content_bg.jpg);position: relative; margin:auto; width: 1024px; min-height:600px;">
<br><center><u style="font-size:2em; color:#ff00ff;">Interactive Simulation Bench of Extrusion Process for Aluminium</u>

<FORM METHOD="post" onSubmit="return valid(this)" action="Aluminium.php">
<table border="0" cellpadding="2" cellspacing="22">

<tr><td><h1>Extrusion</h1></td><td>:</td><td><input type="radio" name="ext" value="Solid"><b>Solid Shaft</b></td>
<td><input type="radio" name="ext" value="Pipe"><b>Pipe</b></td></tr>

<tr><td><h1>Die Angle</h1></td><td>:</td><td><input type="radio" name="angle" value=45><b>45&deg;</b></td>
<td><input type="radio" name="angle" value=60><b>60&deg;</b></td><td><input type="radio" name="angle" value=90><b>90&deg;</b></td></tr>

<tr><td><h1>Extrusion Die Curvature</h1></td><td>:</td><td><input type="radio" name="radius" value=1><b>Die With Curvature</b></td>
<td><input type="radio" name="radius" value=0><b>Die Without Curvature</b></td></tr>

<tr><td><h1>Coefficient of Friction</h1></td><td>:</td><td><input type="radio" name="fr" value="0"><b>Low</b></td><td><input type="radio" name="fr" value="Medium"><b>Medium</b></td>
<td><input type="radio" name="fr" value="High"><b>High</b></td></tr>

<tr><td><h1>Velocity of Ram/ Speed</h1></td><td>:</td><td><input type="radio" name="speed" value=1><b>1 mm/sec</b></td>
<td><input type="radio" name="speed" value=5><b>5 mm/sec</b></td></tr>

<tr><td><h1>Material/ Workpiece Temperature</h1></td><td>:</td><td><input type="radio" name="m/w" value="Cold"><b>Cold</b></td>
<td><input type="radio" name="m/w" value="Hot"><b>Hot</b></td></tr>
</table><br>

<center><input type="submit" name="send" value="Submit">
<input type="button" name="reset_form" value="Reset Form" onclick="this.form.reset();"></center>
</FORM></center>
<?php
$ext = $_REQUEST["ext"];
$an = $_REQUEST["angle"];
$cur = $_REQUEST["radius"];
$fr = $_REQUEST["fr"];
$sp = $_REQUEST["speed"];
$mw = $_REQUEST["m/w"];

if(isset($_POST["send"])){
if($an==45 && $fr=="0" && $sp==1 && $ext=="Pipe" && $cur==1 && $mw=="Cold"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_cold_pipe_r45/EX_AL_45_R5_MAN_F0_V1.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium pipe which comprises of a mandrel in the extrusion die. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. 
Ram velocity is set as 1mm per sec with the radius of 5mm. Die angle is specified as 45<sup>o</sup> and it is specified that there is no friction during this cold extrusion process. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section.";
}
elseif($an==45 && $fr=="0" && $sp==5 && $ext=="Pipe" && $cur==1 && $mw=="Cold"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_cold_pipe_r45/EX_AL_45_R5_MAN_F0_V5.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium pipe which comprises of a mandrel in the extrusion die. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases.  
Ram velocity is set as 5mm per sec with the radius of 5mm. Die angle is specified as 45<sup>o</sup> and it is specified that there is no friction during this cold extrusion process. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section.";
}
elseif($an==45 && $fr=="Medium" && $sp==1 && $ext=="Pipe" && $cur==1 && $mw=="Cold"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_cold_pipe_r45/EX_AL_45_R5_MAN_FM_V1.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium pipe which comprises of a mandrel in the extrusion die. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. 
Ram velocity is set as 1mm per sec with the radius of 5mm. Die angle is specified as 45<sup>o</sup> and it is specified that there is medium friction during this cold extrusion process.";
}
elseif($an==45 && $fr=="Medium" && $sp==5 && $ext=="Pipe" && $cur==1 && $mw=="Cold"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_cold_pipe_r45/EX_AL_45_R5_MAN_FM_V5.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium pipe which comprises of a mandrel in the extrusion die. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. 
Ram velocity is set as 5mm per sec with the radius of 5mm. Die angle is specified as 45<sup>o</sup> and it is specified that there is medium friction during this cold extrusion process.";
}
elseif($an==45 && $fr=="High" && $sp==1 && $ext=="Pipe" && $cur==1 && $mw=="Cold"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_cold_pipe_r45/EX_AL_45_R5_MAN_FH_V1.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium pipe which comprises of a mandrel in the extrusion die. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. 
Ram velocity is set as 1mm per sec with the radius of 5mm. Die angle is specified as 45<sup>o</sup> and it is specified that there is high friction during this cold extrusion process. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section.";
}
elseif($an==45 && $fr=="High" && $sp==5 && $ext=="Pipe" && $cur==1 && $mw=="Cold"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_cold_pipe_r45/EX_AL_45_R5_MAN_FH_V5.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium pipe which comprises of a mandrel in the extrusion die. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. 
Ram velocity is set as 5mm per sec with the radius of 5mm. Die angle is specified as 45<sup>o</sup> and it is specified that there is high friction during this cold extrusion process.";
}
elseif($an==60 && $fr=="0" && $sp==1 && $ext=="Pipe" && $cur==1 && $mw=="Cold"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_cold_pipe_r60/EX_AL60_R5_MAN_F0_V1.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium pipe which comprises of a mandrel in the extrusion die. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. 
Ram velocity is set as 1mm per sec with the radius of 5mm. Die angle is specified as 60<sup>o</sup> and it is specified that there is no friction during this cold extrusion process. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section.";
}
elseif($an==60 && $fr=="0" && $sp==5 && $ext=="Pipe" && $cur==1 && $mw=="Cold"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_cold_pipe_r60/EX_AL60_R5_MAN_F0_V5.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium pipe which comprises of a mandrel in the extrusion die. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases.  
Ram velocity is set as 5mm per sec with the radius of 5mm. Die angle is specified as 60<sup>o</sup> and it is specified that there is no friction during this cold extrusion process. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section.";
}
elseif($an==60 && $fr=="Medium" && $sp==1 && $ext=="Pipe" && $cur==1 && $mw=="Cold"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_cold_pipe_r60/EX_AL60_R5_MAN_FM_V1.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium pipe which comprises of a mandrel in the extrusion die. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. 
Ram velocity is set as 1mm per sec with the radius of 5mm. Die angle is specified as 60<sup>o</sup> and it is specified that there is medium friction during this cold extrusion process.";
}
elseif($an==60 && $fr=="Medium" && $sp==5 && $ext=="Pipe" && $cur==1 && $mw=="Cold"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_cold_pipe_r60/EX_AL60_R5_MAN_FM_V5.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium pipe which comprises of a mandrel in the extrusion die. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. 
Ram velocity is set as 5mm per sec with the radius of 5mm. Die angle is specified as 60<sup>o</sup> and it is specified that there is medium friction during this cold extrusion process.";
}
elseif($an==60 && $fr=="High" && $sp==1 && $ext=="Pipe" && $cur==1 && $mw=="Cold"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_cold_pipe_r60/EX_AL60_R5_MAN_FH_V1.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium pipe which comprises of a mandrel in the extrusion die. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. 
Ram velocity is set as 1mm per sec with the radius of 5mm . Die angle is specified as 60<sup>o</sup> and it is specified that there is high friction during this cold extrusion process. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section.";
}
elseif($an==60 && $fr=="High" && $sp==5 && $ext=="Pipe" && $cur==1 && $mw=="Cold"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_cold_pipe_r60/EX_AL60_R5_MAN_FH_V5.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium pipe which comprises of a mandrel in the extrusion die. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. 
Ram velocity is set as 5mm per sec with the radius of 5mm. Die angle is specified as 60<sup>o</sup> and it is specified that there is high friction during this cold extrusion process.";
}
elseif($an==90 && $fr=="0" && $sp==1 && $ext=="Pipe" && $cur==1 && $mw=="Cold"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_cold_pipe_r90/EX_AL90_R5_MAN_F0_V1.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium pipe which comprises of a mandrel in the extrusion die. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. 
Ram velocity is set as 1mm per sec with the radius of 5mm. Die angle is specified as 90<sup>o</sup> and it is specified that there is no friction during this cold extrusion process. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section.";
}
elseif($an==90 && $fr=="0" && $sp==5 && $ext=="Pipe" && $cur==1 && $mw=="Cold"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_cold_pipe_r90/EX_AL90_R5_MAN_F0_V5.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium pipe which comprises of a mandrel in the extrusion die. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. 
Ram velocity is set as 1mm per sec with the radius of 5mm. Die angle is specified as 90<sup>o</sup> and it is specified that there is high friction during this cold extrusion process. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section.";
}
elseif($an==90 && $fr=="Medium" && $sp==1 && $ext=="Pipe" && $cur==1 && $mw=="Cold"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_cold_pipe_r90/EX_AL90_R5_MAN_FM_V1.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium pipe which comprises of a mandrel in the extrusion die. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. 
Ram velocity is set as 5mm per sec with the radius of 5mm. Die angle is specified as 90<sup>o</sup> and it is specified that there is high friction during this cold extrusion process.";
}
elseif($an==90 && $fr=="Medium" && $sp==5 && $ext=="Pipe" && $cur==1 && $mw=="Cold"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_cold_pipe_r90/EX_AL90_R5_MAN_FM_V5.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium pipe which comprises of a mandrel in the extrusion die. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. 
Ram velocity is set as 5mm per sec with the radius of 5mm. Die angle is specified as 90<sup>o</sup> and it is specified that there is medium friction during this cold extrusion process.";
}
elseif($an==90 && $fr=="High" && $sp==1 && $ext=="Pipe" && $cur==1 && $mw=="Cold"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_cold_pipe_r90/EX_AL90_R5_MAN_FH_V1.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium pipe which comprises of a mandrel in the extrusion die. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. 
Ram velocity is set as 1mm per sec with the radius of 5mm. Die angle is specified as 90<sup>o</sup> and it is specified that there is medium friction during this cold extrusion process. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section.";
}
elseif($an==90 && $fr=="High" && $sp==5 && $ext=="Pipe" && $cur==1 && $mw=="Cold"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_cold_pipe_r90/EX_AL90_R5_MAN_FH_V5.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium pipe which comprises of a mandrel in the extrusion die. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. 
Ram velocity is set as 5mm per sec with the radius of 5mm. Die angle is specified as 90<sup>o</sup> and it is specified that there is no friction during this cold extrusion process.";
}
elseif($an==45 && $fr=="0" && $sp==1 && $ext=="Pipe" && $cur==0 && $mw=="Cold"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_cold_pipe_45/EX_PIPE_45_COLD_V1_F0.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium pipe which comprises of a mandrel in the extrusion die. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. 
Maximum force required during this process is about 200 tonnes. Ram velocity is set as 1mm per sec.  Die angle is specified as 45<sup>o</sup> and it is specified that there is no friction during this cold extrusion process. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature of about 179<sup>o</sup>C generated at varying cross section.";
}
elseif($an==45 && $fr=="0" && $sp==5 && $ext=="Pipe" && $cur==0 && $mw=="Cold"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_cold_pipe_45/EX_PIPE_45_COLD_V5_F0.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium pipe which comprises of a mandrel in the extrusion die. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. 
Maximum force required during this process is about 200 Tonnes. Ram velocity is set as 5mm per sec.  Die angle is specified as 45<sup>o</sup>  and it is specified that there is no friction during this cold extrusion process. Left side coloured strip shows Equivalent strain in the billet.";
}
elseif($an==45 && $fr=="Medium" && $sp==1 && $ext=="Pipe" && $cur==0 && $mw=="Cold"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_cold_pipe_45/EX_PIPE_45_COLD_V1_FM.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium pipe which comprises of a mandrel in the extrusion die. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. 
Maximum force required during this process is about 205 Tonnes. Ram velocity is set as 1mm per sec.  Die angle is specified as 45<sup>o</sup> and it is specified that there is medium friction during this cold extrusion process. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature of about 1030c generated at varying cross section.";
}
elseif($an==45 && $fr=="Medium" && $sp==5 && $ext=="Pipe" && $cur==0 && $mw=="Cold"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_cold_pipe_45/EX_PIPE_45_COLD_V5_FM.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium pipe which comprises of a mandrel in the extrusion die. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. 
Maximum force required during this process is about 200 Tonnes. Ram velocity is set as 5mm per sec.  Die angle is specified as 45<sup>o</sup> and it is specified that there is medium friction during this cold extrusion process.";
}
elseif($an==45 && $fr=="High" && $sp==1 && $ext=="Pipe" && $cur==0 && $mw=="Cold"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_cold_pipe_45/EX_PIPE_45_COLD_V1_FH.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium pipe which comprises of a mandrel in the extrusion die. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. 
Maximum force required during this process is about 250 Tonnes. Ram velocity is set as 1mm per sec.  Die angle is specified as 45<sup>o</sup> and it is specified that there is high friction during this cold extrusion process. Left side coloured strip shows Equivalent strain in the billet.";
}
elseif($an==45 && $fr=="High" && $sp==5 && $ext=="Pipe" && $cur==0 && $mw=="Cold"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_cold_pipe_45/EX_PIPE_45_COLD_V5_FH.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium pipe which comprises of a mandrel in the extrusion die. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. 
Maximum force required during this process is about 250 Tonnes. Ram velocity is set as 5mm per sec. Die angle is specified as 45<sup>o</sup> and it is specified that there is high friction during this cold extrusion process. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature of about 280<sup>o</sup>C generated at varying cross section.";
}
elseif($an==60 && $fr=="0" && $sp==1 && $ext=="Pipe" && $cur==0 && $mw=="Cold"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_cold_pipe_60/EX_PIPE_60_COLD_V1_F0.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium pipe which comprises of a mandrel in the extrusion die. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. 
Ram velocity is set as 1mm per sec.  Die angle is specified as 60<sup>o</sup> and it is specified that there is no friction during this cold extrusion process. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section.";
}
elseif($an==60 && $fr=="0" && $sp==5 && $ext=="Pipe" && $cur==0 && $mw=="Cold"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_cold_pipe_60/EX_PIPE_60_COLD_V5_F0.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium pipe which comprises of a mandrel in the extrusion die. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. 
Ram velocity is set as 5mm per sec. Die angle is specified as 60<sup>o</sup> and it is specified that there is no friction during this cold extrusion process. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section.";
}
elseif($an==60 && $fr=="Medium" && $sp==1 && $ext=="Pipe" && $cur==0 && $mw=="Cold"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_cold_pipe_60/EX_PIPE_60_COLD_V1_FM.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium pipe which comprises of a mandrel in the extrusion die. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. 
Ram velocity is set as 1mm per sec. Die angle is specified as 60<sup>o</sup> and it is specified that there is medium friction during this cold extrusion process. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section.";
}
elseif($an==60 && $fr=="Medium" && $sp==5 && $ext=="Pipe" && $cur==0 && $mw=="Cold"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_cold_pipe_60/EX_PIPE_60_COLD_V5_FM.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium pipe which comprises of a mandrel in the extrusion die. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. 
Ram velocity is set as 5mm per sec. Die angle is specified as 60<sup>o</sup> and it is specified that there is medium friction during this cold extrusion process. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section.";
}
elseif($an==60 && $fr=="High" && $sp==1 && $ext=="Pipe" && $cur==0 && $mw=="Cold"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_cold_pipe_60/EX_PIPE_60_COLD_V1_FH.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium pipe which comprises of a mandrel in the extrusion die. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. 
Ram velocity is set as 1mm per sec. Die angle is specified as 60<sup>o</sup> and it is specified that there is high friction during this cold extrusion process. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section.";
}
elseif($an==60 && $fr=="High" && $sp==5 && $ext=="Pipe" && $cur==0 && $mw=="Cold"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_cold_pipe_60/EX_PIPE_60_COLD_V5_FH.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium pipe which comprises of a mandrel in the extrusion die. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. 
Ram velocity is set as 5mm per sec.  Die angle is specified as 60<sup>o</sup> and it is specified that there is high friction during this cold extrusion process. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section.";
}
elseif($an==90 && $fr=="0" && $sp==1 && $ext=="Pipe" && $cur==0 && $mw=="Cold"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_cold_pipe_90/AL_PIPE_90_V1_COLD_F0.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium pipe which comprises of a mandrel in the extrusion die. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. 
Ram velocity is set as 1mm per sec. Die angle is specified as 90<sup>o</sup> and it is specified that there is no friction during this cold extrusion process. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section.";
}
elseif($an==90 && $fr=="0" && $sp==5 && $ext=="Pipe" && $cur==0 && $mw=="Cold"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_cold_pipe_90/AL_PIPE_90_V5_COLD_F0.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium pipe which comprises of a mandrel in the extrusion die. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. 
Ram velocity is set as 5mm per sec. Die angle is specified as 90<sup>o</sup> and it is specified that there is no friction during this cold extrusion process. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section.";
}
elseif($an==90 && $fr=="Medium" && $sp==1 && $ext=="Pipe" && $cur==0 && $mw=="Cold"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_cold_pipe_90/AL_PIPE_90_V1_COLD_FM.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium pipe which comprises of a mandrel in the extrusion die. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. 
Ram velocity is set as 1mm per sec. Die angle is specified as 90<sup>o</sup> and it is specified that there is medium friction during this cold extrusion process. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section.";
}
elseif($an==90 && $fr=="Medium" && $sp==5 && $ext=="Pipe" && $cur==0 && $mw=="Cold"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_cold_pipe_90/AL_PIPE_90_V5_COLD_FM.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium pipe which comprises of a mandrel in the extrusion die. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. 
Ram velocity is set as 5mm per sec. Die angle is specified as 90<sup>o</sup> and it is specified that there is medium friction during this cold extrusion process. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section.";
}
elseif($an==90 && $fr=="High" && $sp==1 && $ext=="Pipe" && $cur==0 && $mw=="Cold"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_cold_pipe_90/AL_PIPE_90_V1_COLD_FH.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium pipe which comprises of a mandrel in the extrusion die. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. 
Ram velocity is set as 1mm per sec. Die angle is specified as 90<sup>o</sup> and it is specified that there is high friction during this cold extrusion process. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section.";
}
elseif($an==90 && $fr=="High" && $sp==5 && $ext=="Pipe" && $cur==0 && $mw=="Cold"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_cold_pipe_90/AL_PIPE_90_V5_COLD_FH.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium pipe which comprises of a mandrel in the extrusion die. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. 
Ram velocity is set as 5mm per sec.  Die angle is specified as 90<sup>o</sup> and it is specified that there is high friction during this cold extrusion process. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section.";
$_SESSION['speech'] = "";
}
elseif($an==45 && $fr=="0" && $sp==1 && $ext=="Pipe" && $cur==1 && $mw=="Hot"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_hot_pipe_r45/EX_PIPE_AL_45_HOT_R5_MAN_F0_V1.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the hot extrusion process of Aluminium pipe which comprises of a mandrel in the extrusion die. This process is hot  extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. 
Maximum force required during hot extrusion process is less than cold extrusion process. Ram velocity is set as 1mm per sec with the radius of 5mm. Die angle is specified as 45<sup>o</sup> and it is specified that there is no friction during this hot extrusion process. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section.";
}
elseif($an==45 && $fr=="0" && $sp==5 && $ext=="Pipe" && $cur==1 && $mw=="Hot"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_hot_pipe_r45/EX_PIPE_AL_45_HOT_R5_MAN_F0_V5.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the hot extrusion process of Aluminium pipe which comprises of a mandrel in the extrusion die. This process is hot extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. 
Maximum force required during hot extrusion process is less than cold extrusion process. Ram velocity is set as 5mm per sec with the radius of 5mm. Die angle is specified as 45<sup>o</sup> and it is specified that there is no friction during this hot extrusion process. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section.";
}
elseif($an==45 && $fr=="Medium" && $sp==1 && $ext=="Pipe" && $cur==1 && $mw=="Hot"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_hot_pipe_r45/EX_PIPE_AL_45_HOT_R5_MAN_FM_V1.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the hot extrusion process of Aluminium pipe which comprises of a mandrel in the extrusion die. This process is hot extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. 
Maximum force required during hot extrusion process is less than cold extrusion process. Ram velocity is set as 1mm per sec with the radius of 5mm. Die angle is specified as 45<sup>o</sup> and it is specified that there is medium friction during this hot extrusion process.";
}
elseif($an==45 && $fr=="Medium" && $sp==5 && $ext=="Pipe" && $cur==1 && $mw=="Hot"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_hot_pipe_r45/EX_PIPE_AL_45_HOT_R5_MAN_FM_V5.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the hot extrusion process of Aluminium pipe which comprises of a mandrel in the extrusion die. This process is hot extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. 
Maximum force required during hot extrusion process is less than cold extrusion process. Ram velocity is set as 5mm per sec with the radius of 5mm. Die angle is specified as 45<sup>o</sup> and it is specified that there is medium friction during this hot extrusion process.";
}
elseif($an==45 && $fr=="High" && $sp==1 && $ext=="Pipe" && $cur==1 && $mw=="Hot"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_hot_pipe_r45/EX_PIPE_AL_45_HOT_R5_MAN_FH_V1.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the hot extrusion process of Aluminium pipe which comprises of a mandrel in the extrusion die. This process is hot extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. 
Maximum force required during hot extrusion process is less than cold extrusion process. Ram velocity is set as 1mm per sec with the radius of 5mm. Die angle is specified as 45<sup>o</sup> and it is specified that there is high friction during this hot extrusion process. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section.";
}
elseif($an==45 && $fr=="High" && $sp==5 && $ext=="Pipe" && $cur==1 && $mw=="Hot"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_hot_pipe_r45/EX_PIPE_AL_45_HOT_R5_MAN_FH_V5.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the hot extrusion process of Aluminium pipe which comprises of a mandrel in the extrusion die. This process is hot extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. 
Maximum force required during hot extrusion process is less than cold extrusion process. Ram velocity is set as 5mm per sec with the radius of 5mm. Die angle is specified as 45<sup>o</sup> and it is specified that there is high friction during this hot extrusion process.";
}
elseif($an==60 && $fr=="0" && $sp==1 && $ext=="Pipe" && $cur==1 && $mw=="Hot"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_hot_pipe_r60/EX_PIPE_AL_60_HOT_R5_F0_V1.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the hot extrusion process of Aluminium pipe which comprises of a mandrel in the extrusion die. This process is hot extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. 
Ram velocity is set as 1mm per sec with the radius of 5mm. Die angle is specified as 60<sup>o</sup> and it is specified that there is no friction during this hot extrusion process. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section.";
}
elseif($an==60 && $fr=="0" && $sp==5 && $ext=="Pipe" && $cur==1 && $mw=="Hot"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_hot_pipe_r60/EX_PIPE_AL_60_HOT_R5_F0_V5.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the hot extrusion process of Aluminium pipe which comprises of a mandrel in the extrusion die. This process is hot extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. 
Maximum force required during hot extrusion process is less than cold extrusion process. Ram velocity is set as 5mm per sec with the radius of 5mm. Die angle is specified as 60<sup>o</sup> and it is specified that there is no friction during this hot extrusion process.";
}
elseif($an==60 && $fr=="Medium" && $sp==1 && $ext=="Pipe" && $cur==1 && $mw=="Hot"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_hot_pipe_r60/EX_PIPE_AL_60_HOT_R5_FM_V1.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the hot extrusion process of Aluminium pipe which comprises of a mandrel in the extrusion die. This process is hot extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. 
Maximum force required during hot extrusion process is less than cold extrusion process. Ram velocity is set as 1mm per sec with the radius of 5mm. Die angle is specified as 60<sup>o</sup> and it is specified that there is medium friction during this hot extrusion process. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section.";
}
elseif($an==60 && $fr=="Medium" && $sp==5 && $ext=="Pipe" && $cur==1 && $mw=="Hot"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_hot_pipe_r60/EX_PIPE_AL_60_HOT_R5_FM_V5.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the hot extrusion process of Aluminium pipe which comprises of a mandrel in the extrusion die. This process is hot extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. 
Maximum force required during hot extrusion process is less than cold extrusion process. Ram velocity is set as 5mm per sec with the radius of 5mm. Die angle is specified as 60<sup>o</sup> and it is specified that there is medium friction during this hot extrusion process.";
}
elseif($an==60 && $fr=="High" && $sp==1 && $ext=="Pipe" && $cur==1 && $mw=="Hot"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_hot_pipe_r60/EX_PIPE_AL_60_HOT_R5_FH_V1.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the hot extrusion process of Aluminium pipe which comprises of a mandrel in the extrusion die. This process is hot extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. 
Maximum force required during hot extrusion process is less than cold extrusion process. Ram velocity is set as 1mm per sec with the radius of 5mm. Die angle is specified as 60<sup>o</sup> and it is specified that there is high friction during this hot extrusion process. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section.";
}
elseif($an==60 && $fr=="High" && $sp==5 && $ext=="Pipe" && $cur==1 && $mw=="Hot"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_hot_pipe_r60/EX_PIPE_AL_60_HOT_R5_FH_V5.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the hot extrusion process of Aluminium pipe which comprises of a mandrel in the extrusion die. This process is hot extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. 
Maximum force required during hot extrusion process is less than cold extrusion process. Ram velocity is set as 5mm per sec with the radius of 5mm. Die angle is specified as 60<sup>o</sup> and it is specified that there is high friction during this hot extrusion process.";
}
elseif($an==90 && $fr=="0" && $sp==1 && $ext=="Pipe" && $cur==1 && $mw=="Hot"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_hot_pipe_r90/EX_PIPE_AL_90_HOT_R5_MAN_F0_V1.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium pipe which comprises of a mandrel in the extrusion die. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. 
Ram velocity is set as 1mm per sec with the radius of 5mm. Die angle is specified as 90<sup>o</sup> and it is specified that there is no friction during this cold extrusion process. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section.";
}
elseif($an==90 && $fr=="0" && $sp==5 && $ext=="Pipe" && $cur==1 && $mw=="Hot"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_hot_pipe_r90/EX_PIPE_AL_90_HOT_R5_MAN_F0_V5.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium pipe which comprises of a mandrel in the extrusion die. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. 
Ram velocity is set as 1mm per sec with the radius of 5mm. Die angle is specified as 90<sup>o</sup> and it is specified that there is high friction during this cold extrusion process. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section.";
}
elseif($an==90 && $fr=="Medium" && $sp==1 && $ext=="Pipe" && $cur==1 && $mw=="Hot"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_hot_pipe_r90/EX_PIPE_AL_90_HOT_R5_MAN_FM_V1.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium pipe which comprises of a mandrel in the extrusion die. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. 
Ram velocity is set as 5mm per sec with the radius of 5mm. Die angle is specified as 90<sup>o</sup> and it is specified that there is high friction during this cold extrusion process.";
}
elseif($an==90 && $fr=="Medium" && $sp==5 && $ext=="Pipe" && $cur==1 && $mw=="Hot"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_hot_pipe_r90/EX_PIPE_AL_90_HOT_R5_MAN_FM_V5.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium pipe which comprises of a mandrel in the extrusion die. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. 
Ram velocity is set as 5mm per sec with the radius of 5mm. Die angle is specified as 90<sup>o</sup> and it is specified that there is medium friction during this cold extrusion process.";
}
elseif($an==90 && $fr=="High" && $sp==1 && $ext=="Pipe" && $cur==1 && $mw=="Hot"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_hot_pipe_r90/EX_PIPE_AL_90_HOT_R5_MAN_FH_V1.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium pipe which comprises of a mandrel in the extrusion die. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. 
Ram velocity is set as 1mm per sec with the radius of 5mm. Die angle is specified as 90<sup>o</sup> and it is specified that there is medium friction during this cold extrusion process. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section.";
}
elseif($an==90 && $fr=="High" && $sp==5 && $ext=="Pipe" && $cur==1 && $mw=="Hot"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_hot_pipe_r90/EX_PIPE_AL_90_HOT_R5_MAN_FH_V5.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium pipe which comprises of a mandrel in the extrusion die. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. 
Ram velocity is set as 5mm per sec with the radius of 5mm. Die angle is specified as 90<sup>o</sup> and it is specified that there is no friction during this cold extrusion process.";
}
elseif($an==45 && $fr=="0" && $sp==1 && $ext=="Pipe" && $cur==0 && $mw=="Hot"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_hot_pipe_45/EX_PIPE_AL_45_HOT_V1_F0.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the hot extrusion process of Aluminium pipe which comprises of a mandrel in the extrusion die. This process is hot extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. Maximum force required during hot extrusion process is less than cold extrusion process. 
Ram velocity is set as 1mm per sec. Die angle is specified as 45<sup>o</sup> and it is specified that there is no friction during this hot extrusion process. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section.";
}
elseif($an==45 && $fr=="0" && $sp==5 && $ext=="Pipe" && $cur==0 && $mw=="Hot"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_hot_pipe_45/EX_PIPE_AL_45_HOT_V5_F0.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the hot extrusion process of Aluminium pipe which comprises of a mandrel in the extrusion die. This process is hot extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. Maximum force required during hot extrusion process is less than cold extrusion process. 
Ram velocity is set as 5mm per sec. Die angle is specified as 45<sup>o</sup> and it is specified that there is no friction during this hot extrusion process. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section.";
}
elseif($an==45 && $fr=="Medium" && $sp==1 && $ext=="Pipe" && $cur==0 && $mw=="Hot"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_hot_pipe_45/EX_PIPE_AL_45_HOT_V1_FM.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the  hot extrusion process of Aluminium pipe which comprises of a mandrel in the extrusion die. This process is hot extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. Maximum force required during hot extrusion process is less than cold extrusion process. 
Ram velocity is set as 1mm per sec. Die angle is specified as 45<sup>o</sup> and it is specified that there is medium friction during this hot extrusion process.";
}
elseif($an==45 && $fr=="Medium" && $sp==5 && $ext=="Pipe" && $cur==0 && $mw=="Hot"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_hot_pipe_45/EX_PIPE_AL_45_HOT_V5_FM.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the hot extrusion process of Aluminium pipe which comprises of a mandrel in the extrusion die. This process is hot extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. Maximum force required during hot extrusion process is less than cold extrusion process. 
Ram velocity is set as 5mm per sec. Die angle is specified as 45<sup>o</sup> and it is specified that there is medium friction during this hot extrusion process.";
}
elseif($an==45 && $fr=="High" && $sp==1 && $ext=="Pipe" && $cur==0 && $mw=="Hot"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_hot_pipe_45/EX_PIPE_AL_45_HOT_V1_FH.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the hot extrusion process of Aluminium pipe which comprises of a mandrel in the extrusion die. This process is hot extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. Maximum force required during hot extrusion process is less than cold extrusion process. 
Ram velocity is set as 1mm per sec. Die angle is specified as 45<sup>o</sup> and it is specified that there is high friction during this hot extrusion process. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section.";
}
elseif($an==45 && $fr=="High" && $sp==5 && $ext=="Pipe" && $cur==0 && $mw=="Hot"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_hot_pipe_45/EX_PIPE_AL_45_HOT_V5_FH.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the hot extrusion process of Aluminium pipe which comprises of a mandrel in the extrusion die. This process is hot extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. Maximum force required during hot extrusion process is less than cold extrusion process. 
Ram velocity is set as 5mm per sec. Die angle is specified as 45<sup>o</sup> and it is specified that there is high friction during this hot extrusion process.";
}
elseif($an==60 && $fr=="0" && $sp==1 && $ext=="Pipe" && $cur==0 && $mw=="Hot"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_hot_pipe_60/EX_PIPE_AL_60_HOT_V1_F0.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the hot extrusion process of Aluminium pipe which comprises of a mandrel in the extrusion die. This process is hot extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. Maximum force required during hot extrusion process is less than cold extrusion process. 
Ram velocity is set as 1mm per sec. Die angle is specified as 60<sup>o</sup> and it is specified that there is no friction during this hot extrusion process. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section.";
}
elseif($an==60 && $fr=="0" && $sp==5 && $ext=="Pipe" && $cur==0 && $mw=="Hot"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_hot_pipe_60/EX_PIPE_AL_60_HOT_V5_F0.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the hot extrusion process of Aluminium pipe which comprises of a mandrel in the extrusion die. This process is hot extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. Maximum force required during hot extrusion process is less than cold extrusion process. 
Ram velocity is set as 5mm per sec. Die angle is specified as 60<sup>o</sup> and it is specified that there is no friction during this hot extrusion process. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section.";
}
elseif($an==60 && $fr=="Medium" && $sp==1 && $ext=="Pipe" && $cur==0 && $mw=="Hot"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_hot_pipe_60/EX_PIPE_AL_60_HOT_V1_FM.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the hot extrusion process of Aluminium pipe which comprises of a mandrel in the extrusion die. This process is hot extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. Maximum force required during hot extrusion process is less than cold extrusion process. 
Ram velocity is set as 1mm per sec. Die angle is specified as 60<sup>o</sup> and it is specified that there is medium friction during this hot extrusion process. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section.";
}
elseif($an==60 && $fr=="Medium" && $sp==5 && $ext=="Pipe" && $cur==0 && $mw=="Hot"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_hot_pipe_60/EX_PIPE_AL_60_HOT_V5_FM.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the hot extrusion process of Aluminium pipe which comprises of a mandrel in the extrusion die. This process is hot extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. Maximum force required during hot extrusion process is less than cold extrusion process. 
Ram velocity is set as 5mm per sec. Die angle is specified as 60<sup>o</sup> and it is specified that there is medium friction during this hot extrusion process. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section.";
}
elseif($an==60 && $fr=="High" && $sp==1 && $ext=="Pipe" && $cur==0 && $mw=="Hot"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_hot_pipe_60/EX_PIPE_AL_60_HOT_V1_FH.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the hot extrusion process of Aluminium pipe which comprises of a mandrel in the extrusion die. This process is hot extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. Maximum force required during hot extrusion process is less than cold extrusion process. 
Ram velocity is set as 1mm per sec. Die angle is specified as 60<sup>o</sup> and it is specified that there is high friction during this hot extrusion process. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section.";
}
elseif($an==60 && $fr=="High" && $sp==5 && $ext=="Pipe" && $cur==0 && $mw=="Hot"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_hot_pipe_60/EX_PIPE_AL_60_HOT_V5_FH.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the hot extrusion process of Aluminium pipe which comprises of a mandrel in the extrusion die. This process is hot extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. Maximum force required during hot extrusion process is less than cold extrusion process. 
Ram velocity is set as 5mm per sec. Die angle is specified as 60<sup>o</sup> and it is specified that there is high friction during this hot extrusion process.";
}
elseif($an==90 && $fr=="0" && $sp==1 && $ext=="Pipe" && $cur==0 && $mw=="Hot"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_hot_pipe_90/EX_PIPE_AL_90_HOT_V1_F0.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the hot extrusion process of Aluminium pipe which comprises of a mandrel in the extrusion die. This process is hot extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. Maximum force required during hot extrusion process is less than cold extrusion process. 
Ram velocity is set as 1mm per sec. Die angle is specified as 90<sup>o</sup> and it is specified that there is no friction during this hot extrusion process.";
}
elseif($an==90 && $fr=="0" && $sp==5 && $ext=="Pipe" && $cur==0 && $mw=="Hot"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_hot_pipe_90/EX_PIPE_AL_90_HOT_V5_F0.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the hot extrusion process of Aluminium pipe which comprises of a mandrel in the extrusion die. This process is hot extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. Maximum force required during hot extrusion process is less than cold extrusion process. 
Ram velocity is set as 5mm per sec. Die angle is specified as 90<sup>o</sup> and it is specified that there is no friction during this hot extrusion process.";
}
elseif($an==90 && $fr=="Medium" && $sp==1 && $ext=="Pipe" && $cur==0 && $mw=="Hot"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_hot_pipe_90/EX_PIPE_AL_90_HOT_V1_FM.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the hot extrusion process of Aluminium pipe which comprises of a mandrel in the extrusion die. This process is hot extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. Maximum force required during hot extrusion process is less than cold extrusion process. 
Ram velocity is set as 1mm per sec. Die angle is specified as 90<sup>o</sup> and it is specified that there is medium friction during this hot extrusion process.";
}
elseif($an==90 && $fr=="Medium" && $sp==5 && $ext=="Pipe" && $cur==0 && $mw=="Hot"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_hot_pipe_90/EX_PIPE_AL_90_HOT_V5_FM.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the hot extrusion process of Aluminium pipe which comprises of a mandrel in the extrusion die. This process is hot extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. 
Maximum force required during hot extrusion process is less than cold extrusion process. Ram velocity is set as 5mm per sec. Die angle is specified as 90<sup>o</sup> and it is specified that there is medium friction during this hot extrusion process. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section.";
}
elseif($an==90 && $fr=="High" && $sp==1 && $ext=="Pipe" && $cur==0 && $mw=="Hot"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_hot_pipe_90/EX_PIPE_AL_90_HOT_V1_FH.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the hot extrusion process of Aluminium pipe which comprises of a mandrel in the extrusion die. This process is hot extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. 
Maximum force required during hot extrusion process is less than cold extrusion process. Ram velocity is set as 1mm per sec. Die angle is specified as 90<sup>o</sup> and it is specified that there is high friction during this hot extrusion process. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section.";
}
elseif($an==90 && $fr=="High" && $sp==5 && $ext=="Pipe" && $cur==0 && $mw=="Hot"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_hot_pipe_90/EX_PIPE_AL_90_HOT_V5_FH.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the hot extrusion process of Aluminium pipe which comprises of a mandrel in the extrusion die. This process is hot extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of pipe is increases. 
Maximum force required during hot extrusion process is less than cold extrusion process. Ram velocity is set as 5mm per sec. Die angle is specified as 90<sup>o</sup> and it is specified that there is high friction during this hot extrusion process. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section.";
}
elseif($an==45 && $fr=="0" && $sp==1 && $ext=="Solid" && $cur==1 && $mw=="Cold"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_cold_solid_r45/EX_AL_45_R5_F0_V1.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium solid shaft with 50% reduction in diameter of the billet. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of solid is increases. 
Ram velocity is set as 1mm per sec with the radius of 5mm. Die angle is specified as 45<sup>o</sup> and it is specified that there is no friction during this cold extrusion process One fourth of the solid shaft is shown over the screen because this solid shaft is axis symmetric with X and Y direction.";
}
elseif($an==45 && $fr=="0" && $sp==5 && $ext=="Solid" && $cur==1 && $mw=="Cold"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_cold_solid_r45/EX_AL_45_R5_F0_V5.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium solid shaft with 50% reduction in diameter of the billet. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of solid is increases. 
Ram velocity is set as 5mm per sec with the radius of 5mm. Die angle is specified as 45<sup>o</sup> and it is specified that there is no friction during this cold extrusion process. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section. One fourth of the solid shaft is shown over the screen because this solid shaft is axis symmetric with X and Y direction.";
}
elseif($an==45 && $fr=="Medium" && $sp==1 && $ext=="Solid" && $cur==1 && $mw=="Cold"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_cold_solid_r45/EX_AL_45_R5_FM_V1.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium solid shaft with 50% reduction in diameter of the billet. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of solid is increases. 
Ram velocity is set as 1mm per sec with the radius of 5mm. Die angle is specified as 45<sup>o</sup> and it is specified that there is medium friction during this cold extrusion process. One fourth of the solid shaft is shown over the screen because this solid shaft is axis symmetric with X and Y direction.";
}
elseif($an==45 && $fr=="Medium" && $sp==5 && $ext=="Solid" && $cur==1 && $mw=="Cold"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_cold_solid_r45/EX_AL_45_R5_FM_V5.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium solid shaft with 50% reduction in diameter of the billet. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of solid is increases. 
Ram velocity is set as 5mm per sec with the radius of 5mm. Die angle is specified as 45<sup>o</sup> and it is specified that there is medium friction during this cold extrusion process. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section. One fourth of the solid shaft is shown over the screen because this solid shaft is axis symmetric with X and Y direction.";
}
elseif($an==45 && $fr=="High" && $sp==1 && $ext=="Solid" && $cur==1 && $mw=="Cold"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_cold_solid_r45/EX_AL_45_R5_FH_V1.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium solid shaft with 50% reduction in diameter of the billet. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of solid is increases. 
Ram velocity is set as 1mm per sec with the radius of 5mm. Die angle is specified as 45<sup>o</sup> and it is specified that there is high friction during this cold extrusion process. One fourth of the solid shaft is shown over the screen because this solid shaft is axis symmetric with X and Y direction.";
}
elseif($an==45 && $fr=="High" && $sp==5 && $ext=="Solid" && $cur==1 && $mw=="Cold"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_cold_solid_r45/EX_AL_45_R5_FH_V5.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium solid shaft with 50% reduction in diameter of the billet. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of solid is increases. 
Ram velocity is set as 5mm per sec with the radius of 5mm. Die angle is specified as 45<sup>o</sup> and it is specified that there is high friction during this cold extrusion process. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section. One fourth of the solid shaft is shown over the screen because this solid shaft is axis symmetric with X and Y direction.";
}
elseif($an==60 && $fr=="0" && $sp==1 && $ext=="Solid" && $cur==1 && $mw=="Cold"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_cold_solid_r60/EX_AL_60_R5_F0_V1.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium solid shaft with 50% reduction in diameter of the billet. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of solid is increases. 
Ram velocity is set as 1mm per sec with the radius of 5mm. Die angle is specified as 60<sup>o</sup> and it is specified that there is no friction during this cold extrusion process One fourth of the solid shaft is shown over the screen because this solid shaft is axis symmetric with X and Y direction.";
}
elseif($an==60 && $fr=="0" && $sp==5 && $ext=="Solid" && $cur==1 && $mw=="Cold"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_cold_solid_r60/EX_AL_60_R5_F0_V5.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium solid shaft with 50% reduction in diameter of the billet. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of solid is increases. 
Ram velocity is set as 5mm per sec with the radius of 5mm. Die angle is specified as 60<sup>o</sup> and it is specified that there is no friction during this cold extrusion process. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section. One fourth of the solid shaft is shown over the screen because this solid shaft is axis symmetric with X and Y direction.";
}
elseif($an==60 && $fr=="Medium" && $sp==1 && $ext=="Solid" && $cur==1 && $mw=="Cold"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_cold_solid_r60/EX_AL_60_R5_FM_V1.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium solid shaft with 50% reduction in diameter of the billet. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of solid is increases. 
Ram velocity is set as 1mm per sec with the radius of 5mm. Die angle is specified as 60<sup>o</sup> and it is specified that there is medium friction during this cold extrusion process. One fourth of the solid shaft is shown over the screen because this solid shaft is axis symmetric with X and Y direction.";
}
elseif($an==60 && $fr=="Medium" && $sp==5 && $ext=="Solid" && $cur==1 && $mw=="Cold"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_cold_solid_r60/EX_AL_60_R5_FM_V5.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium solid shaft with 50% reduction in diameter of the billet. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of solid is increases. 
Ram velocity is set as 5mm per sec with the radius of 5mm. Die angle is specified as 60<sup>o</sup> and it is specified that there is medium friction during this cold extrusion process. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section. One fourth of the solid shaft is shown over the screen because this solid shaft is axis symmetric with X and Y direction.";
}
elseif($an==60 && $fr=="High" && $sp==1 && $ext=="Solid" && $cur==1 && $mw=="Cold"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_cold_solid_r60/EX_AL_60_R5_FH_V1.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium solid shaft with 50% reduction in diameter of the billet. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of solid is increases. 
Ram velocity is set as 1mm per sec with the radius of 5mm. Die angle is specified as 60<sup>o</sup> and it is specified that there is high friction during this cold extrusion process. One fourth of the solid shaft is shown over the screen because this solid shaft is axis symmetric with X and Y direction.";
}
elseif($an==60 && $fr=="High" && $sp==5 && $ext=="Solid" && $cur==1 && $mw=="Cold"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_cold_solid_r60/EX_AL_60_R5_FH_V5.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium solid shaft with 50% reduction in diameter of the billet. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of solid is increases. 
Ram velocity is set as 5mm per sec with the radius of 5mm. Die angle is specified as 60<sup>o</sup> and it is specified that there is high friction during this cold extrusion process. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section. One fourth of the solid shaft is shown over the screen because this solid shaft is axis symmetric with X and Y direction.";
}
elseif($an==90 && $fr=="0" && $sp==1 && $ext=="Solid" && $cur==1 && $mw=="Cold"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_cold_solid_r90/EX_AL_90_R5_F0_V1.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium solid shaft with 50% reduction in diameter of the billet. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of solid is increases. 
Ram velocity is set as 1mm per sec with the radius of 5mm. Die angle is specified as 90<sup>o</sup> and it is specified that there is no friction during this cold extrusion process One fourth of the solid shaft is shown over the screen because this solid shaft is axis symmetric with X and Y direction.";
}
elseif($an==90 && $fr=="0" && $sp==5 && $ext=="Solid" && $cur==1 && $mw=="Cold"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_cold_solid_r90/EX_AL_90_R5_F0_V5.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium solid shaft with 50% reduction in diameter of the billet. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of solid is increases. 
Ram velocity is set as 5mm per sec with the radius of 5mm. Die angle is specified as 90<sup>o</sup> and it is specified that there is no friction during this cold extrusion process. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section. One fourth of the solid shaft is shown over the screen because this solid shaft is axis symmetric with X and Y direction.";
}
elseif($an==90 && $fr=="Medium" && $sp==1 && $ext=="Solid" && $cur==1 && $mw=="Cold"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_cold_solid_r90/EX_AL_90_R5_FM_V1.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium solid shaft with 50% reduction in diameter of the billet. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of solid is increases. 
Ram velocity is set as 1mm per sec with the radius of 5mm. Die angle is specified as 90<sup>o</sup>  and it is specified that there is medium friction during this cold extrusion process. One fourth of the solid shaft is shown over the screen because this solid shaft is axis symmetric with X and Y direction.";
}
elseif($an==90 && $fr=="Medium" && $sp==5 && $ext=="Solid" && $cur==1 && $mw=="Cold"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_cold_solid_r90/EX_AL_90_R5_FM_V5.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium solid shaft with 50% reduction in diameter of the billet. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of solid is increases. 
Ram velocity is set as 5mm per sec with the radius of 5mm. Die angle is specified as 90<sup>o</sup>  and it is specified that there is medium friction during this cold extrusion process. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section. One fourth of the solid shaft is shown over the screen because this solid shaft is axis symmetric with X and Y direction.";
}
elseif($an==90 && $fr=="High" && $sp==1 && $ext=="Solid" && $cur==1 && $mw=="Cold"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_cold_solid_r90/EX_AL_90_R5_FH_V1.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium solid shaft with 50% reduction in diameter of the billet. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of solid is increases. 
Ram velocity is set as 1mm per sec with the radius of 5mm. Die angle is specified as 90<sup>o</sup> and it is specified that there is high friction during this cold extrusion process. One fourth of the solid shaft is shown over the screen because this solid shaft is axis symmetric with X and Y direction.";
}
elseif($an==90 && $fr=="High" && $sp==5 && $ext=="Solid" && $cur==1 && $mw=="Cold"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_cold_solid_r90/EX_AL_90_R5_FH_V5.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium solid shaft with 50% reduction in diameter of the billet. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of solid is increases. 
Ram velocity is set as 5mm per sec with the radius of 5mm. Die angle is specified as 90<sup>o</sup> and it is specified that there is high friction during this cold extrusion process. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section. One fourth of the solid shaft is shown over the screen because this solid shaft is axis symmetric with X and Y direction.";
}
elseif($an==45 && $fr=="0" && $sp==1 && $ext=="Solid" && $cur==0 && $mw=="Cold"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_cold_solid_45/EX_SOLID_45_COLD_V1_F0.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium solid shaft with 50% reduction in diameter of the billet. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required for extrusion of solid is increases. 
Ram velocity is set as 1mm per sec. Die angle is specified as 45<sup>o</sup> and it is specified that there is no friction during this cold extrusion process. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section. One fourth of the solid shaft is shown over the screen because this solid shaft is axis symmetric with X and Y direction.";
}
elseif($an==45 && $fr=="0" && $sp==5 && $ext=="Solid" && $cur==0 && $mw=="Cold"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_cold_solid_45/EX_SOLID_45_COLD_V5_F0.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium solid shaft with 50% reduction in diameter of the billet. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required for extrusion of solid is increases. 
Ram velocity is set as 5mm per sec. Die angle is specified as 45<sup>o</sup> and it is specified that there is no friction during this cold extrusion process. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section. One fourth of the solid shaft is shown over the screen because this solid shaft is axis symmetric with X and Y direction.";
}
elseif($an==45 && $fr=="Medium" && $sp==1 && $ext=="Solid" && $cur==0 && $mw=="Cold"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_cold_solid_45/EX_SOLID_45_COLD_V1_FM.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium pipe which comprises of a mandrel in the extrusion die. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required for extrusion of solid is increases. 
Ram velocity is set as 1mm per sec. Die angle is specified as 45<sup>o</sup> and it is specified that there is medium friction during this cold extrusion process. One fourth of the solid shaft is shown over the screen because this solid shaft is axis symmetric with X and Y direction.";
}
elseif($an==45 && $fr=="Medium" && $sp==5 && $ext=="Solid" && $cur==0 && $mw=="Cold"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_cold_solid_45/EX_SOLID_45_COLD_V5_FM.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium solid shaft with 50% reduction in diameter of the billet. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required for extrusion of solid is increases. 
Ram velocity is set as 5mm per sec. Die angle is specified as 45<sup>o</sup> and it is specified that there is medium friction during this cold extrusion process. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section. One fourth of the solid shaft is shown over the screen because this solid shaft is axis symmetric with X and Y direction.";
}
elseif($an==45 && $fr=="High" && $sp==1 && $ext=="Solid" && $cur==0 && $mw=="Cold"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_cold_solid_45/EX_SOLID_45_COLD_V1_FH.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium solid shaft with 50% reduction in diameter of the billet. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required for extrusion of solid is increases. 
Ram velocity is set as 1mm per sec. Die angle is specified as 45<sup>o</sup> and it is specified that there is high friction during this cold extrusion process. One fourth of the solid shaft is shown over the screen because this solid shaft is axis symmetric with X and Y direction.";
}
elseif($an==45 && $fr=="High" && $sp==5 && $ext=="Solid" && $cur==0 && $mw=="Cold"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_cold_solid_45/EX_SOLID_45_COLD_V5_FH.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium solid shaft with 50% reduction in diameter of the billet. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required for extrusion of solid is increases. 
Ram velocity is set as 5mm per sec. Die angle is specified as 45<sup>o</sup> and it is specified that there is high friction during this cold extrusion process. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section. One fourth of the solid shaft is shown over the screen because this solid shaft is axis symmetric with X and Y direction.";
}
elseif($an==60 && $fr=="0" && $sp== 1 && $ext=="Solid" && $cur==0 && $mw=="Cold"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_cold_solid_60/EX_SOLID_60_COLD_V1_F0.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium solid shaft with 50% reduction in diameter of the billet. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of solid is increases. 
Ram velocity is set as 1mm per sec. Die angle is specified as 60<sup>o</sup> and it is specified that there is no friction during this cold extrusion process. One fourth of the solid shaft is shown over the screen because this solid shaft is axis symmetric with X and Y direction.";
}
elseif($an==60 && $fr=="0" && $sp==5 && $ext=="Solid" && $cur==0 && $mw=="Cold"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_cold_solid_60/EX_SOLID_60_COLD_V5_F0.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium solid shaft with 50% reduction in diameter of the billet. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of solid is increases. 
Ram velocity is set as 5mm per sec. Die angle is specified as 60<sup>o</sup> and it is specified that there is no friction during this cold extrusion process. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section. One fourth of the solid shaft is shown over the screen because this solid shaft is axis symmetric with X and Y direction.";
}
elseif($an==60 && $fr=="Medium" && $sp==1 && $ext=="Solid" && $cur==0 && $mw=="Cold"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_cold_solid_60/EX_SOLID_60_COLD_V1_FM.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium solid shaft with 50% reduction in diameter of the billet. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of solid is increases. 
Ram velocity is set as 1mm per sec. Die angle is specified as 60<sup>o</sup> and it is specified that there is medium friction during this cold extrusion process. One fourth of the solid shaft is shown over the screen because this solid shaft is axis symmetric with X and Y direction.";
}
elseif($an==60 && $fr=="Medium" && $sp==5 && $ext=="Solid" && $cur==0 && $mw=="Cold"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_cold_solid_60/EX_SOLID_60_COLD_V5_FM.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium solid shaft with 50% reduction in diameter of the billet. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of solid is increases. 
Ram velocity is set as 5mm per sec. Die angle is specified as 60<sup>o</sup> and it is specified that there is medium friction during this cold extrusion process. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section. . One fourth of the solid shaft is shown over the screen because this solid shaft is axis symmetric with X and Y direction.";
}
elseif($an==60 && $fr=="High" && $sp==1 && $ext=="Solid" && $cur==0 && $mw=="Cold"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_cold_solid_60/EX_SOLID_60_COLD_V1_FH.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium solid shaft with 50% reduction in diameter of the billet. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of solid is increases. 
Ram velocity is set as 1mm per sec. Die angle is specified as 60<sup>o</sup> and it is specified that there is high friction during this cold extrusion process. One fourth of the solid shaft is shown over the screen because this solid shaft is axis symmetric with X and Y direction.";
}
elseif($an==60 && $fr=="High" && $sp==5 && $ext=="Solid" && $cur==0 && $mw=="Cold"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_cold_solid_60/EX_SOLID_60_COLD_V5_FH.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium solid shaft with 50% reduction in diameter of the billet. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of solid is increases. 
Ram velocity is set as 5mm per sec. Die angle is specified as 60<sup>o</sup> and it is specified that there is high friction during this cold extrusion process. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section. . One fourth of the solid shaft is shown over the screen because this solid shaft is axis symmetric with X and Y direction.";
}
elseif($an==90 && $fr=="0" && $sp==1 && $ext=="Solid" && $cur==0 && $mw=="Cold"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_cold_solid_90/EX_SOLID_90_COLD_V1_F0.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium solid shaft with 50% reduction in diameter of the billet. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of solid is increases. 
Ram velocity is set as 1mm per sec. Die angle is specified as 90<sup>o</sup> and it is specified that there is no friction during this cold extrusion process. One fourth of the solid shaft is shown over the screen because this solid shaft is axis symmetric with X and Y direction.";
}
elseif($an==90 && $fr=="0" && $sp==5 && $ext=="Solid" && $cur==0 && $mw=="Cold"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_cold_solid_90/EX_SOLID_90_COLD_V5_F0.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium solid shaft with 50% reduction in diameter of the billet. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of solid is increases.
Ram velocity is set as 5mm per sec. Die angle is specified as 90<sup>o</sup> and it is specified that there is no friction during this cold extrusion process. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section. One fourth of the solid shaft is shown over the screen because this solid shaft is axis symmetric with X and Y direction.";
}
elseif($an==90 && $fr=="Medium" && $sp==1 && $ext=="Solid" && $cur==0 && $mw=="Cold"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_cold_solid_90/EX_SOLID_90_COLD_V1_FM.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium solid shaft with 50% reduction in diameter of the billet. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of solid is increases. 
Ram velocity is set as 1mm per sec. Die angle is specified as 90<sup>o</sup> and it is specified that there is medium friction during this cold extrusion process. One fourth of the solid shaft is shown over the screen because this solid shaft is axis symmetric with X and Y direction.";
}
elseif($an==90 && $fr=="Medium" && $sp==5 && $ext=="Solid" && $cur==0 && $mw=="Cold"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_cold_solid_90/EX_SOLID_90_COLD_V5_FM.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium solid shaft with 50% reduction in diameter of the billet. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of solid is increases. 
Ram velocity is set as 5mm per sec. Die angle is specified as 90<sup>o</sup> and it is specified that there is medium friction during this cold extrusion process. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section. One fourth of the solid shaft is shown over the screen because this solid shaft is axis symmetric with X and Y direction.";
}
elseif($an==90 && $fr=="High" && $sp==1 && $ext=="Solid" && $cur==0 && $mw=="Cold"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_cold_solid_90/EX_SOLID_90_COLD_V1_FH.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium solid shaft with 50% reduction in diameter of the billet. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of solid is increases. 
Ram velocity is set as 1mm per sec. Die angle is specified as 90<sup>o</sup> and it is specified that there is high friction during this cold extrusion process. One fourth of the solid shaft is shown over the screen because this solid shaft is axis symmetric with X and Y direction.";
}
elseif($an==90 && $fr=="High" && $sp==5 && $ext=="Solid" && $cur==0 && $mw=="Cold"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_cold_solid_90/EX_SOLID_90_COLD_V5_FH.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium solid shaft with 50% reduction in diameter of the billet. This process is cold extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of solid is increases. 
Ram velocity is set as 5mm per sec. Die angle is specified as 90<sup>o</sup> and it is specified that there is high friction during this cold extrusion process. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section. . One fourth of the solid shaft is shown over the screen because this solid shaft is axis symmetric with X and Y direction.";
}
elseif($an==45 && $fr=="0" && $sp==1 && $ext=="Solid" && $cur==0 && $mw=="Hot"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_hot_solid_45/EX_AL_SOLID_45_HOT_V1_F0.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium solid shaft with 50% reduction in diameter of the billet. This process is hot extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of solid is increases. 
Maximum force required during hot extrusion process is less than cold extrusion process. velocity is set as 1mm per sec. Die angle is specified as 45<sup>o</sup> and it is specified that there is no friction during this hot extrusion process.";
}
elseif($an==45 && $fr=="0" && $sp==5 && $ext=="Solid" && $cur==0 && $mw=="Hot"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_hot_solid_45/EX_AL_SOLID_45_HOT_V5_F0.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium solid shaft with 50% reduction in diameter of the billet. This process is hot extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of solid is increases. 
Maximum force required during hot extrusion process is less than cold extrusion process. Ram velocity is set as 5mm per sec. Die angle is specified as 45<sup>o</sup> and it is specified that there is no friction during this hot extrusion process.";
}
elseif($an==45 && $fr=="Medium" && $sp==1 && $ext=="Solid" && $cur==0 && $mw=="Hot"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_hot_solid_45/EX_AL_SOLID_45_HOT_V1_FM.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium solid shaft with 50% reduction in diameter of the billet. This process is hot extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of solid is increases. 
Maximum force required during hot extrusion process is less than cold extrusion process. Ram velocity is set as 1mm per sec. Die angle is specified as 45<sup>o</sup> and it is specified that there is medium friction during this hot extrusion process.";
}
elseif($an==45 && $fr=="Medium" && $sp==5 && $ext=="Solid" && $cur==0 && $mw=="Hot"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_hot_solid_45/EX_AL_SOLID_45_HOT_V5_FM.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium solid shaft with 50% reduction in diameter of the billet. This process is hot extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of solid is increases. 
Maximum force required during hot extrusion process is less than cold extrusion process. Ram velocity is set as 5mm per sec. Die angle is specified as 45<sup>o</sup> and it is specified that there is medium friction during this hot extrusion process.";
}
elseif($an==45 && $fr=="High" && $sp==1 && $ext=="Solid" && $cur==0 && $mw=="Hot"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_hot_solid_45/EX_AL_SOLID_45_HOT_V1_FH.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium solid shaft with 50% reduction in diameter of the billet. This process is hot extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of solid is increases. 
Maximum force required during hot extrusion process is less than cold extrusion process. Ram velocity is set as 1mm per sec. Die angle is specified as 45<sup>o</sup> and it is specified that there is high friction during this hot extrusion process.";
}
elseif($an==45 && $fr=="High" && $sp==5 && $ext=="Solid" && $cur==0 && $mw=="Hot"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_hot_solid_45/EX_AL_SOLID_45_HOT_V5_FH.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium solid shaft with 50% reduction in diameter of the billet. This process is hot extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of solid is increases. 
Maximum force required during hot extrusion process is less than cold extrusion process. Ram velocity is set as 5mm per sec. Die angle is specified as 45<sup>o</sup> and it is specified that there is high friction during this hot extrusion process. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section.";
}
elseif($an==60 && $fr=="0" && $sp==1 && $ext=="Solid" && $cur==0 && $mw=="Hot"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_hot_solid_60/EX_SOLID_AL_60_HOT_V1_F0.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium solid shaft with 50% reduction in diameter of the billet. This process is hot extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of solid is increases. 
Maximum force required during hot extrusion process is less than cold extrusion process. Ram velocity is set as 1mm per sec. Die angle is specified as 60<sup>o</sup> and it is specified that there is no friction during this hot extrusion process.";
}
elseif($an==60 && $fr=="0" && $sp==5 && $ext=="Solid" && $cur==0 && $mw=="Hot"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_hot_solid_60/EX_SOLID_AL_60_HOT_V5_F0.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium solid shaft with 50% reduction in diameter of the billet. This process is hot extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of solid is increases. 
Maximum force required during hot extrusion process is less than cold extrusion process. Ram velocity is set as 5mm per sec. Die angle is specified as 60<sup>o</sup> and it is specified that there is no friction during this hot extrusion process. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section.";
}
elseif($an==60 && $fr=="Medium" && $sp==1 && $ext=="Solid" && $cur==0 && $mw=="Hot"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_hot_solid_60/EX_SOLID_AL_60_HOT_V1_FM.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium solid shaft with 50% reduction in diameter of the billet. This process is hot extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of solid is increases. 
Maximum force required during hot extrusion process is less than cold extrusion process. Ram velocity is set as 1mm per sec. Die angle is specified as 60<sup>o</sup> and it is specified that there is medium friction during this hot extrusion process.";
}
elseif($an==60 && $fr=="Medium" && $sp==5 && $ext=="Solid" && $cur==0 && $mw=="Hot"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_hot_solid_60/EX_SOLID_AL_60_HOT_V5_FM.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium solid shaft with 50% reduction in diameter of the billet. This process is hot extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of solid is increases. 
Maximum force required during hot extrusion process is less than cold extrusion process. Ram velocity is set as 5mm per sec. Die angle is specified as 60<sup>o</sup> and it is specified that there is medium friction during this hot extrusion process.";
}
elseif($an==60 && $fr=="High" && $sp==1 && $ext=="Solid" && $cur==0 && $mw=="Hot"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_hot_solid_60/EX_SOLID_AL_60_HOT_V1_FH.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium solid shaft with 50% reduction in diameter of the billet. This process is hot extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of solid is increases. 
Maximum force required during hot extrusion process is less than cold extrusion process. Ram velocity is set as 1mm per sec. Die angle is specified as 60<sup>o</sup> and it is specified that there is high friction during this hot extrusion process. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section.";
}
elseif($an==60 && $fr=="High" && $sp==5 && $ext=="Solid" && $cur==0 && $mw=="Hot"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_hot_solid_60/EX_SOLID_AL_60_HOT_V5_FH.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium solid shaft with 50% reduction in diameter of the billet. This process is hot extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of solid is increases. 
Maximum force required during hot extrusion process is less than cold extrusion process. Ram velocity is set as 5mm per sec. Die angle is specified as 60<sup>o</sup> and it is specified that there is high friction during this hot extrusion process.";
}
elseif($an==90 && $fr=="0" && $sp==1 && $ext=="Solid" && $cur==0 && $mw=="Hot"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_hot_solid_90/EX_SOLID_AL_90_HOT_V1_F0.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium solid shaft with 50% reduction in diameter of the billet. This process is hot extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of solid is increases. 
Maximum force required during hot extrusion process is less than cold extrusion process. Ram velocity is set as 1mm per sec. Die angle is specified as 90<sup>o</sup> and it is specified that there is no friction during this hot extrusion process.";
}
elseif($an==90 && $fr=="0" && $sp==5 && $ext=="Solid" && $cur==0 && $mw=="Hot"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_hot_solid_90/EX_SOLID_AL_90_HOT_V5_F0.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium solid shaft with 50% reduction in diameter of the billet. This process is hot extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of solid is increases. 
Maximum force required during hot extrusion process is less than cold extrusion process. Ram velocity is set as 5mm per sec. Die angle is specified as 90<sup>o</sup> and it is specified that there is no friction during this hot extrusion process. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section.";
}
elseif($an==90 && $fr=="Medium" && $sp==1 && $ext=="Solid" && $cur==0 && $mw=="Hot"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_hot_solid_90/EX_SOLID_AL_90_HOT_V1_FM.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium solid shaft with 50% reduction in diameter of the billet. This process is hot extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of solid is increases. 
Maximum force required during hot extrusion process is less than cold extrusion process. Ram velocity is set as 1mm per sec. Die angle is specified as 90<sup>o</sup> and it is specified that there is medium friction during this hot extrusion process.";
}
elseif($an==90 && $fr=="Medium" && $sp==5 && $ext=="Solid" && $cur==0 && $mw=="Hot"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_hot_solid_90/EX_SOLID_AL_90_HOT_V5_FM.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium solid shaft with 50% reduction in diameter of the billet. This process is hot extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of solid is increases. 
Maximum force required during hot extrusion process is less than cold extrusion process. Ram velocity is set as 5mm per sec. Die angle is specified as 90<sup>o</sup> and it is specified that there is medium friction during this hot extrusion process. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section.";
}
elseif($an==90 && $fr=="High" && $sp==1 && $ext=="Solid" && $cur==0 && $mw=="Hot"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_hot_solid_90/EX_SOLID_AL_90_HOT_V1_FH.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium solid shaft with 50% reduction in diameter of the billet. This process is hot extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of solid is increases. 
Maximum force required during hot extrusion process is less than cold extrusion process. Ram velocity is set as 1mm per sec. Die angle is specified as 90<sup>o</sup> and it is specified that there is high friction during this hot extrusion process. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section.";
}
elseif($an==90 && $fr=="High" && $sp==5 && $ext=="Solid" && $cur==0 && $mw=="Hot"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_hot_solid_90/EX_SOLID_AL_90_HOT_V5_FH.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium solid shaft with 50% reduction in diameter of the billet. This process is hot extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of solid is increases. 
Maximum force required during hot extrusion process is less than cold extrusion process. Ram velocity is set as 5mm per sec. Die angle is specified as 90<sup>o</sup> and it is specified that there is high friction during this hot extrusion process.";
}
elseif($an==45 && $fr=="0" && $sp==1 && $ext=="Solid" && $cur==1 && $mw=="Hot"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_hot_solid_r45/EX_SOLID_AL_45_HOT_R5_V1_F0.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium solid shaft with 50% reduction in diameter of the billet. This process is hot extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of solid is increases. 
Ram velocity is set as 1mm per sec with the radius of 5mm. Die angle is specified as 45<sup>o</sup> and it is specified that there is no friction during this hot extrusion process. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section.";
}
elseif($an==45 && $fr=="0" && $sp==5 && $ext=="Solid" && $cur==1 && $mw=="Hot"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_hot_solid_r45/EX_SOLID_AL_45_HOT_R5_V5_F0.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium solid shaft with 50% reduction in diameter of the billet. This process is hot extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of solid is increases. 
Ram velocity is set as 5mm per sec with the radius of 5mm. Die angle is specified as 45<sup>o</sup> and it is specified that there is no friction during this hot extrusion process.";
}
elseif($an==45 && $fr=="Medium" && $sp==1 && $ext=="Solid" && $cur==1 && $mw=="Hot"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_hot_solid_r45/EX_SOLID_AL_45_HOT_R5_V1_FM.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium solid shaft with 50% reduction in diameter of the billet. This process is hot extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of solid is increases. 
Ram velocity is set as 1mm per sec with the radius of 5mm. Die angle is specified as 45<sup>o</sup> and it is specified that there is medium friction during this hot extrusion process.";
}
elseif($an==45 && $fr=="Medium" && $sp==5 && $ext=="Solid" && $cur==1 && $mw=="Hot"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_hot_solid_r45/EX_SOLID_AL_45_HOT_R5_V5_FM.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium solid shaft with 50% reduction in diameter of the billet. This process is hot extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of solid is increases. 
Ram velocity is set as 5mm per sec with the radius of 5mm. Die angle is specified as 45<sup>o</sup> and it is specified that there is medium friction during this hot extrusion process.";
}
elseif($an==45 && $fr=="High" && $sp==1 && $ext=="Solid" && $cur==1 && $mw=="Hot"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_hot_solid_r45/EX_SOLID_AL_45_HOT_R5_V1_FH.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium solid shaft with 50% reduction in diameter of the billet. This process is hot extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of solid is increases. 
Ram velocity is set as 1mm per sec with the radius of 5mm. Die angle is specified as 45<sup>o</sup> and it is specified that there is high friction during this hot extrusion process. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section.";
}
elseif($an==45 && $fr=="High" && $sp==5 && $ext=="Solid" && $cur==1 && $mw=="Hot"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_hot_solid_r45/EX_SOLID_AL_45_HOT_R5_V5_FH.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium solid shaft with 50% reduction in diameter of the billet. This process is hot extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of solid is increases. 
Ram velocity is set as 5mm per sec with the radius of 5mm. Die angle is specified as 45<sup>o</sup> and it is specified that there is high friction during this hot extrusion process.";
}
elseif($an==60 && $fr=="0" && $sp==1 && $ext=="Solid" && $cur==1 && $mw=="Hot"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_hot_solid_r60/EX_SOLID_AL_60_HOT_R5_V1_F0.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium solid shaft with 50% reduction in diameter of the billet. This process is hot extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of solid is increases. 
Ram velocity is set as 1mm per sec with the radius of 5mm. Die angle is specified as 60<sup>o</sup> and it is specified that there is no friction during this hot extrusion process. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section.";
}
elseif($an==60 && $fr=="0" && $sp==5 && $ext=="Solid" && $cur==1 && $mw=="Hot"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_hot_solid_r60/EX_SOLID_AL_60_HOT_R5_V5_F0.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium solid shaft with 50% reduction in diameter of the billet. This process is hot extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of solid is increases. 
Ram velocity is set as 5mm per sec with the radius of 5mm. Die angle is specified as 60<sup>o</sup> and it is specified that there is no friction during this hot extrusion process. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section.";
}
elseif($an==60 && $fr=="Medium" && $sp==1 && $ext=="Solid" && $cur==1 && $mw=="Hot"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_hot_solid_r60/EX_SOLID_AL_60_HOT_R5_V1_FM.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium solid shaft with 50% reduction in diameter of the billet. This process is hot extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of solid is increases. 
Ram velocity is set as 1mm per sec with the radius of 5mm. Die angle is specified as 60<sup>o</sup> and it is specified that there is medium friction during this hot extrusion process.";
}
elseif($an==60 && $fr=="Medium" && $sp==5 && $ext=="Solid" && $cur==1 && $mw=="Hot"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_hot_solid_r60/EX_SOLID_AL_60_HOT_R5_V5_FM.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium solid shaft with 50% reduction in diameter of the billet. This process is hot extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of solid is increases. 
Ram velocity is set as 5mm per sec with the radius of 5mm. Die angle is specified as 60<sup>o</sup> and it is specified that there is medium friction during this hot extrusion process.";
}
elseif($an==60 && $fr=="High" && $sp==1 && $ext=="Solid" && $cur==1 && $mw=="Hot"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_hot_solid_r60/EX_SOLID_AL_60_HOT_R5_V1_FH.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium solid shaft with 50% reduction in diameter of the billet. This process is hot extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of solid is increases. 
Ram velocity is set as 1mm per sec with the radius of 5mm. Die angle is specified as 60<sup>o</sup> and it is specified that there is high friction during this hot extrusion process.";
}
elseif($an==60 && $fr=="High" && $sp==5 && $ext=="Solid" && $cur==1 && $mw=="Hot"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_hot_solid_r60/EX_SOLID_AL_60_HOT_R5_V5_FH.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium solid shaft with 50% reduction in diameter of the billet. This process is hot extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of solid is increases. 
Ram velocity is set as 5mm per sec with the radius of 5mm. Die angle is specified as 60<sup>o</sup> and it is specified that there is high friction during this hot extrusion process.";
}
elseif($an==90 && $fr=="0" && $sp==1 && $ext=="Solid" && $cur==1 && $mw=="Hot"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_hot_solid_r90/EX_SOLID_AL_90_HOT_R5_V1_F0.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium solid shaft with 50% reduction in diameter of the billet. This process is hot extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of solid is increases. 
Ram velocity is set as 1mm per sec with the radius of 5mm. Die angle is specified as 90<sup>o</sup> and it is specified that there is no friction during this hot extrusion process.";
}
elseif($an==90 && $fr=="0" && $sp==5 && $ext=="Solid" && $cur==1 && $mw=="Hot"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_hot_solid_r90/EX_SOLID_AL_90_HOT_R5_V5_F0.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium solid shaft with 50% reduction in diameter of the billet. This process is hot extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of solid is increases. 
Ram velocity is set as 5mm per sec with the radius of 5mm. Die angle is specified as 90<sup>o</sup> and it is specified that there is no friction during this hot extrusion process. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section.";
}
elseif($an==90 && $fr=="Medium" && $sp==1 && $ext=="Solid" && $cur==1 && $mw=="Hot"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_hot_solid_r90/EX_SOLID_AL_90_HOT_R5_V1_FM.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium solid shaft with 50% reduction in diameter of the billet. This process is hot extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of solid is increases. 
Ram velocity is set as 1mm per sec with the radius of 5mm. Die angle is specified as 90<sup>o</sup> and it is specified that there is medium friction during this hot extrusion process. Left side coloured strip shows temperature variation in the billet. The red region shows the maximum temperature generated at varying cross section.";
}
elseif($an==90 && $fr=="Medium" && $sp==5 && $ext=="Solid" && $cur==1 && $mw=="Hot"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_hot_solid_r90/EX_SOLID_AL_90_HOT_R5_V5_FM.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium solid shaft with 50% reduction in diameter of the billet. This process is hot extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of solid is increases. 
Ram velocity is set as 5mm per sec with the radius of 5mm. Die angle is specified as 90<sup>o</sup> and it is specified that there is medium friction during this hot extrusion process.";
}
elseif($an==90 && $fr=="High" && $sp==1 && $ext=="Solid" && $cur==1 && $mw=="Hot"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_hot_solid_r90/EX_SOLID_AL_90_HOT_R5_V1_FH.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium solid shaft with 50% reduction in diameter of the billet. This process is hot extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of solid is increases. 
Ram velocity is set as 1mm per sec with the radius of 5mm. Die angle is specified as 90<sup>o</sup> and it is specified that there is high friction during this hot extrusion process.";
}
elseif($an==90 && $fr=="High" && $sp==5 && $ext=="Solid" && $cur==1 && $mw=="Hot"){
echo "<script>window.location=\"Extru_Experiment.php?EXTRUSION/Al_Extrusion/al_hot_solid_r90/EX_SOLID_AL_90_HOT_R5_V5_FH.mp4\"</script> ";
$_SESSION['speech'] = "In this video you can see the extrusion process of Aluminium solid shaft with 50% reduction in diameter of the billet. This process is hot extrusion process where different parameters are controlled on the basis of given specifications. Extrusion forces with respect to pilot height are shown over the graph these Forces are maximum when there is sudden change in area of cross section of the billet. As the pilot height reduces the force required to extrusion of solid is increases. 
Ram velocity is set as 5mm per sec with the radius of 5mm. Die angle is specified as 90<sup>o</sup> and it is specified that there is high friction during this hot extrusion process.";
}
else print ("<script language='javascript'>alert('You are missing some parameters! Please try again.')</script>");
}	
?>
</div> 
<div id="footer">
&copy; Metal Forming Virtual Simulation Lab - Dayalbagh Educational Institute (www.dei.ac.in)
</div>
</body>
</html>