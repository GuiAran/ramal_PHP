<?php
    require 'header.php';
    require 'menu.php';
?>
<!-- content -->

<div class="container table-responsive mt-2 mb-5">

  <a class="btn botao mt-1 mb-3" href="incluirPessoa.php">+ Colaborador </a> 

<table class="table table-hover">
      <thead class="thead-sabena">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nome</th>
          <th scope="col">Revenda</th>
          <th scope="col">Departamento</th>
          <th scope="col">Telefone</th>
          <th scope="col">Ver +</th>
          <th scope="col">Editar</th>
          <th scope="col">Excluir</th>
          
        </tr>
      </thead>
      <tbody>
        <?php
        $pessoas = select('pessoas', null, 'nome');
        $count = 1;
        foreach ($pessoas as $pessoa):
       
       ?>

       <tr>
          <th scope="row"><?= $count++; ?></th>
          <td><?= $pessoa['nome'] ?></td>
          <td><?= $pessoa['revenda'] ?></td>
          <td><?= $pessoa['departamento'] ?></td>
          <td><?= $pessoa['ramal'] ?></td>
          <td><a href="detalhes.php?id=<?= $pessoa['id'] ?>"><i class="material-icons">remove_red_eye</i></a></td>
          <td><a href="editarPessoa.php?id=<?= $pessoa['id']?>"><i class="material-icons">edit</i></a></td>
          <td><a href="excluirPessoa.php?id=<?= $pessoa['id'] ?>"><i class="material-icons">delete</i></a></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
</div> 
<!-- fim content -->
 

<?php
  require 'footer.php'
?>