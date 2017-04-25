<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Serviços - CredFácil</title>
    
    <!-- core CSS -->
    <link href='http://fonts.googleapis.com/css?family=OpenSans:300,400,700' rel='stylesheet' type='text/css'>
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <script type="text/javascript">
        window.print();
        //window.close(); Só descomente esta linha se tiver o modo kiosk habilitado
    </script>

    
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>

    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
                        <div class="top-number"><p><i class="fa fa-phone-square"></i> 083 3333-4444</p></div>
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
                            <ul class="social-share">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li> 
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                            <div class="search">
                                <form role="form">
                                    <input type="text" class="search-form" autocomplete="off" placeholder="Faça sua busca...">
                                    <i class="fa fa-search"></i>
                                </form>
                           </div>
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><h2>Cred Fácil</h2><!--<img src="images/logo.png" alt="logo">--></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.html">Home</a></li>
                        <li><a href="quem-somos.html">Quem Somos</a></li>
                        <li><a href="servicos.html">Serviços</a></li>   
                        <li><a href="contato.html">Contato</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
		
    </header><!--/header-->
    <section id="feature" class="transparent-bg">
        <div class="container">
           <div class="center wow fadeInDown">
<?php                
if(isset($_POST['txt_nome'])){
	$nome     =  $_POST['txt_nome'];
}
?>
                <h2>Sua simulação, <?php echo($nome) ?></h2>
                <p class="lead">As melhores taxas do mercado.</p>
            </div>
        </div>
    </section><!--/#feature-->

    <section id="simulator-page">
		<div class="container">
            <div class="row">

<?php 
$valor_presente = 0;
$tx_juros = 0;
$periodo = 0;
$bandeira = 0;
$coeficiente = 0;



if(isset($_POST['txt_email'])){
	$email    =  $_POST['txt_email'];
}
if(isset($_POST['txt_telefone'])){
	$telefone =  $_POST['txt_telefone'];
}
if(isset($_POST['txt_celular'])){
	$celular =  $_POST['txt_celular'];
}
if(isset($_POST['txt_valor'])){
	$valor_presente    =  $_POST['txt_valor'];
}
if(isset($_POST['txt_parcela'])){
	$periodo  =  $_POST['txt_parcela'];
}
if(isset($_POST['txt_cartao'])){
	$bandeira   =  $_POST['txt_cartao'];
}

function mask($val, $mask)
{
 $maskared = '';
 $k = 0;
 for($i = 0; $i<=strlen($mask)-1; $i++)
 {
 if($mask[$i] == '#')
 {
 if(isset($val[$k]))
 $maskared .= $val[$k++];
 }
 else
 {
 if(isset($mask[$i]))
 $maskared .= $mask[$i];
 }
 }
 return $maskared;
}

echo('<div class="col-md-4">');
if(isset($nome)){
	echo("<label><h2>Nome: ");
	echo($nome);
    echo("</h2></label>");
    echo("</div>");
}
echo('<div class="col-md-4">');
if(isset($email)){
	echo("<label><h2>E-mail: ");
	echo($email);
    echo("</h2></label>");
    echo("</div>");
}

echo('<div class="col-md-4">');
if(isset($telefone)){
	echo("<label><h2>Telefone: ");
	echo mask($telefone, '#### ###########');
    echo("</h2></label>");
    echo("</div>");
}

echo('<div class="col-md-4">');
if(isset($celular)){
	echo("<label><h2>Celular: ");
	echo mask($celular, '#### ###########');
    echo("</h2></label>");
    echo("</div>");
}

echo('<div class="col-md-4">');
if(isset($valor_presente)){
	echo("<label><h2>Valor do Empréstimo: ");
	echo($valor_presente);
    echo("</h2></label>");
    echo("</div>");
}

echo('<div class="col-md-4">');
if(isset($periodo)){
	echo("<label><h2>Quantidade de Parcelas: ");
	echo($periodo);
    echo("</h2></label>");
    echo("</div>");
}

echo('<div class="col-md-4">');
if(isset($bandeira)){
	echo("<label><h2>Operadora de Cartão: ");
	echo($bandeira);
    echo("</h2></label>");
    echo("</div>");
}


