<?php

require_once '../../../conecta.php';
require_once '../../../valida.php';

if($_POST) {
	
	$nome = $_POST['nome'];
	$celular = $_POST['celular'];
	$id = $_POST['id'];

	$sqlUft  = "UPDATE clientes SET nome = '$nome', celular = '$celular' WHERE id = {$id}";
	
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