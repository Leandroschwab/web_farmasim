<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>FarmaSIM</title>
    <link rel="stylesheet" href="_css/etiqueta.css"/>
    <?php
    $tipoFolha = $_POST["tTipoFolha"];
    $pos = $_POST["tPos"];
    $nomePaciente = $_POST["tNomePaciente"];
    $nomeRemedio1 = $_POST["tNomeRemedio1"];
    $hora1 = $_POST["tHora1"];
    $cor1 = $_POST["tCor1"];
    echo("
    <style>
        div#bola1{
        box-shadow: inset 0 0 0 1000px " . $cor . "   
        }
    </style>");
    echo("
        <script>
        var jTipoFolha =". $tipoFolha .";
        var jPos=". $pos .";
        var jNomePaciente =".$nomePaciente.";
        var jNomeRemedio =".$nomeRemedio1.";
        var jHora =".$hora1.";
        var jCor =".$cor1.";
        
        function fazTabela() {
          var posl = 0;
          var i,j;
            for(i=1;i<=10;i++){
                document.write(\"<tr>\");
                for(j=1;j<=3;j++){
                    posl++;
                    document.write(pols);
                }
            }
        }
        
        
</script>
    
    
    ");
    ?>
</head>
<body id="folha">
<div>
    <table id="tabela" cellspacing="0" cellpadding="0">
        <script>fazTabela();</script>
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

    </table>
</div>

</body>

</html>