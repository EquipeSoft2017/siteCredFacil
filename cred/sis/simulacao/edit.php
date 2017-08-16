<?php 

require_once '../valida.php';
require_once '../db_connect.php';

if($_GET['id']) {
	$id = $_GET['id'];

	$sqlts = "SELECT * FROM fts WHERE id = {$id}";
	$resultts = $connect->query($sqlts);

	$datat = $resultts->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>SISBI - Cadastro de Pratos por Cardápio</title>
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
			<a class="navbar-brand" href="../index.php">SISBI - Controle de Produção</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a><?php
						$login_session=$_SESSION['login_user'];
						echo ($login_session);
						?></a></li>
				<li><a href="../logout.php">Sair</a></li>
			</ul>
			</div>
		</div>
		</nav>
	<br>
<body>
	<div class="container-fluid">
		<h3 class="page-header">Editar Pratos do Cardápio</h3>
		<div class="container">

			<form class="form-horizontal" action="dbFichaTecnica/update.php" method="post">

				<div class="form-group">
					<label class="col-md-2 control-label">Item:</label>
						<div class="col-md-10">
							<select class="col-md-10 form-control" id="it" name="it">	
								<option><?php echo $datat['nome'] ?></option>	
							<?php
								$result_f = "SELECT nome FROM produtos WHERE active = 1 ORDER BY nome ASC";
								$resultado_f = mysqli_query($connect, $result_f);
								while($rows_f = mysqli_fetch_assoc($resultado_f)){
									echo"
										<option>".mb_convert_case($rows_f['nome'], MB_CASE_UPPER)."</option>
									";
								} 
							 ?>
						</div>
				</div>

				<div class="form-group">
					<label ></label>
						<div>
							<input class="col-sm-0" type="hidden" type="text" name="id" value="<?php echo $datat['id'] ?>"/>
						</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label">Qtd:</label>
						<div class="col-sm-10 ">
							<input class="col-sm-10 form-control" type="text" name="qtd" value="<?php echo $datat['quantidade'] ?>" pattern="[0-9.]{3,7}" required/>
						</div>
				</div>

				<div class="form-group">
					<button class="col-sm-2 btn btn-xs btn-success active" type="submit"><span class='glyphicon glyphicon-pencil'></span> Editar</button>
				</div>

				<div class="form-group">
					<a href="ficha-tecnica.php"><button class="col-sm-2 btn btn-xs btn-danger" type="button"><span class='glyphicon glyphicon-arrow-left'></span>  Cancelar</button></a>
				</div>

			</form>
		</div>
	</div>
</body>
</html>

<?php
}
$connect->close();
?>