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
<div style="background-image:url(images/content_bg.jpg);position: relative; margin:auto; width: 1024px; min-height:550px;">
<div class="box">
<h2>Variables in Upset Forging Process</h2><br>
<span class="blue">EFFECT OF FORGING EQUIPMENT ON FORGING PROCESS </span><br>
<br>Each type of forging press or machine (mechanical, hydraulic, screw, hammer) has unique stroke characteristics. One important variable that affects the forming process is press ram speed. Some machines have constant ram speeds (hydraulic press) while others have variable ram speeds (mechanical press).<br><br>
<center><span class="blue">HYDRAULIC PRESS SIMULATION</span></center><br><table>
<tr><td>Material </td><td>:AlZn5.6Mg2.5Cu1.5<br></td></tr>
<tr><td>Dimension</td><td>:Height =100 mm,&nbsp;&nbsp;&nbsp;&nbsp;Diameter =100mm</td></tr>
<tr><td>Billet Temperature</td><td>:300°C</td></tr>
<tr><td>Die Temperature</td><td>:250°C</td></tr>
<tr><td>% Reduction in height&nbsp;&nbsp;&nbsp;&nbsp;</td><td>: 50%</td></tr>
<tr><td>Press</td><td>:Hydraulic </td></tr>
</table>
<br><center><object id="player" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" 
	   name="player" width="600" height="400"> 
		<param name="movie" value="player.swf" /> 
		<param name="allowfullscreen" value="true" /> 
<param name="wmode" value="transparent"/>		<param name="allowscriptaccess" value="always" /> 
		<param name="flashvars" value="file=UPSETTING/Upset_Sim/U_HYD_AL_HOT_F0_LD1_V1.mp4&repeat=always&image=images/Upsetting/Hyd_Al.jpg" /> 
		<embed 
			type="application/x-shockwave-flash"
			id="player2"
			name="player2"
			src="player.swf" 
			width="600" 
			height="400"
			allowscriptaccess="always" 
			allowfullscreen="true"
			flashvars="file=UPSETTING/Upset_Sim/U_HYD_AL_HOT_F0_LD1_V1.mp4&repeat=always&image=images/Upsetting/Hyd_Al.jpg" 
		/> 
	</object></center><br>
	<span class="blue">FORCE DURING UPSETTING PROCESS</span><br><br>
	<center><object id="player" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" 
	   name="player" width="600" height="400"> 
		<param name="movie" value="player.swf" /> 
		<param name="allowfullscreen" value="true" /> 
		<param name="allowscriptaccess" value="always" /> 
		<param name="flashvars" value="file=UPSETTING/Upset_Sim/U_HYD_AL_HOT_F0_LD1_V1_G.mp4&repeat=always&image=images/Upsetting/Hyd_Al_g.jpg"/> 
		<embed 
			type="application/x-shockwave-flash"
			id="player2"
			name="player2"
			src="player.swf" 
			width="600" 
			height="400"
			allowscriptaccess="always" 
			allowfullscreen="true"
			flashvars="file=UPSETTING/Upset_Sim/U_HYD_AL_HOT_F0_LD1_V1_G.mp4&repeat=always&image=images/Upsetting/Hyd_Al_g.jpg"/> 
	</object></center><br>
