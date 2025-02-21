<!-- Dato l'array di numeri:  
```php
$numeri = [1, 2, 3, 4, 5];
```
Usa `array_map` per ottenere un nuovo array
con il **doppio** di ogni numero e stampalo. -->
<?php
$numeri = [1, 2, 3, 4, 5];

function raddoppia($numero) {
    return $numero * 2;
}

$numeri_doppi = array_map("raddoppia", $numeri);

print_r($numeri_doppi);
?>
