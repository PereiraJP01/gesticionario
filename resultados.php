<?php
include_once 'htmlhelper/header_resultados.php';

session_start();

$current_page = isset( $_GET[ 'pageno' ] ) ? $_GET[ 'pageno' ] : 1;
if ( isset( $_GET[ 'pageno' ] ) ) {
    $pageno = $_GET[ 'pageno' ];
} else {
    $pageno = 1;
}


$no_of_records_per_page = 6;
$offset = ( $pageno - 1 ) * $no_of_records_per_page;

//include_once 'htmlhelper/db_connect.php';


if ( isset( $_GET[ 'q' ] ) ) {
	$pesquisar = $_GET[ 'q' ];
    $total_pages_sql = "SELECT COUNT(*) FROM dicionario WHERE nome LIKE '%$pesquisar%'";
    $result = mysqli_query( $connect, $total_pages_sql );
    $total_rows = mysqli_fetch_array( $result )[ 0 ];
    $total_pages = ceil( $total_rows / $no_of_records_per_page );
    $sql = "SELECT * FROM dicionario WHERE nome LIKE '%$pesquisar%' LIMIT $offset, $no_of_records_per_page";
    $res_data = mysqli_query( $connect, $sql );

?>
<nav class="purple_custom_bg">
  <div class=" container nav-wrapper"> <a href="index.php" class="brand-logo "><img src="assets/logo_white.png" alt="logo" class="logo_size"/></a>
    <form method="GET" action="resultados.php">
      <div class="input-field">
        <input id="search" type="search" name="q" placeholder="pesquisar" value="<?php echo $_GET['q']; ?>" required>
        <label class="label-icon" for="search"><i class="material-icons">search</i></label>
        <i class="material-icons">close</i> </div>
    </form>
  </div>
</nav>
<main>
  <div class="container row">
    <div>
      <h3 class="purple_custom_text">Resultados</h3>
    </div>
    <div class="row">
      <?php
      if ( mysqli_num_rows( $res_data ) > 0 ):
          while ( $row = mysqli_fetch_array( $res_data ) ):

              ?>
      <!--Cartão -->
      <div class="col 14 m4 s12"> <a href="definicao.php?q=<?php echo $_GET['q']; ?>&id=<?php echo $row['id']; ?>">
        <div class="card " name="card_result" >
          <div class="card-image"> <img src="assets/dicionario_img/<?php echo $row['img_dir'];?>"> <span class="card-title"><?php echo $row['nome'] ?></span> </div>
          <div class="card-content">
            <p class=" black_custom_text truncate"><?php echo $row['definicao']?></p>
          </div>
        </div>
        </a> </div>
      <?php
      endwhile;
      else :
          echo "<div class='row'><div class='col s12'><h5>Resultado não encontrado !</h5></div></div>";
      endif;
      ?>
      
      <!-- Paginação -->
      <div class="row ">
        <div class="col s12 center">
          <ul class="pagination">
            <?php
            for ( $pageno = 1; $pageno <= $total_pages; $pageno++ ): ?>
            <li <?php if($current_page == $pageno ){ echo "class='active purple_custom_bg'";} ?>> <?php echo '<a href="resultados.php?q='.$_GET['q'].'&pageno='. $pageno . '">' . $pageno . '</a></li>';?>
              <?php
              endfor;
              ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</main>
<footer class="page-footer purple_custom_bg">
  <div class="footer-copyright">
    <div class="container center"> Lingua Gestual Portuguesa© 2020 Instituto Politécnico de Setúbal. Escola Superior de Educação. All rights Reserved </div>
  </div>
</footer>
<?php
	} else {
	$configParam = $_GET['config'];
	$locationParam = $_GET['location'];
	$total_pages_sql = "SELECT COUNT(*) FROM dicionario WHERE configs='$configParam' AND locations='$locationParam'";
	$result = mysqli_query( $connect, $total_pages_sql );
    $total_rows = mysqli_fetch_array( $result )[ 0 ];
    $total_pages = ceil( $total_rows / $no_of_records_per_page );
    $sql = "SELECT * FROM dicionario WHERE configs='$configParam' AND locations='$locationParam' LIMIT $offset, $no_of_records_per_page";
    $res_data = mysqli_query( $connect, $sql );
?>

	<nav class="purple_custom_bg">
  <div class=" container nav-wrapper"> <a href="index.php" class="brand-logo "><img src="assets/logo_white.png" alt="logo" class="logo_size"/></a>
    <form method="GET" action="resultados.php">
      <div class="input-field">
        <input id="search" type="search" name="q" placeholder="pesquisar" required>
        <label class="label-icon" for="search"><i class="material-icons">search</i></label>
        <i class="material-icons">close</i> </div>
    </form>
  </div>
</nav>
<main>
  <div class="container row">
    <div>
      <h3 class="purple_custom_text">Resultados</h3>
    </div>
    <div class="row">
      <?php
      if ( mysqli_num_rows( $res_data ) > 0 ):
          while ( $row = mysqli_fetch_array( $res_data ) ):

              ?>
      <!--Cartão -->
      <div class="col 14 m4 s12"> <a href="definicao.php?id=<?php echo $row['id']; ?>">
        <div class="card " name="card_result" >
          <div class="card-image"> <img src="assets/dicionario_img/<?php echo $row['img_dir'];?>"> <span class="card-title"><?php echo $row['nome'] ?></span> </div>
          <div class="card-content">
            <p class=" black_custom_text truncate"><?php echo $row['definicao']?></p>
          </div>
        </div>
        </a> </div>
      <?php
      endwhile;
      else :
          echo "<div class='row'><div class='col s12'><h5>Resultado não encontrado !</h5></div></div>";
      endif;
      ?>
      
      <!-- Paginação -->
      <div class="row ">
        <div class="col s12 center">
          <ul class="pagination">
            <?php
            for ( $pageno = 1; $pageno <= $total_pages; $pageno++ ): ?>
            <li <?php if($current_page == $pageno ){ echo "class='active purple_custom_bg'";} ?>> <?php echo '<a href="resultados.php?config='.$_GET['config'].'&location='.$_GET['location'].'&pageno='. $pageno . '">' . $pageno . '</a></li>';?>
              <?php
              endfor;
              ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</main>
<footer class="page-footer purple_custom_bg">
  <div class="footer-copyright">
    <div class="container center"> Lingua Gestual Portuguesa© 2020 Instituto Politécnico de Setúbal. Escola Superior de Educação. All rights Reserved </div>
  </div>
</footer>
<?php
}
mysqli_close( $connect );
include_once 'htmlhelper/footer.php';
?>