<table>
<tr><td>Material </td><td>:CK45<br></td></tr>
<tr><td>Dimension</td><td>:Height =100 mm,&nbsp;&nbsp;&nbsp;&nbsp;Diameter =100mm</td></tr>
<tr><td>Billet Temperature</td><td>:1050°C</td></tr>
<tr><td>Die Temperature</td><td>:250°C</td></tr>
<tr><td>% Reduction in height&nbsp;&nbsp;&nbsp;&nbsp;</td><td>: 50%</td></tr>
<tr><td>Press</td><td>:Hydraulic </td></tr><br>
</table>
<br><center><object id="player" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" 
	   name="player" width="600" height="400"> 
		<param name="movie" value="player.swf" /> 
		<param name="allowfullscreen" value="true" /> 
		<param name="allowscriptaccess" value="always" /> 
		<param name="flashvars" value="file=UPSETTING/Upset_Sim/U_HYD_STEEL_HOT_FM_LD1_V1.mp4&repeat=always&image=images/Upsetting/Hyd_Ck.jpg" /> 
		<embed 
			type="application/x-shockwave-flash"
			id="player2"
			name="player2"
			src="player.swf" 
			width="600" 
			height="400"
			allowscriptaccess="always" 
			allowfullscreen="true"
			flashvars="file=UPSETTING/Upset_Sim/U_HYD_STEEL_HOT_FM_LD1_V1.mp4&repeat=always&image=images/Upsetting/Hyd_Ck.jpg" 
		/> 
	</object></center><br>
	<span class="blue">FORCE DURING UPSETTING PROCESS</span><br><br>
	<center><object id="player" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" 
	   name="player" width="600" height="400"> 
		<param name="movie" value="player.swf" /> 
		<param name="allowfullscreen" value="true" /> 
		<param name="allowscriptaccess" value="always" /> 
		<param name="flashvars" value="file=UPSETTING/Upset_Sim/U_HYD_STEEL_HOT_FM_LD1_V1_G.mp4&repeat=always&image=images/Upsetting/Hyd_Ck_g.jpg"/> 
		<embed 
			type="application/x-shockwave-flash"
			id="player2"
			name="player2"
			src="player.swf" 
			width="600" 
			height="400"
			allowscriptaccess="always" 
			allowfullscreen="true"
			flashvars="file=UPSETTING/Upset_Sim/U_HYD_STEEL_HOT_FM_LD1_V1_G.mp4&repeat=always&image=images/Upsetting/Hyd_Ck_g.jpg"/> 
	</object></center><br>
	<table>
<tr><td>Material </td><td>:Ti6Alv4<br></td></tr>
<tr><td>Dimension</td><td>:Height =100 mm,&nbsp;&nbsp;&nbsp;&nbsp;Diameter =100mm</td></tr>
<tr><td>Billet Temperature</td><td>:1200°C</td></tr>
<tr><td>Die Temperature</td><td>:250°C</td></tr>
<tr><td>% Reduction in height&nbsp;&nbsp;&nbsp;&nbsp;</td><td>: 50%</td></tr>
<tr><td>Press</td><td>:Hydraulic</td></tr><br>
</table>
<br><center><object id="player" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" 
	   name="player" width="600" height="400"> 
		<param name="movie" value="player.swf" /> 
		<param name="allowfullscreen" value="true" /> 
		<param name="allowscriptaccess" value="always" /> 
		<param name="flashvars" value="file=UPSETTING/Upset_Sim/U_HYD_TI_HOT_FM_LD1_V1.mp4&repeat=always&image=images/Upsetting/Hyd_Ti.jpg" /> 
		<embed 
			type="application/x-shockwave-flash"
			id="player2"
			name="player2"
			src="player.swf" 
			width="600" 
			height="400"
			allowscriptaccess="always" 
			allowfullscreen="true"
			flashvars="file=UPSETTING/Upset_Sim/U_HYD_TI_HOT_FM_LD1_V1.mp4&repeat=always&image=images/Upsetting/Hyd_Ti.jpg" 
		/> 
	</object></center><br>
	<span class="blue">FORCE DURING UPSETTING PROCESS</span><br><br>
	<center><object id="player" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" 
	   name="player" width="600" height="400"> 
		<param name="movie" value="player.swf" /> 
		<param name="allowfullscreen" value="true" /> 
		<param name="allowscriptaccess" value="always" /> 
		<param name="flashvars" value="file=UPSETTING/Upset_Sim/U_HYD_TI_HOT_FM_LD1_V1_g.mp4&repeat=always&image=images/Upsetting/Hyd_Ti_g.jpg"/> 
		<embed 
			type="application/x-shockwave-flash"
			id="player2"
			name="player2"
			src="player.swf" 
			width="600" 
			height="400"
			allowscriptaccess="always" 
			allowfullscreen="true"
			flashvars="file=UPSETTING/Upset_Sim/U_HYD_TI_HOT_FM_LD1_V1_g.mp4&repeat=always&image=images/Upsetting/Hyd_Ti_g.jpg"/> 
	</object></center><br>
	<table>
