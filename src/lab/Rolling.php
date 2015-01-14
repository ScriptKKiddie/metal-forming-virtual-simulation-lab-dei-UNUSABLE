<?php session_start();
ini_set("display_errors","Off"); ?>
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
	<li class="dir"><a href="Rolling_Process.php">Rolling Process</a>
	<ul>
	<li><a href="Ring_Rolling.php">Ring Rolling</a></li>
	<li><a href="ThreadRolling.php">Thread Rolling</a></li>
	<li><a href="WedgeRolling.php" title="Transverse Wedge Rolling">Wedge Rolling</a></li>
	</ul>
	</li>
	<li><a href="Rolling.php">Simulation Bench</a></li>
	<li class="dir"><a href="#">Applications</a>
	<ul>
	<li class="dir"><a href="#">Flat Plate Rolling</a>
	<ul>
	<li><a href="Rolling_Experiment.php?ROLLING/Applications/roll_2.mp4">Flat Plate</a></li>
	<li><a href="Rolling_Experiment.php?ROLLING/Applications/roll_3.mp4">Close-up View</a></li>
	</ul>
	</li>
	<li class="dir"><a href="#">Angle Rolling</a>
	<ul>
	<li><a href="Rolling_Experiment.php?ROLLING/Applications/AngleRolling.mp4">Angle Rolling</a></li>
	<li><a href="Rolling_Experiment.php?ROLLING/Applications/GraphRolling.mp4">Angle Rolling with Graph</a></li>
	<li><a href="Rolling_Experiment.php?ROLLING/Applications/angle_bar_rolling.mp4">Angle Bar Rolling</a></li>	
	<li><a href="Rolling_Experiment.php?ROLLING/Applications/CircularBar_Rolling.mp4">Circular Bar Rolling</a></li>
	</ul>
	</li>
	<li class="dir"><a href="#">I-Section</a>
	<ul>
	<li><a href="Rolling_Experiment.php?ROLLING/Applications/IBeam_Rolling.mp4">I-Section with 4-Roller</a></li>
	<li><a href="Rolling_Experiment.php?ROLLING/Applications/ISection.mp4">I-Section with 2-Roller</a></li>	
	<li><a href="Rolling_Experiment.php?ROLLING/Applications/ISectionGraph.mp4">I-Section with graph</a></li>
	</ul>
	</li>
	<li><a href="Rolling_Experiment.php?ROLLING/Applications/SeamlessPipe.mp4">Seamless pipe using Rolling</a></li>
	</ul> 
	</li>
	<li><a href="MCQ_Rolling.php">Self Check Quiz</a></li>	
EOQ;
?>
</ul></div>
<div style="background-image:url(images/content_bg.jpg);position: relative; margin:auto; width: 1024px; min-height:600px;">
<br><center><u style="font-size:2em; color:#ff00ff;">Interactive Bench of Simulations for Rolling Process</u>

<FORM METHOD="post" onSubmit="return valid(this)" action="Rolling.php">
<table border="0" cellpadding="0" cellspacing="28">

<tr><td><h1>Material</h1></td><td>:</td><td><input type="radio" name="mat" value="Al"><b>Aluminium</b></td>
<td><input type="radio" name="mat" value="Cu"><b>Copper</b></td>
<td><input type="radio" name="mat" value="Steel"><b>Ck-45 Steel</b></td></tr>

<tr><td><h1>Coefficient of Friction</h1></td><td>:</td><td><input type="radio" name="fr" value="0"><b>Low</b></td>
<td><input type="radio" name="fr" value="Medium"><b>Medium</b></td>
<td><input type="radio" name="fr" value="High"><b>High</b></td></tr>

<tr><td><h1>Velocity of Ram/ Speed</h1></td><td>:</td><td><input type="radio" name="speed" value=0.5><b>0.5 mm/sec</b></td>
<td><input type="radio" name="speed" value=1><b>1 mm/sec</b></td>
<td><input type="radio" name="speed" value=1.5><b>1.5 mm/sec</b></td></tr>

