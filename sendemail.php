<?php 
	
	//Recebe as vari�veis
	$nome = $_POST["nome"];
	$email = $_POST["email"];
	$assunto = $_POST["assunto"];
	$mensagem = $_POST["mensagem"];

	//Inclui o arquivo class.phpmailer.php
	include("class.phpmailer.php");

	//Instacia a classe PHPMailer
	$php_mail = new PHPMailer();

	//Define o tipo de conex�o e os dados do servidor
	$php_mail->IsSMTP();
	$php_mail->Host = "endere�o do servidor";
	$php_mail->SMTPAuth = true; //Caso for usar autentica��o SMTP
	$php_mail->Username = "usuario do servidor";
	$php_mail->Password = "senha do usu�rio do servidor";

	//Define o emissor
	$php_mail->From = "email do remetente";
	$php_mail->FromName = "nome para o remetente";	

	//Define o(s) destinat�rio(s)
	$php_mail->AddAddress("endere�o que vai receber os emails do site");

	//Define que o email ser� enviado em formato de HTML
	$php_mail->isHTML(true);

	//Define o assunto e a mensagem do email
	$php_mail->Subject = $assunto
	$php_mail->Body = "<strong>Nome: </strong> $nome<br/><br/> <strong>Email : </strong> $email<br/><br/> <strong>Mensagem : </strong> $mensagem";

	//Envia o email
	$envio = $php_mail->Send();

	//Exibe o resultado
	if($envio){
		echo "Email enviado com sucesso!!!";
	} else {
		echo "N�o foi poss�vel enviar o emil!";
	}
?>