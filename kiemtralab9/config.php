<?php
class Database{
    public static function instance(){
        static $inst = null;
        if($inst === null){
            $inst = new Database();
        }
        return $inst;
    }
    private function __construct()
    {
        try{
            $this->db = new PDO('mysql:host=localhost;dbname=ptudwlab9','root','',array(
                PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8",
                PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
            ));
        }catch(PDOException $e){
            echo $e->getMessage();
            exit();
        }
    }
    function execute($query){
//        $stmt = $this->db->prepare($query);
        $this->db->exec($query);
//        $con = $stmt->execute();
        return $this->db->lastInsertId();
    }

}

?>