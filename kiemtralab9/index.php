<?php
require ('config.php');
require ('MuonSach.php');
require ('ThongTin.php');
require ('ThongTinMuonSach.php');
if(isset($_GET["ten"])){
    $ten = $_GET["ten"];
}
if(isset($_GET["khoa"])){
    $khoa = $_GET["khoa"];
}
if(isset($_GET["doituong"])){
    $doituong = $_GET["doituong"];
    $doituong = intval($doituong);
}
if(isset($_GET["email"])){
    $email = $_GET["email"];
}
if(isset($_GET["dienthoai"])){
    $dienthoai = $_GET["dienthoai"];
}
if(isset($_GET["sothe"])){
    $sothe = $_GET["sothe"];
}
if(isset($_GET["thuphi"])){
    $thuphi = $_GET["thuphi"];
    $thuphi=boolval($thuphi);
}
if(isset($_GET["sotien"])){
    $sotien = $_GET["sotien"];
    $sotien=doubleval($sotien);
}
if(isset($_GET["ngaygiao"])){
    $ngaygiao = $_GET["ngaygiao"];
}

$ms = new MuonSach($ten,$khoa,$doituong,$sothe,$email,$dienthoai,true,$sotien,$ngaygiao);
$maMuonSach = $ms->insert();
try {
for ($i=1;$i<=3;$i++){
        $nhande = $_GET["nhande" . $i];
        $tacgia = $_GET["tacgia" . $i];
        $nam = $_GET["namxuatban" . $i];
        $ten = $_GET["tenthuvien" . $i];
        $tt = new ThongTin($maMuonSach, $nhande, $tacgia, $nam, $ten);
        if($tt->isValid()){
            $tt->insert();
        }


}
}catch(ErrorException $e){
    echo $e->getMessage();
}




echo "Thêm thành công";
sleep(3);
Header('Location:index.html');

?>