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
	<li><a href="rct.php">Ring Compression Test</a></li>
	<li><a href="RCT_Bench.php">Simulation Bench</a></li>
	<li><a href="MCQ_RingCS.php">Self Check Quiz</a></li>
EOQ;
?>
</ul></div>
<div style="background-image:url(images/content_bg.jpg);position: relative; margin:auto; width: 1024px; min-height:550px;">
<div class="box">
<h2>Ring Compression Test </h2><br>
&nbsp;&nbsp;Ring compression test has been widely used as a test to evaluate the friction condition in metal forming process.<br><br>
<center><object id="player" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" 
	   name="player" width="650" height="400"> 
		<param name="movie" value="player.swf" /> 
		<param name="allowfullscreen" value="true" /> 
<param name="wmode" value="transparent"/>		<param name="allowscriptaccess" value="always" /> 
		<param name="flashvars" value="file=RCT/Al_Cold_Velocity1/Ring_Compression_COLD_AL_v1_mu_tresca_0p1.mp4&image=images/RCT/rct.gif"/> 
		<embed 
			wmode="transparent"
			type="application/x-shockwave-flash"
			id="player2"
			name="player2"
			src="player.swf" 
			width="650" 
			height="400"
			allowscriptaccess="always" 
			allowfullscreen="true"
			flashvars="file=RCT/Al_Cold_Velocity1/Ring_Compression_COLD_AL_v1_mu_tresca_0p1.mp4&image=images/RCT/rct.gif"/> 
</object></center><br>
<span class="blue">THE PRINCIPLE OF RING TEST</span><br><br>For given conditions of temperature, strain, strain rate and 
initial specimen geometry of OD:ID:H the deformation of internal diameter of ring may be calculated as a unique function of 
interfacial friction coefficient.<br>
<center><img src="images/RCT/RingDeformation.jpg" width=650 height=400></center><br>
<span class="blue">Geometrical Change and Friction Condition</span>
<br><br><center><img src="images/RCT/GeometricalChange.jpg"></center><br>
When a short ring specimen is plastically compressed &nbsp;between two flat parallel platens (a), the internal diameter of the ring 
is increased if interface friction is low (b) and it is decreased if this friction is high (c)&nbsp;<br><br>By measuring the change 
of the internal diameter, it is possible to evaluate friction condition, through the use of a friction calibration curve<br><br>
<span class="blue">For various forming conditions, the value of &ldquo;m&rdquo; vary as follows:</span></p><br><br><center>
<img src="images/RCT/FormingConditions.jpg"></center>
<span class="blue">CASE A&nbsp; : RING TEST SIMULATION FOR M=0.0</span><br><table><tr><td>Material</td><td>:AlZn5.6Mg2.5Cu1.6</td></tr>
<tr><td>Friction Shear Factor</td><td>:m = 0.0</td></tr>
<tr><td>Dimensions</td><td>:OD = 60mm, ID=30mm, Height = 20mm</td></tr>
<tr><td>Ring Temperature</td><td>: 300 °C</td></tr>
<tr><td>Die Temperature</td><td>:250 °C</td></tr>
<tr><td>% Reduction in height&nbsp;&nbsp;&nbsp;&nbsp;</td><td>: 50%( 10 mm)</td></tr>
</table><br><span class="blue">Simulation Results</span><br><table><tr><td>Final ID</td><td>:42.0989 mm</td></tr>
<tr><td>% Decrease in ID</td><td>:-40.3297 %</td></tr>
<tr><td>% Reduction in Height&nbsp;&nbsp;&nbsp;&nbsp;</td><td>:50% </td></tr>
</table><br>
<center><object id="player" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" 
	   name="player" width="600" height="400"> 
		<param name="movie" value="player.swf" /> 
		<param name="allowfullscreen" value="true" /> 
		<param name="allowscriptaccess" value="always" /> 
		<param name="flashvars" value="file=RCT/Al_Hot_Velocity1/Ring_Compression_HOT_AL_v1_f0.mp4&image=images/RCT/rct0.gif"/> 
		<embed 
			type="application/x-shockwave-flash"
			id="player2"
			name="player2"
			src="player.swf" 
			width="600" 
			height="400"
			allowscriptaccess="always" 
			allowfullscreen="true"
			flashvars="file=RCT/Al_Hot_Velocity1/Ring_Compression_HOT_AL_v1_f0.mp4&image=images/RCT/rct0.gif"/> 
	</object></center><br>
	<span class="blue">CASE B : RING TEST SIMULATION FOR M=0.10 </span><br><table><tr><td>Material</td>
	<td>:AlZn5.6Mg2.5Cu1.6</td></tr>
