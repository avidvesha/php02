<html>
    <head>
        <title>My Library</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
    </head>
</html>
<?php
    include './koneksi.php';

    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $jenis = $_POST['jenis'];
    $gambar = $_POST['gambar'];

    $sql = "INSERT INTO buku (judul_buku, penulis, jenis_buku, gambar_buku) VALUES ('$judul','$penulis','$jenis','$gambar')";
    
    if($conn->query($sql)==TRUE) {
        echo "<div class='alert alert-primary alert-success' role='alert'>
         <a href='tampil.php' class='btn btn-primary btn-xs' >Kembali</a> <br> Data Berhasil Ditambahkan </div>";
    } else {
        echo "Error:" . $sql . "<br>"  . $conn->error;
    }

    $conn->close();
?>