<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text..html; charset=utf-8" http-equiv="Content-Type" />
<title>Semi Automatic Modeling !</title>

<?php include("topv.php"); ?>


<link href="
/gemini-2.css" rel="stylesheet" type="text/css" />

<style type="text/css">
.auto-style1 {
	color: #00FF00;
}
</style>

</head>
<body style="color: #FFFFFF; background-color: #000000" class="h1" >
<table align="center" style="width: 900px">
	<tr>
		<td class="h5" align="center">Interactive Hand-Controller Menus - click on green button to Navigate</td>
	</tr>
</table>

<table align="center" style="width: 900px">
	<tr>
		<td class="style6" width="450px">
		This is the Semi Automatic Modeling Function.<br />
		<br />
		It will automatically pick a star that should be above the horizon and 
		on the east or west side.&nbsp;(it probably will not be the same star shown in 
		the menu on the left.) If you do not want the star it picks simply hit 
		the East button and it will pick another.&nbsp;&nbsp; NOW the EAST 
		Button will mean you are trying to build an Eastern Model.&nbsp; It will 
		not necessary pick a star in the East.&nbsp; Also the West button will 
		mean you are trying to build a Western Model.&nbsp; It also will not 
		necessary pick a star in the West.&nbsp; Use the Model 1 (East) or the 
		Model 0 (West) to tell which model you are really building.&nbsp; Yes 
		this can be confusing.
		
		<map id="ImgMap0" name="ImgMap0">
			<area coords="88, 305, 349, 385" href="En-SAE-02.php" shape="rect" />
			<area coords="262, 193, 400, 284" href="En-SAW-01.php" shape="rect" />
		</map>
		<img height="611"src="En-Images/En-SAE-1.jpg" width="450"usemap="#ImgMap0" /><br />
				Also stars on the west side that are close to 
		the meridian can be added to the East model.&nbsp; If the mount does not 
		pass 90 degrees in Dec (IE do a meridian flip, then you are still building 
		a model on the east.&nbsp; The same holds true when going from a model 
		being built on the west to the east. This is actually designed this way 
		to help refine each model as you move from east to west or west to east.<br />
		
		<br />
		If you are happy with the star it selects, then hit "GOTO".&nbsp; This 
		tutorial does not let you select different stars - so Please hit GOTO.
		<br />

		
		</td>
		
		<td width="10px"></td>
		<td class="style6"><br />
		Please refer to the 
		<a href="../Simple_Rules_Gemini_Uses.php" target="_blank">rules that the Gemini-2 uses</a> to determine how it reacts to inputs.
		<br />
		<br /><span class="auto-style1">Please Note: The best way is to start with objects is for the first two to 
		be at least 4 hours or more away from each other, and then add more objects in 
		between them. So far the HC checks only for HA and elevation, not for 
		distances between the objects, but the hour angles are displayed for 
		each object, so you can select it manually. Some times stars seem to be 
		far away from each other despite having similar right ascensions.&nbsp; 
		Doing this will insure that the model converges more quickly to a set of 
		good parameters. In other words, just do not take the stars in the order 
		they appear.&nbsp; Use the East or West button to Select you first two 
		stars on each side as far apart as possible, without causing a meridian 
		flip.<br />
		</span>
		<br />
		If you want to do a star 
		on the other side , just hit the West/East buttons.&nbsp; (if already on the 
		West side and want to do a star on the East, Select East. If on the east 
		and want to do a star on the west, select West.) <br />
		<br />
		<span class="style3">(Note: 
		This will not select the other model, it will only select a star on the 
		other side.&nbsp; If you hit the West or East button and the mount thinks it can reach it without 
		doing a meridian flip, it will try and go to it without the flip. You 
		really need to make sure that your limits are set. If they are not, then 
		the mount could hit and do damage to your telescope or mount. Also 
		notice that&nbsp; (continued below)
		</span> <span class="style14"><br />
		<br />
		<u><strong>To change to the other model, the mount must 
		do a meridian flip or move the DEC through either the north or south 
		pole.</strong></u> Select a star with a HA that is +/- 4.6 or greater.&nbsp; This  
		almost always insures a meridian flip and a switch to the other model.&nbsp; 
		The mount will only do a meridian flip if it is safe to do so.</span><br />
		<br />
		<span class="style3">The HA angle and El are shown for the selected GOTO target.  Now if you want 
		to select the other model, 
		Let's make it easy ... just push the other side (East/West) button of the model builder screen 
		until you get a star offered that is at 4.6 to 6 hours in HA or more and the flip is 
		almost guaranteed. <br />
		<br />
		</span>Also to ensure good meridian flips, while building a 
		model use an alignment star that is close to zenith that can be added to 
		the model on both sides of the meridian.&nbsp; This will help with 
		better GOTO's and better meridian flips 
		<br />
		<br />
		If you have software that can Plate Solve, You can use it to build a model.
		See G2<a href="
/faqGII.php#Q28" target="_blank">FAQ#28</a><br />
		<br />
		</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		</td>
	</tr>
</table>
<table  align="center" style="width:900px">
	<tr>
		<td class="style7whiteborder" >
		Page last updated on April 15, 2017
		</td>
	</tr>
</table>
</body>

<?php include("bottom.php"); ?>


