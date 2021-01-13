<?php 

	//conexão com a base de dados
	include_once 'htmlhelper/db_connect.php';
	
	session_start();


   //Header da página Resultados
   include_once 'htmlhelper/header_resultados.php';

   ?>
<nav class="purple_custom_bg">
   <div class=" container nav-wrapper">
      <a href="index.php" class="brand-logo "><img src="assets/logo_white.png" alt="logo" class="logo_size"/></a>
      <form method="GET" action="resultados.php">
      <div class="input-field">
        <input id="search" type="search" name="q" placeholder="pesquisar" value="<?php echo $_GET['q']; ?>" required>
        <label class="label-icon" for="search"><i class="material-icons">search</i></label>
        <i class="material-icons">close</i> </div>
    </form>
   </div>
</nav>
<main>
	<?php
	if(isset($_GET['id'])):
		$id= mysqli_escape_string($connect, $_GET['id']);
		$sql = "SELECT * FROM dicionario WHERE id= '$id'; ";
		$resultado = mysqli_query($connect, $sql);
		$dados= mysqli_fetch_array($resultado);
	endif;
	?>	
	<div class="valign-wrapper" style="width:100%;height:80%;position: absolute;">
    	<div class="valign" style="width:100%;">
			<div class="container">
				<div class="row">
					<div class="col s3">
						<a href="resultados.php?q=<?php echo $_GET['q']; ?>" class="waves-effect waves-light btn purple_custom_bg"><i class="material-icons left">keyboard_backspace</i>Voltar</a>
					</div>
				</div>
				<div class="row"></div>
				<div class="row">
					<div class="col s5" >
						<h3><?php echo $dados['nome'];?></h3>
						<p> <h6>Verb. Ind.</h6><?php echo $dados['definicao'];?></p>
					</div>
					<div class="col s7 ">
						<div class=" video-container"><iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $dados['video']; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	
	
	
	
	
</main>
<footer class="page-footer purple_custom_bg">
   <div class="footer-copyright">
      <div class="container center">
        Lingua Gestual Portuguesa© 2020 Instituto Politécnico de Setúbal. Escola Superior de Educação. All rights Reserved
      </div>
   </div>
</footer>
<?php
   //Footer
   include_once 'htmlhelper/footer.php';
   ?>