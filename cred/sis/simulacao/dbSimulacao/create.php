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
	$cliente = strtoupper(preg_replace("/&([a-z])[a-z]+;/i", "$1", htmlentities(trim($_POST['cliente']))));
	$email = $_POST['email'];
	$fone = $_POST['fone'];
	$cel = $_POST['cel'];
	$valor = $_POST['valor'];
	$qtd_parcela = $_POST['qtd_parcela'];
	$valor_total = 0;
	$cartao = $_POST['cartao'];
	$data_criacao = date('d/m/Y');
	$data_atualizacao = date('d/m/Y');
	$operador = $_SESSION['login_admin'];
	$observacao = strtoupper(preg_replace("/&([a-z])[a-z]+;/i", "$1", htmlentities(trim($_POST['observacao']))));
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

	//Querie que retorna a taxa de juros
    $qry = mysqli_query($link, "SELECT taxa FROM taxas WHERE cartao = '$cartao'");

    //Tratamento dos dados retornados
    while ($ex = $qry->fetch_assoc()) {
        foreach ($ex as $key => $tx) {
            $tx;
        }
    }

	//algoritmo de simulação aqui.
	$tx_juros = $tx; // taxa de juros
    $rt = $tx_juros * 100; // taxa de juros na forma percentual
    $coeficiente = $tx_juros/(1-(1/(1+$tx_juros)**$qtd_parcela)); //calculo do coeficiente
    $valor_parcela = $valor * $coeficiente; // calculo do valor da parcela
    echo round($valor_parcela , 2 ); // arredondamento do valor da parcela para valor financeiro
    $valor_total = $valor_parcela * $qtd_parcela; // calculo do valor total do emprestimo
    echo round($valor_total , 2); // arredondamento do valor total do emprestimo para valor financeiro


	$sqlSm = "INSERT INTO simulacoes (cliente, email, fone, cel, cartao, valor, qtd_parcela, valor_parcela, valor_total, data_criacao, data_atualizacao, operador, observacao, active) VALUES ('$cliente', '$email', '$fone', '$cel', '$cartao', '$valor', '$qtd_parcela', '$valor_parcela', '$valor_total', '$data_criacao', '$data_atualizacao', '$operador', '$observacao', 1)";

	if($link->query($sqlSm) === TRUE){
		echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/siteCredFacil/cred/sis/simulacao/simulacao.php'>
				<script type='text/javascript'>
					alert('Registro gravado com Sucesso.');
				</script>
			";
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/siteCredFacil/cred/sis/simulacao/simulacao.php'>
				<script type='text/javascript'>
					alert('Houve um problema.Tente Novamente.');
				</script>
				";
		}
		$link->close(); 
}

?>
	
</body>
</html>