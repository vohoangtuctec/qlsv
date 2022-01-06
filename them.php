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
        <h1>Thêm bài viết</h1>
        <form  action="thuchienthem.php" method="POST">
            <div class="row col-sm-4">
                <div class="col-sm-6">
                    <input style="border: none; background: white;" type="text" readonly class="form-control" value="Tiêu đề bài viết:"  >
                </div>
                <div class="col-sm-6">
                    <input type="text" class="form-control" hidden name="id" placeholder="Tiêu đề bài viết...">
                    <input type="text" class="form-control" name="tieude" placeholder="Tiêu đề bài viết..." required>
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
                    <input type="number" class="form-control" name="thoigian" value="" placeholder="Thời gian..." required>
                </div>
            </div>
            <div class="row col-sm-4">
                <div class="col-sm-6">
                    <input style="border: none; background: white;" type="text" readonly class="form-control" value="Liên quan:">
                </div>
                <div class="col-sm-6">
                    <input type="number" class="form-control" name="lienquan" value="" placeholder="Liên quan..." required>
                </div>
            </div>
            <button style="background-color: #efefef; color: black; border: 1px solid black" type="submit" class="btn btn-primary">Thêm</button>
        </form>
    </div>    
</body>
</html>