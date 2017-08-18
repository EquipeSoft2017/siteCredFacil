<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SIS Control</title>
	<link rel="stylesheet" href="">
</head>
<body>
<?php 

require_once '../../../conecta.php';
require_once '../../../valida.php';

//dados do formulario
$taxa = $_POST['taxa'];
$bandeira = $_POST['bandeira'];


$sql = "INSERT INTO `taxas` (`id`, `bandeira`, `taxa`, `data_criacao`, `data_atualizacao`, `active`) VALUES (NULL, '".$bandeira."', '".$taxa."', DEFAULT, DEFAULT, DEFAULT)";

if ($link->query($sql) === TRUE) {
	echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/siteCredFacil/cred/sis/taxa/taxa.php'>
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

/*require_once '../../../conecta.php';
require_once '../../../valida.php';

if($_POST) {

	//dados do formulario
	$taxa = $_POST['taxa'];
	$bandeira = $_POST['bandeira'];

	if($taxa == '' OR $bandeira == ''){
		echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/siteCredFacil/cred/sis/taxa/create.php'>
				<script type='text/javascript'>
						alert('Preencha os campos taxa e bandeira corretamente');
				</script>
			";
			exit;
	}
		
	$tx = preg_replace("/&([a-z])[a-z]+;/i", "$1", htmlentities(trim($taxa)));
	$br = preg_replace("/&([a-z])[a-z]+;/i", "$1", htmlentities(trim($bandeira)));

	$sqlSm = mysqli_query($link, 'INSERT INTO taxas VALUES');
	$sqlSm .= '(bandeira, taxa, data)';
	if($connect->query($sql) === TRUE){
		echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/sitecredfacil/taxa/taxa.php'>
				<script type='text/javascript'>
					alert('Registro gravado com Sucesso.');
				</script>
			";
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/sitecredfacil/taxa/taxa.php'>
				<script type='text/javascript'>
					alert('Houve um problema.Tente Novamente.');
				</script>
				";
		}
		$connect->close(); 
}*/

?>
	
</body>
</html>