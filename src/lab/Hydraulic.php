<?php session_start();
ini_set("display_errors","Off"); ?>
<!DOCTYPE HTML public "-w3c//dtd//xhtml 1.0 strict//en" "http://www.w3.org/tr/xhtml1/dtd/xhtml1-strict.dtd">
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
	<li><a href="upsetting_process.php">Upsetting</a></li>
	<li><a href="upsetting_simulation.php">Simulations</a></li>
	<li class="dir"><a href="#">Simulation Bench</a>
	<ul>
	<li><a href="Hydraulic.php">SIMULATION BENCH FOR HYDRAULIC PRESS</a></li>
	<li><a href="Mechanical.php">SIMULATION BENCH FOR MECHANICAL PRESS</a></li>		
	</ul> 
	</li>
	<li><a href="upsetcomp.php">Comparative Simulations</a></li>
	<li class="dir"><a href="#">Applications</a>
	<ul>
	<li class="dir"><a href="#">ALLOY WHEEL</a>
	<ul>
	<li><a href="Upset_Experiment.php?UPSETTING/Applications/AlloyWheelGraph.mp4">Alloy wheel</a></li>
	<li><a href="Upset_Experiment.php?UPSETTING/Applications/AlloyWheelStrain.mp4">Alloy wheel with strain</a></li>
	</ul>
	</li>
	<li class="dir"><a href="#">BRASS FORGED PART</a>
	<ul>
	<li><a href="Upset_Experiment.php?UPSETTING/Applications/BrassForgedGraph.mp4">Brass forged part</a></li>
	<li><a href="Upset_Experiment.php?UPSETTING/Applications/BrassForgedStrain.mp4">Brass forged part with strain</a></li>
	</ul>
	</li>
	<li class="dir"><a href="#">FORGED PISTON</a>
	<ul>
	<li><a href="Upset_Experiment.php?UPSETTING/Applications/ForgedPiston.mp4">Forged piston-Setup</a></li>
	<li><a href="Upset_Experiment.php?UPSETTING/Applications/ForgedPistonGraph.mp4">Forged piston with graph</a></li>
	<li><a href="Upset_Experiment.php?UPSETTING/Applications/PistonSectionView.mp4">Forged piston-Section view</a></li>
	</ul>
	</li>
	<li class="dir"><a href="#">MUDGUARD</a>
	<ul>
	<li><a href="Upset_Experiment.php?UPSETTING/Applications/MudguardSetup.mp4">Mudguard-Setup</a></li>
	<li><a href="Upset_Experiment.php?UPSETTING/Applications/MudguardUp.mp4">Mudguard with strain in Upward Direction</a></li>
	<li><a href="Upset_Experiment.php?UPSETTING/Applications/MudguardDown.mp4">Mudguard with strain in Downward Direction</a></li>
	</ul>
	</li>
	<li><a href="Upset_Experiment.php?UPSETTING/Applications/PatternMaking.mp4">PATTERN MAKING</a></li>
	</ul>
	</li>
	<li><a href="MCQ_Upsetting.php">Self Check Quiz</a></li>
EOQ;
?>
</ul></div>
<div style="background-image:url(images/content_bg.jpg);position: relative; margin:auto; width: 1024px; min-height:600px;">
<br><center><u style="font-size:2em; color:#ff00ff;">Interactive Simulation Bench for Hydraulic Press</u>

<FORM METHOD="post" onSubmit="return valid(this)" action="Hydraulic.php">
<table border="0" cellpadding="2" cellspacing="22">

<tr><td><h1>Material</h1></td><td>:</td><td><input type="radio" name="mat" value="Aluminium"><b>Aluminium</b></td>
<td><input type="radio" name="mat" value="Copper"><b>Copper</b></td><td><input type="radio" name="mat" value="Titanium"><b>Titanium</b></td>
<td><input type="radio" name="mat" value="Steel"><b>ck-45 Steel</b></td></tr>

<tr><td><h1>L/ D Ratio of Workpiece</h1></td><td>:</td><td><input type="radio" name="l/d" value="1"><b>1.0</b></td>
<td><input type="radio" name="l/d" value="1.5"><b>1.5</b></td><td><input type="radio" name="l/d" value="2"><b>2.0</b></td></tr>

<tr><td><h1>Coefficient of Friction</h1></td><td>:</td><td><input type="radio" name="fr" value="0"><b>Low</b></td>
<td><input type="radio" name="fr" value="Medium"><b>Medium</b></td>
<td><input type="radio" name="fr" value="High"><b>High<b></td></tr>

<tr><td><h1>Velocity of Upper Die/ Speed</h1></td><td>:</td><td><input type="radio" name="udie" value="1"><b>1 mm/sec</b></td>
<td><input type="radio" name="udie" value="10"><b>10 mm/sec</b></td></tr>

<tr><td><h1>Material/ Workpiece Temperature</h1></td><td>:</td><td><input type="radio" name="m/w" value="Cold"><b>Cold</b></td>
<td><input type="radio" name="m/w" value="Hot"><b>Hot</b></td></tr>
</table>

<center><input type="submit" name="send" value="Submit">
<input type="button" name="reset_form" value="Reset Form" onclick="this.form.reset();"></center>
</FORM></center>

<?php
$ld = $_REQUEST["l/d"];
$fr = $_REQUEST["fr"];
$udie = $_REQUEST["udie"];
$mat = $_REQUEST["mat"];
$mw = $_REQUEST["m/w"];

