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
          document.write(\"<div id=\\'tabelaEtiqueta\\'><div id=\\'folhaEtiqueta\\'><table id=\\'tabela\\' cellspacing=\\'0\\' cellpadding=\\'0\\'>\");
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
          function fazTabelaEtiqueta2() {
          var i,j;
          var etiqueta = 1;
          document.write(\"<div id=\\'tabelaHorario\\'><div id=\\'folhaHorario\\'><table id=\\'tabelaH\\' cellspacing=\\'0\\' cellpadding=\\'0\\'>\");
                document.write(\"<tr>\");
                
                document.write(\"<td id=\\'tabelaH1\\'>\");
                document.write(\" <p>OIOI</p>\");
                document.write(\"</td>\");
                
                document.write(\"<td class=\\'tabelaH2\\'>\");
                document.write(\" <p>22222</p>\");
                document.write(\"</td>\");
                                
                document.write(\"<td class=\\'tabelaH2\\'>\");
                document.write(\" <p>33333</p>\");
                document.write(\"</td>\");
                                
                document.write(\"<td class=\\'tabelaH2\\'>\");
                document.write(\" <p>444444</p>\");
                document.write(\"</td>\");
                                
                document.write(\"<td class=\\'tabelaH2\\'>\");
                document.write(\" <p>55555</p>\");
                document.write(\"</td>\");
                                
                document.write(\"<td class=\\'tabelaH2\\'>\");
                document.write(\" <p>666666</p>\");
                document.write(\"</td>\");
                document.write(\"</tr>\")
                for(i=1;i<=jQuant;i++){
                document.write(\"<tr>\");
                for(j=0;j<=5;j++){
                    
                    document.write(\"<td class=\\'tabelaNomeRemedio\\'><div>\");
                                   
                    if(j==0){ 
                              document.write(\" <p>\" + jNomeRemedio[etiqueta] + \" </p>\");        
                       }
                    if(j==jHora[etiqueta]){
                        document.write(\"<div class=\\'divbola\\' id=\\'bola\"+ etiqueta +\"\\'> Bola1</div> \");
                    }
                                          
                    document.write(\"</div></td>\");
               
                }
                etiqueta++;
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
        <script>fazTabelaEtiqueta2();</script>


    </table>
</div>
</div>
</body>
</body>

</html>