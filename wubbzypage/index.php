<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Wow! Wow! Wubbzy!</title>
		<style>
			body {
				margin: 0px;
				background-color: #FFFFFF; 
				}
		</style>
		<script language="JavaScript" type="text/JavaScript">
		<!--
		var flashinstalled = 0;
		var flashversion = 0;
		MSDetect = "false";
		if (navigator.plugins && navigator.plugins.length)
		{
			x = navigator.plugins["Shockwave Flash"];
			if (x)
			{
				flashinstalled = 2;
				if (x.description)
				{
					y = x.description;
					flashversion = y.charAt(y.indexOf('.')-1);
				}
			}
			else
				flashinstalled = 1;
			if (navigator.plugins["Shockwave Flash 2.0"])
			{
				flashinstalled = 2;
				flashversion = 2;
			}
		}
		else if (navigator.mimeTypes && navigator.mimeTypes.length)
		{
			x = navigator.mimeTypes['application/x-shockwave-flash'];
			if (x && x.enabledPlugin)
				flashinstalled = 2;
			else
				flashinstalled = 1;
		}
		else
			MSDetect = "true";
		
		// -->
		
		</script>		
		<script LANGUAGE="VBScript">
		
		on error resume next
		
		If MSDetect = "true" Then
			For i = 7 to 8
				If Not(IsObject(CreateObject("ShockwaveFlash.ShockwaveFlash." & i))) Then
		
				Else
					flashinstalled = 2
					flashversion = i
				End If
			Next
		End If
		
		If flashinstalled = 0 Then
			flashinstalled = 1
		End If
		</SCRIPT>
		<script language="JavaScript" type="text/JavaScript">
		function test_resize(){
		 	if(document.body.clientHeight>750){
			 	document.getElementById('index').height = "100%";
			} else {
			 	document.getElementById('index').height = "750";			 
			}
			if(document.body.clientWidth>950){
			 	document.getElementById('index').width = "100%";
			} else {
			 	document.getElementById('index').width = "950";			 
			}
		}
		</script>

	</head>
	<body onResize="test_resize()">
		<div id="index"><div></div></div>
		<script type="text/javascript" src="swfobject.js"></script>
		<script language="JavaScript"> 
	function Launch(page, width, height) { 
		OpenWin = this.open(page, "promo_win", "toolbar=no, menubar=no ,location=no, scrollbars=yes, resizable=no, width=" + width + ", height=" + height + ", top=" + (screen.height/2 - height/2) + ", left=" + (screen.width/2 - width/2) + "\""); 
	} 
</script> 
		<script type="text/javascript">
			if(document.body.clientHeight>750){
				winHeight = "100%";
			} else {
				winHeight = "750";
			}
			if(document.body.clientWidth>950){
				winWidth = "100%";
			} else {
				winWidth = "950";
			}
//			var winHeight = (window.height)
			var so = new SWFObject("index.swf", "index", winWidth, winHeight, "9", "", true);
			so.addParam("allowScriptAccess", "always");			
			so.useExpressInstall("expressinstall.swf");
			so.write("index");
		</script>
		
		<!-- SiteCatalyst code version: H.17.
Copyright 1997-2008 Omniture, Inc. More info available at
http://www.omniture.com -->
<script language="JavaScript" type="text/javascript" src="http://www.wubbzy.com/js/s_code.js"></script>
<script language="JavaScript" type="text/javascript"><!--
/* You may give each page an identifying name, server, and channel on
the next lines. */
s.pageName="Wubbzy Homepage"
s.server=""
s.channel=""
s.pageType=""
s.prop1=""
s.prop2=""
s.prop3=""
s.prop4=""
s.prop5=""
/* Conversion Variables */
s.campaign=""
s.state=""
s.zip=""
s.events=""
s.products=""
s.purchaseID=""
s.eVar1=""
s.eVar2=""
s.eVar3=""
s.eVar4=""
s.eVar5=""
/************* DO NOT ALTER ANYTHING BELOW THIS LINE ! **************/
var s_code=s.t();if(s_code)document.write(s_code)//--></script>
<script language="JavaScript" type="text/javascript"><!--
if(navigator.appVersion.indexOf('MSIE')>=0)document.write(unescape('%3C')+'\!-'+'-')
//--></script><noscript><a href="http://www.omniture.com" title="Web Analytics"><img
src="http://starzmediawubbzytemphomepage.122.2O7.net/b/ss/starzmediawubbzytemphomepage/1/H.17--NS/0"
height="1" width="1" border="0" alt="" /></a></noscript><!--/DO NOT REMOVE/-->
<!-- End SiteCatalyst code version: H.17. -->

<img src="http://bp.specificclick.net?pixid=99016351" width=0 height=0 border=0>
	</body>
</html>

