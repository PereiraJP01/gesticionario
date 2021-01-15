<?php 
//conexão com base de dados 
<?php
   $host        = "host = ec2-54-155-99-116.eu-west-1.compute.amazonaws.com";
   $port        = "port = 5432";
   $dbname      = "dbname = d4da64p5bvskhi";
   $credentials = "user = htdztxdjrfiewr password=415319eb91b02a1858b5929bdd7b621fcf83097a5315cd6123bf778318ac139c";

   $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db) {
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully\n";
   }
?>


mysqli_set_charset($connect, "utf8");
