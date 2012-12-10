<!-- main table starts -->
	<p align="right">
	<font color="#000000" size="+1">
	<?php echo "<b>".$number_of_records. "</b>&nbsp;Jobs Found..."; ?>
	</font>
	<?php 
	for($i=1;$i<=$links_to_display;$i++)
	{
		if($i==$current_page)
		{
			echo "<a href='/index.php
					?x_lower_limit=$x_lower_limit
					&x_upper_limit=$x_upper_limit
					&links_to_display=$links_to_display
					&number_of_records=$number_of_records
					&current_page=$i
					'>
					<font style=\"background-color:#990000;color:#FFF;\"><b>&nbsp;Page $i&nbsp</b></font></a>";
		}
		else
		{
			echo "<a href='/index.php
					?x_lower_limit=$x_lower_limit
					&x_upper_limit=$x_upper_limit
					&links_to_display=$links_to_display
					&number_of_records=$number_of_records
					&current_page=$i
					'>
					 Page $i&nbsp;</a>";
		}
		$x_lower_limit = $x_upper_limit +1;
		$x_upper_limit = $x_upper_limit + $x_offset;
	}
		
	?>

	<table align="center" border="0" width="990px" cellspacing="8">
	<tr cellpadding="10">
	<th class="th">Job ID</th><th class="th">Company</th><th class="th">Position</th><th class="th">Last Date to Apply</th><th class="th">Event Date</th><th class="th">Eligibility</th><th class="th">Comments</th><th class="th">Location</th><th class="th">Details</th>
	</tr>
	<?php
	//for($i=0;$i<20;$i++)
	//{
	$count =0;
	//$result = mysql_query($query);
	while($row = mysql_fetch_array($result))
	{
		$count++;
		
		$job_id = $row['job_id'];
		$company = $row['company'];
		$position = $row['position'];
		$lastdate = $row['lastdate'];
		$eventdate = $row['eventdate'];
		$eligibility = $row['eligibility'];
		$comments = $row['comments'];
		$location = $row['location'];
		$link = $row['link'];
		
		if($count % 2 ==0)
			echo "<tr align='center'>";
		else
			echo "<tr align='center' bgcolor='#DFDFDF'>";

		echo "<td>$job_id</td>";		
		echo "<td><strong><font color=\"#900\"><a href='jobs/$link' target=\"_blank\"><u>$company</u></a></font></strong></td>";
		echo "<td>$position</td>";
		echo "<td>$lastdate</td>";
		echo "<td>$eventdate</td>";
		echo "<td>$eligibility</td>";
		echo "<td>$comments</td>";
		echo "<td><strong><font color=\"#000\">$location</font></strong></td>";
		echo "<td><a href='jobs/$link' target=\"_blank\"><u>View Details</u></a></td>";
	}
	?>
	</p>
	
	</table>
	
<!-- main table ends -->