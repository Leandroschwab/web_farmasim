<?php
include('config.php');
// Create connection
$conn = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully ";
function getdice(){
    $result = $conn->query("SELECT `valor` FROM `config` WHERE variavel='indice-user' ");
    while ($row = $result->fetch_assoc()) {
        $indic = intval($row['valor']);

    }
    $indic++;
    echo("$indic ");
    $conn->query("UPDATE `config` SET `valor`=$indic WHERE  variavel='indice-user'");
    $indic--;

    echo($indic);
};

get_indice();
/*$sql= "INSERT INTO `receitas`(`id-receita`, `nome-paciente`, `password`) VALUES (11112224 , 'leles hdhas4' , 'hehehehr')";
if ($conn->query($sql) ===true){
    echo ('new record create successfully ');
}else{
    echo"error add db ";
}*/

?>
