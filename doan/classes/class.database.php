<?php
class Database{
    private static $instance;

    public static function getInstance() {

        if (!isset(self::$instance)) {
            self::$instance = new Database();
        }

        return self::$instance;
    }
    private function __construct()
    {
        try{
            $this->db = new PDO('mysql:host=localhost;dbname=doan','root','',array(
                PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8",
                PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
            ));
        }catch(PDOException $e){
            return $e;
        }
    }
    function execute($query){
        $this->db->exec($query);
        return $this->db->lastInsertId();
    }
    function prepare($query){
        return $this->db->prepare($query);
    }
}
?>