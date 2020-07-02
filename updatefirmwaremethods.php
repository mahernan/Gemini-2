<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Update Firmware for Gemini 2</title>

<link href="http://gemini-2.com/gemini-2.css" rel="stylesheet" type="text/css" />


<?php include("topv.php"); ?>


<style type="text/css">
.auto-style1 {
	font-family: serif;
	font-size: medium;
	color: #FF0000;
}
.auto-style4 {
	border: 4px solid #FF0000;
	background-color: #000000;
}
</style>


</head>

<body style="color: #FFFFFF; background-color: #000000">
<table align="center" style="width: 900px">
	<tr>
		<td class="h2">
			<br/>
				Gemini 2 Firmware Programming Methods Selection<br/>
			</td>
	</tr>
	<tr>
		<td class="h4">
			<br/>
				<u><b>Please read this whole page before doing any firmware updating.</b></u>
				
			<br />
			</td>
	</tr>
</table>
<br />

	<table align="center" style="width: 900px" class="tableborder1">
		<tr><td class="style6">&nbsp;<a href="firmware-changes.php" target="_blank">Firmware-Changes List</a> to see 
			the changes implemented 
			after Dec 18, 2012 firmware's release.&nbsp;
		</td>
		</tr>
	</table>		

<br />
<br />

<table align="center" class="auto-style4" style="width: 900px">
		<!--
		<tr><td class="style6Red">
			Do not use any of the firmware on this site to update the new 
			version of the Gemini-2 with.&nbsp; The version it is shipping with 
			is different than the versions provided on this site. Again the 
			newer version has only one power plug..&nbsp; See
			<a href="http://www.gemini-2.com/faqG2.php#Q1" target="_blank">FAQ 
			Question 1</a> for changes.
		</td>
		</tr>
		-->
		<tr>
		<td class="style6"><em>I am very pleased to announce that we now have a Gemini2 firmware updated utility 
		"GFU", (updated 8 Feb 2015) 
		courtesy of Paul Kanevsky.&nbsp; You can find the instructions to use it 
		is
		<a href="http://www.gemini-2.com/gfu.php" target="_blank">here for 
		Windows</a><!-- and <a href="gfu_mac.php">here for the Mac</a>-->.  It has been tested on XP, 
		Vista, Win7, Win8.1 and Win10.&nbsp;&nbsp; It also has been tested in a VMWare 
		Fusion window on a MacBook Pro running Win7 64bit, and A Oracle VM 
		Virtual box window with the latest beta copy of Windows 10 x64.&nbsp; 
		<!--The Mac version has been tested on a MacBook running OS 10X.&nbsp;--> You must have the Gemini-2 connected via Ethernet to use it.&nbsp; It 
		will also require an internet connection to download the latest firmware 
		from this site.<br /> Thank You Paul.</em><br />
		</td>
	</tr>
</table>
<!-- <br /><br />

<table align="center" class="auto-style4" style="width: 900px">
	<tr>
		<td class="style6"><em>All versions of the main units firmware after Dec 18, 2012 
		should only be 
		installed over the Dec 18, 2012 or later firmware versions.&nbsp; If you have 
		never updated the main unit to the Dec 18, 2012 or later version, then you 
		will have to delete a file on the micro-sdcard before you can use GFU to 
		update to the latest version.&nbsp; (instructions updated as of Dec 1, 
		2014)<br />
		Please follow these <a href="gfu_for-Dec-18-2012.php">directions</a> to do the 
		do that.&nbsp; <br />
		Now any Gemini-2 that has firmware dated in March of 2011 or earlier can 
		only be updated by removing the micro SDcards and putting the new 
		firmware on them.&nbsp; Please use the
		<a href="https://groups.io/g/Gemini-II
info" target="_blank">
		Gemini-2 users</a> group to ask how to do this.</em><br />
		</td>
	</tr>
