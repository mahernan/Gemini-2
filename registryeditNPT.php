<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
      "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en-US">
<head profile="http://www.w3.org/2005/10/profile">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta content="en-us" http-equiv="Content-Language" />
<title>Edit Registry NPT</title>


<?php include("topv.php"); ?>


<link href="gemini-2.css" rel="stylesheet" type="text/css" />


</head>

<body style="color: #FFFFFF; background-color: #000000">


<table align="center" style="width: 900px">

	<tr>
		<td class="h3">How to Edit Registry to enable NPT</td>
	</tr>
</table>
<br />
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		 
		Follow the below steps to manually registry the windows registry to 
		allow for local Network tiem protocal.</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style7">
		<img alt="" height="272" src="gemini-images/NPTEdit/NPT1.jpg" width="456"><br />Image 1</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		
		1. Open Registry Editor "regedit"&nbsp; The easiest way is to type 
		"Windows key" plus "R" at same time.<br>then enter regedit in box and 
		click open.<br /><br /></td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style7">

		<img alt="" height="273" src="gemini-images/NPTEdit/NPT2.jpg" width="332"><br />Image 2</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		2.&nbsp; Doubleclick on "HKEY_LOCAL_MACHINE"<br /><br />
		</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style7">
		&nbsp;
		<img alt="" height="314" src="gemini-images/NPTEdit/NPT3.jpg" width="288"><br />Image 3</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		3. Doubleclick on "SYSTEM"<br /><br />
		
		</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style7">

		<img alt="" height="597" src="gemini-images/NPTEdit/NPT4.jpg" width="900"><br />Image 4</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		4. Doubleclick on "CurrentControlSet"<br /><br />
		</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style7">
		&nbsp;
		<img alt="" height="597" src="gemini-images/NPTEdit/NPT5.jpg" width="900"><br />Image 5</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		6. Doubleclick on "Services"<br /><br />
		</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style7">
		
		<img alt="" height="597" src="gemini-images/NPTEdit/NPT6.jpg" width="900"><br />Image 6</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		&nbsp;
		7. Scroll down to "W32Time"&nbsp;&nbsp; It will be close to the bottom 
		of the window.<br /><br /></td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style7">
		
		<img alt="" height="597" src="gemini-images/NPTEdit/NPT7.jpg" width="900"><br />Image 7</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		8.&nbsp; Doubleclick of 'W32Time"&nbsp; Under that is a "Parameters" 
		entry.&nbsp; See Image 8. You need to right click on that and in the box that pops up 
		select "New".&nbsp; Another selection will pop up.&nbsp; Select "DWORD 
		(32-bit) Value.<br>Enter "LocalNPT" without the parenthesis in the space 
		provided.&nbsp; If you can 
		enter the value 1 in the Value data box do so.&nbsp; Sorry but I cannot 
		capture all of the figures necessary to show this.<br /><br />
		</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style7">

		
		<img alt="" height="599" src="gemini-images/NPTEdit/NPT11.jpg" width="900"><br /> Image 8</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		Hilite the line LocalNTP Reg_DWORD 0x00000000 (0) and right click on it. 
		Select Modify. A box will pop up as shown in Image 9.&nbsp; Put a 1 in 
		the Value Data box and hit OK.<br /><br />
		</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style7">
		<img alt="" height="600" src="gemini-images/NPTEdit/NPT12.jpg" width="900"><br />
		Image 9<br /><br />
		</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		The Parameters entry should look Image 10 afer you refrest the page.
		You can close the registry editor by hitting the X in upper right corner or under File and exit.
		</td>
	</tr>
</table>



<table align="center" style="width: 900px">
	<tr>
		<td class="style7">
		
		<img alt="" height="597" src="gemini-images/NPTEdit/NPT9.jpg" width="900"><br />Image 10</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		&nbsp;
		</td>
	</tr>
</table>
 <table  align="center" style="width:900px">
	<tr>
		<td class="style7whiteborder" >
		Page last updated on Sept 10, 2016 		</td>
	</tr>
</table>



</body>




<?php include("bottom.php"); ?>



