<?php
require 'functions.php';

$id = $_GET["id"];

if (hapusTiket($id) > 0) {
    echo "
		<script>
			alert('Tiket Berhasil dihapus');
			document.location.href = 'successTransaction.php';
			</script>
			";
} else {
    echo "
		<script>
			alert('Tiket Gagal dihapus');
			document.location.href = 'successTransaction.php';
			</script>
			";
}