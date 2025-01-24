<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<body>

<h1>my first php page</h1>
    
<br>
 
 <?php
 $text ="data siswa";
 echo "coba buat tabel $text";
 ?>

 <br>
 <table border = "1">
    <thead>
    <tr>
        <th> NAMA </th>
        <th> KELAS </th>
        <th> ABSEN </th>
        <th> EDIT </th>
        <th> HAPUS </th>
    </tr>
    </thead>
<tbody>
    <tr>
    <?php
    include 'koneksi.php';
    $query =mysqli_query($connect, "SELECT * FROM data");
    while ($data = mysqli_fetch_array($query)) {
        ?>
        <td> <?php echo $data['nama'] ?></td>
        <td> <?php echo $data['kelas'] ?></td>
        <td> <?php echo $data['absen'] ?></td>
        <td>
            <a href ="edit.php?id=<?php echo $data['id'];?>">Edit</a>
        </td>
        <td>
            <a href ="delete.php?id=<?php echo $data['id'];?>" onclick="return confirm('Serius hapus??')">Hapus</a>
        </td>
    </tr>
</tbody> <?php } ?>
</table>
<br>
<br>

<form action ="tambah.php" method ="POST">
    <div class ="row">
        <div class ="">
            <div class ="form-group">
                <label class ="text-dark" for ="nama">NAMA</label>
                <input class ="form-control" id ="nama" name ="nama" type ="text">
                <placeholder ="masukkan nama">
        </div>
    <div>
    <div class ="col-lg-12">
        <div class ="form-group">
                <label class ="text-dark" for ="kelas">KELAS</label>
                <input class ="form-control" id ="kelas" name ="kelas" type ="text">
                <placeholder ="masukkan kelas">
        </div>
        <div class ="form-group">
                <label class ="text-dark" for ="absen">ABSEN</label>
                <input class ="form-control" id ="absen" name ="absen" type ="text">
                <placeholder ="masukkan absen">
        </div>

        <div class ="text-center">
            <button type ="submit" id ="submit" name ="submit" class ="btn btn-block btn-dark">change</button>
        </div>
    </div>
</from>
<br>
<br>
         <form action ="tambah.php" method ="POST">
    <div class ="row">
        <div class ="">
            <div class ="form-group">
                <label class ="text-dark" for ="nama">NAMA</label>
                <input class ="form-control" id ="nama" name ="nama" type ="text">
                <placeholder ="masukkan nama">
        </div>
    <div>
    <div class ="col-lg-12">
        <div class ="form-group">
                <label class ="text-dark" for ="kelas">KELAS</label>
                <input class ="form-control" id ="kelas" name ="kelas" type ="text">
                <placeholder ="masukkan kelas">
        </div>
        <div class ="form-group">
                <label class ="text-dark" for ="absen">ABSEN</label>
                <input class ="form-control" id ="absen" name ="absen" type ="text">
                <placeholder ="masukkan absen">
        </div>

        <div class ="text-center">
            <button type ="submit" id ="submit" name ="submit" class ="btn btn-block btn-dark">simpan</button>
        </div>
    </div>
</form>
         
</body>
</html>