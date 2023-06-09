<?php
session_start();
require 'functions.php';

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
    $resulta = mysqli_query($conn, "SELECT * FROM adminn WHERE username = '$username'");
    $results = mysqli_query($conn, "SELECT * FROM staff WHERE username = '$username'");

    //cek username
    if (mysqli_num_rows($result) === 1) {
        $_SESSION["username"] = $username;

        //cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {

            //set session

            $_SESSION["login"] = true;

            header("Location: main2.php");
            exit;
        }
    }

    $error = true;

    //cek username adminn
    if (mysqli_num_rows($resulta) === 1) {
        $_SESSION["username"] = $username;

        //cek password adminn
        $row = mysqli_fetch_assoc($resulta);
        if (password_verify($password, $row["password"])) {
            //set session

            $_SESSION["login"] = true;

            header("Location: manager2.php");
            exit;
        }
    }

    $error = true;

    //cek username staff
    if (mysqli_num_rows($results) === 1) {
        $_SESSION["username"] = $username;

        //cek password staff
        $row = mysqli_fetch_assoc($results);
        if (password_verify($password, $row["password"])) {

            //set session

            $_SESSION["login"] = true;

            header("Location: staff.php");
            exit;
        }
    }

    $error = true;
}

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>NaikKereta | Login</title>

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
            <div class="col-md-5">
                <div class="card-login">

                    <div class="container-fluid">

                        <div class="row mt-4">
                            <div class="col-12 text-center">
                                <h3 class="login-title">Account Login</h3>
                                <?php if (isset($error)) : ?>
                                <p style="color: red; font-style:italic;">Username atau Password Salah!</p>
                                <?php endif; ?>
                            </div>
                        </div>


                        <form action="" method="POST">
                            <div class="row justify-content-center mt-3">
                                <div class="col-md-10">
                                    <input for="username" type="text" name="username" id="username"
                                        class="form-control inp-login" placeholder="Username" autofocus
                                        autocomplete="off" />
                                </div>
                            </div>
                            <div class="row justify-content-center mb-3">
                                <div class="col-md-10">
                                    <input for="password" type="password" name="password" id="password"
                                        class="form-control inp-login" placeholder="Password" autofocus
                                        autocomplete="off" />
                                </div>
                            </div>
                            <div class="row justify-content-center mb-3">
                                <div class="col-md-10">
                                    <button class="btn btn-primary inp-login w-100" id="login" type="submit"
                                        name="login">
                                        Sign In
                                    </button>
                                </div>
                            </div>
                            <div class="row justify-content-center mb-5">
                                <div class="col-md-12 text-center">
                                    <a href="regist.php">dont have account? regist now</a>
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
<!--
<script>
get("#sign-in").addEventListener("click", function(e) {
    if (justRequired("username") && justRequired("password")) {
        if (
            get("#username").value == "admin" &&
            get("#password").value == "admin"
        ) {
            document.location.href = "manager2.php";
        } else if (
            get("#username").value == "staff" &&
            get("#password").value == "staff"
        ) {
            document.location.href = "staff.html";
        } else {
            document.location.href = "main.html";
        }
    } else {
        e.preventDefault();
        justRequired("username");
        justRequired("password");
    }
});

get("#username").addEventListener("keyup", function() {
    justRequired("username");
});

get("#password").addEventListener("keyup", function() {
    justRequired("password");
});

function justRequired(selector) {
    if (get("#" + selector).value == "") {
        get("#" + selector).style.border = "1px solid #dc3545";
        return false;
    } else {
        get("#" + selector).style.border = "1px solid #28a745";
        return true;
    }
}
</script>
-->

</html>