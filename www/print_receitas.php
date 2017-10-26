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
    $quant = $_POST["tQuant"];

    echo("
        <script>
        var jTipoFolha =\"" . $tipoFolha . "\";
        var jPos= " . $pos . ";
        var jNomePaciente =\"" . $nomePaciente . "\";
        var jQuant=" .$quant . ";
        var jNomeRemedio = [];
        var jHora = [];
        var jCor = [];
   ");

    for ($i = 1; $i <= $quant; $i++) {
        $nomeRemedio[$i] = $_POST["tNomeRemedio" . $i];
        $hora[$i] = $_POST["tHora" . $i];
        $cor[$i] = $_POST["tCor" . $i];
        echo("
        jNomeRemedio[$i] =\"$nomeRemedio[$i]\";
        jHora[$i] = \"$hora[$i]\";
        jCor[$i] = \"$cor[$i]\";
");
    };


    echo("   
          function fazTabelaEtiqueta() {
          var posl = 1;
          var i,j;
          var etiqueta = 1;
          document.write(\"<div style='visibility: collapse'><div id=\\'folhaEtiqueta\\'><table id=\\'tabela\\' cellspacing=\\'0\\' cellpadding=\\'0\\'>\");
            for(i=1;i<=10;i++){
                document.write(\"<tr>\");
                for(j=1;j<=3;j++){
                    
                    document.write(\"<td><div class=\\' \" + jTipoFolha  + \" \\' > \");
                    
                    if((posl>=jPos) && (posl<=(jPos+jQuant-1))){ 
                                      
                    document.write(\"<div class=\\'divbola\\' id=\\'bola\"+ etiqueta +\"\\'> Bola1</div> \");
                       document.write(\" <p>Nome: \" + jNomePaciente+ \" <br> Remedio: \" + jNomeRemedio[etiqueta] + \" <br> Hora: \" + jHora[etiqueta] + \" </p>\");
                        etiqueta++;
                        }
                    document.write(\"</div></td>\");
               posl++;
                }
                document.write(\"</tr>\")
            }
          }
                
                
</script>
    ");
    for($i=1;$i<=$quant;$i++){
    echo("
      <style>
          div#bola".$i."{
          box-shadow: inset 0 0 0 1000px " . $cor[$i] . "
          }
      </style>");
    }

    ?>
</head>
<body id="folha">
        <script>fazTabelaEtiqueta();</script>


    </table>
</div>
</div>
</body>
</body>

</html>