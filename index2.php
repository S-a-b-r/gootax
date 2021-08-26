<?php

/////////////
//////1//////
/////////////

const START_A = 4;
const START_B = 0;

$a = START_A;
$b = START_B;
if ($a >= 0 && $b >= 0) {
    echo $a + $b;
} elseif ($a < 0 && $b < 0) {
    echo $a - $b;
} else {
    echo $a * $b;
}
echo "</br>";

/////////////
//////2//////
/////////////

echo ($a > $b) ? $a : $b;
echo "</br>";

/////////////
//////3//////
/////////////

$a = 5;
switch ($a) {
    case 0:
    {
        echo "0 ";
        $a++;
    }
    case 1:
    {
        echo "1 ";
        $a++;
    }
    case 2:
    {
        echo "2 ";
        $a++;
    }
    case 3:
    {
        echo "3 ";
        $a++;
    }
    case 4:
    {
        echo "4 ";
        $a++;
    }
    case 5:
    {
        echo "5 ";
        $a++;
    }
    case 6:
    {
        echo "6 ";
        $a++;
    }
    case 7:
    {
        echo "7 ";
        $a++;
    }
    case 8:
    {
        echo "8 ";
        $a++;
    }
    case 9:
        {
            echo "9 ";
            $a++;
        }
        break;
}
echo "</br>";

/////////////
//////4//////
/////////////

function sum($arg1, $arg2)
{
    return $arg1 + $arg2;
}

function sub($arg1, $arg2)
{
    return $arg1 - $arg2;
}

function mul($arg1, $arg2)
{
    return $arg1 * $arg2;
}

function div($arg1, $arg2)
{
    return $arg1 / $arg2;
}


/////////////
//////5//////
/////////////

function mathOperation($arg1, $arg2, $operation)
{
    switch ($operation) {
        case 'sum':
        {
            return sum($arg1, $arg2);
        }
        case 'sub':
        {
            return sub($arg1, $arg2);
        }
        case 'mul':
        {
            return mul($arg1, $arg2);
        }
        case 'div':
        {
            return div($arg1, $arg2);
        }
    }
}


/////////////
//////6//////
/////////////

function power($val, $pow)
{
    if ($pow > 0) {
        return power($val, $pow - 1) * $val;
    }
    return 1;
}

/////////////
//////7//////
/////////////

function more($arg1, $arg2)
{
    return $arg1 < $arg2 ? $arg2 : $arg1;
}

function less($arg1, $arg2)
{
    return $arg1 > $arg2 ? $arg2 : $arg1;
}

function check($a, $b)
{
    if ($a * $b > 100 && $a * $b < 1000) {
        echo more($a, $b) - less($a, $b);
    }
    elseif ($a * $b > 1000) {
        echo $a * $b / more($a, $b); // == echo less($a, $b);
    }
    return;
}