<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Gemini-2</title>
<link href="http://gemini-2.com/gemini-2.css" rel="stylesheet" type="text/css" /> 


<?php include("topv.php"); ?>




<style type="text/css">
.auto-style1 {
	margin-left: 5px;
	margin-right: 5px;
}
.auto-style2 {
	vertical-align: middle;
}
</style>




</head>

<body style="color: #FFFFFF; background-color: #000000">

<table style="width: 900px" align="center">
	<tr>
		<td class="h2"><br />
		Getting GPS Data into the ASCOM Driver interface of Gemini 2
		</td>
	</tr>
	<tr>
		<td class="style6"><br />
		This guide will help you get the 
		GPS data from a GPS connected directly to the computer into the 
		Gemini.net ASCOM driver.&nbsp; This can then be used to update the 
		Gemini-2 mount controller,
		</td>
	</tr>
	<tr>
		<td class="style6"><br />
		Advantages of using 
		a GPS connected directly to the computer.
		<ul><li>Able to get the GPS data into multiple applications such as 
			TheSky, Maxim DL and also the Gemini.net driver. </li>
			<li>USB GPS units are usually much cheaper to purchase than units 
			that connect directly to a mount.</li>
			<li>Most ASCOM drivers for mounts support getting GPS data from the 
			computer.&nbsp; This means if you have multiple types of mounts that 
			run ASCOM, then one GPS might work for all of them.</li>
			</ul>
		</td>
	</tr>
	<tr>
		<td class="style6">
		So lets get started.  Now these instructions only cover configuring the 
		GPS and sending the data to the Gemini 1 or 2 mount.&nbsp; </td>
	</tr>
</table>


<table align="center" style="width: 900px">
	<tr>
		<td>&nbsp;</td>
	</tr>
</table>


<table style="width: 900px" align="center">
	<tr><td class="style6" width="900px" align="left">
		&nbsp;
		&nbsp;1.  <img alt="" height="82" src="gemini-images/ascom/geminitelescopeicon.jpg" width="55" class="auto-style2" />&nbsp;&nbsp;&nbsp;	
		First Click on the Gemini-2 Icon on your Screen 
		
	</td></tr>
	<tr><td class="style6" width="900px" align="left">
		&nbsp;</td></tr>
</table>

<table style="width: 900px" align="center">
	<tr><td class="style6" width="900px" align="left">
	<ol start="2"><li>
		First make sure you have connected the Driver to the Gemini.&nbsp; Click 
		the <strong>"Connect"</strong> button so that it says <strong>"Disconnect"</strong>. 
		Now click on the <strong>"SETUP"</strong> at the bottom Right 
		of the MENU. This will bring up the next pop-up menu (Fig 2).</li></ol>
		<p align="center">
		<map id="ImgMap2" name="ImgMap2">
			<area alt="" coords="183, 694, 268, 740" href="#comfiguretelbutton" shape="rect" />
		</map>
		<img alt="" height="814" src="gemini-images/ascom/Ascom-HC.jpg" style="float: center" width="281" usemap="#ImgMap2" />
		<br /> Fig. 1 
		</p>
		</td>
		</tr>
</table>
<table style="width: 900px" align="center">
	<tr><td class="style6" width="900px" align="left">
	<ol start="3"><li>
		<a name="comfiguretelbutton"></a>Select 
		on "Configure Telescope" from this Menu which is the first selection</li></ol>
		<p align="center"	>
		<map id="ImgMap0" name="ImgMap0">
			<area alt="" coords="16, 258, 76, 282" href="http://www.gemini-2.com/Gemini2_drivers/Gemini_Telescope_Net_Installation_and_Operation.pdf" shape="rect" target="_blank" />
			<area alt="" coords="20, 11, 247, 44" href="#configuretelescope" shape="rect" />
		</map>
			
		<img alt="" class="auto-style1" height="393" src="gemini-images/ascom/menuselection.jpg" style="float: center" width="388" usemap="#ImgMap0" />
		<br />Fig. 2</p>
	</td></tr>
</table>
<br />
<table style="width: 900px" align="center">
	<tr><td class="style7" width="900px" align="left">
	<a name="configuretelescope"></a>
			
		<map id="ImgMap3" name="ImgMap3">
			<area alt="" coords="323, 472, 522, 500" href="#gps" shape="rect" />
		</map>
			
		<img alt="" height="581" src="gemini-images/ascom/config-gps.jpg" width="750"  usemap="#ImgMap3" /><br />Fig. 3
		</td></tr></table>		

<table style="width: 900px" align="center">
	<tr><td class="style6" width="900px" align="left">

		<a name="gps"></a>
		<ol start="4">
		<li>Now click on the GPS setting box in the lower middle of the screen. 
		The below menu should pop up.<br /></li>
		<p align="center">
		<img alt="" height="342" src="gemini-images/ascom/quere-gps.jpg" width="399" usemap="#ImgMap3" /><br />Fig. 4</p>
		<br />
		<li>Now make sure that the correct Com Port is selected.</li>
			<li>Make sure the baud rate matches your GPS receivers baud rate. It 
			it does not then you will get an invalid Data error.</li>
			<li>Now Click on the Query button to the right of the baud rate box.</li>
			<li>You should see the GPS data update as in the below figure. <br />Check the 
			<strong>"Update Clock" </strong>checkbox to have the GPS update the Computer's Clock also.</li>
			</ol>
		<p align="center">
		<img alt="" height="342" src="gemini-images/ascom/get-gps.jpg" width="399" usemap="#ImgMap3" />
		<br />Fig. 5</p>
		<ol start="9">
		<li>
		<p class="style6">Now you can close the GPS window and use the Set Now button in the Set 
		Site box and the Set Now button and the Set Time box to transfer the setting to the Gemini 
		using the Configure Telescope Menu.  
		See Fig. 6 below. <br />Please note
		that you will have had to hit the connect button in the Hand Control 
		Menu (Fig. 1), which If connected, the "Connect/Disconnect" button in Fig 1 will say
		"Disconnect"</p>
		</li>
		</ol>
	</td></tr>
	</table>
	<table style="width: 900px" align="center">
	<tr><td class="style7" width="900px" align="center">
	

		<img alt="" height="536" src="gemini-images/ascom/after-gps.jpg" width="750" />
	</td></tr></table>
<table  align="center" style="width:900px">
	<tr>
		<td class="style7whiteborder" >
		Page last updated on Jun 29, 2015
		</td>
	</tr>
</table>


</body>


<?php include("bottom.php"); ?>




</html>