<tr><td>Material </td><td>:CuZn40Al2<br></td></tr>
<tr><td>Dimension</td><td>:Height =100 mm,&nbsp;&nbsp;&nbsp;&nbsp;Diameter =100mm</td></tr>
<tr><td>Billet Temperature</td><td>:650°C</td></tr>
<tr><td>Die Temperature</td><td>:250°C</td></tr>
<tr><td>% Reduction in height&nbsp;&nbsp;&nbsp;&nbsp;</td><td>: 50%</td></tr>
<tr><td>Press</td><td>:Hydraulic </td></tr><br>
</table>
<br><center><object id="player" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" 
	   name="player" width="600" height="400"> 
		<param name="movie" value="player.swf" /> 
		<param name="allowfullscreen" value="true" /> 
		<param name="allowscriptaccess" value="always" /> 
		<param name="flashvars" value="file=UPSETTING/Upset_Sim/U_HYD_CU_HOT_F0_LD1_V1.mp4&repeat=always&image=images/Upsetting/Hyd_Cu.jpg" /> 
		<embed 
			type="application/x-shockwave-flash"
			id="player2"
			name="player2"
			src="player.swf" 
			width="600" 
			height="400"
			allowscriptaccess="always" 
			allowfullscreen="true"
			flashvars="file=UPSETTING/Upset_Sim/U_HYD_CU_HOT_F0_LD1_V1.mp4&repeat=always&image=images/Upsetting/Hyd_Cu.jpg" 
		/> 
	</object></center><br>
	<span class="blue">FORCE DURING UPSETTING PROCESS</span><br><br>
	<center><object id="player" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" 
	   name="player" width="600" height="400"> 
		<param name="movie" value="player.swf" /> 
		<param name="allowfullscreen" value="true" /> 
		<param name="allowscriptaccess" value="always" /> 
		<param name="flashvars" value="file=UPSETTING/Upset_Sim/U_HYD_CU_HOT_F0_LD1_V1_g.mp4&repeat=always&image=images/Upsetting/Hyd_Cu_g.jpg"/> 
		<embed 
			type="application/x-shockwave-flash"
			id="player2"
			name="player2"
			src="player.swf" 
			width="600" 
			height="400"
			allowscriptaccess="always" 
			allowfullscreen="true"
			flashvars="file=UPSETTING/Upset_Sim/U_HYD_CU_HOT_F0_LD1_V1_g.mp4&repeat=always&image=images/Upsetting/Hyd_Cu_g.jpg"/> 
	</object></center><br><br>
	
