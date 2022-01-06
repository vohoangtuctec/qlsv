<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <?php
        include('ketnoi.php');

        $id = $_GET['idcapnhat'];
        $sql = "SELECT * FROM baiviet where id=$id";
        $ketqua = mysqli_query($ketnoi,$sql);
        $row = mysqli_fetch_array($ketqua);

    ?>
<div class="container">
        <h1>Cập nhật bài viết</h1>
        <form action="thuchiencapnhat.php" method="POST">
        <div class="row col-sm-4">
                <div class="col-sm-6">
                    <input style="border: none; background: white;" type="text" readonly class="form-control" value="Tiêu đề bài viết:"  >
                </div>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="id" hidden value="<?php echo $row[0]; ?>" placeholder="Tiêu đề bài viết...">
                    <input type="text" value="<?php echo $row[2]; ?>" class="form-control" name="tieude" placeholder="Tiêu đề bài viết..." required>
                </div>
            </div>
            <div class="row col-sm-4">
                <div class="col-sm-6">
                    <input style="border: none; background: white;" type="text" readonly class="form-control" value="Hình ảnh:">
                </div>
                <div class="col-sm-6">
                    <input  style="border: none; background: white;"  type="file" class="form-control" name="hinh" required>
                </div>
            </div>
            <div class="row col-sm-4">
                <div class="col-sm-6">
                    <input style="border: none; background: white;" type="text" readonly class="form-control" value="Logo:">
                </div>
                <div class="col-sm-6">
                    <input  style="border: none; background: white;"  type="file" class="form-control" name="logo" value="" required>
                </div>
            </div>
            <div class="row col-sm-4">
                <div class="col-sm-6">
                    <input style="border: none; background: white;" type="text" readonly class="form-control" value="Thời gian:"  >
                </div>
                <div class="col-sm-6">
                    <input type="number" class="form-control" value="<?php echo $row[4]; ?>" name="thoigian" value="" placeholder="Thời gian..." required>
                </div>
            </div>
            <div class="row col-sm-4">
                <div class="col-sm-6">
                    <input style="border: none; background: white;" type="text" readonly class="form-control" value="Liên quan:">
                </div>
                <div class="col-sm-6">
                    <input type="number" class="form-control" name="lienquan" value="<?php echo $row[5]; ?>" value="" placeholder="Liên quan..." required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </form>
    </div>    
</body>
</html>