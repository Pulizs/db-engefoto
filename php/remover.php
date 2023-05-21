<?php

require_once "config.php";

$id = $_GET['id'];
$sql = "delete from tb_fichas where id = :idFicha";

$stm = $pdo->prepare($sql);

$stm->execute([':idFicha' => $id]);

echo "Usuario apagado com sucesso<br/>";
echo "<a href='/bd-engefoto/php/listar.php'>Voltar</a>";

?>