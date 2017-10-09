<?php
require_once '../../../conecta.php';
require_once '../../../valida.php';

	$busca = $_POST['clientes'];
	if($busca == 'Localizar Cliente'){
		echo "
	        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/siteCredFacil/cred/sis/cliente/cliente.php'>
	        <script type='text/javascript'>
	        	alert('Selecione o item corretamente!');
	        </script>
	                "; 
	    exit;            
	}
	
	$sql_fs = "SELECT * FROM clientes WHERE nome = '$busca'";
	$result_fs = $link->query($sql_fs);
	$data_fs = $result_fs->fetch_assoc();	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>SIS Control</title>
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
	       				 <a class="navbar-brand" href="../../index.php">SIS Control - Cliente</a>
	        		</div>

		        	<div id="navbar" class="navbar-collapse collapse">
		        		<ul class="nav navbar-nav navbar-right">
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
					<h4 class="page-header">Cliente:<?php echo (' '.$busca) ?></h4>
					<div class="row">
						<div class="col-md-0"></div>
						<div class="col-md-12">
							<div class="form-group col-md-6">
								<label class="col-sm-2 control-label">Nome:</label>
									<div class="col-sm-10">
      									<p class="form-control"><?php echo mb_convert_case($data_fs['nome'],MB_CASE_UPPER) ?></p>
    								</div>
							</div>
							<div class="form-group col-md-6">
								<label class="col-sm-2 control-label">CPF:</label>
									<div class="col-sm-10">
      									<p class="form-control"><?php echo mb_convert_case($data_fs['cpf'],MB_CASE_UPPER) ?></p>
    								</div>
							</div>
						</div>
					<div class="container-fluid">
						<a href='../cliente.php'>
							<button class='btn btn-sm btn-success active' type='button'>
								<span class='glyphicon glyphicon-arrow-left'></span> Retornar
							</button>
						</a>
					</div>
				</div>
	</body>
</html>