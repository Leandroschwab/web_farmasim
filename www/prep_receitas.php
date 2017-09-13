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

    <form method="post" action="print_receitas.php">
        <fildset>
            <legend>Info para impressao</legend>

            <p><label for="cTipoFolha">Tipo da folha: </label><select name="tTipoFolha" id="cTipoFolha">
                    <option value="p6080" selected>Pimaco 6080</option>
                </select>
            </p>
            <p><label for="cPos">Posicao da etiqueta: </label><input type="number" min="1" max="500" name="tPos" id="cPos" value="1"></p>
        </fildset>
        <br>
        <fildset>
            <legend>Info da etiqueta</legend>
            <p><label for="cNomePaciente">Nome do paciente: </label><input type="text" name="tNomePaciente" id="cNomePaciente" size="40" maxlength="40" placeholder="Nome do Paciente"></p>

            <p><label for="cNomeRemedio">Nome do remédio: </label><input type="text" name="tNomeRemedio" id="coameRemedio" size="40" maxlength="40" placeholder="Nome do remédio"></p>
            <p><label for="CHora">Hora: </label><select name="tHora" id="CHora">
                    <option value="0600" selected>06:00</option>
                    <option value="0800" selected>08:00</option>
                    <option value="1200" selected>12:00</option>
                    <option value="1600" selected>16:00</option>
                    <option value="2000" selected>20:00</option>
                    <option value="2200" selected>22:00</option>

                </select> </p>
            <p><label for="cCor">Cor: </label><input type="color" name="tCor" id="cCor"></p>

        </fildset>
        <input type="submit">
    </form>
    <?php include ("_includes/footer.php"); ?>

</div>

</body>

</html>