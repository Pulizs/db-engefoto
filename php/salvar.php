<?php

    require_once "config.php";

    $codigoPS = $_POST['codigopassivo'];
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
    

    $sql = "insert into tb_fichas(codigo_passivo, rodovia, municipio, estado, km_inicial, km_final, coord_inicialL, coord_inicialN, coord_finalL, coord_finalN, sentido, direcao, causa_geradora, local_passivo, ambientalsocial, centro_de_custo, tipo_passivos, tipo_of, dinamica, gravidade_rodovia, gravidade_ambiental, comprimento, largura, profundidade, grupo_passivos, obs, diretrizes, outros)
     values (:codigoPS, :rodovia, :municipio, :estado, :kminicial, :kmfinal, :coordInicialL, :coordInicialN, :coordFinalL, :coordFinalN, :sentido, :sentidons, :causageradora, :localpassivo, :ambientalsocial, :centrodeCusto, :tipoDePassivo, :tipoOF, :dinamicaAtual, :gravidadeRodovia, :gravidadeAmbiental, :dimensoes, :largura, :profundidade, :grupoPassivo, :obs, :diretrizesTecnicas, :outrasDiretrizesTecnicas)";

    $stm = $pdo->prepare($sql);

    $stm->execute(
        [':codigoPS' => $codigoPS, ':rodovia' => $rodovia, ':municipio' => $municipio, ':estado' => $estado, ':kminicial' => $kmInicial, ':kmfinal' => $kmFinal, ':coordInicialL' => $coordInicialL, ':coordInicialN' => $coordInicialN, ':coordFinalL' => $coordFinalL, ':coordFinalN' => $coordFinalN, ':sentido' => $sentido, ':sentidons' => $sentidons, ':causageradora' => $causageradora, ':localpassivo' => $localpassivo, ':ambientalsocial' => $ambientalsocial, ':centrodeCusto' => $centrodeCusto, ':tipoDePassivo' => $tipoDePassivo, ':tipoOF' => $tipoOF, ':dinamicaAtual' => $dinamicaAtual, ':gravidadeRodovia' => $gravidadeRodovia, ':gravidadeAmbiental' => $gravidadeAmbiental, ':largura' => $largura, ':profundidade' => $profundidade, ':dimensoes' => $dimensoes, ':grupoPassivo' => $grupoPassivo, ':obs' => $obs, ':diretrizesTecnicas' => $diretrizesTecnicas, ':outrasDiretrizesTecnicas' => $outrasDiretrizesTecnicas]
    );

    echo "Ficha cadastrada com sucesso!!<br/>";
    echo "<a href='/bd-engefoto/php/listar.php'>Voltar</a>";

?>