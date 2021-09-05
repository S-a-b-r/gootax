<?php

class DataBase
{

    function __construct()
    {
        $host = "localhost";
        $user = "root";
        $pass = "root";
        $name = "file_system";
        try {
            $this->db = new PDO('mysql:host=' . $host . ';dbname=' . $name, $user, $pass);
        } catch (PDOException $e) {
            print "Ошибка!: " . $e->getMessage();
            die();
        }

    }

    function __destruct()
    {
        $this->db = null;
    }

    public function addImage($imageType)
    {
        $stmt = $this->db->prepare("INSERT INTO `images` (`type_image`) VALUES ({$imageType});");
        $stmt->execute();
        return $this->db->lastInsertId();
    }

    public function addClick($idImg)
    {
        $countClick = $this->getCountClick($idImg) + 1;
        $stmt = $this->db->prepare("UPDATE `images` SET `count_click`= {$countClick} WHERE `id` = {$idImg};");
        $stmt->execute();
        return true;
    }

    public function getCountClick($idImg)
    {
        $stmt = $this->db->prepare("SELECT `count_click` FROM `images` WHERE `id` = {$idImg};");
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC)['count_click'];
    }

    public function getAllImage()
    {
        $stmt = $this->db->prepare("SELECT images.id,images.count_click,img_type.name_type FROM `images`, `img_type` WHERE images.type_image = img_type.id ORDER BY images.count_click DESC;");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}