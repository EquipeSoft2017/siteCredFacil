<?php

require_once '../../../conecta.php';
require_once '../../../valida.php';

if($_POST) {
	
	$nome = $_POST['nome'];
<<<<<<< HEAD
	$cpf = $_POST['cpf'];
	$rg = $_POST['rg'];
	$data_nascimento = $_POST['data_nascimento'];
	$celular = $_POST['celular'];
	$email = $_POST['email'];
	$id = $_POST['id'];

	$sqlUft  = "UPDATE clientes SET nome = '$nome', cpf = '$cpf', rg = '$rg', data_nascimento = '$data_nascimento', celular = '$celular', email = '$email' WHERE id = {$id}";
=======
	$celular = $_POST['celular'];
	$id = $_POST['id'];

	$sqlUft  = "UPDATE clientes SET nome = '$nome', celular = '$celular' WHERE id = {$id}";
>>>>>>> 5cb0aea41b5ffed7b0f84863d7653214f66cdd86
	
	if($link->query($sqlUft) === TRUE) {
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/siteCredFacil/cred/sis/cliente/cliente.php'>
			<script type='text/javascript'>
				alert('Atualizado com Sucesso!!');
			</script>
                "; 
	} else {
<<<<<<< HEAD
		echo 
			"Error" . $sqlUft .  "<br>" . $link->error;
		
=======
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/siteCredFacil/cred/sis/cliente/cliente.php'>
			<script type='text/javascript'>
				alert('Houve um problema.Tente novamente!!');
			</script>
                "; 
>>>>>>> 5cb0aea41b5ffed7b0f84863d7653214f66cdd86
	}

	$link->close();

}

?>