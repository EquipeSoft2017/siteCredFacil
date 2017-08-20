<?php
if (isset($_POST['submit']))
{
    include('conecta.php');

    session_start();

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    //Administrador = tipo = 01
    //Operador = tipo = 02

    $sqlUs = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $resultUs = $link->query($sqlUs);

    /*
    var_dump($resultUs);
    echo ('<br>');
    print_r($resultUs);

    exit();
    */

    if($resultUs->num_rows != 0) {
        while($rowUs = $resultUs->fetch_assoc()) {
            /*
            echo $rowUs['tipo'];
            exit();
            */
            if($rowUs['tipo'] == 1){
                $_SESSION['login_admin']=$email; 
                echo "<script language='javascript' type='text/javascript'> location.href='sis/index.php' </script>"; 
            }elseif($rowUs['tipo'] == 2){
                $_SESSION['login_user']=$email;
                echo "<script language='javascript' type='text/javascript'> location.href='sis/op.php' </script>";
            }
        }
    } else {
        echo "<script type='text/javascript'>alert('Usuário ou senha inválidos')</script>";
        echo "<script language='javascript' type='text/javascript'> location.href='../index.php' </script>";
    }


   // $sqlUs = mysqli_query($link, "SELECT senha FROM usuarios WHERE email ='$email' AND senha ='$senha'");

    


    /*

    if(mysqli_num_rows($sqlTp)){
        echo "<script language='javascript' type='text/javascript'> location.href='sis/index.php' </script>";
            $_SESSION['login_admin']=$email;    
    }
    if(mysqli_num_rows($sqlUs) != 0){
        echo "<script language='javascript' type='text/javascript'> location.href='sis/op.php' </script>";
        $_SESSION['login_user']=$email;
    }else{
        echo "<script type='text/javascript'>alert('Usuário ou senha inválidos')</script>";
        echo "<script language='javascript' type='text/javascript'> location.href='../index.html' </script>";    
    }




    if (mysqli_num_rows($sqlUs) != 0)
    {
        if(mysqli_num_rows($sqlTp) > 0){
            echo "<script language='javascript' type='text/javascript'> location.href='sis/index.php' </script>";
            $_SESSION['login_admin']=$email;
        }

        echo "<script language='javascript' type='text/javascript'> location.href='sis/op.php' </script>";
        $_SESSION['login_user']=$email;
    }

    else
    {
        echo "<script type='text/javascript'>alert('Usuário ou senha inválidos')</script>";
        echo "<script language='javascript' type='text/javascript'> location.href='../../index.html' </script>";
    }
    */

}

?>