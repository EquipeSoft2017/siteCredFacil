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
<body>
	<div class="container-fluid">
		<h4 class="page-header">Cadastro de Cliente</h4>

		<div class="container-fluid">
			<form name="formemp" method="post" action="dbCliente/create.php">

				<div class="form-group col-md-12">
<<<<<<< HEAD
					<label class="col-sm-8 control-label">Nome:
						<input type="text" class="form-control" name="nome" id="nome" placeholder="Informe o nome" required/>	
					</label>
					<label class="col-sm-4 control-label">Data de Nascimento:
						<input type="date" class="form-control" name="data_nascimento" id="data_nascimento" required/>
					</label>
				</div>

				<div class="form-group col-md-12">
					<label class="col-sm-3 control-label">CPF:
						<input type="text" class="form-control" name="cpf" id="cpf" placeholder="012.345.678-90" required/>	
					</label>
					<label class="col-sm-2 control-label">RG:
						<input type="text" class="form-control" name="rg" id="rg" placeholder="0.123.456" required/>
					</label>
					<label class="col-sm-4 control-label">E-mail:
						<input type="email" class="form-control" name="email" id="email" placeholder="nome@email.com" required/>	
					</label>
					<label class="col-sm-3 control-label">Celular:
						<input type="text" class="form-control" name="celular" id="celular" placeholder="(88) 9 8888-8888" required/>	
					</label>
				</div>

				<div class="form-group col-md-12">
					<label class="col-sm-3 control-label">Banco:
						<input type="text" class="form-control" name="banco" id="banco" required/>	
					</label>
					<label class="col-sm-2 control-label">Agência:
						<input type="text" class="form-control" name="agencia" id="agencia" required/>	
					</label>
					<label class="col-sm-2 control-label">Conta:
						<input type="text" class="form-control" name="conta" id="conta" required/>	
					</label>
					<label class="col-sm-2 control-label">Operação:
						<input type="text" class="form-control" name="operacao" id="operacao" required/>	
					</label>
					<label class="col-sm-3 control-label">Favorecido:
						<input type="text" class="form-control" name="favorecido" id="favorecido" required/>	
					</label>
				</div>

				<div class="form-group col-md-12">
					<label class="col-sm-5 control-label">Logradouro:
						<input type="text" class="form-control" name="rua" id="rua" required/>	
					</label>
					<label class="col-sm-2 control-label">Número:
						<input type="text" class="form-control" name="numero" id="numero" required/>	
					</label>
					<label class="col-sm-5 control-label">Complemento:
						<input type="text" class="form-control" name="complemento" id="complemento"/>	
					</label>
				</div>

				<div class="form-group col-md-12">
					<label class="col-sm-3 control-label">Bairro:
						<input type="text" class="form-control" name="bairro" id="bairro" required/>	
					</label>
					<label class="col-sm-3 control-label">Cidade:
						<input type="text" class="form-control" name="cidade" id="cidade" required/>	
					</label>
					<label class="col-sm-3 control-label">Un. Federativa:
						<input type="text" class="form-control" name="uf" id="uf" required/>	
					</label>
					<label class="col-sm-3 control-label">CEP:
						<input type="text" class="form-control" name="cep" id="cep" placeholder="58.300-000" required/>	
					</label>
=======
					<label class="col-sm-1 control-label">Nome:</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="nome" id="nome" placeholder="Informe o nome" required/>	
						</div>
					<label class="col-sm-1 control-label">Celular:</label>
						<div class="col-sm-2">
							<input type="text" class="form-control" name="celular" id="celular" placeholder="(83) 99999-9999" required/>	
						</div>
			
>>>>>>> 5cb0aea41b5ffed7b0f84863d7653214f66cdd86
				</div>

				<div class="form-group">
					<input class="btn btn-md btn-success" type="submit" value="Cadastrar Cliente"/>
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


