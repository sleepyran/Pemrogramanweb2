<?php

$animals = ["kucing", "ayam", "banteng", "ikan"];
echo "ini hewan index ke 1 : " .$animals[1];
echo "<br>";
echo "ini hewan dengan index ke 3 : " .$animals[1];

// mencetak seluruh data array
foreach ($animals as $animal) {
    echo '<li>'.$animal.'</li>';
}