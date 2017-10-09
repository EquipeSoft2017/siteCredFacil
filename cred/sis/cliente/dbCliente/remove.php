<?php

require_once '../../../conecta.php';
require_once '../../../valida.php';


if($_POST) {
	$id = $_POST['id'];

<<<<<<< HEAD
	$sqlDf = "UPDATE clientes SET ativo = 2 WHERE id = {$id}";
=======
	$sqlDf = "UPDATE clientes SET active = 2 WHERE id = {$id}";
>>>>>>> 5cb0aea41b5ffed7b0f84863d7653214f66cdd86
	if($link->query($sqlDf) === TRUE) {
		echo "
		<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/siteCredFacil/cred/sis/cliente/cliente.php'>
		<script type='text/javascript'>
			alert('Exclusão realizada com sucesso!!');
		</script>
                "; 
	} else {
		echo "
		<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/iteCredFacil/cred/sis/cliente/cliente.php''>
		<script type='text/javascript'>
			alert('Houve um problema.Tente Novamente!!');
		</script>
                "; 
	}

	$link->close();
}

?>