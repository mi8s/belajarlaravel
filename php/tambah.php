<center>
<?php
include 'koneksi.php';
$nama = $_POST['nama'];
$kelas =$_POST['kelas'];
$absen =$_POST['absen'];
$query = mysqli_query($connect, "INSERT INTO data (nama, kelas, absen) VALUES ('$nama','$kelas','$absen')");
if ($query) {
    echo "<div class ='alert alert-success' style ='text-align-center;'> Data Berhasil Disimpan</div>";
}else{
    echo "<div class ='alert alert-danger'> upload failed. try again.</div>";
}
?>
<br>
<form action="index.php" METHOD="POST">
<button onclick="index.php.href='<?php echo $previousPage; ?>'">Kembali</button>
