<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">
<a href="them.php" class="btn btn-primary">Thêm bài viết</a>
<h1>THÊM BÀI VIẾT</h1>
<?php
        include('ketnoi.php');
        $sql ="SELECT * FROM baiviet";
        echo "<table class=\"table\" style=\"border-top: none\">";
            echo "<thead>";
                echo "<tr>";
                echo "<th scope=\"col\">#</th>";
                echo "<th scope=\"col\">Hìn ảnh</th>";
                echo "<th scope=\"col\">Tiêu đề</th>";
                echo "<th scope=\"col\">Logo</th>";
                echo "<th scope=\"col\">Thời gian</th>";
                echo "<th scope=\"col\">Liên quan</th>";
                echo "<th scope=\"col\">Action</th>";
                echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
        $ketqua = mysqli_query($ketnoi,$sql);
        while($row=mysqli_fetch_array($ketqua)){
            echo "<tr>";
                echo "<th scope=\"row\">".$row[0]."</th>";
                echo "<td> <img style=\"width: 100px; height: 100px\" src=\"hinh/$row[1]\"> </td>";
                echo "<td>".$row[2]."</td>";
                echo "<td> <img style=\"width: 100px; height: 100px\" src=\"hinh/$row[3]\"> </td>";
                echo "<td>".$row[4]."</td>";
                echo "<td>".$row[5]."</td>";
                echo "<td><a href=\"xoa.php?idxoa=".$row[0]."\" class=\"btn btn-danger\">Xóa</a> <br/> <a href=\"capnhat.php?idcapnhat=".$row[0]."\" class=\"btn btn-info\">Cập nhật</a></td>";
            echo "</tr>";
        }
            echo "</tbody>";
        echo "</table>";
    ?>
</div>
</body>
</html>