<?php

require_once '../../db_connect.php';
require_once '../../valida.php';

if($_POST) {
	$it = $_POST['it'];
	$qtd = $_POST['qtd'];
	$id = $_POST['id'];

	$sqlUft  = "UPDATE fts SET nome = '$it', quantidade = '$qtd' WHERE id = {$id}";
	if($connect->query($sqlUft) === TRUE) {
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/sisbiv2/ficha-tecnica/ficha-tecnica.php'>
			<script type='text/javascript'>
				alert('Atualizado com Sucesso!!');
			</script>
                "; 
	} else {
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/sisbiv2/ficha-tecnica/ficha-tecnica.php'>
			<script type='text/javascript'>
				alert('Houve um problema.Tente novamente!!');
			</script>
                "; 
	}

	$connect->close();

}

?>