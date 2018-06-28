<?php
require 'checkLogin.php';
require '../include/banco.php';

if(! isset($_GET['id'])){
	header('location:index.php');	
}

$id = $_GET['id'];

$delete = delete('pessoas',"id=$id");

if ($delete) {
	header('location:index.php');
}
