<?php
include 'koneksi.php';

$no_anggota = $_GET['no_anggota'];

$sql = "DELETE FROM anggota WHERE no_anggota ='$no_anggota'";
if (mysqli_query($db, $sql)) {
  header('Location: Read.php?status=sukses');
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($db);
}