<tr><td><h1>Material/ Workpiece Temperature</h1></td><td>:</td><td><input type="radio" name="m/w" value="Cold"><b>Cold</b></td>
<td><input type="radio" name="m/w" value="Hot"><b>Hot</b></td></tr>
</table>

<center><input type="submit" name="send" value="Submit">
<input type="button" name="reset_form" value="Reset Form" onclick="this.form.reset();"></center>
</FORM></center>
<?php
$mt = $_REQUEST["mat"];
$fr = $_REQUEST["fr"];
$sp = $_REQUEST["speed"];
$mw = $_REQUEST["m/w"];

if(isset($_POST["send"])){
if($fr=="0" && $sp==0.5 && $mt=="Al" && $mw=="Cold"){
echo "<script>window.location=\"Rolling_Experiment.php?ROLLING/Al_Cold/Rolling_al_f0_vp5.mp4\"</script>";
$_SESSION['speech'] = "The video shows the rolling operation taking place using three different set of rollers. The slabs of Aluminium is taken cold (cold rolling). Zero friction between rollers and slabs is shown on the top end in the video. The roller sets are rotating with the 0.5 r.p.m. speed with lower rollers moving clockwise and vice versa. 
On the right hand side one could see two graph of forging force evaluation on lower and upper roller respectively vs. step during rolling process. The scale on left hand side describes the equivalent strain in slab changing during the process.";
}
elseif($fr=="0" && $sp==1 && $mt=="Al" && $mw=="Cold"){
echo "<script>window.location=\"Rolling_Experiment.php?ROLLING/Al_Cold/Rolling_al_f0_v1.mp4\"</script>";
$_SESSION['speech'] = "The video shows the rolling operation taking place using three different set of rollers. The slabs of Aluminium is taken cold (cold rolling). Zero friction between rollers and slabs is shown on the top end in the video. The roller sets are rotating with the 1 r.p.m. speed with lower rollers moving clockwise and vice versa. 
On the right hand side one could see two graph of forging force evaluation on lower and upper roller respectively vs. step during rolling process. The scale on left hand side describes the equivalent strain in slab changing during the process.";
}
elseif($fr=="0" && $sp==1.5 && $mt=="Al" && $mw=="Cold"){
echo "<script>window.location=\"Rolling_Experiment.php?ROLLING/Al_Cold/Rolling_al_f0_v1p5.mp4\"</script>";
$_SESSION['speech'] = "The video shows the rolling operation taking place using three different set of rollers. The slabs of Aluminium is taken cold (cold rolling). Zero friction between rollers and slabs is shown on the top end in the video. The roller sets are rotating with the 1.5 r.p.m. speed with lower rollers moving clockwise and vice versa. 
On the right hand side one could see two graph of forging force evaluation on lower and upper roller respectively vs. step during rolling process. The scale on left hand side describes the equivalent strain in slab changing during the process.";
}
elseif($fr=="Medium" && $sp==0.5 && $mt=="Al" && $mw=="Cold"){
echo "<script>window.location=\"Rolling_Experiment.php?ROLLING/Al_Cold/Rolling_al_fm_vp5.mp4\"</script>";
$_SESSION['speech'] = "The video shows the rolling operation taking place using three different set of rollers. The slabs of Aluminium is taken cold (cold rolling). Medium friction between rollers and slabs is shown on the top end in the video. The roller sets are rotating with the 0.5 r.p.m. speed with lower rollers moving clockwise and vice versa. 
On the right hand side one could see two graph of forging force evaluation on lower and upper roller respectively vs. step during rolling process. The scale on left hand side describes the equivalent strain in slab changing during the process.";
}
elseif($fr=="Medium" && $sp==1 && $mt=="Al" && $mw=="Cold"){
echo "<script>window.location=\"Rolling_Experiment.php?ROLLING/Al_Cold/Rolling_al_fm_v1.mp4\"</script>";
$_SESSION['speech'] = "The video shows the rolling operation taking place using three different sets of rollers. The slabs of Aluminium is taken cold (cold rolling). Medium friction between rollers and slabs is shown on the top end in the video. The roller sets are rotating with the 1 r.p.m. speed with lower rollers moving clockwise and vice versa. 
On the right hand side one could see two graph of forging force evaluation on lower and upper roller respectively vs. step during rolling process. The scale on left hand side describes the equivalent strain in slab changing during the process.";
}
elseif($fr=="Medium" && $sp==1.5 && $mt=="Al" && $mw=="Cold"){
echo "<script>window.location=\"Rolling_Experiment.php?ROLLING/Al_Cold/Rolling_al_fm_v1p5.mp4\"</script>";
$_SESSION['speech'] = "The video shows the rolling operation taking place using three different set of rollers. The slabs of Aluminium is taken cold (cold rolling). Medium friction between rollers and slabs is shown on the top end in the video. The roller sets are rotating with the 1.5 r.p.m. speed with lower rollers moving clockwise and vice versa. 
On the right hand side one could see two graph of forging force evaluation on lower and upper roller respectively vs. step during rolling process. The scale on left hand side describes the equivalent strain in slab changing during the process.";
}
elseif($fr=="High" && $sp==0.5 && $mt=="Al" && $mw=="Cold"){
echo "<script>window.location=\"Rolling_Experiment.php?ROLLING/Al_Cold/Rolling_al_fh_vp5.mp4\"</script>";
$_SESSION['speech'] = "The video shows the rolling operation taking place using three different set of rollers. The slabs of Aluminium is taken cold (cold rolling). High friction between rollers and slabs is shown on the top end in the video. The roller sets are rotating with the 0.5 r.p.m. speed with lower rollers moving clockwise and vice versa. 
On the right hand side one could see two graph of forging force evaluation on lower and upper roller respectively vs. step during rolling process. The scale on left hand side describes the equivalent strain in slab changing during the process.";
}
elseif($fr=="High" && $sp==1 && $mt=="Al" && $mw=="Cold"){
echo "<script>window.location=\"Rolling_Experiment.php?ROLLING/Al_Cold/Rolling_al_fh_v1.mp4\"</script>";
$_SESSION['speech'] = "The video shows the rolling operation taking place using three different set of rollers. The slabs of Aluminium is taken cold (cold rolling). High friction between rollers and slabs is shown on the top end in the video. The roller sets are rotating with the 1 r.p.m. speed with lower rollers moving clockwise and vice versa. 
On the right hand side one could see two graph of forging force evaluation on lower and upper roller respectively vs. step during rolling process. The scale on left hand side describes the equivalent strain in slab changing during the process.";
}
elseif($fr=="High" && $sp==1.5 && $mt=="Al" && $mw=="Cold"){
echo "<script>window.location=\"Rolling_Experiment.php?ROLLING/Al_Cold/Rolling_al_fh_v1p5.mp4\"</script>";
$_SESSION['speech'] = "The video shows the rolling operation taking place using three different set of rollers. The slabs of Aluminium is taken cold (cold rolling). High friction between rollers and slabs is shown on the top end in the video. The roller sets are rotating with the 1.5 r.p.m. speed with lower rollers moving clockwise and vice versa. 
On the right hand side one could see two graph of forging force evaluation on lower and upper roller respectively vs. step during rolling process. The scale on left hand side describes the equivalent strain in slab changing during the process.";
}
elseif($fr=="0" && $sp==0.5 && $mt=="Steel" && $mw=="Cold"){
echo "<script>window.location=\"Rolling_Experiment.php?ROLLING/Steel_Cold/Rolling_CK45_f0_vp5.mp4\"</script>";
$_SESSION['speech'] = "The video shows the rolling operation taking place using three different set of rollers. The slabs of Steel(C-45) are taken cold (cold rolling). Zero friction between rollers and slabs is shown on the top end in the video. The roller sets are rotating with the 0.5 r.p.m. speed with lower rollers moving clockwise and vice versa. 
On the right hand side one could see two graph of forging force evaluation on lower and upper roller respectively vs. step during rolling process. The scale on left hand side describes the equivalent strain in slab changing during the process.";
}
elseif($fr=="0" && $sp==1 && $mt=="Steel" && $mw=="Cold"){
echo "<script>window.location=\"Rolling_Experiment.php?ROLLING/Steel_Cold/Rolling_CK45_f0_v1.mp4\"</script>";
$_SESSION['speech'] = "The video shows the rolling operation taking place using three different set of rollers. The slabs of Steel(C-45) are taken cold (cold rolling). Zero friction between rollers and slabs is shown on the top end in the video. The roller sets are rotating with the 1 r.p.m. speed with lower rollers moving clockwise and vice versa. 
On the right hand side one could see two graph of forging force evaluation on lower and upper roller respectively vs. step during rolling process. The scale on left hand side describes the equivalent strain in slab changing during the process.";
}
elseif($fr=="0" && $sp==1.5 && $mt=="Steel" && $mw=="Cold"){
echo "<script>window.location=\"Rolling_Experiment.php?ROLLING/Steel_Cold/Rolling_CK45_f0_v1p5.mp4\"</script>";
$_SESSION['speech'] = "The video shows the rolling operation taking place using three different set of rollers. The slabs of Steel(C-45) are taken cold (cold rolling). Zero friction between rollers and slabs is shown on the top end in the video. The roller sets are rotating with the 1.5 r.p.m. speed with lower rollers moving clockwise and vice versa. 
On the right hand side one could see two graph of forging force evaluation on lower and upper roller respectively vs. step during rolling process. The scale on left hand side describes the equivalent strain in slab changing during the process.";
}
elseif($fr=="Medium" && $sp==0.5 && $mt=="Steel" && $mw=="Cold"){
echo "<script>window.location=\"Rolling_Experiment.php?ROLLING/Steel_Cold/Rolling_CK45_fm_vp5.mp4\"</script>";
$_SESSION['speech'] = "The video shows the rolling operation taking place using three different set of rollers. The slabs of Steel(C-45) are taken cold (cold rolling). Medium friction between rollers and slabs is shown on the top end in the video. The roller sets are rotating with the 0.5 r.p.m. speed with lower rollers moving clockwise and vice versa. 
On the right hand side one could see two graph of forging force evaluation on lower and upper roller respectively vs. step during rolling process. The scale on left hand side describes the equivalent strain in slab changing during the process.";
}
elseif($fr=="Medium" && $sp==1 && $mt=="Steel" && $mw=="Cold"){
echo "<script>window.location=\"Rolling_Experiment.php?ROLLING/Steel_Cold/Rolling_CK45_fm_v1.mp4\"</script>";
$_SESSION['speech'] = "The video shows the rolling operation taking place using three different set of rollers. The slabs of Steel(C-45) are taken cold (cold rolling). Medium friction between rollers and slabs is shown on the top end in the video. The roller sets are rotating with the 1 r.p.m. speed with lower rollers moving clockwise and vice versa. 
On the right hand side one could see two graph of forging force evaluation on lower and upper roller respectively vs. step during rolling process. The scale on left hand side describes the equivalent strain in slab changing during the process.";
}
elseif($fr=="Medium" && $sp==1.5 && $mt=="Steel" && $mw=="Cold"){
echo "<script>window.location=\"Rolling_Experiment.php?ROLLING/Steel_Cold/Rolling_CK45_fm_v1p5.mp4\"</script>";
$_SESSION['speech'] = "The video shows the rolling operation taking place using three different set of rollers. The slabs of Steel(C-45) are taken cold (cold rolling). Medium friction between rollers and slabs is shown on the top end in the video. The roller sets are rotating with the 1.5 r.p.m. speed with lower rollers moving clockwise and vice versa. 
On the right hand side one could see two graph of forging force evaluation on lower and upper roller respectively vs. step during rolling process. The scale on left hand side describes the equivalent strain in slab changing during the process.";
}
elseif($fr=="High" && $sp==0.5 && $mt=="Steel" && $mw=="Cold"){
echo "<script>window.location=\"Rolling_Experiment.php?ROLLING/Steel_Cold/Rolling_CK45_fh_vp5.mp4\"</script>";
$_SESSION['speech'] = "The video shows the rolling operation taking place using three different set of rollers. The slabs of Steel(C-45) are taken cold (cold rolling). High friction between rollers and slabs is shown on the top end in the video. The roller sets are rotating with the 0.5 r.p.m. speed with lower rollers moving clockwise and vice versa. 
On the right hand side one could see two graph of forging force evaluation on lower and upper roller respectively vs. step during rolling process. The scale on left hand side describes the equivalent strain in slab changing during the process.";
}
elseif($fr=="High" && $sp==1 && $mt=="Steel" && $mw=="Cold"){
echo "<script>window.location=\"Rolling_Experiment.php?ROLLING/Steel_Cold/Rolling_CK45_fh_v1.mp4\"</script>";
$_SESSION['speech'] = "The video shows the rolling operation taking place using three different set of rollers. The slabs of Steel(C-45) are taken cold (cold rolling). High friction between rollers and slabs is shown on the top end in the video. The roller sets are rotating with the 1 r.p.m. speed with lower rollers moving clockwise and vice versa. 
On the right hand side one could see two graph of forging force evaluation on lower and upper roller respectively vs. step during rolling process. The scale on left hand side describes the equivalent strain in slab changing during the process.";
}
elseif($fr=="High" && $sp==1.5 && $mt=="Steel" && $mw=="Cold"){
echo "<script>window.location=\"Rolling_Experiment.php?ROLLING/Steel_Cold/Rolling_CK45_fh_v1p5.mp4\"</script>";
$_SESSION['speech'] = "The video shows the rolling operation taking place using three different set of rollers. The slabs of Steel(C-45) are taken cold (cold rolling). High friction between rollers and slabs is shown on the top end in the video. The roller sets are rotating with the 1.5 r.p.m. speed with lower rollers moving clockwise and vice versa. 
On the right hand side one could see two graph of forging force evaluation on lower and upper roller respectively vs. step during rolling process. The scale on left hand side describes the equivalent strain in slab changing during the process.";
}
elseif($fr=="0" && $sp==0.5 && $mt=="Cu" && $mw=="Cold"){
echo "<script>window.location=\"Rolling_Experiment.php?ROLLING/Cu_Cold/Rolling_cu_f0_vp5.mp4\"</script>";
$_SESSION['speech'] = "The video shows the rolling operation taking place using three different set of rollers. The slabs of Copper is taken cold (cold rolling). Zero friction between rollers and slabs is shown on the top end in the video. The roller sets are rotating with the 0.5 r.p.m. speed with lower rollers moving clockwise and vice versa. 
On the right hand side one could see two graph of forging force evaluation on lower and upper roller respectively vs. step during rolling process. The scale on left hand side describes the equivalent strain in slab changing during the process.";
}
elseif($fr=="0" && $sp==1 && $mt=="Cu" && $mw=="Cold"){
echo "<script>window.location=\"Rolling_Experiment.php?ROLLING/Cu_Cold/Rolling_cu_f0_v1.mp4\"</script>";
$_SESSION['speech'] = "The video shows the rolling operation taking place using three different set of rollers. The slabs of Copper is taken cold (cold rolling). Zero friction between rollers and slabs is shown on the top end in the video. The roller sets are rotating with the 1 r.p.m. speed with lower rollers moving clockwise and vice versa. 
On the right hand side one could see two graph of forging force evaluation on lower and upper roller respectively vs. step during rolling process. The scale on left hand side describes the equivalent strain in slab changing during the process.";
}
elseif($fr=="0" && $sp==1.5 && $mt=="Cu" && $mw=="Cold"){
echo "<script>window.location=\"Rolling_Experiment.php?ROLLING/Cu_Cold/Rolling_cu_f0_v1p5.mp4\"</script>";
$_SESSION['speech'] = "The video shows the rolling operation taking place using three different set of rollers. The slabs of Copper is taken cold (cold rolling). Zero friction between rollers and slabs is shown on the top end in the video. The roller sets are rotating with the 1.5 r.p.m. speed with lower rollers moving clockwise and vice versa. 
On the right hand side one could see two graph of forging force evaluation on lower and upper roller respectively vs. step during rolling process. The scale on left hand side describes the equivalent strain in slab changing during the process.";
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