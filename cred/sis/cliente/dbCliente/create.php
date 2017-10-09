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

<<<<<<< HEAD
	//dados pessoais
	$nome = $_POST['nome'];
	$dataNasc = $_POST['data_nascimento'];
	$cpf = $_POST['cpf'];
	$rg = $_POST['rg'];
	$email = $_POST['email'];
	$celular = $_POST['celular'];
	
	// dados bancários
	$banco = $_POST['banco'];
	$agencia = $_POST['agencia'];
	$conta = $_POST['conta'];
	$operacao = $_POST['operacao'];
	$favorecido = $_POST['favorecido'];
	
	// endereço
	$rua = $_POST['rua'];
	$numero = $_POST['numero'];
	$complemento = $_POST['complemento'];
	$bairro = $_POST['bairro'];
	$cidade = $_POST['cidade'];
	$uf = $_POST['uf'];
	$cep = $_POST['cep'];

$sql1 = "INSERT INTO `enderecos` (`id`, `rua`, `numero`, `complemento`, `bairro`, `cidade`, `uf`, `cep`, `ativo`,`data_criacao`, `data_atualizacao`) VALUES (NULL, '".$rua."', '".$numero."', '".$complemento."', '".$bairro."', '".$cidade."','".$uf."','".$cep."', DEFAULT, DEFAULT, DEFAULT)";





if ($link->query($sql1) === TRUE) {

	$sql2 = "INSERT INTO `clientes` (`id`, `nome`, `endereco_id`, `data_nascimento`, `cpf`, `rg`, `email`, `celular`,`ativo`,`data_criacao`, `data_atualizacao`) VALUES (NULL, '".$nome."', LAST_INSERT_ID(), '".$dataNasc."', '".$cpf."', '".$rg."', '".$email."','".$celular."', DEFAULT, DEFAULT, DEFAULT)";

	if ($link->query($sql2) === TRUE) {

		$sql3 = "INSERT INTO `contas_bancarias` (`id`, `banco`, `agencia`, `conta`, `operacao`, `favorecido`, `cliente_id`, `ativo`,`data_criacao`, `data_atualizacao`) VALUES (NULL, '".$banco."', '".$agencia."', '".$conta."', '".$operacao."', '".$favorecido."', LAST_INSERT_ID(), DEFAULT, DEFAULT, DEFAULT)";

		if ($link->query($sql3) === TRUE) {

			echo "
=======
	//dados do formulario
	$nome = $_POST['nome'];
	$celular = $_POST['celular'];
	

$sql = "INSERT INTO `clientes` (`id`, `nome`, `celular`, `dt_cadastro`, `dt_atualizado`, `active`) VALUES (NULL, '".$nome."', '".$celular."', DEFAULT, DEFAULT, DEFAULT)";

if ($link->query($sql) === TRUE) {
	echo "
>>>>>>> 5cb0aea41b5ffed7b0f84863d7653214f66cdd86
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/siteCredFacil/cred/sis/cliente/cliente.php'>
				<script type='text/javascript'>
						alert('Cadastro realizado com sucesso!');
				</script>
			";
			exit;
<<<<<<< HEAD
		} else {
			echo 
				"Error" . $sql1 . $sql2 . $sql3 .  "<br>" . $link->error;
				exit;
			}
	} else {
		echo 
			"Error" . $sql1 . $sql2 .  "<br>" . $link->error;
			exit;
		}	
} else {
	echo 
		"Error" . $sql1 .  "<br>" . $link->error;
		exit;
=======
} else {
	echo 
			"Error" . $sql . "<br>" . $link->error;
			exit;
>>>>>>> 5cb0aea41b5ffed7b0f84863d7653214f66cdd86
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