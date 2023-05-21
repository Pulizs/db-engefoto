<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do equipamento</title>
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <script src="script/bootstrap.min.js"></script>
</head>
<body>
    <h2>Dados do equipamento:</h2>
    <form action="/crudtb/equipamentos/salvar.php" method="post">
        <label id="nome" for="nome">Nome: </label>
        <input id="nome" type="text" name="nome" value="">
        <br/><br/>
        <label id="marca" for="marca">Marca: </label>
        <input id="marca" type="text" name="marca" value="">
        <br/><br/>
        <label id="modelo" for="modelo">Modelo: </label>
        <input id="modelo" type="text" name="modelo" value="">
        <br/><br/>
        <label id="quantidade" for="quantidade">Quantidade: </label>
        <input id="quantidade" type="text" name="quantidade" value="">
        <br/><br/>
        <input type="submit" name="salvar" value="Enviar">
    </form>
</body>
</html>