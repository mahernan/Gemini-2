<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Gemini 2 Mount Controller</title>

<link href="gemini-2.css" rel="stylesheet" type="text/css" />


<?php include("topv.php"); ?>



<style type="text/css">
.auto-style1 {
	border-style: solid;
	border-width: 2px;
}
</style>



</head>

<body style="color: #FFFFFF; background-color: #000000">




<table align="center" style="width: 900px">
	<tr>
		<td>&nbsp;</td>
	</tr>
</table>


<table align="center" style="width: 900px">
	<tr>
		<td class="h3">Copy Catalogs from Web interface to Hand controller</td>
	</tr>
</table>

<table align="center" style="width: 900px">
	<tr>
		<td class="style6">&nbsp;</td>
	</tr>
	<tr>
		<td class="style6">These instructions will teach you how to copy Star catalog 
		files that are in the Web interface into the hand controller.&nbsp; 
		Unfortunately, you cannot copy from the SDcard, but only past into it.&nbsp; 
		First we will download the catalog file you want from the list below, 
		and store it on your desktop, or an empty directory. From there we can 
		put in into the micro-SDcard using Windows File Explorer as an FTP client.&nbsp; 
		For this demo we are going to teach our friends in the Southern 
		Hemisphere to put the "Southern Constellation_Stars.guc file into the 
		hand controller.&nbsp; All catalog files must end in .guc</td>
	</tr>
	<tr>
		<td class="style6">&nbsp;</td>
	</tr>
	<tr>
		<td class="style6">To create catalogs from scratch I suggest that you 
		use "<a href="http://garriou.didier.free.fr/astro/gemini_anglais.html" target="_blank">Didier 
		Garriou Gemini Catalogs building site"</a></td>
	</tr> 
	<tr>
		<td class="style6" style="height: 27px"></td>
	</tr>
	<tr>
		<td class="style6"><ol><li>
		Connect the Gemini-2 using it's Ethernet port to your computer.  
		See the Menu Under Gemini-2/Connecting to Ethernet port if you do not know how to do this.
		</li>
		<li>
			Open up a Windows File explorer window. See example for 
			<span lang="en-us"></span>this.</li>
			<li>
			Now either create an empty directory, (especially if you want to do 
			more than one catalog) or browse to the desktop.&nbsp; I created an 
			empty directory called C:\starcatalogs. See below.</li>
			
			</ol></td>
	</tr>
	<tr>
		<td class="style7">
		
		<a href="gemini-images/copycatalogs/starcatalogsdirectory.jpg" target="_blank">
		<img alt="" class="auto-style1" height="485" src="gemini-images/copycatalogs/thumbnails/starcatalogsdirectory_small.jpg" width="800" />
		</a><br /> double-click on images to open larger version.
		
		<!--<a href="gemini-images/copycatalogs/OpenFileExplorer.jpg" target="_blank">
		<img alt="" class="auto-style1" height="386" src="gemini-images/copycatalogs/thumbnails/OpenFileExplorer_small.jpg" width="800" /></a>
		--></td>
	</tr>
	<tr>
		<td class="style6">
		<ol start="4"><li>
		Now you need to download one or all of the files below and put them into the directory you just created, or on your desktop if you want.&nbsp; 
			NOTE: A * after the name indicates this file should already included 
			in the HC catalogs</li></ol>
		</td>
		</tr>
</table>

		<table align="center" style="width: 900px">
			<tr>
				<td width="450px">
				<ul>
				<li><a href="http://www.gemini-2.com/catalogs/Arp_EN.guc">Arp_EN.guc</a></li>
				<li><a href="http://www.gemini-2.com/catalogs/Blazar.guc">Blazar.guc</a> *</li>
				<li><a href="http://www.gemini-2.com/catalogs/BSL.guc">BSL.guc</a> *</li>
				<li><a href="http://www.gemini-2.com/catalogs/Caldwell_EN.guc">Caldwell_EN.guc</a></li>
				<li><a href="http://www.gemini-2.com/catalogs/Cederblad_EN.guc">Cederblad_EN.guc</a></li>
				<li><a href="http://www.gemini-2.com/catalogs/Combined_Constellation_Stars.guc">Combined_Constellation_Stars.guc</a> *</li>
				<li><a href="http://www.gemini-2.com/catalogs/G2V_EN.guc">G2V_EN.guc</a></li>
				<li><a href="http://www.gemini-2.com/catalogs/Herschel400_EN.guc">Herschel400_EN.guc</a></li>
				<li><a href="http://www.gemini-2.com/catalogs/IC.guc">IC.guc</a> *</li>
				<li><a href="http://www.gemini-2.com/catalogs/LBN_EN.guc">LBN_EN.guc</a> *</li>
			</ul>
</td>
				<td width="450px">
				<ul>
				<li><a href="http://www.gemini-2.com/catalogs/LDN_EN.guc">LDN_EN.guc</a> *</li>
					<li><a href="http://www.gemini-2.com/catalogs/Messier.guc">Messier.guc</a> *</li>
					<li><a href="http://www.gemini-2.com/catalogs/NGC.guc">NGC.guc</a> *</li>
					<li><a href="http://www.gemini-2.com/catalogs/NGC_constellation.guc">NGC_constellation.guc</a> *</li>
					<li><a href="http://www.gemini-2.com/catalogs/PN.guc">PN.guc</a> *</li>
					<li><a href="http://www.gemini-2.com/catalogs/SAO.guc">SAO.guc</a> *</li>
					<li><a href="http://www.gemini-2.com/catalogs/Sh2.guc">Sh2.guc</a></li>
					<li><a href="http://www.gemini-2.com/catalogs/Sharpless_EN.guc">Sharpless_EN.guc</a></li>
					<li><a href="http://www.gemini-2.com/catalogs/Southern_Constellation_Stars.guc">Southern_Constellation_Stars.guc</a> *</li>
					<li><a href="http://www.gemini-2.com/catalogs/Struve_EN.guc">Struve_EN.guc</a></li>
					<li><a href="http://www.gemini-2.com/catalogs/WDS.guc">WDS.guc</a> *</li>
				</ul>
			</td>
		</tr>
