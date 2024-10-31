<?php
/*
 * cyklus
 * 1. Vytvořte tabulku, která bude obsahovat tři sloupce a n řádků. Obsah tabulky bude tvořen obsahem pole $city. Obsah každé buňky bude ve tvaru Pořadové číslo. Stát - Hlavní město
 * Příklad výstupu:
 * | Stát - hlavní město | Stát - hlavní město 		| Stát - hlavní město  |
 * |1. Italy - Rome 	 |2. Luxembourg - Luxembourg    |3. Belgium - Brussels |
 *
 * 2. Tabulku setřiďte vzestupně dle názvu státu (A-Z)
 *
 */

$city = array(
	"Italy"=>"Rome",
	"Luxembourg"=>"Luxembourg",
	"Belgium"=> "Brussels",
	"Denmark"=>"Copenhagen",
	"Finland"=>"Helsinki",
	"France" => "Paris",
	"Slovakia"=>"Bratislava",
	"Slovenia"=>"Ljubljana",
	"Germany" => "Berlin",
	"Greece" => "Athens",
	"Ireland"=>"Dublin",
	"Netherlands"=>"Amsterdam",
	"Portugal"=>"Lisbon",
	"Spain"=>"Madrid",
	"Sweden"=>"Stockholm",
	"United Kingdom"=>"London",
	"Cyprus"=>"Nicosia",
	"Lithuania"=>"Vilnius",
	"Czech Republic"=>"Prague",
	"Estonia"=>"Tallin",
	"Hungary"=>"Budapest",
	"Latvia"=>"Riga",
	"Malta"=>"Valetta",
	"Austria" => "Vienna",
	"Poland"=>"Warsaw"
);

//reseni

ksort($city);

echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr>";

$index = 1;
$columns = 3;

foreach ($city as $country => $capital) {
    if (($index - 1) % $columns == 0 && $index > 1) {
        echo "</tr><tr>";
    }

    echo "<td>{$index}. {$country} - {$capital}</td>";
    $index++;
}

while (($index - 1) % $columns != 0) {
    echo "<td></td>";
    $index++;
}

echo "</tr>";
echo "</table>";
?>
