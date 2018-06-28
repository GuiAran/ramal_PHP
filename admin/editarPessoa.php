<?php require 'header.php'; ?>
<?php require 'menu.php' ?>


<?php 
if(! $_GET['id']){
    header('local:index.php');
}

$id = $_GET['id'];

$pessoa = ver('pessoas',"id = $id");

if($_POST){
  
    update('pessoas',"id=$id",$_POST);
    
    header('location:index.php');
}


?>

<div class="container mt-4 mb-5">
	<h3> Editar cadastro </h3>
       
        <form action=" " method="post" >
          
          <div class="form-group row">
            <label for="nome" class="col-sm-2 col-form-label">Nome</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nome" name="nome"  value="<?= $pessoa['nome'] ?>" >
            </div>
          </div>
          <div class="form-group row">
            <label for="revenda" class="col-sm-2 col-form-label">Revenda</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="revenda" name="revenda"  value="<?= $pessoa['revenda'] ?>" >
            </div>
          </div>
          <div class="form-group row">
            <label for="departamento" class="col-sm-2 col-form-label">Departamento</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="departamento" name="departamento" value="<?= $pessoa['departamento'] ?>" >
            </div>
          </div>
          <div class="form-group row">
            <label for="telefone" class="col-sm-2 col-form-label">Telefone</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="ramal" name="ramal" value="<?= $pessoa['ramal'] ?>" >
            </div>
          </div>
          <div class="form-group row">
            <label for="celular" class="col-sm-2 col-form-label">Celular</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="celular" name="celular" value="<?= $pessoa['celular'] ?>" >
            </div>
          </div>
          <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">E-mail</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="email" name="email" value="<?= $pessoa['email'] ?>" >
            </div>
          </div>
           
        
          
          <div class="form-group row">
            <div class="col-sm-10">
              <button type="submit" class="btn botao ">Salvar</button>
              <a class="btn botao " href="index.php" role="button">Voltar</a>
              <a class="btn botao " href="excluirPessoa.php?id=<?= $pessoa['id'] ?>" role="button">Excluir</a>
            </div>
         </div>
        </form>

</div>


<?php require 'footer.php'; ?>