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
	$funcao = $_POST['funcao'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$tipo = $_POST['tipo'];
	$selecione = "Selecione";

	if($tipo == $selecione){
		echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/siteCredFacil/cred/sis/simulacao/create.php'>
				<script type='text/javascript'>
						alert('Selecione o tipo de usuário corretamente');
				</script>
			";
			exit;
	}

$sql = "INSERT INTO `usuarios` (`id`, `nome`, `funcao`, `email`, `senha`, `tipo`, `dt_cadastro`, `dt_atualizado`, `active`) VALUES (NULL, '".$nome."', '".$funcao."', '".$email."', '".$senha."', '".$tipo."',  DEFAULT, DEFAULT, DEFAULT)";

if ($link->query($sql) === TRUE) {
	echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/siteCredFacil/cred/sis/usuario/usuario.php'>
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