<center><span class="blue">MECHANICAL PRESS SIMULATION</span></center><br><table>
<tr><td>Material </td><td>:AlZn5.6Mg2.5Cu1.5<br></td></tr>
<tr><td>Dimension</td><td>:Height =100 mm,&nbsp;&nbsp;&nbsp;&nbsp;Diameter =100mm</td></tr>
<tr><td>Billet Temperature</td><td>:300°C</td></tr>
<tr><td>Die Temperature</td><td>:250°C</td></tr>
<tr><td>% Reduction in height&nbsp;&nbsp;&nbsp;&nbsp;</td><td>: 50%</td></tr>
<tr><td>Press</td><td>:Mechanical</td></tr>
</table>
<br><center><object id="player" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" 
	   name="player" width="600" height="400"> 
		<param name="movie" value="player.swf" /> 
		<param name="allowfullscreen" value="true" /> 
		<param name="allowscriptaccess" value="always" /> 
		<param name="flashvars" value="file=UPSETTING/Upset_Sim/U_MEC_AL_HOT_FM_LD1_V1.mp4&repeat=always&image=images/Upsetting/Mec_Al.jpg" /> 
		<embed 
			type="application/x-shockwave-flash"
			id="player2"
			name="player2"
			src="player.swf" 
			width="600" 
			height="400"
			allowscriptaccess="always" 
			allowfullscreen="true"
			flashvars="file=UPSETTING/Upset_Sim/U_MEC_AL_HOT_FM_LD1_V1.mp4&repeat=always&image=images/Upsetting/Mec_Al.jpg" 
		/> 
	</object></center><br>
	<span class="blue">FORCE DURING UPSETTING PROCESS</span><br><br>
	<center><object id="player" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" 
	   name="player" width="600" height="400"> 
		<param name="movie" value="player.swf" /> 
		<param name="allowfullscreen" value="true" /> 
		<param name="allowscriptaccess" value="always" /> 
		<param name="flashvars" value="file=UPSETTING/Upset_Sim/U_MEC_AL_HOT_FM_LD1_V1_g.mp4&repeat=always&image=images/Upsetting/Mec_Al_g.jpg"/> 
		<embed 
			type="application/x-shockwave-flash"
			id="player2"
			name="player2"
			src="player.swf" 
			width="600" 
			height="400"
			allowscriptaccess="always" 
			allowfullscreen="true"
			flashvars="file=UPSETTING/Upset_Sim/U_MEC_AL_HOT_FM_LD1_V1_g.mp4&repeat=always&image=images/Upsetting/Mec_Al_g.jpg"/> 
	</object></center><br>
<table>
<tr><td>Material </td><td>:CK45<br></td></tr>
<tr><td>Dimension</td><td>:Height =100 mm,&nbsp;&nbsp;&nbsp;&nbsp;Diameter =100mm</td></tr>
<tr><td>Billet Temperature</td><td>:1050°C</td></tr>
<tr><td>Die Temperature</td><td>:250°C</td></tr>
<tr><td>% Reduction in height&nbsp;&nbsp;&nbsp;&nbsp;</td><td>: 50%</td></tr>
<tr><td>Press</td><td>:Mechanical</td></tr><br>
</table>
<br><center><object id="player" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" 
	   name="player" width="600" height="400"> 
		<param name="movie" value="player.swf" /> 
		<param name="allowfullscreen" value="true" /> 
		<param name="allowscriptaccess" value="always" /> 
		<param name="flashvars" value="file=UPSETTING/Upset_Sim/U_MEC_STEEL_HOT_FM_LD1_V1.mp4&repeat=always&image=images/Upsetting/Mec_Ck.jpg" /> 
		<embed 
			type="application/x-shockwave-flash"
			id="player2"
			name="player2"
			src="player.swf" 
			width="600" 
			height="400"
			allowscriptaccess="always" 
			allowfullscreen="true"
			flashvars="file=UPSETTING/Upset_Sim/U_MEC_STEEL_HOT_FM_LD1_V1.mp4&repeat=always&image=images/Upsetting/Mec_Ck.jpg" 
		/> 
	</object></center><br>
	<span class="blue">FORCE DURING UPSETTING PROCESS</span><br><br>
	<center><object id="player" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" 
	   name="player" width="600" height="400"> 
		<param name="movie" value="player.swf" /> 
		<param name="allowfullscreen" value="true" /> 
		<param name="allowscriptaccess" value="always" /> 
		<param name="flashvars" value="file=UPSETTING/Upset_Sim/U_MEC_STEEL_HOT_FM_LD1_V1_g.mp4&repeat=always&image=images/Upsetting/Mec_Ck_g.jpg"/> 
		<embed 
			type="application/x-shockwave-flash"
			id="player2"
			name="player2"
			src="player.swf" 
			width="600" 
			height="400"
			allowscriptaccess="always" 
			allowfullscreen="true"
			flashvars="file=UPSETTING/Upset_Sim/U_MEC_STEEL_HOT_FM_LD1_V1_g.mp4&repeat=always&image=images/Upsetting/Mec_Ck_g.jpg"/> 
	</object></center><br>
	<table>
