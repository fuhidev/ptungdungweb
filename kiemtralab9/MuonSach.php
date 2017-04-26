<?php

/**
 * Created by PhpStorm.
 * User: fuhi
 * Date: 08/04/2017
 * Time: 14:03
 */
class MuonSach
{
    function __construct($hoten,$khoa,$doituong,$sothe,$email,$dienthoai,$dathuphi,$sotien,$ngayhen)
    {
        $this->hoten=$hoten;
        $this->khoa=$khoa;
        $this->doituong=$doituong;
        $this->sothe = $sothe;
        $this->email = $email;
        $this->dienthoai= $dienthoai;
        $this->dathuphi=$dathuphi;
        $this->sotien = $sotien;
        $this->ngayhen = $ngayhen;
    }
    function insert(){
        $query =
            "INSERT INTO muonsach (hoten,khoa,doituong,sothe,email,dienthoai,dathuphi,sotien,ngayhen)
                      values('".$this->hoten."','".$this->khoa."',".$this->doituong.",'".$this->sothe."','".$this->email."','".$this->dienthoai."',".$this->dathuphi.",".$this->sotien.",'".$this->ngayhen."')";
        $db = Database::instance();
        return $db->execute($query);
    }

}