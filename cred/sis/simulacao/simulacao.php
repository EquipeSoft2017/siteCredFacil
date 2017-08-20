<?php

require_once '../../valida.php';
require_once '../../conecta.php';

//Paginação 
//pega o número da página senão atribui 1
$pagina = (isset($_GET['pagina'])) ? $_GET['pagina'] : 1;	

//seleciona todos os registros
$result_sm = "SELECT * FROM simulacoes WHERE active = 1";
$resultado_sm = mysqli_query($link, $result_sm);

//realiza a contagem 
$total_sms = mysqli_num_rows($resultado_sm);
//echo('<br><br><br><br>'.$total); 

//quantidade de itens por página
$quantidade_pg = 10;

//calculo do número de páginas 
$num_pagina = ceil($total_sms / $quantidade_pg);

//calculo do inicio da visualização
$inicio = ($quantidade_pg * $pagina) - $quantidade_pg;

//Controle do ANTERIOR E POSTERIOR
$pagina_anterior = $pagina - 1;
$pagina_posterior = $pagina + 1;
/** Fim da Paginação */

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>SIS Control</title>
	<link rel="shortcut icon" href="favicon.ico">

	<!-- Optional theme -->
	<link rel="stylesheet" href="../../css/dashboard.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="../css/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://www.google.com/jsapi"></script>
	<script type="text/javascript" src="css/functions.js"></script>
	<script type="text/javascript" src="../css/typeahead.js"></script>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
	    <div class="container-fluid">
	        <div class="navbar-header">
	          <a class="navbar-brand" href="../index.php">SIS Control</a>
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
		            	<a href="../../logout.php">Sair
		            	</a>
		            </li>
	          	</ul>
	        </div>
	    </div>
	</nav>
	<div class="container-fluid">
		<h4 class="page-header">Simulação de Crédito</h4>
<div class="row">
	<div class="col-md-0"></div>
		<div class="col-md-12">
			<form class="form-inline" name="frm_search" action="dbSimulacao/search.php" method="POST">
				<div class="form-group col-md-1">
					<a href="create.php">
            			<button class="btn btn-primary active" type="button">
            				<span class="glyphicon glyphicon-plus"></span> Incluir
            			</button>
         			</a>	
				</div>
				<div class="form-group col-md-6">
					<select class="col-sm-10 form-control" id="rct" name="rct">	
						<option>Localizar Simulação</option>
						<?php
							$result_ssm = "SELECT id, cliente FROM simulacoes WHERE active = 1 ORDER BY cliente ASC";
							$resultado_ssm = mysqli_query($link, $result_ssm);
								while($rows_ssm = mysqli_fetch_assoc($resultado_ssm)){
									echo"
										<option>".mb_convert_case($rows_ssm['cliente'], MB_CASE_UPPER)."</option> 
										";
							} 
						?>
					</select>
	        		<button class="btn btn-success" type="submit" name="enviar">
	        		<span class="glyphicon glyphicon-search"></span></button>
				</div>
   			</form>
    		<br><br>

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
			
			$result_sms = "SELECT * FROM simulacoes WHERE active = 1 ORDER BY data_criacao DESC LIMIT $inicio, $quantidade_pg";
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
							<a href='review.php?id=".$row['id']."'><button class='btn btn-xs btn-info active' type='button'><span class='glyphicon glyphicon-eye-open'></span> </button></a>
							<a href='edit.php?id=".$row['id']."'><button class='btn btn-xs btn-warning active' type='button'><span class='glyphicon glyphicon-edit'></span></button></a>
							<a href='remove.php?id=".$row['id']."'><button class='btn btn-xs btn-danger active' type='button'><span class='glyphicon glyphicon-remove-sign'></span></button></a>
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

	</div>
	<div class="col-md-0"></div>
	</div>

<!-- Paginação -->
<div class="row">
	<div class="container-fluid">
		<nav class="text-center" aria-label="Page navigation">
		<ul class="pagination">
		<li>
			<?php 
			
			if($pagina_anterior != 0){
				echo"
				<a href='http://localhost/siteCredFacil/cred/sis/simulacao/simulacao.php?pagina=$pagina_anterior' aria-label='Previus'>
				<span aria-hidden='true'>&raquo;</span>
				</a>
				";	
			}
			
			?>	
				
		</li>
			<?php 
			//Paginação
			for($i=1; $i < $num_pagina + 1; $i++){
				echo"<li><a href='http://localhost/siteCredFacil/cred/sis/simulacao/simulacao.php?pagina=$i'>$i</a></li>";
			}
			?>		
		<li>
			<?php 
			if($pagina_posterior != 0){
				echo"
				<a href='http://localhost/siteCredFacil/cred/sis/simulacao/simulacao.php?pagina=$num_pagina' aria-label='Previus'>
				<span aria-hidden='true'>&raquo;</span>
				</a>
				";	
			}
			?>		
		</li>
		</ul>
		</nav>
	</div>
</div>
<!-- Fim da Paginação -->
    
</div>

</body>
</html>