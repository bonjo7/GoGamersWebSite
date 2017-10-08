<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php


$fullname = $_POST['fullname'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$repeatpassword = $_POST['repeatpassword'];

echo "Thank you for registering with us";

$ourFileName="register.txt";
$ourFileName=fopen($ourFileName, 'a') or die ("Can not open file");
fwrite($ourFileHandle, "$fullname;$email;$username;$password;$repeatpassword"."\n");
fclose($ourFileHandle);


?>
</body>
</html>