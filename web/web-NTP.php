<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
      "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en-US">
<head profile="http://www.w3.org/2005/10/profile">
<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon"/>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta content="en-us" http-equiv="Content-Language" />
<title>Network Time Protocal</title>


<?php include("topv.php"); ?>


<link href="../gemini-2.css" rel="stylesheet" type="text/css" />


<style type="text/css">
.auto-style1 {
	border-style: solid;
	border-width: 2px;
}
</style>


<base target="_blank">


</head>

<body style="color: #FFFFFF; background-color: #000000">


<table align="center" style="width: 900px">

	<tr>
		<td class="h3">Network Time protocal</td>
	</tr>
</table>
<br />
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		Firmware dated August 23 2016 and after have the capibility of getting 
		the time and date from a network time server. We call this NTP for 
		short.
		This page will show you how you can select the proper IP address so that 
		the NTP function can get the time from the NTP server of your choice.&nbsp; 
		There are mainly two options.&nbsp; From your local computer, or from a 
		Time server on the internet.&nbsp; For the links on this page to 
		function, your Gemini-2 must be turned on, and it must be able to access 
		the internet.&nbsp; It also must accept "NetBios" commands for 
		http//gemini/ to work instead of http://IP address. In other words you 
		must be able to see the Gemini 2's Web page with a web browser by typing 
		http://gemini/<br /><br /></td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		From a Internet time server:
		</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6" width="10px">
		</td>
		<td class="style6" width="500px">
		<ol>
			<li>The Picture on the right is a link to the NIST Time servers in the USA.  
		Clicking on the picture will open up that web page in a seperate page or 
		tab. </li>
			<li>You can use just about any of the listed
		IP address in the "Network Time Server box" on the
			<a href="http://gemini/network.cgi" target="_blank">Network</a> Web page in 
		the Gemini-2.&nbsp;&nbsp; The Network link requires your Gemini-2 to be 
			turned on, connected via Ethernet, and accept netbios names.&nbsp; 
			Otherwise go to the web interface of the Gemini-2 and select 
			network.&nbsp; An example page is
			<a href="/web/web-network.php" target="_blank">
			here</a>.</li>
			<li>Once you have selected and entered an IP address, do 
		not forget to hit the set button at the bottom of the on the Network Web 
		page.&nbsp; Try to use an IP address close to you.&nbsp; If you are not 
		in the USA, I am sorry, but I don't have a list on international time 
		servers.</li>
			<li>Now doubleclick on
			--&gt;
			<a href="http://gemini/sitetime.cgi" target="_blank">Site/Time</a>.&nbsp; 
			Go down to "Query NTP server" and click in the "Query NTP Server" 
			Box.&nbsp; It will probably take a couple of seconds, but this will get 
			the time and date from your computer.&nbsp; The site/time link 
			requires your Gemini-2 to be turned on, connected via Ethernet, and 
			accept netbios names.&nbsp; Otherwise go to the web interface of the 
			Gemini-2 and select network.&nbsp; An example page is
			<a href="http://www.gemini-2.com/web/web-site-time.php" target="_blank">
			here</a>.</li>
			<li>If you have an networt time server IP address in the Network web 
			page, then at power on the Gemini-2 will go to that network time 
			site and get the UTC time and date, without you doing anything.</li>
		</ol>
		</td>
		<td class="style7">
		
		<a href="http://tf.nist.gov/tf-cgi/servers.cgi" target="blank" >
		<img alt="" class="auto-style1" height="225" src="images/thumbnails/NIST_time_servers_small1.jpg" width="400" xthumbnail-orig-image="images/NIST_time_servers.jpg"></a>
		<Br />Click on image to see larger View<br><br><br><br><br><br><br><br>
		<br><br><br><br></td> 
	</tr>
