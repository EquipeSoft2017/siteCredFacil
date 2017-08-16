<?php
require_once '../../db_connect.php';
require_once '../../valida.php';

	$busca = $_POST['rct'];
	if($busca == 'Localizar Ficha Técnica'){
		echo "
	        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/sisbiv2/ficha-tecnica/ficha-tecnica.php'>
	        <script type='text/javascript'>
	        	alert('Selecione o item corretamente!');
	        </script>
	                "; 
	    exit;            
	}
	
	$sql_fs = "SELECT * FROM fts";
	$result_fs = $connect->query($sql_fs);
	$data_fs = $result_fs->fetch_assoc();	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>SISBI - Cadastro de Ficha Técnica</title>
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
	       				 <a class="navbar-brand" href="../../index.php">SISBI - Controle de Produção</a>
	        		</div>

		        	<div id="navbar" class="navbar-collapse collapse">
		        		<ul class="nav navbar-nav navbar-right">
		        			<li>
		        				<a>
		        					<?php
		                    			$login_session=$_SESSION['login_user'];
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
					<h4 class="page-header">Ficha técnica:<?php echo (' '.$busca) ?></h4>
					<div class="row">
						<div class="col-md-0"></div>
						<div class="col-md-12">
							<div class="form-group col-md-6">
								<label class="col-sm-2 control-label">Cardápio:</label>
									<div class="col-sm-10">
      									<p class="form-control"><?php echo mb_convert_case($data_fs['cardapio'],MB_CASE_UPPER) ?></p>
    								</div>
							</div>
							<div class="form-group col-md-6">
								<label class="col-sm-2 control-label">Serviço:</label>
									<div class="col-sm-10">
      									<p class="form-control"><?php echo mb_convert_case($data_fs['servico'],MB_CASE_UPPER) ?></p>
    								</div>
							</div>
							<div class="form-group col-md-6">
								<label class="col-sm-2 control-label">Criador:</label>
									<div class="col-sm-10">
      									<p class="form-control"><?php echo mb_convert_case($data_fs['resp'],MB_CASE_UPPER) ?></p>
    								</div>
							</div>
							<div class="form-group col-md-6">
								<label class="col-sm-2 control-label">Categoria:</label>
									<div class="col-sm-10">
      									<p class="form-control"><?php echo mb_convert_case($data_fs['grupoprato'],MB_CASE_UPPER) ?></p>
    								</div>
							</div>
							<table class=" table table table-striped table-hover table-bordered table-condensed">
								<thead class="thead-inverse">
									<tr>
										<th class="col-xs-10 col-sm-10 col-md-10 col-lg-10">Item</th>
										<th class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Qtd</th>
									</tr>
								</thead>
								<tbody>
								<?php
									$sql_ft = "SELECT * FROM fts WHERE receita = '$busca'";
									$result_ft = $connect->query($sql_ft);
									if($result_ft->num_rows > 0) {
							    	while($row_ft = $result_ft->fetch_assoc()) {
							        echo "
						        	<tr>
										<td>".mb_convert_case($row_ft['nome'], MB_CASE_UPPER)."</td>
										<td>".mb_convert_case($row_ft['quantidade'], MB_CASE_UPPER)."</td>
									</tr>";
							    	}
									} else {
							   		echo "
							        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/sisbiv2/ficha-tecnica/ficha-tecnica.php'>
							        <script type='text/javascript'>
							        	alert('Não existem dados.!');
							        </script>
							                "; 
									}
								?>
								</tbody>
							</table>
						</div>
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