<?php

session_start();

if(empty($_SESSION['login_admin'])){
	return header('location: ../../index.html');	
}

/*
if (empty($_SESSION['login_admin']) OR empty($_SESSION['login_user'])) {
    return header('location: ../../index.html');
}

SELECT email FROM usuarios WHERE email = 'jessesouza37@gmail.com' AND senha = '123456'

SELECT tipo FROM usuarios WHERE email = 'jessesouza37@gmail.com' AND tipo = 1 AND senha = '123456'

*/
?>