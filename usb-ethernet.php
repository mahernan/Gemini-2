﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
		<td class="h3">Alternative way around USB drivers</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		</td>
	</tr>
</table>
<table align="center"  class="tableborder1" style="width: 900px">
	<tr>
		<td class="style6">The Gemini-2 USB drivers really only support Win XP 
		and Win 7 with no problems.&nbsp; Win 8 and Win 8.1 does not like 
		non-Microsoft signed Drivers, and balk at there installation.&nbsp; The other 
		disadvantage of using the USB port, is that it does not give you access 
		to the very versatile Web interface built into the Gemini-2.&nbsp; </td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">&nbsp;</td>
	</tr>
</table>
<table align="center"  class="tableborder1" style="width: 900px">
	<tr>
		<td class="style6">Here is one way around the above problems, and still 
		allow you to use USB ports from your computer.</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">&nbsp;</td>
	</tr>
</table>
<table align="center"  class="tableborder1" style="width: 900px">
	<tr>
		<td class="style6">Get a USB to Ethernet adapter.&nbsp; This will add an 
		extra Ethernet port to your computer.&nbsp; Use this Ethernet port 
		directly into the Gemini-2.&nbsp; </td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">&nbsp;</td>
	</tr>
</table>
<table align="center"   class="tableborder1" style="width: 900px">
	<tr>
		<td class="style6">And Example:<br />
		Your Computer's USB Plug --&gt; Standard USB cable --&gt; Powered USB Hub --&gt; USB to Ethernet 
		Adapter --&gt; Ethernet cable --&gt; Gemini-2 Ethernet port.<br />
		The USB hub can also be driving Camera's, Focusers and other USB devices 
		at the same time. That is why I recommend a powered USB hub. The 
		Plugable Ethernet adapter requires 500MA of power and that is all one 
		USB port can supply, so a powered USB Hub is a must.</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">&nbsp;</td>
	</tr>
</table>

<table align="center"  class="tableborder1" style="width: 900px">
	<tr>
		<td class="style6">Please be advised that you will have to use the ASCOM 
		driver to make it look like a com port.&nbsp; But&nbsp; using 
		it as
		an Ethernet port is so much better.&nbsp; The ASCOM driver has both UPD and TCP 
		protocols built in.&nbsp; 
		Within the TCP protocols is a com port emulator, which
		will accept any of the normal commands set via a com port or USB port, 
		but at a much faster execution rate.<br />
		In the Drop 
		<a href="http://www.gemini-2.com/configuringEthernetASCOMdriver.php" target="_blank">down menu for connecting</a>, select Ethernet.&nbsp; Any ASCOM 
		compatible program will then connect, even though they think they are 
		communicating through a com port, they are really using Ethernet. <br />
		<div class="moz-cite-prefix">
		</div>
		</td>
	</tr>
</table>

<table align="center" style="width: 900px">
	<tr>
		<td class="style6">&nbsp;</td>
	</tr>
</table>

<table align="center"  class="tableborder1" style="width: 900px">
	<tr>
		<td class="style6">I suggest the USB to Ethernet adapters by Plugable 
		devices.&nbsp; The one I use is a
		<a href="http://plugable.com/products/usb2-e1000" target="_blank">
		10/100/1000 Gibabit USB 2.0 device</a>, available from AMAZON.&nbsp; 
		Plugable devices also makes
		<a href="http://plugable.com/products#usb3-hubs" target="_blank">Powered 
		USB Hubs.</a></td>
	</tr>
</table>

</body>




<?php include("bottom.php"); ?>



