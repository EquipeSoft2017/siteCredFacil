<?php

require_once '../../../conecta.php';
require_once '../../../valida.php';

if($_POST) {
	$id = $_POST['id'];

	$sqlEsm = "UPDATE simulacoes SET active = 2 WHERE id = {$id}";
	if($link->query($sqlEsm) === TRUE) {
		echo "
		<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/sitecredfacil/cred/sis/simulacao/simulacao.php'>
		<script type='text/javascript'>
			alert('Exclusão realizada com sucesso!!');
		</script>
                "; 
	} else {
		echo "
		<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/sitecredfacil/cred/sis/simulacao/simulacao.php'>
		<script type='text/javascript'>
			alert('Houve um problema.Tente Novamente!!');
		</script>
                "; 
	}

	$link->close();
}

?>