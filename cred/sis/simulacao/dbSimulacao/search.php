<?php
require_once '../../../conecta.php';
require_once '../../../valida.php';

	$busca = $_POST['rct'];
	if($busca == 'Localizar Simulação'){
		echo "
	        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/sitecredfacil/cred/sis/simulacao/simulacao.php'>
	        <script type='text/javascript'>
	        	alert('Selecione o item corretamente!');
	        </script>
	                "; 
	    exit;            
	}
	
	/*
	$sql_ms = "SELECT * FROM simulações";
	$result_ms = $link->query($sql_ms);
	$data_ms = $result_ms->fetch_assoc();	
	*/
?>

<!DOCTYPE html>
<html>
	<head>
		<title>SIS - Control</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="css/dashboard.css">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script type="text/javascript" src="https://www.google.com/jsapi"></script>

	</head>
	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top">
	      		<div class="container-fluid">
	        		<div class="navbar-header">
	       				 <a class="navbar-brand" href="../../index.php">SIS - Control</a>
	        		</div>

		        	<div id="navbar" class="navbar-collapse collapse">
		        		<ul class="nav navbar-nav navbar-right">
		        			<li>
				              <a>
				                <?php
				                    $login_session=$_SESSION['login_admin'];
				                        echo ($login_session);
				                ?>
				              </a>
				            </li>
		        			<li>
		        				<a href="../logout.php">Sair
		        				</a>
		        			</li>
		        		</ul>
		        	</div>
	      		</div>
	    </nav>
			<br>
				<div class="container-fluid">
					<h4 class="page-header">Simulação:<?php echo (' '.$busca) ?></h4>
					<!-- Listar dados da Entidade -->
			<table class=" table table table-striped table-hover table-bordered table-condensed">
				<thead class="thead-inverse">
					<tr>
						<th class="col-xs-1 col-sm-1 col-md-1 col-lg-1">Código</th>
						<th class="col-xs-3 col-sm-3 col-md-3 col-lg-3">Cliente</th>
						<th class="col-xs-1 col-sm-1 col-md-1 col-lg-1">Valor Total</th>
						<th class="col-xs-1 col-sm-1 col-md-1 col-lg-1">Cartão</th>
						<th class="col-xs-1 col-sm-1 col-md-1 col-lg-1">Qtd Parc.</th>
						<th class="col-xs-1 col-sm-1 col-md-1 col-lg-1">Vlr. Parc.</th>
						<th class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Data</th>
						<th class="col-xs-1 col-sm-1 col-md-1 col-lg-1">Ações</th>
					</tr>
				</thead>
				<tbody>
			<?php
			
			//selecionar os itens a serem mostrados na página
			
			$result_sms = "SELECT * FROM simulacoes WHERE active = 1 AND cliente = '$busca' ORDER BY data_criacao DESC";
			$resultado_sms = mysqli_query($link, $result_sms);

			if($resultado_sms->num_rows > 0) {
				while($row = $resultado_sms->fetch_assoc()) {
					echo "<tr>
						<td>".$row['id']."</td>
						<td>".mb_convert_case($row['cliente'],MB_CASE_UPPER)."</td>
						<td>".mb_convert_case('R$ '.$row['valor_total'],MB_CASE_UPPER)."</td>
						<td>".mb_convert_case($row['cartao'],MB_CASE_UPPER)."</td>
						<td>".mb_convert_case($row['qtd_parcela'],MB_CASE_UPPER)."</td>
						<td>".mb_convert_case('R$ '.$row['valor_parcela'],MB_CASE_UPPER)."</td>
						<td>".mb_convert_case($row['data_criacao'],MB_CASE_UPPER)."</td>
						<td>
							<a href='../review.php?id=".$row['id']."'><button class='btn btn-xs btn-info active' type='button'><span class='glyphicon glyphicon-eye-open'></span> </button></a>
							<a href='../edit.php?id=".$row['id']."'><button class='btn btn-xs btn-warning active' type='button'><span class='glyphicon glyphicon-edit'></span></button></a>
							<a href='../remove.php?id=".$row['id']."'><button class='btn btn-xs btn-danger active' type='button'><span class='glyphicon glyphicon-remove-sign'></span></button></a>
						</td>
					</tr>";
				}
			} else {
				echo "<tr><td colspan='5'><center>Sem dados para essa funcionalidade.</center></td></tr>";
			}
			
			?>
				</tbody>
			</table>
			<!-- Fim do Listar dados da Entidade -->
						<div class="col-md-0"></div>
					</div>
					<div class="container-fluid">
						<a href='../ficha-tecnica.php'>
							<button class='btn btn-sm btn-success active' type='button'>
								<span class='glyphicon glyphicon-arrow-left'></span> Retornar
							</button>
						</a>
					</div>
				</div>
	</body>
</html>