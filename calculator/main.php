<?php
$num1 = (int)$_POST['num1'];
$num2 = (int)$_POST['num2'];
$operator = $_POST['operator'];
$select='';
switch ($operator) {
    case 'add':{
        $select='
        <option value="add" selected>+</option>
        <option value="dif">-</option>
        <option value="mul">*</option>
        <option value="div">/</option>
        ';
        $answer = $num2 + $num1;
        break;
    }
    case 'dif':{
        $select='
        <option value="add" >+</option>
        <option value="dif" selected>-</option>
        <option value="mul">*</option>
        <option value="div">/</option>
        ';
        $answer = $num1 - $num2;
        break;
    }
    case 'mul':{
        $select='
        <option value="add" >+</option>
        <option value="dif">-</option>
        <option value="mul" selected>*</option>
        <option value="div">/</option>
        ';
        $answer = $num1 * $num2;
        break;
    }
    case 'div':{
        $select='
        <option value="add" >+</option>
        <option value="dif">-</option>
        <option value="mul">*</option>
        <option value="div" selected>/</option>
        ';
        if($num2 === 0) {
            $answer = "На ноль делить нельзя";
        } else {
            $answer = $num1 / $num2;
        }
        break;
    }
}
echo '<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Калькулятор</title>
</head>
<body>
    <form name="calc" method="post" action="main.php">
        <input placeholder="Первое число" value='.$num1.' name="num1">
        <select name="operator">
            '.$select.'
        </select>
        <input placeholder="Второе число" value='.$num2.' name="num2">
        <input type="submit" value="=">
    </form>
    Ответ:'.$answer.'
</body>
</html>';