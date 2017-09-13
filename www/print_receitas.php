<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>FarmaSIM</title>
    <link rel="stylesheet" href="_css/etiqueta.css"/>
</head>
<body>
    <div id="folha">
        <table id="tabela" cellspacing="0" cellpadding="0">
        <?php
$tipoFolha = $_POST["tTipoFolha"];
$pos = $_POST["tPos"];
$nomePaciente = $_POST["tNomePaciente"];
$nomeRemedio = $_POST["tNomeRemedio"];
$hora = $_POST["tHora"];
$cor = $_POST["tCor"];

     for ($i=1;$i<=10;$i++){
        echo("<tr>");
         for ($j=1;$j<=3;$j++){
                echo ("<td> 
<div class=\"".$tipoFolha. "\">
Nome: ". $nomePaciente. "<br> Remedio: " .$nomeRemedio."<br> Hora: ".$hora.  " 
</div></td>");
        }
         echo("</tr>");
    }






    ?>

        </table>
</div>

</body>

</html>