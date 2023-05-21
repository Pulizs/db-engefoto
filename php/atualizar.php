<?php

    require_once "config.php";

    $id = $_POST['id'];
    $codigopassivo = $_POST['codigopassivo'];
    $rodovia = $_POST['rodovia'];
    $municipio = $_POST['municipio'];
    $estado = $_POST['estado'];
    $kmInicial = $_POST['kminicial'];
    $kmFinal = $_POST['kmfinal'];
    $coordInicialL = $_POST['coordInicialL'];
    $coordInicialN = $_POST['coordInicialN'];
    $coordFinalL = $_POST['coordFinalL'];
    $coordFinalN = $_POST['coordFinalN'];
    $sentido = $_POST['sentido'];
    $sentidons = $_POST['sentidons'];
    $causageradora = $_POST['causageradora'];
    $localpassivo = $_POST['localpassivo'];
    $ambientalsocial = $_POST['ambientalsocial'];
    $centrodeCusto = $_POST['centrodeCusto'];
    $tipoDePassivo = $_POST['tipoDePassivo'];
    $tipoOF = $_POST['tipoOF'];
    $dinamicaAtual = $_POST['dinamicaAtual'];
    $gravidadeRodovia = $_POST['gravidadeRodovia'];
    $gravidadeAmbiental = $_POST['gravidadeAmbiental'];
    $largura = $_POST['largura'];
    $profundidade = $_POST['profundidade'];
    $dimensoes = $_POST['dimensoes'];
    $grupoPassivo = $_POST['grupoPassivo'];
    $obs = $_POST['obs'];
    $diretrizesTecnicas = $_POST['diretrizesTecnicas'];
    $outrasDiretrizesTecnicas = $_POST['outrasDiretrizesTecnicas'];


    $sql = "update tb_fichas set codigo_passivo = :codigopassivo, rodovia = :rodovia, municipio = :municipio, estado = :estado, km_inicial = :kmInicial, km_final = :kmFinal, coord_inicialL = :coordInicialL, coord_inicialN = :coordInicialN, coord_finalL = :coordFinalL, coord_finalN = :coordFinalN, sentido = :sentido, direcao = :sentidons, causa_geradora = :causageradora, local_passivo = :localpassivo, ambientalsocial = :ambientalsocial, centro_de_custo = :centroDeCusto, tipo_passivos = :tipoDePassivos, tipo_of = :tipoOF, dinamica = :dinamicaAtual, gravidade_rodovia = :gravidadeRodovia, gravidade_ambiental = :gravidadeAmbiental, comprimento = :dimensoes, largura = :largura, profundidade = :profundidade, grupo_passivos = :grupoPassivos, obs = :obs, diretrizes = :diretrizesTecnicas, outros = :outrasDiretrizesTecnicas where id= :id";

    $stm = $pdo->prepare($sql);

    $stm->execute(
        [':codigopassivo' => $codigopassivo, ':rodovia' => $rodovia, ':municipio' => $municipio, ':estado' =>$estado, ':kmInicial' => $kmInicial, ':kmFinal' => $kmFinal, ':coordInicialL' => $coordInicialL, ':coordInicialN' => $coordInicialN, ':coordFinalL' => $coordFinalL, ':coordFinalN' => $coordFinalN, ':sentido' => $sentido, ':sentidons' => $sentidons, ':causageradora' => $causageradora, ':localpassivo' => $localpassivo, ':ambientalsocial' => $ambientalsocial, ':centroDeCusto' => $centrodeCusto, ':tipoDePassivos' => $tipoDePassivo, ':tipoOF' => $tipoOF, ':dinamicaAtual' => $dinamicaAtual, ':gravidadeRodovia' => $gravidadeRodovia, ':gravidadeAmbiental' => $gravidadeAmbiental, ':largura' => $largura, ':profundidade' => $profundidade, ':dimensoes' => $dimensoes, ':grupoPassivos' => $grupoPassivo, ':obs' => $obs, ':diretrizesTecnicas' => $diretrizesTecnicas, ':outrasDiretrizesTecnicas' => $outrasDiretrizesTecnicas, ':id' => $id]
    );

    echo "Ficha atualizada com sucesso!!<br/>";
    echo "<a href='/bd-engefoto/php/listar.php'>Voltar</a>";

?>