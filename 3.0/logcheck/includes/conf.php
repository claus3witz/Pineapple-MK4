<?php

require("/pineapple/components/infusions/logcheck/handler.php");

global $directory;

require($directory."includes/vars.php");

if (isset($_POST['set_conf']))
{
	if($_POST['set_conf'] == "email")
	{
		$filename = $directory."includes/infusion.conf";
		
		$To = $_POST['to'];
		$From = $_POST['from'];
		$Subject = $_POST['subject'];

		$newdata = "to=".$To."\nfrom=".$From."\nsubject=".$Subject;
		$newdata = ereg_replace(13,  "", $newdata);
		$fw = fopen($filename, 'w');
		$fb = fwrite($fw,stripslashes($newdata));
		fclose($fw);
	}
	
	if($_POST['set_conf'] == "match")
	{
		$filename = $match_path;
		$newdata = $_POST['newdata'];

		$newdata = ereg_replace(13,  "", $newdata);
		$fw = fopen($filename, 'w');
		$fb = fwrite($fw,stripslashes($newdata));
		fclose($fw);
	}

	if($_POST['set_conf'] == "ignore")
	{
		$filename = $ignore_path;
		$newdata = $_POST['newdata'];

		$newdata = ereg_replace(13,  "", $newdata);
		$fw = fopen($filename, 'w');
		$fb = fwrite($fw,stripslashes($newdata));
		fclose($fw);
	}
	
	if($_POST['set_conf'] == "smtp")
	{
		$filename = $smtp_path;
		$newdata = $_POST['newdata'];

		$newdata = ereg_replace(13,  "", $newdata);
		$fw = fopen($filename, 'w');
		$fb = fwrite($fw,stripslashes($newdata));
		fclose($fw);
	}
	
	if($_POST['set_conf'] == "custom")
	{
		$filename = $custom_path;
		$newdata = $_POST['newdata'];

		$newdata = ereg_replace(13,  "", $newdata);
		$fw = fopen($filename, 'w');
		$fb = fwrite($fw,stripslashes($newdata));
		fclose($fw);
	}
	
	echo '<font color="lime"><strong>updated</strong></font>';
}

?>