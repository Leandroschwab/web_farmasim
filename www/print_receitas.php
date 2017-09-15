<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>FarmaSIM</title>
    <link rel="stylesheet" href="_css/etiqueta.css"  />
    <?php
    $tipoFolha = $_POST["tTipoFolha"];
    $pos = $_POST["tPos"];
    $nomePaciente = $_POST["tNomePaciente"];
    $nomeRemedio = $_POST["tNomeRemedio"];
    $hora = $_POST["tHora"];
    $cor = $_POST["tCor"];
    echo("
    <style>
        div#bola1{
        box-shadow: inset 0 0 0 1000px ".$cor."   
        }
    </style>")
    ?>
</head>
<body>
<div id="folha">
    <table id="tabela" cellspacing="0" cellpadding="0">
        <?php
        $posl=0;
        for ($i = 1; $i <= 10; $i++) {
            echo("<tr>");
            for ($j = 1; $j <= 3; $j++) {
                $posl++;
                echo("<td><div class=\"" . $tipoFolha . "\">");
                if ($posl == $pos) {
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

    </table>
</div>

</body>

</html>