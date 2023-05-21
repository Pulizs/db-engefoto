<?php
    require_once "config.php";

    $id = $_GET["id"];

    $sql = "select * from tb_fichas where id = :idFicha";

$stm = $pdo->prepare($sql);

$stm->execute([':idFicha' => $id]);

$ficha = $stm->fetch(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="">
    <title>Engefoto</title>
    <link rel="stylesheet" href="../style/bootstrap.min.css">
    <script src="../script/bootstrap.min.js"></script>

    <style>
        label {
            color: #013463;
        }

        #btn {
            background-color: #70bc7b;
        }
    </style>
</head>

<body>

    <div class="container" style="background-color: #eee">
        <div class="container">

            <center><img src="../imagens/PHIlogo.png" alt="" style="width: 48vw; "><br><br></center>
            <form id="formularioFicha" action="/bd-engefoto/php/atualizar.php" method="post">
                <div class="form-row">
                    <div class="col">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <label id="lbcodigopassivo" for="codigopassivo">Código do passivo: </label>
                        <input class="form-control" id="codigopassivo" type="text" name="codigopassivo"
                            placeholder="(Ex: AC-01)" value="<?php echo $ficha['codigo_passivo']; ?>">
                    </div>
                    <div class="col">
                        <label id="lbrodovia" for="rodovia">Rodovia: </label>
                        <input id="rodovia" class="form-control" type="text" name="rodovia" placeholder="(Ex: BR 155)" value="<?php echo $ficha['rodovia']; ?>">
                    </div>
                </div>

                <br>
                <label for="municipio">Municipio: </label>
                <div class="form-row">
                    <div class="col">
                        <input id="municipio" class="form-control" type="text" name="municipio"
                            placeholder="(Ex: Barbacena)" style="width: 60vw;" value="<?php echo $ficha['municipio']; ?>">
                    </div>
                    <div class="col">
                        <select class="form-control" name="estado" id="estado" style="width: 18vw;">
                            <option value="MG">MG</option>
                            <option value="RJ">RJ</option>
                            <option value="DF">DF</option>
                            <option value="GO">GO</option>
                            <option value="TO">TO</option>
                            <option value="BA">BA</option>
                            <option value="SP">SP</option>
                            <option value="PR">PR</option>
                            <option value="SE">SE</option>
                            <option value="PB">PB</option>
                            <option value="MT">MT</option>
                            <option value="MS">MS</option>
                            <option value="RS">RS</option>
                            <option value="RR">RR</option>
                            <option value="RO">RO</option>
                            <option value="<?php echo $ficha['estado']; ?>" selected><?php echo $ficha['estado']; ?></option>
                        </select>
                    </div>

                </div>

                <div class="form-row">
                    <div class="col">
                        <label id="lbkminicial" for="kminicial">Km Inicial: </label>
                        <input class="form-control" id="kminicial" type="text" name="kminicial" style="width: 32vw;"
                            placeholder="(Ex: 022+000)" value="<?php echo $ficha['km_inicial']; ?>">
                    </div>
                    <div class="col">
                        <label id="lbkmfinal" for="kmfinal">Km Final:</label>
                        <input class="form-control" id="kmfinal" type="text" name="kmfinal" style="width: 32vw;"
                            placeholder="(Ex: 022+000)" value="<?php echo $ficha['km_final']; ?>">
                    </div>

                </div>

                <br>
                <label id="lbcoordInicial" for="coordInicial">Coordenada Inicial:</label>
                <div class="form-row">
                    <div class="col">
                        <input class="form-control" id="coordInicialL" type="text" name="coordInicialL"
                            placeholder="(Ex: 000.000 L)" style="width: 33vw;" value="<?php echo $ficha['coord_inicialL']; ?>">
                    </div>
                    <div class="col">

                        <input class="form-control" id="coordInicialN" type="text" name="coordInicialN"
                            placeholder="(Ex: 000.000 N)" style="width: 33vw;" value="<?php echo $ficha['coord_inicialN']; ?>">
                    </div>
                </div>

                <label id="lbcoordFinal" for="coordFinal">Coordenada Final:</label>
                <div class="form-row">
                    <div class="col">
                        <input class="form-control" id="coordFinalL" type="text" name="coordFinalL"
                            placeholder="(Ex: 000.000 L)" style="width: 33vw;" value="<?php echo $ficha['coord_finalL']; ?>">
                    </div>
                    <div class="col">
                        <input class="form-control" id="coordFinalN" type="text" name="coordFinalN"
                            placeholder="(Ex: 000.000 N)" style="width: 33vw;" value="<?php echo $ficha['coord_finalN']; ?>">
                    </div>
                </div>

                <br>
                <div class="form-row">
                    <div class="col">
                        <label id="lbsentido" for="sentido">Sentido: </label>
                        <input class="form-control" id="sentido" type="text" name="sentido"
                            placeholder="(Ex: Minas Gerais)" value="<?php echo $ficha['sentido']; ?>">
                    </div>
                    <div class="col">
                        <label id="lbdirecao" for="sentido">Sentido/Direção: </label>
                        <select class="form-control" name="sentidons" id="sentidons">
                            <option value="Direito/Sul">Direito/Sul</option>
                            <option value="Norte">Esquerdo/Norte</option>
                            <option value="<?php echo $ficha['direcao']; ?>" selected><?php echo $ficha['direcao']; ?></option>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col">
                        <label id="lbcausageradora" for="causageradora">Causa Geradora: </label>
                        <select class="form-control" id="causageradora" name="causageradora">
                            <option value="Rodovia">Rodovia</option>
                            <option value="Terceiros">Terceiros</option>
                            <option value="<?php echo $ficha['causa_geradora']; ?>" selected><?php echo $ficha['causa_geradora']; ?></option>
                        </select>
                    </div>
                    <div class="col">
                        <label id="lblocalpassivo" for="localpassivo">Local do Passivo Ambiental: </label>
                        <select class="form-control" name="localpassivo" id="localpassivo">
                            <option value="Talude de Corte">Talude de Corte</option>
                            <option value="Talude de aterro">Talude de aterro</option>
                            <option value="Faixa de dominio">Faixa de Domínio</option>
                            <option value="Fora de FD">Fora de FD</option>
                            <option value="Faixa nao edificavel">Faixa Não Edificável</option>
                            <option value="<?php echo $ficha['local_passivo']; ?>" selected><?php echo $ficha['local_passivo']; ?></option>
                        </select><br>
                        <select class="form-control" name="ambientalsocial" id="ambientalsocial">
                            <option value="Ambiental">AMBIENTAL</option>
                            <option value="Social">SOCIAL</option>
                            <option value="<?php echo $ficha['ambientalsocial']; ?>"><?php echo $ficha['ambientalsocial']; ?></option>
                        </select>

                    </div>
                </div>

                <br>
                <div class="form-row">
                    <div class="col">
                        <label id="lbcentrodeCusto" for="centrodeCusto">Centro de Custo: </label>
                        <select class="form-control" name="centrodeCusto" id="centrodeCusto">
                            <option value="Trabalhos iniciais">Trabalhos Iniciais</option>
                            <option value="Recuperação">Recuperação</option>
                            <option value="Monitoramento">Monitoramento</option>
                            <option value="<?php echo $ficha['centro_de_custo']; ?>" selected><?php echo $ficha['centro_de_custo']; ?></option>
                        </select>

                    </div>
                    <div class="col">
                        <label id="tipoDePassivo" for="tipoDePassivo">Tipologia de Passivos: </label>
                        <select class="form-control" name="tipoDePassivo" id="tipoDePassivo">
                            <option value="ER">Processo Erosivo (ER)</option>
                            <option value="DS">Desagreg. Superficial (DS)</option>
                            <option value="FT">Fluxo Trans Inseg. (FT)</option>
                            <option value="RD">Represam. de Dren. Nat. (RD)</option>
                            <option value="AS">Assor. De Curso D'Água (AS)</option>
                            <option value="DE">Dano Estrutural (DE)</option>
                            <option value="SD">Sistema de Drenagem (SD)</option>
                            <option value="ES">Escorregamento (ES)</option>
                            <option value="recalque RE">Recalque (RE)</option>
                            <option value="RB">Rolamento de Blocos (RB)</option>
                            <option value="QB">Queda de Bloco (QB)</option>
                            <option value="VS">App Suprimida (VS)</option>
                            <option value="SE">Solo Exposto (SE)</option>
                            <option value="Deposição De Residuos RE">Deposição de Residiuos (RE)</option>
                            <option value="AI">Acessos Irregulares (AI)</option>
                            <option value="AC">Pot. de Contamin. (AC)</option>
                            <option value="">- -</option>
                            <option value="<?php echo $ficha['tipo_passivos']; ?>" selected><?php echo $ficha['tipo_passivos']; ?></option>
                        </select>

                    </div>
                </div>

                <div class="form-row">
                    <div class="col">
                        <label id="lbtipoOF" for="tipoOF">Tipos OF: </label>
                        <select class="form-control" name="tipoOF" id="tipoOF">
                            <option value="Comercial">Comercial</option>
                            <option value="Residencial"> Residencial</option>
                            <option value="Barracas">Barracas</option>
                            <option value="Abaixo Do Padrao">Abaixo do Padrão Min.</option>
                            <option value="Cultivo">Cultivo</option>
                            <option value="<?php echo $ficha['tipo_of']; ?>" selected><?php echo $ficha['tipo_of']; ?></option>
                        </select>
                    </div>
                    <div class="col">
                        <label id="lbdinamicaAtual" for="dinamicaAtual">Dinâmica Atual: </label>
                        <select class="form-control" name="dinamicaAtual" id="dinamicaAtual">
                            <option value="Estavel">Estável</option>
                            <option value="Sujeito A Recorrencia">Estável/Sujeito a Recorrência</option>
                            <option value="Baixa Intensidade">Ativo/Baixa Intensidade</option>
                            <option value="Ativo Intenso">Ativo/Intenso</option>
                            <option value="Não Aplicavel">Não Aplicável</option>
                            <option value="<?php echo $ficha['dinamica']; ?>" selected><?php echo $ficha['dinamica']; ?></option>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col">
                        <label id="lbgravidadeRodovia" for="gravidadeRodovia">Gravidade em Relação à Rodovia: </label>
                        <select class="form-control" name="gravidadeRodovia" id="gravidadeRodovia">
                            <option value="Sem Perigo">Sem Perigo</option>
                            <option value="Potencial Para Oferecer Perigo">Potencial para Oferecer Perigo</option>
                            <option value="Com Perigo Eminente">Com Perigo Eminente</option>
                            <option value="Já interfere com Perigo">Já Interfere com Perigo</option>
                            <option value="<?php echo $ficha['gravidade_rodovia']; ?>" selected><?php echo $ficha['gravidade_rodovia']; ?></option>
                        </select>
                    </div>
                    <div class="col">
                        <label id="lbgravidadeAmbiental" for="gravidadeAmbiental">Gravidade em Relação ao Meio
                            Ambiente:</label>
                        <select class="form-control" name="gravidadeAmbiental" id="gravidadeAmbiental">
                            <option value="Sem Perigo">Sem Perigo</option>
                            <option value="Potencial para oferecer Perigo">Potencial para Oferecer Perigo</option>
                            <option value="Eminente">Com Perigo Eminente</option>
                            <option value="Já Interfere com Perigo">Já Interfere com Perigo</option>
                            <option value="<?php echo $ficha['gravidade_ambiental']; ?>" selected><?php echo $ficha['gravidade_ambiental']; ?></option>
                        </select>

                    </div>
                </div>

                <br>
                <label id="lbdimensoes" for="dimensoes">Dimensões da Ocorrencia: </label>
                <div class="form-row">
                    <div class="col">
                        <input class="form-control" id="dimensoes" type="number" name="dimensoes"
                            placeholder="Comprimento(m)" value="<?php echo $ficha['comprimento']; ?>">
                    </div>
                    <div class="col">

                        <input class="form-control" id="largura" type="number" name="largura" placeholder="Largura(m)" value="<?php echo $ficha['largura']; ?>">
                    </div>
                    <div class="col">
                        <input class="form-control" id="profundidade" type="number" name="profundidade"
                            placeholder="Profundidade(m)" value="<?php echo $ficha['profundidade']; ?>">
                    </div>
                </div>

                <div class="form-row">
                    <div class="col">
                        <label id="lbgrupoPassivo" for="grupoPassivo">Grupo de Passivos: </label>
                        <select class="form-control" name="grupoPassivo" id="grupoPassivo">
                            <option value="Grupo I">Grupo I</option>
                            <option value="Grupo II">Grupo II</option>
                            <option value="Grupo III">Grupo III</option>
                            <option value="Grupo IV">Grupo IV</option>
                            <option value="Grupo V">Grupo V</option>
                            <option value="<?php echo $ficha['grupo_passivos']; ?>" selected><?php echo $ficha['grupo_passivos']; ?></option>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col">
                        <label id="lbobs" for="obs">Observações Relevantes: </label>
                        <textarea id="obs" name="obs" class="form-control" id="exampleFormControlTextarea1" rows="3"
                            placeholder="Escreva aqui as observações..." value="<?php echo $ficha['obs']; ?>"><?php echo $ficha['obs']; ?></textarea>
                    </div>
                </div>

                <label id="lbdiretrizesTecnicas" for="diretrizesTecnicas">Diretrizes Técnicas para
                    Recuperação/Remediação: </label>
                <div class="form-row">
                    <div class="col">
                        <select class="form-control" name="diretrizesTecnicas" id="diretrizesTecnicas">
                            <option value="Estabilização">Estabilização</option>
                            <option value="Recomposicao">Recomposição</option>
                            <option value="Enleivamento">Enleivamento</option>
                            <option value="arjeta Trapezoidal Concreto">Sarjeta Trapezoidal Concreto</option>
                            <option value="Gabião">Gabião</option>
                            <option value="Manuten. e Conservação">Manuten. e Conservação</option>
                            <option value="Reman./ Desoucup. da FD">Reman./ Desoucup. da FD</option>
                            <option value="Retentores de sedimentos">Retentores de sedimentos</option>
                            <option value="Trincheira Muro de concreto">Trincheira C</option>
                            <option value="Muro de concreto">Muro de concreto</option>
                            <option value="Retaludamento">Retaludamento</option>
                            <option value="Hidrossemeadura">Hidrossemeadura</option>
                            <option value="Aterros em degraus">Aterros em degraus</option>
                            <option value="Enrocamento de pedra">Enrocamento de pedra</option>
                            <option value="Nec. de interv. além da FD">Nec. de interv. além da FD</option>
                            <option value="<?php echo $ficha['diretrizes']; ?>" selected><?php echo $ficha['diretrizes']; ?></option>
                        </select>
                    </div>
                    <div class="col">
                        <input class="form-control" id="outrosDiretrizesTecnicas" type="text" name="outrasDiretrizesTecnicas"
                            placeholder="Outros" value="<?php echo $ficha['outros']; ?>"><br>

                    </div>
                </div>

                <input type="submit" id="btn" class="btn btn-primary" value="Enviar">
                <br><br>

            </form>
        </div>

    </div>

    <footer class="text-center text-white" style="background-color: #f1f1f1;">
        <div class="container pt-4">
            <section class="mb-4">
                <img src="../imagens/Logo_Engefoto.jpg" alt="" style="height: 6vh;">
                <img src="../imagens/PHIlogo.png" alt="" style="height: 6vh;">
            </section>
        </div>

        <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            <label class="text-dark" for="">© 2023 Copyright: <a class="text-dark"
                    href="https://github.com/Pulizs">Pedro Cruz</a></label>
        </div>
    </footer>

</body>

</html>