</table>
<br /><hr class="style16" style="width: 600px"><br />
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		
		From a computer on your local network:</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		<span class="style3">The Below is only for a Window 7, 8.1 or 10 based 
		computer. Please be very careful using any of the below files.&nbsp; 
		I recommend that you make a complete backup of your operating system 
		before going any futher or at least create a "restore point".&nbsp; Modifying your registry can make your 
		computer non-operational.&nbsp; I have tested these registry patches 
		only on a Windows 10 Pro X64 bit system. If you do not want to do this, 
		then use an internet time server as explained above.</span><br />
		&nbsp;ALSO NOTE: You must have the TIME ZONE set correctly for this to work.&nbsp;
		
		Please note that most Windows PC's can act as a network time server.&nbsp; 
		They will need a registry patch to do this.&nbsp; I am providing a zip 
		file that includes these patches and also a Bat file that can find you 
		computer's IP address (Windows only) and put it in the clipboard.</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		
		Please download <a href="NTPtime/NTP_Time.zip" target="_blank">NTP_Time.zip</a>&nbsp;and put this file into a clean/empty directory.&nbsp; Then please 
		unzip it.&nbsp; You will find the following files in the zip.<br />
		<ul>
			<li>setLocalNTP.reg&nbsp;&nbsp; Double clicking on this file will 
			modify the registry of your computer so it can act as a Time Server.</li>
			<li>clearLocalNTP.reg&nbsp; This will stop you computer from acting 
			as a local time server, but leave the registry patch in place.&nbsp; 
			It changes the value in the patch from a 1 to zero.</li>
			<li>removeLocalNTP.reg&nbsp;&nbsp; It totally removes the patch from 
			the registry.</li>
			<li>ComputerIP.bat&nbsp; This batch file will find the IP of the 
			computer it is run on, and put that IP address in the computers 
			Clipboard.</li>
			<li>NIST Time Servers USA is a web link to the page listed above 
			"from a Internet Server"</li>
		</ul>
		<p>Please only run the above listed registry patches once.</p>
		
		</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		
		To set the Time and 
		date from your local Windows PC, please follow the below steps.
		
		<ol>
			<li>Please create a "restore point" before continuing.</li>
			<li>On a Windows machine please double click on the set LocalNTP.reg&nbsp; 
			You will be asked if you really want to do this, please answer "Yes" 
			or "OK" according to the operating system you are using.&nbsp; If 
			you would perfer to manually edit the registry yourself here are
			<a href="../registryeditNPT.php" target="_blank">instructions</a>.</li>
			<li>Now doubleclick on the "ComputerIP.bat" file.&nbsp; This will run 
			a program and store your computer's IP address in the Clipboard.</li>
			<li>Make sure the Gemini-2 is turned on and connected to your local 
			network.</li>
			<li>Now doubleclick on
			--&gt;
			<a href="http://gemini/network.cgi" target="_blank">SetNTPServer</a>.&nbsp; 
			This will bring up the network page in the your perfered Web Browser.&nbsp; You 
			will probably have to log in.&nbsp; (Name = admin&nbsp; password = 
			blank)</li>
			<li>Now put the mouse pointer in the "Network Time Protocol Server" 
			box.&nbsp; Clear out the box so it is empty.&nbsp; Then use the 
			"Ctrl" plus "V" key and paste in your computer's IP address.</li>
			<li>Now hit the "SET" Button at the bottom of the page.</li>
			<li>Now doubleclick on
			--&gt;
			<a href="http://gemini/sitetime.cgi" target="_blank">Site/Time</a>.&nbsp; 
			Go down to "Query NTP server" and click in the "Query NTP Server" 
			Box.&nbsp; It will probably take a couple of seconds, but this will get 
			the time and date from your computer.</li>
		</ol>
		
		</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		
		</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		
		Associated web pages:&nbsp; Please note that if your system does not 
		respond to Netbios commands like <a href="http://gemini" target="_blank">http://gemini</a> 
		then you will have to replace the gemini with your gemini-2 ip address.<br>
		<a href="http://gemini/sitetime.cgi">http://gemini/sitetime.cgi</a>&nbsp;&nbsp; 
		or http://your gemini-2 IP address/sitetime.cgi<br>
		<a href="http://gemini/network.cgi" target="_blank">http://gemini/network.cgi</a>&nbsp; 
		or http://your gemini-2 IP address/network.cgi<br><br>Example pages:&nbsp;
		<a href="http://www.gemini-2.com/web/web-network-NTP.php" target="_blank">http://www.gemini-2.com/web/web-network-NTP.php</a> and<br>
		<a href="http://www.gemini-2.com/web/web-site-time-NTP.php" target="_blank">http://www.gemini-2.com/web/web-site-time-NTP.php</a> <br><br>
		
		</td>
	</tr>
</table>
<table  align="center" style="width:900px">
	<tr class="style6-border-white">
		<td >
		This section is only for ones who want to see the code in ComputerIP.bat and 
		setLocalNTP.reg<br>This code has to be generated in Notepad.exe&nbsp; 
		any other text editor might leave hidden characters.<br />

		<br>Code for ComputerIP.bat&nbsp; is between white lines.<br>
		<hr class="style16" style="width: 600px">
		
		@ECHO OFF <br>
		FOR /F "tokens=*" %%i in ('ipconfig ^| find "IPv4"') 
		do SET result=%%i
		<br>echo %result:IPv4 Address. . . . . . . . . . . 
		: =% | clip<br>
		<hr class="style16" style="width: 600px"><br />Code for setLocalNTP.reg is between the below white lines.<br><br>
		<hr class="style16" style="width: 600px">
		Windows Registry Editor Version 5.00<br><br>
		[HKEY_LOCAL_MACHINE\SYSTEM\CurrentControlSet\Services\W32Time\Parameters]<br>
		"LocalNPT"=dword:00000001<br>
		<hr class="style16" style="width: 600px"><br>
		In the above file if dword:00000001 = dword:00000000
		then this patch will not let Windows act as a NTP server. <br>If the 
		"LocalNPT" = dword:00000001 is changed to "LocalNPT"= -<br>Then the 
		patch will be removed from the registry.<br><br>Please be very careful 
		making changes to these files, as a wrong change can make your computer 
		not run at all.&nbsp; Make sure you have a full backup before using 
		them.<br><br>
		</td>
	</tr>
</table>

 <table  align="center" style="width:900px">
	<tr>
		<td class="style7whiteborder" >
		Page last updated on Sept 12, 2016 		</td>
	</tr>
</table>



</body>




<?php include("bottom.php"); ?>



