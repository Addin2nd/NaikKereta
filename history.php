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

    <title>NaikKereta | Histori</title>
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <div class="blank"></div>
    <!-- navbar -->
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
                        <a class="nav-link active" href="history.php">Sejarah Transaksi</a>
                    </li>
                    <li class="nav-item none-in-md">
                        <span class="nav-link mr-3 ml-3">|</span>
                    </li>
                    <li class="nav-item mr-2 d-inline">
                        <a href="index.php" class="nav-link btn d-inline-in-md btn-primary text-white px-2 py-2">
                            Sign in
                        </a>
                        <a href="regist.php" class="nav-link show-in-md text-white btn btn-success px-2 py-2">
                            Sign up
                        </a>
                    </li>
                    <li class="nav-item none-in-md">
                        <a href="regist.php" class="nav-link btn btn-success text-white px-2 py-2">
                            Sign Up
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- /navbar -->

    <!-- main -->

    <div class="container my-5" style="min-height: 400px;">
        <div class="row">
            <div class="col-12">
                <h3>Histori Transaksi</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <hr class="bg-primary" style="height: 2px;" />
            </div>
        </div>
        <div class="row my-3 justify-content-center" id="noHistory">
            <div class="col-md-3 text-center">
                <img src="img/confused.png" class="w-100" />
            </div>
        </div>
        <div class="row my-3 justify-content-center" id="noHistory">
            <div class="col-12 text-center">
                <h4 class="font-italic">
                    hmm, sepertinya kamu belum memiliki history transaksi
                </h4>
            </div>
        </div>
        <div class="row" id="historyParent">
            <div class="col-md-4 mb-3 card-container">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <p class="font-weight-bold">Histori Tiket</p>
                            </div>
                            <div class="col-6 text-right">
                                <i class="fa fa-times point delete" id="1"></i>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-5">No pesanan</div>
                            <div class="col-2 text-center">:</div>
                            <div class="col-5 text-right">1598190426</div>
                        </div>
                        <div class="row">
                            <div class="col-5">status</div>
                            <div class="col-2 text-center">:</div>
                            <div class="col-5 text-right text-success">Lunas</div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12 text-right">
                                <p class="text-primary point lihatTiket" id="1">
                                    Lihat Tiket
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3 card-container">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <p class="font-weight-bold">Histori Tiket</p>
                            </div>
                            <div class="col-6 text-right">
                                <i class="fa fa-times point delete" id="2"></i>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-5">No pesanan</div>
                            <div class="col-2 text-center">:</div>
                            <div class="col-5 text-right">1598190427</div>
                        </div>
                        <div class="row">
                            <div class="col-5">status</div>
                            <div class="col-2 text-center">:</div>
                            <div class="col-5 text-right text-success">Lunas</div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12 text-right">
                                <p class="text-primary point lihatTiket" id="2">
                                    Lihat Tiket
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /main -->

    <!-- * restore -->

    <div class="container">
        <div class="row justify-content-end">
            <div class="shadow p-3" id="restore" data-id="restore.html">
                <img src="img/restore.png" width="35" height="35" />
                <span class="ml-3 font-weight-bold">Restore Tiket</span>
            </div>
        </div>
    </div>

    <!-- * /restore -->

    <!-- * Tiket -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 p-2 position-absolute" id="theTiketHistory"></div>
        </div>
    </div>
    <!-- * /Tiket -->

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
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="https://kit.fontawesome.com/d1a508a7c1.js" crossorigin="anonymous"></script>
    <script src="js/JsBarcode.all.min.js"></script>
    <script src="js/function.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="js/history.js"></script>
</body>

</html>