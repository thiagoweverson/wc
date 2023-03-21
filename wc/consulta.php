<?php

include_once("conexao.php");

$filtro = isset($_GET['filtro'])?$_GET['filtro']:"";

$sql = "select * from apos010921 where nome like '%$filtro%' order by nome";   /* order by ordem de busca */
$consulta = mysqli_query($conexao,$sql);
$registros = mysqli_num_rows($consulta);

?>

<!DOCTYPE html>
<html>
<head >
	<meta charset="utf-8">
	<title>NOTAS</title>

	<link rel="stylesheet" type="text/css" href="css/estilo_busca.css">  
	<link rel = "shortcut icon" type = "imagem/x-icon" href = "img/favicon.ico"/>

	
</head>
<body>

	<div class="box">

		<div class="div_menu_busca">
			<a class="bt_menu" href="index.php">HOME</a>
			<a style="font-size: 14pt;" class="bt_menu" href="notas_anterio_31_08_2021/consulta.php">NOTAS ANTERIORES<br>A 01/09/2021</a>
			<div>
				
			</div>		
		</div>

	

		<div class="divsection">
			<section>

					<h1 style="text-align: center; font-size: 24pt;" >Consultas de notas</h1>
					<hr>

					
					<form method="get" action="" style="font-size: 16pt; font-family: arial">
						Buscar por Nome: 
						<input type="text" name="filtro" class="campo" required autofocus="">
						<input type="submit" value="pesquisar" class="btp">
					</form>
					<br>
			</section>

			<?php
				print "Resultado da busca por <strong>$filtro</strong>.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";

				print "$registros Notas. | Total de notas encontradas";
				print "<br>";
				print "<hr>";
			?>
		</div>

		.
		<div class="divarticle">

				<?php

					

					print "<br><br>";

				while($exibirregistros = mysqli_fetch_array($consulta)){
					$codigo = $exibirregistros[0];
					$nome = $exibirregistros[1];
					$servico = $exibirregistros[2];
					$valor = $exibirregistros[3];
					$telefone = $exibirregistros[4];
					$data = $exibirregistros[5];
					$observacoes = $exibirregistros[6];


					print "<article >";


					print "<h1>WC TECNOLOGIA</h1>";
					print "<h3>AV. Duque de Caxias. Bairro: Gabriel. N°: 808 | Telefone: (94) 99210-9353</h3>";

					print "Codigo&nbsp;:  $codigo<br>";
					print "<hr>";
					print "Nome&nbsp;: $nome<br>";
					print "<br>";
					print "Serviço&nbsp;: $servico<br>";
					print "<br>";
					print "Valor&nbsp;: $valor<br>";
					print "<br>";
					print "Telefone&nbsp;:$telefone<br>";
					print "<br>";
					print "Data&nbsp;: $data<br>";
					print "<br>";
					print "Observações&nbsp;: $observacoes<br>";
					print "<br>";
					print "<br>";
					print "<hr><hr>";


					print "</article>";
				}

				mysqli_close($conexao);

				?>


					<input type="submit" value="IMPRIMIR" onClick="window.print()" class="bti">
		</div>


		

	<!--______________________________________________________________ inicio rodape_______________________________><!-->
			<form class="rodape">
				<p>Desenvolvido por: Thiago Weverson<span style=" font-size: 9pt">©</span></p>
				<p>Contato: </p>
				<p>Telefone: (94) 99160-9026 <a href="https://wa.me/559484134147"><img src="img/we.png"></a> &nbsp; e-mail: thiagoweverson@gmail.com</p>
				<p style="margin-right: -90%; color: #fff; margin-bottom: 3px;">(V: 3.11.10)</p>
			</form>
	<!--______________________________________________________________ fim rodape__________________________________><!-->

	</div>
	

</body>
</html>