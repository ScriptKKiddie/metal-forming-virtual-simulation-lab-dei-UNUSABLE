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
	<li><a href="rct.php">Ring Compression Test</a></li>
	<li><a href="RCT_Bench.php">Simulation Bench</a></li>
	<li><a href="MCQ_RingCS.php">Self Check Quiz</a></li>
EOQ;
?>
</ul></div>
<div style="background-image:url(images/content_bg.jpg);position: relative; margin:auto; width: 1024px; min-height:600px;">
<br><center><u style="font-size:2em; color:#ff00ff;">Interactive Bench of Simulations for Ring Compression Test</u>

<FORM METHOD="post" onSubmit="return valid(this)" action="RCT_Bench.php">
<table border="0" cellpadding="2" cellspacing="20">

<tr><td><h1>Materials</h1></td><td>:</td><td><input type="radio" name="mat" value="Aluminium"><b>Aluminium</b></td>
<td><input type="radio" name="mat" value="Steel"><b>Steel</b></td></tr>

<tr><td><h1>Coefficient of Friction</h1></td><td>:</td><td><input type="radio" name="fr" value="0"><b>0.00</b></td>
<td><input type="radio" name="fr" value="0.05"><b>0.05</b></td>
<td><input type="radio" name="fr" value="0.1"><b>0.10</b></td>
<td><input type="radio" name="fr" value="0.15"><b>0.15</b></td>
<td><input type="radio" name="fr" value="0.2"><b>0.20</b></td></tr>

<tr><td></td><td></td><td><input type="radio" name="fr" value="0.25"><b>0.25</b></td>
<td><input type="radio" name="fr" value="0.3"><b>0.30</b></td>
<td><input type="radio" name="fr" value="0.35"><b>0.35</b></td>
<td><input type="radio" name="fr" value="0.4"><b>0.40</b></td>
<td><input type="radio" name="fr" value="0.45"><b>0.45</b></td></tr>

<tr><td></td><td></td><td><input type="radio" name="fr" value="0.5"><b>0.50</b></td>
<td><input type="radio" name="fr" value="0.55"><b>0.55</b></td>
<td><input type="radio" name="fr" value="0.6"><b>0.60</b></td>
<td><input type="radio" name="fr" value="0.65"><b>0.65</b></td>
<td><input type="radio" name="fr" value="0.7"><b>0.70</b></td></tr>

<tr><td></td><td></td><td><input type="radio" name="fr" value="0.75"><b>0.75</b></td>
<td><input type="radio" name="fr" value="0.8"><b>0.80</b></td>
<td><input type="radio" name="fr" value="0.85"><b>0.85</b></td>
<td><input type="radio" name="fr" value="0.9"><b>0.90</b></td>
<td><input type="radio" name="fr" value="0.95"><b>0.95</b></td></tr>

<tr><td></td><td></td><td><input type="radio" name="fr" value="1"><b>1.00</b></td></tr>

<tr><td><h1>Velocity of Ram/ Speed</h1></td><td>:</td><td><input type="radio" name="speed" value=1><b>1 mm/sec</b></td>
<td><input type="radio" name="speed" value=5><b>5 mm/sec</b></td></tr>

<tr><td><h1>Material/ Workpiece Temperature</h1></td><td>:</td><td><input type="radio" name="temp" value="Cold"><b>Cold</b></td>
<td><input type="radio" name="temp" value="Hot"><b>Hot</b></td></tr>
</table>

<center><input type="submit" name="send" value="Submit">
<input type="button" name="reset_form" value="Reset Form" onclick="this.form.reset();"></center>
</FORM></center>
<?php
$Mat = $_REQUEST["mat"];
$Fr = $_REQUEST["fr"];
$Velo = $_REQUEST["speed"];
$Temp = $_REQUEST["temp"];

