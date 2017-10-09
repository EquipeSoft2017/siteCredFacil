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
<body>
	<div class="container-fluid">
		<h4 class="page-header">Simulador de Empréstimo</h4>

		<div class="container-fluid">
			<form name="formemp" method="post" action="dbSimulacao/create.php">

				<div class="form-group col-md-12">
					<label class="col-sm-1 control-label">Cliente:</label>
						<div class="col-sm-11">
							<select class="form-control" id="cliente" name="cliente">	
								<option>Selecione</option>
						<?php
							$result_txs = "SELECT id,nome FROM clientes WHERE ativo = 1 ORDER BY nome ASC";
							$resultado_txs = mysqli_query($link, $result_txs);
							while($rows_txs = mysqli_fetch_assoc($resultado_txs)){
								echo"
								<option>".mb_convert_case($rows_txs['nome'], MB_CASE_UPPER)."</option> 
								";
							} 
						?>		
							</select>	
						</div>
				</div>

				<div class="form-group col-md-6">
					<label class="col-sm-2 control-label">E-mail:</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="email" id="email" placeholder="Informe o e-mail" required/>
						</div>
				</div>

				<div class="form-group col-md-6">
					<label class="col-sm-2 control-label">Telefone:</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" name="fone" id="telefone" id="fone" placeholder="(83) 3333-4444" required/>
						</div>
				</div>

				<div class="form-group col-md-6">
					<label class="col-sm-2 control-label">Celular:</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" name="cel" id="celular" id="cel" placeholder="(83) 99999-8888"required/>
						</div>
				</div>

				<div class="form-group col-md-6">
					<label class="col-sm-2 control-label">Valor:</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="valor" id="valor" placeholder="EX: 1000.00" required/>
						</div>
				</div>

				<div class="form-group col-md-6">
					<label class="col-sm-2 control-label">Parcelas:</label>
						<div class="col-sm-5">
							<select class="form-control" id="qtd_parcela" name="qtd_parcela">	
								<option>Selecione</option>
								<?php
								for ($i=1; $i < 13; $i++) { 
									echo"<option>".$i."</option>";
								 } 
								?>
							</select>
						</div>
				</div>

				<div class="form-group col-md-6">
					<label class="col-sm-2 control-label">Cartão:</label>
						<div class="col-sm-5">
							<select class="form-control" id="cartao" name="cartao">	
								<option>Selecione</option>
						<?php
							$result_txs = "SELECT id,bandeira FROM taxas WHERE active = 1 ORDER BY bandeira ASC";
							$resultado_txs = mysqli_query($link, $result_txs);
							while($rows_txs = mysqli_fetch_assoc($resultado_txs)){
								echo"
								<option>".mb_convert_case($rows_txs['bandeira'], MB_CASE_UPPER)."</option> 
								";
							} 
						?>		
							</select>
						</div>
				</div>
			
				<div class="form-group col-md-12">
					<label class="col-sm-12 control-label">Observações:</label>
						<div class="col-sm-12">
							<textarea rows="5" class="col-sm-12 form-control" id="observacao" name="observacao"></textarea>
						</div>
				</div>

				<div class="form-group">
					<input class="btn btn-md btn-success" type="submit" value="Cadastrar Simulação"/>
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


