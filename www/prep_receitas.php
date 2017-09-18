<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>FarmaSIM</title>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <link rel="stylesheet" href="_css/prep_receitas.css">
    <script>
        function addEtiqueta() {
            var para = document.createElement("DIV");
            para.innerHTML += '<div><p><label for=\"cNomeRemedio\">Nome do remédio: </label><input type=\"text\" name=\"tNomeRemedio\" id=\"cNomeRemedio\" size=\"40\" maxlength=\"40\" placeholder=\"Nome do remédio\"></p><p><label for=\"CHora\">Hora: </label><select name=\"tHora\" id=\"CHora\"><option value=\"0600\" selected>06:00</option><option value=\"0800\" selected>08:00</option><option value=\"1200\" selected>12:00</option><option value=\"1600\" selected>16:00</option><option value=\"2000\" selected>20:00</option><option value=\"2200\" selected>22:00</option></select ></p><p><label for=\"cCor\">Cor: </label><input type=\"color\" name=\"tCor\" id=\"cCor\"></p></div>';
            document.getElementById("myDIV").appendChild(para);
        };
    </script>
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
                </div>
            </fildset>
            <br>
            <fildset>
                <legend>Info da paciente</legend>
                <p><label for="cNomePaciente">Nome do paciente: </label><input type="text" name="tNomePaciente" id="cNomePaciente" size="40" maxlength="40" placeholder="Nome do Paciente"></p>
                <fildset>
                    <div id="myDIV"></div>
                    <button type="button" onclick="addEtiqueta()">Click Me!</button>
                </fildset>

            </fildset>
            <input type="submit" onclick="window.open('print_receitas.php','other_window')">
        </form>
    </div>
    <?php include("_includes/footer.php"); ?>

</div>

</body>

</html>