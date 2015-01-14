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
	<li><a href="Quenching.php">Quenching</a></li>
	<li class="dir"><a href="#">Simulations</a>
	<ul>	
	<li><a href="QuenchingSimulation.php?Quenching/QuenchingProcess.mp4">Quenching</a></li>
	<li><a href="QuenchingSimulation.php?Quenching/StrainQuenching.mp4">Quenching with strain</a></li>
	</ul>
	</li>
	<li><a href="MCQ_Quenching.php">Self Check Quiz</a></li>
EOQ;
?>
</ul></div>
<div style="background-image:url(images/content_bg.jpg);position: relative; margin:auto; width: 1024px; min-height:550px;">
<div class="box">
<h2>Quenching</h2><br>
The heat treatment is a very important step in the series of processes used to manufacture a metal part. It gives to the material most of its final characteristics (micro structure, strength, hardness). Generally after hot forging of blooms, the microstructure is severely affected. In order to homogenize the microstructure annealing is done and then quenched in appropriate medium.<br/><br/>
<span class=blue>Process:</span> In materials science, quenching is the rapid cooling of a workpiece to obtain certain material properties. It prevents low-temperature processes, such as phase transformations, from occurring by only providing a narrow window of time in which the reaction is both thermodynamically favourable and kinetically accessible. For instance, it can reduce crystallinity and thereby increase toughness of both alloys and plastics (produced through polymerization). In metallurgy, it is most commonly used to harden steel by introducing martensite, in which case the steel must be rapidly cooled through its eutectoid point, the temperature at which austenite becomes unstable. 
In steel alloyed with metals such as nickel and manganese, the eutectoid temperature becomes much lower, but the kinetic barriers to phase transformation remain the same. This allows quenching to start at a lower temperature, making the process much easier.<br/><br/><span class="blue">Effect of different Cooling Media:</span> Water and aqueous solutions are most frequently used as quenching media in hardening carbon and low carbon steels with high critical rates of cooling. Aqueous solutions like brine are also less sensitive to heating hence it also has slightly lower cooling rates.<br/>Mineral Oils are more suitable for quenching alloy steels than plain carbon steels. This prevents quenching defects due to uniform cooling. The water on the other hands produces martensite over the surface which increases surface hardness and causes trouble during machining.
</div></div> 
<div id="footer">
&copy; Metal Forming Virtual Simulation Lab - Dayalbagh Educational Institute (www.dei.ac.in)
</div>
</body>
</html>