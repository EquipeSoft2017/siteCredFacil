<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
<?php 

require_once '../../../conecta.php';
require_once '../../../valida.php';

if($_POST) {

	//dados do formulario
	$nome = $_POST['nome'];
	$celular = $_POST['celular'];
	

$sql = "INSERT INTO `clientes` (`id`, `nome`, `celular`, `dt_cadastro`, `dt_atualizado`, `active`) VALUES (NULL, '".$nome."', '".$celular."', DEFAULT, DEFAULT, DEFAULT)";

if ($link->query($sql) === TRUE) {
	echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/siteCredFacil/cred/sis/cliente/cliente.php'>
				<script type='text/javascript'>
						alert('Cadastro realizado com sucesso!');
				</script>
			";
			exit;
} else {
	echo 
			"Error" . $sql . "<br>" . $link->error;
			exit;
}

$link->close();
	
	/*
	$nm = preg_replace("/&([a-z])[a-z]+;/i", "$1", htmlentities(trim($nome)));
	$ob = preg_replace("/&([a-z])[a-z]+;/i", "$1", htmlentities(trim($observacao)));

	$sqlSm = mysqli_query($link, 'INSERT INTO simulacoes VALUES');
	$sqlSm .= '(nome,email,telefone,celular,valor,parcela,cartao,data,observacao,)';
	if($connect->query($sql) === TRUE){
		echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/sisbiv2/ficha-tecnica/ficha-tecnica.php'>
				<script type='text/javascript'>
					alert('Registro gravado com Sucesso.');
				</script>
			";
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/sisbiv2/ficha-tecnica/ficha-tecnica.php'>
				<script type='text/javascript'>
					alert('Houve um problema.Tente Novamente.');
				</script>
				";
		}
		$connect->close(); */
}

?>
	
</body>
</html>