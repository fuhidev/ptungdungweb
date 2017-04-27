<?php
require_once ('class.dataobject.php');
class Lession extends DataObject {
    function __construct(){
        parent::__construct();
    }
    public static function getAll(){
        $query = "select * from user";
        $stm = Database::getInstance()->prepare($query);
        $stm->execute();
        $project = array();
        while ($p = $stm->fetchObject(__CLASS__)) {
            $project[] = $p;
        }
        return $project;

    }
    public static function getById($id){
        $query = "select * from user where id=".$id;
        $stm = Database::getInstance()->prepare($query);
        $stm->execute();
        return $stm->fetchObject(__CLASS__);
    }
    public static function isExist($username,$password){
        $query = "select * from user where username=".$username."and password=".$password;
        $stm = Database::getInstance()->prepare($query);
        $stm->execute();
        return $stm->fetchObject(__CLASS__);
    }
}
?>