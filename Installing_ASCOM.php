<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
      "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en-US">
<head profile="http://www.w3.org/2005/10/profile">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta content="en-us" http-equiv="Content-Language" />
<title>Installing ASCOM</title>


<?php include("topv.php"); ?>


<link href="gemini-2.css" rel="stylesheet" type="text/css" />


<base target="_blank">


</head>

<body style="color: #FFFFFF; background-color: #000000">


<table align="center" style="width: 900px">

	<tr>
		<td class="h3">Installing ASCOM</td>
	</tr>
</table>
<br />
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		 
		
			
		If you are using a Windows Computer with Astronomy programs that say 
		they support ASCOM drivers, then you are going to need to install the 
		ASCOM Platform 6.3 and then the Gemini ASCOM Driver.</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		<ol>
			<li>Go to the <a href="http://www.ascom-standards.org/index.htm">
			ASCOM Standards Site</a> and in a box on the right you will see a Download 
			button.&nbsp; This should be the latest version of the ASCOM 
			Platform.&nbsp; Download it and install it.&nbsp; DO NOT INSTALL 
			USING RUN AS ADMINSITRATOR**.&nbsp; Note: ASCOM Platform 6.4 will be 
			released soon.&nbsp; To read about it goto
			<a href="https://github.com/ASCOMInitiative/ASCOMPlatform/releases/tag/Platform6.4RC1">
			ASCOM Platform 6.4 Release C<span style="word-spacing:normal;">andidate</span></a><span style="word-spacing:normal;">.</span></li>
			<li>Next you will need the
			<a href="http://www.gemini-2.com/Gemini2_drivers/GeminiTelescopeInstaller(1.0.72.0).exe">Gemini ASCOM driver</a> and install it.&nbsp; 
			It should be version (1.0.72.0). DO NOT INSTALL USING RUN AS 
			ADMINSITRATOR**.&nbsp; This will also be the 
			latest version released. Please note that this driver requires .Net 
			4.0 Framework. You can
			<a href="https://www.microsoft.com/en-us/download/confirmation.aspx?id=30653">
			download Net 4.5 here</a>.&nbsp; Windows 10 has Net Framework 4.6 
			built in.&nbsp; It might need to be turned on.</li>
			<li>If you have never installed or setup the Gemini.net ASCOM driver then 
			here is instructions for
			<a href="http://gemini-2.com/configuringASCOMfirsttime.php" target="_blank">
			first time Setup</a>.</li>
			<li>If you are going to use Ethernet to connect your Gemini-2 to 
			your computer here are
			<a href="http://www.gemini-2.com/configuringEthernetASCOMdriver.php" target="_blank">
			instructions</a> to do that.</li>
			<li>** If you install the ASCOM programs as ADMINISTRATOR you will 
			have to run any program you want to connect to them as 
			ADMINISTRATOR.</li>
		</ol>
		</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		Please see the "ASCOM/USB/GPS--&gt;ASCOM Related" menu in the top menu bar 
		for more selections.</td>
	</tr>
</table>
<p></p>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		Why use the Gemini.net ASCOM Driver with the Gemini-2: (or Gemini-1)<br>
			<ol>
			<li> It provides a standard interface to the mount that many other software packages can use. 
			It's a convenience and in many cases a requirement.</li>
				<li>  If you want to share the connection to Gemini across two or more software packages, ASCOM is the only game in town today.
				</li>
				<li>  What's more, nearly all programs from small companies and authors require ASCOM because it makes it much easier 
				to develop for a wide variety of mounts (and cameras, and observatory equipment) without investing tens or 
				even hundreds of thousands of dollars to develop and test for each individual mount. 
				Small developers do not have the resources to do so. By developing their software for ASCOM, 
				they automatically provide support for all types of mounts without a major investment.</li>
				<li>  It can be controlled via a Serial Cable, a USB connection 
				or Ethernet (Preferred). (Gemini-1 Serial Only.)</li>
				<li>Able not only control the mount with Ethernet, you can also guide 
			through the same cable. </li>
			<li>If UDP Ethernet connection is used.&nbsp; The speed is extremely fast, 
			even faster that an USB connection. Also the load on the computer is 
			much less.</li>
			<li>ASCOM Driver and Gemini.net ASCOM Driver provides for having many clients 
			connected to the telescope at the same time.&nbsp;&nbsp; The Gemini.net 
			ASCOM driver is a HUB.</li>
				<li>You can use ASCOM drivers along side the Gemin.net ASCOM 
				driver, such as for focusers, Camera's, and Observatory and 
				guiding programs.&nbsp; They will share information between 
				themselfs as needed.</li>
			<li>Guiding through the ASCOM Gemini-2 Driver provides many 
			advantages:<ul>
				<li>The guiding is Synchronous - which means two-way, the 
				Gemini-2 will acknowledge the guiding commands.&nbsp; Using the 
				Guider&nbsp; input this is not possible.</li>
				<li>The guide program can tell the mount how much to guide, 
				instead of a fixed guide pulse.&nbsp; The Guider input relies on an 
				interrupt for the RA signal, but a timer for the DEC, which 
				means DEC guiding pulses possibly can be missed if they are too 
				short.&nbsp; This problem does not exist when using the Ethernet port 
				to guide, using Pulse guiding.</li>
				<li>No guider cable is necessary, therefore almost any camera 
				can be used to guide as long as you have a driver for the 
				camera.&nbsp; The camera does not need guider output plug.</li>
				<li>Less cables means less chances of a ground loop, which can 
				cause possible damage to electronics.&nbsp; Ethernet has a built 
				in transformer to help isolate it's input, thus preventing 
				ground loops.</li>
			
		</ol>
		
		</td>
	</tr>
</table>

<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		
		As an small example you can have TheSkyX, MaximDL, PHD guiding using pulse 
			guiding, all connected at the same time, plus many more of ASCOM 
			compatible programs. A few of the programs that use the ASCOM Driver to connect to the Gemini 
		1 and 2 are:
		<ol>
			<li>The SkyX</li>
			<li>MaximDL</li>
			<li>PHD2</li>
			<li>Sky Tools 3</li>
			<li>Stellarium</li>
			<li>Carte du Ciel</li>
			<li>PemPro</li>
			<li>Many others.&nbsp; See the program you want to use to see if it 
			supports ASCOM.</li>
		</ol>
		
		
		</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		
		&nbsp;&nbsp;
		
		</td>
	</tr>
</table>


 <table  align="center" style="width:900px">
	<tr>
		<td class="style7whiteborder" >
		Page last updated on Aug 5, 2017 		</td>
	</tr>
</table>



</body>




<?php include("bottom.php"); ?>



