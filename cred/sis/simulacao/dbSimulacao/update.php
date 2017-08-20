<?php

require_once '../../../conecta.php';
require_once '../../../valida.php';

if($_POST) {
	$cliente = strtoupper(preg_replace("/&([a-z])[a-z]+;/i", "$1", htmlentities(trim($_POST['cliente']))));
	$email = $_POST['email'];
	$fone = $_POST['fone'];
	$cel = $_POST['cel'];
	$valor = $_POST['valor'];
	$qtd_parcela = $_POST['qtd_parcela'];
	$valor_total = 0;
	$cartao = $_POST['cartao'];
	$data_criacao = date('Y-m-d H:i:s'); 
	$data_atualizacao = date('Y-m-d H:i:s');
	$operador = $_SESSION['login_admin'];
	$observacao = strtoupper(preg_replace("/&([a-z])[a-z]+;/i", "$1", htmlentities(trim($_POST['observacao']))));
	$selecione = "Selecione";
	$id = $_POST['id'];

	//Querie que retorna a taxa de juros
    $qry = mysqli_query($link, "SELECT taxa FROM taxas WHERE bandeira = '$cartao'");

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
    //round($valor_parcela , 2 ); // arredondamento do valor da parcela para valor financeiro
    $valor_total = $valor_parcela * $qtd_parcela; // calculo do valor total do emprestimo
    //round($valor_total , 2); // arredondamento do valor total do emprestimo para valor financeiro


	$sqlUsm  = "UPDATE simulacoes SET cliente = '$cliente', email = '$email', fone = '$fone', cel = '$cel', cartao = '$cartao', valor = '$valor', qtd_parcela = '$qtd_parcela', valor_parcela = '$valor_parcela', valor_total = '$valor_total', data_criacao = '$data_criacao', data_atualizacao = '$data_atualizacao', operador = '$operador', observacao = '$observacao' WHERE id = {$id}";

	if($link->query($sqlUsm) === TRUE) {
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/siteCredFacil/cred/sis/simulacao/simulacao.php'>
			<script type='text/javascript'>
				alert('Atualizado com Sucesso!!');
			</script>
                "; 
	} else {
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/siteCredFacil/cred/sis/simulacao/simulacao.php'>
			<script type='text/javascript'>
				alert('Houve um problema.Tente novamente!!');
			</script>
                "; 
	}

	$link->close();

}

?>