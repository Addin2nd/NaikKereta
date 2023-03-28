<?php
require 'functions.php';

$conn = mysqli_connect("localhost", "root", "", "naikkereta");

$admin = query("SELECT * FROM adminn");

if (isset($_POST["submit"])) {




    // // cek keberhasilan data
    if (tambah($_POST) > 0) {
        echo "
		<script>
			alert('Data Berhasil Ditambahkan');
			document.location.href = 'managerStation.php';
			</script>
	";
    } else {
        echo "
		<script>
			alert('Data Gagal Ditambahkan');
			document.location.href = 'managerStation.php';
			</script>
	";
    }

    // if (mysqli_affected_rows($conn) > 0 ) {
    // 	echo "Input Berhasil :) ";
    // } else {
    // 	echo "Gagal Input Data";
    // 	echo "<br>";
    // 	echo mysqli_error($conn);
    // }
}
?>

<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Manager Home | Add New Station</title>

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
                    <a href="manager2.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="profile.php" class="nav-link">Profile</a>
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
            <a href="" class="brand-link">
                <img src="img/Logo1.jpg" alt="AdminLTE Logo" class="brand-image elevation-1" style="opacity: 0.8;" />
                <span class="brand-text font-weight-light">NaikKereta</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <?php foreach ($admin as $adm) : ?>
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="img/<?php echo $adm["gambar"]; ?>" class="img-circle elevation-2" alt="User Image" />
                    </div>
                    <div class="info">
                        <a href="profile.php" class="d-block">
                            <?php echo $adm["namadepan"]; ?>
                            <?php echo $adm["namabelakang"]; ?>
                        </a>
                    </div>
                </div>
                <?php endforeach; ?>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="manager2.php" class="nav-link">
                                <i class="nav-icon ion ion-home"></i>
                                <p>
                                    Home
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="managerStation.php" class="nav-link ">
                                <i class="nav-icon ion ion-android-train"></i>
                                <p>Station</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="managerDataUser.php" class="nav-link">
                                <i class="nav-icon ion ion-person"></i>
                                <p>User Data</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="managerTrain.php" class="nav-link">
                                <i class="nav-icon ion ion-stats-bars"></i>
                                <p>Train Data</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="managerAddStaff.php" class="nav-link">
                                <i class="nav-icon ion ion-person-add"></i>
                                <p>Add Staff</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="managerStaffData.php" class="nav-link">
                                <i class="nav-icon ion ion-android-people"></i>
                                <p>Staff Data</p>
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
                            <h1>Station</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Station</a></li>
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
                                    <h3 class="card-title">Add New Station</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form role="form" action="" method="POST">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="kode">Code</label>
                                                    <input type="text" name="kode" class="form-control" id="kode"
                                                        placeholder="Enter code" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="namastasiun">Station Name</label>
                                                    <input type="text" name="namastasiun" class="form-control"
                                                        id="namastasiun" placeholder="Enter station name" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="lokasi">Location</label>
                                                    <input type="text" name="lokasi" class="form-control" id="lokasi"
                                                        placeholder="Enter location" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                            <button type="submit" name="submit"
                                                class="btn btn-primary btn-sm me-md-2">Submit</button>
                                        </div>
                                    </div>
                                    <!-- /.content -->
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