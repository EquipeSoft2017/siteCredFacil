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
	$cliente = $_POST['cliente'];
	$email = $_POST['email'];
	$fone = $_POST['fone'];
	$cel = $_POST['cel'];
	$valor = $_POST['valor'];
	$qtd_parcela = $_POST['qtd_parcela'];
	$cartao = $_POST['cartao'];
	$data_criacao = date(d/m/Y);
	$observacao = $_POST['observacao'];
	$selecione = "Selecione";

	if($cartao == $selecione OR $qtd_parcela == $selecione ){
		echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/siteCredFacil/cred/sis/simulacao/create.php'>
				<script type='text/javascript'>
						alert('Selecione os campos cartão e parcela corretamente');
				</script>
			";
			exit;
	}

	
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