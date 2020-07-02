<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>G2 Serial Port Modes</title>
<link href="http://gemini-2.com/gemini-2.css" rel="stylesheet" type="text/css" />



<?php include("topv.php"); ?>




<style type="text/css">
.auto-style1 {
	text-decoration: underline;
}
</style>




</head>

<body style="color: #FFFFFF; background-color: #000000">

<table align="center" style="width: 80%">
	<tr>
		<td class="h2">
			Installing the USB drivers using Hardware Wizard
			</td>
	</tr>
	<tr>
		<td class="style6">
			<br/>Please download and unzip the appropriate driver to an empty directory before doing either the WIN7 or XP install instructions below. Links to 			the drivers:  
				<a href="Gemini2_drivers/Gemini2_32bit_USB_driver.zip" target="_blank">Gemini-II.inf</a> file for 
				32 bit or 
				<a href="Gemini2_drivers/Gemini2_64bit_USB_driver.zip" target="_blank">Gemini-II64.inf</a> for 64bit.<br /><br />For Windows 7:<br />
			Plug in the Gemini-II into your computer.  Yes you will get a message that
			it cannot install this device.  The following steps should fix that.&nbsp; 
			Also download the appropriate driver and unzip it to a new empty 
			folder that is easy to browse to.<br />
			<ol><li>Click the Start Button, in Windows.&nbsp; In the search box, type 
				<strong><em>RUN</em></strong>, then <strong><em>hit ENTER</em></strong>.</li>
				<li>In the Run dialog box type <span class="auto-style1">
				<strong><em>hdwwiz</em></strong></span> and then click <em>
				<strong>OK</strong></em></li>
				<li style="height: 25px">In the Add Hardware Dialog box click 
				<em><strong>NEXT</strong></em></li>
				<li>Select the option to install hardware manually, then click 
				<em><strong>NEXT</strong></em>.</li>
				<li>The wizard will scan your computer, and show a list of 
				devices. Just ignore&nbsp; these.</li>
				<li>Select the NEXT button, then select <em><strong>HAVE DISK</strong></em>.</li>
				<li>Browse to where you have unzipped the 
				<a href="Gemini2_drivers/Gemini2_32bit_USB_driver.zip" target="_blank">Gemini-II.inf</a> file for 
				32 bit/x86 or 
				<a href="Gemini2_drivers/Gemini2_64bit_USB_driver.zip" target="_blank">Gemini-II64.inf</a> for 64bit/x64</li>
				<li>Select the correct INF file and click <em><strong>OPEN</strong></em></li>
				<li>On the Install from Disk menu, now click <strong><em>OK</em></strong></li>
				<li>You will probably get a message that this driver is not 
				"Digitally Signed." If you do, just click <strong><em>NEXT</em></strong>.</li>
				<li>You will get a message box, Ready to install your hardware. 
				Click <strong><em>NEXT</em></strong>.</li>
				<li>You will get a message that the Publisher cannot be 
				Verified.&nbsp; Click I<strong><em>NSTALL THIS DRIVER ANYWAY</em></strong>.</li>
				<li>You should get a message that the Gemini VCom Driver was 
				installed.</li></ol>
				<br />
				You should now see this driver as a com port in Device manager. You can
				use device manager to change it if necessary.<br /><br />
		</td>
	</tr>
		<tr><td class="style6">
		<hr />		
			<h3 >Windows 8</h3>
			
			<p>The USB drivers are not signed drivers. Therefore Windows 8 is going to
			refuse installing the drivers with a message that you cannot install 
			unsigned drivers.&nbsp; Here is the way around that. </p>
			<p>To install the drivers you need to load the driver during the start of the system. Here 
			are the instructions to load unsigned drivers in Windows 8.</p>
			<ol>
				<li>Make sure you are signed in.</li>
				<li>Press Windows-I to load the Charms Bar.</li>
				<li>Click on Power, hold down the Shift-key, and click on 
				Restart to restart the computer.</li>
				<li>You should see a troubleshooting page come up. Click on 
				Troubleshoot here, and then on the next page on Advanced options.</li>
				<li>Here you find several options, including automatic repair, 
				system image recovery and startup settings. Click on startup 
				setting 
				to change the startup behavior of the Windows 8 operating system 
				and click on Restart again on the next page</li>
				<li>Here you should see an advanced menu with nine different 
				startup options. Press 7 or F7 to disable the driver signature 
				enforcement. Windows 8 should restart the system automatically 
				and&nbsp; now you should be able to install 
				the USB drivers.</li>
				<li>Now you go to the instructions for Windows 7 and proceed 
				with them.</li>
			</ol>
		
		</td></tr>
	</table>

<table align="center" style="width: 80%">
		
	<tr>
		<td class="style6">
<hr />
		For Windows XP:<br />
		The following steps should install the USB.inf file.  Download the appropriate driver and unzip it to a new empty folder that is easy to browse to.
		<ol><li>	Browse to it and	Right-click on the desired INF file (extension must end in .INF). <br />
 			</li>
			<li>Choose the Install option. 
			</li>
			<li>Restart Windows. 
			</li>
			<li>Plug in the Gemini-II into your computer, it should then detect 
			the Gemini-2 and install the driver.<br />
			</li>
		</ol></td>
		</tr>
</table>



<?php include("bottom.php"); ?>




</body>
</html>
