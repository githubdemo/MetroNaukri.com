<?php
include ("config.php");

mysql_connect($host,$dbuser,$dbuserpass);
mysql_select_db("$dbname");

$x_offset = 25;

if (isset($_GET['x_lower_limit']))
{
	$x_lower_limit = $_GET['x_lower_limit'];
	$x_upper_limit = $_GET['x_upper_limit'];
	$links_to_display = $_GET['links_to_display'];
	$number_of_records = $_GET['number_of_records'];
	$current_page = $_GET['current_page'];
}
else
{
		$query0 = "SELECT count(*) FROM job_info  where isbank = 1 and isshow = 1  ";
		$result0 = mysql_query($query0);
		$row0 = mysql_fetch_array($result0);
		$number_of_records = $row0[0];
		
		$links_to_display = ceil(($number_of_records/25));
		if($number_of_records%25==1)
		{
			$links_to_display = $links_to_display - 1;
		}
		$current_page = 1;
		$x_lower_limit = 0;
		$x_upper_limit = 25;
}
$query = "SELECT job_id,company, position, lastdate, eventdate, eligibility, comments, location, link
		  FROM job_info 
		  where isbank = 1  and isshow = 1 
	      ORDER BY postingdate DESC
		  LIMIT  $x_lower_limit, $x_upper_limit";
$result = mysql_query($query);

	$x_lower_limit = 0;
		$x_upper_limit = 25;

?>



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
	<div id="content">
		<div id="top">
			<p>
				<a href="/index.php">Home</a>
				<a href="/placement_papers/home.php">Latest Placement Papers</a>
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
			<li><a href="/bankjobs.php"><font color="#990000"><strong>Bank Jobs</strong></font></a></li>
			<li><a href="/walkins.php">Walkins</a></li>
		</ul>
	<div >
<?php include ("quote.php")?>
	<h1>Banking Sector Jobs</h1>
<!-- main table starts -->
	<?php include("maintable.php"); ?>
	
<!-- main table ends -->
	
	<!-- HOTTEST JOBS-->
	<?php include("hottest.php"); ?>
	
	<!-- REFERRAL JOBS -->
	<?php include("referral.php"); ?>
	
	<!-- main footer -->
	<?php include("footermain.php"); ?>
	</div>
	</div>
</body>
</html>