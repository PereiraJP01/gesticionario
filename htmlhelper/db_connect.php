<?php 
//conexão com base de dados 
$connect = pg_connect(getenv("postgres://htdztxdjrfiewr:415319eb91b02a1858b5929bdd7b621fcf83097a5315cd6123bf778318ac139c@ec2-54-155-99-116.eu-west-1.compute.amazonaws.com:5432/d4da64p5bvskhi"));


mysqli_set_charset($connect, "utf8");
