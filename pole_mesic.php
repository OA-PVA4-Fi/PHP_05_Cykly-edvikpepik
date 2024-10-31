<?php
/**
* Asociativní pole
* Deklarujte pole months, které bude mít v hodnotách uložen český název měsíce. Index bude odpovídat pořadovému číslu měsíce.
* a) Za pomocí cyklu zobrazte všechny měsíce.
* b) Za pomocí cyklu zobrazte všechny měsíce z období 6-12.
*/

//reseni
$months = [
    1 => "Leden",
    2 => "Únor",
    3 => "Březen",
    4 => "Duben",
    5 => "Květen",
    6 => "Červen", 
    7 => "Červenec", 
    8 => "Srpen", 
    9 => "Září",
    10 => "Říjen", 
    11 => "Listopad", 
    12 => "Prosinec"
];

foreach ($months as $index => $month) {
    echo "$index: $month<br>";
}

for ($i = 6; $i <= 12; $i++) {
    echo "$i: " . $months[$i] . "<br>";
}


?>

