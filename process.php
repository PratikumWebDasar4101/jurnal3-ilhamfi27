<?php
$name = $_FILES['gambar']['name'];
$tmp = $_FILES['gambar']['tmp_name'];
$dir = "photos/";

$uploadedStatus = move_uploaded_file($tmp, $dir.$name);
if ($uploadedStatus) {
	echo "Upload Berhasil!<br>";
	echo "<img src='$dir$name'>";
} else {
	echo "Upload Gagal";
}
?>