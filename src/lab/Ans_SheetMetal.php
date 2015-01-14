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
	<li><a href="SheetMetal.php">Sheet Metal</a></li>
	<li class="dir"><a href="#">Bending Operations</a>
	<ul>
	<li class="dir"><a href="#">Bending Operations to reduce springback</a>
	<ul>
	<li><a href="SheetMetal_Experiment.php?SHEETMETAL/Bending/Bending1.mp4">V-Shape Punch</a></li>
	<li><a href="SheetMetal_Experiment.php?SHEETMETAL/Bending/Bending2.mp4">U-Shape Punch</a></li>
	<li><a href="SheetMetal_Experiment.php?SHEETMETAL/Bending/Bending4.mp4">V-Shape Punch & Curve</a></li>
	</ul>
	</li>
	<li><a href="SheetMetal_Experiment.php?SHEETMETAL/Bending/Bending3.mp4">Bending operation to remove springback</a></li>
	<li class="dir"><a href="#">Common Die Bending</a>
	<ul>
	<li><a href="SheetMetal_Experiment.php?SHEETMETAL/Bending/Bending5.mp4">V-Bending</a></li>
	<li><a href="SheetMetal_Experiment.php?SHEETMETAL/Bending/Bending8.mp4">Circular Bending</a></li>
	</ul> 
	</li>
	<li><a href="SheetMetal_Experiment.php?SHEETMETAL/Bending/Bending6.mp4">Wipe Die Bending</a></li>
	<li><a href="SheetMetal_Experiment.php?SHEETMETAL/Bending/Bending7.mp4">Air Bending</a></li>
	</ul> 
	</li>
	<li class="dir"><a href="#">Applications</a>
	<ul>
	<li class="dir"><a href="#">Corrugated Sheet</a>
	<ul>
	<li><a href="SheetMetal_Experiment.php?SHEETMETAL/CorrugatedSheet/CorrugatedSetup.mp4">Corrugated sheet</a></li>
	<li><a href="SheetMetal_Experiment.php?SHEETMETAL/CorrugatedSheet/CorrugatedCurve.mp4">Corrugated sheet with forging force</a></li>
	<li><a href="SheetMetal_Experiment.php?SHEETMETAL/CorrugatedSheet/CircularSheet.mp4">Circular corrugated sheet</a></li>
	<li><a href="SheetMetal_Experiment.php?SHEETMETAL/CorrugatedSheet/ConicalSheet.mp4">Conical corrugated sheet</a></li>	
	<li><a href="SheetMetal_Experiment.php?SHEETMETAL/CorrugatedSheet/ContinuousSheet.mp4">Continuous corrugated sheet</a></li>	
	<li><a href="SheetMetal_Experiment.php?SHEETMETAL/CorrugatedSheet/DiscreteSheet.mp4">Discrete corrugated sheet</a></li>	
	</ul>
	</li>
	<li class="dir"><a href="#">Bead Forming</a>
	<ul>
	<li><a href="SheetMetal_Experiment.php?SHEETMETAL/Beading/BeadingRodSetup.mp4">Bead forming of rod</a></li>	
	<li><a href="SheetMetal_Experiment.php?SHEETMETAL/Beading/BeadingRodStrain.mp4">Bead forming of rod with strain</a></li>
	<li><a href="SheetMetal_Experiment.php?SHEETMETAL/Beading/BeadingRodCurve.mp4">Bead forming of rod with curve</a></li>
	<li><a href="SheetMetal_Experiment.php?SHEETMETAL/Beading/BeadingStripSetup.mp4">Bead forming of sheet</a></li>
	<li><a href="SheetMetal_Experiment.php?SHEETMETAL/Beading/BeadingStripStrain.mp4">Bead forming of sheet with strain</a></li>
	<li><a href="SheetMetal_Experiment.php?SHEETMETAL/Beading/BeadingStripCurve.mp4">Bead forming of sheet with curve</a></li>
	</ul>
	</li>
	<li class="dir"><a href="#">Deep Drawing</a>
	<ul>
	<li><a href="SheetMetal_Experiment.php?SHEETMETAL/Drawing1.mp4">Deep drawing-Downward</a></li>
	<li><a href="SheetMetal_Experiment.php?SHEETMETAL/Drawing2.mp4">Deep drawing-Upward</a></li>
	</ul> 
	</li>
	<li class="dir"><a href="#">Roll Forming</a>
	<ul>
	<li><a href="SheetMetal_Experiment.php?SHEETMETAL/RollForming.mp4">Roll forming</a></li>
	<li><a href="SheetMetal_Experiment.php?SHEETMETAL/CurveRoll.mp4">Roll forming with curve</a></li>
	</ul> 
	</li>
	<li><a href="SheetMetal_Experiment.php?SHEETMETAL/RollBending.mp4">Roll Bending</a></li>
	<li class="dir"><a href="#">Piercing</a>
	<ul>
	<li><a href="SheetMetal_Experiment.php?SHEETMETAL/Piercing/PiercingProcess.mp4">Piercing process</a></li>
	<li><a href="SheetMetal_Experiment.php?SHEETMETAL/Piercing/PiercingSetup.mp4">Piercing Setup</a></li>
	<li><a href="SheetMetal_Experiment.php?SHEETMETAL/Piercing/PiercingStrain.mp4">Piercing with strain</a></li>
	<li><a href="SheetMetal_Experiment.php?SHEETMETAL/Piercing/PiercingCurve.mp4">Piercing with forging force</a></li>
	</ul> 
	</li>
	<li class="dir"><a href="#">Bush</a>
	<ul>
	<li><a href="SheetMetal_Experiment.php?SHEETMETAL/Bush/FormingBush.mp4">Bush Forming</a></li>
	<li><a href="SheetMetal_Experiment.php?SHEETMETAL/Bush/FormingCurveBush.mp4">Bush Forming with curve</a></li>
	<li><a href="SheetMetal_Experiment.php?SHEETMETAL/Bush/InitialBush.mp4">Bush step-1</a></li>
	<li><a href="SheetMetal_Experiment.php?SHEETMETAL/Bush/InitialCurveBush.mp4">Bush step-1 with curve</a></li>
	<li><a href="SheetMetal_Experiment.php?SHEETMETAL/Bush/MiddleBush.mp4">Bush step-2</a></li>
	<li><a href="SheetMetal_Experiment.php?SHEETMETAL/Bush/MiddleCurveBush.mp4">Bush step-2 with curve</a></li>
	<li><a href="SheetMetal_Experiment.php?SHEETMETAL/Bush/NextBush.mp4">Bush step-3</a></li>
	<li><a href="SheetMetal_Experiment.php?SHEETMETAL/Bush/NextCurveBush.mp4">Bush step-3 with curve</a></li>
	<li><a href="SheetMetal_Experiment.php?SHEETMETAL/Bush/FinalBush.mp4">Final Bush</a></li>
	</ul>
	</li>
	<li class="dir"><a href="#">Punching</a>
	<ul>
	<li><a href="SheetMetal_Experiment.php?SHEETMETAL/PunchingOperation.mp4">Punching Operation</a></li>
	<li><a href="SheetMetal_Experiment.php?SHEETMETAL/PunchingContour.mp4">Punching with Contour</a></li>
	<li><a href="SheetMetal_Experiment.php?SHEETMETAL/PunchingGraph.mp4">Punching with Graph</a></li>
	</ul>
	</li>
	<li><a href="SheetMetal_Experiment.php?SHEETMETAL/Coining.mp4">Coining</a></li>
	<li><a href="SheetMetal_Experiment.php?SHEETMETAL/DoorHandle.mp4">Door Handle</a></li>
	<li><a href="SheetMetal_Experiment.php?SHEETMETAL/CoverPlate.mp4">Cover Plate</a></li>
	</ul>
	</li>
	<li><a href="MCQ_SheetMetal.php">Self Check Quiz</a></li>
EOQ;
	$answers = $_SESSION['answer'];
	$Curr_answers = array('Die','Lancing','Gauge','Compound die','Maximum load that can be applied to the workpiece',
	'Two or more operations at different stations of the press','Thickness of the sheet metal','Neutral axis/line',
	'Blanking','Slitting','Metal','Aluminium','6 mm','Air Bending','No','Only bending','Rods of any shape',
	'Anticlockwise, Clockwise, Anticlockwise','All of the above','Only feeding the rod');
?>
</ul></div>
<div style="background-image:url(images/content_bg.jpg); position: relative; margin:auto; width: 1024px; min-height:550px;">
<div style="padding-left:35px; padding-right:40px;">
<center><u style="font-size:1.7em; font-weight:bold; color:#ff0000; padding-top:10px;">RESULT SHEET</u><br><br>
<table border=2 cellspacing=5 cellpadding=5>
<tr><th>Question No.</th><th>Your Answers</th><th>Correct Answers</th></tr>
<?php 
	$score=0;
	for($i=0;$i<20;$i++) {
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