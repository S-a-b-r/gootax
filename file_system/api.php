<?php

require_once('DataBase.php');
$db = new DataBase();
$id = explode(".", $_GET['name'])[0];
$db->addClick($id);
echo(json_encode($db->getCountClick($id)));

