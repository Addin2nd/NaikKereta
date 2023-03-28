<?php
require 'functions.php';

$id = $_GET["id"];

if (hapusPesanan($id) > 0) {
	echo "
		<script>
			alert('Pesanan Berhasil dicancel');
			document.location.href = 'waitingTransaction.php';
			</script>
			";
} else {
	echo "
		<script>
			alert('Pesanan Gagal dicancel');
			document.location.href = 'waitingTransaction.php';
			</script>
			";
}