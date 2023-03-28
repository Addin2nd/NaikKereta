<?php
session_start();
require 'functions.php';
$conn = mysqli_connect("localhost", "root", "", "naikkereta");
$stasiun = query("SELECT * FROM stasiun");
$kereta = query("SELECT * FROM kereta");

if (isset($_POST["submit"])) {




    // // cek keberhasilan data
    if (tambahMasukan($_POST) > 0) {
        echo "
		<script>
			alert('Pertanyaan Berhasil Dikirim');
			document.location.href = 'main.php';
			</script>
	";
    } else {
        echo "
		<script>
			alert('Pertanyaan Gagal Dikirim');
			document.location.href = 'main.php';
			</script>
	";
    }
}


/*if (!isset($_SESSION["login"])) {
    header("Location: main2.php");
    exit;
}*/


//$sql_user = mysqli_query($conn, "SELECT * FROM user WHERE ")


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

    <title>NaikKereta | Home</title>
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <div class="blank"></div>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow sticky-top">
        <div class="container">
            <a class="navbar-brand" href="main.php">
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
                        <a class="nav-link active" aria-current="page" href="main.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="orderA.php">Pesanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="stasiunA.php">Stasiun</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="keretaA.php">Kereta</a>
                    </li>
                    <li class="nav-item none-in-md">
                        <span class="nav-link mr-3 ml-3">|</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"></a>
                    </li>
                    <li class="nav-item mr-2 d-inline">
                        <a href="index.php" class="nav-link btn d-inline-in-md btn-primary text-white px-2 py-2">
                            Sign in
                        </a>
                    </li>
                    <li class="nav-item mr-2 d-inline">
                        <a href="regist.php" class="nav-link btn btn-success text-white px-2 py-2">
                            Sign up
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- /navbar -->

    <!-- front background -->
    <div id="carouselExampleControls" class="carousel slide shadow-lg" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/1.jpg" class="d-block w-100" height="447" />
            </div>
            <div class="carousel-item">
                <img src="img/2.jpg" class="d-block w-100" height="447" />
            </div>
            <div class="carousel-item">
                <img src="img/3.jpg" class="d-block w-100" height="447" />
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>
    <!-- /front background -->

    <!-- main -->

    <div class="container d-flex justify-content-center">
        <form role="form" action="" method="POST">
            <div class="row">
                <div class="col-md-12 bg-white shadow px-5 py-3 rounded mb-5" id="card-main">
                    <div class="row">
                        <span class="text-mute" style="font-size: 23px;">Hai kamu</span>
                        <h3>Mau Kemana ?</h3>
                        <hr class="hr" />
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <table class="khusus">
                                            <tr>
                                                <th>Nama Pembeli</th>
                                                <th>:</th>
                                                <th><input type="text" name="namaPembeli" class="input" required
                                                        placeholder="Nama Pembeli"></input></th>
                                                <td> </td>
                                                <th>Nomor Telepon</th>
                                                <th>:</th>
                                                <th><input type="text" name="nomorTelepon" class="input" required
                                                        placeholder="Input No.Telepon"></input></th>
                                            </tr>
                                            <tr>
                                                <th>Nama Kereta</th>
                                                <th>:</th>
                                                <th><select type="text" name="namaKereta" class="input" required
                                                        placeholder="Nama Kereta">
                                                        <option>Pilih Kereta</option>
                                                        <?php foreach ($kereta as $row) : ?>
                                                        <option><?= $row["namakereta"]; ?></option>
                                                        <?php endforeach; ?>
                                                    </select></th>
                                                <td> </td>
                                                <th>Kelas Kereta</th>
                                                <th>:</th>
                                                <th><select name="kelas" class="input">
                                                        <option>Pilih Kelas Kereta</option>
                                                        <option>Eksekutif</option>
                                                        <option>Ekonomi</option>
                                                    </select></th>
                                            </tr>
                                            <tr>
                                                <th>Dari Stasiun</th>
                                                <th>:</th>
                                                <th><select type="text" name="berangkat" class="input" required
                                                        placeholder="Nama Stasiun">
                                                        <option>Pilih Stasiun</option>
                                                        <?php foreach ($stasiun as $row) : ?>
                                                        <option><?= $row["namastasiun"]; ?> <?= $row["kode"]; ?>
                                                        </option>
                                                        <?php endforeach; ?>
                                                    </select></th>
                                                <td></td>
                                                <th>Ke Stasiun</th>
                                                <th>:</th>
                                                <th><select type="text" name="tujuan" class="input" required
                                                        placeholder="Nama Stasiun">
                                                        <option>Pilih Stasiun</option>
                                                        <?php foreach ($stasiun as $row) : ?>
                                                        <option><?= $row["namastasiun"]; ?> <?= $row["kode"]; ?>
                                                        </option>
                                                        <?php endforeach; ?>
                                                    </select></th>
                                            </tr>
                                            <tr>
                                                <th>Tanggal Berangkat</th>
                                                <th>:</th>
                                                <th><input type="date" name="tglBerangkat" class="input"></input></th>
                                                <td></td>
                                                <th>Waktu Pemberangkatan</th>
                                                <th>:</th>
                                                <th><input type="time" name="waktuBerangkat" class="input"></input></th>
                                            </tr>
                                            <tr>
                                                <th>Tiket Dewasa</th>
                                                <th>:</th>
                                                <th><input type="text" name="dewasa" class="input" required
                                                        placeholder="Input Tiket"></input></th>
                                                <td></td>
                                                <th>Tiket Anak-anak</th>
                                                <th>:</th>
                                                <th><input type="text" name="anakanak" class="input" required
                                                        placeholder="Input Tiket"></input></th>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="hr" />
                    <div class="row justify-content-end">
                        <div class="col-md-3">
                            <button class="btn btn-primary w-100" id="cariTiket" type="submit" name="submit" disabled>
                                Pesan
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- /main -->

    <!-- about -->
    <div class="container mb-3">
        <div class="row mx-3">
            <hr />
        </div>
        <div class="row">
            <div class="col-md-6">
                <img src="img/tes4.png" class="w-100" />
            </div>
            <div class="col-md-6 mt-3" style="text-align :justify;">
                <h2>Tentang</h2>
                NaikKereta merupakan sebuah website pemesanan tiket kereta api antar daerah dan lokasi di indonesia yang
                tercipta sejak Desember tahun 2020. Website ini menyajikan pemesanan tiket yang mudah untuk digunakan
                oleh seorang user. Dengan website ini orang - orang tidak perlu lagi melakukan pembelian tiket secara
                onsite di terminal daerah masing-masing. Kita cukup memiliki akses internet dan gadget untuk melakukan
                pemesanan tiket kereta api. Kami dari website NaikKereta mengucapkan terima kasih atas penggunaan
                website kami dan merasa berbahagia jika dapat membuat anda merasa nyaman, mudah, dan terbantu.
            </div>
        </div>

        <div class="row mt-3">
            <hr />
        </div>
    </div>
    <!-- /about -->

    <!-- cara memesan -->
    <div class="container mb-3">
        <div class="row mb-3">
            <div class="col-12 text-center">
                <h2>Cara memesan</h2>
            </div>
        </div>

        <div class="row justify-content-center mb-3">
            <div class="col-md-3 mr-3 mb-5">
                <div class="row justify-content-center">
                    <div class="col-md-9">
                        <div class="row justify-content-center">
                            <div class="cardRound text-center">
                                <ion-icon name="search" class="mt-icon primary iconInCardRound"></ion-icon>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-3">
                    <div class="col text-center">
                        Lakukan Login untuk masuk terlebih dahulu dan Sign up jika anda belum memiliki akun. Lalu
                        lakukan pengisian data tiket sesuai dengan yang anda inginkan. Anda dapat melihat data stasiun
                        dan kereta untuk memastikan tiket mana yang akan dipesan.
                    </div>
                </div>
            </div>
            <div class="col-md-3 mr-3 mb-5">
                <div class="row justify-content-center">
                    <div class="col-md-9">
                        <div class="row justify-content-center">
                            <div class="cardRound text-center">
                                <i class="fa fa-ticket-alt mt-icon primary iconInCardRound"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-3">
                    <div class="col text-center">
                        Setelah data telah diisi sesuai dengan yang diinginkan, lakukanlah pemesanan tiket dengan klik
                        pesan.
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-5">
                <div class="row justify-content-center">
                    <div class="col-md-9">
                        <div class="row justify-content-center">
                            <div class="cardRound text-center">
                                <ion-icon name="checkmark-circle-outline" class="mt-icon primary iconInCardRound">
                                </ion-icon>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-3">
                    <div class="col text-center">
                        Lakukan pembayaran setelah bukti pemesanan keluar dan klik cetak untuk mencetak tiketnya.
                    </div>
                </div>
            </div>
        </div>

        <div class="row mx-3">
            <hr />
        </div>
    </div>
    <!-- /cara memesan -->

    <!-- ajukan pertanyaan -->
    <div class="container mb-5">
        <div class="row mb-3">
            <div class="col-12">
                <h1>Ajukan Pertanyaan</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <form role="form" action="" method="POST">
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-12">
                                <input type="email" name="email" id="email" placeholder="Email anda"
                                    class="form-control" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <input type="text" name="noTelepon" id="noTelepon" placeholder="No Telepon anda"
                                    class="form-control" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <textarea name="masukan" id="masukan" placeholder="Pesan anda" class="form-control"
                                    style="min-height: 200px; resize: none;"></textarea>
                            </div>
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button type="submit" name="submit" class="btn btn-primary btn-sm me-md-2">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6 none-in-md">
                <img src="img/tes3.png" class="user-select-none w-100" />
            </div>
        </div>
    </div>
    <!-- /ajukan pertanyaan -->

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
    <script src="js/function.js"></script>
    <script src="js/script.js"></script>

</body>

</html>