</table> -->
<a name="updateHC"></a><br />
<!--
<table align="center" class="auto-style4" style="width: 900px">
	<tr>
		<td class="style6">
		<em>20 Feb 2014 gemhc.bin hand controller update
		</em> - download this file from <a href="http://www.gemini-2.com/firmware1/current/gemhc.zip" target="_blank">gemhc.zip</a>&nbsp; Use the instructions
				<a href="hcfirmwareupdate.php" target="_blank">here</a> to upload 
		and install it.&nbsp; It fixes a bug in the modeling routines.&nbsp;<span class="auto-style2"><b>
		IMPORTANT: Only install this file if you have the 30 Sept 2013 
		and all the new button files that support it, or later hand controller firmware installed, 
		with all the new button files.</b></span><br />
		</td>
	</tr>
</table>
-->


<br />
<table align="center" style="width: 900px">
	<tr>
		
		<td width="900px" class="style6">
		There are 4 ways to update the firmware in the Gemini 2 controller. 
		All methods require an Ethernet connection between your computer and the 
		Gemini-2. This also includes removing the micro-SDcards and programming 
		them directly.&nbsp; 
		If for no other reason, it is required to tell the Web interface to 
		flash the program into the ARM processor.&nbsp; But for the other FTP methods 
		Ethernet is also required to transfer all the files.&nbsp; If you don't have an Ethernet connection see
		<a href="ConnectingtoG2.php" target="_blank">
		http://gemini-2.com/ConnectingtoG2.php</a><br />
		All updated files are listed at the bottom of this page.&nbsp; Other 
		web pages may have them listed also, but the links at the bottom of this 
		page should be the most current.<br /><br />The four methods are:<br />
		1. Use the new <a href="http://www.gemini-2.com/gfu.php" target="_blank">Firmware Update program for Windows</a>, <!-- or the <a href="http://www.gemini-2.com/gfu_mac.php" target="_blank">Firmware Update program for Mac</a>--> that can update everything, 
		just the main unit, catalog files, or the new video files.&nbsp; This is now the recommended 
		method.&nbsp; This routine updates the Gemini-2 almost twice as fast as most of the FTP methods.<br />
		<br />
			2. <a name="The_FTP_Methods">The FTP Methods
		</a>are divided into two methods, 
		according to which FTP method you use.&nbsp; The FTP methods are for advanced users, that understand how the 
		firmware and directory structure of the micro-SDCards works, and how to 
		use a computer.&nbsp; Use a FTP 
		method to program both the Main unit and Graphics Hand controller at the 
		same time. You either use an FTP client such as
		<a href="http://download.filezilla-project.org/FileZilla_3.7.3_win32-setup.exe" target="_blank">
		Filezilla Client</a>, or Windows File Explorer. (put
		ftp://admin@Gemini or
		ftp://admin@192.168.0.111 if using Windows File Explorer.)&nbsp; 
		Note if your IP address for the Gemini-2 is different then use that.
		<br />
		Use a FTP program (Recommended when more than one file is being 
		updated, or rebuilding the main units micro-SDcard file 
				structure.) Again this is only for Advanced user that 
				understand the directory and file structure of the micro-SDcards. Only firmware dated after 9 April 
		2011 has the FTP 
				capability build in.<br />
		
		<ul>
			<!--<li>Here is a
			<a href="selfextractingdemo.php" target="_blank">
			link</a> explaining the use of the Windows File Explorer method, but with a twist. It automatically
			downloads, extracts the files to C:\gemini2, and opens up two Windows Explorer Panes for you. It will only work
			on Windows systems that has NetBios functioning.&nbsp; It has worked 
			on some XP systems, not some XP systems.</li> -->
			<li>Here is a
			<a href="updateFileExplorer.php" target="_blank">
			link</a> explaining the use of the Windows File Explorer method.
			</li>
			<li>Here is a
			<a href="installing_level5_Vesion1.php" target="_blank">
			link </a>&nbsp;explaining the use of the FTP (Filezilla client) method.</li>
		</ul>
				
		<hr class="style2" noshade="noshade" style="width: 900px" />
		<br />	
		</td>
	</tr>
</table>
	
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		3. Use the Web interface.&nbsp; (Recommended when gemhc.bin or 
				NewGem.bin/gemhc.bin is the only files being updated.)&nbsp; You can 
		only update one file at a time using this method.&nbsp; This 
		method requires you to use the SD Card tab of the web interface.&nbsp; 
		You use the "Upload a file to the SD card's current directory"&nbsp; If 
		uploading the NewGem.bin file you do that to the root of the SDcard.&nbsp; 
		If uploading GemHC.bin (hand controller programing file) you first 
		select the HCFirmware directory and then do the upload.&nbsp; If 
		uploading a catalog file to the hand controller you also select the 
		HCFirmware directory. If the uploaded file was NewGem.bin, then you will 
		have to go into the web interface, Firmware/SRAM tab and flash this file 
		into the ARM processor for it to do any update.<br />
		<br />
		 <hr class="auto-style1" style="width: 900px" noshade="noshade" />
		 <br />
		<br />
		4. Remove the micro-SDcards, format &amp; program them and 
				reinstall them. If your 
				Hand Controller firmware is before Jan 31,2011, and your main 
				unit firmware is before April 9 2011 then you might have to use this 
				method. After that the Update program in Paragraph 1 
				(recommended) or FTP method should work.
				It is the method you might have to use if your SDcards gets corrupted.&nbsp; 
		This is always the fall back method if something goes wrong, to try and 
		recover either the main unit or the hand controller. see
		<a href="Removing_SDCards.php" target="_blank">
		http://gemini-2.com/Removing_SDCards.php</a> <br />
		
		<br /> <span class="style2">If you have to format the SD card it is best to download the official 
				SDcard format routine from the</span>
		<a href="https://www.sdcard.org" target="_blank">https://www.sdcard.org</a>
		<span class="style2">download section.</span><br /><br />
		<hr class="auto-style1" noshade="noshade" style="width: 900px; height: 4px" /><br />
			
		NOTES:
		1. The Hand Controller is updated using a file called gemhc.bin, 
			and can be done from the main Gemini 2 unit using either the Web 
			interface or the FTP method. Putting the gemhc.bin file in a 
			subdirectory called HCFirmware will upload it to the hand controller 
			from the main Gemini 2 unit. Please note that there are now 38 (as of 
		August 2013) button files that also have to be uploaded to update the 
		Hand controller.&nbsp; Please note that the Gemini MUST BE THROUGH 
			THE BOOT MENU for this to work. Also any catalog (.GUC file) can be 
			uploaded to the hand controller the same way.<br /><br />
		2. The Main Gemini unit's 
		ARM processor is updated using a file called NewGem.bin. But there are 
		many files in up to 30 sub-directories, that support it.&nbsp; Not all 
		have to be present, but the EN directory is a must for the English 
		language.&nbsp; The Gemini-2 creates some of these directories itself, 
		such as LOGS, CONFIG, PEC, and MODELS.<br /><br />
		
		3.	Both micro-SDcards (the one in the Hand Controller, and the one 
			in the Main Gemini 2) also contain many other files.&nbsp; These 
			other files can be put on the 
			
			Main Gemini 2 unit with a 
				FTP program, or
				one at a time with the web interface, or
				by removing the 
			card and putting the files on it with a card reader/writer, and the reinstalling 
			the card. There are 2 ways to do this with the Hand Controller files, 
				
					use a card reader/writer 
			on the micro-SDcard in the Hand controller, or 
					put the files in the HCFirmware directory of the main micro-SDcard directory.  This is normally a one time thing, 
			as most of the files on the Hand Controller mini-SDcard are the Star 
			Catalogs and button files which seldom change if ever. <br /><br />

<!--
			<hr class="auto-style2" style="width: 900px" noshade="noshade" /><br />
		

		Note that normally 
		the below available files are to do updates 
			with. They are supplied in Zip format&nbsp; and will need to be unzipped:&nbsp; 
		The combined.zip file contains all the other files listed below and is in the proper 
		Directory/File Structure for the main units micro SDcard.&nbsp; It will 
		update both the main unit and hand controller files except the Catalogs 
		of the Hand Controller.&nbsp; GFU can be used to install most of the 
		below files.&nbsp; <br />
		<br />
		</td>
	</tr>
</table>
		
<table align="CENTER" style="width: 900px">
	<tr>
		<td class="style6">
			<br />
			<hr class="style2" noshade="noshade" style="height: 4px" />
			<ul>
				<li><a href="http://www.gemini-2.com/firmware1/current/combined.zip" target="_blank">Combined.zip</a> file contains the NewGem.bin file, the contents of SDcard.zip
				to update the main unit and gemhc.bin for updating the hand controller, and the 
				HC_SDCard_upload.zip files for updating&nbsp; hand controller.&nbsp; 
				All current 
				updates are in this file.&nbsp; This is the default file that GFU will look for and install.<br /> 
				<br /></li><li>
				<a href="http://www.gemini-2.com/firmware1/current/V5-2_Individual_zips/NewGem.zip" target="_blank">NewGem.bin</a> - programming file for Main unit. 
					Only programs the arm processor. Note: it's download format 
					is a zip file and it must be unzipped before use.&nbsp; Do 
				not use GFU for this file.<br /><br /> </li>
				<li>
				<a href="http://www.gemini-2.com/firmware1/current/V5-2_Individual_zips/SDcard.zip" target="_blank">SDcard.zip</a> - this is the rest of the files on the main 
					units micro-SDcard, and is necessary for proper operation.&nbsp;&nbsp; 
				You can use GFU for this file, uncheck Flash, uncheck HC, 
				uncheck catalogs. They do not include the hand controller files.<br /><br /></li>
				<li>
				<a href="http://www.gemini-2.com/firmware1/current/V5-2_Individual_zips/gemhc.zip" target="_blank">gemhc.bin</a> - hand controller programming file.&nbsp; 
				This only programs the arm processor in the hand controller.&nbsp; 
				Note: it's download format is a zip file and it must be unzipped 
				before use. Use the instructions
				<a href="hcfirmwareupdate.php" target="_blank">here</a> to upload 
				and install it.&nbsp; Do not use GFU to install this file.&nbsp; <br /><br /> </li>
				
								
				<li>
				<a href="http://www.gemini-2.com/firmware1/current/V5-2_Individual_zips/HC-reader-writer_version.zip" target="_blank">HC-reader-writer_version.zip</a> - 
				All the hand controller files for the 14 Feb 2016 firmware.&nbsp; The directory structure of this 
				zip file is formatted for using it with a micro-SDcard card 
				reader/writer only.&nbsp;It must not be used in the main unit. It 
				DOES&nbsp; 
				include the gemhc.bin file.&nbsp; It also includes the catalogs 
				files. Do not use GFU with this file. 
				You should also format the micro SDcard with the 
				<a href="https://www.sdcard.org/downloads/formatter_4/" target="_blank">
				Official SDcard 
				format utility</a> from the SD Association.&nbsp;&nbsp; <br /><br /></li>
				<li>
				<a href="http://www.gemini-2.com/firmware1/current/V5-2_Individual_zips/HC_SDcard_upload.zip" target="_blank">HC_SDcard_upload.zip</a> - these are the same files that 
					are in the HC_SDcard.zip file.&nbsp; They are in&nbsp; 
					in one directory, and the contents would be put in the HCFirmware directory on the main unit using an FTP 
					program or card reader/writer.&nbsp; Then the Hand 
					controller can be commanded to upload these files. It DOES 
					NOT include the gemhc.bin file, or the Catalog Files for the 
					hand controller. Do not use GFU for this file.<br /><br /></li>
				
					<li>
					<a href="http://www.gemini-2.com/firmware1/current/catalogs.zip" target="_blank">Catalogs.zip</a> - these are the catalogs files for upload 
					to the Hand controller.&nbsp; Catalogs files are stored in a 
					separate process to the hand controller.&nbsp; They can be 
					directly written to the mico-SDcard in the hand controller 
					using a card reader/writer, or they can be put into the 
					HCFirmware directory of the micro-SDcard in the main unit.&nbsp; 
					The main unit will then upload them to the hand controller.&nbsp; 
					You can also see
					<a href="http://gemini-2.com/copycatalogs.php" target="_blank">
					adding catalogs to the hand controller</a> for a different 
					method of doing this. You can use GFU for this file.&nbsp; 
					Check HC and Catalogs, uncheck Gemini and Flash.<br /><br /></li>
					<!--<li>
					<a href="http://www.gemini-2.com/firmware1/current/Manual.zip" target="_blank">
					Manuals.zip</a> - these are extracted from the Gemini-2.com web site. 
					They can only be displayed in a Web browser that is on the same 
					network as the Gemini-2.&nbsp; If you have a laptop or 
					tablet 
					connected to the Gemini-2 then you can see them in it's web 
					browser.&nbsp; They are there mainly for ones who go into 
					the field and have no web connectivity. The directory for 
					these manuals is "Manual" and is placed at the root of the 
					micro-SDcard in the main unit.&nbsp; They are part of the 
					combined.zip file so normally do not need to be downloaded 
					as a separate item.&nbsp; The Manual directory is the 
					largest directory approaching almost 14 megabytes of 
					directories and files. This directory takes about a half 
					hour or more to upload using a FTP process into the 
					Gemini-2. If you don't need them, then I suggest you delete 
					this directory from the Combined.zip files after unzipping 
					it.&nbsp; It will save you allot of time.&nbsp; If you are 
					using a card reader/writer, then the size really does not 
					matter, so leave them in place.&nbsp; The choice is yours.&nbsp; 
					GFU can be used to upload these files.&nbsp; Uncheck HC, 
					Catalogs and Flash, Check Gemini.<br /><br /></li> -->
					<!--<li>PAA Tutorial.pdf file have now been added into the Main SDcard 
					it is contained in the combined.zip file.&nbsp; <br /><br /></li>-->
					
<!--						<li><a href="firmware1/current/MHC.zip" target="_blank">
						MHC</a> Directory - which stood for Mobile hand 
						controller.&nbsp; This was removed at Scott Losmandy 
						request. It can be very slow when trying to bring in 
						some of the larger star catalog files.&nbsp; You really 
						need a fast WiFi device to use this.&nbsp; It was wrote by a 
						third party, who has since left the Losmandy family of 
						mounts to design&nbsp; his own.&nbsp; This file contains 
						2 directories. MHC and EN. The EN directory only 
						contains a index.htm file to update the English version 
						of the web interface so that the MHC files can be found.&nbsp; 
						If you decide to use this, you need to overwrite the EN 
						directory with this one and add the MHC directory to the 
						other.&nbsp; This firmware will not be in any of the 
						other files, and is not being keep updated to work with 
						new changes in firmware.&nbsp; That is the reason for 
						it's removal. This file can easily be put into the 
						Gemini-2 using GFU.&nbsp; In the drop down box, point 
						GFU to download
						<a href="http://www.gemini-2.com/firmware1/current/MHC.zip">
						http://www.gemini-2.com/firmware1/current/MHC.zip</a> 
						Make sure you <u>uncheck</u> HC, Catalogs and Flash. The GFU 
						will time out if you do not.<br /><br /></li>
					</ul>
-->
				
			</td>
		</tr>
</table>

<hr class="style2" noshade="noshade" style="width: 900px; height: 4px" />

<table align="CENTER" style="width: 900px">
	<tr>
		<td class="style7">
		Below is the Directory and file structure of the 
		Main Gemini-2 micro SDcard.</td>
		</tr>
</table>
<table align="CENTER" style="width: 900px">
	<tr>
		<td class="style6">
			<ul>
				<li>
				<u><strong>AltAZ</strong></u>&nbsp; - 
				Directory - These is for Alt AZ mounts and contains 4 subdirectoried</li>
				<li>
				<u><strong>Catalogs</strong></u> - Directory contains all the star catalogs in *.Guc 
				format. Currently there are 20 catalogs.</li>
				<li>
				<u><strong>CONFIG</strong></u> - 
				Directory - if you tell the Gemini to store your configuration 
				using the web interface (Store SRAM) then it will be stored in 
				this directory.</li>
				<li>
				<u><strong>DE</strong></u> - Directory 
				- this is the German director and contains 40 files</li>
				<li>
				<u><strong>DOC</strong></u> - 
				Directory - this directory contains the PAA_Tutorial in PDF 
				format.</li>
				<li>
				<u><strong>EN</strong></u> - Directory 
				- This is the English directory and contains 44 files</li>
				<li>
				<u><strong>ES</strong></u> - Directory 
				- This is the Spanish directory and contains 39 files</li>
				<li>
				<u><strong>FR</strong></u> - Directory 
				- this is the French directory and contains 40 files</li>
				<li>
				<u><strong>HC</strong></u> - Directory - this directory contains the hand controller on the web 
				interface - 7 files</li>
				<li>
				<u><strong>HCFirmware</strong></u> - 
				Directory - this directory is normally empty, and only contains 
				files when they need to be uploaded to the hand controller.</li>
				<li>
				<u><strong>MHC</strong> </u>-Directory - which stood for Mobile hand controller.&nbsp;&nbsp; It can be very slow 
				when trying to bring in some of the larger star catalog files.&nbsp; 
				You really need a fast WiFi device to use this. It is designed 
				to work with Android phones/tablets and Iphones and Ipads.</li>
				<li>
				<u><strong>Logs</strong></u> - 
				Directory - this directory is created only by the Gemini-2 and 
				normally only contains the Gemini.log, Pointing.Dat files. If 
				you have created a model, then a model.log will be here also.</li>
				<li>
				<u><strong>Manual</strong></u> - Directory - directory, Please see above description about this 
				directory.</li>
				<li>
				<u><strong>Models</strong></u> - Directory - If you tell the Gemini to store your model using the 
				web interface it will be stored here.</li>
				<li>
				<u><strong>PEC</strong></u> - 
				Directory - if you create a PEC file then it will be stored in 
				this directory.</li>
				<li>
				<u><strong>NewGem.bin</strong></u> - File -this file is the programming file for the 
				Gemini-2 Main ARM processor.</li>
			</ul>
		</td>
		</tr>
</table>
<br />
<hr class="style2" noshade="noshade" style="width: 900px; height: 4px" />
<br />
<table align="CENTER" style="width: 900px">
	<tr>
		<td class="style7">
		Below is the Directory and file structure of the 
		Hand Controller micro SDcard.</td>
		</tr>
</table>
<table align="CENTER" style="width: 900px">
	<tr>
		<td class="stylet">
			<ul>
				<li>
				<u><strong>Catalogs</strong></u> - 
				Directory contains all the star catalogs in *.Guc 
				format. Currently there are 20 catalogs.</li>
				<li>
				<u><strong>HCFirmware</strong></u> - Directory - it is where all the button files&nbsp; 
				and the gemlogo.bin are 
				loaded.&nbsp; </li>
				<li>
				<u><strong>GemHC.bin</strong></u> - file that will be uploaded into the hand controllers 
				ARM processor to program it. After it is programmed, the ARM 
				processor will rename it to current.bin, so it is not programmed 
				again.</li>
				
			</ul>
		</td>
		</tr>
</table>
<table  align="center" style="width:900px">
	<tr>
		<td class="style7">
		Page last updated on Sept 07 , 2016
		</td>
	</tr>
</table>


</body>




<?php include("bottom.php"); ?>



