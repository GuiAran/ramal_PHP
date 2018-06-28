<?php require 'header.php'; ?>
<?php require 'menu.php' ?>


<?php 

if(! $_GET['id_usuario']){
    
    header('local:usuarios.php');
    
}

$id = $_GET['id_usuario'];

$usuario = ver('usuarios',"id_usuario = $id");

if($_POST){
    
    if(! $_POST['admin']){
        $_POST['admin'] = 0;
    }
       
  update('usuarios',"id_usuario = $id", $_POST );
    
  header('location:usuarios.php');
  
}

?>

<div class="container mt-4 mb-5">
	<h3> Novo usuario </h3>
       
        <form action=" " method="post" >
          <div class="form-group row">
            <label for="nome" class="col-sm-2 col-form-label">Nome</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" value="<?= $usuario['nome'] ?>" >
            </div>
          </div>
           <div class="form-group row">
            <label for="login" class="col-sm-2 col-form-label">Login</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="login" name="login" placeholder="Login" value="<?= $usuario['login'] ?>" >
            </div>
          </div>
          <div class="form-group row">
            <label for="senha" class="col-sm-2 col-form-label">Senha</label>
            <div class="col-sm-2">
            	<a class="btn botao " href="alteraSenha.php?id_usuario=<?= $usuario['id_usuario']?>" role="button">Alterar senha</a>
            </div>
            <div class="col-sm-8">
              <input type="password" class="form-control" id="senha"  name="senha" placeholder="Senha" disabled value="<?= $usuario['login'] ?>" >
            </div>
            
          </div>
          <div class="form-group row">
            <div class="col-sm-2">Administrador</div>
            <div class="col-sm-10">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="admin" value="1" <?= ($usuario['admin'] == 1 ) ? "checked" : " " ?> >
             
              </div>
            </div>
          </div>
          
          <div class="form-group row">
            <div class="col-sm-10">
              <button type="submit" class="btn botao">Salvar</button>
			  <a class="btn botao " href="usuarios.php" role="button">Voltar</a>
              <a class="btn botao " href="excluirUsuario.php?id=<?= $pessoa['id'] ?>" role="button">Excluir</a>
            </div>
          </div>
        </form>

</div>


<?php require 'footer.php'; ?>