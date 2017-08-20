<?php 

require_once '../../valida.php';
require_once '../../conecta.php';

if($_GET['id']) {
	$id = $_GET['id'];

	$sqlEsm = "SELECT * FROM simulacoes WHERE id = {$id}";
	$resultEsms = $link->query($sqlEsm);

	$datas = $resultEsms->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>SIS - Control</title>
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
			<a class="navbar-brand" href="../index.php">SIS - Control</a>
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
				<li><a href="../logout.php">Sair</a></li>
			</ul>
			</div>
		</div>
		</nav>
	<br>
<body>
	<div class="container-fluid">
		<h4 class="page-header">Editar Simulação</h4>
		<div class="container">
			<form class="form-horizontal" action="dbSimulacao/update.php" method="post">
				<div class="form-group col-md-12">
						<label class="col-sm-1 control-label">Cliente:</label>
							<div class="col-sm-11">
								<input type="text" class="form-control" value="<?php echo $datas['cliente'] ?>" name="cliente" id="cliente" placeholder="Informe o Cliente" required/>	
							</div>
					</div>

					<div class="form-group col-md-6">
						<label class="col-sm-2 control-label">E-mail:</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" value="<?php echo $datas['email'] ?>" name="email" id="email" placeholder="Informe o e-mail" required/>
							</div>
					</div>

					<div class="form-group col-md-6">
						<label class="col-sm-2 control-label">Telefone:</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" value="<?php echo $datas['fone'] ?>" name="fone" id="telefone" id="fone" placeholder="(83) 3333-4444" required/>
							</div>
					</div>

					<div class="form-group col-md-6">
						<label class="col-sm-2 control-label">Celular:</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" value="<?php echo $datas['cel'] ?>" name="cel" id="celular" id="cel" placeholder="(83) 99999-8888"required/>
							</div>
					</div>

					<div class="form-group col-md-6">
						<label class="col-sm-2 control-label">Valor:</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" value="<?php echo $datas['valor'] ?>" name="valor" id="valor" placeholder="EX: 1000.00" required/>
							</div>
					</div>

					<div class="form-group col-md-6">
						<label class="col-sm-2 control-label">Parcelas:</label>
							<div class="col-sm-5">
								<select class="form-control" id="qtd_parcela" name="qtd_parcela">	
									<option><?php echo $datas['qtd_parcela'] ?></option>
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
									<option><?php echo $datas['cartao'] ?></option>
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
								<textarea rows="5" class="col-sm-12 form-control" id="observacao" name="observacao"><?php echo $datas['observacao'] ?></textarea>
							</div>
					</div>

					<div class="form-group">
					<label ></label>
						<div>
							<input class="col-sm-0" type="hidden" type="text" name="id" value="<?php echo $datas['id'] ?>"/>
						</div>
					</div>

					<div class="form-group">
						<input class="btn btn-md btn-success" type="submit" value="Cadastrar Simulação"/>
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