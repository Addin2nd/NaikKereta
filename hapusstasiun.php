<?php
require 'functions.php';

$id = $_GET["id"];

if (hapusStasiun($id) > 0) {
	echo "
		<script>
			alert('Data Berhasil dihapus');
			document.location.href = 'managerStation.php';
			</script>
			";
} else {
	echo "
		<script>
			alert('Data Gagal dihapus');
			document.location.href = 'managerStation.php';
			</script>
			";
}