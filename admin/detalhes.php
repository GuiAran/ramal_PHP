<?php 
require 'header.php'; 
require 'menu.php';
 ?>

<div class="container">

<?php
 if(! isset($_GET['id'])){
 	header('location:index.php');
 }

 $id = $_GET['id'];

 $pessoa = ver('pessoas',"id=$id");

 ?>
<div class="card mt-5 mb-5">
  <h5 class="card-header"><?= $pessoa['nome'] ?></h5>
  <div class="card-body">
     <p class="card-text"><b>Revenda:</b> <?= $pessoa['revenda'] ?> </p>
     <p class="card-text"><b>Setor:</b> <?= $pessoa['departamento']?></p>
     <p class="card-text"><b>Celular:</b> <?= $pessoa['celular'] ?></p>
     <p class="card-text"><b>Telefone:</b> <?= $pessoa['ramal'] ?> </p>
     <p class="card-text"><b>Email:</b> <?= $pessoa['email'] ?> </p>
    <a href="index.php" class="btn botao " >Voltar</a>
    <a class="btn botao " href="editarPessoa.php?id=<?= $pessoa['id'] ?>" role="button">Editar</a>
    <a class="btn botao " href="excluirPessoa.php?id=<?= $pessoa['id'] ?>" role="button">Excluir</a>
  </div>
</div>

</div>

<?php require 'footer.php'; ?>