<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <title>Sửa thông tin</title>
</head>
<body>
    
<div class="container">
        <div class="row">
            <div class="main-content vh-100 p-3">
                <a href="http://localhost:3000/public/index.php">Trang chủ</a>
                <h3 class=" text-center text-uppercase">Sửa sách</h3>
                <form action="" method="post">
                    <div class="row input-group mb-3">
                        <div class="col-md-4 ">
                            Mã sách
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="uid" id="" class="form-control bg-warning" readonly>
                        </div>
                    </div>
                    <div class="row input-group mb-3">
                        <div class="col-md-4 ">
                            Tên sách
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="name" id="" class="form-control">
                        </div>
                    </div>
                    <div class="row input-group mb-3">
                        <div class="col-md-4 ">
                            Năm xuất bản
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="single" id="" class="form-control ">
                        </div>
                    </div>
                    <div class="row input-group mb-3">
                        <div class="col-md-4 ">
                            Mã tác giả
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="catagory" id="" class="form-control">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-8">
                            <button type="submit" class="btn btn-success" name="sbmSave">Lưu</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>