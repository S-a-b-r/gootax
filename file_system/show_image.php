<?php

require_once('DataBase.php');
$db = new DataBase();

$list = $db->getAllImage();

for($i = 0; $i < count($list); $i++) {
    $fileName = $list[$i]['id'] . "." . $list[$i]['name_type'];
    echo "<img src='icon_img/{$fileName}' id='{$fileName}'>";
}

echo '<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>';
echo
"<script>
    let images = document.getElementsByTagName('img');
    for(let i = 0; i < images.length; i++){
        images[i].addEventListener('click', ()=> {
            let countClicks = 0;
            axios.get('http://gootax/file_system/api.php?method=add_click&name=' + images[i].id).then(resp => {
                countClicks = resp.data;
            });
            let src = 'full_img/' + images[i].id;
            let newWindow = window.open('clear.html','Image');
            newWindow.onload = function (){
                let div = newWindow.document.getElementById('pic_cntr');
                div.innerHTML = `<img src =` + src + `>`;
                let span = newWindow.document.getElementById('txt');
                span.innerHTML = 'Просмотров:' + countClicks;
            }
            
        });
    }
</script>";

echo "</br>";
echo "<a href='index.html'>Вернуться на главную </a>";