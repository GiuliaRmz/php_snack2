<?php
$numeri = [1, 5, 8, 12, 15, 20];

function maggiore_di_10($numero) {
    return $numero > 10;
}

$numeri_filtrati = array_filter($numeri, "maggiore_di_10");

print_r(array_values($numeri_filtrati));
?>