<tr><td>Material </td><td>:Ti6Alv4<br></td></tr>
<tr><td>Dimension</td><td>:Height =100 mm,&nbsp;&nbsp;&nbsp;&nbsp;Diameter =100mm</td></tr>
<tr><td>Billet Temperature</td><td>:1200°C</td></tr>
<tr><td>Die Temperature</td><td>:250°C</td></tr>
<tr><td>% Reduction in height&nbsp;&nbsp;&nbsp;&nbsp;</td><td>: 50%</td></tr>
<tr><td>Press</td><td>:Mechanical</td></tr><br>
</table>
<br><center><object id="player" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" 
	   name="player" width="600" height="400"> 
		<param name="movie" value="player.swf" /> 
		<param name="allowfullscreen" value="true" /> 
		<param name="allowscriptaccess" value="always" /> 
		<param name="flashvars" value="file=UPSETTING/Upset_Sim/U_MEC_TI_HOT_FM_LD1_V1.mp4&repeat=always&image=images/Upsetting/Mec_Ti.jpg" /> 
		<embed 
			type="application/x-shockwave-flash"
			id="player2"
			name="player2"
			src="player.swf" 
			width="600" 
			height="400"
			allowscriptaccess="always" 
			allowfullscreen="true"
			flashvars="file=UPSETTING/Upset_Sim/U_MEC_TI_HOT_FM_LD1_V1.mp4&repeat=always&image=images/Upsetting/Mec_Ti.jpg" 
		/> 
	</object></center><br>
	<span class="blue">FORCE DURING UPSETTING PROCESS</span><br><br>
	<center><object id="player" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" 
	   name="player" width="600" height="400"> 
		<param name="movie" value="player.swf" /> 
		<param name="allowfullscreen" value="true" /> 
		<param name="allowscriptaccess" value="always" /> 
		<param name="flashvars" value="file=UPSETTING/Upset_Sim/U_MEC_TI_HOT_FM_LD1_V1_g.mp4&repeat=always&image=images/Upsetting/Mec_Ti_g.jpg"/> 
		<embed 
			type="application/x-shockwave-flash"
			id="player2"
			name="player2"
			src="player.swf" 
			width="600" 
			height="400"
			allowscriptaccess="always" 
			allowfullscreen="true"
			flashvars="file=UPSETTING/Upset_Sim/U_MEC_TI_HOT_FM_LD1_V1_g.mp4&repeat=always&image=images/Upsetting/Mec_Ti_g.jpg"/> 
	</object></center><br>
	<table>
<tr><td>Material </td><td>:CuZn40Al2<br></td></tr>
<tr><td>Dimension</td><td>:Height =100 mm,&nbsp;&nbsp;&nbsp;&nbsp;Diameter =100mm</td></tr>
<tr><td>Billet Temperature</td><td>:650°C</td></tr>
<tr><td>Die Temperature</td><td>:250°C</td></tr>
<tr><td>% Reduction in height&nbsp;&nbsp;&nbsp;&nbsp;</td><td>: 50%</td></tr>
<tr><td>Press</td><td>:Mechanical</td></tr><br>
</table>
<br><center><object id="player" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" 
	   name="player" width="600" height="400"> 
		<param name="movie" value="player.swf" /> 
		<param name="allowfullscreen" value="true" /> 
		<param name="allowscriptaccess" value="always" /> 
		<param name="flashvars" value="file=UPSETTING/Upset_Sim/U_MEC_CU_HOT_F0_LD1_V1.mp4&repeat=always&image=images/Upsetting/Mec_Cu.jpg" /> 
		<embed 
			type="application/x-shockwave-flash"
			id="player2"
			name="player2"
			src="player.swf" 
			width="600" 
			height="400"
			allowscriptaccess="always" 
			allowfullscreen="true"
			flashvars="file=UPSETTING/Upset_Sim/U_MEC_CU_HOT_F0_LD1_V1.mp4&repeat=always&image=images/Upsetting/Mec_Cu.jpg" 
		/> 
	</object></center><br>
	<span class="blue">FORCE DURING UPSETTING PROCESS</span><br><br>
	<center><object id="player" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" 
	   name="player" width="600" height="400"> 
		<param name="movie" value="player.swf" /> 
		<param name="allowfullscreen" value="true" /> 
		<param name="allowscriptaccess" value="always" /> 
		<param name="flashvars" value="file=UPSETTING/Upset_Sim/U_MEC_CU_HOT_F0_LD1_V1_g.mp4&repeat=always&image=images/Upsetting/Mec_Cu_g.jpg"/> 
		<embed 
			type="application/x-shockwave-flash"
			id="player2"
			name="player2"
			src="player.swf" 
			width="600" 
			height="400"
			allowscriptaccess="always" 
			allowfullscreen="true"
			flashvars="file=UPSETTING/Upset_Sim/U_MEC_CU_HOT_F0_LD1_V1_g.mp4&repeat=always&image=images/Upsetting/Mec_Cu_g.jpg"/>
	</object></center><br>

