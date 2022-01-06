<?php
    $ketnoi = mysqli_connect("localhost","root","","baiviet");
    if(!$ketnoi){
        exit("kết nối không thành công");
    }
    $iddexoa = $_GET['idxoa'];
    $sql ="DELETE FROM baiviet where id=$iddexoa";
    $ketqua = mysqli_query($ketnoi,$sql);
    echo "<script>";
        if($ketqua){
            echo "alert(\"Đã xóa thành công\");";    
        }else{
            echo "alert(\"Đã xóa thành công\");";     
        }
        echo "window.location = \"index.php\"; ";
    echo "</script>";
?>