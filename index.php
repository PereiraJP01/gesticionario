<?php

//conexão
include_once 'htmlhelper/db_connect.php';


//Header
include_once 'htmlhelper/header.php';

?>
<main>
  <div class=" container row">
    <table>
      <!-- LOGO -->
      <tr>
        <div class=" section logoContainer center"> <img class="logo" src="assets/logo_white.png" alt=""> </div>
      </tr>
      
      <!-- Barra de pesquisa -->
      <tr>
        <div class=" section ">
          <table class="elementsContainer">
            <tr>
              <form method="GET" action="resultados.php" required>
                <td><input type="text" name="q" placeholder="Pesquisa uma palavra"   class="search"></td>
                <td><button type="submit" class="btn-flat"><i class="material-icons">search</i></button></td>
              </form>
            </tr>
          </table>
        </div>
      </tr>
      <!-- Pesquisa avançada -->
      <tr>
        <div class="container section center "> 
          <!-- Botão Pesquisa Avançada -->
          <div class="advancesearch modal-trigger" href="#modal1" > <a href="index.php">Pesquisa Avançada<i class=" material-icons white_custom_text">arrow_drop_down</i></a> </div>
          
          <!--Modal Pesquisa Avançada -->
          <div id="modal1" class="modal bottom-sheet">
   			   <div class="modal-content center">
				 <ul class="collapsible">
    						<li>
      							<div class="collapsible-header input-field"><i class="material-icons purple_custom_text">pan_tool</i>Configuração</div>
								<div class="collapsible-body">
      								<div class="row " id="configs">
								 <!--Gerado por js -->
									</div>
									
								</div>
    						</li>
    						<li>
      							<div class="collapsible-header"><i class="material-icons purple_custom_text">accessibility_new</i>Localização</div>
      							<div class="collapsible-body">
									<div class="row" id="locations">
									<!--Gerado por js -->
									</div>
								</div>
    						</li>
   							<li>
      							<div class="collapsible-header"><i class="material-icons purple_custom_text">record_voice_over</i>Temas</div>
      							<div class="collapsible-body ">
									<ul>
										<li><a>Tema 1</a></li>
										<li><a>Tema 2</a></li>
										<li><a>Tema 3</a></li>
										<li><a>Tema 4</a></li>
										<li><a>Tema 5</a></li>
										<li><a>Tema 6</a></li>
										<li><a>Tema 7</a></li>
										<li><a>Tema 8</a></li>
										<li><a>Tema 9</a></li>
										<li><a>Tema 10</a></li>									
									</ul>
								</div>
   							</li>
					   </ul>
				   </div>
			 
			 
					<!-- Botão de Pesquisa Avançada --> 
					<div class="modal-footer">
      				<button class="btn purple_custom_bg waves-effect " id="submit-search">Pesquisar
   						<i class="white_custom_text material-icons right">arrow_forward_ios</i>
  					</button>
    			</div>	 
    			</div>
        </div>
      </tr>
    </table>
  </div>
</main>
<!-- Texto de footer-->
<footer>
  <div class="footer-copyright">
    <div class="container center footer_bottom">
      <p>Lingua Gestual Portuguesa© 2020 Instituto Politécnico de Setúbal. Escola Superior de Educação. All rights Reserved</p>
    </div>
  </div>
</footer>
<?php
//Footer
include_once 'htmlhelper/footer.php';
?>
