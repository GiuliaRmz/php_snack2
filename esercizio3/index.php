<?php
$numeri = range(1, 30);
foreach ($numeri as $numero) {
    echo $numero . "<br>";
}

echo "<br>"; 

$persona = [
    "nome" => "Gino",
    "cognome" => "Panino",
    "eta" => 25
];

foreach ($persona as $chiave => $valore) {
    echo "$chiave: $valore <br>";
}
?>