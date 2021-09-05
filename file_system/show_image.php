<?php

require_once('DataBase.php');
$db = new DataBase();

//$list1 = $db->getAllImage();
//foreach ($list1 as $item) {
//    $fileName = $item['id'] . $item ['name_type'];
//    echo "<img src='icon_img/{$fileName}' id='{$fileName}'";
//}

$dir = $_SERVER['DOCUMENT_ROOT'] . "/file_system/icon_img";
$list = scandir($dir);
foreach ($list as $item) {
    if ($item != ".." && $item != ".") {
        echo "<img src='icon_img/{$item}' id='{$item}'>";
    }
}
echo
"<script>
    let images = document.getElementsByTagName('img');
    for(let i = 0; i < images.length; i++){
        images[i].addEventListener('click', ()=> {
            console.log(images[i].id);
            let src = 'full_img/' + images[i].id;
            let image = new Image();
            image.src = src;
            let width = image.width;
            let height = image.height;
            window.open(src, 'Image', 'width=' + width + ',height=' + height);
        });
    }
</script>";

echo "</br>";
echo "<a href='index.html'>Вернуться на главную </a>";