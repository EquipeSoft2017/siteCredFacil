<?php

require_once '../../valida.php';
require_once '../../conecta.php';

/** Paginação 
//pega o número da página senão atribui 1
$pagina = (isset($_GET['pagina'])) ? $_GET['pagina'] : 1;	

//seleciona todos os registros
$result_ft = "SELECT * FROM fts WHERE active = 1";
$resultado_ft = mysqli_query($connect, $result_ft);

//realiza a contagem 
$total_fts = mysqli_num_rows($resultado_ft);
//echo('<br><br><br><br>'.$total); 

//quantidade de itens por página
$quantidade_pg = 10;

//calculo do número de páginas 
$num_pagina = ceil($total_fts / $quantidade_pg);

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
	          <a class="navbar-brand" href="../index.php">SIS Control - Cliente</a>
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
			<h4 class="page-header">Contas a Receber</h4>			
					<div class="row">
					<div class="col-md-6">							
						<div class="jumbotron">
							  <h1 class="display-2"></h1>
							  	<h4>Contas a Receber</h4>

							  	<div class="btn-group">
						  <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Todas as contas   <span class="caret"></span></button>
						    <ul class="dropdown-menu">
								   <li> <a class="dropdown-item" href="#">Action</a></li>
								   <li><a class="dropdown-item" href="#">Another action</a></li>
								   <li><a class="dropdown-item" href="#">Something else here</a></li>
						    </ul>
						</div>
							  <hr class="my-2">

							  <div class="list-group">
							  	<!--
								  <a href="#" class="list-group-item active">
								    Cras justo odio
								  </a>
								-->
								  <a href="#" class="list-group-item list-group-item-action">Contas a Pagar</a>
								  <a href="#" class="list-group-item list-group-item-action">Contas a Receber</a>
								  <a href="#" class="list-group-item list-group-item-action">Fluxo de Caixa</a>
								  <a href="#" class="list-group-item list-group-item-action ">Posição de contas</a>
								  <a href="#" class="list-group-item list-group-item-action">Extrato</a>
								  <a href="#" class="list-group-item list-group-item-action ">Historico</a>
								</div>
								<button type="button" class="btn btn-primary btn-lg btn-block">Editar Categorias</button>
								<button type="button" class="btn btn-success btn-lg btn-block">Contas Bancárias</button>
							</div>
						</div>
							<div class="btn-group">
						  <button class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">Todas as contas   <span class="caret"></span></button>
						    <ul class="dropdown-menu">
								   <li> <a class="dropdown-item" href="#">Action</a></li>
								   <li><a class="dropdown-item" href="#">Another action</a></li>
								   <li><a class="dropdown-item" href="#">Something else here</a></li>
						    </ul>
						</div>
				</div>
			</div>
		</div>

</body>
</html>