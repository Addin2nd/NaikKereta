<?php
require 'functions.php';

$id = $_GET["id"];

if (hapusUser($id) > 0) {
	echo "
		<script>
			alert('Data Berhasil dihapus');
			document.location.href = 'managerDataUser.php';
			</script>
			";
} else {
	echo "
		<script>
			alert('Data Gagal dihapus');
			document.location.href = 'managerDataUser.php';
			</script>
			";
}