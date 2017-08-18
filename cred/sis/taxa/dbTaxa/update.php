<?php

require_once '../../../conecta.php';
require_once '../../../valida.php';

if($_POST) {
	$bandeira = $_POST['bandeira'];
	$taxa = $_POST['taxa'];
	$id = $_POST['id'];

	$sqlUft  = "UPDATE taxas SET bandeira = '$bandeira', taxa = '$taxa' WHERE id = {$id}";
	if($link->query($sqlUft) === TRUE) {
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/siteCredFacil/cred/sis/taxa/taxa.php'>
			<script type='text/javascript'>
				alert('Atualizado com Sucesso!!');
			</script>
                "; 
	} else {
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/siteCredFacil/cred/sis/taxa/taxa.php'>
			<script type='text/javascript'>
				alert('Houve um problema.Tente novamente!!');
			</script>
                "; 
	}

	$link->close();

}

?>