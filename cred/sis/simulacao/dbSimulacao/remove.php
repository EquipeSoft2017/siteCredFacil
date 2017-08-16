<?php

require_once '../../db_connect.php';
require_once '../../valida.php';

if($_POST) {
	$id = $_POST['id'];

	$sqlDf = "UPDATE fts SET active = 2 WHERE id = {$id}";
	if($connect->query($sqlDf) === TRUE) {
		echo "
		<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/sisbiv2/ficha-tecnica/ficha-tecnica.php'>
		<script type='text/javascript'>
			alert('Exclusão realizada com sucesso!!');
		</script>
                "; 
	} else {
		echo "
		<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/sisbiv2/ficha-tecnica/ficha-tecnica.php'>
		<script type='text/javascript'>
			alert('Houve um problema.Tente Novamente!!');
		</script>
                "; 
	}

	$connect->close();
}

?>