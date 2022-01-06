<?php
include('ketnoi.php');

$id = $_POST['id'];
$tieude = $_POST['tieude'];
$hinh = $_POST['hinh'];
$logo = $_POST['logo'];
$thoigian = $_POST['thoigian'];
$lienquan = $_POST['lienquan'];
//INSERT INTO `baiviet`(`id`, `hinh`, `tieude`, `logo`, `thoigian`, `lienquan`) 
//VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]')
$sql = "INSERT INTO `baiviet`(`id`, `hinh`, `tieude`, `logo`, `thoigian`, `lienquan`) VALUES (NULL,'$hinh','$tieude','$logo','$thoigian','$lienquan')";
//echo sql;
$ketqua = mysqli_query($ketnoi,$sql);
echo "<script>";
    if($ketqua){
        echo "alert(\"Thêm thành công\");";    
    }else{
        echo "alert(\"Thêm không thành công\");";     
    }
    echo "window.location = \"index.php\"; ";
echo "</script>";
?>