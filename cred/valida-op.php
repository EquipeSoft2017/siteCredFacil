<?php 
 session_start();

 if (empty($_SESSION['login_user'])){
 	return header('location: ../../index.php');
 }
?>