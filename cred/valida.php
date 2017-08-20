<?php

session_start();

if(empty($_SESSION['login_admin'])){
	return header('location: ../../index.php');	
}

?>