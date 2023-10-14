<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/user_add/style.css">
    <link rel="stylesheet" href="/fontawesome-free-6.4.0-web/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container-fluid p-4">
        <div class="row">
            <div class="d-flex col-md-2">
                <img src="/images/logo.png" alt="">
            </div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-8">
                        <span class="h1">User</span>
                    </div>

                    <div class="col-md-4">
                        <button type="button" class="btn btn-success">Add User</button>
                        <button type="button" class="btn btn-danger">Delete</button>
                    </div>
                </div>
                <h3 class=" text-center text-uppercase">Edit User</h3>
                <form action="process_user_edit.php" method="post">
                    <div class="row input-group mb-3">
                        <div class="col-md-4 ">
                            UserID
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="uid" id="" class="form-control bg-warning" value="" readonly>
                        </div>
                    </div>
                    <div class="row input-group mb-3">
                        <div class="col-md-4 ">
                            Username
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="user" id="" class="form-control " value="" >
                        </div>
                    </div>
                    <div class="row input-group mb-3">
                        <div class="col-md-4 ">
                            Email
                        </div>
                        <div class="col-md-8">
                            <input type="email" name="mail" id="" class="form-control" value="">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-8">
                            <button type="submit" class="btn btn-success" name="sbmSave">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
