<?php
    require_once '../../valida.php';
	require_once '../../conecta.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>SIS Control</title>
	
	<!-- Latest compiled and minified CSS -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"  rel="stylesheet" >
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>

	<!-- Optional theme -->
	<link rel="stylesheet" href="../../css/dashboard.css">

</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="../index.php">SIS Control - Taxa</a>
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
<body>
	<div class="container-fluid">
		<h4 class="page-header">Cadastro de Taxa</h4>

		<div class="container-fluid">
			<form name="formemp" method="post" action="dbTaxa/create.php">

				<div class="form-group col-md-12">
					<label class="col-sm-1 control-label">Taxa:</label>
						<div class="col-sm-3">
							<input type="text" class="form-control" name="taxa" id="taxa" placeholder="Informe a Taxa" required/>	
						</div>

					<label class="col-sm-1 control-label">Bandeira:</label>
						<div class="col-sm-7">
							<input type="text" class="form-control" name="bandeira" id="bandeira" placeholder="Informe a Bandeira" required/>	
						</div>
				</div>

				<div class="form-group">
					<input class="btn btn-md btn-success" type="submit" value="Cadastrar Taxa"/>
				</div>

   	 		</form>

		</div>
	</div>
	<script src="../../js/jquery-1.10.2.min.js"></script>
    <script src="../../js/jquery.maskedinput.min.js"></script>
    <script src="../../js/jquery.validate.min.js"></script>
    <script src="../../js/jquery.zebra-datepicker.js"></script>
</body>
</html>


