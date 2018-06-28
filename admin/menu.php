<div class="menu ">
  <div class="container">
	<div class=" clearfix ">

	  <a class="btn botaoMenu float-left font-weight-bold" href="index.php"> COLABORADORES </a>
	  <?php
            if($_SESSION['admin']){
	          echo '<a class="btn botaoMenu float-left font-weight-bold" href="usuarios.php"> USUARIOS </a>';
            }
	  ?>
	  <a class="btn botaoMenu float-right font-weight-bold" href="logout.php"> SAIR </a>

	</div >
  </div>	
</div>