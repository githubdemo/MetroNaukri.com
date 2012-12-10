<?php
include ("config.php");

mysql_connect($host,$dbuser,$dbuserpass);
mysql_select_db("$dbname");


$msg= "";
if(isset($_REQUEST['register']))
{
	$email = $_REQUEST['email'];
	$name = $_REQUEST['name'];
	$qualification = $_REQUEST['qualification'];
	$yearofpassing = $_REQUEST['yearofpassing'];
	$location = $_REQUEST['location'];
	$filename = $_FILES['userfile']['name'];
	
	if($email == "" || $name=="" || $qualification=="" || $yearofpassing =="" || $location =="" || $filename =="")
	{
		$msg = "Please fill in all the required fields.";
	}
	else
	{
		$mailstr = $email;
		$check_mail = 0;
		if(substr_count($mailstr, "@") == 1)
		{
			$pos = strpos($mailstr, "@");
			$sub4 = substr($mailstr,$pos,50);
			if(substr_count($sub4,".")==1)
			{

				$pos2 = strpos($sub4,".");
				$sub5 = substr($sub4,$pos2,50);
		        if(strlen($sub5)>1)
				{
					$check_mail =1;
				}
			}	
		}
		if($check_mail == 0)
		{
			$msg = "Invalid email id.Please provide a valid email id.";
			
		}
		else
		{
		
		
		$result = mysql_query("select cid from register where email='$email';");
		if(mysql_fetch_array($result))
		{
			$msg = "This email-id is already registered for alerts.";
		}
		else
		{
				$qry = "insert into register 
		       (email,name,qualification,yearofpassing,location) 				 
		        values
				('$email','$name','$qualification','$yearofpassing','$location');";
				mysql_query($qry);
				$cid = mysql_insert_id();
				 {
  				 	// Configuration - Your Options
	    				$allowed_filetypes = array('.DOC','.DOCX','.PDF','.TXT'); // These will be the types of file that will pass the validation.
    		  		$max_filesize = 524288*2; // Maximum filesize in BYTES (currently 0.5MB).
      				$upload_path = './resumes/'; // The place the files will be uploaded to (currently a 'files' directory).
		
	   				$filename = $_FILES['userfile']['name']; // Get the name of the file (including file extension).
   					$ext = substr($filename, strpos($filename,'.'), strlen($filename)-1); // Get the extension from the filename.
 					$ext = strtoupper($ext);
				   // Check if the filetype is allowed, if not inform the user.
				   if(in_array($ext,$allowed_filetypes))
			       {
					   // Now check the filesize, if it is too large then inform the user.
				  		 if(filesize($_FILES['userfile']['tmp_name']) < $max_filesize)
						 {
								 // Check if we can upload to the specified path, if not DIE and inform the user.
						  		 if(is_writable($upload_path))
								 {
									 // Upload the file to your specified path.
						  			 if(move_uploaded_file($_FILES['userfile']['tmp_name'],$upload_path . $cid."_".$filename))
									 {
										 $msg = "Thanks <font color=\"#000000\">$name.</font> You have successfully registered for email updates.";
								     }
        				   			 else
									 {
										 $msg = 'There was an error in registration.Please try again.';
									 }
    			   		    	 
								 }
								 else
								 {
						  		 $msg = 'Error in uploading resume. Please try after sometime.';
								 }
 
						  		 
					     }
						 else
						 {
							$msg = 'The maximum size of resume can be 1 MB. Please try again.'; 
					     }
			
				   }
				   else
				   {
					  $msg = "Please select the resume only in 'txt','doc','docx' or 'pdf' format";
				   }
 					
   					
		 	}
		}
	}
	}
	
	
}

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
				<a href="/register.php"><font color="#990000">Register</font></a>
			
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
	
	<h1>Register for email alerts</h1>
	<br />
	<!-- quote -->	
	<div id="quote" style="width:980px">
		<div id="fl">
				<p>
					<strong><font color="#000" size="+1"></font></strong>Please provide your details to recieve a daily email containing information about all the new openings.<br />You can easily unsubscribe for email alert anytime you want using link provided in the email.			
				</p>			
		</div>
	</div>
	<p><font color="#990000" size="+1"><strong><?php echo "$msg"; ?></strong></font></p>
	
	
	<!-- quote ends -->
	<div id="register" style="width:990px">
	<form action="" method="post"  enctype="multipart/form-data">
	<table align="center" border="0" cellspacing="10" style="font-size:16px">
	<tr align="left">
		<td>Email-id</td>
		<td><input type="text" name="email"  size="40" class="registerinputtext"/></td>
	</tr>
	<tr>
		<td>Full Name</td>
		<td><input type="text" name="name" size="40" class="registerinputtext"/></td>
	</tr>
	<tr>
		<td>Highest Qualification</td>
		<td>
			<select name="qualification" class="registerselectinput">
			<option>BE/B-Tech</option>
			<option>BBA</option>
			<option>MBA</option>
			<option>BCA</option>
			<option>MCA</option>
			<option>Other</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>Year of Passing</td>
		<td>
			<select name="yearofpassing" class="registerselectinput">
			<?php
			for ($i=2001;$i<=2017;$i++)
			{
				echo "<option>$i</option>";
			}
			
			?>
			</select></td>
	</tr>
	<tr>
		<td>Current location</td>
		<td><input type="text" name="location" size="40" class="registerinputtext"/></td>
	</tr>
	<tr>
		<td>Upload Resume</td>
		<td><input type="file" name="userfile" size="40" class="registerinputtext"/>
		</td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="register" value="&nbsp;&nbsp;REGISTER&nbsp;&nbsp;" class="registerbutton"/></td>
	</tr>
	
	</table>
	</form>
	</div>
	
	<p>&nbsp;
	</p>
	
	<!-- quote -->	
	<div id="quote" style="width:990px">
		<div id="fl">
				<a href="/placement_papers/home.php">
				<p align="center">
					<strong><font color="#000" size="+2">Also check out <font color="#990000">Latest Placement Papers</font> section</font></strong><br /><font color="#990000">for most recent and fully solved placement papers of all companies.</font>
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