if($_REQUEST["send"]=="Submit"){
if($ld=="1" && $fr=="0" && $udie=="1" && $mat=="Aluminium" && $mw=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Al_Cold_LD1/U_H_AL_COLD_F0_LD1_V1.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Aluminum having L/D ratio=1 is taken cold (cold upsetting). Friction (for billet and dies) =0 is shown on the top end in the video. The upper die presses with the velocity of 1mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature of billet changing during the process.";
}
elseif($ld=="1" && $fr=="0" && $udie=="10" && $mat=="Aluminium" && $mw=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Al_Cold_LD1/U_H_AL_COLD_F0_LD1_V10.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Aluminum having L/D ratio=1 is taken cold (cold upsetting). Friction (for billet and dies) =0  is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature of billet changing during the process.";
}
elseif($ld=="1" && $fr=="Medium" && $udie=="1" && $mat=="Aluminium" && $mw=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Al_Cold_LD1/U_H_AL_COLD_FM_LD1_V1.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Aluminum having L/D ratio=1 is taken cold (cold upsetting). Medium friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the pressure over billet changing during the process.";
}
elseif($ld=="1" && $fr=="Medium" && $udie=="10" && $mat=="Aluminium" && $mw=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Al_Cold_LD1/U_H_AL_COLD_FM_LD1_V10.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Aluminum having L/D ratio=1 is taken cold (cold upsetting). Medium friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 10 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the equivalent strain in billet changing during the process.";
}
elseif($ld=="1" && $fr=="High" && $udie=="1" && $mat=="Aluminium" && $mw=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Al_Cold_LD1/U_H_AL_COLD_FH_LD1_V1.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Aluminum having L/D ratio=1 is taken cold (cold upsetting). High Friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature of billet changing during the process.";
}
elseif($ld=="1" && $fr=="High" && $udie=="10" && $mat=="Aluminium" && $mw=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Al_Cold_LD1/U_H_AL_COLD_FH_LD1_V10.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Aluminum having L/D ratio=1 is taken cold (cold upsetting). High Friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 10 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature of billet changing during the process.";
}
elseif($ld=="1.5" && $fr=="0" && $udie=="1" && $mat=="Aluminium" && $mw=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Al_Cold_LD1P5/U_H_AL_COLD_F0_LD1p5_V1.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Aluminum having L/D ratio=1.5 is taken cold (cold upsetting). Zero friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the equivalent strain in billet changing during the process.";
}
elseif($ld=="1.5" && $fr=="0" && $udie=="10" && $mat=="Aluminium" && $mw=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Al_Cold_LD1P5/U_H_AL_COLD_F0_LD1p5_V10.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Aluminum having L/D ratio=1.5 is taken cold (cold upsetting). Zero friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 10 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($ld=="1.5" && $fr=="Medium" && $udie=="1" && $mat=="Aluminium" && $mw=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Al_Cold_LD1P5/U_H_AL_COLD_FM_LD1P5_V1.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Aluminum having L/D ratio=1.5 is taken cold (cold upsetting). Medium friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the equivalent strain in billet changing during the process.";
}
elseif($ld=="1.5" && $fr=="Medium" && $udie=="10" && $mat=="Aluminium" && $mw=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Al_Cold_LD1P5/U_H_AL_COLD_FM_LD1P5_V10.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Aluminum having L/D ratio=1.5 is taken cold (cold upsetting). Medium friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 10 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the equivalent strain in billet changing during the process.";
}
elseif($ld=="1.5" && $fr=="High" && $udie=="1" && $mat=="Aluminium" && $mw=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Al_Cold_LD1P5/U_H_AL_COLD_FH_LD1P5_V1.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Aluminum having L/D ratio=1.5 is taken cold (cold upsetting). High friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the equivalent strain in billet changing during the process.";
}
elseif($ld=="1.5" && $fr=="High" && $udie=="10" && $mat=="Aluminium" && $mw=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Al_Cold_LD1P5/U_H_AL_COLD_FH_LD1P5_V10.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Aluminum having L/D ratio=1.5 is taken cold (cold upsetting). High friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 10 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the equivalent strain in billet changing during the process.";
}
elseif($ld=="2" && $fr=="0" && $udie=="1" && $mat=="Aluminium" && $mw=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Al_Cold_LD2/U_H_AL_COLD_F0_LD2_V1.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Aluminum having L/D ratio=2 is taken cold (cold upsetting). Zero friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the equivalent strain in billet changing during the process.";
}
elseif($ld=="2" && $fr=="0" && $udie=="10" && $mat=="Aluminium" && $mw=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Al_Cold_LD2/U_H_AL_COLD_F0_LD2_V10.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Aluminum having L/D ratio=2 is taken cold (cold upsetting). Zero friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 10 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the equivalent strain in billet changing during the process.";
}
elseif($ld=="2" && $fr=="Medium" && $udie=="1" && $mat=="Aluminium" && $mw=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Al_Cold_LD2/U_H_AL_COLD_FM_LD2_V1.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Aluminum having L/D ratio=2 is taken cold (cold upsetting). Medium friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the equivalent strain in billet changing during the process.";
}
elseif($ld=="2" && $fr=="Medium" && $udie=="10" && $mat=="Aluminium" && $mw=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Al_Cold_LD2/U_H_AL_COLD_FM_LD2_V10.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Aluminum having L/D ratio=2 is taken cold (cold upsetting). Medium friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 10 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($ld=="2" && $fr=="High" && $udie=="1" && $mat=="Aluminium" && $mw=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Al_Cold_LD2/U_H_AL_COLD_FH_LD2_V1.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Aluminum having L/D ratio=2 is taken cold (cold upsetting). High friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the equivalent strain in billet changing during the process.";
}
elseif($ld=="2" && $fr=="High" && $udie=="10" && $mat=="Aluminium" && $mw=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Al_Cold_LD2/U_H_AL_COLD_FH_LD2_V10.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Aluminum having L/D ratio=2 is taken cold (cold upsetting). High friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 10 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the equivalent strain in billet changing during the process.";
}
elseif($ld=="1" && $fr=="0" && $udie=="1" && $mat=="Aluminium" && $mw=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Al_Hot_LD1/U_H_AL_HOT_F0_LD1_V1.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Aluminium having L/D ratio=1 is taken hot (hot upsetting). Zero friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the equivalent strain in billet changing during the process.";
}
elseif($ld=="1" && $fr=="0" && $udie=="10" && $mat=="Aluminium" && $mw=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Al_Hot_LD1/U_H_AL_HOT_F0_LD1_V10.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Aluminium having L/D ratio=1 is taken hot (hot upsetting). Zero friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 10 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the equivalent strain in billet changing during the process.";
}
elseif($ld=="1" && $fr=="Medium" && $udie=="1" && $mat=="Aluminium" && $mw=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Al_Hot_LD1/U_H_AL_HOT_FM_LD1_V1.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Aluminium having L/D ratio=1 is taken hot (hot upsetting). Medium friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the equivalent strain in billet changing during the process.";
}
elseif($ld=="1" && $fr=="Medium" && $udie=="10" && $mat=="Aluminium" && $mw=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Al_Hot_LD1/U_H_AL_HOT_FM_LD1_V10.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Aluminium having L/D ratio=1 is taken hot (hot upsetting). Medium friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 10 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the equivalent strain in billet changing during the process.";
}
elseif($ld=="1" && $fr=="High" && $udie=="1" && $mat=="Aluminium" && $mw=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Al_Hot_LD1/U_H_AL_HOT_FH_LD1_V1.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Aluminium having L/D ratio=1 is taken hot (hot upsetting). High friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the equivalent strain in billet changing during the process.";
}
elseif($ld=="1" && $fr=="High" && $udie=="10" && $mat=="Aluminium" && $mw=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Al_Hot_LD1/U_H_AL_HOT_FH_LD1_V10.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Aluminium having L/D ratio=1 is taken hot (hot upsetting). High friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 10 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($ld=="1.5" && $fr=="0" && $udie=="1" && $mat=="Aluminium" && $mw=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Al_Hot_LD1P5/U_H_AL_HOT_F0_LD1P5_V1.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Aluminium having L/D ratio=1.5 is taken hot (hot upsetting). Zero friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the equivalent strain in billet changing during the process.";
}
elseif($ld=="1.5" && $fr=="0" && $udie=="10" && $mat=="Aluminium" && $mw=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Al_Hot_LD1P5/U_H_AL_HOT_F0_LD1P5_V10.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Aluminium having L/D ratio=1.5 is taken hot (hot upsetting). Zero friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 10 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the equivalent strain in billet changing during the process.";
}
elseif($ld=="1.5" && $fr=="Medium" && $udie=="1" && $mat=="Aluminium" && $mw=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Al_Hot_LD1P5/U_H_AL_HOT_FM_LD1P5_V1.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Aluminium having L/D ratio=1.5 is taken hot (hot upsetting). Medium friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the equivalent strain in billet changing during the process.";
}
elseif($ld=="1.5" && $fr=="Medium" && $udie=="10" && $mat=="Aluminium" && $mw=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Al_Hot_LD1P5/U_H_AL_HOT_FM_LD1P5_V10.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Aluminium having L/D ratio=1.5 is taken hot (hot upsetting). Medium friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 10 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the equivalent strain in billet changing during the process.";
}
elseif($ld=="1.5" && $fr=="High" && $udie=="1" && $mat=="Aluminium" && $mw=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Al_Hot_LD1P5/U_H_AL_HOT_FH_LD1P5_V1.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Aluminium having L/D ratio=1.5 is taken hot (hot upsetting). High friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the equivalent strain in billet changing during the process.";
}
elseif($ld=="1.5" && $fr=="High" && $udie=="10" && $mat=="Aluminium" && $mw=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Al_Hot_LD1P5/U_H_AL_HOT_FH_LD1P5_V10.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Aluminium having L/D ratio=1.5 is taken hot (hot upsetting). High friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 10 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the equivalent strain in billet changing during the process.";
}
elseif($ld=="2" && $fr=="0" && $udie=="1" && $mat=="Aluminium" && $mw=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Al_Hot_LD2/U_H_AL_HOT_F0_LD2_V1.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Aluminium having L/D ratio=2 is taken hot (hot upsetting). Zero friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the equivalent strain in billet changing during the process.";
}
elseif($ld=="2" && $fr=="0" && $udie=="10" && $mat=="Aluminium" && $mw=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Al_Hot_LD2/U_H_AL_HOT_F0_LD2_V10.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Aluminium having L/D ratio=2 is taken hot (hot upsetting). Zero friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 10 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the pressure over billet changing during the process.";
}
elseif($ld=="2" && $fr=="Medium" && $udie=="1" && $mat=="Aluminium" && $mw=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Al_Hot_LD2/U_H_AL_HOT_FM_LD2_V1.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Aluminium having L/D ratio=2 is taken hot (hot upsetting). Medium friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the equivalent strain in billet changing during the process.";
}
elseif($ld=="2" && $fr=="Medium" && $udie=="10" && $mat=="Aluminium" && $mw=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Al_Hot_LD2/U_H_AL_HOT_FM_LD2_V10.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Aluminium having L/D ratio=2 is taken hot (hot upsetting). Medium friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 10 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the equivalent strain in billet changing during the process.";
}
elseif($ld=="2" && $fr=="High" && $udie=="1" && $mat=="Aluminium" && $mw=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Al_Hot_LD2/U_H_AL_HOT_FH_LD2_V1.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Aluminium having L/D ratio=2 is taken hot (hot upsetting). High friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the equivalent strain in billet changing during the process.";
}
elseif($ld=="2" && $fr=="High" && $udie=="10" && $mat=="Aluminium" && $mw=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Al_Hot_LD2/U_H_AL_HOT_FH_LD2_V10.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Aluminium having L/D ratio=2 is taken hot (hot upsetting). High friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 10 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the equivalent strain in billet changing during the process.";
}
elseif($ld=="1" && $fr=="0" && $udie=="1" && $mat=="Copper" && $mw=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Cu_Cold_LD1/U_H_Cu_COLD_F0_LD1_V1.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Copper having L/D ratio=1 is taken cold (cold upsetting). Zero friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the equivalent strain in billet changing during the process.";
}
elseif($ld=="1" && $fr=="0" && $udie=="10" && $mat=="Copper" && $mw=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Cu_Cold_LD1/U_H_Cu_COLD_F0_LD1_V10.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Copper having L/D ratio=1 is taken cold (cold upsetting). Zero friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 10 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($ld=="1" && $fr=="Medium" && $udie=="1" && $mat=="Copper" && $mw=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Cu_Cold_LD1/U_H_Cu_COLD_FM_LD1_V1.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Copper having L/D ratio=1 is taken cold (cold upsetting). Medium friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($ld=="1" && $fr=="Medium" && $udie=="10" && $mat=="Copper" && $mw=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Cu_Cold_LD1/U_H_Cu_COLD_FM_LD1_V10.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Copper having L/D ratio=1 is taken cold (cold upsetting). Medium friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 10 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($ld=="1" && $fr=="High" && $udie=="1" && $mat=="Copper" && $mw=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Cu_Cold_LD1/U_H_Cu_COLD_FH_LD1_V1.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Copper having L/D ratio=1 is taken cold (cold upsetting). High friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($ld=="1" && $fr=="High" && $udie=="10" && $mat=="Copper" && $mw=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Cu_Cold_LD1/U_H_Cu_COLD_FH_LD1_V10.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Copper having L/D ratio=1 is taken cold (cold upsetting). High friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 10 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the equivalent strain in billet changing during the process.";
}
elseif($ld=="1.5" && $fr=="0" && $udie=="1" && $mat=="Copper" && $mw=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Cu_Cold_LD1P5/U_H_Cu_COLD_F0_LD1P5_V1.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Copper having L/D ratio=1.5 is taken cold (cold upsetting). Zero friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($ld=="1.5" && $fr=="0" && $udie=="10" && $mat=="Copper" && $mw=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Cu_Cold_LD1P5/U_H_Cu_COLD_F0_LD1P5_V10.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Copper having L/D ratio=1.5 is taken cold (cold upsetting). Zero friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 10 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the equivalent strain in billet changing during the process.";
}
elseif($ld=="1.5" && $fr=="Medium" && $udie=="1" && $mat=="Copper" && $mw=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Cu_Cold_LD1P5/U_H_Cu_COLD_FM_LD1P5_V1.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Copper having L/D ratio=1.5 is taken cold (cold upsetting). Medium friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($ld=="1.5" && $fr=="Medium" && $udie=="10" && $mat=="Copper" && $mw=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Cu_Cold_LD1P5/U_H_Cu_COLD_FM_LD1P5_V10.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Copper having L/D ratio=1.5 is taken cold (cold upsetting). Medium friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 10 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($ld=="1.5" && $fr=="High" && $udie=="1" && $mat=="Copper" && $mw=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Cu_Cold_LD1P5/U_H_Cu_COLD_FH_LD1P5_V1.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Copper having L/D ratio=1.5 is taken cold (cold upsetting). High friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($ld=="1.5" && $fr=="High" && $udie=="10" && $mat=="Copper" && $mw=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Cu_Cold_LD1P5/U_H_Cu_COLD_FH_LD1P5_V10.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Copper having L/D ratio=1.5 is taken cold (cold upsetting). High friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 10 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($ld=="2" && $fr=="0" && $udie=="1" && $mat=="Copper" && $mw=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Cu_Cold_LD2/U_H_Cu_COLD_F0_LD2_V1.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Copper having L/D ratio=2 is taken cold (cold upsetting). Zero friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($ld=="2" && $fr=="0" && $udie=="10" && $mat=="Copper" && $mw=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Cu_Cold_LD2/U_H_Cu_COLD_F0_LD2_V10.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Copper having L/D ratio=2 is taken cold (cold upsetting). Zero friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 10 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the equivalent starin in billet changing during the process.";
}
elseif($ld=="2" && $fr=="Medium" && $udie=="1" && $mat=="Copper" && $mw=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Cu_Cold_LD2/U_H_Cu_COLD_FM_LD2_V1.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Copper having L/D ratio=2 is taken cold (cold upsetting). Medium friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the equivalent strain in billet changing during the process.";
}
elseif($ld=="2" && $fr=="Medium" && $udie=="10" && $mat=="Copper" && $mw=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Cu_Cold_LD2/U_H_Cu_COLD_FM_LD2_V10.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Copper having L/D ratio=2 is taken cold (cold upsetting). Medium friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 10 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($ld=="2" && $fr=="High" && $udie=="1" && $mat=="Copper" && $mw=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Cu_Cold_LD2/U_H_Cu_COLD_FH_LD2_V1.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Copper having L/D ratio=2 is taken cold (cold upsetting). High friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the equivalent starin in billet changing during the process.";
}
elseif($ld=="2" && $fr=="High" && $udie=="10" && $mat=="Copper" && $mw=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Cu_Cold_LD2/U_H_Cu_COLD_FH_LD2_V10.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Copper having L/D ratio=2 is taken cold (cold upsetting). High friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 10 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($ld=="1" && $fr=="0" && $udie=="1" && $mat=="Copper" && $mw=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Cu_Hot_LD1/U_H_Cu_HOT_F0_LD1_V1.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Copper having L/D ratio=1 is taken hot (hot upsetting). Zero friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the equivalent strain in billet changing during the process.";
}
elseif($ld=="1" && $fr=="0" && $udie=="10" && $mat=="Copper" && $mw=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Cu_Hot_LD1/U_H_Cu_HOT_F0_LD1_V10.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Copper having L/D ratio=1 is taken hot (hot upsetting). Zero friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 10 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($ld=="1" && $fr=="Medium" && $udie=="1" && $mat=="Copper" && $mw=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Cu_Hot_LD1/U_H_Cu_HOT_FM_LD1_V1.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Copper having L/D ratio=1 is taken hot (hot upsetting). Medium friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the equivalent strain in billet changing during the process.";
}
elseif($ld=="1" && $fr=="Medium" && $udie=="10" && $mat=="Copper" && $mw=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Cu_Hot_LD1//U_H_Cu_HOT_FM_LD1_V10.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Copper having L/D ratio=1 is taken hot (hot upsetting). Medium friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 10 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($ld=="1" && $fr=="High" && $udie=="1" && $mat=="Copper" && $mw=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Cu_Hot_LD1/U_H_Cu_HOT_FH_LD1_V1.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Copper having L/D ratio=1 is taken hot (hot upsetting). High friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the equivalent strain in billet changing during the process.";
}
elseif($ld=="1" && $fr=="High" && $udie=="10" && $mat=="Copper" && $mw=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Cu_Hot_LD1/U_H_Cu_HOT_FH_LD1_V10.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Copper having L/D ratio=1 is taken hot (hot upsetting). High friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 10 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the equivalent strain in billet changing during the process.";
}
elseif($ld=="1.5" && $fr=="0" && $udie=="1" && $mat=="Copper" && $mw=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Cu_Hot_LD1P5/U_H_Cu_HOT_F0_LD1P5_V1.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Copper having L/D ratio=1.5 is taken hot (hot upsetting). Zero friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($ld=="1.5" && $fr=="0" && $udie=="10" && $mat=="Copper" && $mw=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Cu_Hot_LD1P5/U_H_Cu_HOT_F0_LD1p5_V10.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Copper having L/D ratio=1.5 is taken hot (hot upsetting). Zero friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 10 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the equivalent strain in billet changing during the process.";
}
elseif($ld=="1.5" && $fr=="Medium" && $udie=="1" && $mat=="Copper" && $mw=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Cu_Hot_LD1P5/U_H_Cu_HOT_FM_LD1P5_V1.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Copper having L/D ratio=1.5 is taken hot (hot upsetting). Medium friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($ld=="1.5" && $fr=="Medium" && $udie=="10" && $mat=="Copper" && $mw=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Cu_Hot_LD1P5/U_H_Cu_HOT_FM_LD1P5_V10.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Copper having L/D ratio=1.5 is taken hot (hot upsetting). Medium friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 10 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($ld=="1.5" && $fr=="High" && $udie=="1" && $mat=="Copper" && $mw=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Cu_Hot_LD1P5/U_H_Cu_HOT_FH_LD1P5_V1.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Copper having L/D ratio=1.5 is taken hot (hot upsetting). High friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($ld=="1.5" && $fr=="High" && $udie=="10" && $mat=="Copper" && $mw=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Cu_Hot_LD1P5/U_H_Cu_HOT_FH_LD1P5_V10.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Copper having L/D ratio=1.5 is taken hot (hot upsetting). High friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 10 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the equivalent strain in billet changing during the process.";
}
elseif($ld=="2" && $fr=="0" && $udie=="1" && $mat=="Copper" && $mw=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Cu_Hot_LD2/U_H_Cu_HOT_F0_LD2_V1.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Copper having L/D ratio=2 is taken hot (hot upsetting). Zero friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($ld=="2" && $fr=="0" && $udie=="10" && $mat=="Copper" && $mw=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Cu_Hot_LD2/U_H_Cu_HOT_F0_LD2_V10.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Copper having L/D ratio=2 is taken hot (hot upsetting). Zero friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 10 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the equivalent strain in billet changing during the process.";
}
elseif($ld=="2" && $fr=="Medium" && $udie=="1" && $mat=="Copper" && $mw=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Cu_Hot_LD2/U_H_Cu_HOT_FM_LD2_V1.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Copper having L/D ratio=2 is taken hot (hot upsetting). Medium friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the equivalent strain in billet changing during the process.";
}
elseif($ld=="2" && $fr=="Medium" && $udie=="10" && $mat=="Copper" && $mw=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Cu_Hot_LD2/U_H_Cu_HOT_FM_LD2_V10.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Copper having L/D ratio=2 is taken hot (hot upsetting). Medium friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 10 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($ld=="2" && $fr=="High" && $udie=="1" && $mat=="Copper" && $mw=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Cu_Hot_LD2/U_H_Cu_HOT_FH_LD2_V1.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Copper having L/D ratio=2 is taken hot (hot upsetting). High friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the equivalent strain in billet changing during the process.";
}
elseif($ld=="2" && $fr=="High" && $udie=="10" && $mat=="Copper" && $mw=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Cu_Hot_LD2/U_H_Cu_HOT_FH_LD2_V10.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Copper having L/D ratio=2 is taken hot (hot upsetting). High friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 10 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($ld=="1" && $fr=="0" && $udie=="1" && $mat=="Titanium" && $mw=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/TI_Cold_LD1/U_H_TI_COLD_F0_LD1_V1.mp4\"</script>";
$_SESSION['speech'] = "Here this metal forming simulation is depicting upsetting process. Upsetting is a process in which metal is plastically deformed and it is an open die forging process. This process is extensively used for shaping over sized billets by compressing them. In this Finite Element Simulation video, one can see upsetting process simulation for Titanium. Here, one can observe that forging process requires two dies - one bottom and one upper die. Bottom die is rigid and it is not moving, on the other hand , upper die is moving in downward direction with a velocity of 1mm/sec.
One could observe in this simulation that only one fourth part of the upsetting process is shown here. This is because upsetting process is axis symmetric, so therefore only one part of the process is simulated for the sake of saving completion time. 
Here the cold upsetting process for Titanium billet is shown. The length by diameter or L by D ratio of billet is 1 and the friction involved in the upsetting process is zero. The reduction produced after forging is 50% & the press used is hydraulic press.
The graph on the right side shows the evolution of the Forging Force with pilot height of the punch. Maximum forging force required here is  290.62 tonnes. The average  equivalent strain generated here is 0.69.";
}
elseif($ld=="1" && $fr=="0" && $udie=="10" && $mat=="Titanium" && $mw=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/TI_Cold_LD1/U_H_TI_COLD_F0_LD1_V10.mp4\"</script>";
$_SESSION['speech'] = "Here this metal forming simulation is depicting upsetting process. Upsetting is a process in which metal is plastically deformed and it is an open die forging process. This process is extensively used for shaping over sized billets by compressing them. In this Finite Element Simulation video, one can see upsetting process simulation for Titanium. Here, one can observe that forging process requires two dies - one bottom and one upper die. Bottom die is rigid and it is not moving, on the other hand, upper die is moving in downward direction with a velocity of 10mm/sec.
One could observe in this simulation that only one fourth part of the upsetting process is shown here. This is because upsetting process is axis symmetric, so therefore only one part of the process is simulated for the sake of saving completion time. 
Here the cold upsetting process for Titanium billet is shown. The length by diameter or L by D ratio of billet is 1 and the friction involved in the upsetting process is zero. The reduction produced after forging is 50% & the press used is hydraulic press.
The graph on the right side shows the evolution of the Forging Force with pilot height of the punch. Maximum forging force required here is 302.09 tonnes. The average  equivalent strain generated here is 0.69.";
}
elseif($ld=="1" && $fr=="Medium" && $udie=="1" && $mat=="Titanium" && $mw=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/TI_Cold_LD1/U_H_Ti_COLD_FM_LD1_V1.mp4\"</script>";
$_SESSION['speech'] = "Here this metal forming simulation is depicting upsetting process. Upsetting is a process in which metal is plastically deformed and it is an open die forging process. This process is extensively used for shaping over sized billets by compressing them. In this Finite Element Simulation video, one can see upsetting process simulation for Titanium. Here, one can observe that forging process requires two dies - one bottom and one upper die. Bottom die is rigid and it is not moving, on the other hand , upper die is moving in downward direction with a velocity of 1mm/sec.
One could observe in this simulation that only one fourth part of the upsetting process is shown here. This is because upsetting process is axis symmetric, so therefore only one part of the process is simulated for the sake of saving completion time. The initial temperature of Billet is 25<sup>o</sup>C. The change in temperature is depicted by the colour code shown on the left hand side of the video  & final temperature of the billet is 210<sup>o</sup>C.
Here the cold upsetting process for Titanium billet is shown. The length by diameter or L by D ratio of billet is 1 and the friction involved in the upsetting process is medium. The reduction produced after forging is 50% & the press used is hydraulic press.
The graph on the right side shows the evolution of the Forging Force with pilot height of the punch. Maximum forging force required here is 302.32 tonnes.";
}
elseif($ld=="1" && $fr=="Medium" && $udie=="10" && $mat=="Titanium" && $mw=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/TI_Cold_LD1/U_H_Ti_COLD_FM_LD1_V10.mp4\"</script>";
$_SESSION['speech'] = "Here this metal forming simulation is depicting upsetting process. Upsetting is a process in which metal is plastically deformed and it is an open die forging process. This process is extensively used for shaping over sized billets by compressing them. In this Finite Element Simulation video, one can see upsetting process simulation for Titanium. Here, one can observe that forging process requires two dies - one bottom and one upper die. Bottom die is rigid and it is not moving, on the other hand , upper die is moving in downward direction with a velocity of 10mm/sec.
One could observe in this simulation that only one fourth part of the upsetting process is shown here. This is because upsetting process is axis symmetric, so therefore only one part of the process is simulated for the sake of saving completion time. The initial temperature of Billet is 25<sup>o</sup>C. The change in temperature is depicted by the colour code shown on the left hand side of the video  & final temperature of the billet is 239.57<sup>o</sup>C.
Here the cold upsetting process for Titanium billet is shown. The length by diameter or L by D ratio of billet is 1 and the friction involved in the upsetting process is medium. The reduction produced after forging is 50% & the press used is hydraulic press.
The graph on the right side shows the evolution of the Forging Force with pilot height of the punch. Maximum forging force required here is 314.21 tonnes.";
}
elseif($ld=="1" && $fr=="High" && $udie=="1" && $mat=="Titanium" && $mw=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/TI_Cold_LD1/U_H_Ti_COLD_FH_LD1_V1.mp4\"</script>";
$_SESSION['speech'] = "Here this metal forming simulation is depicting upsetting process. Upsetting is a process in which metal is plastically deformed and it is an open die forging process. This process is extensively used for shaping over sized billets by compressing them. In this Finite Element Simulation video, one can see upsetting process simulation for Titanium. Here, one can observe that forging process requires two dies - one bottom and one upper die. Bottom die is rigid and it is not moving, on the other hand , upper die is moving in downward direction with a velocity of 1mm/sec.
One could observe in this simulation that only one fourth part of the upsetting process is shown here. This is because upsetting process is axis symmetric, so therefore only one part of the process is simulated for the sake of saving completion time. The initial temperature of Billet is 25 °C. The change in temperature is depicted by the colour code shown on the left hand side of the video  & final temperature of the billet is 250<sup>o</sup>C.
Here the cold upsetting process for Titanium billet is shown. The length by diameter or L by D ratio of billet is 1 and the friction involved in the upsetting process is high. The reduction produced after forging is 50% & the press used is hydraulic press.
The graph on the right side shows the evolution of the Forging Force with pilot height of the punch. Maximum forging force required here is 319.38 tonnes.";
}
elseif($ld=="1" && $fr=="High" && $udie=="10" && $mat=="Titanium" && $mw=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/TI_Cold_LD1/U_H_Ti_COLD_FH_LD1_V10.mp4\"</script>";
$_SESSION['speech'] = "Here this metal forming simulation is depicting upsetting process. Upsetting is a process in which metal is plastically deformed and it is an open die forging process. This process is extensively used for shaping over sized billets by compressing them. In this Finite Element Simulation video, one can see upsetting process simulation for Titanium. Here, one can observe that forging process requires two dies - one bottom and one upper die. Bottom die is rigid and it is not moving, on the other hand , upper die is moving in downward direction with a velocity of 10mm/sec.
One could observe in this simulation that only one fourth part of the upsetting process is shown here. This is because upsetting process is axis symmetric, so therefore only one part of the process is simulated for the sake of saving completion time. 
Here the cold upsetting process for Titanium billet is shown. The length by diameter or L by D ratio of billet is 1 and the friction involved in the upsetting process is high. The reduction produced after forging is 50% & the press used is hydraulic press.
The graph on the right side shows the evolution of the Forging Force with pilot height of the punch. Maximum forging force required here is 332.6 tonnes. The average  equivalent strain generated here is 1.04.";
}
elseif($ld=="1.5" && $fr=="0" && $udie=="1" && $mat=="Titanium" && $mw=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/TI_Cold_LD1P5/U_H_Ti_COLD_F0_LD1P5_V1.mp4\"</script>";
$_SESSION['speech'] = "Here this metal forming simulation is depicting upsetting process. Upsetting is a process in which metal is plastically deformed and it is an open die forging process. This process is extensively used for shaping over sized billets by compressing them. In this Finite Element Simulation video, one can see upsetting process simulation for Titanium. Here, one can observe that forging process requires two dies - one bottom and one upper die. Bottom die is rigid and it is not moving, on the other hand , upper die is moving in downward direction with a velocity of 1mm/sec.
One could observe in this simulation that only one fourth part of the upsetting process is shown here. This is because upsetting process is axis symmetric, so therefore only one part of the process is simulated for the sake of saving completion time. 
Here the cold upsetting process for Titanium billet is shown. The length by diameter or L by D ratio of billet is 1.5 and the friction involved in the upsetting process is zero. The reduction produced after forging is 50% & the press used is hydraulic press.
The graph on the right side shows the evolution of the Forging Force with pilot height of the punch. Maximum forging force required here is 288.51 tonnes. The average  equivalent strain generated here is 0.71.";
}
elseif($ld=="1.5" && $fr=="0" && $udie=="10" && $mat=="Titanium" && $mw=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/TI_Cold_LD1P5/U_H_Ti_COLD_F0_LD1P5_V10.mp4\"</script>";
$_SESSION['speech'] = "Here this metal forming simulation is depicting upsetting process. Upsetting is a process in which metal is plastically deformed and it is an open die forging process. This process is extensively used for shaping over sized billets by compressing them. In this Finite Element Simulation video, one can see upsetting process simulation for Titanium. Here, one can observe that forging process requires two dies - one bottom and one upper die. Bottom die is rigid and it is not moving, on the other hand , upper die is moving in downward direction with a velocity of 10mm/sec.
One could observe in this simulation that only one fourth part of the upsetting process is shown here. This is because upsetting process is axis symmetric, so therefore only one part of the process is simulated for the sake of saving completion time. The initial temperature of Billet is 25<sup>o</sup>C. The change in temperature is depicted by the colour code shown on the left hand side of the video  & final temperature of the billet is 221.03<sup>o</sup>C.
Here the cold upsetting process for Titanium billet is shown. The length by diameter or L by D ratio of billet is 1.5 and the friction involved in the upsetting process is zero. The reduction produced after forging is 50% & the press used is hydraulic press.
The graph on the right side shows the evolution of the Forging Force with pilot height of the punch. Maximum forging force required here is 299.8 tonnes.";
}
elseif($ld=="1.5" && $fr=="Medium" && $udie=="1" && $mat=="Titanium" && $mw=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/TI_Cold_LD1P5/U_H_Ti_COLD_FM_LD1P5_V1.mp4\"</script>";
$_SESSION['speech'] = "Here this metal forming simulation is depicting upsetting process. Upsetting is a process in which metal is plastically deformed and it is an open die forging process. This process is extensively used for shaping over sized billets by compressing them. In this Finite Element Simulation video, one can see upsetting process simulation for Titanium. Here, one can observe that forging process requires two dies - one bottom and one upper die. Bottom die is rigid and it is not moving, on the other hand , upper die is moving in downward direction with a velocity of 1mm/sec.
One could observe in this simulation that only one fourth part of the upsetting process is shown here. This is because upsetting process is axis symmetric, so therefore only one part of the process is simulated for the sake of saving completion time. The initial temperature of Billet is 25<sup>o</sup>C. The change in temperature is depicted by the colour code shown on the left hand side of the video  & final temperature of the billet is 221.34<sup>o</sup>C.
Here the cold upsetting process for Titanium billet is shown. the length by diameter or L by D ratio of billet is 1.5 and the friction involved in the upsetting process is medium. The reduction produced after forging is 50% & the press used is hydraulic press.
The graph on the right side shows the evolution of the Forging Force with pilot height of the punch. Maximum forging force required here is 294.57 tonnes.";
}
elseif($ld=="1.5" && $fr=="Medium" && $udie=="10" && $mat=="Titanium" && $mw=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/TI_Cold_LD1P5/U_H_Ti_COLD_FM_LD1P5_V10.mp4\"</script>";
$_SESSION['speech'] = "Here this metal forming simulation is depicting upsetting process. Upsetting is a process in which metal is plastically deformed and it is an open die forging process. This process is extensively used for shaping over sized billets by compressing them. In this Finite Element Simulation video, one can see upsetting process simulation for Titanium. Here, one can observe that forging process requires two dies - one bottom and one upper die. Bottom die is rigid and it is not moving, on the other hand , upper die is moving in downward direction with a velocity of 10mm/sec.
One could observe in this simulation that only one fourth part of the upsetting process is shown here. This is because upsetting process is axis symmetric, so therefore only one part of the process is simulated for the sake of saving completion time. The initial temperature of Billet is 25<sup>o</sup>C. The change in temperature is depicted by the colour code shown on the left hand side of the video  & final temperature of the billet is 271.76<sup>o</sup>C.
Here the cold upsetting process for Titanium billet is shown. the length by diameter or L by D ratio of billet is 1.5 and the friction involved in the upsetting process is medium. The reduction produced after forging is 50% & the press used is hydraulic press.
The graph on the right side shows the evolution of the Forging Force with pilot height of the punch. Maximum forging force required here is 305.86 tonnes.";
}
elseif($ld=="1.5" && $fr=="High" && $udie=="1" && $mat=="Titanium" && $mw=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/TI_Cold_LD1P5/U_H_Ti_COLD_FH_LD1P5_V1.mp4\"</script>";
$_SESSION['speech'] = "Here this metal forming simulation is depicting upsetting process. Upsetting is a process in which metal is plastically deformed and it is an open die forging process. This process is extensively used for shaping over sized billets by compressing them. In this Finite Element Simulation video, one can see upsetting process simulation for Titanium. Here, one can observe that forging process requires two dies - one bottom and one upper die. Bottom die is rigid and it is not moving, on the other hand , upper die is moving in downward direction with a velocity of 1mm/sec.
One could observe in this simulation that only one fourth part of the upsetting process is shown here. This is because upsetting process is axis symmetric, so therefore only one part of the process is simulated for the sake of saving completion time.
Here the cold upsetting process for Titanium billet is shown. The length by diameter or L by D ratio of billet is 1.5 and the friction involved in the upsetting process is high. The reduction produced after forging is 50% & the press used is hydraulic press.
The graph on the right side shows the evolution of the Forging Force with pilot height of the punch. Maximum forging force required here is 293.58 tonnes. The average  equivalent strain generated here is 1.06.";
}
elseif($ld=="1.5" && $fr=="High" && $udie=="10" && $mat=="Titanium" && $mw=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/TI_Cold_LD1P5/U_H_Ti_COLD_FH_LD1P5_V10.mp4\"</script>";
$_SESSION['speech'] = "Here this metal forming simulation is depicting upsetting process. Upsetting is a process in which metal is plastically deformed and it is an open die forging process. This process is extensively used for shaping over sized billets by compressing them. In this Finite Element Simulation video, one can see upsetting process simulation for Titanium. Here, one can observe that forging process requires two dies - one bottom and one upper die. Bottom die is rigid and it is not moving, on the other hand , upper die is moving in downward direction with a velocity of 10mm/sec.
One could observe in this simulation that only one fourth part of the upsetting process is shown here. This is because upsetting process is axis symmetric, so therefore only one part of the process is simulated for the sake of saving completion time. 
Here the cold upsetting process for Titanium billet is shown. The length by diameter or L by D ratio of billet is 1.5 and the friction involved in the upsetting process is high. The reduction produced after forging is 50% & the press used is hydraulic press.
The graph on the right side shows the evolution of the Forging Force with pilot height of the punch.  Maximum forging force required here is 305.18 tonnes. The average  equivalent strain generated here is 1.09.";
}
elseif($ld=="2" && $fr=="0" && $udie=="1" && $mat=="Titanium" && $mw=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/TI_Cold_LD2/U_H_Ti_COLD_F0_LD2_V1.mp4\"</script>";
$_SESSION['speech'] = "Here this metal forming simulation is depicting upsetting process. Upsetting is a process in which metal is plastically deformed and it is an open die forging process. This process is extensively used for shaping over sized billets by compressing them. In this Finite Element Simulation video, one can see upsetting process simulation for Titanium. Here, one can observe that forging process requires two dies - one bottom and one upper die. Bottom die is rigid and it is not moving, on the other hand , upper die is moving in downward direction with a velocity of 1mm/sec.
One could observe in this simulation that only one fourth part of the upsetting process is shown here. This is because upsetting process is axis symmetric, so therefore only one part of the process is simulated for the sake of saving completion time. The initial temperature of Billet is 24.99<sup>o</sup>C. The change in temperature is depicted by the colour code shown on the left hand side of the video  & final temperature of the billet is 212.58<sup>o</sup>C.
Here the cold upsetting process for Titanium billet is shown. The length by diameter or L by D ratio of billet is 2 and the friction involved in the upsetting process is zero. The reduction produced after forging is 50% & the press used is hydraulic press.
The graph on the right side shows the evolution of the Forging Force with pilot height of the punch. Maximum forging force required here is 288.26 tonnes.";
}
elseif($ld=="2" && $fr=="0" && $udie=="10" && $mat=="Titanium" && $mw=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/TI_Cold_LD2/U_H_Ti_COLD_F0_LD2_V10.mp4\"</script>";
$_SESSION['speech'] = "Here this metal forming simulation is depicting upsetting process. Upsetting is a process in which metal is plastically deformed and it is an open die forging process. This process is extensively used for shaping over sized billets by compressing them. In this Finite Element Simulation video, one can see upsetting process simulation for Titanium. Here, one can observe that forging process requires two dies - one bottom and one upper die. Bottom die is rigid and it is not moving, on the other hand , upper die is moving in downward direction with a velocity of 10mm/sec.
One could observe in this simulation that only one fourth part of the upsetting process is shown here. This is because upsetting process is axis symmetric, so therefore only one part of the process is simulated for the sake of saving completion time. 
Here the cold upsetting process for Titanium billet is shown. The length by diameter or L by D ratio of billet is 2 and the friction involved in the upsetting process is zero. The reduction produced after forging is 50% & the press used is hydraulic press.
The graph on the right side shows the evolution of the Forging Force with pilot height of the punch. Maximum forging force required here is 299.43 tonnes. The average  equivalent strain generated here is 0.689.";
}
elseif($ld=="2" && $fr=="Medium" && $udie=="1" && $mat=="Titanium" && $mw=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/TI_Cold_LD2/U_H_Ti_COLD_FM_LD2_V1.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Titanium having L/D ratio=2 is taken cold (cold upsetting). Medium friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($ld=="2" && $fr=="Medium" && $udie=="10" && $mat=="Titanium" && $mw=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/TI_Cold_LD2/U_H_Ti_COLD_FM_LD2_V10.mp4\"</script>";
$_SESSION['speech'] = "Here this metal forming simulation is depicting upsetting process. Upsetting is a process in which metal is plastically deformed and it is an open die forging process. This process is extensively used for shaping over sized billets by compressing them. In this Finite Element Simulation video, one can see upsetting process simulation for Titanium. Here, one can observe that forging process requires two dies - one bottom and one upper die. Bottom die is rigid and it is not moving, on the other hand , upper die is moving in downward direction with a velocity of 10mm/sec.
One could observe in this simulation that only one fourth part of the upsetting process is shown here. This is because upsetting process is axis symmetric, so therefore only one part of the process is simulated for the sake of saving completion time. The initial temperature of Billet is 25<sup>o</sup>C. The change in temperature is depicted by the colour code shown on the left hand side of the video  & final temperature of the billet is 239.98<sup>o</sup>C.
Here the cold upsetting process for Titanium billet is shown. The length by diameter or L by D ratio of billet is 2 and the friction involved in the upsetting process is medium. The reduction produced after forging is 50% & the press used is hydraulic press.
The graph on the right side shows the evolution of the Forging Force with pilot height of the punch. Maximum forging force required here is  302.64 tonnes.";
}
elseif($ld=="2" && $fr=="High" && $udie=="1" && $mat=="Titanium" && $mw=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/TI_Cold_LD2/U_H_Ti_COLD_FH_LD2_V1.mp4\"</script>";
$_SESSION['speech'] = "Here this metal forming simulation is depicting upsetting process. Upsetting is a process in which metal is plastically deformed and it is an open die forging process. This process is extensively used for shaping over sized billets by compressing them. In this Finite Element Simulation video, one can see upsetting process simulation for Titanium. Here, one can observe that forging process requires two dies - one bottom and one upper die. Bottom die is rigid and it is not moving, on the other hand , upper die is moving in downward direction with a velocity of 1mm/sec.
One could observe in this simulation that only one fourth part of the upsetting process is shown here. This is because upsetting process is axis symmetric, so therefore only one part of the process is simulated for the sake of saving completion time. The initial temperature of Billet is 25<sup>o</sup>C. The change in temperature is depicted by the colour code shown on the left hand side of the video  & final temperature of the billet is 261.08<sup>o</sup>C.
Here the cold upsetting process for Titanium billet is shown. The length by diameter or L by D ratio of billet is 2 and the friction involved in the upsetting process is high. The reduction produced after forging is 50% & the press used is hydraulic press.
The graph on the right side shows the evolution of the Forging Force with pilot height of the punch. Maximum forging force required here is  285.51 tonnes.";
}
elseif($ld=="2" && $fr=="High" && $udie=="10" && $mat=="Titanium" && $mw=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/TI_Cold_LD2/U_H_Ti_COLD_FH_LD2_V10.mp4\"</script>";
$_SESSION['speech'] = "Here this metal forming simulation is depicting upsetting process. Upsetting is a process in which metal is plastically deformed and it is an open die forging process. This process is extensively used for shaping over sized billets by compressing them. In this Finite Element Simulation video, one can see upsetting process simulation for Titanium. Here, one can observe that forging process requires two dies - one bottom and one upper die. Bottom die is rigid and it is not moving, on the other hand , upper die is moving in downward direction with a velocity of 10mm/sec.
One could observe in this simulation that only one fourth part of the upsetting process is shown here. This is because upsetting process is axis symmetric, so therefore only one part of the process is simulated for the sake of saving completion time. The initial temperature of Billet is 25<sup>o</sup>C. The change in temperature is depicted by the colour code shown on the left hand side of the video  & final temperature of the billet is 203.56<sup>o</sup>C
Here the cold upsetting process for Titanium billet is shown. The length by diameter or L by D ratio of billet is 2 and the friction involved in the upsetting process is high. The reduction produced after forging is 50% & the press used is hydraulic press.
The graph on the right side shows the evolution of the Forging Force with pilot height of the punch. Maximum forging force required here is  295.57 tonnes.";
}
elseif($ld=="1" && $fr=="0" && $udie=="1" && $mat=="Titanium" && $mw=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/TI_Hot_LD1/U_H_Ti_HOT_FR0_LD1_V1.mp4\"</script>";
$_SESSION['speech'] = "Here this metal forming simulation is depicting upsetting process. Upsetting is a process in which metal is plastically deformed and it is an open die forging process. This process is extensively used for shaping over sized billets by compressing them. In this Finite Element Simulation video, one can see upsetting process simulation for Titanium. Here, one can observe that forging process requires two dies - one bottom and one upper die. Bottom die is rigid and it is not moving, on the other hand , upper die is moving in downward direction with a velocity of 1mm/sec.
One could observe in this simulation that only one fourth part of the upsetting process is shown here. This is because upsetting process is axis symmetric, so therefore only one part of the process is simulated for the sake of saving completion time. The initial temperature of Billet is 300<sup>o</sup>C. The change in temperature is depicted by the colour code shown on the left hand side of the video  & final temperature of the billet is 557<sup>o</sup>C.
Here the hot upsetting process for Titanium billet is shown. The length by diameter or L by D ratio of billet is 1 and the friction involved in the upsetting process is zero. The reduction produced after forging is 50% & the press used is hydraulic press.
The graph on the right side shows the evolution of the Forging Force with pilot height of the punch. Maximum forging force required here is  422.02 tonnes.";
}
elseif($ld=="1" && $fr=="0" && $udie=="10" && $mat=="Titanium" && $mw=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/TI_Hot_LD1/U_H_Ti_HOT_FR0_LD1_V10.mp4\"</script>";
$_SESSION['speech'] = "Here this metal forming simulation is depicting upsetting process. Upsetting is a process in which metal is plastically deformed and it is an open die forging process. This process is extensively used for shaping over sized billets by compressing them. In this Finite Element Simulation video, one can see upsetting process simulation for Titanium. Here, one can observe that forging process requires two dies - one bottom and one upper die. Bottom die is rigid and it is not moving, on the other hand , upper die is moving in downward direction with a velocity of 10mm/sec.
One could observe in this simulation that only one fourth part of the upsetting process is shown here. This is because upsetting process is axis symmetric, so therefore only one part of the process is simulated for the sake of saving completion time.
Here the hot upsetting process for Titanium billet is shown. The length by diameter or L by D ratio of billet is 1 and the friction involved in the upsetting process is zero. The reduction produced after forging is 50% & the press used is hydraulic press.
The graph on the right side shows the evolution of the Forging Force with pilot height of the punch. Maximum forging force required here is 570.96 tonnes. The average  equivalent strain generated here is 0.718.";
}
elseif($ld=="1" && $fr=="Medium" && $udie=="1" && $mat=="Titanium" && $mw=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/TI_Hot_LD1/U_H_Ti_HOT_FRM_LD1_V1.mp4\"</script>";
$_SESSION['speech'] = "Here this metal forming simulation is depicting upsetting process. Upsetting is a process in which metal is plastically deformed and it is an open die forging process. This process is extensively used for shaping over sized billets by compressing them. In this Finite Element Simulation video, one can see upsetting process simulation for Titanium. Here, one can observe that forging process requires two dies - one bottom and one upper die. Bottom die is rigid and it is not moving, on the other hand , upper die is moving in downward direction with a velocity of 1mm/sec.
One could observe in this simulation that only one fourth part of the upsetting process is shown here. This is because upsetting process is axis symmetric, so therefore only one part of the process is simulated for the sake of saving completion time. The initial temperature of Billet is 300<sup>o</sup>C. The change in temperature is depicted by the colour code shown on the left hand side of the video  & final temperature of the billet is 579.47<sup>o</sup>C.
Here the hot upsetting process for Titanium billet is shown. The length by diameter or L by D ratio of billet is 1 and the friction involved in the upsetting process is medium. The reduction produced after forging is 50% & the press used is hydraulic press.
The graph on the right side shows the evolution of the Forging Force with pilot height of the punch. Maximum forging force required here is 428.6 tonnes.";
}
elseif($ld=="1" && $fr=="Medium" && $udie=="10" && $mat=="Titanium" && $mw=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/TI_Hot_LD1/U_H_Ti_HOT_FRM_LD1_V10.mp4\"</script>";
$_SESSION['speech'] = "Here this metal forming simulation is depicting upsetting process. Upsetting is a process in which metal is plastically deformed and it is an open die forging process. This process is extensively used for shaping over sized billets by compressing them. In this Finite Element Simulation video, one can see upsetting process simulation for Titanium. Here, one can observe that forging process requires two dies - one bottom and one upper die. Bottom die is rigid and it is not moving, on the other hand , upper die is moving in downward direction with a velocity of 10mm/sec.
One could observe in this simulation that only one fourth part of the upsetting process is shown here. This is because upsetting process is axis symmetric, so therefore only one part of the process is simulated for the sake of saving completion time. 
Here the hot upsetting process for Titanium billet is shown. The length by diameter or L by D ratio of billet is 1 and the friction involved in the upsetting process is medium. The reduction produced after forging is 50% & the press used is hydraulic press.
The graph on the right side shows the evolution of the Forging Force with pilot height of the punch..Maximum forging force required here is 579.55 tonnes. The average  equivalent strain generated here is 0.84 .";
}
elseif($ld=="1" && $fr=="High" && $udie=="1" && $mat=="Titanium" && $mw=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/TI_Hot_LD1/U_H_Ti_HOT_FRH_LD1_V1.mp4\"</script>";
$_SESSION['speech'] = "Here this metal forming simulation is depicting upsetting process. Upsetting is a process in which metal is plastically deformed and it is an open die forging process. This process is extensively used for shaping over sized billets by compressing them. In this Finite Element Simulation video, one can see upsetting process simulation for Titanium. Here, one can observe that forging process requires two dies - one bottom and one upper die. Bottom die is rigid and it is not moving, on the other hand , upper die is moving in downward direction with a velocity of 1mm/sec.
One could observe in this simulation that only one fourth part of the upsetting process is shown here. This is because upsetting process is axis symmetric, so therefore only one part of the process is simulated for the sake of saving completion time. The initial temperature of Billet is 300<sup>o</sup>C. The change in temperature is depicted by the colour code shown on the left hand side of the video  & final temperature of the billet is 580.25<sup>o</sup>C.
Here the hot upsetting process for Titanium billet is shown. The length by diameter or L by D ratio of billet is 1 and the friction involved in the upsetting process is high. The reduction produced after forging is 50% & the press used is hydraulic press.
The graph on the right side shows the evolution of the Forging Force with pilot height of the punch. Maximum forging force required here is 442.64 tonnes.";
}
elseif($ld=="1" && $fr=="High" && $udie=="10" && $mat=="Titanium" && $mw=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/TI_Hot_LD1/U_H_Ti_HOT_FRH_LD1_V10.mp4\"</script>";
$_SESSION['speech'] = "Here this metal forming simulation is depicting upsetting process. Upsetting is a process in which metal is plastically deformed and it is an open die forging process. This process is extensively used for shaping over sized billets by compressing them. In this Finite Element Simulation video, one can see upsetting process simulation for Titanium. Here, one can observe that forging process requires two dies - one bottom and one upper die. Bottom die is rigid and it is not moving, on the other hand , upper die is moving in downward direction with a velocity of 10 mm/sec.
One could observe in this simulation that only one fourth part of the upsetting process is shown here. This is because upsetting process is axis symmetric, so therefore only one part of the process is simulated for the sake of saving completion time. The initial temperature of Billet is 300<sup>o</sup>C. The change in temperature is depicted by the colour code shown on the left hand side of the video  & final temperature of the billet is 711.14<sup>o</sup>C.
Here the hot upsetting process for Titanium billet is shown. The length by diameter or L by D ratio of billet is 1 and the friction involved in the upsetting process is high. The reduction produced after forging is 50% & the press used is hydraulic press.
The graph on the right side shows the evolution of the Forging Force with pilot height of the punch. Maximum forging force required here is 601.92 tonnes.";
}
elseif($ld=="1.5" && $fr=="0" && $udie=="1" && $mat=="Titanium" && $mw=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/TI_Hot_LD1P5/U_H_Ti_HOT_FR0_LD1P5_V1.mp4\"</script>";
$_SESSION['speech'] = "Here this metal forming simulation is depicting upsetting process. Upsetting is a process in which metal is plastically deformed and it is an open die forging process. This process is extensively used for shaping over sized billets by compressing them. In this Finite Element Simulation video, one can see upsetting process simulation for Titanium. Here, one can observe that forging process requires two dies - one bottom and one upper die. Bottom die is rigid and it is not moving, on the other hand , upper die is moving in downward direction with a velocity of 1mm/sec.
One could observe in this simulation that only one fourth part of the upsetting process is shown here. This is because upsetting process is axis symmetric, so therefore only one part of the process is simulated for the sake of saving completion time. The initial temperature of Billet is 300<sup>o</sup>C. The change in temperature is depicted by the colour code shown on the left hand side of the video  & final temperature of the billet is 551.73<sup>o</sup>C.
Here the hot upsetting process for Titanium billet is shown. The length by diameter or L by D ratio of billet is 1.5 and the friction involved in the upsetting process is zero. The reduction produced after forging is 50% & the press used is hydraulic press.
The graph on the right side shows the evolution of the Forging Force with pilot height of the punch. Maximum forging force required here is 397.43 tonnes.";
}
elseif($ld=="1.5" && $fr=="0" && $udie=="10" && $mat=="Titanium" && $mw=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/TI_Hot_LD1P5/U_H_Ti_HOT_FR0_LD1P5_V10.mp4\"</script>";
$_SESSION['speech'] = "Here this metal forming simulation is depicting upsetting process. Upsetting is a process in which metal is plastically deformed and it is an open die forging process. This process is extensively used for shaping over sized billets by compressing them. In this Finite Element Simulation video, one can see upsetting process simulation for Titanium. Here, one can observe that forging process requires two dies - one bottom and one upper die. Bottom die is rigid and it is not moving, on the other hand , upper die is moving in downward direction with a velocity of 10mm/sec.
One could observe in this simulation that only one fourth part of the upsetting process is shown here. This is because upsetting process is axis symmetric, so therefore only one part of the process is simulated for the sake of saving completion time. 
Here the hot upsetting process for Titanium billet is shown. The length by diameter or L by D ratio of billet is 1.5 and the friction involved in the upsetting process is zero. The reduction produced after forging is 50% & the press used is hydraulic press.
The graph on the right side shows the evolution of the Forging Force with pilot height of the punch. Maximum forging force required here is 537.06 tonnes. The average  equivalent strain generated here is 0.707.";
}
elseif($ld=="1.5" && $fr=="Medium" && $udie=="1" && $mat=="Titanium" && $mw=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/TI_Hot_LD1P5/U_H_Ti_HOT_FRM_LD1P5_V1.mp4\"</script>";
$_SESSION['speech'] = "Here this metal forming simulation is depicting upsetting process. Upsetting is a process in which metal is plastically deformed and it is an open die forging process. This process is extensively used for shaping over sized billets by compressing them. In this Finite Element Simulation video, one can see upsetting process simulation for Titanium. Here, one can observe that forging process requires two dies - one bottom and one upper die. Bottom die is rigid and it is not moving, on the other hand , upper die is moving in downward direction with a velocity of 1mm/sec.
One could observe in this simulation that only one fourth part of the upsetting process is shown here. This is because upsetting process is axis symmetric, so therefore only one part of the process is simulated for the sake of saving completion time. The initial temperature of Billet is 300<sup>o</sup>C. The change in temperature is depicted by the colour code shown on the left hand side of the video  & final temperature of the billet is 591.59<sup>o</sup>C.
Here the hot upsetting process for Titanium billet is shown. The length by diameter or L by D ratio of billet is 1.5 and the friction involved in the upsetting process is medium. The reduction produced after forging is 50% & the press used is hydraulic press.
The graph on the right side shows the evolution of the Forging Force with pilot height of the punch. Maximum forging force required here is 401.33 tonnes.";
}
elseif($ld=="1.5" && $fr=="Medium" && $udie=="10" && $mat=="Titanium" && $mw=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/TI_Hot_LD1P5/U_H_Ti_HOT_FRM_LD1P5_V10.mp4\"</script>";
$_SESSION['speech'] = "Here this metal forming simulation is depicting upsetting process. Upsetting is a process in which metal is plastically deformed and it is an open die forging process. This process is extensively used for shaping over sized billets by compressing them. In this Finite Element Simulation video, one can see upsetting process simulation for Titanium. Here, one can observe that forging process requires two dies - one bottom and one upper die. Bottom die is rigid and it is not moving, on the other hand , upper die is moving in downward direction with a velocity of 10mm/sec.
One could observe in this simulation that only one fourth part of the upsetting process is shown here. This is because upsetting process is axis symmetric, so therefore only one part of the process is simulated for the sake of saving completion time. 
Here the hot upsetting process for Titanium billet is shown. The length by diameter or L by D ratio of billet is 1.5 and the friction involved in the upsetting process is medium. The reduction produced after forging is 50% & the press used is hydraulic press.
The graph on the right side shows the evolution of the Forging Force with pilot height of the punch. Maximum forging force required here is 542.3 tonnes. The average  equivalent strain generated here is 1.91.";
}
elseif($ld=="1.5" && $fr=="High" && $udie=="1" && $mat=="Titanium" && $mw=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/TI_Hot_LD1P5/U_H_Ti_HOT_FRH_LD1P5_V1.mp4\"</script>";
$_SESSION['speech'] = "Here this metal forming simulation is depicting upsetting process. Upsetting is a process in which metal is plastically deformed and it is an open die forging process. This process is extensively used for shaping over sized billets by compressing them. In this Finite Element Simulation video, one can see upsetting process simulation for Titanium. Here, one can observe that forging process requires two dies - one bottom and one upper die. Bottom die is rigid and it is not moving, on the other hand , upper die is moving in downward direction with a velocity of 1mm/sec.
One could observe in this simulation that only one fourth part of the upsetting process is shown here. This is because upsetting process is axis symmetric, so therefore only one part of the process is simulated for the sake of saving completion time. The initial temperature of Billet is 300<sup>o</sup>C. The change in temperature is depicted by the colour code shown on the left hand side of the video  & final temperature of the billet is 593.706<sup>o</sup>C.
Here the hot upsetting process for Titanium billet is shown. The length by diameter or L by D ratio of billet is 1.5 and the friction involved in the upsetting process is high. The reduction produced after forging is 50% & the press used is hydraulic press.
The graph on the right side shows the evolution of the Forging Force with pilot height of the punch. Maximum forging force required here is 408.27 tonnes.";
}
elseif($ld=="1.5" && $fr=="High" && $udie=="10" && $mat=="Titanium" && $mw=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/TI_Hot_LD1P5/U_H_Ti_HOT_FRH_LD1P5_V10.mp4\"</script>";
$_SESSION['speech'] = "Here this metal forming simulation is depicting upsetting process. Upsetting is a process in which metal is plastically deformed and it is an open die forging process. This process is extensively used for shaping over sized billets by compressing them. In this Finite Element Simulation video, one can see upsetting process simulation for Titanium. Here, one can observe that forging process requires two dies - one bottom and one upper die. Bottom die is rigid and it is not moving, on the other hand , upper die is moving in downward direction with a velocity of 10mm/sec.
One could observe in this simulation that only one fourth part of the upsetting process is shown here. This is because upsetting process is axis symmetric, so therefore only one part of the process is simulated for the sake of saving completion time. 
Here the hot upsetting process for Titanium billet is shown. The length by diameter or L by D ratio of billet is 1.5 and the friction involved in the upsetting process is high. The reduction produced after forging is 50% & the press used is hydraulic press.
The graph on the right side shows the evolution of the Forging Force with pilot height of the punch. Maximum forging force required here is 551.45 tonnes. The average  equivalent strain generated here is 1.7.";
}
elseif($ld=="2" && $fr=="0" && $udie=="1" && $mat=="Titanium" && $mw=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/TI_Hot_LD2/U_H_Ti_HOT_FR0_LD2_V1.mp4\"</script>";
$_SESSION['speech'] = "Here this metal forming simulation is depicting upsetting process. Upsetting is a process in which metal is plastically deformed and it is an open die forging process. This process is extensively used for shaping over sized billets by compressing them. In this Finite Element Simulation video, one can see upsetting process simulation for Titanium. Here, one can observe that forging process requires two dies - one bottom and one upper die. Bottom die is rigid and it is not moving, on the other hand , upper die is moving in downward direction with a velocity of 1mm/sec.
One could observe in this simulation that only one fourth part of the upsetting process is shown here. This is because upsetting process is axis symmetric, so therefore only one part of the process is simulated for the sake of saving completion time. The initial temperature of Billet is 299.69<sup>o</sup>C. The change in temperature is depicted by the colour code shown on the left hand side of the video  & final temperature of the billet is 538.19<sup>o</sup>C.
Here the hot upsetting process for Titanium billet is shown. The length by diameter or L by D ratio of billet is 2 and the friction involved in the upsetting process is zero. The reduction produced after forging is 50% & the press used is hydraulic press.
The graph on the right side shows the evolution of the Forging Force with pilot height of the punch. Maximum forging force required here is 382.71 tonnes.";
}
elseif($ld=="2" && $fr=="0" && $udie=="10" && $mat=="Titanium" && $mw=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/TI_Hot_LD2/U_H_Ti_HOT_FR0_LD2_V10.mp4\"</script>";
$_SESSION['speech'] = "Here this metal forming simulation is depicting upsetting process. Upsetting is a process in which metal is plastically deformed and it is an open die forging process. This process is extensively used for shaping over sized billets by compressing them. In this Finite Element Simulation video, one can see upsetting process simulation for Titanium. Here, one can observe that forging process requires two dies - one bottom and one upper die. Bottom die is rigid and it is not moving, on the other hand , upper die is moving in downward direction with a velocity of 10mm/sec.
One could observe in this simulation that only one fourth part of the upsetting process is shown here. This is because upsetting process is axis symmetric, so therefore only one part of the process is simulated for the sake of saving completion time. 
Here the hot upsetting process for Titanium billet is shown. The length by diameter or L by D ratio of billet is 2 and the friction involved in the upsetting process is zero. The reduction produced after forging is 50% & the press used is hydraulic press.
The graph on the right side shows the evolution of the Forging Force with pilot height of the punch. Maximum forging force required here is 516.91 tonnes. The average  equivalent strain generated here is 0.758.";
}
elseif($ld=="2" && $fr=="Medium" && $udie=="1" && $mat=="Titanium" && $mw=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/TI_Hot_LD2/U_H_Ti_HOT_FRM_LD2_V1.mp4\"</script>";
$_SESSION['speech'] = "Here this metal forming simulation is depicting upsetting process. Upsetting is a process in which metal is plastically deformed and it is an open die forging process. This process is extensively used for shaping over sized billets by compressing them. In this Finite Element Simulation video, one can see upsetting process simulation for Titanium. Here, one can observe that forging process requires two dies - one bottom and one upper die. Bottom die is rigid and it is not moving, on the other hand , upper die is moving in downward direction with a velocity of 1mm/sec.
One could observe in this simulation that only one fourth part of the upsetting process is shown here. This is because upsetting process is axis symmetric, so therefore only one part of the process is simulated for the sake of saving completion time. The initial temperature of Billet is 299.62<sup>o</sup>C. The change in temperature is depicted by the colour code shown on the left hand side of the video  & final temperature of the billet is 630.88<sup>o</sup>C.
Here the hot upsetting process for Titanium billet is shown. The length by diameter or L by D ratio of billet is 2 and the friction involved in the upsetting process is medium. The reduction produced after forging is 50% & the press used is hydraulic press.
The graph on the right side shows the evolution of the Forging Force with pilot height of the punch. Maximum forging force required here is  385.49 tonnes.";
}
elseif($ld=="2" && $fr=="Medium" && $udie=="10" && $mat=="Titanium" && $mw=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/TI_Hot_LD2/U_H_Ti_HOT_FRM_LD2_V10.mp4\"</script>";
$_SESSION['speech'] = "Here this metal forming simulation is depicting upsetting process. Upsetting is a process in which metal is plastically deformed and it is an open die forging process. This process is extensively used for shaping over sized billets by compressing them. In this Finite Element Simulation video, one can see upsetting process simulation for Titanium. Here, one can observe that forging process requires two dies - one bottom and one upper die. Bottom die is rigid and it is not moving, on the other hand , upper die is moving in downward direction with a velocity of 10mm/sec.
One could observe in this simulation that only one fourth part of the upsetting process is shown here. This is because upsetting process is axis symmetric, so therefore only one part of the process is simulated for the sake of saving completion time. 
Here the hot upsetting process for Titanium billet is shown. The length by diameter or L by D ratio of billet is 2 and the friction involved in the upsetting process is medium. The reduction produced after forging is 50% & the press used is hydraulic press.
The graph on the right side shows the evolution of the Forging Force with pilot height of the punch. Maximum forging force required here is  520.62 tonnes. The average  equivalent strain generated here is 1.23.";
}
elseif($ld=="2" && $fr=="High" && $udie=="1" && $mat=="Titanium" && $mw=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/TI_Hot_LD2/U_H_Ti_HOT_FRH_LD2_V1.mp4\"</script>";
$_SESSION['speech'] = "Here this metal forming simulation is depicting upsetting process. Upsetting is a process in which metal is plastically deformed and it is an open die forging process. This process is extensively used for shaping over sized billets by compressing them. In this Finite Element Simulation video, one can see upsetting process simulation for Titanium. Here, one can observe that forging process requires two dies - one bottom and one upper die. Bottom die is rigid and it is not moving, on the other hand , upper die is moving in downward direction with a velocity of 1mm/sec.
One could observe in this simulation that only one fourth part of the upsetting process is shown here. This is because upsetting process is axis symmetric, so therefore only one part of the process is simulated for the sake of saving completion time. The initial temperature of Billet is 299.45<sup>o</sup>C. The change in temperature is depicted by the colour code shown on the left hand side of the video  & final temperature of the billet is 599.08<sup>o</sup>C.
Here the hot upsetting process for Titanium billet is shown. The length by diameter or L by D ratio of billet is 2 and the friction involved in the upsetting process is high. The reduction produced after forging is 50% & the press used is hydraulic press.
The graph on the right side shows the evolution of the Forging Force with pilot height of the punch. Maximum forging force required here is  390.26 tonnes.";
}
elseif($ld=="2" && $fr=="High" && $udie=="10" && $mat=="Titanium" && $mw=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/TI_Hot_LD2/U_H_Ti_HOT_FRH_LD2_V10.mp4\"</script>";
$_SESSION['speech'] = "Here this metal forming simulation is depicting upsetting process. Upsetting is a process in which metal is plastically deformed and it is an open die forging process. This process is extensively used for shaping over sized billets by compressing them. In this Finite Element Simulation video, one can see upsetting process simulation for Titanium. Here, one can observe that forging process requires two dies - one bottom and one upper die. Bottom die is rigid and it is not moving, on the other hand , upper die is moving in downward direction with a velocity of 10mm/sec.
One could observe in this simulation that only one fourth part of the upsetting process is shown here. This is because upsetting process is axis symmetric, so therefore only one part of the process is simulated for the sake of saving completion time. 
Here the hot upsetting process for Titanium billet is shown. The length by diameter or L by D ratio of billet is 2 and the friction involved in the upsetting process is high. The reduction produced after forging is 50% & the press used is hydraulic press.
The graph on the right side shows the evolution of the Forging Force with pilot height of the punch. Maximum forging force required here is  527.41 tonnes. The average  equivalent strain generated here is 1.76.";
}
elseif($ld=="1" && $fr=="0" && $udie=="1" && $mat=="Steel" && $mw=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Steel_Cold_LD1/U_H_STEEL_COLD_F0_LD1_V1.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Steel having L/D ratio=1 is taken cold (cold upsetting). Zero friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($ld=="1" && $fr=="0" && $udie=="10" && $mat=="Steel" && $mw=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Steel_Cold_LD1/U_H_STEEL_COLD_F0_LD1_V10.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Steel having L/D ratio=1 is taken cold (cold upsetting). Zero friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 10 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($ld=="1" && $fr=="Medium" && $udie=="1" && $mat=="Steel" && $mw=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Steel_Cold_LD1/U_H_STEEL_COLD_FM_LD1_V1.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Steel having L/D ratio=1 is taken cold (cold upsetting). Medium friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the equivalent strain in billet changing during the process.";
}
elseif($ld=="1" && $fr=="Medium" && $udie=="10" && $mat=="Steel" && $mw=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Steel_Cold_LD1/U_H_STEEL_COLD_FM_LD1_V10.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Steel having L/D ratio=1 is taken cold (cold upsetting). Medium friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 10 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($ld=="1" && $fr=="High" && $udie=="1" && $mat=="Steel" && $mw=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Steel_Cold_LD1/U_H_STEEL_COLD_FH_LD1_V1.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Steel having L/D ratio=1 is taken cold (cold upsetting). High friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($ld=="1" && $fr=="High" && $udie=="10" && $mat=="Steel" && $mw=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Steel_Cold_LD1/U_H_STEEL_COLD_FH_LD1_V10.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Steel having L/D ratio=1 is taken cold (cold upsetting). High friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 10 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($ld=="1.5" && $fr=="0" && $udie=="1" && $mat=="Steel" && $mw=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Steel_Cold_LD1P5/U_H_STEEL_COLD_F0_LD1P5_V1.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Steel having L/D ratio=1.5 is taken cold (cold upsetting). Zero friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($ld=="1.5" && $fr=="0" && $udie=="10" && $mat=="Steel" && $mw=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Steel_Cold_LD1P5/U_H_STEEL_COLD_F0_LD1P5_V10.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Steel having L/D ratio=1.5 is taken cold (cold upsetting). Zero friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 10 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the equivalent strain in billet changing during the process.";
}
elseif($ld=="1.5" && $fr=="Medium" && $udie=="1" && $mat=="Steel" && $mw=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Steel_Cold_LD1P5/U_H_STEEL_COLD_FM_LD1P5_V1.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Steel having L/D ratio=1.5 is taken cold (cold upsetting). Medium friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the equivalent strain in billet changing during the process.";
}
elseif($ld=="1.5" && $fr=="Medium" && $udie=="10" && $mat=="Steel" && $mw=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Steel_Cold_LD1P5/U_H_STEEL_COLD_FM_LD1P5_V10.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Steel having L/D ratio=1.5 is taken cold (cold upsetting). Medium friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 10 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the pressure over billet changing during the process.";
}
elseif($ld=="1.5" && $fr=="High" && $udie=="1" && $mat=="Steel" && $mw=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Steel_Cold_LD1P5/U_H_STEEL_COLD_FH_LD1P5_V1.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Steel having L/D ratio=1.5 is taken cold (cold upsetting). High friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the equivalent strain in billet changing during the process.";
}
elseif($ld=="1.5" && $fr=="High" && $udie=="10" && $mat=="Steel" && $mw=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Steel_Cold_LD1P5/U_H_STEEL_COLD_FH_LD1P5_V10.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Steel having L/D ratio=1.5 is taken cold (cold upsetting). High friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 10 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the pressure over billet changing during the process.";
}
elseif($ld=="2" && $fr=="0" && $udie=="1" && $mat=="Steel" && $mw=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Steel_Cold_LD2/U_H_STEEL_COLD_F0_V1_LD2.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Steel having L/D ratio=2 is taken cold (cold upsetting). Zero friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the equivalent strain in billet changing during the process.";
}
elseif($ld=="2" && $fr=="0" && $udie=="10" && $mat=="Steel" && $mw=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Steel_Cold_LD2/U_H_STEEL_COLD_F0_V10_LD2.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Steel having L/D ratio=2 is taken cold (cold upsetting). Zero friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 10 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the equivalent strain in billet changing during the process.";
}
elseif($ld=="2" && $fr=="Medium" && $udie=="1" && $mat=="Steel" && $mw=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Steel_Cold_LD2/U_H_STEEL_COLD_FM_V1_LD2.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Steel having L/D ratio=2 is taken cold (cold upsetting). Medium friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the equivalent strain in billet changing during the process.";
}
elseif($ld=="2" && $fr=="Medium" && $udie=="10" && $mat=="Steel" && $mw=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Steel_Cold_LD2/U_H_STEEL_COLD_FM_V10_LD2.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Steel having L/D ratio=2 is taken cold (cold upsetting). Medium friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 10 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the equivalent strain in billet changing during the process.";
}
elseif($ld=="2" && $fr=="High" && $udie=="1" && $mat=="Steel" && $mw=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Steel_Cold_LD2/U_H_STEEL_COLD_FH_V1_LD2.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Steel having L/D ratio=2 is taken cold (cold upsetting). High friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($ld=="2" && $fr=="High" && $udie=="10" && $mat=="Steel" && $mw=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Steel_Cold_LD2/U_H_STEEL_COLD_FH_V10_LD2.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Steel having L/D ratio=2 is taken cold (cold upsetting). High friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 10 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the pressure over billet changing during the process.";
}
elseif($ld=="1" && $fr=="0" && $udie=="1" && $mat=="Steel" && $mw=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Steel_Hot_LD1/U_H_STEEL_HOT_F0_V1_LD1.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Steel having L/D ratio=1 is taken hot (hot upsetting). Zero friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the equivalent strain in billet changing during the process.";
}
elseif($ld=="1" && $fr=="0" && $udie=="10" && $mat=="Steel" && $mw=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Steel_Hot_LD1/U_H_STEEL_HOT_F0_V10_LD1.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Steel having L/D ratio=1 is taken hot (hot upsetting). Zero friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 10 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the pressure over billet changing during the process.";
}
elseif($ld=="1" && $fr=="Medium" && $udie=="1" && $mat=="Steel" && $mw=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Steel_Hot_LD1/U_H_STEEL_HOT_FM_V1_LD1.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Steel having L/D ratio=1 is taken hot (hot upsetting). Medium friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the equivalent strain in billet changing during the process.";
}
elseif($ld=="1" && $fr=="Medium" && $udie=="10" && $mat=="Steel" && $mw=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Steel_Hot_LD1/U_H_STEEL_HOT_FM_V10_LD1.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Steel having L/D ratio=1 is taken hot (hot upsetting). Medium friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 10 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($ld=="1" && $fr=="High" && $udie=="1" && $mat=="Steel" && $mw=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Steel_Hot_LD1/U_H_STEEL_HOT_FH_V1_LD1.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Steel having L/D ratio=1 is taken hot (hot upsetting). High friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the equivalent strain in billet changing during the process.";
}
elseif($ld=="1" && $fr=="High" && $udie=="10" && $mat=="Steel" && $mw=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Steel_Hot_LD1/U_H_STEEL_HOT_FH_V10_LD1.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Steel having L/D ratio=1 is taken hot (hot upsetting). High friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 10 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the equivalent strain in billet changing during the process.";
}
elseif($ld=="1.5" && $fr=="0" && $udie=="1" && $mat=="Steel" && $mw=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Steel_Hot_LD1P5/U_H_STEEL_HOT_F0_V1_LD1P5.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Steel having L/D ratio=1.5 is taken hot (hot upsetting). Zero friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the pressure over billet changing during the process.";
}
elseif($ld=="1.5" && $fr=="0" && $udie=="10" && $mat=="Steel" && $mw=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Steel_Hot_LD1P5/U_H_STEEL_HOT_F0_V10_LD1P5.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Steel having L/D ratio=1.5 is taken hot (hot upsetting). Zero friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 10 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the equivalent strain in billet changing during the process.";
}
elseif($ld=="1.5" && $fr=="Medium" && $udie=="1" && $mat=="Steel" && $mw=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Steel_Hot_LD1P5/U_H_STEEL_HOT_FM_V1_LD1P5.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Steel having L/D ratio=1.5 is taken hot (hot upsetting). Medium friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($ld=="1.5" && $fr=="Medium" && $udie=="10" && $mat=="Steel" && $mw=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Steel_Hot_LD1P5/U_H_STEEL_HOT_FM_V10_LD1P5.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Steel having L/D ratio=1.5 is taken hot (hot upsetting). Medium friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 10 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($ld=="1.5" && $fr=="High" && $udie=="1" && $mat=="Steel" && $mw=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Steel_Hot_LD1P5/U_H_STEEL_HOT_FH_V1_LD1P5.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Steel having L/D ratio=1.5 is taken hot (hot upsetting). High friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($ld=="1.5" && $fr=="High" && $udie=="10" && $mat=="Steel" && $mw=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Steel_Hot_LD1P5/U_H_STEEL_HOT_FH_V10_LD1P5.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Steel having L/D ratio=1.5 is taken hot (hot upsetting). High friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 10 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the pressure over billet changing during the process.";
}
elseif($ld=="2" && $fr=="0" && $udie=="1" && $mat=="Steel" && $mw=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Steel_Hot_LD2/U_H_STEEL_HOT_F0_V1_LD2.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Steel having L/D ratio=2 is taken hot (hot upsetting). Zero friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($ld=="2" && $fr=="0" && $udie=="10" && $mat=="Steel" && $mw=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Steel_Hot_LD2/U_H_STEEL_HOT_F0_V10_LD2.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Steel having L/D ratio=2 is taken hot (hot upsetting). Zero friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 10 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the pressure over billet changing during the process.";
}
elseif($ld=="2" && $fr=="Medium" && $udie=="1" && $mat=="Steel" && $mw=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Steel_Hot_LD2/U_H_STEEL_HOT_FM_V1_LD2.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Steel having L/D ratio=2 is taken hot (hot upsetting). Medium friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the equivalent strain in billet changing during the process.";
}
elseif($ld=="2" && $fr=="Medium" && $udie=="10" && $mat=="Steel" && $mw=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Steel_Hot_LD2/U_H_STEEL_HOT_FM_V10_LD2.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Steel having L/D ratio=2 is taken hot (hot upsetting). Medium friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the colour of parts";
}
elseif($ld=="2" && $fr=="High" && $udie=="1" && $mat=="Steel" && $mw=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Steel_Hot_LD2/U_H_STEEL_HOT_FH_V1_LD2.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Steel having L/D ratio=2 is taken hot (hot upsetting). High friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the equivalent strain in billet changing during the process.";
}
elseif($ld=="2" && $fr=="High" && $udie=="10" && $mat=="Steel" && $mw=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Hydr_Upsetting/Steel_Hot_LD2/U_H_STEEL_HOT_FH_V10_LD2.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Hydraulic Press. The initial billet of Steel having L/D ratio=2 is taken hot (hot upsetting). High friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 10 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the pressure over billet changing during the process.";
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