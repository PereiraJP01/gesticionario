<?php 
//conexão com base de dados 

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "gesticionario";



$connect = mysqli_connect($servername, $username, $password, $db_name);

mysqli_set_charset($connect, "utf8");