<?php
$arr = array(
    "Citizen of Glass" => 4.50,
    "Night" => 9,
    "New Eyes" => 5,
    "Strange Trails" => 10,
);
$waarde = 0;
$gemiddelde = 0;
echo "Albumoverzicht:".PHP_EOL;
foreach ($arr as $song => $value) {
    echo "$song is $value euro" . PHP_EOL;
    $waarde = $waarde + $value;
}
$gemiddelde = $waarde / count($arr);
echo "De totale waarde van het album is $waarde" . PHP_EOL;
echo "De gemiddelde waarde van het album is $gemiddelde" . PHP_EOL;
