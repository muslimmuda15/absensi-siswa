<?php 
setcookie('username', '', time()-3600, '/'); 
setcookie('password', '', time()-3600, '/');
$_COOKIE["username"]="";
$_COOKIE["password"]="";
header("Location: login.php");
?>