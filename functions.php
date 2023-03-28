<?php
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "naikkereta");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    // ambil data dari tiap elemen dalam form
    global $conn;
    $kode = htmlspecialchars($data["kode"]);
    $namastasiun = htmlspecialchars($data["namastasiun"]);
    $lokasi = htmlspecialchars($data["lokasi"]);

    // query insert data
    $query = "INSERT INTO stasiun VALUES ('','$kode','$namastasiun','$lokasi')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function tambahKereta($data)
{
    // ambil data dari tiap elemen dalam form
    global $conn;
    $namakereta = htmlspecialchars($data["namakereta"]);
    $harga = htmlspecialchars($data["harga"]);
    $kelas = htmlspecialchars($data["kelas"]);
    $jurusan = htmlspecialchars($data["jurusan"]);

    // query insert data
    $query = "INSERT INTO kereta VALUES ('','$namakereta','$kelas','$harga','$jurusan')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function tambahStaff($data)
{
    // ambil data dari tiap elemen dalam form
    global $conn;
    $namadepan = htmlspecialchars($data["namadepan"]);
    $namabelakang = htmlspecialchars($data["namabelakang"]);
    $username = strtolower(stripslashes($data["username"]));
    $email = htmlspecialchars($data["email"]);
    $password = mysqli_real_escape_string($conn, $data["password"]);

    //cek username sudah terpakai atau tidak
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script> 
                alert('Username Sudah Terdaftar!!')
        </script>";
        return false;
    }

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // query insert data
    $query = "INSERT INTO staff VALUES ('','$namadepan','$namabelakang','$username','$email','$password')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapusStasiun($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM stasiun WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function hapusUser($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM user WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function hapusKereta($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM kereta WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function hapusPesanan($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM datapemesanan WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function hapusStaff($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM staff WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function hapusTiket($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM tiket WHERE idTiket = $id");

    return mysqli_affected_rows($conn);
}

function hapusPertanyaan($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM pertanyaan WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    global $conn;
    $id = $data["id"];
    $kode = htmlspecialchars($data["kode"]);
    $namastasiun = htmlspecialchars($data["namastasiun"]);
    $lokasi = htmlspecialchars($data["lokasi"]);


    // query insert data
    $query = "UPDATE stasiun SET kode = '$kode', namastasiun = '$namastasiun', lokasi = '$lokasi' WHERE id = $id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function ubahKereta($data)
{
    global $conn;
    $id = $data["id"];
    $namakereta = htmlspecialchars($data["namakereta"]);
    $harga = htmlspecialchars($data["harga"]);
    $kelas = htmlspecialchars($data["kelas"]);
    $jurusan = htmlspecialchars($data["jurusan"]);


    // query insert data
    $query = "UPDATE kereta SET  namakereta = '$namakereta', harga = '$harga', kelas = '$kelas', jurusan = '$jurusan' WHERE id = $id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function ubahProfil($data)
{
    global $conn;
    $namadepan = htmlspecialchars($data["namadepan"]);
    $namabelakang = htmlspecialchars($data["namabelakang"]);
    $username = htmlspecialchars($data["username"]);
    $email = htmlspecialchars($data["email"]);
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $gambar = htmlspecialchars($data["gambar"]);

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // query insert data
    $query = "UPDATE adminn SET namadepan = '$namadepan', namabelakang = '$namabelakang', username = '$username', email = '$email', gambar = '$gambar', `password` = '$password'";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function registrasi($data)
{
    global $conn;

    $namadepan = htmlspecialchars($data["namadepan"]);
    $namabelakang = htmlspecialchars($data["namabelakang"]);
    $username = strtolower(stripslashes($data["username"]));
    $email = htmlspecialchars($data["email"]);
    $password = mysqli_real_escape_string($conn, $data["password"]);

    //cek username sudah terpakai atau tidak
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script> 
                 alert('Username Sudah Terdaftar!!')
         </script>";
        return false;
    }


    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //tambahkan user ke database
    mysqli_query($conn, "INSERT INTO user VALUES('', '$namadepan', '$namabelakang', '$username', '$email', '$password')");

    return mysqli_affected_rows($conn);
}

function tambahPesanan($data)
{
    // ambil data dari tiap elemen dalam form
    global $conn;
    $namaPembeli = htmlspecialchars($data["namaPembeli"]);
    $namaKereta = htmlspecialchars($data["namaKereta"]);
    $tglBerangkat = htmlspecialchars($data["tglBerangkat"]);
    $waktuBerangkat = htmlspecialchars($data["waktuBerangkat"]);
    $kelas = htmlspecialchars($data["kelas"]);
    $berangkat = htmlspecialchars($data["berangkat"]);
    $tujuan = htmlspecialchars($data["tujuan"]);
    $dewasa = htmlspecialchars($data["dewasa"]);
    $anakanak = htmlspecialchars($data["anakanak"]);
    $nomorTelepon = htmlspecialchars($data["nomorTelepon"]);

    // query insert data
    $query = "INSERT INTO datapemesanan VALUES ('','$namaPembeli','$namaKereta','$tglBerangkat','$waktuBerangkat','$kelas','$berangkat','$tujuan','$dewasa','$anakanak','$nomorTelepon')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function tambahMasukan($data)
{
    // ambil data dari tiap elemen dalam form
    global $conn;
    $email = htmlspecialchars($data["email"]);
    $noTelepon = htmlspecialchars($data["noTelepon"]);
    $masukan = htmlspecialchars($data["masukan"]);

    // query insert data
    $query = "INSERT INTO pertanyaan VALUES ('','$email','$noTelepon','$masukan')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function konfirmasiTiket($data)
{
    // ambil data dari tiap elemen dalam form
    global $conn;
    $kodeTiket = htmlspecialchars($data["kodeTiket"]);
    $namaKereta = htmlspecialchars($data["namaKereta"]);
    $namaPembeli = htmlspecialchars($data["namaPembeli"]);
    $tglBerangkat = htmlspecialchars($data["tglBerangkat"]);
    $waktuBerangkat = htmlspecialchars($data["waktuBerangkat"]);
    $waktuSampai = htmlspecialchars($data["waktuSampai"]);
    $harga = htmlspecialchars($data["harga"]);
    $noKursi = htmlspecialchars($data["noKursi"]);
    $kelas = htmlspecialchars($data["kelas"]);
    $berangkat = htmlspecialchars($data["berangkat"]);
    $tujuan = htmlspecialchars($data["tujuan"]);

    // query insert data
    $query = "INSERT INTO tiket VALUES ('','$kodeTiket','$namaKereta','$namaPembeli','$tglBerangkat','$waktuBerangkat','$waktuSampai','$harga','$noKursi','$kelas','$berangkat', '$tujuan')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}