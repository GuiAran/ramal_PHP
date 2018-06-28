<?php require 'header.php';

if(! isset($_POST)){
    header('location:index.php');
}


?>

<div class="container table-responsive mt-5 mb-5">
   
    <table class="table table-hover">
      <thead class="thead-sabena">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nome</th>
          <th scope="col">Revenda</th>
          <th scope="col">Departamento</th>
          <th scope="col">Telefone</th>
          <th scope="col">Ver +</th>
        </tr>
      </thead>
      <tbody>    

<?php

if(! $_POST){
    header('location:index.php');
}else{

    $busca = $_POST['buscar'];

}

$resultados = select('pessoas'," nome LIKE '%$busca%' OR revenda LIKE '%$busca%' OR ramal LIKE '%$busca%' OR departamento LIKE '%$busca%'",'id');

if(! $resultados){
  
  echo'<div class="alert alert-danger" role="alert">';
  echo 'Não foi encontrado nenhum resultado para " '.$busca.' "  ';
  echo '<a class="btn btn-outline-danger" href="index.php" role="button">Voltar</a>';
  echo "</div>";
  echo "<br>";
 
}else{
    
    echo'<div class="alert alert-secondary" role="alert">';
    echo 'Foram encontrados os seguintes resultados para <b>" '.$busca.' "</b>  ';
    echo "</div>";
    echo "<br>";
    
      
}
    $count = 1;
    foreach ($resultados as $resultado) :

?>       
         <tr>
          
          <th scope="row"><?= $count++ ?></th>
          <td><?= $resultado['nome'] ?></td>
          <td><?= $resultado['revenda'] ?></td>
          <td><?= $resultado['departamento'] ?></td>
          <td><?= $resultado['ramal'] ?></td>
          <td><a href="detalhes.php?id=<?= $resultado['id']?>"><i class="material-icons">remove_red_eye</i></a></td>
          
        </tr>

<?php endforeach; ?>
      </tbody>
    </table>
</div> 
<!-- fim content -->

<?php require 'footer.php'; ?>