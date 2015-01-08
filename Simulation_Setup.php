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
include("mainmenu.php");
?>
</ul></div>
<div style="background-image:url(images/content_bg.jpg);position: relative; margin:auto; width: 1024px; min-height:550px;">
<div class="box">
<h2>Simulation of Upsetting Process</h2><br>
<span class="blue">PURPOSE</span><br /> The purpose of upsetting is to reduce the height of a billet while increasing its diameter.  Thus, the desired material distribution, the desired geometry and size 
are achieved. In hot forging, upsetting is also used to break scale from the surface of a heated billet. In cold, warm and hot forging the upset billet is usually used for subsequent forging operations<br />
<br/>The following pages represent some typical forming simulations as well as a typical upset forging process in a hydraulic press.<br/>A clear understanding of the metal forming process is important to interpret the simulation results. 
Therefore a few variables and a graph of the simulation stages will be presented to clarify the overall forming process.<br /><br /> <span class="blue">A TYPICAL UPSET FORGING PROCESS WITH FINITE ELEMENT SIMULATION</span><br><br>
<table><tr><td>Material</td><td>: Aluminium</td></tr>
<tr><td>Dimension </td><td>:  Height =100 mm,&nbsp;&nbsp;&nbsp;&nbsp;Diameter =100 mm</td></tr>
<tr><td>Billet Temperature</td><td>: 125°C</td></tr>
<tr><td>Die Temperature</td><td>: 20°C</td></tr>
<tr><td>% Reduction in height&nbsp;&nbsp;&nbsp;&nbsp;</td><td>: 50%</td></tr>
<tr><td>Press</td><td>: Hydraulic</td></tr>
<tr><td>Ram Speed</td><td>: 1mm/s</td></tr>
</table>
<center><img src="images/MetalForming/SimSetup.jpg" alt="Conditions of Metal Forming Simulations" width="750" height="450" /><br/>Figure:1 Conditions during Simulation<br/><br/>
<object id="player" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" 
	   name="player" width="600" height="400"> 
		<param name="movie" value="player.swf" /> 
		<param name="allowfullscreen" value="true" /> 
		<param name="allowscriptaccess" value="always" /> 
		<param name="flashvars" value="file=UPSETTING/UPSET.mp4&repeat=always&image=images/Upsetting/ups.png" /> 
		<embed 
			type="application/x-shockwave-flash"
			id="player2"
			name="player2"
			src="player.swf" 
			width="600" 
			height="400"
			allowscriptaccess="always" 
			allowfullscreen="true"
			flashvars="file=UPSETTING/UPSET.mp4&repeat=always&image=images/Upsetting/ups.png"/> 
</object></center>
</div></div> 
<div id="footer">
&copy; Metal Forming Virtual Simulation Lab - Dayalbagh Educational Institute (www.dei.ac.in)
</div>
</body>
</html>