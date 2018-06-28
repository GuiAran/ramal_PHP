<?php
require 'checkLogin.php';
require '../include/banco.php';

if(! $_SESSION['admin']){
	header('location:index.php');
}

if(! isset($_GET['id_usuario'])){
	header('location:usuarios.php');	
}

$id = $_GET['id_usuario'];

$delete = delete('usuarios',"id_usuario=$id");

if ($delete) {
	header('location:usuarios.php');
}