<center><span class="blue">HAMMER PRESS SIMULATION</span></center><br><table>
<tr><td>Material </td><td>:AlZn5.6Mg2.5Cu1.5<br></td></tr>
<tr><td>Dimension</td><td>:Height =100 mm,&nbsp;&nbsp;&nbsp;&nbsp;Diameter =100mm</td></tr>
<tr><td>Billet Temperature</td><td>:300°C</td></tr>
<tr><td>Die Temperature</td><td>:250°C</td></tr>
<tr><td>% Reduction in height&nbsp;&nbsp;&nbsp;&nbsp;</td><td>: 50%</td></tr>
<tr><td>Press</td><td>:Hammer</td></tr>
</table>
<br><center><object id="player" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" 
	   name="player" width="600" height="400"> 
		<param name="movie" value="player.swf" /> 
		<param name="allowfullscreen" value="true" /> 
		<param name="allowscriptaccess" value="always" /> 
		<param name="flashvars" value="file=UPSETTING/Upset_Sim/U_HAM_AL_HOT_FM_LD1_V1.mp4&repeat=always&image=images/Upsetting/Ham_Al.jpg" /> 
		<embed 
			type="application/x-shockwave-flash"
			id="player2"
			name="player2"
			src="player.swf" 
			width="600" 
			height="400"
			allowscriptaccess="always" 
			allowfullscreen="true"
			flashvars="file=UPSETTING/Upset_Sim/U_HAM_AL_HOT_FM_LD1_V1.mp4&repeat=always&image=images/Upsetting/Ham_Al.jpg" 
		/> 
	</object></center><br>
	<span class="blue">FORCE DURING UPSETTING PROCESS</span><br><br>
	<center><object id="player" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" 
	   name="player" width="600" height="400"> 
		<param name="movie" value="player.swf" /> 
		<param name="allowfullscreen" value="true" /> 
		<param name="allowscriptaccess" value="always" /> 
		<param name="flashvars" value="file=UPSETTING/Upset_Sim/U_HAM_AL_HOT_FM_LD1_V1_g.mp4&repeat=always&image=images/Upsetting/Ham_Al_g.jpg"/> 
		<embed 
			type="application/x-shockwave-flash"
			id="player2"
			name="player2"
			src="player.swf" 
			width="600" 
			height="400"
			allowscriptaccess="always" 
			allowfullscreen="true"
			flashvars="file=UPSETTING/Upset_Sim/U_HAM_AL_HOT_FM_LD1_V1_g.mp4&repeat=always&image=images/Upsetting/Ham_Al_g.jpg"/> 
	</object></center><br>
