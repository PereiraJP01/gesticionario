<!doctype html>
<html>
<head>
	<meta charset="utf-8">
      	<!--Import Google Icon Font-->
      	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      	<!--Import materialize.css-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Cabin&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="paineldecontrolo/css_login/stylesheet_menu.css">

      	<!--Let browser know website is optimized for mobile-->
      	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Painel de Controlo: Editar</title>
	
	
</head>
<body>
	
	<ul id="slide-out" class="sf-menu sidenav sidenav-fixed">
		<li><div class="logo-size"><a href="painel.php"><img src="../assets/logo_purple.png" alt="" class="responsive-img"></a></div></li>
		<div class="row"></div>
		<li><a href="logout.php">Terminar Sessão<i class="material-icons">exit_to_app</i></a></li>
		<div class="row"></div>
		<li><div class="divider"></div></li>
		<div class="row"></div>
      	<li><a href="lista_editar.php"> Editar Palavras<i class="material-icons">create</i></a></li>
      	<li><a href="create.php" style="background: #9162FC; color:white;">Adicionar Palavras<i class="material-icons">add_circle_outline</i></a></li>
		<li><a href="lista_remover.php" >Remover Palavras<i class="material-icons">delete_forever</i></a></li>
</ul>

   		<a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
 
 
<main>
		<div class=""  >
			<div class="row">
	<div class="col s12 m6 push-m3 ">
		<h3 class="light">Nova Palavra</h3>
		<form action="phpaction/criar.php" method="POST" enctype='multipart/form-data'>
			<div class="input-field col s12">
				<input type="text" name="nome" id="nome">
				<label for="nome">Palavra</label>
			</div>
			<div class="input-field col s12">
				<input type="text" name="definicao" id="definicao">
				<label for="definicao">Definição</label>
			</div>
			<div class="input-field col s12">
				<input type="text" name="video" id="video">
				<label for="video">Link do video</label>
			</div>
			<div class="input-field col s12">
  				<input type='file' name='image' required="required" />
			</div>
			<div class="input-field col s4">
				<select>
      				<option value="" disabled selected>Escolha a configuração</option>
      				<option value="1" data-icon="assets/Forma da mão/forma_1.png">Forma 1</option>
      				<option value="2" data-icon="assets/Forma da mão/forma_2.png">Forma 2</option>
      				<option value="3" data-icon="assets/Forma da mão/forma_3.png">Forma 3</option>					
    			</select>
			</div>
			<div class="input-field col s4">
				<select>
      				<option value="" disabled selected>Escolha a localização</option>
      				<option value="1" data-icon="assets/Localização do corpo/1.png">Localização 1</option>
      				<option value="2" data-icon="assets/Localização do corpo/2.png">Localização 2</option>
      				<option value="3" data-icon="assets/Localização do corpo/3.png">Localização 3</option>
    			</select>
			</div>
			<div class="input-field col s4">
				<select>
      				<option value="" disabled selected>Escolha o tema</option>
      				<option value="1">Tema 1</option>
      				<option value="2">Tema 2</option>
      				<option value="3">Tema 3</option>
    			</select>
			</div>
			<div class="input-field col s12">
				<button type="submit" name="btn-cadastrar"  class="btn purple_custom_bg" >Registar</button>
			</div>	
		</form>		
	</div>				
</div>			
</div>
</main>
<footer class="page-footer ">
   <div class="footer-copyright">
      <div class="container center">
         Lingua Gestual Portuguesa© 2020 Instituto Politécnico de Setúbal. Escola Superior de Educação. All rights Reserved
      </div>
   </div>
</footer>

	
	
	
	
	
		
	
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

	
	<script src="js/advanced-search.js"></script>

	<script>
		 M.AutoInit();
	</script>

</body>
</html>
