<?php

require_once '../../../conecta.php';
require_once '../../../valida.php';

if($_POST) {
	$id = $_POST['id'];

	$sqlDf = "UPDATE taxas SET active = 2 WHERE id = {$id}";
	if($link->query($sqlDf) === TRUE) {
		echo "
		<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/siteCredFacil/cred/sis/taxa/taxa.php'>
		<script type='text/javascript'>
			alert('Exclusão realizada com sucesso!!');
		</script>
                "; 
	} else {
		echo "
		<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/siteCredFacil/cred/sis/taxa/taxa.php'>
		<script type='text/javascript'>
			alert('Houve um problema.Tente Novamente!!');
		</script>
                "; 
	}

	$link->close();
}

?>