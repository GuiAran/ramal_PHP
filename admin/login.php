<?php
require '../include/banco.php';

if($_POST){
    
    $login = $_POST['login'];
    
    $senha = crypt($_POST['senha'], SEGURANCA);$_POST['senha'];
          
    $usuario = ver('usuarios',"login = '$login' AND senha = '$senha'");
    
    if(! $usuario){
        echo '<div class="container">';
        echo '<h5 class="center-align red lighten-4 red-text alert ">Usuaio ou senha invalidos</h5>';
        echo '</div>';
        header('refresh:2;url=login.php');
    }else{
        session_start();
        $_SESSION['logado'] = true;
        if($usuario['admin'] == 1){
            $_SESSION['admin'] = true;
        }
        else{
            $_SESSION['admin'] = false;
        }
        header('location:index.php');
    }
    
}





?>
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../include/css/bootstrap.min.css" >
    <link rel="stylesheet" href="../include/css/style.css" >

    <title>Ramal 2.0 - Login</title>
  </head>
  <body class="bg">
<div class="container">

    <div class="box-login">
    	<form action="" method="post">
    	  <div class="form-group "> 	
		   <img alt="logo" src="../include/img/login_logo_w.png" class="img-logo ">
		  </div>    	
          <div class="form-group">
            <label for="login"><b>Login</b></label>
            <input type="text" class="form-control" id="login" name="login" placeholder="Digite seu login...">
            <!-- <small id="loginText" class="form-text text-muted">Não compartilhe seu login.</small> -->
          </div>
          <div class="form-group">
            <label for="senha"><b>Senha</b></label>
            <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite sua senha...">
          </div>
        
          <button type="submit" class="btn btn-primary">Entrar</button>
		</form>
    
    </div>

</div>