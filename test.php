<?php
$mailstr = "saumitra.srivastav@gmail.";
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
if($check_mail)
{
	echo "valid";
}
else
{
	echo "invawlid";
}

?>