if($bandeira == 'Visa'){
    $tx_juros = 0.02;
    $rt = $tx_juros * 100;
    echo('<div class="col-md-4">');
    echo("<label><h2>A Taxa de Juros: ".$rt. "% a.m");
    echo("</h2></label>");
    echo("</div>");
    
    $coeficiente = $tx_juros/(1-(1/(1+$tx_juros)**$periodo));
    echo('<div class="col-md-4">');
    echo("<label><h2>O coeficiente de é: ");
    echo round($coeficiente , 5);
    echo("</h2></label>");
    echo("</div>");

    $valor_parcela = $valor_presente * $coeficiente;
    echo('<div class="col-md-4">');
    echo("<label><h2>O valor da parcela é: R$ ");
    echo round($valor_parcela , 2 );
    echo("</h2></label>");
    echo("</div>");

    $valor_final = $valor_parcela * $periodo;
    echo('<div class="col-md-4">');
    echo("<label><h2>Valor total a ser cobrado: R$ ");
    echo round($valor_final , 2);
    echo("</h2></label>");
    echo("</div>");
}
elseif($bandeira == 'MasterCard'){
    $tx_juros = 0.03;
    $rt = $tx_juros * 100;
    echo('<div class="col-md-4">');
    echo("<label><h2>A Taxa de Juros: ".$rt. "% a.m");
    echo("</h2></label>");
    echo("</div>");
    
    $coeficiente = $tx_juros/(1-(1/(1+$tx_juros)**$periodo));
    echo('<div class="col-md-4">');
    echo("<label><h2>O coeficiente de é: ");
    echo round($coeficiente , 5);
    echo("</h2></label>");
    echo("</div>");
    $valor_parcela = $valor_presente * $coeficiente;
    
    echo('<div class="col-md-4">');
    echo("<label><h2>O valor da parcela é: R$ ");
    echo round($valor_parcela , 2 );
    echo("</h2></label>");
    echo("</div>");
    $valor_final = $valor_parcela * $periodo;
    
    echo('<div class="col-md-4">');
    echo("<label><h2>Valor total a ser cobrado: R$ ");
    echo round($valor_final , 2);
    echo("</h2></label>");
    echo("</div>");
}
elseif($bandeira == 'Itaucard'){
    $tx_juros = 0.04;
    $rt = $tx_juros * 100;
    echo('<div class="col-md-4">');
    echo("<label><h2>A Taxa de Juros: ".$rt. "% a.m");
    echo("</h2></label>");
    echo("</div>");
    
    $coeficiente = $tx_juros/(1-(1/(1+$tx_juros)**$periodo));
    echo('<div class="col-md-4">');
    echo("<label><h2>O coeficiente de é: ");
    echo round($coeficiente , 5);
    echo("</h2></label>");
    echo("</div>");
    $valor_parcela = $valor_presente * $coeficiente;
    
    echo('<div class="col-md-4">');
    echo("<label><h2>O valor da parcela é: R$ ");
    echo round($valor_parcela , 2 );
    echo("</h2></label>");
    echo("</div>");
    $valor_final = $valor_parcela * $periodo;
    
    echo('<div class="col-md-4">');
    echo("<label><h2>Valor total a ser cobrado: R$");
    echo round($valor_final , 2);
    echo("</h2></label>");
    echo("</div>");
}
elseif($bandeira == 'Hipercard'){
    $tx_juros = 0.05;
    $rt = $tx_juros * 100;
    echo('<div class="col-md-4">');
    echo("<label><h2>A Taxa de Juros: ".$rt. "% a.m");
    echo("</h2></label>");
    echo("</div>");
    
    $coeficiente = $tx_juros/(1-(1/(1+$tx_juros)**$periodo));
    echo('<div class="col-md-4">');
    echo("<label><h2>O coeficiente de é: ");
    echo round($coeficiente , 5);
    echo("</h2></label>");
    echo("</div>");
    $valor_parcela = $valor_presente * $coeficiente;
   
    echo('<div class="col-md-4">');
    echo("<label><h2>O valor da parcela é: R$ ");
    echo round($valor_parcela , 2 );
    echo("</h2></label>");
    echo("</div>");
    $valor_final = $valor_parcela * $periodo;
    
    echo('<div class="col-md-4">');
    echo("<label><h2>Valor total a ser cobrado: R$ ");
    echo round($valor_final , 2);
    echo("</h2></label>");
    echo("</div>");
}
elseif($bandeira == 'Dinners'){
    $tx_juros = 0.06;
    $rt = $tx_juros * 100;
    echo('<div class="col-md-4">');
    echo("<label><h2>A Taxa de Juros: ".$rt. "% a.m");
    echo("</h2></label>");
    echo("</div>");
    
    $coeficiente = $tx_juros/(1-(1/(1+$tx_juros)**$periodo));
    echo('<div class="col-md-4">');
    echo("<label><h2>O coeficiente de é: ");
    echo round($coeficiente , 5);
    echo("</h2></label>");
    echo("</div>");
    $valor_parcela = $valor_presente * $coeficiente;
    
    echo('<div class="col-md-4">');
    echo("<label><h2>O valor da parcela é: R$ ");
    echo round($valor_parcela , 2 );
    echo("</h2></label>");
    echo("</div>");
    $valor_final = $valor_parcela * $periodo;
    
    echo('<div class="col-md-4">');
    echo("<label><h2>Valor total a ser cobrado: R$ ");
    echo round($valor_final , 2);
    echo("</h2></label>");
    echo("</div>");
}
elseif($bandeira == 'RedeCard'){
    $tx_juros = 0.08;
    $rt = $tx_juros * 100;
    echo('<div class="col-md-4">');
    echo("<label><h2>A Taxa de Juros: ".$rt. "% a.m");
    echo("</h2></label>");
    echo("</div>");
    
    $coeficiente = $tx_juros/(1-(1/(1+$tx_juros)**$periodo));
    echo('<div class="col-md-4">');
    echo("<label><h2>O coeficiente de é: ");
    echo round($coeficiente , 5);
    echo("</h2></label>");
    echo("</div>");
    $valor_parcela = $valor_presente * $coeficiente;
    
    echo('<div class="col-md-4">');
    echo("<label><h2>O valor da parcela é: R$ ");
    echo round($valor_parcela , 2 );
    echo("</h2></label>");
    echo("</div>");
    $valor_final = $valor_parcela * $periodo;
    
    echo('<div class="col-md-4">');
    echo("<label><h2>Valor total a ser cobrado: R$ ");
    echo round($valor_final , 2);
    echo("</h2></label>");
    echo("</div>");
}

?>

            <div class="col-md-4">
            <a href='index.html'>Voltar</a>
            </div>
                </div>
            </div>
        </div>
		<!--/.container-->
	</section>
	<!--/#simulator-page-->

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2017 <a target="_blank" href="http://equipesoftcontrol.esy.es" title="EquipeSoft">EquipeSoft</a>. Todos os Direitos Reservados.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Quem Somos</a></li>
                        <li><a href="#">Serviços</a></li>
                        <li><a href="#">Contato</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/jquery.maskedinput.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/jquery.zebra-datepicker.js"></script>
    
    <!-- 
        <script src="js/jquery.js"></script>
    
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>

    -->
</body>
</html>

