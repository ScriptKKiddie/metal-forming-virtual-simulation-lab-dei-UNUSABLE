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
<br><center><u style="font-size:2em; color:#ff00ff;">Interactive Simulation Bench for Mechanical Press</u>

<FORM METHOD="post" onSubmit="return valid(this)" action="Mechanical.php">
<table border="0" cellpadding="2" cellspacing="22">

<tr><td><h1>Material</h1></td><td>:</td><td><input type="radio" name="mat" value="Aluminium"><b>Aluminium</b></td>
<td><input type="radio" name="mat" value="Copper"><b>Copper</b></td><td><input type="radio" name="mat" value="Titanium"><b>Titanium</b></td>
<td><input type="radio" name="mat" value="Steel"><b>ck-45 Steel</b></td></tr>

<tr><td><h1>L/ D Ratio of Workpiece</h1></td><td>:</td><td><input type="radio" name="l/d" value="1"><b>1.0</b></td>
<td><input type="radio" name="l/d" value="1.5"><b>1.5</b></td><td><input type="radio" name="l/d" value="2"><b>2.0</b></td></tr>

<tr><td><h1>Coefficient of Friction</h1></td><td>:</td><td><input type="radio" name="fr" value="0"><b>Low</b></td>
<td><input type="radio" name="fr" value="Medium"><b>Medium</b></td>
<td><input type="radio" name="fr" value="High"><b>High<b></td></tr>

<tr><td><h1>Material/ Workpiece Temperature</h1></td><td>:</td><td><input type="radio" name="m/w" value="Cold"><b>Cold</b></td>
<td><input type="radio" name="m/w" value="Hot"><b>Hot</b></td></tr>
</table>

<center><input type="submit" name="send" value="Submit">
<input type="button" name="reset_form" value="Reset Form" onclick="this.form.reset();"></center>
</FORM></center>

<?php
$mat = $_REQUEST["mat"];
$ld = $_REQUEST["l/d"];
$fr = $_REQUEST["fr"];
$temp = $_REQUEST["m/w"];

