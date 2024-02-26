<?php
    $ar_buah = ["Pepaya", "Mangga","Pisang","Jambu" ];
    // cetak buah ke index ke 2
    echo $ar_buah[2];
    // cetak jumlah buah
    echo '<br/>Jumlah Buah ' . count($ar_buah);
    // cetak seluruh buah
    echo '<ol>';
    foreach($ar_buah as $buah){
        echo '<li>'. $buah .'</li>';
    }
    echo '</ol>';
    $ar_buah[]="Durian";
    unset($ar_buah[1]);
    $ar_buah[2]="Manggis";
    echo '<ul>';
    foreach($ar_buah as $k => $v){
        echo '<li> buah index - ' . $k .' adalah '. $v .'</li>';
}
    echo '</ul>';
?>