<table>
<tr><td>Material </td><td>:CK45<br></td></tr>
<tr><td>Dimension</td><td>:Height =100 mm,&nbsp;&nbsp;&nbsp;&nbsp;Diameter =100mm</td></tr>
<tr><td>Billet Temperature</td><td>:1050°C</td></tr>
<tr><td>Die Temperature</td><td>:250°C</td></tr>
<tr><td>% Reduction in height&nbsp;&nbsp;&nbsp;&nbsp;</td><td>: 50%</td></tr>
<tr><td>Press</td><td>:Hammer</td></tr><br>
</table>
<br><center><object id="player" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" 
	   name="player" width="600" height="400"> 
		<param name="movie" value="player.swf" /> 
		<param name="allowfullscreen" value="true" /> 
		<param name="allowscriptaccess" value="always" /> 
		<param name="flashvars" value="file=UPSETTING/Upset_Sim/U_HAM_STEEL_HOT_FM_LD1_V1.mp4&repeat=always&image=images/Upsetting/Ham_Ck.jpg" /> 
		<embed 
			type="application/x-shockwave-flash"
			id="player2"
			name="player2"
			src="player.swf" 
			width="600" 
			height="400"
			allowscriptaccess="always" 
			allowfullscreen="true"
			flashvars="file=UPSETTING/Upset_Sim/U_HAM_STEEL_HOT_FM_LD1_V1.mp4&repeat=always&image=images/Upsetting/Ham_Ck.jpg" 
		/> 
	</object></center><br>
	<span class="blue">FORCE DURING UPSETTING PROCESS</span><br><br>
	<center><object id="player" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" 
	   name="player" width="600" height="400"> 
		<param name="movie" value="player.swf" /> 
		<param name="allowfullscreen" value="true" /> 
		<param name="allowscriptaccess" value="always" /> 
		<param name="flashvars" value="file=UPSETTING/Upset_Sim/U_HAM_STEEL_HOT_FM_LD1_V1_g.mp4&repeat=always&image=images/Upsetting/Ham_Ck_g.jpg"/> 
		<embed 
			type="application/x-shockwave-flash"
			id="player2"
			name="player2"
			src="player.swf" 
			width="600" 
			height="400"
			allowscriptaccess="always" 
			allowfullscreen="true"
			flashvars="file=UPSETTING/Upset_Sim/U_HAM_STEEL_HOT_FM_LD1_V1_g.mp4&repeat=always&image=images/Upsetting/Ham_Ck_g.jpg"/> 
	</object></center><br>
	<table>
<tr><td>Material </td><td>:Ti6Alv4<br></td></tr>
<tr><td>Dimension</td><td>:Height =100 mm,&nbsp;&nbsp;&nbsp;&nbsp;Diameter =100mm</td></tr>
<tr><td>Billet Temperature</td><td>:1200°C</td></tr>
<tr><td>Die Temperature</td><td>:250°C</td></tr>
<tr><td>% Reduction in height&nbsp;&nbsp;&nbsp;&nbsp;</td><td>: 50%</td></tr>
<tr><td>Press</td><td>:Hammer</td></tr><br>
</table>
<br><center><object id="player" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" 
	   name="player" width="600" height="400"> 
		<param name="movie" value="player.swf" /> 
		<param name="allowfullscreen" value="true" /> 
		<param name="allowscriptaccess" value="always" /> 
		<param name="flashvars" value="file=UPSETTING/Upset_Sim/U_HAM_TI_HOT_FM_LD1_V1.mp4&repeat=always&image=images/Upsetting/Ham_Ti.jpg"/> 
		<embed 
			type="application/x-shockwave-flash"
			id="player2"
			name="player2"
			src="player.swf" 
			width="600" 
			height="400"
			allowscriptaccess="always" 
			allowfullscreen="true"
			flashvars="file=UPSETTING/Upset_Sim/U_HAM_TI_HOT_FM_LD1_V1.mp4&repeat=always&image=images/Upsetting/Ham_Ti.jpg" 
		/> 
	</object></center><br>
	<span class="blue">FORCE DURING UPSETTING PROCESS</span><br><br>
	<center><object id="player" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" 
	   name="player" width="600" height="400"> 
		<param name="movie" value="player.swf" /> 
		<param name="allowfullscreen" value="true" /> 
		<param name="allowscriptaccess" value="always" /> 
		<param name="flashvars" value="file=UPSETTING/Upset_Sim/U_HAM_TI_HOT_FM_LD1_V1_g.mp4&repeat=always&image=images/Upsetting/Ham_Ti_g.jpg"/> 
		<embed 
			type="application/x-shockwave-flash"
			id="player2"
			name="player2"
			src="player.swf" 
			width="600" 
			height="400"
			allowscriptaccess="always" 
			allowfullscreen="true"
			flashvars="file=UPSETTING/Upset_Sim/U_HAM_TI_HOT_FM_LD1_V1_g.mp4&repeat=always&image=images/Upsetting/Ham_Ti_g.jpg"/> 
	</object></center><br>
	<table>
