<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>FarmaSIM</title>
    <link rel="stylesheet" href="_css/estilo.css"/>
</head>
<body>
<div id="interface">
    <?php include("_includes/header.php"); ?>
    <?php echo $_POST["tNameRemedio"]; ?><br>
    Your email address is: <?php echo $_POST["tTipos"]; ?>


    lista de remedios (editar)

<form method="post">
    <fildset>
        <legend>Cadastro de remédio</legend>
        <p><label for="cNameRemedio">Nome do remédio: </label><input type="text" name="tNameRemedio" id="cNameRemedio" size="40" maxlength="40" placeholder="Nome do remédio"></p>
        <p>categoria: </p>
        <p><select name="tTipos" id="cTipos">
            <option value="Antibiótico">Antibiótico</option>
            <option value="Anti-inflamatório">Anti-inflamatório</option>
        </select></p>
        <input type="submit">
    </fildset>
</form>

     <?php include ("_includes/footer.php"); ?>

</div>

</body>

</html>