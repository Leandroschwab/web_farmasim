<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>FarmaSIM</title>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <link rel="stylesheet" href="_css/prep_receitas.css">
    <script type="text/javascript" src="_js/prep_receitas.js"></script>
</head>
<body>
<div id="interface">
    <?php include("_includes/header.php"); ?>
    <div id="conteudo">
        <form method="post" action="print_receitas.php">
            <fildset>
                <legend>Info para impressao</legend>

                <p><label for="cTipoFolha">Tipo da folha: </label><select name="tTipoFolha" id="cTipoFolha">
                        <option value="p6080" selected>Pimaco 6080</option>
                    </select>
                </p>
                <div>
                    <p>Posicao da etiqueta:</p>
                    <script>
                        var tipominifolha = "miniP6080";
                        document.write('<table id=\"tabela\" cellspacing=\"0\" cellpadding=\"0\">');
                        var posl = 0;
                        var i, j;
                        for (i = 1; i <= 10; i++) {
                            document.write('<tr>');
                            for (j = 1; j <= 3; j++) {
                                posl++;
                                document.write('<td><div class=\"' + tipominifolha + '\"><input type=\"radio\" value=\"' + posl + '\" name=\"tPos\" id=\"c' + posl + '\" ><label for=\"c' + posl + '\">' + posl + '</label></div></td>');
                            }
                            document.write('</tr>');
                        }
                        document.write('</table>')
                    </script>
                    <input type="hidden" id="cNumEtiquetas" name="tQuant" value="1">
                </div>
            </fildset>
            <br>
            <fildset>
                <legend>Info da paciente</legend>
                <p><label for="cNomePaciente">Nome do paciente: </label><input type="text" name="tNomePaciente"
                                                                               id="cNomePaciente" size="40"
                                                                               maxlength="40"
                                                                               placeholder="Nome do Paciente"></p>
                <fildset>
                    <div id="myDIV"></div>
                    <script>
                        while (numEtiquetas <= numEtiquetasTotal) {
                            addEtiqueta()
                        }
                    </script>
                    <button type="button" onclick="addEtiqueta()">Adicionar Etiqueta!</button>
                </fildset>

            </fildset>
            <input type="submit">
        </form>
    </div>
    <?php include("_includes/footer.php"); ?>

</div>

</body>

</html>