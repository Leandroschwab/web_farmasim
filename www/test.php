<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>FarmaSIM</title>
    <link rel="stylesheet" href="_css/estilo.css"/>

    <script>
        var jTipoFolha = "p6080";
        var jPos = 7;
        var jNomePaciente = "ecrvt";
        var jNomeRemedio = "ecvb";
        var jHora = "2200";
        var jCor = "#000000";

        function fazTabela() {
            var posl = 0;
            var i, j;
            for (i = 1; i <= 10; i++) {
                document.write("<tr>");
                for (j = 1; j <= 3; j++) {
                    posl++;
                    document.write("<td><div class=\' " + jTipoFolha + " \' > ");
                    if (posl == 1) {
                        document.write("
                            < div
                    class=\"divbola\" id = "bola1" > Bola1 < / div > ");
                        document.write(" <p>Nome: " + jNomePaciente + " <br> Remedio: " + jNomeRemedio + "<br> Hora: " + jHora + "</p>"
                        );
                    }
                    document.write("</div></td>");

                }
            }
        }


    </script>
</head>
<body>
<div id="interface">
    <?php include("_includes/header.php"); ?>
    <?php
    $posl = 0;
    for ($i = 1; $i <= 10; $i++) {
        echo("<tr>");
        for ($j = 1; $j <= 3; $j++) {
            $posl++;
            echo("<td><div class=\"" . $tipoFolha . "\">");
            if (true) {
                echo("
                        <div class='divbola' id='bola1'> Bola1</div>
                        <p>Nome: " . $nomePaciente . "<br> Remedio: " . $nomeRemedio . "<br> Hora: " . $hora . "</p>"
                );
            }
            echo("</div></td>");
        }
        echo("</tr>");
    }
    ?>

    <?php include("_includes/footer.php"); ?>

</div>

</body>

</html>