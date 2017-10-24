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
		<div class="container-fluid ">
			<h4 class="page-header">Contas a Pagar</h4>				
				<div class = "panel panel-success">
					<div class="panel-body">
										
							
								<div class="jumbotron col-md-4 ">							
										<div class="btn-group col-md-4-center">
											  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											    Novo Pagamento <span class="caret"></span>
											  </button>
											  <ul class="dropdown-menu">
											    <li><a href="#">Action</a></li>
											    <li><a href="#">Another action</a></li>
											    <li><a href="#">Something else here</a></li>
											    <li role="separator" class="divider"></li>
											    <li><a href="#">Separated link</a></li>
											  </ul>
										</div>
										<hr class="my-2">
								    	<span class="border-0"></span>
									    <div class="list-group col-md-6-center">
										  	  <a href="#" class="list-group-item list-group-item-action">Contas a Pagar</a>
											  <a href="#" class="list-group-item list-group-item-action">Contas a Receber</a>
											  <a href="#" class="list-group-item list-group-item-action">Fluxo de Caixa</a>
											  <a href="#" class="list-group-item list-group-item-action ">Posição de contas</a>
											  <a href="#" class="list-group-item list-group-item-action">Extrato</a>
											  <a href="#" class="list-group-item list-group-item-action ">Historico</a>
										</div>
									<button type="button col-md-8 center" class="btn btn-primary btn-block active">Editar Categorias</button>
									<h1 class="display-1"></h1>
									<button type="button col-md-8-center" class="btn btn-success btn-block active">Contas Bancárias</button>

								</div>
				           
				           <div class="row">
					           	<div class="col-md-4">
						            <div class="dropdown">
										  <button class="btn btn-success btn-sm dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
										    Todas as Contas
										    <span class="caret"></span>
										  </button>
										  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
										    <li><a href="#">Ação</a></li>
										    <li><a href="#">Outra ação</a></li>
										    <li><a href="#">Algo mais aqui</a></li>
										    <li role="separator" class="divider"></li>
										    <li><a href="#">Link separado</a></li>
										  </ul>
									  
										  <button class="btn btn-success btn-sm dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
										    Data Atual
										    <span class="caret"></span>
										  </button>
										  <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
										    <li><a href="#">Ação</a></li>
										    <li><a href="#">Outra ação</a></li>
										    <li><a href="#">Algo mais aqui</a></li>
										    <li role="separator" class="divider"></li>
										    <li><a href="#">Link separado</a></li>
										  </ul>
									</div>
									<div class="col-md-4">										  	
										  <nav aria-label="Page navigation">
											  <ul class="pagination pagination-sm">
											    <li>
											      <a href="#" aria-label="Voltar">
											        <span aria-hidden="true">&laquo;</span>
											      </a>											   
											      <a href="#" aria-label="Proximo">
											        <span aria-hidden="true">&raquo;</span>
											      </a>
											    </li>
											  </ul>
										  </nav>									  
								  </div>
						   </div>
						   							 				   
					</div>
			   </div>
	    </div>							
	</body>
</html>