<?php
include('ketnoi.php');


$id = $_POST['id'];
$tieude = $_POST['tieude'];
$hinh = $_POST['hinh'];
$logo = $_POST['logo'];
$thoigian = $_POST['thoigian'];
$lienquan = $_POST['lienquan'];

$sql = "UPDATE `baiviet`";
$sql.=" SET `hinh`='$hinh',`tieude`='$tieude',`logo`='$logo',`thoigian`='$thoigian',`lienquan`='$lienquan'";
$sql.=" where id=$id";
echo $sql;
$ketqua = mysqli_query($ketnoi,$sql);
echo "<script>";
    if($ketqua){
        echo "alert(\"Cập nhật thành công\");";    
    }else{
        echo "alert(\"Cập nhật không thành công\");";     
    }
    echo "window.location = \"index.php\"; ";
echo "</script>";

?>