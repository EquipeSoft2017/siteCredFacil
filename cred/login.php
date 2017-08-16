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
    <link rel="stylesheet" href="css/login.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <!--
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    -->
</head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4 col-md-offset-4">

                    <div class="account-wall">
                        <div class="col-md-12 text-center">
                            <img class="img-responsive" src="../images/lglogin.png"/>
                            <br>
                        </div>
                        
                        <h4 class="text-center">Sistema de Controle Administrativo</h4>
                        <form class="form-signin" action="auth.php" method="post">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Login" required autofocus><br>
                            <input type="password" name="senha" id="senha" class="form-control" placeholder="Senha" required>
                            <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">
                                Entrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
<!--    
<nav class="navbar navbar-default navbar-fixed-bottom">
    <div class="container">
        <div class="col-md-8">
            <p class="navbar-text">SISIBI v2.0.0 - Sistema de Planejamento e Controle de Produção </p>
        </div>
        <div class="col-md-4">
            <p class="navbar-text navbar-right">&copy; Copyright - <a href="http://www.equipesoft.com">EquipeSoft</a></p>
        </div>
    </div>
</nav>
-->
</html>
