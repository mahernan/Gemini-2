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
		<td class="style7" width="450px">
		<map id="ImgMap0" name="ImgMap0">
			<area alt="" coords="306, 529, 441, 607" href="E012.php" shape="rect" />
		</map>
		<img height="611" src="En-Images/En-park_modes.jpg" usemap="#ImgMap0" width="450" /><br /> 
		Park Modes Menu</td>	
		
		
		<td class="style6" width="450px">
		<br />
					Every Move or
					Mode 0 - Every command that moves the mount wakes the 
					mount up (current state). This includes pressing the 
					directional buttons, changing the tracking rate, using any 
					of the Un-Park button. If a computer is tied to the 
					controller, then any command from it can also wake up the 
					mount and it start tracking in RA.&nbsp; I highly recommend 
					using parking mode 2.&nbsp; It is less convenient, but a 
					much safer parking mode.&nbsp; This is the default mode, and is the 
					only mode in firmware before July 27, 2013<br />
					
					<br />Goto Command or Mode 1 -&nbsp; HC directional buttons, classical HC and 
					AG inputs are ignored, but "GoTo" commands and un-park 
					commands wake it up.<br />
					
					<br />Explicit Wakeup or Mode 2 - Only a Un-Park command :hW# will wake the mount up.&nbsp; 
					This mode is there to provide compatibility with the ASCOM 
					standard rules.&nbsp; The Un-Park buttons in the hand 
					controller, Web interface, and the Un-Park command in the 
					ASCOM driver send this string to the mount.&nbsp; The ASCOM 
					driver now has a check box under Configuring Park, that will 
					select this mode of Operation.&nbsp; Please note that 
					parking or un-parking does not change from one mode to the 
					other.&nbsp; Only the Un-Park command in the ASCOM driver 
					and HC will start tracking again.
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


