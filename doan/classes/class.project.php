<?php
class Project extends DataObject {
    function __construct(){
        parent::__construct();
    }
    public static function getAll(){
        $query = "select * from project";
        $stm = Database::getInstance()->prepare($query);
        $stm->execute();
        $project = array();
        while ($p = $stm->fetchObject(__CLASS__)) {
            $project[] = $p;
        }
        return $project;

    }
}
?>