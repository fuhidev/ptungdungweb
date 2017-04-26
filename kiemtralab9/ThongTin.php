<?php

/**
 * Created by PhpStorm.
 * User: fuhi
 * Date: 08/04/2017
 * Time: 14:27
 */
class ThongTin
{
    function __construct($maMuoNSach,$nhande,$tacgia,$namxuatban,$tenthuvien)
    {
        $this->mamuonsach = $maMuoNSach;
        $this->nhande=$nhande;
        $this->tacgia=$tacgia;
        $this->namxuatban=$namxuatban;
        $this->tenthuvien=$tenthuvien;
    }
    function isValid(){
        if(is_null($this->mamuonsach) or $this->mamuonsach==="")
            return false;
        if(is_null($this->nhande)or $this->nhande==="")
            return false;
        if(is_null($this->tacgia)or $this->tacgia==="")
            return false;
        if(is_null($this->namxuatban)or $this->namxuatban==="")
            return false;
        if(is_null($this->tenthuvien)or $this->tenthuvien==="")
            return false;
        return true;
    }
    function insert(){
        $query =
            "INSERT INTO thongtin (maMuonSach,nhanDe,tacGia,namXuatBan,tenThuVien)
                      values(".$this->mamuonsach.",'".$this->nhande."','".$this->tacgia."',".$this->namxuatban.",'".$this->tenthuvien."')";
        $db = Database::instance();
        return $db->execute($query);
    }

}