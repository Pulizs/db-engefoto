

function enviar() {
    let codigoPassivo = document.getElementById("codigopassivo").value.toUpperCase().replace(" ", "-");
    let rodovia = document.getElementById("rodovia").value.toUpperCase().replace(" ", "-");
    let municipio = document.getElementById("municipio").value;
    let estado = document.getElementById("estado").value;
    municipio = municipio + "(" + estado + ")"
    let kminicial = document.getElementById("kminicial").value;
    let kmfinal = document.getElementById("kmfinal").value;
    let coordInicialL = document.getElementById("coordInicialL").value;
    let coordInicialN = document.getElementById("coordInicialN").value;
    let coordInicial = coordInicialL + "L; " + coordInicialN + "N";
    let coordFinalL = document.getElementById("coordFinalL").value;
    let coordFinalN = document.getElementById("coordFinalN").value;
    let coordFinal = coordFinalL + "L; " + coordFinalN + "N";
    let sentido = document.getElementById("sentido").value;
    let sentidons = document.getElementById("sentidons").value;
    let causageradora = document.getElementById("causageradora").value;
    let localpassivo = document.getElementById("localpassivo").value;
    let ambientalsocial = document.getElementById("ambientalsocial").value;
    let centrodeCusto = document.getElementById("centrodeCusto").value;
    let tipoDePassivo = document.getElementById("tipoDePassivo").value;
    let tipoOF = document.getElementById("tipoOF").value;
    let dinamicaAtual = document.getElementById("dinamicaAtual").value;
    let gravidadeRodovia = document.getElementById("gravidadeRodovia").value;
    let gravidadeAmbiental = document.getElementById("gravidadeAmbiental").value;
    let dimensoes = document.getElementById("dimensoes").value;
    let largura = document.getElementById("largura").value;
    let profundidade = document.getElementById("profundidade").value;
    let grupoPassivo = document.getElementById("grupoPassivo").value;
    let observacao = document.getElementById("obs").value;
    let diretrizesTecnicas = document.getElementById("diretrizesTecnicas").value;
    let outros = document.getElementById("outrosDiretrizesTecnicas").value;
    let registoFotografico = document.getElementById("picture__input").files[0];





    if (codigoPassivo == "" || rodovia == "" || kminicial == "" || coordInicialL == "" || coordInicialN == "" || sentido == "" || sentidons == "") {
        erroPreenchimento();
    } else {
        var style = "<style>";
        style += "table {width: 100%;font: 20px Calibri;}";
        style += "table, td, th {border: solid 1px #DDD; border-collapse: collapse;";
        style += "padding: 2px 3px;text-align: center;}";
        style += "th {background-color: white;}";
        style += ".";
        style += "</style>";

        var script = "<script>";
        script += "const output = document.querySelector('output');";
        script += "</script>";

        // var reader = new FileReader();
        //     reader.onload = function (e) {
        //         document.getElementById('visulizarImagem').innerHTML = '';
        //     };

        //     reader.readAsDataURL(arquivoInput.files[0]);

        //     console.log(arquivoInput.files[0].size);



        alert("Enviado!! Tenha um bom trabalho! Clique em OK para gerar a ficha");
       

        var win = window.open();

        win.document.write('<html><head>');
        win.document.write('<title>Ficha ', codigoPassivo, '</title>');
        win.document.write(style);
        win.document.write('</head>');
        win.document.write('<body>');
        win.document.write('<table>');
        win.document.write('<tr>');
        win.document.write('<th colspan=2>Codigo passivo: ', codigoPassivo, '</th>');
        win.document.write('<th colspan=2>Registro fotográfico:</th>');
        win.document.write('</tr>');

        win.document.write('<tr>');
        win.document.write('<td>Rodovia: ', rodovia, '</td>');
        win.document.write('<td>Município: ', municipio, '</td>');
        win.document.write('<td colspan=2>Foto do Passivo</td>');
        win.document.write('</tr>');

        win.document.write('<tr>');
        win.document.write('<th colspan=2 style="text-align: left;">Localização do Passivo Ambiental:</th>');
        win.document.write('<th rowspan=4">' + registoFotografico + '</th>');
        win.document.write('<th rowspan=4>' + '</th>');



        win.document.write('</tr>');

        win.document.write('<tr>');
        win.document.write('<td>Km Inicial: ', kminicial, '</td>');
        win.document.write('<td>Km Final: ', kmfinal, '</td>');
        win.document.write('</tr>');

        win.document.write('<tr>');
        win.document.write('<td>Coordenada Inicial: ', coordInicial, '</td>');
        win.document.write('<td>Coordenada Final: ', coordFinal, '</td>');
        win.document.write('</tr>');

        win.document.write('<tr>');
        win.document.write('<td>Sentido: ', sentido, '</td>');
        win.document.write('<td>Sentido: ', sentidons, '</td>');
        win.document.write('</tr>');

        win.document.write('<tr>');
        win.document.write('<th colspan=2 style="text-align: left;">Central de Custo:</th>');
        win.document.write('<th rowspan=4>' + '</th>');
        win.document.write('<th rowspan=4>' + '</th>');
        win.document.write('</tr>');

        win.document.write('<tr>');
        win.document.write('<td>' + ambientalsocial + '</td>');
        win.document.write('<td>' + centrodeCusto + '</td>');
        win.document.write('</tr>');

        win.document.write('<tr>');
        win.document.write('<th>Causa Geradora:</th>');
        win.document.write('<th>Local do Passivo Ambiental:</th>');
        win.document.write('</tr>');

        win.document.write('<tr>');
        win.document.write('<td>' + causageradora + '</td>');
        win.document.write('<td>' + localpassivo + '</td>');
        win.document.write('</tr>');

        win.document.write('<tr>');
        win.document.write('<th>Tipologia de Passivo:</th>');
        win.document.write('<th>Dinânimca Atual:</th>');
        win.document.write('<th colspan=4>Imagem de Satélite de Localização do Passivo</th>');
        win.document.write('</tr>');

        win.document.write('<tr>');
        win.document.write('<td>', tipoDePassivo, '</td>');
        win.document.write('<td>', dinamicaAtual, '</td>');
        win.document.write('</tr>');

        win.document.write('<tr>');
        win.document.write('<th>Gravidade em Relação a Rodovia:</th>');
        win.document.write('<th>Gravidade em Relação ao Ambiente:</th>');
        win.document.write('</tr>');

        win.document.write('<tr>');
        win.document.write('<td>', gravidadeRodovia, '</td>');
        win.document.write('<td>', gravidadeAmbiental, '</td>');
        win.document.write('</tr>');

        win.document.write('<tr>');
        win.document.write('<th colspan=2 style="text-align: left;">Dimensões da Ocorrência:</th>');
        win.document.write('</tr>');

        win.document.write('<tr>');
        win.document.write('<td>Comprimento(m): ', dimensoes, '</td>');
        win.document.write('<td>Largura(m): ', largura, '</td>');
        win.document.write('</tr>');

        win.document.write('<tr>');
        win.document.write('<td>Profundidade/Altura(m): ', profundidade, '</td>');
        win.document.write('<td>Grupo de Passivo: ', grupoPassivo, '</td>');
        win.document.write('</tr>');

        win.document.write('<tr>');
        win.document.write('<th colspan=2 style="text-align: left;"> Observações:</th>');
        win.document.write('</tr>');

        win.document.write('<tr>');
        win.document.write('<td id="observacao" colspan=2>' + observacao + '</th>');
        win.document.write('</tr>');
        //fazer uma class para adicionar a imagem
        win.document.write('<tr>');
        win.document.write('<th>Diretrizes Técnicas para Recuperação/Remediação:</th>');
        win.document.write('<th>Outros:</th>');
        win.document.write('</tr>');

        win.document.write('<tr>');
        win.document.write('<td>' + diretrizesTecnicas + '</td>');
        win.document.write('<td>' + outros + '</td>');
        win.document.write('</tr>');

        win.document.write('</table>');

        //adicionar um footer com a imagem da engefoto

        win.document.write('</body></html>');

        win.print();
        win.document.close();

    }
}

function erroPreenchimento() {
    alert("Algum campo não foi preenchido");
}