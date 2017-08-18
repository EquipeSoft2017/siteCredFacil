<?php

require_once '../../../conecta.php';
require_once '../../../valida.php';

if($_POST) {
	
	$nome = $_POST['nome'];
	$funcao = $_POST['funcao'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$tipo = $_POST['tipo'];
	$id = $_POST['id'];

	$sqlUft  = "UPDATE usuarios SET nome = '$nome', funcao = '$funcao', email = '$email', senha = '$senha', tipo = '$tipo' WHERE id = {$id}";
	if($link->query($sqlUft) === TRUE) {
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/siteCredFacil/cred/sis/usuario/usuario.php'>
			<script type='text/javascript'>
				alert('Atualizado com Sucesso!!');
			</script>
                "; 
	} else {
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/siteCredFacil/cred/sis/usuario/usuario.php'>
			<script type='text/javascript'>
				alert('Houve um problema.Tente novamente!!');
			</script>
                "; 
	}

	$link->close();

}

?>