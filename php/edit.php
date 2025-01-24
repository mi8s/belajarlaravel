<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<body>
<h1> UPDATE SISWA </h1>
<?php
include 'koneksi.php';
$query =mysqli_query($connect, "SELECT * FROM data");
    while ($data = mysqli_fetch_array($query)) {
        ?>
        <form action ="update.php" method ="POST">
        <input type ="hidden" name ="id" value ="<?php echo $data['id']; ?>">
            <input type ="text" name ="nama" value ="<?php echo $data['nama']; ?>">
            <input type ="text" name ="kelas" value ="<?php echo $data['kelas']; ?>">
            <input type ="text" name ="absen" value ="<?php echo $data['absen']; ?>">
            <button type ="submit" name ="update"> Update </button>
        </form> <?php } ?>
</body>
</html>