<tr><td>Material </td><td>:CuZn40Al2<br></td></tr>
<tr><td>Dimension</td><td>:Height =100 mm,&nbsp;&nbsp;&nbsp;&nbsp;Diameter =100mm</td></tr>
<tr><td>Billet Temperature</td><td>:650°C</td></tr>
<tr><td>Die Temperature</td><td>:250°C</td></tr>
<tr><td>% Reduction in height&nbsp;&nbsp;&nbsp;&nbsp;</td><td>: 50%</td></tr>
<tr><td>Press</td><td>:Hammer</td></tr><br>
</table>
<br><center><object id="player" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" 
	   name="player" width="600" height="400"> 
		<param name="movie" value="player.swf" /> 
		<param name="allowfullscreen" value="true" /> 
		<param name="allowscriptaccess" value="always" /> 
		<param name="flashvars" value="file=UPSETTING/Upset_Sim/U_HAM_CU_HOT_F0_LD1_V1.mp4&repeat=always&image=images/Upsetting/Ham_Cu.jpg" /> 
		<embed 
			type="application/x-shockwave-flash"
			id="player2"
			name="player2"
			src="player.swf" 
			width="600" 
			height="400"
			allowscriptaccess="always" 
			allowfullscreen="true"
			flashvars="file=UPSETTING/Upset_Sim/U_HAM_CU_HOT_F0_LD1_V1.mp4&repeat=always&image=images/Upsetting/Ham_Cu.jpg" 
		/> 
	</object></center><br>
	<span class="blue">FORCE DURING UPSETTING PROCESS</span><br><br>
	<center><object id="player" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" 
	   name="player" width="600" height="400"> 
		<param name="movie" value="player.swf" /> 
		<param name="allowfullscreen" value="true" /> 
		<param name="allowscriptaccess" value="always" /> 
		<param name="flashvars" value="file=UPSETTING/Upset_Sim/U_HAM_CU_HOT_F0_LD1_V1_g.mp4&repeat=always&image=images/Upsetting/Ham_Cu_g.jpg"/> 
		<embed 
			type="application/x-shockwave-flash"
			id="player2"
			name="player2"
			src="player.swf" 
			width="600" 
			height="400"
			allowscriptaccess="always" 
			allowfullscreen="true"
			flashvars="file=UPSETTING/Upset_Sim/U_HAM_CU_HOT_F0_LD1_V1_g.mp4&repeat=always&image=images/Upsetting/Ham_Cu_g.jpg"/> 
	</object></center><br>
	<span class="blue">Comparision</span><br><br>
	<center><object id="player" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" 
	   name="player" width="600" height="400"> 
		<param name="movie" value="player.swf" /> 
		<param name="allowfullscreen" value="true" /> 
		<param name="allowscriptaccess" value="always" /> 
		<param name="flashvars" value="file=UPSETTING/Upset_Sim/Special.mp4&repeat=always&image=images/Upsetting/special.png"/> 
		<embed 
			type="application/x-shockwave-flash"
			id="player2"
			name="player2"
			src="player.swf" 
			width="600" 
			height="400"
			allowscriptaccess="always" 
			allowfullscreen="true"
			flashvars="file=UPSETTING/Upset_Sim/Special.mp4&repeat=always&image=images/Upsetting/special.png"/> 
	</object></center>
</div></div> 
<div id="footer">
&copy; Metal Forming Virtual Simulation Lab - Dayalbagh Educational Institute (www.dei.ac.in)
</div>
</body>
</html>