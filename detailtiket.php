<?php
require 'functions.php';
session_start();

//ambil data di url

$id = $_GET["id"];

$data = query("SELECT * FROM tiket WHERE idTiket = $id")[0];

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Staff Home | Ticket Details</title>

    <link rel="icon" href="img/Logo1.jpg" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="adminLte/css/all.min.css" />
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    <!-- DataTables -->
    <link rel="stylesheet" href="adminLte/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="adminLte/css/responsive.bootstrap4.min.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css" />
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet" />
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- * Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="nav-icon ion ion-android-menu"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="staff.php" class="nav-link">Home</a>
                </li>
            </ul>

            <!-- SEARCH FORM -->
            <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search"
                        aria-label="Search" />
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="nav-icon ion ion-search"></i>
                        </button>
                    </div>
                </div>
            </form>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="nav-icon ion ion-ios-toggle"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- ? /.navbar -->

        <!-- * Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-danger elevation-4">
            <!-- Brand Logo -->
            <a href="staff.php" class="brand-link">
                <img src="img/Logo1.jpg" alt="AdminLTE Logo" class="brand-image elevation-1" style="opacity: 0.8;" />
                <span class="brand-text font-weight-light">NaikKereta</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="img/admin.jpg" class="img-circle elevation-2" alt="User Image" />
                    </div>
                    <div class="info">
                        <a class="d-block"><?php echo $_SESSION['username'] ?></a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="staff.php" class="nav-link">
                                <i class="nav-icon ion ion-home"></i>
                                <p>
                                    Home
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="successTransaction.php" class="nav-link">
                                <i class="nav-icon ion ion-checkmark-circled"></i>
                                <p>Successful Transaction</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="waitingTransaction.php" class="nav-link">
                                <i class="nav-icon ion ion-android-time"></i>
                                <p>Waiting Transaction</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="question.php" class="nav-link">
                                <i class="nav-icon ion ion-android-list"></i>
                                <p>Question</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="main.php" class="nav-link">
                                <i class="nav-icon ion ion-log-out"></i>
                                <p>Logout</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- ? /.sidebar -->
        </aside>

        <!-- * Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- * Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Success Transaction</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item">
                                    <a href="#">Success Transaction</a>
                                </li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- Main content -->

            <section class="content">
                <div class="container-fluid">
                    <!-- * table content -->
                    <div class="row">
                        <!-- /.col -->
                        <!-- left column -->
                        <div class="col-md-9">
                            <!-- general form elements -->
                            <div class="card card-danger">
                                <div class="card-header">
                                    <h3 class="card-title">Ticket Details</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form role="form" action="" method="POST">
                                    <input type="hidden" name="id" value=" <?= $data["id"]; ?>">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <table class="table table-bordered border-primary">
                                                    <tr>
                                                        <td>Customer Name</td>
                                                        <td><?= $data["namaPembeli"]; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Ticket Code</td>
                                                        <td><?= $data["kodeTiket"]; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>From</td>
                                                        <td><?= $data["berangkat"]; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>To</td>
                                                        <td><?= $data["tujuan"]; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Train Name</td>
                                                        <td><?= $data["NamaKereta"]; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Departure Date</td>
                                                        <td><?= $data["tglBerangkat"]; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Departure Time</td>
                                                        <td><?= $data["waktuBerangkat"]; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Arrival Time</td>
                                                        <td><?= $data["waktuSampai"]; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Class</td>
                                                        <td><?= $data["kelas"]; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Seat Number</td>
                                                        <td><?= $data["noKursi"]; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Ticket Price</td>
                                                        <td><?= $data["harga"]; ?></td>
                                                    </tr>
                                                </table>

                                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                                    <button type="button" name="submit"
                                                        class="btn btn-primary btn-sm me-md-2"
                                                        onclick="window.print()">Print</button>
                                                </div>
                                            </div>
                                            <!-- /.content -->
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- ? /.content-wrapper -->

        <!-- * footer -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block"><b>Version</b> 2.1.0</div>
            <strong>Copyright &copy; 2020
                <a href="https://github.com/Addin2nd" target="blank">Muhamad Addin</a>.</strong>
            All rights reserved.
        </footer>
        <!-- ? /footer -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->


    <!-- jQuery -->
    <script src="adminLte/js/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="adminLte/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables -->
    <script src="adminLte/js/jquery.dataTables.min.js"></script>
    <script src="adminLte/js/dataTables.bootstrap4.min.js"></script>
    <script src="adminLte/js/dataTables.responsive.min.js"></script>
    <script src="adminLte/js/responsive.bootstrap4.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- My Script -->
    <script>
    $(function() {
        $("#dataMobil").DataTable({
            responsive: true,
            autoWidth: false,
        });
    });
    </script>
</body>


</html>