if($_REQUEST["send"]=="Submit"){
if($fr=="0" && $ld=="1" && $mat=="Aluminium" && $temp=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Mech_Upsetting/Al_Cold_LD1/al_mechanical_cold_f0_ld1.mp4\"</script>";
$_SESSION['speech'] = "The metal forming video shows the upsetting operation taking place using Mechanical Press The initial billet of Aluminium having L/D ratio=1 is taken cold (cold upsetting). Zero friction (for billet and dies) is shown on the top end in the video. The upper die presses with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($fr=="Medium" && $ld=="1" && $mat=="Aluminium" && $temp=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Mech_Upsetting/Al_Cold_LD1/al_mechanical_cold_fm_ld1.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Mechanical Press The initial billet of Aluminium having L/D ratio=1 is taken cold (cold upsetting). Medium friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($fr=="High" && $ld=="1" && $mat=="Aluminium" && $temp=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Mech_Upsetting/Al_Cold_LD1/al_mechanical_cold_fh_ld1.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Mechanical Press The initial billet of Aluminium having L/D ratio=1 is taken cold (cold upsetting). High friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($fr=="0" && $ld=="1.5" && $mat=="Aluminium" && $temp=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Mech_Upsetting/Al_Cold_LD1P5/al_mechanical_cold_f0_ld1p5.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Mechanical Press The initial billet of Aluminium having L/D ratio=1.5 is taken cold (cold upsetting). Zero friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($fr=="Medium" && $ld=="1.5" && $mat=="Aluminium" && $temp=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Mech_Upsetting/Al_Cold_LD1P5/al_mechanical_cold_fm_ld1p5.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Mechanical Press The initial billet of Aluminium having L/D ratio=1.5 is taken cold (cold upsetting). Medium friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($fr=="High" && $ld=="1.5" && $mat=="Aluminium" && $temp=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Mech_Upsetting/Al_Cold_LD1P5/al_mechanical_cold_fh_ld1p5.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Mechanical Press The initial billet of Aluminium having L/D ratio=1.5 is taken cold (cold upsetting). High friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($fr=="0" && $ld=="2" && $mat=="Aluminium" && $temp=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Mech_Upsetting/Al_Cold_LD2/al_mechanical_cold_f0_ld2.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Mechanical Press The initial billet of Aluminium having L/D ratio=2 is taken cold (cold upsetting). Zero friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($fr=="Medium" && $ld=="2" && $mat=="Aluminium" && $temp=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Mech_Upsetting/Al_Cold_LD2/al_mechanical_cold_fm_ld2.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Mechanical Press The initial billet of Aluminium having L/D ratio=2 is taken cold (cold upsetting). Medium friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($fr=="High" && $ld=="2" && $mat=="Aluminium" && $temp=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Mech_Upsetting/Al_Cold_LD2/al_mechanical_cold_fh_ld2.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Mechanical Press The initial billet of Aluminium having L/D ratio=2 is taken cold (cold upsetting). High friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($fr=="0" && $ld=="1" && $mat=="Aluminium" && $temp=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Mech_Upsetting/Al_Hot_LD1/al_Mechanical_hot_f0_ld1.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Mechanical Press The initial billet of Aluminium having L/D ratio=1 is taken hot (hot upsetting). Zero friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($fr=="Medium" && $ld=="1" && $mat=="Aluminium" && $temp=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Mech_Upsetting/Al_Hot_LD1/al_Mechanical_hot_fm_ld1.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Mechanical Press The initial billet of Aluminium having L/D ratio=1 is taken hot (hot upsetting). Medium friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($fr=="High" && $ld=="1" && $mat=="Aluminium" && $temp=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Mech_Upsetting/Al_Hot_LD1/al_Mechanical_hot_fh_ld1.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Mechanical Press The initial billet of Aluminium having L/D ratio=1 is taken hot (hot upsetting). High friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($fr=="0" && $ld=="1.5" && $mat=="Aluminium" && $temp=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Mech_Upsetting/Al_Hot_LD1P5/al_Mechanical_hot_f0_ld1p5.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Mechanical Press The initial billet of Aluminium having L/D ratio=1.5 is taken hot (hot upsetting). Zero friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($fr=="Medium" && $ld=="1.5" && $mat=="Aluminium" && $temp=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Mech_Upsetting/Al_Hot_LD1P5/al_Mechanical_hot_fm_ld1p5.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Mechanical Press The initial billet of Aluminium having L/D ratio=1.5 is taken hot (hot upsetting). Medium friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($fr=="High" && $ld=="1.5" && $mat=="Aluminium" && $temp=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Mech_Upsetting/Al_Hot_LD1P5/al_Mechanical_hot_fh_ld1p5.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Mechanical Press The initial billet of Aluminium having L/D ratio=1.5 is taken hot (hot upsetting). High friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($fr=="0" && $ld=="2" && $mat=="Aluminium" && $temp=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Mech_Upsetting/Al_Hot_LD2/al_Mechanical_hot_f0_ld2.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Mechanical Press The initial billet of Aluminium having L/D ratio=2 is taken hot (hot upsetting). Zero friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($fr=="Medium" && $ld=="2" && $mat=="Aluminium" && $temp=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Mech_Upsetting/Al_Hot_LD2/al_Mechanical_hot_fm_ld2.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Mechanical Press The initial billet of Aluminium having L/D ratio=2 is taken hot (hot upsetting). Medium friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($fr=="High" && $ld=="2" && $mat=="Aluminium" && $temp=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Mech_Upsetting/Al_Hot_LD2/al_Mechanical_hot_fh_ld2.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Mechanical Press The initial billet of Aluminium having L/D ratio=2 is taken hot (hot upsetting). High friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($fr=="0" && $ld=="1" && $mat=="Copper" && $temp=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Mech_Upsetting/Cu_Cold_LD1/cu_mechanical_cold_f0_ld1.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Mechanical Press The initial billet of Copper having L/D ratio=1 is taken cold (cold upsetting). Zero friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($fr=="Medium" && $ld=="1" && $mat=="Copper" && $temp=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Mech_Upsetting/Cu_Cold_LD1/cu_mechanical_cold_fm_ld1.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Mechanical Press The initial billet of Copper having L/D ratio=1 is taken cold (cold upsetting). Medium friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($fr=="High" && $ld=="1" && $mat=="Copper" && $temp=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Mech_Upsetting/Cu_Cold_LD1/cu_mechanical_cold_fh_ld1.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Mechanical Press The initial billet of Copper having L/D ratio=1 is taken cold (cold upsetting). High friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($fr=="0" && $ld=="1.5" && $mat=="Copper" && $temp=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Mech_Upsetting/Cu_Cold_LD1P5/cu_mechanical_cold_f0_ld1p5.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Mechanical Press The initial billet of Copper having L/D ratio=1.5 is taken cold (cold upsetting). Zero friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($fr=="Medium" && $ld=="1.5" && $mat=="Copper" && $temp=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Mech_Upsetting/Cu_Cold_LD1P5/cu_mechanical_cold_fm_ld1p5.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Mechanical Press The initial billet of Copper having L/D ratio=1.5 is taken cold (cold upsetting). Medium friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($fr=="High" && $ld=="1.5" && $mat=="Copper" && $temp=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Mech_Upsetting/Cu_Cold_LD1P5/cu_mechanical_cold_fh_ld1p5.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Mechanical Press The initial billet of Copper having L/D ratio=1.5 is taken cold (cold upsetting). High friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($fr=="0" && $ld=="2" && $mat=="Copper" && $temp=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Mech_Upsetting/Cu_Cold_LD2/cu_mechanical_cold_f0_ld2.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Mechanical Press The initial billet of Copper having L/D ratio=2 is taken cold (cold upsetting). Zero friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($fr=="Medium" && $ld=="2" && $mat=="Copper" && $temp=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Mech_Upsetting/Cu_Cold_LD2/cu_mechanical_cold_fm_ld2.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Mechanical Press The initial billet of Copper having L/D ratio=2 is taken cold (cold upsetting). Medium friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($fr=="High" && $ld=="2" && $mat=="Copper" && $temp=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Mech_Upsetting/Cu_Cold_LD2/cu_mechanical_cold_fh_ld2.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Mechanical Press The initial billet of Copper having L/D ratio=2 is taken cold (cold upsetting). High friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($fr=="0" && $ld=="1" && $mat=="Copper" && $temp=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Mech_Upsetting/Cu_Hot_LD1/cu_Mechanical_hot_f0_ld1.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Mechanical Press The initial billet of Copper having L/D ratio=1 is taken hot (hot upsetting). Zero friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($fr=="Medium" && $ld=="1" && $mat=="Copper" && $temp=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Mech_Upsetting/Cu_Hot_LD1/cu_Mechanical_hot_fm_ld1.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Mechanical Press The initial billet of Copper having L/D ratio=1 is taken hot (hot upsetting). Medium friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($fr=="High" && $ld=="1" && $mat=="Copper" && $temp=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Mech_Upsetting/Cu_Hot_LD1/cu_Mechanical_hot_fh_ld1.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Mechanical Press The initial billet of Copper having L/D ratio=1 is taken hot (hot upsetting). High friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($fr=="0" && $ld=="1.5" && $mat=="Copper" && $temp=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Mech_Upsetting/Cu_Hot_LD1P5/cu_Mechanical_hot_f0_ld1p5.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Mechanical Press The initial billet of Copper having L/D ratio=1.5 is taken hot (hot upsetting). Zero friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($fr=="Medium" && $ld=="1.5" && $mat=="Copper" && $temp=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Mech_Upsetting/Cu_Hot_LD1P5/cu_Mechanical_hot_fm_ld1p5.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Mechanical Press The initial billet of Copper having L/D ratio=1.5 is taken hot (hot upsetting). Medium friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the equivalent strain in billet changing during the process.";
}
elseif($fr=="High" && $ld=="1.5" && $mat=="Copper" && $temp=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Mech_Upsetting/Cu_Hot_LD1P5/cu_Mechanical_hot_fh_ld1p5.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Mechanical Press The initial billet of Copper having L/D ratio=1.5 is taken hot (hot upsetting). High friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($fr=="0" && $ld=="2" && $mat=="Copper" && $temp=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Mech_Upsetting/Cu_Hot_LD2/cu_Mechanical_hot_f0_ld2.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Mechanical Press The initial billet of Copper having L/D ratio=2 is taken hot (hot upsetting). Zero friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($fr=="Medium" && $ld=="2" && $mat=="Copper" && $temp=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Mech_Upsetting/Cu_Hot_LD2/cu_Mechanical_hot_fm_ld2.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Mechanical Press The initial billet of Copper having L/D ratio=2 is taken hot (hot upsetting). Medium friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($fr=="High" && $ld=="2" && $mat=="Copper" && $temp=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Mech_Upsetting/Cu_Hot_LD2/cu_Mechanical_hot_fh_ld2.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Mechanical Press The initial billet of Copper having L/D ratio=2 is taken hot (hot upsetting). High friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($fr=="0" && $ld=="1" && $mat=="Steel" && $temp=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Mech_Upsetting/Steel_Cold_LD1/Mechanical_STEEL_COLD_F0_LD1.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Mechanical Press The initial billet of Steel having L/D ratio=1 is taken cold (cold upsetting). Zero friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($fr=="Medium" && $ld=="1" && $mat=="Steel" && $temp=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Mech_Upsetting/Steel_Cold_LD1/Mechanical_STEEL_COLD_FM_LD1.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Mechanical Press The initial billet of Steel having L/D ratio=1 is taken cold (cold upsetting). Medium friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($fr=="High" && $ld=="1" && $mat=="Steel" && $temp=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Mech_Upsetting/Steel_Cold_LD1/Mechanical_STEEL_COLD_FH_LD1.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Mechanical Press The initial billet of Steel having L/D ratio=1 is taken cold (cold upsetting). High friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($fr=="0" && $ld=="1.5" && $mat=="Steel" && $temp=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Mech_Upsetting/Steel_Cold_LD1P5/Mechanical_STEEL_COLD_F0_LD1P5.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Mechanical Press The initial billet of Steel having L/D ratio=1.5 is taken cold (cold upsetting). Zero friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($fr=="Medium" && $ld=="1.5" && $mat=="Steel" && $temp=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Mech_Upsetting/Steel_Cold_LD1P5/Mechanical_STEEL_COLD_FM_LD1P5.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Mechanical Press The initial billet of Steel having L/D ratio=1.5 is taken cold (cold upsetting). Medium friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($fr=="High" && $ld=="1.5" && $mat=="Steel" && $temp=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Mech_Upsetting/Steel_Cold_LD1P5/Mechanical_STEEL_COLD_FH_LD1P5.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Mechanical Press The initial billet of Steel having L/D ratio=1.5 is taken cold (cold upsetting). High friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($fr=="0" && $ld=="2" && $mat=="Steel" && $temp=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Mech_Upsetting/Steel_Cold_LD2/Mechanical_STEEL_COLD_F0_ld2.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Mechanical Press The initial billet of Steel having L/D ratio=2 is taken cold (cold upsetting). Zero friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($fr=="Medium" && $ld=="2" && $mat=="Steel" && $temp=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Mech_Upsetting/Steel_Cold_LD2/Mechanical_STEEL_COLD_FM_ld2.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Mechanical Press The initial billet of Steel having L/D ratio=2 is taken cold (cold upsetting). Medium friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($fr=="High" && $ld=="2" && $mat=="Steel" && $temp=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Mech_Upsetting/Steel_Cold_LD2/Mechanical_STEEL_COLD_FH_ld2.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Mechanical Press The initial billet of Steel having L/D ratio=2 is taken cold (cold upsetting). High friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($fr=="0" && $ld=="1" && $mat=="Steel" && $temp=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Mech_Upsetting/Steel_Hot_LD1/Mechanical_STEEL_HOT_F0_LD1.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Mechanical Press The initial billet of Steel having L/D ratio=1 is taken hot (hot upsetting). Zero friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($fr=="Medium" && $ld=="1" && $mat=="Steel" && $temp=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Mech_Upsetting/Steel_Hot_LD1/Mechanical_STEEL_HOT_FM_LD1.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Mechanical Press The initial billet of Steel having L/D ratio=1 is taken hot (hot upsetting). Medium friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($fr=="High" && $ld=="1" && $mat=="Steel" && $temp=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Mech_Upsetting/Steel_Hot_LD1/Mechanical_STEEL_HOT_FH_LD1.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Mechanical Press The initial billet of Steel having L/D ratio=1 is taken hot (hot upsetting). High friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($fr=="0" && $ld=="1.5" && $mat=="Steel" && $temp=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Mech_Upsetting/Steel_Hot_LD1P5/Mechanical_STEEL_HOT_F0_LD1P5.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Mechanical Press The initial billet of Steel having L/D ratio=1.5 is taken hot (hot upsetting). Zero friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($fr=="Medium" && $ld=="1.5" && $mat=="Steel" && $temp=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Mech_Upsetting/Steel_Hot_LD1P5/Mechanical_STEEL_HOT_FM_LD1P5.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Mechanical Press The initial billet of Steel having L/D ratio=1.5 is taken hot (hot upsetting). Medium friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($fr=="High" && $ld=="1.5" && $mat=="Steel" && $temp=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Mech_Upsetting/Steel_Hot_LD1P5/Mechanical_STEEL_HOT_FH_LD1P5.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Mechanical Press The initial billet of Steel having L/D ratio=1.5 is taken hot (hot upsetting). High friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($fr=="0" && $ld=="2" && $mat=="Steel" && $temp=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Mech_Upsetting/Steel_Hot_LD2/Mechanical_STEEL_HOT_F0_LD2.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Mechanical Press The initial billet of Steel having L/D ratio=2 is taken hot (hot upsetting). Zero friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($fr=="Medium" && $ld=="2" && $mat=="Steel" && $temp=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Mech_Upsetting/Steel_Hot_LD2/Mechanical_STEEL_HOT_FM_LD2.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Mechanical Press The initial billet of Steel having L/D ratio=2 is taken hot (hot upsetting). Medium friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($fr=="High" && $ld=="2" && $mat=="Steel" && $temp=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Mech_Upsetting/Steel_Hot_LD2/Mechanical_STEEL_HOT_FH_LD2.mp4\"</script>";
$_SESSION['speech'] = "The video shows the upsetting operation taking place using Mechanical Press The initial billet of Steel having L/D ratio=2 is taken hot (hot upsetting). High friction (for billet and dies) is shown on the top end in the video. The upper die presses with the velocity of 1 mm/sec with lower die stationary. 
On the right hand side one could see the graph of forging force on upper die vs. pilot height showing the forging force evolution during upsetting process for 50% deformation. The scale on left hand side describes the temperature in billet changing during the process.";
}
elseif($fr=="0" && $ld=="1" && $mat=="Titanium" && $temp=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Mech_Upsetting/TI_Cold_LD1/Mechanical_Ti_COLD_F0_LD1.mp4\"</script>";
$_SESSION['speech'] = "Here this metal forming simulation is depicting upsetting process. Upsetting is a process in which metal is plastically deformed and it is an open die forging process. This process is extensively used for shaping over sized billets by compressing them. In this Finite Element Simulation video, one can see upsetting process simulation for Titanium. Here, one can observe that forging process requires two dies - one bottom and one upper die. Bottom die is rigid and it is not moving, on the other hand, upper die is moving in downward direction. 
One could observe in this simulation that only one fourth part of the upsetting process is shown here. This is because upsetting process is axis symmetric, so therefore only one part of the process is simulated for the sake of saving completion time. 
Here the cold upsetting process for Titanium billet is shown. The length by diameter or L by D ratio of billet is 1 and the friction involved in the upsetting process is zero. The reduction produced after forging is 50% & the press used is mechanical press.
The graph on the right side shows the evolution of the Forging Force with pilot height of the punch. Maximum forging force required here is  290.52 tonnes. The average  equivalent strain generated here is 0.69.";
}
elseif($fr=="Medium" && $ld=="1" && $mat=="Titanium" && $temp=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Mech_Upsetting/TI_Cold_LD1/Mechanical_Ti_COLD_FM_LD1.mp4\"</script>";
$_SESSION['speech'] = "Here this metal forming simulation is depicting upsetting process. Upsetting is a process in which metal is plastically deformed and it is an open die forging process. This process is extensively used for shaping over sized billets by compressing them. In this Finite Element Simulation video, one can see upsetting process simulation for Titanium. Here, one can observe that forging process requires two dies - one bottom and one upper die. Bottom die is rigid and it is not moving, on the other hand , upper die is moving in downward direction. 
One could observe in this simulation that only one fourth part of the upsetting process is shown here. This is because upsetting process is axis symmetric, so therefore only one part of the process is simulated for the sake of saving completion time. The initial temperature of Billet is 25<sup>o</sup>C. The change in temperature is depicted by the colour code shown on the left hand side of the video  & final temperature of the billet is 261.85<sup>o</sup>C. 
Here the cold upsetting process for Titanium billet is shown. The length by diameter or L by D ratio of billet is 1 and the friction involved in the upsetting process is medium. The reduction produced after forging is 50% & the press used is mechanical press.
The graph on the right side shows the evolution of the Forging Force with pilot height of the punch. Maximum forging force required here is  302.06 tonnes.";
}
elseif($fr=="High" && $ld=="1" && $mat=="Titanium" && $temp=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Mech_Upsetting/TI_Cold_LD1/Mechanical_Ti_COLD_FH_LD1.mp4\"</script>";
$_SESSION['speech'] = "Here this metal forming simulation is depicting upsetting process. Upsetting is a process in which metal is plastically deformed and it is an open die forging process. This process is extensively used for shaping over sized billets by compressing them. In this Finite Element Simulation video, one can see upsetting process simulation for Titanium. Here, one can observe that forging process requires two dies - one bottom and one upper die. Bottom die is rigid and it is not moving, on the other hand, upper die is moving in downward direction. 
One could observe in this simulation that only one fourth part of the upsetting process is shown here. This is because upsetting process is axis symmetric, so therefore only one part of the process is simulated for the sake of saving completion time.  The initial temperature of Billet is 25<sup>o</sup>C. The change in temperature is depicted by the colour code shown on the left hand side of the video  & final temperature of the billet is 316.71<sup>o</sup>C.
Here the cold upsetting process for Titanium billet is shown. The length by diameter or L by D ratio of billet is 1 and the friction involved in the upsetting process is high. The reduction produced after forging is 50% & the press used is mechanical press.
The graph on the right side shows the evolution of the Forging Force with pilot height of the punch. Maximum forging force required here is  319.02 tonnes.";
}
elseif($fr=="0" && $ld=="1.5" && $mat=="Titanium" && $temp=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Mech_Upsetting/TI_Cold_LD1P5/Mechanical_Ti_COLD_F0_LD1P5.mp4\"</script>";
$_SESSION['speech'] = "Here this metal forming simulation is depicting upsetting process.  Upsetting is a process in which metal is plastically deformed and it is an open die forging process. This process is extensively used for shaping over sized billets by compressing them. In this Finite Element Simulation video, one can see upsetting process simulation for Titanium. Here, one can observe that forging process requires two dies - one bottom and one upper die. Bottom die is rigid and it is not moving, on the other hand , upper die is moving in downward direction. 
One could observe in this simulation that only one fourth part of the upsetting process is shown here. This is because upsetting process is axis symmetric, so therefore only one part of the process is simulated for the sake of saving completion time. The initial temperature of Billet is 25<sup>o</sup>C. The change in temperature is depicted by the colour code shown on the left hand side of the video  & final temperature of the billet is 136.16<sup>o</sup>C.
Here the cold upsetting process for Titanium billet is shown. The length by diameter or L by D ratio of billet is 1.5 and the friction involved in the upsetting process is zero. The reduction produced after forging is 50% & the press used is mechanical press.
The graph on the right side shows the evolution of the Forging Force with pilot height of the punch. Maximum forging force required here is  211.09 tonnes.";
}
elseif($fr=="Medium" && $ld=="1.5" && $mat=="Titanium" && $temp=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Mech_Upsetting/TI_Cold_LD1P5/Mechanical_Ti_COLD_FM_LD1P5.mp4\"</script>";
$_SESSION['speech'] = "Here this metal forming simulation is depicting upsetting process. Upsetting is a process in which metal is plastically deformed and it is an open die forging process. This process is extensively used for shaping over sized billets by compressing them. In this Finite Element Simulation video, one can see upsetting process simulation for Titanium. Here, one can observe that forging process requires two dies - one bottom and one upper die. Bottom die is rigid and it is not moving, on the other hand , upper die is moving in downward direction. 
One could observe in this simulation that only one fourth part of the upsetting process is shown here. This is because upsetting process is axis symmetric, so therefore only one part of the process is simulated for the sake of saving completion time. The initial temperature of Billet is 25<sup>o</sup>C. The change in temperature is depicted by the colour code shown on the left hand side of the video  & final temperature of the billet is 137.83<sup>o</sup>C. 
Here the cold upsetting process for Titanium billet is shown. The length by diameter or L by D ratio of billet is 1.5 and the friction involved in the upsetting process is medium. The reduction produced after forging is 50% & the press used is mechanical press.
The graph on the right side shows the evolution of the Forging Force with pilot height of the punch. Maximum forging force required here is  214.12 tonnes.";
}
elseif($fr=="High" && $ld=="1.5" && $mat=="Titanium" && $temp=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Mech_Upsetting/TI_Cold_LD1P5/Mechanical_Ti_COLD_FH_LD1P5.mp4\"</script>";
$_SESSION['speech'] = "Here this metal forming simulation is depicting upsetting process. Upsetting is a process in which metal is plastically deformed and it is an open die forging process. This process is extensively used for shaping over sized billets by compressing them. In this Finite Element Simulation video, one can see upsetting process simulation for Titanium. Here, one can observe that forging process requires two dies - one bottom and one upper die. Bottom die is rigid and it is not moving, on the other hand, upper die is moving in downward direction. 
One could observe in this simulation that only one fourth part of the upsetting process is shown here. This is because upsetting process is axis symmetric, so therefore only one part of the process is simulated for the sake of saving completion time. The initial temperature of Billet is 25<sup>o</sup>C. The change in temperature is depicted by the colour code shown on the left hand side of the video  & final temperature of the billet is 166.21<sup>o</sup>C. 
Here the cold upsetting process for Titanium billet is shown. The length by diameter or L by D ratio of billet is 1.5 and the friction involved in the upsetting process is high. The reduction produced after forging is 50% & the press used is mechanical press.
The graph on the right side shows the evolution of the Forging Force with pilot height of the punch. Maximum forging force required here is  213.9 tonnes.";
}
elseif($fr=="0" && $ld=="2" && $mat=="Titanium" && $temp=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Mech_Upsetting/TI_Cold_LD2/Mechanical_Ti_COLD_F0_LD2.mp4\"</script>";
$_SESSION['speech'] = "Here this metal forming simulation is depicting upsetting process. Upsetting is a process in which metal is plastically deformed and it is an open die forging process. This process is extensively used for shaping over sized billets by compressing them. In this Finite Element Simulation video, one can see upsetting process simulation for Titanium. Here, one can observe that forging process requires two dies - one bottom and one upper die. Bottom die is rigid and it is not moving, on the other hand , upper die is moving in downward direction. 
One could observe in this simulation that only one fourth part of the upsetting process is shown here. This is because upsetting process is axis symmetric, so therefore only one part of the process is simulated for the sake of saving completion time. The initial temperature of Billet is 25<sup>o</sup>C. The change in temperature is depicted by the colour code shown on the left hand side of the video  & final temperature of the billet is 99.82<sup>o</sup>C.
Here the cold upsetting process for Titanium billet is shown. The length by diameter or L by D ratio of billet is 2 and the friction involved in the upsetting process is zero. The reduction produced after forging is 50% & the press used is mechanical press.
The graph on the right side shows the evolution of the Forging Force with pilot height of the punch. Maximum forging force required here is  181.97 tonnes.";
}
elseif($fr=="Medium" && $ld=="2" && $mat=="Titanium" && $temp=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Mech_Upsetting/TI_Cold_LD2/Mechanical_Ti_COLD_FM_LD2.mp4\"</script>";
$_SESSION['speech'] = "Here this metal forming simulation is depicting upsetting process. Upsetting is a process in which metal is plastically deformed and it is an open die forging process. This process is extensively used for shaping over sized billets by compressing them. In this Finite Element Simulation video, one can see upsetting process simulation for Titanium. Here, one can observe that forging process requires two dies - one bottom and one upper die. Bottom die is rigid and it is not moving, on the other hand , upper die is moving in downward direction. 
One could observe in this simulation that only one fourth part of the upsetting process is shown here. This is because upsetting process is axis symmetric, so therefore only one part of the process is simulated for the sake of saving completion time. The initial temperature of Billet is 25<sup>o</sup>C. The change in temperature is depicted by the colour code shown on the left hand side of the video  & final temperature of the billet is 109.51<sup>o</sup>C. 
Here the cold upsetting process for Titanium billet is shown. The length by diameter or L by D ratio of billet is 2 and the friction involved in the upsetting process is medium. The reduction produced after forging is 50% & the press used is mechanical press.
The graph on the right side shows the evolution of the Forging Force with pilot height of the punch. Maximum forging force required here is  183.78 tonnes.";
}
elseif($fr=="High" && $ld=="2" && $mat=="Titanium" && $temp=="Cold"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Mech_Upsetting/TI_Cold_LD2/Mechanical_Ti_COLD_FH_LD2.mp4\"</script>";
$_SESSION['speech'] = "Here this metal forming simulation is depicting upsetting process. Upsetting is a process in which metal is plastically deformed and it is an open die forging process. This process is extensively used for shaping over sized billets by compressing them. In this Finite Element Simulation video, one can see upsetting process simulation for Titanium. Here, one can observe that forging process requires two dies - one bottom and one upper die. Bottom die is rigid and it is not moving, on the other hand , upper die is moving in downward direction. 
One could observe in this simulation that only one fourth part of the upsetting process is shown here. This is because upsetting process is axis symmetric, so therefore only one part of the process is simulated for the sake of saving completion time. The initial temperature of Billet is 25<sup>o</sup>C. The change in temperature is depicted by the colour code shown on the left hand side of the video  & final temperature of the billet is 115.50<sup>o</sup>C. 
Here the cold upsetting process for Titanium billet is shown. The length by diameter or L by D ratio of billet is 2 and the friction involved in the upsetting process is high. The reduction produced after forging is 50% & the press used is mechanical press.
The graph on the right side shows the evolution of the Forging Force with pilot height of the punch. Maximum forging force required here is  185.38 tonnes.";
}
elseif($fr=="0" && $ld=="1" && $mat=="Titanium" && $temp=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Mech_Upsetting/TI_Hot_LD1/Mechanical_Ti_HOT_F0_LD1.mp4\"</script>";
$_SESSION['speech'] = "Here this metal forming simulation is depicting upsetting process. Upsetting is a process in which metal is plastically deformed and it is an open die forging process. This process is extensively used for shaping over sized billets by compressing them. In this Finite Element Simulation video, one can see upsetting process simulation for Titanium. Here, one can observe that forging process requires two dies - one bottom and one upper die. bottom die is rigid and it is not moving, on the other hand , upper die is moving in downward direction. 
One could observe in this simulation that only one fourth part of the upsetting process is shown here. This is because upsetting process is axis symmetric, so therefore only one part of the process is simulated for the sake of saving completion time. The initial temperature of Billet is 300<sup>o</sup>C. The change in temperature is depicted by the colour code shown on the left hand side of the video  & final temperature of the billet is 619.73<sup>o</sup>C. 
Here the hot upsetting process for Titanium billet is shown. The length by diameter or L by D ratio of billet is 1 and the friction involved in the upsetting process is zero. The reduction produced after forging is 50% & the press used is mechanical press.
The graph on the right side shows the evolution of the Forging Force with pilot height of the punch. Maximum forging force required here is  630.29 tonnes.";
}
elseif($fr=="Medium" && $ld=="1" && $mat=="Titanium" && $temp=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Mech_Upsetting/TI_Hot_LD1/Mechanical_Ti_HOT_FM_LD1.mp4\"</script>";
$_SESSION['speech'] = "Here this metal forming simulation is depicting upsetting process. Upsetting is a process in which metal is plastically deformed and it is an open die forging process. This process is extensively used for shaping over sized billets by compressing them. In this Finite Element Simulation video, one can see upsetting process simulation for Titanium. Here, one can observe that forging process requires two dies - one bottom and one upper die. Bottom die is rigid and it is not moving, on the other hand , upper die is moving in downward direction. 
One could observe in this simulation that only one fourth part of the upsetting process is shown here. This is because upsetting process is axis symmetric, so therefore only one part of the process is simulated for the sake of saving completion time. The initial temperature of Billet is 300<sup>o</sup>C. The change in temperature is depicted by the colour code shown on the left hand side of the video  & final temperature of the billet is 690.12<sup>o</sup>C. 
Here the hot upsetting process for Titanium billet is shown. The length by diameter or L by D ratio of billet is 1 and the friction involved in the upsetting process is medium. The reduction produced after forging is 50% & the press used is mechanical press.
The graph on the right side shows the evolution of the Forging Force with pilot height of the punch. Maximum forging force required here is  639.88 tonnes.";
}
elseif($fr=="High" && $ld=="1" && $mat=="Titanium" && $temp=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Mech_Upsetting/TI_Hot_LD1/Mechanical_Ti_HOT_FH_LD1.mp4\"</script>";
$_SESSION['speech'] = "Here this metal forming simulation is depicting upsetting process. Upsetting is a process in which metal is plastically deformed and it is an open die forging process. This process is extensively used for shaping over sized billets by compressing them. In this Finite Element Simulation video, one can see upsetting process simulation for Titanium. Here, one can observe that forging process requires two dies - one bottom and one upper die. Bottom die is rigid and it is not moving, on the other hand , upper die is moving in downward direction. 
One could observe in this simulation that only one fourth part of the upsetting process is shown here. This is because upsetting process is axis symmetric, so therefore only one part of the process is simulated for the sake of saving completion time. The initial temperature of Billet is 300<sup>o</sup>C. The change in temperature is depicted by the colour code shown on the left hand side of the video  & final temperature of the billet is 580.25<sup>o</sup>C. 
Here the hot upsetting process for Titanium billet is shown. The length by diameter or L by D ratio of billet is 1 and the friction involved in the upsetting process is high. The reduction produced after forging is 50% & the press used is mechanical press.
The graph on the right side shows the evolution of the Forging Force with pilot height of the punch. Maximum forging force required here is  442.64 tonnes.";
}
elseif($fr=="0" && $ld=="1.5" && $mat=="Titanium" && $temp=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Mech_Upsetting/TI_Hot_LD1P5/Mechanical_Ti_HOT_F0_LD1P5.mp4\"</script>";
$_SESSION['speech'] = "Here this metal forming simulation is depicting upsetting process. Upsetting is a process in which metal is plastically deformed and it is an open die forging process. This process is extensively used for shaping over sized billets by compressing them. In this Finite Element Simulation video, one can see upsetting process simulation for Titanium. Here, one can observe that forging process requires two dies - one bottom and one upper die. Bottom die is rigid and it is not moving, on the other hand , upper die is moving in downward direction. 
One could observe in this simulation that only one fourth part of the upsetting process is shown here. This is because upsetting process is axis symmetric, so therefore only one part of the process is simulated for the sake of saving completion time. The initial temperature of Billet is 300<sup>o</sup>C. The change in temperature is depicted by the colour code shown on the left hand side of the video  & final temperature of the billet is 541.26<sup>o</sup>C. 
Here the hot upsetting process for Titanium billet is shown. The length by diameter or L by D ratio of billet is 1.5 and the friction involved in the upsetting process is zero. The reduction produced after forging is 50% & the press used is mechanical press.
The graph on the right side shows the evolution of the Forging Force with pilot height of the punch. Maximum forging force required here is  588.9 tonnes.";
}
elseif($fr=="Medium" && $ld=="1.5" && $mat=="Titanium" && $temp=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Mech_Upsetting/TI_Hot_LD1P5/Mechanical_Ti_HOT_FM_LD1P5.mp4\"</script>";
$_SESSION['speech'] = "Here this metal forming simulation is depicting upsetting process. Upsetting is a process in which metal is plastically deformed and it is an open die forging process. This process is extensively used for shaping over sized billets by compressing them. In this Finite Element Simulation video, one can see upsetting process simulation for Titanium. Here, one can observe that forging process requires two dies - one bottom and one upper die. Bottom die is rigid and it is not moving, on the other hand, upper die is moving in downward direction. 
One could observe in this simulation that only one fourth part of the upsetting process is shown here. This is because upsetting process is axis symmetric, so therefore only one part of the process is simulated for the sake of saving completion time. The initial temperature of Billet is 300 <sup>o</sup>C. The change in temperature is depicted by the colour code shown on the left hand side of the video  & final temperature of the billet is 620.22<sup>o</sup>C. 
Here the hot upsetting process for Titanium billet is shown. The length by diameter or L by D ratio of billet is 1.5 and the friction involved in the upsetting process is medium. The reduction produced after forging is 50% & the press used is mechanical press.
The graph on the right side shows the evolution of the Forging Force with pilot height of the punch. Maximum forging force required here is  594.62 tonnes.";
}
elseif($fr=="High" && $ld=="1.5" && $mat=="Titanium" && $temp=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Mech_Upsetting/TI_Hot_LD1P5/Mechanical_Ti_HOT_FH_LD1P5.mp4\"</script>";
$_SESSION['speech'] = "Here this metal forming simulation is depicting upsetting process. Upsetting is a process in which metal is plastically deformed and it is an open die forging process. This process is extensively used for shaping over sized billets by compressing them. In this Finite Element Simulation video, one can see upsetting process simulation for Titanium. Here, one can observe that forging process requires two dies - one bottom and one upper die. Bottom die is rigid and it is not moving, on the other hand , upper die is moving in downward direction. 
One could observe in this simulation that only one fourth part of the upsetting process is shown here. This is because upsetting process is axis symmetric, so therefore only one part of the process is simulated for the sake of saving completion time. The initial temperature of Billet is 300<sup>o</sup>C. The change in temperature is depicted by the colour code shown on the left hand side of the video  & final temperature of the billet is 654.402<sup>o</sup>C. 
Here the hot upsetting process for Titanium billet is shown. The length by diameter or L by D ratio of billet is 1.5 and the friction involved in the upsetting process is high. The reduction produced after forging is 50% & the press used is mechanical press.
The graph on the right side shows the evolution of the Forging Force with pilot height of the punch. Maximum forging force required here is  605.43 tonnes.";
}
elseif($fr=="0" && $ld=="2" && $mat=="Titanium" && $temp=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Mech_Upsetting/TI_Hot_LD2/Mechanical_Ti_HOT_F0_LD2.mp4\"</script>";
$_SESSION['speech'] = "Here this metal forming simulation is depicting upsetting process. Upsetting is a process in which metal is plastically deformed and it is an open die forging process. This process is extensively used for shaping over sized billets by compressing them. In this Finite Element Simulation video, one can see upsetting process simulation for Titanium. Here, one can observe that forging process requires two dies - one bottom and one upper die. Bottom die is rigid and it is not moving, on the other hand , upper die is moving in downward direction. 
One could observe in this simulation that only one fourth part of the upsetting process is shown here. This is because upsetting process is axis symmetric, so therefore only one part of the process is simulated for the sake of saving completion time. The initial temperature of Billet is 300<sup>o</sup>C. The change in temperature is depicted by the colour code shown on the left hand side of the video  & final temperature of the billet is 495.28<sup>o</sup>C. 
Here the hot upsetting process for Titanium billet is shown. The length by diameter or L by D ratio of billet is 2 and the friction involved in the upsetting process is zero. The reduction produced after forging is 50% & the press used is mechanical press.
The graph on the right side shows the evolution of the Forging Force with pilot height of the punch. Maximum forging force required here is  562.45 tonnes.";
}
elseif($fr=="Medium" && $ld=="2" && $mat=="Titanium" && $temp=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Mech_Upsetting/TI_Hot_LD2/Mechanical_Ti_HOT_FM_LD2.mp4\"</script>";
$_SESSION['speech'] = "Here this metal forming simulation is depicting upsetting process. Upsetting is a process in which metal is plastically deformed and it is an open die forging process. This process is extensively used for shaping over sized billets by compressing them. In this Finite Element Simulation video, one can see upsetting process simulation for Titanium. Here, one can observe that forging process requires two dies - one bottom and one upper die. Bottom die is rigid and it is not moving, on the other hand , upper die is moving in downward direction. 
One could observe in this simulation that only one fourth part of the upsetting process is shown here. This is because upsetting process is axis symmetric, so therefore only one part of the process is simulated for the sake of saving completion time. The initial temperature of Billet is 300<sup>o</sup>C. The change in temperature is depicted by the colour code shown on the left hand side of the video  & final temperature of the billet is 559.40<sup>o</sup>C. 
Here the hot upsetting process for Titanium billet is shown. the length by diameter or L by D ratio of billet is 2 and the friction involved in the upsetting process is medium. The reduction produced after forging is 50% & the press used is mechanical press.
The graph on the right side shows the evolution of the Forging Force with pilot height of the punch. Maximum forging force required here is  566.54 tonnes.";
}
elseif($fr=="High" && $ld=="2" && $mat=="Titanium" && $temp=="Hot"){
echo "<script>window.location=\"Upset_Experiment.php?UPSETTING/Mech_Upsetting/TI_Hot_LD2/Mechanical_Ti_HOT_FH_LD2.mp4\"</script>";
$_SESSION['speech'] = "Here this metal forming simulation is depicting upsetting process. Upsetting is a process in which metal is plastically deformed and it is an open die forging process. This process is extensively used for shaping over sized billets by compressing them. In this Finite Element Simulation video, one can see upsetting process simulation for Titanium. Here, one can observe that forging process requires two dies - one bottom and one upper die. Bottom die is rigid and it is not moving, on the other hand , upper die is moving in downward direction. 
One could observe in this simulation that only one fourth part of the upsetting process is shown here. This is because upsetting process is axis symmetric, so therefore only one part of the process is simulated for the sake of saving completion time. The initial temperature of Billet is 300<sup>o</sup>C. The change in temperature is depicted by the colour code shown on the left hand side of the video  & final temperature of the billet is  589.11<sup>o</sup>C. 
Here the hot upsetting process for Titanium billet is shown. the length by diameter or L by D ratio of billet is 2 and the friction involved in the upsetting process is high. The reduction produced after forging is 50% & the press used is mechanical press.
The graph on the right side shows the evolution of the Forging Force with pilot height of the punch. Maximum forging force required here is  574.11 tonnes.";
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