<?php
require 'functions.php';

if (isset($_POST["register"])) {
    if (registrasi($_POST) > 0) {
        echo "<script>
            alert('User Baru Berhasil Ditambahkan');
            document.location.href = 'index.php';
            </script>";
    } else {
        echo mysqli_error($conn);
    }
}

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>NaikKereta | Regist</title>

    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="img/Logo1.jpg" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css"
        integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous" />
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet" />
    <!-- login style -->
    <link rel="stylesheet" type="text/css" href="css/login.css" />
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card-login">
                    <div class="container-fluid">
                        <div class="row mt-4 mb-3">
                            <div class="col-12">
                                <a class="text-left position-absolute text-dark" href="index.php">
                                    <i class="fa fa-arrow-left"></i>
                                </a>
                                <h3 class="login-title text-center">Account Register</h3>
                            </div>
                        </div>
                        <form action="" method="POST">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <input type="text" class="form-control inp-regist" id="namadepan"
                                        placeholder="Nama Depan" name="namadepan" />
                                    <small class="text-danger" id="namadepanTextValidate"></small>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <input type="text" class="form-control inp-regist" id="namabelakang"
                                        placeholder="Nama Belakang" name="namabelakang" />
                                    <small class="text-danger" id="namabelakangTextValidate"></small>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <input type="text" class="form-control inp-regist" id="username"
                                        placeholder="Username" name="username" />
                                    <small class="text-danger" id="usernameUsernameValidate">
                                    </small>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <input type="email" class="form-control inp-regist" id="email" placeholder="Email"
                                        name="email" />
                                    <small class="text-danger" id="emailEmailValidate"> </small>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <input type="password" name="password" class="form-control inp-regist" id="password"
                                        placeholder="Password" />
                                    <small class="text-danger" id="passwordPasswordValidate"></small>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <button class="btn btn-primary w-100" id="sign-up" type="submit" name="register">
                                        Register
                                    </button>
                                </div>
                            </div>
                            <div class="row justify-content-center mb-5">
                                <div class="col-md-12 text-center">
                                    <a href="index.php">Allready have account? Login</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<!-- Option 1: Bootstrap Bundle with Popper.js -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js"
    integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous">
</script>
<script type="module" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.esm.js"></script>
<script src="https://kit.fontawesome.com/d1a508a7c1.js" crossorigin="anonymous"></script>
<script src="js/function.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="js/function.js"></script>
<script src="js/regist.js"></script>

</html>