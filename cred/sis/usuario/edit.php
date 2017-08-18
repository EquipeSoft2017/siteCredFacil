<?php 

    require_once '../../valida.php';
	require_once '../../conecta.php';

if($_GET['id']) {
	$id = $_GET['id'];

	$sqlts = "SELECT * FROM usuarios WHERE id = {$id}";
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
			<a class="navbar-brand" href="../index.php">SIS Control - Usuário</a>
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
		<h3 class="page-header">Editar Usuário</h3>
		<div class="container">

			<form class="form-horizontal" action="dbUsuario/update.php" method="post">

				<div class="form-group">
					<label class="col-md-2 control-label">Nome:</label>
						<div class="col-md-10">
							<input class="col-sm-10 form-control" type="text" name="nome" value="<?php echo $datat['nome'] ?>" required/>
						</div>
				</div>

				<div class="form-group">
					<label ></label>
						<div>
							<input class="col-sm-0" type="hidden" type="text" name="id" value="<?php echo $datat['id'] ?>"/>
						</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label">Função:</label>
						<div class="col-sm-10 ">
							<input class="col-sm-10 form-control" type="text" name="funcao" value="<?php echo $datat['funcao'] ?>" required/>
						</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label">Email:</label>
						<div class="col-sm-10 ">
							<input class="col-sm-10 form-control" type="email" name="email" value="<?php echo $datat['email'] ?>" required/>
						</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label">Senha:</label>
						<div class="col-sm-10 ">
							<input class="col-sm-10 form-control" type="password" name="senha" value="<?php echo $datat['senha'] ?>" required/>
						</div>
				</div>

				<div class="form-group">
					<label class="col-md-2 control-label">Tipo:</label>
						<div class="col-md-10">
							<select class="form-control" id="tipo" name="tipo">	
								<?php
									echo"<option>".$datat['tipo']."</option>";
								?>
								<?php
								for ($i=1; $i < 3; $i++) { 
									echo"<option>".$i."</option>";
								 } 
								?>
							</select>
						</div>
				</div>

				<div class="form-group">
					<button class="col-sm-2 btn btn-xs btn-success active" type="submit"><span class='glyphicon glyphicon-pencil'></span> Editar</button>
				</div>

				<div class="form-group">
					<a href="usuario.php"><button class="col-sm-2 btn btn-xs btn-danger" type="button"><span class='glyphicon glyphicon-arrow-left'></span>  Cancelar</button></a>
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