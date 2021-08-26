<?php

///////////////
//////1////////
///////////////

$strOut = "Hello World!";
echo $strOut;
echo " ";

$intOut = 5;
echo $intOut;
echo " ";

$floatOut = 4.5;
echo $floatOut;
echo " ";

const PI = 3.14;
echo PI;
echo " ";

$octalInt = 010;
echo $octalInt;
echo " ";

$hexadecimalInt = 0xAA;
echo $hexadecimalInt;
echo "</br>";


///////////////
//////2////////
///////////////

echo "Hello World! ";
echo "5 ";
echo "4.5 ";
echo "3.14 ";
echo "010 ";
echo "0xAA </br>";

echo 'Hello World! ';
echo '5 ';
echo '4.5 ';
echo '3.14 ';
echo '010 ';
echo '0xAA </br>';


///////////////
//////3////////
///////////////

echo 012 . " ";
echo 013 . " ";
echo 014 . " ";
echo 015 . " ";
echo 016 . " ";
echo 017 . " ";
echo 020 . " ";
echo 021 . " ";
echo 022 . " ";
echo 023 . " ";
echo 024 . " </br>";
//php переводит числа из восьмеричной системы в десятичную самостоятельно


///////////////
//////4////////
///////////////

echo 0x0 . " ";
echo 0x1 . " ";
echo 0x2 . " ";
echo 0x3 . " ";
echo 0x4 . " ";
echo 0x5 . " ";
echo 0x6 . " ";
echo 0x7 . " ";
echo 0x8 . " ";
echo 0x9 . " ";
echo 0xA . " ";
echo 0xB . " ";
echo 0xC . " ";
echo 0xD . " ";
echo 0xE . " ";
echo 0xF . " </br>";


///////////////
//////5////////
///////////////

$str1 = "Я помню чудное мгновенье:";
$str2 = "Передо мной явилась ты,";
$str3 = "Как мимолетное виденье,";
$str4 = "Как гений чистой красоты.";
$str5 = "А.С.Пушкин";

echo $str1 . "</br>";
echo $str2 . "</br>";
echo $str3 . "</br>";
echo $str4 . "</br>";
echo "<i>{$str5}</i></br>";


///////////////
//////6////////
///////////////

echo "{$str1}</br>{$str2}</br>{$str4}</br>{$str4}</br><i>{$str5}</i></br>";


///////////////
//////7////////
///////////////

/**
 * Сложить 10 и "Привет" не получится, потому что операция сложения работает только с числами => php пытается
 * преобразовать строку в число, и возникает ошибка.
 * Зато, при конкатинации ошибки не возникнет и код 10 . "Привет" сработает
 */


///////////////
//////8////////
///////////////

/**
 *Оператор xor - логический оператор, возвращающий true тогда, когда верно условие OR и неверно условие AND.
 * Т.е. возвращает true только когда одно из условий верно
 * $a xor $a всегда ложно
 */

function checkXor($a, $b): string
{
    if ($a xor $b) {
        return "true";
    }
    return "false";
}

echo("true xor true:" . checkXor(true, true) . "</br>");
echo("true xor false:" . checkXor(true, false) . "</br>");
echo("false xor true:" . checkXor(false, true) . "</br>");
echo("false xor false:" . checkXor(false, false) . "</br>");