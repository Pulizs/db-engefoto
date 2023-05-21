<?php

require_once "config.php";

$id = $_GET['id'];
$sql = "select * from tb_equipamento where id = :idEquipamento";

$stm = $pdo->prepare($sql);

$stm->execute([':idEquipamento' => $id]);

$equipamento = $stm->fetch(PDO::FETCH_ASSOC);

echo "<br/>";
    
echo "<a href='/bd-engefoto/php/remover.php?id=". $id ."'>SIM</a>";
echo "<br/>";
echo "<a href='/bd-engefoto/php/listar.php'>NAO</a>";

?>