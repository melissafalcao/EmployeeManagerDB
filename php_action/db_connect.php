<?php
// Conexão com banco de dados
$servername = "thzz882efnak0xod.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$username = "aglg8idzf1hcszeq";
$password = "vbodi6467kix674g";
$db_name = "grvu35nzjoerjtbr";

$connect = mysqli_connect($servername, $username, $password, $db_name);
mysqli_set_charset($connect, "utf8");

if(mysqli_connect_error()):
	echo "Erro na conexão: ".mysqli_connect_error();
endif;


