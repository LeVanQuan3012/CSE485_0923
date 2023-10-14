<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="/fontawesome-free-6.4.0-web/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container-fluid p-4">
        <div class="row">
            <div class="d-flex col-md-3">
                <img src="/btvn2/img/377100427_1034014221060628_6243508619911254747_n.png" alt="">
                <img src="/btvn2/img/377094968_599925059021344_8220919765849494712_n.png" alt="">
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-8">
                        <span class="h1">User</span>
                    </div>

                    <div class="col-md-4">
                        <button type="button" class="btn btn-success">Add User</button>
                        <button type="button" class="btn btn-danger">Delete</button>
                    </div>
                </div>
                <?php
                    if(isset($_GET['response'])){
                        echo "<p style='background-color: white'>{$_GET['response']}</p>";
                    };
                    
                ?>
                < <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>EMAIL</th>
                            <th>PHONE</th>
                            <th>CITY</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'sql.php';
                        ?>
                    </tbody>
                    </table>
                    <ul class="pagination justify-content-center">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>