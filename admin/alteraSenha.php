<?php require 'header.php'; ?>
<?php require 'menu.php' ?>


<?php 

if(! $_GET['id_usuario']){
    
    header('local:usuarios.php');
    
}

$id = $_GET['id_usuario'];


if($_POST){
    
    if($_POST['senha'] === $_POST['senhaConf'] ){
        
        unset($_POST['senhaConf']);
        
        $_POST['senha'] = crypt($_POST['senha'], SEGURANCA);
        
        update('usuarios',"id_usuario=$id",$_POST);
        
        header("location:editarUsuario.php?id_usuario=$id");
        
    }
    
}

?>

<div class="container mt-4 mb-5">
	<h3> Alterar senha </h3>
       
        <form action=" " method="post" >
          <div class="form-group row">
            <label for="nome" class="col-sm-2 col-form-label">Digite a nova senha :</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="nome" name="senha" placeholder="Nova senha..." >
            </div>
          </div>
           <div class="form-group row">
            <label for="login" class="col-sm-2 col-form-label">Confirme a senha: </label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="login" name="senhaConf" placeholder="Confirmar senha..." >
            </div>
          </div>
          
          
          
          <div class="form-group row">
            <div class="col-sm-10">
              <button type="submit" class="btn botao">Salvar</button>
			  <a class="btn botao " href="usuarios.php" role="button">Voltar</a>
            </div>
          </div>
        </form>

</div>


<?php require 'footer.php'; ?>