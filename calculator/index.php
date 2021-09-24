<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Калькулятор</title>
</head>
<body>
<form name="calc" method="post">
    <input placeholder="Первое число" name="num1">
    <select name="operator">
        <option value="add">+</option>
        <option value="dif">-</option>
        <option value="mul">*</option>
        <option value="div">/</option>
    </select>
    <input placeholder="Второе число" name="num2">
    <input type="submit" value="=">
</form>
</body>
</html>

<?php
$num1 = (int)$_POST['num1'];
$num2 = (int)$_POST['num2'];

switch ($_POST['operator']) {
    case 'add':{
        echo $num2 + $num1;
        break;
    }
    case 'dif':{
        echo $num1 - $num2;
        break;
    }
    case 'mul':{
        echo $num1 * $num2;
        break;
    }
    case 'div':{
        if($num2 === 0) {
            echo "На ноль делить нельзя";
        } else {
            echo $num1 / $num2;
        }
        break;
    }
}