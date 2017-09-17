<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>FarmaSIM</title>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <link rel="stylesheet" href="_css/prep_receitas.css">
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
            <p>Posicao da etiqueta:
                <script>
                var tipominifolha = "miniP6080";
                document.write('<table id=\"tabela\" cellspacing=\"0\" cellpadding=\"0\">');
                var posl = 0;
                var i, j ;
                for (i = 1; i <= 10; i++) {
                    document.write('<tr>');
                    for (j = 1; j <= 3; j++) {
                        posl++;
                        document.write('<td><div class=\"' + tipominifolha + '\">');
                        document.write('<input type=\"radio\" value=\"' + posl + '\" name=\"tPos\" id=\"c' + posl + '\" >');
                        document.write('<label for=\"c' + posl+ '\">' + posl + '</label>');
                        document.write('</div></td>');
                    }
                    document.write('</tr>');
                }
                </script>
            </table>
            </p>
        </fildset>
        <br>
        <fildset>
            <legend>Info da etiqueta</legend>
            <p><label for="cNomePaciente">Nome do paciente: </label><input type="text" name="tNomePaciente"
                                                                           id="cNomePaciente" size="40" maxlength="40"
                                                                           placeholder="Nome do Paciente"></p>

            <p><label for="cNomeRemedio">Nome do remédio: </label><input type="text" name="tNomeRemedio"
                                                                         id="cNomeRemedio" size="40" maxlength="40"
                                                                         placeholder="Nome do remédio"></p>
            <p><label for="CHora">Hora: </label><select name="tHora" id="CHora">
                    <option value="0600" selected>06:00</option>
                    <option value="0800" selected>08:00</option>
                    <option value="1200" selected>12:00</option>
                    <option value="1600" selected>16:00</option>
                    <option value="2000" selected>20:00</option>
                    <option value="2200" selected>22:00</option>

                </select></p>
            <p><label for="cCor">Cor: </label><input type="color" name="tCor" id="cCor"></p>

        </fildset>
        <input type="submit">
    </form>
    <?php include("_includes/footer.php"); ?>

</div>

</body>

</html>