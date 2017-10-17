<?php

require_once '../../../conecta.php';
require_once '../../../valida.php';

if($_POST) {
	
	$nome = $_POST['nome'];

	$cpf = $_POST['cpf'];
	$rg = $_POST['rg'];
	$data_nascimento = $_POST['data_nascimento'];
	$celular = $_POST['celular'];
	$email = $_POST['email'];
	$id = $_POST['id'];

	$sqlUft  = "UPDATE clientes SET nome = '$nome', cpf = '$cpf', rg = '$rg', data_nascimento = '$data_nascimento', celular = '$celular', email = '$email' WHERE id = {$id}";

	
	if($link->query($sqlUft) === TRUE) {
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/siteCredFacil/cred/sis/cliente/cliente.php'>
			<script type='text/javascript'>
				alert('Atualizado com Sucesso!!');
			</script>
                "; 
	} else {

		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/siteCredFacil/cred/sis/cliente/cliente.php'>
			<script type='text/javascript'>
				alert('Houve um problema.Tente novamente!!');
			</script>
                "; 

	}

	$link->close();

}

?>