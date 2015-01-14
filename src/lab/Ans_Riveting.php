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
th{
font-family:Arial;
font-size:1.8em;
color:#FF00FF;
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
<div id="header_main">
<img src="images/header_01.jpg"></div>
<div id="header">
<ul class="dropdown dropdown-horizontal">
<?php
echo <<<EOQ
	<li><a href="home.php">Home</a></li>
	<li><a href="Riveting.php">Riveting</a></li>	
	<li class="dir"><a href="#">Simulations</a>
	<ul>	
	<li><a href="RivetingSimulation.php?Riveting/RivetingProcess.mp4">Riveting process</a></li>
	<li class="dir"><a href="#">Rivet Forming</a>
	<ul>
	<li><a href="RivetingSimulation.php?Riveting/RivetForming.mp4">Rivet forming</a></li>
	<li><a href="RivetingSimulation.php?Riveting/RivetStrainForming.mp4">Rivet forming with strain</a></li>
	<li><a href="RivetingSimulation.php?Riveting/RivetCurveForming.mp4">Rivet forming with forging force</a></li>
	</ul>
	</li>
	<li class="dir"><a href="#">Split riveting</a>
	<ul>
	<li><a href="RivetingSimulation.php?Riveting/RivetingSplit.mp4">Split Riveting</a></li>
	<li><a href="RivetingSimulation.php?Riveting/SplitRiveting_Kinematics.mp4">Split Riveting - Initial Kinematics</a></li>
	<li><a href="RivetingSimulation.php?Riveting/SplitRiveting_CutSection.mp4">Split Riveting Cut-Section</a></li>
	</ul>
	</li>
	<li class="dir"><a href="#">Flat Riveting</a>
	<ul>
	<li><a href="RivetingSimulation.php?Riveting/FlatRiveting.mp4">Flat Riveting</a></li>
	<li><a href="RivetingSimulation.php?Riveting/FlatStrainRiveting.mp4">Flat Riveting with Strain</a></li>
	<li><a href="RivetingSimulation.php?Riveting/FlatCurveRiveting.mp4">Flat Riveting with Graph</a></li>
	</ul>
	</li>
	</ul>
	</li>
	<li><a href="MCQ_Riveting.php">Self Check Quiz</a></li>
EOQ;
	$answers = $_SESSION['answer'];
	$Curr_answers = array('Split rivet','Simplicity, dependability and low cost','Proper size of rivets','Boiler drains, pressure vessels, gas tanks',
	'Bending','X-ray','Rivet joint','Tapered','Chemical means','Using rollers');
?>
</ul></div>
<div style="background-image:url(images/content_bg.jpg); position: relative; margin:auto; width: 1024px; min-height:550px;">
<div style="padding-left:35px;">
<center><u style="font-size:1.7em; font-weight:bold; color:#ff0000; padding-top:10px;">RESULT SHEET</u><br><br>
<table border=2 cellspacing=5 cellpadding=5>
<tr><th>Question No.</th><th>Your Answers</th><th>Correct Answers</th></tr>
<?php 
	$score=0;
	for($i=0;$i<10;$i++) {
		if($answers[$i]==$Curr_answers[$i]){
		$score++;
		}
	    if($answers[$i] != '')
		{
		$var =$i+1;
?>
<tr>
<td><center> <?php echo($var); ?></center></td>
<td> <?php echo $answers[$i];?></td>
<td> <?php echo $Curr_answers[$i];?></td>
</tr>
<?php } } ?>
</table><br><br>
<u style="font-size:1.3em; color:#0000FF; font-weight:bold;">Your Score</u>
&nbsp;=&nbsp;<b style="font-size:1.4em; color:#FF0000;"><?php echo $score ?></b>&nbsp;&nbsp;&nbsp;
<a href="javascript: window.print()"><abbr title="Print">
<img src="images/Print.jpg"></abbr>&nbsp;<u style="font-size:1.2em; color:#FF0000; font-weight:bold;">Print</u></a>
</center>
</div></div>
<div id="footer">
&copy; Metal Forming Virtual Simulation Lab - Dayalbagh Educational Institute (www.dei.ac.in)
</div>	
</body>
</html>