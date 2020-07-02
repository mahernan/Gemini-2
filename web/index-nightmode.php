<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Gemini 2 Mount Controller</title>

<link href="
/gemini-2.css" rel="stylesheet" type="text/css" />


<?php include("topv.php"); ?>



</head>

<body style="color: #FFFFFF; background-color: #000000">

<body>



<p class="style7">
<table align="center" style="width: 900px">
<table align="center" style="width: 900px">
	<tr>
		<td class="style7">Here is what the main Web interface page looks like.<br />
		Please note that yours might be different.&nbsp; It depends of the 
		version of the firmware you are running.<br />
		</td>
	</tr> 
	<tr><td></td></tr>
	<tr><td class="style6">
	When you access the web interface by using http://gemini or http://192.168.0.111 or http://your gemini2's IP address,
	<br />a login box will show up.&nbsp;&nbsp; Here is a video showing the 
		process of accessing the
		<a href="
/videos/MP4/get_into_web_interface.mp4" target="_blank">web 
		interface</a><br />
				
</td></tr>
	<tr><td class="style7">
	<img src="
/gemini-images/firmware_update/login.JPG" /><br />
	Enter Admin for the User Name, and leave the password box blank. Hit OK. <br /><br />
	</td></tr>
	<tr><td class="style7">
		
		<map id="ImgMap0" name="ImgMap0">
			<area alt="" coords="395, 285, 461, 308" href="web-state-cgi.php" shape="rect" title="This page show the current state of the Gemini-2"  target="_blank" />
			<area coords="466, 286, 593, 310" href="web-hand-control.php" shape="rect" target="_blank" />
			<area coords="601, 286, 701, 309" href="web-functions.php" shape="rect"  target="_blank"/>
			<area coords="710, 284, 807, 310" href="web-objects.php" shape="rect" target="_blank" />
			<area coords="455, 333, 533, 356" href="web-mount.php" shape="rect" "_blank" />
			<area coords="536, 334, 629, 354" href="web-site-time.php" shape="rect"   target="_blank"/>
			<area coords="639, 334, 741, 356" href="web-modeling.php" shape="rect"  target="_blank" />
			<area coords="478, 425, 706, 447" href="L5V1serial.html" shape="rect" target="_blank" />
			<area coords="514, 356, 607, 379" href="web-sdcard.php" shape="rect" target="_blank"  />
			<area coords="617, 357, 679, 380" href="web-flash.php" shape="rect"  target="_blank" />
			<area coords="554, 402, 709, 425" href="web-firmware-sram.php" shape="rect"  target="_blank" />
			<area coords="379, 380, 476, 402" href="web-network.php" shape="rect" target="_blank" />
			<area coords="481, 381, 565, 403" href="web-access.php" shape="rect" target="_blank" />
			<area coords="573, 380, 703, 401" href="web-serial-ports.php" shape="rect" target="_blank"  />
			<area coords="391, 404, 545, 426" href="web-battery-ports.php" shape="rect"  target="_blank"  />
			<area coords="710, 379, 817, 402" href="web-statistics.php" shape="rect" target="_blank" />
			<area coords="714, 403, 801, 424" href="web-motor.php" shape="rect" target="_blank" />
			<area coords="456, 448, 741, 474" href="Web-video.php" shape="rect" target="_blank" />
			<area coords="483, 311, 720, 333" href="mhc_disclaimer.php" shape="rect" />
			<area coords="463, 631, 573, 654" href="index.php" shape="rect" />

		</map>
		<img alt="" height="679" src="images/index-nightmode.jpg" width="900" usemap="#ImgMap0" /><br />
		Each of the Blue names are a Link into another web page. Click on the 
		name to go to that page. Note each link opens as a separate page.</td>
		</tr>
	<tr><td class="style6">
	<ul>
		<li>
			<span class="style3">
			State</span>
			 - a page that shows the current state of the mount
		</li>
		<li>
			<span class="style3">Hand Control</span>
			 - a small hand control program that gives limited control and Go functions.
		</li>
		<li>
			<span class="style3">Functions</span>
			 - GOTO Coordinate Input, Physical Position Park/Sleep/Wakeup and reboot mount, plus Manage 
			parking modes, PEC control, Classic Hand Controller mode, (Note: this 
			has to be either in Photo or All Speeds mode for the mount to auto guide) 
			and tracking speed selection.
		</li>
		<li>
			<span class="style3">Catalogs</span>
			 -(Previously called Objects) This is a list of all the 
			targets in all the catalogs of the Sky. It also provides a Go-To function.
		</li>
		<li>
			<span class="style3">Mobile Hand Controller</span>
			 - this interface was written by a third party, (who has moved on to building his own 
			mounts). It provides an interface that sizes itself to a mobile phone or tablet and was 
			designed to work from either Android or IPhone devices using the web browser on these devices.;
			It does provide for using the built in GPS of these devices to update the site info. 
			Please note that Scott Losmandy, or <span lang="de">René Görlich</span>  does not sanction this Add-in, or 
			it's use. You use it at your own risk.
		</li>
		<li>
			<span class="style3">Mount</span>
			 - This is where the mount Parameter setup, including mount design, mount type, Gearing, Slew, 
			Move, and Centering Speeds are entered. Also the Safty Limits canbe set on this page.
		</li>
		
		<li>
			<span class="style3">Site/Time</span>
			 - This is where you can enter the time in either Local time or UTC. You can also define the 
			sites that come up on the hand controller. There is also a button to Query a GPS receive if it 
			is connected to serial Port one.
		</li>
		
		<li>
			<span class="style3">Modeling</span>
			 - This is where you can see the model Parameters, change the current model, and store and retrieve 
				models from the micro SDcard inside the Gemini-2 main unit.
		</li>
		
		<li>
			<span class="style3">SD Card</span>
			 - here is where you can see the contents of the micro SDcard inside the Gemini-2. You can also 
				upload files into the micro SDcard here. PLEASE NOTE: There is no delete function to 
				erase a file, once it is uploaded to the micro-SDCard.
				You can also format the complete micro SDcard. You really need to know what you 
				are doing if you use this function. 
				If you do that only FTP functions are left to be able to then update the card, or the
				Gemini Firmware updated can also still update the card.  The other alternative is to 
				remove the card and use a mico-SDCard reader writer to access it's contents.
		</li>
		
		<li>
			<span class="style3">Flash</span>
			 - This is the Flash memory menu. You can upload a new NewGem.bin file using this menu. That is all 
			it allows you to do. It does make sure the file is at the root of 
			the micro SDcard. The SDcard menu will also let you do that, but you 
			have to select the location to load it to.
		</li>
		
		<!--<li>
			<span class="style3">GFU</span>
			 is another 
			utility written by a third party. In this case the gentleman tha 
			produces the Gemini-2 Ascom.net driver. This is the Gemini-2 Firmware Uploader, It is stored on the Micro-SDcard in the 
			Gemini-2, and accessing it will install it on a connected Windows 
			computer, so that newer firmware can be installed using it. On 
			this page you can download the GFU program from the 
			mico-SDcard to your Windows computer. 
			To use this firmware update program, you must have internet connection 
			and a local ethernet connection into the web interface of the Gemini-2.
		</li>-->
		
		<li>
			<span class="style3">NetWork</span>
			 - This is where you can see and set the current and stored setting for all networking parameters.
		</li>
		
		<li>
			<span class="style3">Access</span>
			 - This is where you can add a password to the Web interface.
		</li>
		
		<li>
			<span class="style3">Serial Ports</span> 
			- This is where you can set the baud rate for the serial ports. 
			Please note that Serial Port Baudrate need to be 57600 if the hand 
			controller is going to work.
		</li>
		
		<li>
			<span class="style3">Statistics</span>
			 -  This is the TCP Socket status page. It is read only.
		</li>
		
		<li>
			<span class="style3">Battery, Ports</span>
			 - This page shows the Power Supply voltage and the Internal Lithium Battery voltage (a CR2354 
		replaceable battery) Also show is the pin status of all the ports.
		To see the pin status Periodiclly you will have to select Periodic 
		Port E usage can also be defined on this page. To use 
		any of the Port F pins, they have to be checked. But it seems that 
		this state is not retained after leaving the page.
		</li>
		
		<li>
			<span class="style3">Firmware/Sram</span>
			 - This is the page where you can see what current firmware is installed. Please note that we 
		normally go by the build date to determine the firmware version. 
		This menu also allows for flashing the NewGem.bin file into the main 
		processor. The NewGem.bin file contains all of the Gemini-2 
		instruction and code. There are many other files that reside on 
		the micro SDcard, and in the Internal SRAM (battery backed up) that must 
		to there for proper operation of the Gemini-2. You can also store 
		the SRAM contents into the micro SDcard for later retrieval.
		</li>
		
		<li>
			<span class="style3">Servos</span>
			 - This page allows you to see the Motor State and setting, and 
			 allow you to set the Thresholds for the 
			warning messages shown on the hand controller. Please be very 
			careful when you set these setting as you can damage the motor's or 
			motor drive circuits, is set wrong.
		</li>
			
		<li>
			<span class="style3">Serial Command Set</span>
			 - This is a listing of all the serial commands that the Gemini-2 accepts, through it serial port, USB port, Ethernet Port, 
		and from the Graphics Hand controller.
		</li>
		
		<li>
			<span class="style3">Videos By Scott Losmandy</span>
			 - The 15 videos that Scott Losmandy produced to show how to use the Gemini-2, Position the mount to CWD, and use the 
			Polar Scope Illuminator are stored on the mico SDcard, and with an 
			external web browser connected through the ethernet port, they can be 
			view directly from the Gemini-2 micro SDcard.
		</li>
	</ul>
	<bt />
	<ul>
		<li>Please note that at the bottom of each screen is a 
		selection for Night mode - Day mode. Click night mode on the above 
		image to see an example of what night mode would look like. In 
		this tutorial, this is the only page that has a night mode screen shown. 
		The Gemini-2 has night modes for all screens.
		</li>
		<li class="style6-Yellow">
		On the bottom of each page, except "Hand 
		Control (HC)", "Mobile Hand Control (MHC)", "Serial Command Set" and		
		"PAA Tutorial" there should be a "HOME" button, use that to return to 
		this page.</li>
			</ul></td></tr>
			<tr><td></td></tr>
			<tr><td>You can write your own web page for the Gemini-2 by using the CGI codes 
				as described in the Pdf or TXT documents included in the
				<a href="
/downloads/CGICodes/CGIcodes.zip" target="_blank">
				CGIcodes.zip</a> from the link in the sentence. One you 
				create a web page, generate a directory for it on the micro 
				SDcard in the main unit, and then create a link to it on the 
				index.htm file in the English directory, by editing that file. 
				You can use many of the other tabs as an example of the code. 
				The Mobile Hand Controller is the result of a user doing just 
				that.</td></tr>

<table align="center" width="900px" class="tableborder1">
	<tr><td class="style6-border-white"><em>If your Gemini-2 is connected Via Ethernet, 
		turned ON, and 
		Responds to <a href="http://gemini" target="_blank">http://gemini</a> then this link 
		will open this page in the Gemini-2 web interface, after prompting for a 
		log-in.</em></td></tr>
</table>
<table  align="center" style="width:900px">
	<tr>
		<td class="style7whiteborder" >
		Page last updated on 
		Feb 20, 2016
		</td>
	</tr>
</table>

</body>




<?php include("bottom.php"); ?>


