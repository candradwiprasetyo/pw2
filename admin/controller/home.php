<?php
session_start();

include '../lib/config.php';
include '../lib/function.php';

$title = addslashes($_POST['i_title']);
$description = addslashes($_POST['i_description']);
$date = new_date();

$act = $_GET['act'];

switch($act){
	case 'add':

		mysql_query("insert into home values('','".$title."','".$description."', '".$date."')");
		header("Location: ../index.php?page=pages/home&did=1");

	break;

	case 'edit':
		$home_id = $_GET['home_id'];
		
		mysql_query("update home set home_title = '".$title."', home_description = '".$description."' where home_id='".$home_id."'");
		header("Location: ../index.php?page=pages/home&did=2");

	break;

	case 'delete':
		$home_id = $_GET['home_id'];
		mysql_query("delete from home where home_id = '$home_id'");
		header("Location: ../index.php?page=pages/home&did=3");
	break;

}




?>