</table>
	<table align="center" style="width: 900px">
		<tr>
		<td class="style6">
		<ol start="5">
		<li>
			Now for this demo, please double click on the link above  
			Southern_Constellation_Stars.guc<br />
			and then when the below menu shows on the download bar, select the 
			down button next to save and select save_as and then point to the save_as location to your empty directory or desktop.</li></ol>
			</td>
	</tr>
	<tr>
		<td class="style7">
		<a href="gemini-images/copycatalogs/savemenu.jpg" target="_blank">
		<img alt="" src="gemini-images/copycatalogs/thumbnails/savemenu_small.jpg" class="auto-style1" height="469" width="800" /></a>
		<br />After saving the file it should look like below.<br />This Demo users Windows IE9, menu will be different for other browsers.<br />
		
		<a href="gemini-images/copycatalogs/starcatalogs_saved.jpg" target="_blank">
		<img alt="" class="auto-style1" height="485" src="gemini-images/copycatalogs/thumbnails/starcatalogs_saved_small.jpg" width="800" /></a></td>
	</tr>
</table>






	<table align="center" style="width: 900px">
		<tr>
		<td class="style6">
		<ol start="6"><li>
		Now while keeping the above Windows File Explorer window open, open up another 
			Windows File Explorer window.
		This is easy done by right clicking on the Windows File Explorer icon and selecting "Windows Explorer" 
			See below.</li></ol></td>
	</tr>
	<tr><td class="style7">
	
		<a href="gemini-images/copycatalogs/doublewindow.jpg" target="_blank">
		<img alt="" class="auto-style1" height="579" src="gemini-images/copycatalogs/thumbnails/doublewindow_small.jpg" width="800" /></a></td></tr>
</table>
	<table align="center" style="width: 900px">
		<tr>
		<td class="style6">
		<ol start="7"><li>
		Now in the top window, in the top line where you see Libraries, replace that with ftp://admin@gemini&nbsp; 
			See the two picture below for example.</li></ol></td>
	</tr>
</table>
<table align="center" style="width: 900px">
		<tr>
			<td align="center">
			<img alt="" height="46" src="gemini-images/copycatalogs/typehere.jpg" width="194" />
			<br />From this</td>
			<td align="center"><img height="46" src="gemini-images/copycatalogs/enterftpname.jpg" width="228" />
			<br />to this</td>
		</tr>
</table>


<table align="center" style="width: 900px">
	<tr>
		<td class="style7" >
		</td>
	</tr>
	<tr>
		<td class="style6">
		<ol start="8">
		<li>
		A window similar to this one should appear.
		</li>
		</ol>
		</td>
	</tr>
	<tr>
		<td class="style7">
				
		<a href="gemini-images/copycatalogs/geminiSDfiles.jpg" target="_blank">
		<img alt="" class="auto-style1" height="580" src="gemini-images/copycatalogs/thumbnails/geminiSDfiles_small.jpg" width="800" /></a></td>
	</tr>
	
	<tr>
		<td class="style6">
		<ol start="9"><li>
		
			Now on the rear window that shows the 
			Southern_Constallation_Stars.guc file, Right click on that file and 
			select save.</li>
			<li>
		
			Now 
			you have two options here.&nbsp; You can now bring the window that 
			shows the SDcard contents back to the front, and either Right Click 
			on the HCFirmware menu and select paste, or you can double click on 
			the HCFirmware directory and open it.&nbsp;&nbsp; After opening it, 
			click any where in the blank space and select paste.&nbsp; Below is a 
			sample with the HCFirmware directory open and the file copied to it.</li></ol>
		
		</td>
	</tr>
	<tr>
		<td class="style7">
		
		<a href="gemini-images/copycatalogs/SouthernStarsCopied.jpg" target="_blank">
		<img alt="" class="auto-style1" height="577" src="gemini-images/copycatalogs/thumbnails/SouthernStarsCopied_small.jpg" width="800" /></a></td>
	</tr>
	<tr>
		<td class="style6">
		<ol start="11"><li>
		
			Now you have two choices to get the files you just 
			transferred into 
			the micro-SDcard to be uploaded to the hand controller.
			<ul>
				<li>Turn the power off and then back on.</li>
				<li>The second way is from the hand controller. From Menu on the 
				hand controller, select "HC" then select "SDcard", then hit the 
				"Upload Files button."</li>
			</ul>
			</li>
		</ol></td>
	</tr>
	<tr>
		<td class="style6">
		Note: You can do one file, or multiple files at the same time.  This is also one way that you can update the firmware in the hand controller. If updating firmware, however, you have to use the power off and power back on to transfer the firmware as the upload file button will not work for firmware updates.</td>
	</tr>
</table>

</body>




<?php include("bottom.php"); ?>



