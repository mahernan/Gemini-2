<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Gemini 2 Mount Controller</title>

<link href="gemini-2.css" rel="stylesheet" type="text/css" />


<?php include("topv.php"); ?>



</head>

<body style="color: #FFFFFF; background-color: #000000">


<table align="center" style="width: 900px">

	<tr>
		<td class="h3">Simple Rules that Gemini-2 Uses</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		The below rules are from Dr. René <span lang="de">Görlich&nbsp; (Dr.<span lang="en-us">-</span>Ing</span> 
		stands for Doctor of Engineering) Writer of Gemini-1 and Gemini-2 
		firmware, in a post to the Gemini-2 Users Group.
		</td>
	</tr>
	
	<tr>
		<td class="style6">
		<br />
		"I suppose the term "meridian flip" is a bit misleading. <br />
		<br />
		I will try to collect the few simple rules Gemini uses.
<br /><br />
		1) A GEM has to flip to reach all parts of the sky, but not necessarily when moving over the meridian.
<br /><br />
	2) The safety limits define the areas that is reachable with the telescope on the East or the West side of the mount.
<br /><br />
	3) The limits should overlap (>90 degrees) or "target unreachable" messages may show up.

<br /><br />
	4) A flip occurs exactly at the moment when the DEC axis crosses the North or South pole. Many things change here: The direction in which DEC (88, 89, 90, 89, 88, ...) is derived from the telescopic physical coordinates (which you can watch at the "state" web page), the hour angle switches 12 hours and also the G2 model is switched.

<br /><br />
	5) Unless a GoTo with a flip is requested, Gemini always tries to reach the object w/o flipping. The decision is done including the modeling.
<br /><br />
	6) Beside the safety limits, an additional "Western GoTo limit" imposed. It defaults to 2.5 degrees. With 15 degrees/hour, this allows for 10 minutes tracking of the target before the western limit is reached. If you need more time, increase this GoTo limit. There still has to be an overlap of East and (West - Western GoTo) limit.

<br /><br />
		7}As a consequence of this, an object near the meridian within that overlap can be pointed to from both side. It can also be used for both models.

<br /><br />
		8)If you want to enforce a flip during modeling, just select a star at the selected 
		hemisphere at a high positive or negative hour angle to be sure that it will be outside the overlap area.

<br /><br />
	I hope this helps. Please feel free to extend and improve the 
		write-up...

<br />
		<br />
		René" <br />
		<br />
		I Tom Hilton would like to add to step 8 that picking a star with at 
		least an hour angle of 4.6HA to 6HA will more than likely cause a 
		meridian flip.</td>
	</tr>
</table>

</body>




<?php include("bottom.php"); ?>



