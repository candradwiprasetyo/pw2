<?php
include "../lib/config.php";

$act = (isset($_GET['act'])) ? $_GET['act'] : "";

switch($act){
	case 1:
		echo "adir";
		header('Location:../index.php#update_page');
	break;
	
	case 2:
		echo "contact";
		header('Location:../index.php#contact_page');
	break;
}

?>