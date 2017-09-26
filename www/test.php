<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>FarmaSIM</title>
    <link rel="stylesheet" href="_css/estilo.css"/>


    <script>
        var jTipoFolha ="p6080";
        var jPos= 1;
        var jNomePaciente ="ertyui";
        var jQuant="2";
        var jNomeRemedio = [];
        var jHora = [];
        var jCor = [];

        jNomeRemedio[1] ="dfghjk";
        jHora[1] = "2200";
        jCor[1] = "#0000ff";

        jNomeRemedio[2] ="2222222222222";
        jHora[2] = "2200";
        jCor[2] = "#00ff00";

        function fazTabela() {
            var posl = 1;
            var i,j;
            var etiqueta = 1;
            for(i=1;i<=10;i++){
                document.write("<tr>");
                for(j=1;j<=3;j++){

                    document.write("<td><div class=\' " + jTipoFolha  + " \' > ");

                    if((posl>=jPos) && (posl<=(jPos+jQuant-1))){

                        document.write("<div class=\'divbola\' id=\'bola"+ etiqueta +"\'> Bola1</div> ");
                        document.write(" <p>Nome: " + jNomePaciente+ " <br> Remedio: " + jNomeRemedio[etiqueta] + " <br> Hora: " + jHora[etiqueta] + " </p>");
                        etiqueta++;
                    }
                    document.write("</div></td>");
                    posl++;
                }
                document.write("</tr>")
            }
        }
    </script>
</head>
<body>
<div id="interface">
    <?php include("_includes/header.php"); ?>


    <?php include("_includes/footer.php"); ?>

</div>

</body>

</html>