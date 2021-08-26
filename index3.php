<?php

///////////////
//////1////////
///////////////

$i = 0;
while ($i < 101) {
    if ($i % 3 === 0) {
        echo $i . " ";
    }
    $i++;
}
echo "</br>";


///////////////
//////2////////
///////////////

$i = 0;
do {
    if ($i === 0) {
        echo "0 - Это ноль </br>";
    } elseif ($i % 2 == 0) {
        echo $i . " - Это четное число </br>";
    } else {
        echo $i . " - Это нечетное число </br>";
    }
    $i++;
} while ($i <= 10);


///////////////
//////3////////
///////////////

for ($i = 0; $i < 10; $i++, print $i . " ") {
};
echo "</br>";


///////////////
//////4////////
///////////////

$regions = array(
    'Московская область' => ['Москва', 'Зеленоград', 'Клин'],
    'Удмуртская республика' => ['Ижевск', 'Вотскинск', 'Глазов'],
    'Кировская область' => ['Киров'],
    'Ленинградская область' => ['Санкт-Петербург', 'Всеволжск', 'Павловск']
);
foreach ($regions as $region => $cities) {
    echo $region . ":</br>";

    echo $cities[0];
    for ($i = 1; $i < count($cities); $i++) {
        echo ", " . $cities[$i];
    }
    echo "</br>";
}


///////////////
//////5////////
///////////////

foreach ($regions as $region => $cities) {
    echo $region . ":</br>";


    for ($i = 0; $i < count($cities); $i++) {
        if (mb_substr($cities[$i], 0, 1) === "К") {
            echo $cities[$i] . " ";
        }
    }
    echo "</br>";
}


///////////////
//////6////////
///////////////

function convertTransliteration($str)
{
    $dictionary = array(
        'а' => 'a',
        'б' => 'b',
        'в' => 'v',
        'г' => 'g',
        'д' => 'd',
        'е' => 'e',
        'ё' => 'ye',
        'ж' => 'zh',
        'з' => 'z',
        'и' => 'i',
        'й' => 'y',
        'к' => 'k',
        'л' => 'l',
        'м' => 'm',
        'н' => 'n',
        'о' => 'o',
        'п' => 'p',
        'р' => 'r',
        'с' => 's',
        'т' => 't',
        'у' => 'u',
        'ф' => 'f',
        'х' => 'kh',
        'ц' => 'ts',
        'ч' => 'ch',
        'ш' => 'sh',
        'щ' => "sh'",
        'ъ' => '',
        'ы' => 'yi',
        'ь' => "'",
        'э' => 'ye',
        'ю' => 'yu',
        'я' => 'ya'
    );

    $strOut = "";
    $str = mb_strtolower($str);
    for ($i = 0; $i < mb_strlen($str); $i++) {
        $char = mb_substr($str,$i,1);
        if($dictionary[$char]){
            $strOut .= $dictionary[$char];
        }
        else{
            $strOut .= $char;
        }
    }
    return $strOut;
}


///////////////
//////7////////
///////////////

function convertToSnakeCase($str)
{
    $strOut = "";
    for ($i = 0; $i < mb_strlen($str); $i++) {
        $char = mb_substr($str, $i, 1);
        if($char === ' '){
            $strOut .= "_";
        }
        else{
            $strOut .= $char;
        }
    }
    return $strOut;
}


///////////////
//////8////////
///////////////

function convertFull($str){
    $str = convertTransliteration($str);
    $str = convertToSnakeCase(($str));
    return $str;
}

echo convertFull("Привет мир");
