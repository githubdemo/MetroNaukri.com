<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>MetroNaukri.com - Freshers Jobs , Walkins, Referral Jobs, Government Jobs, 2011 Passout Jobs, Placement Papers</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="description" content="MetroNaukri.com" />
	<meta name="keywords" content="jobs, 2011, freshers, experienced , bangalore, tcs, wipro" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	
	<!-- Start of Woopra Code -->
	<script type="text/javascript">
		function woopraReady(tracker) {
		tracker.setDomain('metronaukri.com');
		tracker.setIdleTimeout(300000);
		tracker.track();
		return false;
		}
		(function() {
			var wsc = document.createElement('script');
			wsc.src = document.location.protocol+'//static.woopra.com/js/woopra.js';
			wsc.type = 'text/javascript';
			wsc.async = true;
			var ssc = document.getElementsByTagName('script')[0];
			ssc.parentNode.insertBefore(wsc, ssc);
		})();
	</script>
<!-- End of Woopra Code -->

	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-27927477-1']);
		_gaq.push(['_trackPageview']);
		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
</head>

<body>
	<div id="content" style="width:990px">
		<div id="top">
			<p>
				<a href="/index.php">Home</a>
				<a href="/placement_papers/home.php"><font color="#990000">Latest Placement Papers</font></a>
				<a href="/register.php">Register</a>
			
			</p>
			<form id="search_engine" method="get" action="http://www.google.com/search">
				<p><input class="searchfield" name="q" type="text" id="keywords" value="Search MetroNaukri.com" onfocus="document.forms['search_engine'].keywords.value='';" onblur="if (document.forms['search_engine'].keywords.value == '') document.forms['search_engine'].keywords.value='Search Keywords';" />
				<input type="hidden"  name="sitesearch" value="metronaukri.com/*" />
				<input class="searchbutton" name="submit" type="submit" value="Search" /></p>
			</form>
		</div>
	
		
	<div id="logo">
			<h1><a href="/index.php"><font color="#666666">Metro</font>Naukri.com</a></h1>
		</div>
<!-- facebook like button -->
	<iframe src="http://www.facebook.com/plugins/like.php?href=http://facebook.com/metronaukri&layout=standard&show_faces=true&width=450&action=like&colorscheme=light&height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:330px; height:26px; padding-top:22px; padding-left:30px;" allowTransparency="true"></iframe>
<!-- facebook like button ends -->

		<ul id="menu">
			<li><a href="/index.php">All  &nbsp;Jobs</a></li>
			<li><a href="/jobs2011.php">Jobs for 2011 Passouts</a></li>
			<li><a href="/bcamca.php">BCA/MCA Jobs</a></li>
			<li><a href="/itjobs.php">IT Jobs</a></li>
			<li><a href="/bbamba.php">BBA/MBA Jobs</a></li>
			<li><a href="/govtjobs.php">Govt. Jobs</a></li>
			<li><a href="/bankjobs.php">Bank Jobs</a></li>
			<li><a href="/walkins.php">Walkins</a></li>
		</ul>
	<div >
	
	<h1>Placement Papers</h1>
	<br />
	<!-- quote -->	
	<div id="quote" style="width:980px">
		<div id="fl">
				<p>
					<strong><font color="#000" size="+1"></font></strong>This section is being updated. Please visit this section again after 31st Januaryto see placement papers of over 60 companies. 			
				</p>			
		</div>
	</div>
	
	<!-- quote ends -->
	<!-- ajax begin -->
	
				
		<script type="text/javascript">
		function loadXMLDoc()
		{
			
			document.getElementById("myDiv").innerHTML = "<img src='images/wait.gif' />";
		var xmlhttp;
		if (window.XMLHttpRequest)
		  {// code for IE7+, Firefox, Chrome, Opera, Safari
		  xmlhttp=new XMLHttpRequest();
		  }
		else
		  {// code for IE6, IE5
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		  }
		xmlhttp.onreadystatechange=function()
		  {
		  if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
			document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
			}
		  }
		  var url = "getpaper.php?name="+ document.getElementById('company').value;
		  
		xmlhttp.open("GET",url,true);
		xmlhttp.send();
		}
		</script>
		
	<div id="register" style="width:990px">
		<table align="center" border="0" cellspacing="10" style="font-size:16px">
	<tr align="left" >
		<td>
			<font size="+1">Select company name:</font>
			<select id="company" class="registerselectinput">
				<option>TCS</option>
				<option>Microsoft</option>
				<option>Accenture</option>
				<option>Oracle</option>
			</select>
			<input type="button" onclick="loadXMLDoc()" value="Show Paper" class="registerbutton"/>
		</td>

	</tr>
	</table>
	<br />
	</div>
	<br />
	<br />
	<div id="myDiv" style="width:990px"></div>
	
	<!--

		<select id="company">
			<option>Microsoft</option>
			<option>Google</option>
		</select>
	<div id="myDiv"><h2>Let AJAX change this text</h2></div>
<button type="button" onclick="loadXMLDoc()">Change Content</button>
		-->
	
	
	<!-- ajax end -->



	<!-- quote -->	
	<div id="quote" style="width:980px">
		<div id="fl">
				<a href="/register.php">
				<p align="center">
					<strong><font color="#000" size="+2">Click here to <font color="#990000">REGISTER</font> for email updates of latest job openings.</font></strong><br /><font color="#990000">On registration you will also recieve FREE E-BOOK to prepare for aptitude tests, GD and interview questions :)</font>
				</p>
				</a>
		</div>
	</div>
	<!-- quote ends -->
	
	<!-- footer -->	
	<div id="footer" style="width:990px">
		<div id="fl">
		
				<p>
					<strong><font color="#000">Disclaimer:</font></strong> The owner of the website takes no responsibitlity for the information provided on the website.<br />
					<strong><font color="#000">Mail us for feedback,suggestions or queries:</font> contact@metronaukri.com</strong>
					
				</p>
			
		</div>
	</div>
	<!-- footer -->
	</div>
	</div>
</body>
</html>