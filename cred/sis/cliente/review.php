<?php 
    
    require_once '../../valida.php';
	require_once '../../conecta.php';


if($_GET['id']) {
	$id = $_GET['id'];

	$sql = "SELECT * FROM clientes WHERE id = {$id}";
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
		<h1 class="page-header">Visualizar Cliente</h1>
		<div class="container">
		<form class="form-horizontal">
			<div class="form-group">
				<label class="col-sm-2 control-label">Nome:</label>
				<div class="col-sm-10">
      				<p class="form-control"><?php echo mb_convert_case($data['nome'],MB_CASE_UPPER) ?></p>
    			</div>
			</div>
			<div class="form-group">
<<<<<<< HEAD
				<label class="col-sm-2 control-label">CPF:</label>
				<div class="col-sm-10">
      				<p class="form-control"><?php echo mb_convert_case($data['cpf'],MB_CASE_UPPER) ?></p>
    			</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">RG:</label>
				<div class="col-sm-10">
      				<p class="form-control"><?php echo mb_convert_case($data['rg'],MB_CASE_UPPER) ?></p>
    			</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Data de Nascimento:</label>
				<div class="col-sm-10">
					<input type="date" class="form-control" value="<?php echo $data['data_nascimento'] ?>" name="data_nascimento" id="data_nascimento" disabled/>
    			</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Celular:</label>
				<div class="col-sm-10">
      				<p class="form-control"><?php echo Mask("(##) # ####-####", $data['celular']) ?></p>
    			</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">E-mail:</label>
				<div class="col-sm-10">
      				<p class="form-control"><?php echo ($data['email']) ?></p>
=======
				<label class="col-sm-2 control-label">Celular:</label>
				<div class="col-sm-10">
      				<p class="form-control"><?php echo mb_convert_case($data['celular'],MB_CASE_UPPER) ?></p>
>>>>>>> 5cb0aea41b5ffed7b0f84863d7653214f66cdd86
    			</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-2 control-label">Status:</label>
				<div class="col-sm-10">
      				<p class="form-control"><?php 
<<<<<<< HEAD
				            if($data['ativo'] == 1){
=======
				            if($data['active'] == 1){
>>>>>>> 5cb0aea41b5ffed7b0f84863d7653214f66cdd86
								echo ('ATIVO');
								}else{
									echo ('INATIVO');
									};
								?>
					</p>
    			</div>
			</div>
			<div class="form-group">
				<a href="cliente.php"><button class='btn btn-sm btn-success active' type='button'><span class='glyphicon glyphicon-arrow-left'></span> Retornar</button></a>
			</div>
		</form>	
	</div>
</body>
</html>
<?php
}
<<<<<<< HEAD

function Mask($mask,$str){

    $str = str_replace(" ","",$str);

    for($i=0;$i<strlen($str);$i++){
        $mask[strpos($mask,"#")] = $str[$i];
    }

    return $mask;

}
=======
>>>>>>> 5cb0aea41b5ffed7b0f84863d7653214f66cdd86
?>