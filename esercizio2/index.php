<?php
$min = isset($_GET['min']) ? (int)$_GET['min'] : 1;

if ($min > 20) {
    echo "Numero deve essere <= 20";
} else {
  
    for ($i = $min; $i <= 20; $i++) {
        echo $i;
        if ($i < 20) {
            echo ", ";
        }
    }
}
?>

