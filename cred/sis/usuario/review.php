<?php 
    
    require_once '../../valida.php';
	require_once '../../conecta.php';


if($_GET['id']) {
	$id = $_GET['id'];

	$sql = "SELECT * FROM usuarios WHERE id = {$id}";
	$result = $link->query($sql);

	$data = $result->fetch_assoc();

	$link->close();

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
		<h1 class="page-header">Visualizar Usuário</h1>
		<div class="container">
		<form class="form-horizontal">
			<div class="form-group">
				<label class="col-sm-2 control-label">Nome:</label>
				<div class="col-sm-10">
      				<p class="form-control"><?php echo mb_convert_case($data['nome'],MB_CASE_UPPER) ?></p>
    			</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Função:</label>
				<div class="col-sm-10">
      				<p class="form-control"><?php echo mb_convert_case($data['funcao'],MB_CASE_UPPER) ?></p>
    			</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">E-mail:</label>
				<div class="col-sm-10">
      				<p class="form-control"><?php echo ($data['email']) ?></p>
    			</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Tipo:</label>
				<div class="col-sm-10">
      				<p class="form-control"><?php echo $data['tipo'] ?></p>
    			</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Status:</label>
				<div class="col-sm-10">
      				<p class="form-control"><?php 
				            if($data['active'] == 1){
								echo ('ATIVO');
								}else{
									echo ('INATIVO');
									};
								?>
					</p>
    			</div>
			</div>
			<div class="form-group">
				<a href="usuario.php"><button class='btn btn-sm btn-success active' type='button'><span class='glyphicon glyphicon-arrow-left'></span> Retornar</button></a>
			</div>
		</form>	
	</div>
</body>
</html>
<?php
}
?>