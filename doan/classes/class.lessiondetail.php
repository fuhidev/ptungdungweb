<?php
require_once ('class.dataobject.php');
class LessionDetail extends DataObject {
    function __construct(){
        parent::__construct();
    }
    public static function getAll(){
        $query = "select * from lessiondetail";
        $stm = Database::getInsftance()->prepare($query);
        $stm->execute();
        $project = array();
        while ($p = $stm->fetchObject(__CLASS__)) {
            $project[] = $p;
        }
        return $project;

    }
    public static function getById($id){
        $query = "select * from lessiondetail where id=".$id;
        $stm = Database::getInstance()->prepare($query);
        $stm->execute();
        return $stm->fetchObject(__CLASS__);
    }
    public static function getByLessionId($id){
        $query = "select * from lessiondetail where lessionId=".$id;
        $stm = Database::getInstance()->prepare($query);
        $stm->execute();
        $result = array();
        while ($p = $stm->fetchObject(__CLASS__)) {
            $result[] = $p;
        }
        return $result;
    }
}
?>