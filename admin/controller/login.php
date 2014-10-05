<?php
session_start();

include '../lib/config.php';

$password = md5($_POST['i_password']);
$query = mysql_query("select user_password from users where user_id = 1");
$row = mysql_fetch_object($query);
echo $row->user_password."<br>";
echo $password;

if($password == $row->user_password){
	$_SESSION['loged'] = 1;
	$_SESSION['user_id'] = 1;
	header("Location: ../index.php");
}else{
	header("Location: ../login.php?err=1");
}

?>