<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text..html; charset=utf-8" http-equiv="Content-Type" />
<title>Park Menu</title>

<?php include("topv.php"); ?>


<link href="
/gemini-2.css" rel="stylesheet" type="text/css" />

</head>
<body style="color: #FFFFFF; background-color: #000000" class="h1" >
<table align="center" style="width: 900px"><tr>
		<td class="h5" align="center">Interactive Hand-Controller Menus - click on green button to Navigate</td>

	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6" width="450px">
		<map id="ImgMap0" name="ImgMap0">
			<area alt="" coords="16, 399, 433, 479" href="E014a.php" shape="rect" />
			<area alt="" coords="14, 519, 282, 594" href="E014b.php" shape="rect" />
			<area alt="" coords="310, 517, 443, 595" href="E012.php" shape="rect" />
		</map>
		<img height="611" src="En-Images/En-Sleep-telescope.jpg" usemap="#ImgMap0" width="450" />
		<br />
		The Park Mode button will take you to a menu where you can select one of 
		the three parking modes.<br /></td>	
		
		
		<td class="style6" width="450px">
		This menu provides 3 park positions and the capability to stop tracking and start tracking.<br />
		<br />
		The Park at CWD (counter weight down) will park the mount where it was 
		positioned when you first turned it on.&nbsp; It assumes this is the CWD 
		position.&nbsp; Parting the mount should stop all tracking.<br />
		<br />
		You use this startup position for COLD STARTS and WARM STARTS. If you 
		have already built a model, you will need to go to a star, center it, and 
		do a SYNCHRONIZE so that the telescope really knows where it is.<br />
		<br />
		Once you set a HOME position, you can park at that HOME position and 
		start up by using a WARM RESTART from that position. No SYNCHRONIZE is 
		needed assuming you have already built a model. To set a home position, 
		move the telescope to the desired Home position. Then hit the Set Home 
		position button.&nbsp; Note: that all park, and home positions are 
		either relative to the CWD position.<br />
		<br />
		You can stop tracking by using the Sleep Telescope button and start 
		tracking again by using the Wakeup Telescope button. Note: the latest 
		version of this function has been changed into one button that changes 
		between Sleep Telescope (left menu) and Wakeup Telescope (right menu).&nbsp; 
		Shown by providing both menus side by side. <br /><br />
		There has been added a Part at Zenith
		button.&nbsp; This parks the telescope straight up.&nbsp; This could be 
		used to talk flats. 
		</td>
		
	</tr>
</table>
<!--
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		&nbsp;</td>
	</tr>
</table>
-->
</body>

<?php include("bottom.php"); ?>


