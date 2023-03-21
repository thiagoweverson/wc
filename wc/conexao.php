<html>

<head>
	<meta charset="utf-8">
	<title>NOTAS</title>


	<link rel = "shortcut icon" type = "imagem/x-icon" href = "img/favicon.ico"/>

	
	
</head>

	<body>
			
	</body>


</html>

<?php

$hotname = "localhost";
$user = "root";
$password = "";
$database = "wc";
$conexao = mysqli_connect($hotname,$user,$password,$database);

if(!$conexao){
	print "Falha na conaxão com o banco de dados";
}

?>