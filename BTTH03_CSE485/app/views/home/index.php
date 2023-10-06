<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <title>Quản lý sách</title>
</head>

<body>
    <div class="container">
    <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" href="">Trang chủ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= DOMAIN . 'app/views/book/add.php?action=add'?>">Thêm mới</a>
            </li>
        </ul>
        <h2 class=" text-center text-success">QUẢN LÝ SÁCH</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Mã sách</th>
                    <th scope="col">Tên sách</th>
                    <th scope="col">Năm xuất bản</th>
                    <th scope="col">Mã tác giả</th>
                    <th scope="col">Sửa</th>
                    <th scope="col">Xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($books as $book) {
                    ?>
                    <tr>
                        <th scope="row"><?= $book->getId() ?></th>
                        <td><?= $book->getNameBook()?></td>
                        <td><?= $book->getYearPublish() ?></td>
                        <td><?= $book->getIdAuthor()?></td>
                        <td>
                            <a href="<?= DOMAIN . 'app/views/book/edit.php?id=' . $book->getId(); ?>"><i
                                    class="bi bi-pencil-square"></i></a>
                        </td>
                        <td>
                            <a href="#" data-bs-toggle="modal"
                                data-bs-target="#deleteModal<?php echo $book->getId(); ?>"><i class="bi bi-trash3"></i></a>
                            <!-- Modal -->
                            <div class="modal fade" id="deleteModal<?php echo $book->getId();; ?>" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title fs-5" id="exampleModalLabel">Xoá thông tin sách</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Bạn chắc chắn muốn xóa sách có mã số:
                                                <?php echo $book->getId(); ?> ?
                                            </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Đóng</button>
                                            <a href="<?= DOMAIN . 'app/views/book/delete.php?id=' . $book->getId(); ?>"
                                                class="btn btn-primary">Đồng ý</a> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php
                }
                ?>


            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>