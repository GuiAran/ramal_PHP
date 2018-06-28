<?php 
    require 'header.php'; 
    require 'menu.php';

 ?>


<div class="container table-responsive mt-2 mb-5">

  <a class="btn botao mt-1 mb-3" href="incluirUsuario.php">+ Usuario </a> 

<table class="table table-hover">
      <thead class="thead-sabena">
        <tr>
          <th > # </th>
          <th > Nome </th>
          <th > Login </th>
          <th class="align-self-center" > Admin </th>
          <th class="align-self-center" > Editar </th>
          <th class="align-self-center" > Excluir </th>
        </tr>
      </thead>
      <tbody>
        <?php
        $usuarios = select('usuarios', null, 'nome');
        $count = 1;
        foreach ($usuarios as $usuario):
       
       ?>

       <tr>
          <th scope="row"><?= $count++; ?></th>
          <td><?= $usuario['nome'] ?></td>
          <td><?= $usuario['login'] ?></td>
          <td class="align-self-center">
          		<input type="checkbox" disabled <?= ($usuario['admin'] == 1 ) ? "checked" : " " ?> >
    	  </td>
    	  <td class="align-self-center"> <a href="editarUsuario.php?id_usuario=<?= $usuario['id_usuario'] ?>"> <i class="material-icons">edit</i> </a></td>
    	  <td class="align-self-center"> <a href="excluirUsuario.php?id_usuario=<?= $usuario['id_usuario'] ?>"> <i class="material-icons">delete</i> </a></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
</div> 
<!-- fim content -->



<?php require 'footer.php'; ?>