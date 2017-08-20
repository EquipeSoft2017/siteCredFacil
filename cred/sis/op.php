<?php

require ('../valida-op.php');

?>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.ico">

    <title>SIS Control</title>
	
  	<!-- Latest compiled and minified CSS -->
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  	<!-- Optional theme -->
  	<link rel="stylesheet" href="../css/dashboard.css">

  	<!-- Latest compiled and minified JavaScript -->
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  	<script type="text/javascript" src="https://www.google.com/jsapi"></script>
  	<!--
  	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
  	-->
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">SIS Control</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Operacional<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Cadastro de Cliente</a></li>
                </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Vendas<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="simulacao/simulacao-op.php">Simulação</a></li>
                <li><a href="#">Empréstimo</a></li>
                <li><a href="#">Contrato</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">s
            <li>
              <a><?php
                    $login_session=$_SESSION['login_user'];
                    echo ($login_session);
                  ?>
              </a>
            </li>
            <li>
              <a href="../logout.php">Sair</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container-fluid">
      <div class="container col-md-12">
        <?php 
          $seletor=rand(1, 5);
          if($seletor == 1){
          echo('<img src="https://www.valortributario.com.br/wp-content/uploads/2017/04/Can-You-Get-a-Small-Business-Loan-With-Bad-Personal-Credit-Madera-CA-93637-1500x1000.jpg" class="img-responsive" alt="...">');  
          }
          elseif($seletor == 2){
          echo('<img src="http://m1altagerencia.com.br/wp-content/uploads/2015/02/desat-laptop.jpg" class="img-responsive" alt="...">');  
          }
          elseif($seletor == 3){
          echo('<img src="http://congressodabolsa.com.br/wp-content/uploads/2016/10/visibilidade_06.jpg" class="img-responsive" alt="...">');  
          }
          elseif($seletor == 4){
          echo('<img src="http://itcore.com.br/wp-content/uploads/Gerenciamento-de-Direito-de-Informa%C3%A7%C3%B5es.jpg" class="img-responsive" alt="...">');  
          }else{
          echo('<img src="https://vripmaster.com/uploads/posts/images/2/2d/Develop-Financial-Literacy-Step-3.jpg" class="img-responsive" alt="...">');    
          }
        ?>
      </div>
    </div>
        <div class="container col-md-1"></div>
    </div>
    <div class="navbar navbar-default navbar-fixed-bottom">
      <div class="container">
        <p class="navbar-text pull-left">© 2017 - Copyright
             <a href="http://www.equipesoft.com" target="_blank" >SISBI</a>
        </p>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../css/jquery-3.2.1.min.js"></script>
    <script src="../css/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
	  <!-- End Bootstrap core JavaScript ================================================== -->
	</body>
</html>