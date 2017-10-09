<?php 

    require_once '../../valida.php';
	require_once '../../conecta.php';

if($_GET['id']) {
	$id = $_GET['id'];

	$sqlts = "SELECT * FROM clientes WHERE id = {$id}";
<<<<<<< HEAD
	
=======
>>>>>>> 5cb0aea41b5ffed7b0f84863d7653214f66cdd86
	$resultts = $link->query($sqlts);

	$datat = $resultts->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
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
			<a class="navbar-brand" href="../index.php">SIS Control - Cliente</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-right">

				<li><a href="../logout.php">Sair</a></li>
			</ul>
			</div>
		</div>
		</nav>
	<br>
<body>
	<div class="container-fluid">
		<h3 class="page-header">Editar Cliente</h3>
		<div class="container">

			<form class="form-horizontal" action="dbCliente/update.php" method="post">

				<div class="form-group">
					<label class="col-md-2 control-label">Nome:</label>
						<div class="col-md-10">
							<input class="col-sm-10 form-control" type="text" name="nome" value="<?php echo $datat['nome'] ?>" required/>
						</div>
				</div>

				<div class="form-group">
<<<<<<< HEAD
					<label class="col-md-2 control-label">CPF:</label>
						<div class="col-md-10">
							<input class="col-sm-10 form-control" type="text" name="cpf" value="<?php echo $datat['cpf'] ?>" placeholder="012.345.678-90" required/>
						</div>
				</div>

				<div class="form-group">
					<label class="col-md-2 control-label">RG:</label>
						<div class="col-md-10">
							<input class="col-sm-10 form-control" type="text" name="rg" value="<?php echo $datat['rg'] ?>" required/>
						</div>
				</div>

				<div class="form-group">
					<label class="col-md-2 control-label">Data de Nascimento:</label>
						<div class="col-md-10">
							<input class="col-sm-10 form-control" type="date" name="data_nascimento" value="<?php echo $datat['data_nascimento'] ?>" required/>
						</div>
				</div>


=======
					<label ></label>
						<div>
							<input class="col-sm-0" type="hidden" type="text" name="id" value="<?php echo $datat['id'] ?>"/>
						</div>
				</div>

>>>>>>> 5cb0aea41b5ffed7b0f84863d7653214f66cdd86
				<div class="form-group">
					<label class="col-sm-2 control-label">Celular:</label>
						<div class="col-sm-10 ">
							<input class="col-sm-10 form-control" type="text" name="celular" value="<?php echo $datat['celular'] ?>" required/>
						</div>
				</div>

				<div class="form-group">
<<<<<<< HEAD
					<label class="col-sm-2 control-label">E-mail:</label>
						<div class="col-sm-10 ">
							<input class="col-sm-10 form-control" type="text" name="email" value="<?php echo $datat['email'] ?>" required/>
						</div>
				</div>
				<!--

				<div class="form-group">
					<label class="col-sm-2 control-label">Logradouro:</label>
						<div class="col-sm-10 ">
							<input class="col-sm-10 form-control" type="text" name="rua" value="<?php echo $endereco['rua']?>" required/>
						</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label">Número:</label>
						<div class="col-sm-10 ">
							<input class="col-sm-10 form-control" type="text" name="numero" value="<?php echo $endereco['numero'] ?>" required/>
						</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label">Complemento:</label>
						<div class="col-sm-10 ">
							<input class="col-sm-10 form-control" type="text" name="complemento" value="<?php echo $endereco['complemento'] ?>" required/>
						</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label">Bairro:</label>
						<div class="col-sm-10 ">
							<input class="col-sm-10 form-control" type="text" name="bairro" value="<?php echo $endereco['bairro'] ?>" required/>
						</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label">Cidade:</label>
						<div class="col-sm-10 ">
							<input class="col-sm-10 form-control" type="text" name="cidade" value="<?php echo $endereco['cidade'] ?>" required/>
						</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label">UF:</label>
						<div class="col-sm-10 ">
							<input class="col-sm-10 form-control" type="text" name="uf" value="<?php echo $endereco['uf'] ?>" required/>
						</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label">CEP:</label>
						<div class="col-sm-10 ">
							<input class="col-sm-10 form-control" type="text" name="cep" value="<?php echo $endereco['cep'] ?>" required/>
						</div>
				</div>
				-->
				<div class="form-group">
					<label ></label>
						<div>
							<input class="col-sm-0" type="hidden" type="text" name="id" value="<?php echo $datat['id'] ?>"/>
						</div>
				</div>

				

				<div class="form-group">
=======
>>>>>>> 5cb0aea41b5ffed7b0f84863d7653214f66cdd86
					<button class="col-sm-2 btn btn-xs btn-success active" type="submit"><span class='glyphicon glyphicon-pencil'></span> Editar</button>
				</div>

				<div class="form-group">
					<a href="cliente.php"><button class="col-sm-2 btn btn-xs btn-danger" type="button"><span class='glyphicon glyphicon-arrow-left'></span>  Cancelar</button></a>
				</div>

			</form>
		</div>
	</div>
</body>
</html>

<?php
}
$link->close();
?>