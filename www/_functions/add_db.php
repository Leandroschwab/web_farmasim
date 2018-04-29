<?php


function get_indice($conne)
{
    $result = $conne->query("SELECT `valor` FROM `config` WHERE variavel='indice-user' ");
    while ($row = $result->fetch_assoc()) {
        $indic = intval($row['valor']);

    }
    $indic++;
    $conne->query("UPDATE `config` SET `valor`=$indic WHERE  variavel='indice-user'");
    $indic--;
    return ($indic);
}

;
function generatePassword($length = 6)
{
    $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $count = mb_strlen($chars);

    for ($i = 0, $result = ''; $i < $length; $i++) {
        $index = rand(0, $count - 1);
        $result .= mb_substr($chars, $index, 1);
    }

    return $result;
}

function set_receita($id_receita, $nome_paciente, $senhaDB, $conne)
{
    $sql = "INSERT INTO `receitas`(`id-receita`, `nome-paciente`, `password`) VALUES ($id_receita, '$nome_paciente' , '$senhaDB')";
    $conne->query($sql);
    /*   if ($conne->query($sql) === true) {
        echo('new record create successfully ');
    } else {
        echo "error add db ";
    })*/
}

function set_horario($id_receita, array $nomeremedio_DB, array $hora_DB, array $cor_DB, $numremedios_DB, $conne)
{
    $sql = "INSERT INTO `horarios`(`id-receita`, `Nome Remedio`, `cor`, `6:00`, `7:00`, `12:00`, `19:00`, `21:00`) VALUES";
    for ($i = 1; $i <= $numremedios_DB; $i++) {
        $sql .= " ('$id_receita', '$nomeremedio_DB[$i]' , '$cor_DB[$i]'";
        for ($j = 1; $j <= 5; $j++) {
            if ($hora_DB[$i][$j] == true) {
                $sql .= ",true";
            } else {
                $sql .= ",false";
            };
        };

        $sql .= ")";
        if ($i < $numremedios_DB) {
            $sql .= ",";
        };
    }
    $conne->query($sql);
/*    if ($conne->query($sql) === true) {
        echo('horarios salvos');
    } else {
        echo "erro salvar horarios ";
    }*/

}

?>