<tr><td>Friction Shear Factor</td><td>:m = 0.10</td></tr>
<tr><td>Dimensions</td><td>:OD = 60mm, ID=30mm, Height = 20mm</td></tr>
<tr><td>Ring Temperature</td><td>: 300 °C</td></tr>
<tr><td>Die Temperature</td><td>:250 °C</td></tr>
<tr><td>% Reduction in height&nbsp;&nbsp;&nbsp;&nbsp;</td><td>: 50%( 10 mm)</td></tr>
</table><br><span class="blue">Simulation Results</span><br><table><tr><td>Final ID</td><td>:34.5300 mm</td></tr>
<tr><td>% Decrease in ID</td><td>:-15.1000 %</td></tr>
<tr><td>% Reduction in Height&nbsp;&nbsp;&nbsp;&nbsp;</td><td>:50% </td></tr>
</table><br>
<center><object id="player" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" 
	   name="player" width="600" height="400"> 
		<param name="movie" value="player.swf" /> 
		<param name="allowfullscreen" value="true" /> 
		<param name="allowscriptaccess" value="always" /> 
		<param name="flashvars" value="file=RCT/Al_Hot_Velocity1/Ring_Compression_HOT_AL_v1_ftresca_0p1.mp4&image=images/RCT/rct0p1.gif"/> 
		<embed 
			type="application/x-shockwave-flash"
			id="player2"
			name="player2"
			src="player.swf" 
			width="600" 
			height="400"
			allowscriptaccess="always" 
			allowfullscreen="true"
			flashvars="file=RCT/Al_Hot_Velocity1/Ring_Compression_HOT_AL_v1_ftresca_0p1.mp4&image=images/RCT/rct0p1.gif"/> 
</object></center><br>
<span class="blue">CASE C : RING TEST SIMULATION FOR M=0.30</span><br><table><tr><td>Material</td>
	<td>:AlZn5.6Mg2.5Cu1.6</td></tr>
<tr><td>Friction Shear Factor</td><td>:m = 0.30</td></tr>
<tr><td>Dimensions</td><td>:OD = 60mm, ID=30mm, Height = 20mm</td></tr>
<tr><td>Ring Temperature</td><td>: 300 °C</td></tr>
<tr><td>Die Temperature</td><td>:250 °C</td></tr>
<tr><td>% Reduction in height&nbsp;&nbsp;&nbsp;&nbsp;</td><td>: 50%( 10 mm)</td></tr>
</table><br><span class="blue">Simulation Results</span><br><table><tr><td>Final ID</td><td>:25.8003 mm</td></tr>
<tr><td>% Decrease in ID</td><td>:13.9990 %</td></tr>
<tr><td>% Reduction in Height&nbsp;&nbsp;&nbsp;&nbsp;</td><td>:50% </td></tr></table><br>
<center><object id="player" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" 
	   name="player" width="600" height="400"> 
		<param name="movie" value="player.swf" /> 
		<param name="allowfullscreen" value="true" /> 
		<param name="allowscriptaccess" value="always" /> 
		<param name="flashvars" value="file=RCT/Al_Hot_Velocity1/Ring_Compression_HOT_AL_v1_ftresca_0p3.mp4&image=images/RCT/rct0p3.gif"/> 
		<embed 
			type="application/x-shockwave-flash"
			id="player2"
			name="player2"
			src="player.swf" 
			width="600" 
			height="400"
			allowscriptaccess="always" 
			allowfullscreen="true"
			flashvars="file=RCT/Al_Hot_Velocity1/Ring_Compression_HOT_AL_v1_ftresca_0p3.mp4&image=images/RCT/rct0p3.gif"/> 
	</object></center><br>
<span class="blue">CASE D : SIMULATION FOR M=0.40 </span><br><table><tr><td>Material</td><td>:AlZn5.6Mg2.5Cu1.6</td></tr>
<tr><td>Friction Shear Factor</td><td>:m = 0.40</td></tr>
<tr><td>Dimensions</td><td>:OD = 60mm, ID=30mm, Height = 20mm</td></tr>
<tr><td>Ring Temperature</td><td>: 300 °C</td></tr>
<tr><td>Die Temperature</td><td>:250 °C</td></tr>
<tr><td>% Reduction in height&nbsp;&nbsp;&nbsp;&nbsp;</td><td>: 50%( 10 mm)</td></tr>
</table><br><span class="blue">Simulation Results</span><br><table><tr><td>Final ID</td><td>:22.6611 mm</td></tr>
<tr><td>% Decrease in ID</td><td>:24.4630 %</td></tr>
<tr><td>% Reduction in Height&nbsp;&nbsp;&nbsp;&nbsp;</td><td>:50% </td></tr>
</table><br>
<center><object id="player" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" 
	   name="player" width="600" height="400"> 
		<param name="movie" value="player.swf" /> 
		<param name="allowfullscreen" value="true" /> 
		<param name="allowscriptaccess" value="always" /> 
		<param name="flashvars" value="file=RCT/Al_Hot_Velocity1/Ring_Compression_HOT_AL_v1_ftresca_0p4.mp4&image=images/RCT/rct0p4.gif"/> 
		<embed 
			type="application/x-shockwave-flash"
			id="player2"
			name="player2"
			src="player.swf" 
			width="600" 
			height="400"
			allowscriptaccess="always" 
			allowfullscreen="true"
			flashvars="file=RCT/Al_Hot_Velocity1/Ring_Compression_HOT_AL_v1_ftresca_0p4.mp4&image=images/RCT/rct0p4.gif"/> 
</object></center><br>
<span class="blue">COMPARISION</span>
<br><br><center><img src="images/RCT/Comperision.jpg"></center><br>
A ring test simulation will be preformed for two different friction shear factors, one material, one press setup. The simulation is 
non-isothermal, therefore heat transfer at the interface is considered<br>
The simulations show how temperature and shear friction factor affect metal flow and ring geometry. Compared to isothermal, non-isothermal 
deformation causes the level of friction to increase.
</div></div> 
<div id="footer">
&copy; Metal Forming Virtual Simulation Lab - Dayalbagh Educational Institute (www.dei.ac.in)
</div>
</body>
</html>