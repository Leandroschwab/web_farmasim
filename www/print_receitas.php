<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>FarmaSIM</title>
    <link rel="stylesheet" href="_css/etiqueta.css"/>

    <?php
    $tipoFolha = $_POST["tTipoFolha"];
    $pos =1;
    if(isset($_POST["tPos"])){
        $pos = $_POST["tPos"];
    }

    $nomePaciente = $_POST["tNomePaciente"];
    $quant = $_POST["tQuant"];

    echo("
        <script>
        var jTipoFolha =\"" . $tipoFolha . "\";
        var jPos= " . $pos . ";
        var jNomePaciente =\"" . $nomePaciente . "\";
        var jQuant=" .$quant . ";
        var jNomeRemedio = [];
        var jTHoras=[];
        var jHora = [];
        var jCor = [];
   ");

    for ($i = 1; $i <= $quant; $i++) {
        $nomeRemedio[$i] = $_POST["tNomeRemedio" . $i];
        $tHoras[$i]=$_POST["tNumHoras".$i];

        echo (" jHora[$i]=[]");
        for ($j=1; $j<=$tHoras[$i]; $j++){
            $hora[$i][$j] = $_POST["tHora" . $i."-".$j];
            $horae=$hora[$i][$j];
                                        //passa hora pro javascript
            echo ("
            jHora[$i][$j] = \"$horae\";
            ");
        }

        $cor[$i] = $_POST["tCor" . $i];
        echo("
        jNomeRemedio[$i] =\"$nomeRemedio[$i]\";
        jCor[$i] = \"$cor[$i]\";
        jTHoras[$i] = \"$tHoras[$i]\";
        ");
    };
    echo('</script>');
?>
    <script type="text/javascript" src="_js/print_receitas.js"></script>

    <?php
    for($i=1;$i<=$quant;$i++){
    echo("
      <style>
          div#bola".$i."{
          box-shadow: inset 0 0 0 1000px " . $cor[$i] . "
          }
      </style>");
    }
$hora_DB=array(array());
    for ($i = 1; $i <= $quant; $i++) {
         for ($j=1; $j<=5; $j++){
              $hora_DB[$i][$j]=false;
          }
        for ($j=1; $j<=$tHoras[$i]; $j++){
            $horae=$hora[$i][$j];
            echo"$horae";
            switch ($horae) {
                case "06:00":
                    $hora_DB[$i][1]=true;

                    break;
                case "07:00":
                    $hora_DB[$i][2]=true;

                    break;
                case "12:00":
                    $hora_DB[$i][3]=true;

                    break;
                case "19:00":
                    $hora_DB[$i][4]=true;

                    break;
                case "21:00":
                    $hora_DB[$i][5]=true;

                    break;
            }

        }

    };






    ?>
    <?php include("_functions/add_db.php"); ?>



</head>
<body id="folha">
<div id="boxbutton">
<button type="button" onclick="fazTabelaEtiqueta1()">Etiqueta!</button>
<button type="button" onclick="fazTabelaEtiqueta2()">Tabela!</button>
</div>
<script>fazTabelaEtiqueta1()</script>

</body>

</html>