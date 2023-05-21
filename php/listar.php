<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel='stylesheet' href='../style/bootstrap.min.css'>
	<title>Banco de dados ficha</title>
	<style>
		a{
			margin: 10px;
		}
	</style>
</head>
<body>

	<a class='btn btn-primary' href = '/bd-engefoto/subsites/formulario.html' role='button'>Novo</a>
	
	<?php
		require_once "config.php";

		$sql = "select * from tb_fichas";

		$statement = $pdo->query($sql);

		$fichas = $statement->fetchAll(PDO::FETCH_ASSOC);

		echo "<table class='table table-striped'>
		<thead>
		<th scope='col'>Editar e Remover</th>
		<th scope='col'>Código Passivo</th>
		<th scope='col'>Rodovia</th>
		<th scope='col'>Municipio</th>
		<th scope='col'>Estado</th>
		<th scope='col'>KM Inicial</th>
		<th scope='col'>KM Final</th>
		<th scope='col'>Coordenada Inicial L</th>
		<th scope='col'>Coordenada Final</th>
		<th scope='col'>Sentido</th>
		<th scope='col'>Sentido/Direção</th>
		<th scope='col'>Causa Geradora</th>
		<th scope='col'>Local do Passivo Ambiental</th>
		<th scope='col'>Ambiental/Social</th>
		<th scope='col'>Centro de Custo</th>
		<th scope='col'>Tipologia de Passivos</th>
		<th scope='col'>Tipo OF</th>
		<th scope='col'>Dinâmica Atual</th>
		<th scope='col'>Gravidade em Relação à Rodovia</th>
		<th scope='col'>Gravidade em Relação ao Meio Ambiente</th>
		<th scope='col'>Comprimento</th>
		<th scope='col'>Largura</th>
		<th scope='col'>Profundidade</th>
		<th scope='col'>Grupo Passivos</th>
		<th scope='col'>Observações</th>
		<th scope='col'>Diretrizes Técnicas para a Recuperação/Remediação</th>
		<th scope='col'>Outros</th>
		</thead>";

		foreach ($fichas as $ficha) {
			echo "<tr><td>";
			echo "<a href='/bd-engefoto/php/editar_form.php?id=" . $ficha["id"] . "' style = 'padding-right: 4px'><img src='../imagens/edit.png' style='height: 2vw; margin-bottom: 1vw;'></a>";
			echo "<a href='/bd-engefoto/php/confirmar.php?id=" . $ficha["id"] . "' ><img src='../imagens/lixo.png' style='height: 2vw;'></a>";
			echo "</td><td>"; 
			echo $ficha["codigo_passivo"];
			echo "</td><td>";
			echo $ficha["rodovia"];
			echo "</td><td>";
			echo $ficha["municipio"];
			echo "</td><td>";
			echo $ficha["estado"];
			echo "</td><td>";
			echo $ficha["km_inicial"];
			echo "</td><td>";
			echo $ficha["km_final"];
			echo "</td><td>";
			echo $ficha["coord_inicialL"] . " L;" . $ficha["coord_inicialN"]. " N";
			echo "</td><td>";
			echo $ficha["coord_finalL"];
			echo "</td><td>";
			echo $ficha["sentido"];
			echo "</td><td>";
			echo $ficha["direcao"];
			echo "</td><td>";
			echo $ficha["causa_geradora"];
			echo "</td><td>";
			echo $ficha["local_passivo"];
			echo "</td><td>";
			echo $ficha["ambientalsocial"];
			echo "</td><td>";
			echo $ficha["centro_de_custo"];
			echo "</td><td>";
			echo $ficha["tipo_passivos"];
			echo "</td><td>";
			echo $ficha["tipo_of"];
			echo "</td><td>";
			echo $ficha["dinamica"];
			echo "</td><td>";
			echo $ficha["gravidade_rodovia"];
			echo "</td><td>";
			echo $ficha["gravidade_ambiental"];
			echo "</td><td>";
			echo $ficha["comprimento"];
			echo "</td><td>";
			echo $ficha["largura"];
			echo "</td><td>";
			echo $ficha["profundidade"];
			echo "</td><td>";
			echo $ficha["grupo_passivos"];
			echo "</td><td>";
			echo $ficha["obs"];
			echo "</td><td>";
			echo $ficha["diretrizes"];
			echo "</td><td>";
			echo $ficha["outros"];
			echo "</td>";
		}
		echo "</tr></table>";

	?>
</body>
</html>