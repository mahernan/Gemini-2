
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
      "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en-US">
<head profile="http://www.w3.org/2005/10/profile">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta content="en-us" http-equiv="Content-Language" />
<title>Gemini-2 Mount type gearing</title>


<?php include("topv.php"); ?>

<link href="../../gemini-2.css" rel="stylesheet" type="text/css" />

</head>

<body style="color: #FFFFFF; background-color: #000000">



<table align="center" style="width: 950px">
	<tr>
		<td class="h2">This is the default gearing setting on the Gemini-2 Models by type</td>
	</tr>
</table>
<table align="center" style="width: 950px">
	<tr>
		<td class="style7">
		This is the default Gearing settings for the different types of mounts, 
		in the Gemini-2 as&nbsp; of&nbsp; March 17, 2017 firmware and later.</td>
	</tr>
	</table>


<table align="center"  style="width: 950px" class="style5a" border="2">
	<tr>
		<td width="150" class="style5a" align="center"></td>
		<td width="100"class="style5a" align="center">G8</td>
		<td width="100" class="style5a" align="center">G11/<br />G11G</td>
		<td width="100" class="style5a" align="center">HGM200/<br />MI250</td>
		<td width="100" class="style5a" align="center">Titan 25<br />note 4</td>
		<td width="100" class="style5a" align="center">Titan<br />note 3</td>
		<td width="100" class="style5a" align="center">G11T<br />Note1</td>
		<td width="100" class="style5a" align="center">G811<br />note2</td>
		
	</tr>
	<tr>
		
		<td align="left">RA Worm</td>
		<td align="center">180</td>
		<td align="center">360</td>
		<td align="center">-360</td>
		<td align="center">-270</td>
		<td align="center"> -270</td>
		<td align="center">-270</td>
		<td align="center">360</td>
		
	</tr>
	<tr>
		<td align="left">Dec worm</td>
		<td align="center">180</td>
		<td align="center">360</td>
		<td align="center">-360</td>
		<td align="center">-270</td>
		<td align="center"> -270</td>
		<td align="center">360</td>
		<td align="center">180</td>
		
	</tr>
	<tr>
		<td align="left">RA Spur Gear</td>
		<td align="center">25</td>
		<td align="center">25</td>
		<td align="center">25 </td>
		<td align="center">25</td>
		<td align="center"> 50 </td>
		<td align="center">25</td>
		<td align="center">25</td>
		
	</tr>
	<tr align="center">
		<td align="left">DEC Spur Gear</td>
		<td>25</td>
		<td>25</td>
		<td>25</td>
		<td>25</td>
		<td> 50 </td>
		<td>25</td>
		<td>25</td>
		
	</tr>
	<tr align="center">
		<td align="left">RA Motor Encoder</td>
		<td>256</td>
		<td>256</td>
		<td>256</td>
		<td>256</td>
		<td> 256</td>
		<td>256</td>
		<td>256</td>
		
	</tr>
	<tr align="center">
		<td align="left">Dec Motor Encoder</td>
		<td>256</td>
		<td>256</td>
		<td>256</td>
		<td>256</td>
		<td> 256 </td>
		<td>256</td>
		<td>256</td>
		
	</tr>
	<tr align="center">
		<td align="left">Default RA Motor Direction</td>
		<td>CCW</td>
		<td>CCW</td>
		<td>CW</td>
		<td>CW</td>
		<td> CW</td>
		<td>CW</td>
		<td>CCW</td>
		
	</tr>
	<tr align="center">
		<td align="left">Default DEC Motor Direction</td>
		<td>CCW</td>
		<td>CCW</td>
		<td>CW</td>
		<td>CW</td>
		<td> CW</td>
		<td>CCW</td>
		<td>CCW</td>
		
	</tr>
	<tr align="center">
		<td align="left">Serial Mount #</td>
		<td>1</td>
		<td>2</td>
		<td>3</td>
		<td>4</td>
		<td> 6</td>
		<td>7</td>
		<td>8</td>
		
	</tr>
</table>
<table  align="center" style="width:950px" >
	<tr>
		<td class="style6-border-white">
		Note 1: is a Titan RA and a G11 DEC.&nbsp;&nbsp;&nbsp; Note 2: Is a G11 
		RA and G8 Dec,&nbsp; Note 3: The Titan 50 type is now just Titan,&nbsp; 
		Note 4:The Titan 25 is no longer selectable. The HGM200 and MI250 have 
		been combined.&nbsp; The Serial mount # for the MI250 of 4 still exist 
		in the firmware. The HGM200 serial Mount # is 5.<br />
		The Worm Ratio Count for RA and DEC are the number of teeth on the large Worm gear.<br />
		The RA and DEC Spur gear is the reduction ratio of the Gearbox.<br />
		The RA and DEC Motor encoder is the number of encoder ticks on the encoders 
		located on the end of&nbsp; the motors.
		</td>
	</tr>
</table>
<table  align="center" style="width:950px" >
	<tr>
		<td class="style6-border-white">
		The way to tell a Titan 50 from a Titan 25, is that the Titan 50 has a sliver 
		with rounder corners worm block, while a Titan 25 has a more squared black worm block.&nbsp; 
		Note: The
		Titan 50 has a 2:1 ratio gearing leading into the worm assembly, which 
		is after the 25:1 gearbox, resulting in a total 50:1 Equivalent Spur 
		Gear count.</td>
	</tr>
</table>
<table  align="center" style="width:950px">
	<tr>
		<td class="style7whiteborder" >
		Page last updated on June 25, 2018 		</td>
	</tr>
</table>


</body>



<?php include("bottom.php"); ?>


