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
	<li><a href="Hammer_Forging.php">Hammer</a></li>
	<li class="dir"><a href="#">Hammer Forging</a>
		<ul>
			<li><a href="Hammer_Experiment.php?UPSETTING/Hammer_Forging/HammerForging1.mp4">Quarter section & Force curve</a></li>
			<li><a href="Hammer_Experiment.php?UPSETTING/Hammer_Forging/HammerForging2.mp4">Half section & Equivalent strain</a></li>
		</ul>
	</li>
	<li><a href="MCQ_Hammer.php">Self Check Quiz</a></li>
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
if(stristr($value,HammerForging1))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
In this video, one could observe the initial billet being deformed by hammer press. The process of upsetting is not done in a single step but in multiple steps using the same hammer press. On the right side, one could view the forging force on the upper die in different steps. 
On the left side, the process of deformation can be seen with a scale describing about the equivalent strains being generated in the billet during hammer forging process. In the final step the billet takes up the shape of the dies.
</td></tr></table>
<?php
}elseif(stristr($value,HammerForging2))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
In this video, one could observe the initial billet being deformed by hammer press. The process of upsetting is not done in a single step but in multiple steps using the same hammer press. On the right side, one could view the billet being deformed in several steps with equivalent strain 
generated in each step described by the coloured scale. On the left side, the process of deformation can be seen with a scale describing about the equivalent strains being generated in the billet during hammer forging process. In the final step the billet takes up the shape of the dies.
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