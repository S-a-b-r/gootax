<?php

require_once('DataBase.php');
$db = new DataBase();

$fullImgDir = 'full_img/';
$iconImgDir = 'icon_img/';

$imgName = "1.jpg";
switch ($_FILES['userfile']['type']) {
    case 'image/jpeg':
    {
        //$db->addImage("jpeg");
        $imgName = generateImgName("jpeg");
        break;
    }
    case 'image/png':
    {
        $imgName = generateImgName("png");
        break;
    }
}

$uploadImgCut = $fullImgDir . $imgName;
$iconImgCut = $iconImgDir . $imgName;

if (($_FILES['userfile']['type'] == 'image/jpeg' || $_FILES['userfile']['type'] == 'image/png') && $_FILES['userfile']['size'] != 0) {
    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadImgCut)) {
        $size = getimagesize($uploadImgCut);
        if ($size[0] < 4000 && $size[1] < 4000) {
            $compression = ($size[0] > $size[1]) ? $size[0] / 200 : $size[1] / 200;
            $iconWidth = $size[0] / $compression;
            $iconHeight = $size[1] / $compression;
            $image_p = imagecreatetruecolor($iconWidth, $iconHeight);

            if ($_FILES['userfile']['type'] == 'image/jpeg') {
                $img = imagecreatefromjpeg($uploadImgCut);
                imagecopyresampled($image_p, $img, 0, 0, 0, 0, $iconWidth, $iconHeight, $size[0], $size[1]);
                imagejpeg($image_p, $iconImgCut);
            } elseif ($_FILES['userfile']['type'] == 'image/png') {
                $img = imagecreatefrompng($uploadImgCut);
                imagecopyresampled($image_p, $img, 0, 0, 0, 0, $iconWidth, $iconHeight, $size[0], $size[1]);
                imagepng($image_p, $iconImgCut);
            }
            echo "Файл загружен </br>";
            echo "<a href='index.html'>Вернуться на главную </a>";
        } else {
            echo "Загружаемое изображение превышает допустимые нормы (ширина не более - 500; высота не более 1500)";
            unlink($uploadImgCut);
        }
    } else {
        echo "Файл не загружен, вернитеcь и попробуйте еще раз";
    }
} else {
    echo "Неверный формат фаила. Загрузите изображение формата jpeg или png";
}


function generateImgName($typeImg): string
{
    return date('Y') . "-" . date('m') . "-" . date('d') . "-" . date("H") . "-" . date('i') . "-" . date('s') . '.' . $typeImg;
}