if(isset($_POST["send"])){
if($Fr=="0" && $Velo==1 && $Mat=="Aluminium" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Cold_Velocity1/Ring_Compression_COLD_AL_v1_mu_tresca_f0.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0 and initial outer diameter to inner diameter to height ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1mm/s and forging is done cold. 
On the top right side, simulation results show the final inner diameter as 42.01 mm with decrease in inner diameter by 40.06% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The equivalent strain generated during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.05" && $Velo==1 && $Mat=="Aluminium" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Cold_Velocity1/Ring_Compression_COLD_AL_v1_mu_tresca_0p05.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0.05 and initial outer diameter to inner diameter to height ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1mm/s and forging is done cold. 
On the top right side, simulation results show the final inner diameter as 38.16 mm with decrease in inner diameter by 27.2% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The equivalent strain generated during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.1" && $Velo==1 && $Mat=="Aluminium" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Cold_Velocity1/Ring_Compression_COLD_AL_v1_mu_tresca_0p1.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0.10 and initial outer diameter to inner diameter to height ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1mm/s and forging is done cold. 
On the top right side, simulation results show the final inner diameter as 34.6125mm with decrease in inner diameter by 15.3750% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The equivalent strains generated during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.15" && $Velo==1 && $Mat=="Aluminium" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Cold_Velocity1/Ring_Compression_COLD_AL_v1_mu_tresca_0p15.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0.15 and initial outer diameter to inner diameter to height ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1mm/s and forging is done cold. 
On the top right side, simulation results show the final inner diameter as 31.6 mm with decrease in inner diameter by 5.45% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature developed during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.2" && $Velo==1 && $Mat=="Aluminium" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Cold_Velocity1/Ring_Compression_COLD_AL_v1_mu_tresca_0p2.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0.20 and initial outer diameter to inner diameter to height ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1mm/s and forging is done cold. 
On the top right side, simulation results show the final inner diameter as 29.83 mm with decrease in inner diameter by 0.56% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature generated during the process can be compared with the help of the scale given on the left side. ";
}
elseif($Fr=="0.25" && $Velo==1 && $Mat=="Aluminium" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Cold_Velocity1/Ring_Compression_COLD_AL_v1_mu_tresca_0p25.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0.25 and initial outer diameter to inner diameter to height ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1mm/s and forging is done cold. 
On the top right side, simulation results show the Final Inner Diameter as 27.67 mm with decrease in inner diameter by 7.78% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The equivalent strain generated during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.3" && $Velo==1 && $Mat=="Aluminium" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Cold_Velocity1/Ring_Compression_COLD_AL_v1_mu_tresca_0p3.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0.30 and initial outer diameter to inner diameter to height ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1mm/s and forging is done cold. 
On the top right side, simulation results show the Final Inner Diameter as 26.12 mm with decrease in inner diameter by 12.92% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The equivalent strain generated during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.35" && $Velo==1 && $Mat=="Aluminium" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Cold_Velocity1/Ring_Compression_COLD_AL_v1_mu_tresca_0p35.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0.35 and initial outer diameter to inner diameter to height ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1mm/s and forging is done cold. 
On the top right side, simulation results show the final inner diameter as 24.6 mm with decrease in inner diameter by 17.92% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature developed during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.4" && $Velo==1 && $Mat=="Aluminium" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Cold_Velocity1/Ring_Compression_COLD_AL_v1_mu_tresca_0p4.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0.40 and initial outer diameter to inner diameter to height ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1mm/s and forging is done cold. 
On the top right side, simulation results show the Final Inner Diameter as 23.40 mm with decrease in inner diameter by 21.98% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature developed during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.45" && $Velo==1 && $Mat=="Aluminium" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Cold_Velocity1/Ring_Compression_COLD_AL_v1_mu_tresca_0p45.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0.45 and initial outer diameter to inner diameter to height ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1mm/s and forging is done cold. 
On the top right side, simulation results show the final inner Diameter as 22.22 mm with decrease in inner diameter by 25.92% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The equivalent strain generated during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.5" && $Velo==1 && $Mat=="Aluminium" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Cold_Velocity1/Ring_Compression_COLD_AL_v1_mu_tresca_0p5.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0.5 and initial outer diameter to inner diameter to height ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1mm/s and forging is done cold. 
On the top right side, simulation results show the final inner diameter as 21.25 mm with decrease in inner diameter by 29.17% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The equivalent strain generated during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.55" && $Velo==1 && $Mat=="Aluminium" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Cold_Velocity1/Ring_Compression_COLD_AL_v1_mu_tresca_0p55.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0.55 and initial outer diameter to inner diameter to height ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1mm/s and forging is done cold. 
On the top right side, simulation results show the final inner diameter as 20.32 mm with decrease in inner diameter by 32.32% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature developed during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.6" && $Velo==1 && $Mat=="Aluminium" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Cold_Velocity1/Ring_Compression_COLD_AL_v1_mu_tresca_0p6.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0.6 and initial outer diameter to inner diameter to height ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1mm/s and forging is done cold. 
On the top right side, simulation results show the final inner diameter as 19.74 mm with decrease in inner diameter by 34.2% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The equivalent strain generated during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.65" && $Velo==1 && $Mat=="Aluminium" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Cold_Velocity1/Ring_Compression_COLD_AL_v1_mu_tresca_0p65.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0.65 and initial outer diameter to inner diameter to height ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1mm/s and forging is done cold. 
On the top right side, simulation results show the final inner diameter as 18.98 mm with decrease in inner diameter by 36.70% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The equivalent strain generated during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.7" && $Velo==1 && $Mat=="Aluminium" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Cold_Velocity1/Ring_Compression_COLD_AL_v1_mu_tresca_0p7.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0.7 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1mm/s and forging is done cold. 
On the top right side, simulation results show the Final Inner Diameter as 18.27 mm with decrease in Inner Diameter by 39.09% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature developed during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.75" && $Velo==1 && $Mat=="Aluminium" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Cold_Velocity1/Ring_Compression_COLD_AL_v1_mu_tresca_0p75.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0.75 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1mm/s and forging is done cold. 
On the top right side, simulation results show the Final Inner Diameter as 17.5 mm with decrease in Inner Diameter by 41.67% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature developed during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.8" && $Velo==1 && $Mat=="Aluminium" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Cold_Velocity1/Ring_Compression_COLD_AL_v1_mu_tresca_0p8.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0.8 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1mm/s and forging is done cold. 
On the top right side, simulation results show the Final Inner Diameter as 17.26 mm with decrease in Inner Diameter by 42.46% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The equivalent strain generated during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.85" && $Velo==1 && $Mat=="Aluminium" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Cold_Velocity1/Ring_Compression_COLD_AL_v1_mu_tresca_0p85.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0.85 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1mm/s and forging is done cold. 
On the top right side, simulation results show the Final Inner Diameter as 16.95 mm with decrease in Inner Diameter by 43.5% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The equivalent strain generated during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.9" && $Velo==1 && $Mat=="Aluminium" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Cold_Velocity1/Ring_Compression_COLD_AL_v1_mu_tresca_0p9.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0.9 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1mm/s and forging is done cold. 
On the top right side, simulation results show the Final Inner Diameter as 16.4 mm with decrease in Inner Diameter by 45.4% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature developed during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.95" && $Velo==1 && $Mat=="Aluminium" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Cold_Velocity1/Ring_Compression_COLD_AL_v1_mu_tresca_0p95.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0.95 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1mm/s and forging is done cold. 
On the top right side, simulation results show the Final Inner Diameter as 16.33 mm with decrease in Inner Diameter by 45.6% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature developed during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="1" && $Velo==1 && $Mat=="Aluminium" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Cold_Velocity1/Ring_Compression_COLD_AL_v1_mu_tresca_1.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 1.0 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1mm/s and forging is done cold. 
On the top right side, simulation results show the Final Inner Diameter as 15.7 mm with decrease in Inner Diameter by 47.70% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature developed during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0" && $Velo==5 && $Mat=="Aluminium" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Cold_Velocity5/Ring_Compression_COLD_AL_v5_mu_tresca_f0.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5 mm/s and forging is done cold. 
On the top right side, simulation results show the Final Inner Diameter as 42.01 mm with decrease in Inner Diameter by 40.05% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The equivalent strain generated during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.05" && $Velo==5 && $Mat=="Aluminium" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Cold_Velocity5/Ring_Compression_COLD_AL_v5_mu_tresca_0p05.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0.05 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5 mm/s and forging is done cold. 
On the top right side, simulation results show the Final Inner Diameter as 38.16 mm with decrease in Inner Diameter by 27.2% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature developed during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.1" && $Velo==5 && $Mat=="Aluminium" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Cold_Velocity5/Ring_Compression_COLD_AL_v5_mu_tresca_0p1.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0.10 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5 mm/s and forging is done cold. 
On the top right side, simulation results show the Final Inner Diameter as 34.7 mm with decrease in Inner Diameter by 15.66% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The equivalent strain generated during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.15" && $Velo==5 && $Mat=="Aluminium" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Cold_Velocity5/Ring_Compression_COLD_AL_v5_mu_tresca_0p15.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0.15 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5 mm/s and forging is done cold. 
On the top right side, simulation results show the Final Inner Diameter as 31.63 mm with decrease in Inner Diameter by -5.46% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The equivalent strain generated during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.2" && $Velo==5 && $Mat=="Aluminium" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Cold_Velocity5/Ring_Compression_COLD_AL_v5_mu_tresca_0p2.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0.20 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5 mm/s and forging is done cold. 
On the top right side, simulation results show the Final Inner Diameter as 29.45 mm with decrease in Inner Diameter by 3.06% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature developed during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.25" && $Velo==5 && $Mat=="Aluminium" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Cold_Velocity5/Ring_Compression_COLD_AL_v5_mu_tresca_0p25.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0.25 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5 mm/s and forging is done cold. 
On the top right side, simulation results show the Final Inner Diameter as 27.62 mm with decrease in Inner Diameter by 7.94% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature developed during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.3" && $Velo==5 && $Mat=="Aluminium" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Cold_Velocity5/Ring_Compression_COLD_AL_v5_mu_tresca_0p3.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0.30 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5 mm/s and forging is done cold. 
On the top right side, simulation results show the Final Inner Diameter as 26.08 mm with decrease in Inner Diameter by 13.06% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The equivalent strain generated during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.35" && $Velo==5 && $Mat=="Aluminium" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Cold_Velocity5/Ring_Compression_COLD_AL_v5_mu_tresca_0p35.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0.35 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5 mm/s and forging is done cold. 
On the top right side, simulation results show the Final Inner Diameter as 24.68 mm with decrease in Inner Diameter by 17.74% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature developed during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.4" && $Velo==5 && $Mat=="Aluminium" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Cold_Velocity5/Ring_Compression_COLD_AL_v5_mu_tresca_0p4.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0.40 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5 mm/s and forging is done cold. 
On the top right side, simulation results show the Final Inner Diameter as 23.4 mm with decrease in Inner Diameter by 22% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The equivalent strain generated during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.45" && $Velo==5 && $Mat=="Aluminium" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Cold_Velocity5/Ring_Compression_COLD_AL_v5_mu_tresca_0p45.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0.45 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5 mm/s and forging is done cold. 
On the top right side, simulation results show the Final Inner Diameter as 22.22 mm with decrease in Inner Diameter by 25.92% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature developed during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.5" && $Velo==5 && $Mat=="Aluminium" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Cold_Velocity5/Ring_Compression_COLD_AL_v5_mu_tresca_0p5.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0.5 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5 mm/s and forging is done cold. 
On the top right side, simulation results show the Final Inner Diameter as 21.12 mm with decrease in Inner Diameter by 29.61% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature developed during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.55" && $Velo==5 && $Mat=="Aluminium" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Cold_Velocity5/Ring_Compression_COLD_AL_v5_mu_tresca_0p55.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0.55 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5 mm/s and forging is done cold. 
On the top right side, simulation results show the Final Inner Diameter as 20.23 mm with decrease in Inner Diameter by 32.55% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature developed during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.6" && $Velo==5 && $Mat=="Aluminium" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Cold_Velocity5/Ring_Compression_COLD_AL_v5_mu_tresca_0p6.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0.6 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5 mm/s and forging is done cold. 
On the top right side, simulation results show the Final Inner Diameter as 19.61 mm with decrease in Inner Diameter by 34.63% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature developed during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.65" && $Velo==5 && $Mat=="Aluminium" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Cold_Velocity5/Ring_Compression_COLD_AL_v5_mu_tresca_0p65.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0.65 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5 mm/s and forging is done cold. 
On the top right side, simulation results show the Final Inner Diameter as 18.95 mm with decrease in Inner Diameter by 36.84% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature developed during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.7" && $Velo==5 && $Mat=="Aluminium" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Cold_Velocity5/Ring_Compression_COLD_AL_v5_mu_tresca_0p7.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0.7 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5 mm/s and forging is done cold. 
On the top right side, simulation results show the Final Inner Diameter as 18.40 mm with decrease in Inner Diameter by 38.65% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature developed during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.75" && $Velo==5 && $Mat=="Aluminium" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Cold_Velocity5/Ring_Compression_COLD_AL_v5_mu_tresca_0p75.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0.75 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5 mm/s and forging is done cold. 
On the top right side, simulation results show the Final Inner Diameter as 17.62 mm with decrease in Inner Diameter by 41.28% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The equivalent strain generated during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.8" && $Velo==5 && $Mat=="Aluminium" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Cold_Velocity5/Ring_Compression_COLD_AL_v5_mu_tresca_0p8.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0.8 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5 mm/s and forging is done cold. 
On the top right side, simulation results show the Final Inner Diameter as 17.12 mm with decrease in Inner Diameter by 43% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The equivalent strain generated during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.85" && $Velo==5 && $Mat=="Aluminium" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Cold_Velocity5/Ring_Compression_COLD_AL_v5_mu_tresca_0p85.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0.85 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5 mm/s and forging is done cold. 
On the top right side, simulation results show the Final Inner Diameter as 17.02 mm with decrease in Inner Diameter by 43.27% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature developed during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.9" && $Velo==5 && $Mat=="Aluminium" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Cold_Velocity5/Ring_Compression_COLD_AL_v5_mu_tresca_0p9.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0.9 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5 mm/s and forging is done cold. 
On the top right side, simulation results show the Final Inner Diameter as 15.9 mm with decrease in Inner Diameter by 46.7% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature developed during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.95" && $Velo==5 && $Mat=="Aluminium" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Cold_Velocity5/Ring_Compression_COLD_AL_v5_mu_tresca_0p95.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0.95 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5 mm/s and forging is done cold. 
On the top right side, simulation results show the Final Inner Diameter as 16.45 mm with decrease in Inner Diameter by 45.18% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The equivalent strain generated during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="1" && $Velo==5 && $Mat=="Aluminium" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Cold_Velocity5/Ring_Compression_COLD_AL_v5_mu_tresca_1.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 1.0 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5 mm/s and forging is done cold. 
On the top right side, simulation results show the Final Inner Diameter as 15.85 mm with decrease in Inner Diameter by 47.16 % on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature developed during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0" && $Velo==1 && $Mat=="Aluminium" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Hot_Velocity1/Ring_Compression_HOT_AL_v1_f0.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1 mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 42 mm with decrease in Inner Diameter by -40.3% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature evolved during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.05" && $Velo==1 && $Mat=="Aluminium" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Hot_Velocity1/Ring_Compression_HOT_AL_v1_ftresca_0p05.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0.05 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1 mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 38.17 mm with decrease in Inner Diameter by -27.24 % on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature evolved during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.1" && $Velo==1 && $Mat=="Aluminium" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Hot_Velocity1/Ring_Compression_HOT_AL_v1_ftresca_0p1.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0.1 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1 mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 34.5 mm with decrease in Inner Diameter by -15.1% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature evolved during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.15" && $Velo==1 && $Mat=="Aluminium" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Hot_Velocity1/Ring_Compression_HOT_AL_v1_ftresca_0p15.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0.15 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1 mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 31.50 mm with decrease in Inner Diameter by -5 % on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The equivalent strain generated during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.2" && $Velo==1 && $Mat=="Aluminium" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Hot_Velocity1/Ring_Compression_HOT_AL_v1_ftresca_0p2.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0.2 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1 mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 29.3 mm with decrease in Inner Diameter by 2.32% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature evolved during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.25" && $Velo==1 && $Mat=="Aluminium" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Hot_Velocity1/Ring_Compression_HOT_AL_v1_ftresca_0p25.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0.25 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1 mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 27.4 mm with decrease in Inner Diameter by 8.625 % on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The equivalent strain generated during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.3" && $Velo==1 && $Mat=="Aluminium" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Hot_Velocity1/Ring_Compression_HOT_AL_v1_ftresca_0p3.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0.3 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1 mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 25.8 mm with decrease in Inner Diameter by 14% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature evolved during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.35" && $Velo==1 && $Mat=="Aluminium" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Hot_Velocity1/Ring_Compression_HOT_AL_v1_ftresca_0p35.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0.35 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1 mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 24.2 mm with decrease in Inner Diameter by 19.26 % on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The equivalent strain generated during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.4" && $Velo==1 && $Mat=="Aluminium" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Hot_Velocity1/Ring_Compression_HOT_AL_v1_ftresca_0p4.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0.4 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1 mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 22.66 mm with decrease in Inner Diameter by 24.46% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature evolved during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.45" && $Velo==1 && $Mat=="Aluminium" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Hot_Velocity1/Ring_Compression_HOT_AL_v1_ftresca_0p45.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0.45 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1 mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 21.3 mm with decrease in Inner Diameter by 28.96 % on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The equivalent strain generated during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.5" && $Velo==1 && $Mat=="Aluminium" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Hot_Velocity1/Ring_Compression_HOT_AL_v1_ftresca_0p5.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0.5 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1 mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 20.20 mm with decrease in Inner Diameter by 32.66 % on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature evolved during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.55" && $Velo==1 && $Mat=="Aluminium" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Hot_Velocity1/Ring_Compression_HOT_AL_v1_ftresca_0p55.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0.55 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1 mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 19.26 mm with decrease in Inner Diameter by 35.8 % on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature evolved during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.6" && $Velo==1 && $Mat=="Aluminium" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Hot_Velocity1/Ring_Compression_HOT_AL_v1_ftresca_0p6.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0.6 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1 mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 18.57 mm with decrease in Inner Diameter by 38.09 % on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature evolved during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.65" && $Velo==1 && $Mat=="Aluminium" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Hot_Velocity1/Ring_Compression_HOT_AL_v1_ftresca_0p65.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0.65 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1 mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 17.7 mm with decrease in Inner Diameter by 41 % on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The equivalent strain generated during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.7" && $Velo==1 && $Mat=="Aluminium" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Hot_Velocity1/Ring_Compression_HOT_AL_v1_ftresca_0p7.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0.7 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1 mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 17.25 mm with decrease in Inner Diameter by 42.5 % on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature evolved during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.75" && $Velo==1 && $Mat=="Aluminium" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Hot_Velocity1/Ring_Compression_HOT_AL_v1_ftresca_0p75.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0.75 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1 mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 16.7 mm with decrease in Inner Diameter by 44.34 % on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The equivalent strain generated during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.8" && $Velo==1 && $Mat=="Aluminium" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Hot_Velocity1/Ring_Compression_HOT_AL_v1_ftresca_0p8.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0.8 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1 mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 16.02 mm with decrease in Inner Diameter by 46.6 % on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature evolved during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.85" && $Velo==1 && $Mat=="Aluminium" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Hot_Velocity1/Ring_Compression_HOT_AL_v1_ftresca_0p85.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0.85 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1 mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 15.4 mm with decrease in Inner Diameter by 48.65 % on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The equivalent strain generated during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.9" && $Velo==1 && $Mat=="Aluminium" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Hot_Velocity1/Ring_Compression_HOT_AL_v1_ftresca_0p9.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0.9 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1 mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 15.2  mm with decrease in Inner Diameter by 49.32 % on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature evolved during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.95" && $Velo==1 && $Mat=="Aluminium" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Hot_Velocity1/Ring_Compression_HOT_AL_v1_ftresca_0p95.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0.95 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1 mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 15.06 mm with decrease in Inner Diameter by 49.80 % on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The equivalent strain generated during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="1" && $Velo==1 && $Mat=="Aluminium" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Hot_Velocity1/Ring_Compression_HOT_AL_v1_ftresca_1.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 1. and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1 mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 14.33 mm with decrease in Inner Diameter by 52.23 % on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The equivalent strain generated during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0" && $Velo==5 && $Mat=="Aluminium" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Hot_Velocity5/Ring_Compression_HOT_AL_v5_f0.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5 mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 42 mm with decrease in Inner Diameter by -40.3% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature evolved during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.05" && $Velo==5 && $Mat=="Aluminium" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Hot_Velocity5/Ring_Compression_HOT_AL_v5_ftresca_0p05.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0.05 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5 mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 38.18 mm with decrease in Inner Diameter by -27.25 % on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature evolved during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.1" && $Velo==5 && $Mat=="Aluminium" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Hot_Velocity5/Ring_Compression_HOT_AL_v5_ftresca_0p1.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0.1 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5 mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 34.5 mm with decrease in Inner Diameter by -14.9% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature evolved during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.15" && $Velo==5 && $Mat=="Aluminium" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Hot_Velocity5/Ring_Compression_HOT_AL_v5_ftresca_0p15.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0.15 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5 mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 31.6 mm with decrease in Inner Diameter by -5.47% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The equivalent strain generated during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.2" && $Velo==5 && $Mat=="Aluminium" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Hot_Velocity5/Ring_Compression_HOT_AL_v5_ftresca_0p2.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0.2 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5 mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 29.2 mm with decrease in Inner Diameter by 2.7% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The equivalent strain generated during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.25" && $Velo==5 && $Mat=="Aluminium" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Hot_Velocity5/Ring_Compression_HOT_AL_v5_ftresca_0p25.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0.25 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5 mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 27.49 mm with decrease in Inner Diameter by 8.37 % on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature evolved during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.3" && $Velo==5 && $Mat=="Aluminium" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Hot_Velocity5/Ring_Compression_HOT_AL_v5_ftresca_0p3.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0.3 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5 mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 25.6 mm with decrease in Inner Diameter by 14.7 % on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The equivalent strain generated during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.35" && $Velo==5 && $Mat=="Aluminium" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Hot_Velocity5/Ring_Compression_HOT_AL_v5_ftresca_0p35.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0.35 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5 mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 24 mm with decrease in Inner Diameter by 19.96 % on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The equivalent strain generated during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.4" && $Velo==5 && $Mat=="Aluminium" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Hot_Velocity5/Ring_Compression_HOT_AL_v5_ftresca_0p4.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0.4 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5 mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 22.6 mm with decrease in Inner Diameter by 24.78 % on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The equivalent strain generated during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.45" && $Velo==5 && $Mat=="Aluminium" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Hot_Velocity5/Ring_Compression_HOT_AL_v5_ftresca_0p45.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0.45 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5 mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 21.3 mm with decrease in Inner Diameter by 29.04 % on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature evolved during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.5" && $Velo==5 && $Mat=="Aluminium" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Hot_Velocity5/Ring_Compression_HOT_AL_v5_ftresca_0p5.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0.5 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5 mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 20.33 mm with decrease in Inner Diameter by 32.24 % on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature evolved during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.55" && $Velo==5 && $Mat=="Aluminium" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Hot_Velocity5/Ring_Compression_HOT_AL_v5_ftresca_0p55.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0.55 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5 mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 19.2 mm with decrease in Inner Diameter by 36 % on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The equivalent strain generated during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.6" && $Velo==5 && $Mat=="Aluminium" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Hot_Velocity5/Ring_Compression_HOT_AL_v5_ftresca_0p6.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0.6 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5 mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 18.52 mm with decrease in Inner Diameter by 38.26 % on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The equivalent strain generated during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.65" && $Velo==5 && $Mat=="Aluminium" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Hot_Velocity5/Ring_Compression_HOT_AL_v5_ftresca_0p65.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0.65 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5 mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 17.9 mm with decrease in Inner Diameter by 40.32 % on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The equivalent strain generated during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.7" && $Velo==5 && $Mat=="Aluminium" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Hot_Velocity5/Ring_Compression_HOT_AL_v5_ftresca_0p7.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0.7 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5 mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 17.24 mm with decrease in Inner Diameter by 42.55 % on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature evolved during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.75" && $Velo==5 && $Mat=="Aluminium" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Hot_Velocity5/Ring_Compression_HOT_AL_v5_ftresca_0p75.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0.75 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5 mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 16.23 mm with decrease in Inner Diameter by 45.9 % on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The equivalent strain generated during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.8" && $Velo==5 && $Mat=="Aluminium" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Hot_Velocity5/Ring_Compression_HOT_AL_v5_ftresca_0p8.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0.8 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5 mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 16.23 mm with decrease in Inner Diameter by 45.9 % on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature evolved during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.85" && $Velo==5 && $Mat=="Aluminium" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Hot_Velocity5/Ring_Compression_HOT_AL_v5_ftresca_0p85.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0.85 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5 mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 14.89 mm with decrease in Inner Diameter by 50.3 % on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature evolved during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.9" && $Velo==5 && $Mat=="Aluminium" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Hot_Velocity5/Ring_Compression_HOT_AL_v5_ftresca_0p9.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0.9 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5 mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 15.14 mm with decrease in Inner Diameter by 49.5% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The equivalent strain generated during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.95" && $Velo==5 && $Mat=="Aluminium" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Hot_Velocity5/Ring_Compression_HOT_AL_v5_ftresca_0p95.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 0.95 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5 mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 14.89 mm with decrease in Inner Diameter by 50.4 % on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The equivalent strain generated during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="1" && $Velo==5 && $Mat=="Aluminium" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Al_Hot_Velocity5/Ring_Compression_HOT_AL_v5_ftresca_1.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Aluminium alloy with friction shear factor M as 1 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5 mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 14.42 mm with decrease in Inner Diameter by 52 % on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The equivalent strain generated during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0" && $Velo==1 && $Mat=="Steel" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Cold_Velocity1/Ring_Compression_COLD_Steel_CK_45_v1_mu_tresca_f0.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steel with friction shear factor M as 0 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1 mm/s and forging is done cold. 
On the top right side, simulation results show the Final Inner Diameter as 42.02 mm with decrease in Inner Diameter by -40 % on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature evolved during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.05" && $Velo==1 && $Mat=="Steel" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Cold_Velocity1/Ring_Compression_COLD_Steel_CK_45_v1_mu_tresca_0p05.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steel with friction shear factor M as 0.05 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1 mm/s and forging is done cold. 
On the top right side, simulation results show the Final Inner Diameter as 38.16 mm with decrease in Inner Diameter by -27.27% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The equivalent strain generated during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.1" && $Velo==1 && $Mat=="Steel" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Cold_Velocity1/Ring_Compression_COLD_Steel_CK_45_v1_mu_tresca_0p1.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steel with friction shear factor M as 0.1 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1 mm/s and forging is done cold. 
On the top right side, simulation results show the Final Inner Diameter as 34.6 mm with decrease in Inner Diameter by -15.4% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The equivalent strain developed during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.15" && $Velo==1 && $Mat=="Steel" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Cold_Velocity1/Ring_Compression_COLD_Steel_CK_45_v1_mu_tresca_0p15.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steel with friction shear factor M as 0.15 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1 mm/s and forging is done cold. 
On the top right side, simulation results show the Final Inner Diameter as 31.8 mm with decrease in Inner Diameter by -5.9 % on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature evolved during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.2" && $Velo==1 && $Mat=="Steel" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Cold_Velocity1/Ring_Compression_COLD_Steel_CK_45_v1_mu_tresca_0p2.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steel with friction shear factor M as 0.2 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1 mm/s and forging is done cold. 
On the top right side, simulation results show the Final Inner Diameter as 29.6 mm with decrease in Inner Diameter by 1.35% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The equivalent strain developed during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.25" && $Velo==1 && $Mat=="Steel" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Cold_Velocity1/Ring_Compression_COLD_Steel_CK_45_v1_mu_tresca_0p25.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steel with friction shear factor M as 0.25 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1 mm/s and forging is done cold. 
On the top right side, simulation results show the Final Inner Diameter as 27.9 mm with decrease in Inner Diameter by 6.9 % on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature evolved during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.3" && $Velo==1 && $Mat=="Steel" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Cold_Velocity1/Ring_Compression_COLD_Steel_CK_45_v1_mu_tresca_0p3.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steel with friction shear factor M as 0.3 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1 mm/s and forging is done cold. 
On the top right side, simulation results show the Final Inner Diameter as 26 mm with decrease in Inner Diameter by 13.44% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature evolved during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.35" && $Velo==1 && $Mat=="Steel" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Cold_Velocity1/Ring_Compression_COLD_Steel_CK_45_v1_mu_tresca_0p35.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steel with friction shear factor M as 0.35 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1 mm/s and forging is done cold. 
On the top right side, simulation results show the Final Inner Diameter as 24.5 mm with decrease in Inner Diameter by 18.3 % on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The equivalent strain generated during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.4" && $Velo==1 && $Mat=="Steel" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Cold_Velocity1/Ring_Compression_COLD_Steel_CK_45L_v1_mu_tresca_0p4.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steel with friction shear factor M as 0.4 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1 mm/s and forging is done cold. 
On the top right side, simulation results show the Final Inner Diameter as 23.2 mm with decrease in Inner Diameter by 22.6 % on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The equivalent strains generated during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.45" && $Velo==1 && $Mat=="Steel" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Cold_Velocity1/Ring_Compression_COLD_Steel_CK_45_v1_mu_tresca_0p45.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steel with friction shear factor M as 0.45 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1 mm/s and forging is done cold. 
On the top right side, simulation results show the Final Inner Diameter as 22.3 mm with decrease in Inner Diameter by 25.9 % on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The equivalent strain generated during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.5" && $Velo==1 && $Mat=="Steel" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Cold_Velocity1/Ring_Compression_COLD_Steel_CK_45_v1_mu_tresca_0p5.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steel with friction shear factor M as 0.5 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1 mm/s and forging is done cold. 
On the top right side, simulation results show the Final Inner Diameter as 21.3 mm with decrease in Inner Diameter by 29.1 % on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature evolved during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.55" && $Velo==1 && $Mat=="Steel" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Cold_Velocity1/Ring_Compression_COLD_Steel_CK_45_v1_mu_tresca_0p55.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steel with friction shear factor M as 0.55 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1 mm/s and forging is done cold. 
On the top right side, simulation results show the Final Inner Diameter as 20.5 mm with decrease in Inner Diameter by 31.7 % on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature evolved during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.6" && $Velo==1 && $Mat=="Steel" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Cold_Velocity1/Ring_Compression_COLD_Steel_CK_45_v1_mu_tresca_0p6.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steel with friction shear factor M as 0.6 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1 mm/s and forging is done cold. 
On the top right side, simulation results show the Final Inner Diameter as 19.42 mm with decrease in Inner Diameter by 35.26 % on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The equivalent strain generated during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.65" && $Velo==1 && $Mat=="Steel" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Cold_Velocity1/Ring_Compression_COLD_Steel_CK_45_v1_mu_tresca_0p65.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steel with friction shear factor M as 0.65 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1 mm/s and forging is done cold. 
On the top right side, simulation results show the Final Inner Diameter as 18.8 mm with decrease in Inner Diameter by 37.2 % on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The equivalent strain generated during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.7" && $Velo==1 && $Mat=="Steel" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Cold_Velocity1/Ring_Compression_COLD_Steel_CK_45_v1_mu_tresca_0p7.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steel with friction shear factor M as 0.7 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1 mm/s and forging is done cold. 
On the top right side, simulation results show the Final Inner Diameter as 18.1 mm with decrease in Inner Diameter by 39.6 % on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The equivalent strain generated during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.75" && $Velo==1 && $Mat=="Steel" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Cold_Velocity1/Ring_Compression_COLD_Steel_CK_45_v1_mu_tresca_0p75.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steel with friction shear factor M as 0.75 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1 mm/s and forging is done cold. 
On the top right side, simulation results show the Final Inner Diameter as 17.7 mm with decrease in Inner Diameter by 41.15 % on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature evolved during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.8" && $Velo==1 && $Mat=="Steel" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Cold_Velocity1/Ring_Compression_COLD_Steel_CK_45_v1_mu_tresca_0p8.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steel with friction shear factor M as 0.8 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1 mm/s and forging is done cold. 
On the top right side, simulation results show the Final Inner Diameter as 17.1 mm with decrease in Inner Diameter by 43 % on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature evolved during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.85" && $Velo==1 && $Mat=="Steel" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Cold_Velocity1/Ring_Compression_COLD_Steel_CK_45_v1_mu_tresca_0p85.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steel with friction shear factor M as 0.85 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1 mm/s and forging is done cold. 
On the top right side, simulation results show the Final Inner Diameter as 16.7 mm with decrease in Inner Diameter by 44.3 % on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature evolved during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.9" && $Velo==1 && $Mat=="Steel" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Cold_Velocity1/Ring_Compression_COLD_Steel_CK_45_v1_mu_tresca_0p9.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steel with friction shear factor M as 0.9 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1 mm/s and forging is done cold. 
On the top right side, simulation results show the Final Inner Diameter as 16.4 mm with decrease in Inner Diameter by 45.5 % on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The equivalent strain generated during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.95" && $Velo==1 && $Mat=="Steel" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Cold_Velocity1/Ring_Compression_COLD_Steel_CK_45_v1_mu_tresca_0p95.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steel with friction shear factor M as 0.95 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1 mm/s and forging is done cold. 
On the top right side, simulation results show the Final Inner Diameter as 16.1 mm with decrease in Inner Diameter by 46.4 % on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature evolved during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="1" && $Velo==1 && $Mat=="Steel" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Cold_Velocity1/Ring_Compression_COLD_Steel_CK_45_v1_mu_tresca_1.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process. The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steel with friction shear factor M as 1 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1 mm/s and forging is done cold. 
On the top right side, simulation results show the Final Inner Diameter as 15.2 mm with decrease in Inner Diameter by 49.5 % on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature evolved during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0" && $Velo==5 && $Mat=="Steel" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Cold_Velocity5/Ring_Compression_COLD_Steel_CK_45_v5_mu_tresca_f0.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process.The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steelwith friction shear factor M as 0and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5 mm/s and forging is done cold. 
On the top right side, simulation results show the Final Inner Diameter as 42.02 mm with decrease in Inner Diameter by -40.06% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature evolved during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.05" && $Velo==5 && $Mat=="Steel" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Cold_Velocity5/Ring_Compression_COLD_Steel_CK_45_v5_mu_tresca_0p05.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process.The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steelwith friction shear factor M as 0.05 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5 mm/s and forging is done cold. 
On the top right side, simulation results show the Final Inner Diameter as 38.14 mm with decrease in Inner Diameter by -27.14% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The equivalent strain generated during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.1" && $Velo==5 && $Mat=="Steel" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Cold_Velocity5/Ring_Compression_COLD_Steel_CK_45_v5_mu_tresca_0p1.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process.The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steelwith friction shear factor M as 0.10 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5 mm/s and forging is done cold. 
On the top right side, simulation results show the Final Inner Diameter as 34.7 mm with decrease in Inner Diameter by -15.5% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The equivalent strain generated during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.15" && $Velo==5 && $Mat=="Steel" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Cold_Velocity5/Ring_Compression_COLD_Steel_CK_45_v5_mu_tresca_0p15.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process.The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steelwith friction shear factor M as 0.15 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5 mm/s and forging is done cold. 
On the top right side, simulation results show the Final Inner Diameter as 31.6 mm with decrease in Inner Diameter by -5.3% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The equivalent strain generated during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.2" && $Velo==5 && $Mat=="Steel" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Cold_Velocity5/Ring_Compression_COLD_Steel_CK_45_v5_mu_tresca_0p2.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process.The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steelwith friction shear factor M as 0.20 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5 mm/s and forging is done cold. 
On the top right side, simulation results show the Final Inner Diameter as 29.6 mm with decrease in Inner Diameter by 1.33% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature evolved during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.25" && $Velo==5 && $Mat=="Steel" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Cold_Velocity5/Ring_Compression_COLD_Steel_CK_45_v5_mu_tresca_0p25.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process.The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steelwith friction shear factor M as 0.25 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5 mm/s and forging is done cold. 
On the top right side, simulation results show the Final Inner Diameter as 28 mm with decrease in Inner Diameter by 6.87% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The equivalent strain generated during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.3" && $Velo==5 && $Mat=="Steel" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Cold_Velocity5/Ring_Compression_COLD_Steel_CK_45_v5_mu_tresca_0p3.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process.The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steelwith friction shear factor M as 0.30 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5 mm/s and forging is done cold. 
On the top right side, simulation results show the Final Inner Diameter as 25.9 mm with decrease in Inner Diameter by 13.5% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature evolved during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.35" && $Velo==5 && $Mat=="Steel" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Cold_Velocity5/Ring_Compression_COLD_Steel_CK_45_v5_mu_tresca_0p35.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process.The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steelwith friction shear factor M as 0.35 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5 mm/s and forging is done cold. 
On the top right side, simulation results show the Final Inner Diameter as 24.7 mm with decrease in Inner Diameter by 17.85% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The equivalent strain generated during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.4" && $Velo==5 && $Mat=="Steel" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Cold_Velocity5/Ring_Compression_COLD_Steel_CK_45_v5_mu_tresca_0p4.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process.The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steelwith friction shear factor M as 0.40 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5 mm/s and forging is done cold. 
On the top right side, simulation results show the Final Inner Diameter as 23.33 mm with decrease in Inner Diameter by 22.24 % on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature evolved during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.45" && $Velo==5 && $Mat=="Steel" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Cold_Velocity5/Ring_Compression_COLD_Steel_CK_45_v5_mu_tresca_0p45.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process.The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steelwith friction shear factor M as 0.45 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5 mm/s and forging is done cold. 
On the top right side, simulation results show the Final Inner Diameter as 22.16 mm with decrease in Inner Diameter by 26.14% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature evolved during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.5" && $Velo==5 && $Mat=="Steel" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Cold_Velocity5/Ring_Compression_COLDSteel_CK_45_v5_mu_tresca_0p5.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process.The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steelwith friction shear factor M as 0.5and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5 mm/s and forging is done cold. 
On the top right side, simulation results show the Final Inner Diameter as 21.23 mm with decrease in Inner Diameter by 29.24% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature evolved during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.55" && $Velo==5 && $Mat=="Steel" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Cold_Velocity5/Ring_Compression_COLD_Steel_CK_45_v5_mu_tresca_0p55.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process.The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steelwith friction shear factor M as 0.55 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5 mm/s and forging is done cold. 
On the top right side, simulation results show the Final Inner Diameter as 20.3 mm with decrease in Inner Diameter by 32.2% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The equivalent strain generated during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.6" && $Velo==5 && $Mat=="Steel" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Cold_Velocity5/Ring_Compression_COLD_Steel_CK_45_v5_mu_tresca_0p6.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process.The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steelwith friction shear factor M as 0.6 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5 mm/s and forging is done cold. 
On the top right side, simulation results show the Final Inner Diameter as 19.4 mm with decrease in Inner Diameter by 35.3% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature evolved during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.65" && $Velo==5 && $Mat=="Steel" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Cold_Velocity5/Ring_Compression_COLD_Steel_CK_45_v5_mu_tresca_0p65.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process.The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steelwith friction shear factor M as 0.65 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5 mm/s and forging is done cold. 
On the top right side, simulation results show the Final Inner Diameter as 18.96 mm with decrease in Inner Diameter by 36.8% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The equivalent strain generated during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.7" && $Velo==5 && $Mat=="Steel" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Cold_Velocity5/Ring_Compression_COLD_Steel_CK_45_v5_mu_tresca_0p7.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process.The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steelwith friction shear factor M as 0.7 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5 mm/s and forging is done cold. 
On the top right side, simulation results show the Final Inner Diameter as 18.23 mm with decrease in Inner Diameter by 39.24% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature evolved during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.75" && $Velo==5 && $Mat=="Steel" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Cold_Velocity5/Ring_Compression_COLD_Steel_CK_45_v5_mu_tresca_0p75.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process.The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steelwith friction shear factor M as 0.75 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5 mm/s and forging is done cold. 
On the top right side, simulation results show the Final Inner Diameter as 17.8 mm with decrease in Inner Diameter by 40.5% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature evolved during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.8" && $Velo==5 && $Mat=="Steel" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Cold_Velocity5/Ring_Compression_COLDSteel_CK_45_v5_mu_tresca_0p8.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process.The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steelwith friction shear factor M as 0.8and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5 mm/s and forging is done cold. 
On the top right side, simulation results show the Final Inner Diameter as 16.87 mm with decrease in Inner Diameter by 43.77% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The equivalent strain generated during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.85" && $Velo==5 && $Mat=="Steel" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Cold_Velocity5/Ring_Compression_COLD_Steel_CK_45_v5_mu_tresca_0p85.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process.The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steelwith friction shear factor M as 0.85 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5 mm/s and forging is done cold. 
On the top right side, simulation results show the Final Inner Diameter as 16.9 mm with decrease in Inner Diameter by 43.8% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The equivalent strain generated during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.9" && $Velo==5 && $Mat=="Steel" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Cold_Velocity5/Ring_Compression_COLD_Steel_CK_45_v5_mu_tresca_0p9.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process.The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steelwith friction shear factor M as 0.9 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5 mm/s and forging is done cold. 
On the top right side, simulation results show the Final Inner Diameter as 16.15 mm with decrease in Inner Diameter by 46.18% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature evolved during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.95" && $Velo==5 && $Mat=="Steel" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Cold_Velocity5/Ring_Compression_COLD_Steel_CK_45_v5_mu_tresca_0p95.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process.The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steelwith friction shear factor M as 0.95 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5 mm/s and forging is done cold. 
On the top right side, simulation results show the Final Inner Diameter as 16.01 mm with decrease in Inner Diameter by 46.6% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The equivalent strain generated during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="1" && $Velo==5 && $Mat=="Steel" && $Temp=="Cold"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Cold_Velocity5/Ring_Compression_COLD_Steel_CK_45_v5_mu_tresca_1.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process.The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steelwith friction shear factor M as 1and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5 mm/s and forging is done cold. 
On the top right side, simulation results show the Final Inner Diameter as 15.76 mm with decrease in Inner Diameter by 47.5% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The equivalent strain generated during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0" && $Velo==1 && $Mat=="Steel" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Hot_Velocity1/Ring_Compression_HOT_C45_Steel_v1_f_tresca_0.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process.The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steelwith friction shear factor M as 0 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 42 mm with decrease in Inner Diameter by -40.3% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature evolved during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.05" && $Velo==1 && $Mat=="Steel" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Hot_Velocity1/Ring_Compression_HOT_C45_Steel_v1_f_tresca_0p05.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process.The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steelwith friction shear factor M as 0.05 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 38.3 mm with decrease in Inner Diameter by -27.5% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature evolved during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.1" && $Velo==1 && $Mat=="Steel" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Hot_Velocity1/Ring_Compression_HOT_C45_Steel_v1_f_tresca_0p1.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process.The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steelwith friction shear factor M as 0.1 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 34.7 mm with decrease in Inner Diameter by -15.8 % on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature evolved during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.15" && $Velo==1 && $Mat=="Steel" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Hot_Velocity1/Ring_Compression_HOT_C45_Steel_v1_f_tresca_0p15.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process.The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steelwith friction shear factor M as 0.15 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 31.9 mm with decrease in Inner Diameter by -6.2% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The equivalent strain generated during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.2" && $Velo==1 && $Mat=="Steel" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Hot_Velocity1/Ring_Compression_HOT_C45_Steel_v1_f_tresca_0p2.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process.The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steelwith friction shear factor M as 0.2 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 29.8 mm with decrease in Inner Diameter by 0.69% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature evolved during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.25" && $Velo==1 && $Mat=="Steel" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Hot_Velocity1/Ring_Compression_HOT_C45_Steel_v1_f_tresca_0p25.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process.The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steelwith friction shear factor M as 0.25 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 28 mm with decrease in Inner Diameter by 6.8% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The equivalent strain generated during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.3" && $Velo==1 && $Mat=="Steel" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Hot_Velocity1/Ring_Compression_HOT_C45_Steel_v1_f_tresca_0p3.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process.The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steelwith friction shear factor M as 0.3 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 26.2 mm with decrease in Inner Diameter by 12.53% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature evolved during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.35" && $Velo==1 && $Mat=="Steel" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Hot_Velocity1/Ring_Compression_HOT_C45_Steel_v1_f_tresca_0p35.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process.The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steelwith friction shear factor M as 0.35 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 25 mm with decrease in Inner Diameter by 16.9% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature evolved during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.4" && $Velo==1 && $Mat=="Steel" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Hot_Velocity1/Ring_Compression_HOT_C45_Steel_v1_f_tresca_0p4.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process.The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steelwith friction shear factor M as 0.4 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 24 mm with decrease in Inner Diameter by 20.4% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature evolved during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.45" && $Velo==1 && $Mat=="Steel" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Hot_Velocity1/Ring_Compression_HOT_C45_Steel_v1_f_tresca_0p45.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process.The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steelwith friction shear factor M as 0.45 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 22.6 mm with decrease in Inner Diameter by 24.6% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature evolved during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.5" && $Velo==1 && $Mat=="Steel" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Hot_Velocity1/Ring_Compression_HOT_C45_Steel_v1_f_tresca_0p5.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process.The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steelwith friction shear factor M as 0.5 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 21.66 mm with decrease in Inner Diameter by 27.8% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature evolved during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.55" && $Velo==1 && $Mat=="Steel" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Hot_Velocity1/Ring_Compression_HOT_C45_Steel_v1_f_tresca_0p55.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process.The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steelwith friction shear factor M as 0.55 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 20.8 mm with decrease in Inner Diameter by 30.7% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The equivalent strain generated during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.6" && $Velo==1 && $Mat=="Steel" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Hot_Velocity1/Ring_Compression_HOT_C45_Steel_v1_f_tresca_0p6.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process.The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steelwith friction shear factor M as 0.6 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 20 mm with decrease in Inner Diameter by 33.5% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature evolved during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.65" && $Velo==1 && $Mat=="Steel" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Hot_Velocity1/Ring_Compression_HOT_C45_Steel_v1_f_tresca_0p65.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process.The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steelwith friction shear factor M as 0.65 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 18.75 mm with decrease in Inner Diameter by 37.5% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The equivalent strain generated during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.7" && $Velo==1 && $Mat=="Steel" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Hot_Velocity1/Ring_Compression_HOT_C45_Steel_v1_f_tresca_0p7.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process.The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steelwith friction shear factor M as 0.7 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 18.2 mm with decrease in Inner Diameter by 39.3% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature evolved during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.75" && $Velo==1 && $Mat=="Steel" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Hot_Velocity1/Ring_Compression_HOT_C45_Steel_v1_f_tresca_0p75.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process.The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steelwith friction shear factor M as 0.75 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 17.3 mm with decrease in Inner Diameter by 42.3% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The equivalent strain generated during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.8" && $Velo==1 && $Mat=="Steel" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Hot_Velocity1/Ring_Compression_HOT_C45_Steel_v1_f_tresca_0p8.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process.The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steelwith friction shear factor M as 0.8 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 16.8 mm with decrease in Inner Diameter by 44.1 % on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature evolved during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.85" && $Velo==1 && $Mat=="Steel" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Hot_Velocity1/Ring_Compression_HOT_C45_Steel_v1_f_tresca_0p85.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process.The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steelwith friction shear factor M as 0.85 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 16.3 mm with decrease in Inner Diameter by 45.5% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The equivalent strain generated during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.9" && $Velo==1 && $Mat=="Steel" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Hot_Velocity1/Ring_Compression_HOT_C45_Steel_v1_f_tresca_0p9.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process.The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steelwith friction shear factor M as 0.9 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 16.3 mm with decrease in Inner Diameter by 45.6% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature evolved during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.95" && $Velo==1 && $Mat=="Steel" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Hot_Velocity1/Ring_Compression_HOT_C45_Steel_v1_f_tresca_0p95.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process.The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steelwith friction shear factor M as 0.95 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 15.5 mm with decrease in Inner Diameter by 48.2% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature evolved during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="1" && $Velo==1 && $Mat=="Steel" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Hot_Velocity1/Ring_Compression_HOT_C45_Steel_v1_f_tresca_1.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process.The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steelwith friction shear factor M as 1 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 1mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 15.3 mm with decrease in Inner Diameter by 49.1% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The equivalent strain generated during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0" && $Velo==5 && $Mat=="Steel" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Hot_Velocity5/Ring_Compression_HOT_C45_Steel_v5_f_tresca_0.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process.The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steelwith friction shear factor M as 0 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 42 mm with decrease in Inner Diameter by -40.3% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The equivalent strain generated during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.05" && $Velo==5 && $Mat=="Steel" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Hot_Velocity5/Ring_Compression_HOT_C45_Steel_v5_f_tresca_0p05.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process.The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steelwith friction shear factor M as 0.05 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 38.3 mm with decrease in Inner Diameter by -27.5% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature evolved during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.1" && $Velo==5 && $Mat=="Steel" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Hot_Velocity5/Ring_Compression_HOT_C45_Steel_v5_f_tresca_0p1.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process.The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steelwith friction shear factor M as 0.1 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 34.7 mm with decrease in Inner Diameter by -15.7 % on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The equivalent strain generated during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.15" && $Velo==5 && $Mat=="Steel" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Hot_Velocity5/Ring_Compression_HOT_C45_Steel_v5_f_tresca_0p15.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process.The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steelwith friction shear factor M as 0.15 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 32 mm with decrease in Inner Diameter by -6.5% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature evolved during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.2" && $Velo==5 && $Mat=="Steel" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Hot_Velocity5/Ring_Compression_HOT_C45_Steel_v5_f_tresca_0p2.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process.The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steelwith friction shear factor M as 0.2 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 29.9 mm with decrease in Inner Diameter by 0.48% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature evolved during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.25" && $Velo==5 && $Mat=="Steel" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Hot_Velocity5/Ring_Compression_HOT_C45_Steel_v5_f_tresca_0p25.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process.The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steelwith friction shear factor M as 0.25 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 27.9 mm with decrease in Inner Diameter by 7.14% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature evolved during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.3" && $Velo==5 && $Mat=="Steel" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Hot_Velocity5/Ring_Compression_HOT_C45_Steel_v5_f_tresca_0p3.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process.The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steelwith friction shear factor M as 0.3 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 26.3 mm with decrease in Inner Diameter by 12.2% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature evolved during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.35" && $Velo==5 && $Mat=="Steel" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Hot_Velocity5/Ring_Compression_HOT_C45_Steel_v5_f_tresca_0p35.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process.The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steelwith friction shear factor M as 0.35 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 24.9 mm with decrease in Inner Diameter by 17% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature evolved during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.4" && $Velo==5 && $Mat=="Steel" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Hot_Velocity5/Ring_Compression_HOT_C45_Steel_v5_f_tresca_0p4.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process.The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steelwith friction shear factor M as 0.4 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 23.9 mm with decrease in Inner Diameter by 20.35% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature evolved during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.45" && $Velo==5 && $Mat=="Steel" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Hot_Velocity5/Ring_Compression_HOT_C45_Steel_v5_f_tresca_0p45.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process.The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steelwith friction shear factor M as 0.45 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 22.6 mm with decrease in Inner Diameter by 24.6 % on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature evolved during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.5" && $Velo==5 && $Mat=="Steel" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Hot_Velocity5/Ring_Compression_HOT_C45_Steel_v5_f_tresca_0p5.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process.The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steelwith friction shear factor M as 0.5 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 21.5 mm with decrease in Inner Diameter by 28.2% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature evolved during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.55" && $Velo==5 && $Mat=="Steel" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Hot_Velocity5/Ring_Compression_HOT_C45_Steel_v5_f_tresca_0p55.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process.The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steelwith friction shear factor M as 0.55 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 20.8 mm with decrease in Inner Diameter by 30.7% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature evolved during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.6" && $Velo==5 && $Mat=="Steel" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Hot_Velocity5/Ring_Compression_HOT_C45_Steel_v5_f_tresca_0p6.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process.The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steelwith friction shear factor M as 0.6 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 19.8 mm with decrease in Inner Diameter by 33.9% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature evolved during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.65" && $Velo==5 && $Mat=="Steel" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Hot_Velocity5/Ring_Compression_HOT_C45_Steel_v5_f_tresca_0p65.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process.The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steelwith friction shear factor M as 0.65 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 19 mm with decrease in Inner Diameter by 37% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature evolved during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.7" && $Velo==5 && $Mat=="Steel" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Hot_Velocity5/Ring_Compression_HOT_C45_Steel_v5_f_tresca_0p7.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process.The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steelwith friction shear factor M as 0.7 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 18.1 mm with decrease in Inner Diameter by 39.7% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature evolved during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.75" && $Velo==5 && $Mat=="Steel" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Hot_Velocity5/Ring_Compression_HOT_C45_Steel_v5_f_tresca_0p75.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process.The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steelwith friction shear factor M as 0.75 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 17.3 mm with decrease in Inner Diameter by 42.4% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The equivalent strain generated during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.8" && $Velo==5 && $Mat=="Steel" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Hot_Velocity5/Ring_Compression_HOT_C45_Steel_v5_f_tresca_0p8.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process.The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steelwith friction shear factor M as 0.8 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 16.7 mm with decrease in Inner Diameter by 44.4% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature evolved during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.85" && $Velo==5 && $Mat=="Steel" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Hot_Velocity5/Ring_Compression_HOT_C45_Steel_v5_f_tresca_0p85.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process.The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steelwith friction shear factor M as 0.85 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 16.1 mm with decrease in Inner Diameter by 46.2% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The equivalent strain generated during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.9" && $Velo==5 && $Mat=="Steel" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Hot_Velocity5/Ring_Compression_HOT_C45_Steel_v5_f_tresca_0p9.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process.The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steelwith friction shear factor M as 0.9 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 16 mm with decrease in Inner Diameter by 46.5 % on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature evolved during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="0.95" && $Velo==5 && $Mat=="Steel" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Hot_Velocity5/Ring_Compression_HOT_C45_Steel_v5_f_tresca_0p95.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process.The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steelwith friction shear factor M as 0.95 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 15.3 mm with decrease in Inner Diameter by 48.8% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The temperature evolved during the process can be compared with the help of the scale given on the left side.";
}
elseif($Fr=="1" && $Velo==5 && $Mat=="Steel" && $Temp=="Hot"){
echo "<script>window.location=\"Ring_Experiment.php?RCT/Steel_Hot_Velocity5/Ring_Compression_HOT_C45_Steel_v5_f_tresca_1.mp4\"</script> ";
$_SESSION['speech'] = "Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process.The video shows that a short ring specimen is plastically compressed between two flat dies with lower die stationary and upper die movable. 
On the top left corner in the video, one can observe the simulation conditions. The specimen material is Steelwith friction shear factor M as 1 and initial Outer Diameter to Inner Diameter to Height Ratio as 60 is to 30 is to 20. The press used is hydraulic press with ram speed 5mm/s and forging is done hot. 
On the top right side, simulation results show the Final Inner Diameter as 15.4 mm with decrease in Inner Diameter by 48.8% on 50% reduction in height. At the bottom, the graph between force on upper die vs pilot height is shown. The equivalent strain generated during the process can be compared with the help of the scale given on the left side.";
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