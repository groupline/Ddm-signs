<?php

if(isset($_POST['submit'])) {
$name=$_POST['name'];
$subject=$_POST['mobile'];
$mailfrom=$_POST['mail'];
$message=$_POST['requirement']

$mailTo= "creative@ddmsigns.com";
$headers= "From: ".$mailfrom;
$txt = "You have Received an email from ".$name.".\n\n".$message;

mail($mailTo, $subject, $txt, $headers);
header("Location: index.html?mailsend");
}

?>