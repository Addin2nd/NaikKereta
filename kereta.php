<?php
session_start();
require 'functions.php';
$kereta = query("SELECT * FROM kereta");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="img/Logo1.jpg" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css"
        integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous" />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet" />

    <title>NaikKereta | Order</title>
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <div class="blank"></div>
    <!-- * navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow sticky-top">
        <div class="container">
            <a class="navbar-brand" href="main2.php">
                <img src="img/Logo1.1.png" width="100" height="80" class="position-absolute"
                    style="margin-top: -2.7rem;" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="main2.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="order.php">Pesanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="stasiun.php">Stasiun</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  active" href="kereta.php">Kereta</a>
                    </li>
                    <li class="nav-item none-in-md">
                        <span class="nav-link mr-3 ml-3">|</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"><?php echo $_SESSION['username'] ?></a>
                    </li>
                    <li class="nav-item none-in-md">
                        <span class="nav-link mr-3 ml-3"> </span>
                    </li>
                    <li class="nav-item mr-2 d-inline">
                        <a href="main.php" class="nav-link btn d-inline-in-md btn-danger text-white px-2 py-2">
                            Log out
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- /navbar -->

    <!-- * section tiket -->
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-4 position-absolute">
                <div class="card shadow rounded w-100" id="cardShowTiket">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 text-center h5">Receipt</div>
                        </div>
                        <div class="row mt-3 justify-content-center" style="min-height: 300px;" id="loadReceipt">
                            <div class="col-3 my-5">
                                <img src="img/833.gif" class="w-100" />
                            </div>
                        </div>
                        <div class="row mt-3" id="receipt" style="opacity: 0; pointer-events: none;">
                            <!-- TODO : Locasi Penyimpanan receipt -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- */tiket -->

    <!-- * main -->

    <div class="container mb-5" style="min-height: 400px;">
        <div class="row">
            <div class="col-12">
                <h3>Stasiun</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <hr class="bg-primary" style="height: 2px;" />
            </div>
        </div>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- * table content -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="dataMobil" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Train Name</th>
                                            <th>Train Fare</th>
                                            <th>Train Class</th>
                                            <th>Major</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($kereta as $row) : ?>
                                        <tr>
                                            <td><?= $i; ?></td>
                                            <td><?= $row["namakereta"]; ?></td>
                                            <td><?= $row["harga"]; ?></td>
                                            <td><?= $row["kelas"]; ?></td>
                                            <td><?= $row["jurusan"]; ?></td>
                                        </tr>
                                        <?php $i++; ?>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

    <!-- /main -->

    <!-- footer -->
    <footer div class="footer">
        <div class="container2">
            <div class="left-side">
                <h3>
                    <i class="fas fa-globe-asia" style="margin-right: 10px;"></i>NaikKereta
                </h3>
                <p>Train Ticket</p>
            </div>
            <div class="right-side">
                <h3>Follow Us</h3>
                <p style="transform: translateX(-40px);">Thanks For Your Visit</p>
            </div>
            <div class="wrapper">
                <div class="button">
                    <div class="icon"><i class="fab fa-facebook-f"></i></div>
                    <label>Facebook</label>
                </div>
                <div class="button">
                    <div class="icon"><i class="fab fa-twitter"></i></div>
                    <label>Twitter</label>
                </div>
                <div class="button">
                    <div class="icon"><i class="fab fa-instagram"></i></div>
                    <label>Instagram</label>
                </div>
            </div>
            <hr class="footerLine" />
        </div>
    </footer>
    <!-- /footer -->




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper.js -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js"
        integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous">
    </script>
    <script type="module" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.esm.js"></script>
    <script src="https://kit.fontawesome.com/d1a508a7c1.js" crossorigin="anonymous"></script>
    <script src="js/JsBarcode.all.min.js"></script>
    <script src="js/function.js"></script>
    <script src="js/class.js"></script>
    <script src="js/order.js"></script>

</body>

</html>