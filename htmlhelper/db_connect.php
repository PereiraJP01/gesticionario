<?php 
//conexão com base de dados 

$connect = pg_connect("host=ec2-54-155-99-116.eu-west-1.compute.amazonaws.com port=5432 dbname=d4da64p5bvskhi user=htdztxdjrfiewr password=415319eb91b02a1858b5929bdd7b621fcf83097a5315cd6123bf778318ac139c");
if (!$connect) {  
 echo "An error occurred.\n";  
 exit;  
mysqli_set_charset($connect, "utf8");
