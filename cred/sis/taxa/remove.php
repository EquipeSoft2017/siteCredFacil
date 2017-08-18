<?php 
require_once '../../valida.php';
require_once '../../conecta.php';

if($_GET['id']) {
	$id = $_GET['id'];

	$sqlDft = "SELECT * FROM taxas WHERE id = {$id}";
	$resultDft = $link->query($sqlDft);
	$dataDft = $resultDft->fetch_assoc();

?>
<!DOCTYPE html>
<html>
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
          <a class="navbar-brand" href="../index.php">SIS Control - Taxa</a>
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
<h4 class="page-header">Deseja realmente excluir a taxa: <?php echo mb_convert_case($dataDft['taxa'],MB_CASE_UPPER). " - " .mb_convert_case($dataDft['bandeira'],MB_CASE_UPPER) ?></h4>

<form action="dbtaxa/remove.php" method="post">

<input type="hidden" name="id" value="<?php echo $dataDft['id'] ?>" />

<div class="col-md-6"><button class="col-md-6 btn btn-lg btn-danger active" type="submit">Excluir</button></div>

<div class="col-md-6"><a href="taxa.php"><button class="col-md-6 btn btn-lg btn-info active" type="button">Retornar</button></a></div>

</form>

</div>

</body>
</html>

<?php
}
?>