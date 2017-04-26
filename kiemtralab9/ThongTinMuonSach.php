<?php

/**
 * Created by PhpStorm.
 * User: fuhi
 * Date: 08/04/2017
 * Time: 14:31
 */
class ThongTinMuonSach
{
    function __construct($maMuonSach,$maThongTin)
    {
        $this->maMuonSach = $maMuonSach;
        $this->maThongTin = $maThongTin;
    }
    function insert(){

        $query = "INSERT INTO thongtinmuonsach values(".$this->maMuonSach.",".$this->maThongTin.")";
        echo $query;
        $db = Database::instance();
        $db->execute($query);

    }

}