<?php
include 'koneksi.php';

$id         = $_POST['id'];
$nama       = $_POST['nama'];
$kelas      = $_POST['kelas'];
$absen      = $_POST['absen'];

$query = mysqli_query ($connect, "UPDATE data SET nama= '$nama', kelas= '$kelas', absen= '$absen' WHERE id='$id'");
if($query) {
    echo "<div class'alert alert-success' style= 'text-align:center;'>Tersimpan coi</div>";
} else {
    echo "<div class='alert alert-danger'>gagall, coba lagi.</div>'";
} 
?> <center>
    <br>
    <form action="index.php" METHOD="POST">
    <button onclick="index.php.href='<?php echo $previousPage; ?>'">Kembali yh</button>
