<?php require 'header.php'; ?>
<?php require 'menu.php' ?>


<?php 

if($_POST){

  $_POST['senha'] = crypt($_POST['senha'], SEGURANCA);
 
  insert('usuarios', $_POST);
    
  header('location:usuarios.php');
  
}


?>


<div class="container mt-4 mb-5">
	<h3> Novo usuario </h3>
       
        <form action="" method="post" >
          <div class="form-group row">
            <label for="nome" class="col-sm-2 col-form-label">Nome</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
            </div>
          </div>
           <div class="form-group row">
            <label for="login" class="col-sm-2 col-form-label">Login</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="login" name="login" placeholder="Login">
            </div>
          </div>
          <div class="form-group row">
            <label for="senha" class="col-sm-2 col-form-label">Senha</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="senha" placeholder="Senha" name="senha">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-2">Administrador</div>
            <div class="col-sm-10">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="admin" value="1">
             
              </div>
            </div>
          </div>
          
          <div class="form-group row">
            <div class="col-sm-10">
              <button type="submit" class="btn botao">Salvar</button>
              <button type="reset" class="btn botao">Limpar</button>
			  <a class="btn botao " href="usuarios.php" role="button">Voltar</a>
              
            </div>
          </div>
        </form>

</div>


<?php require 'footer.php'; ?>