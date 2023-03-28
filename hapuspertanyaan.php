<?php
require 'functions.php';

$id = $_GET["id"];

if (hapusPertanyaan($id) > 0) {
    echo "
		<script>
			alert('Data Berhasil dihapus');
			document.location.href = 'question.php';
			</script>
			";
} else {
    echo "
		<script>
			alert('Data Gagal dihapus');
			document.location.href = 'question.php';
			</script>
			";
}