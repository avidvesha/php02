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
    $id = $_POST['id_buku'];
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $jenis = $_POST['jenis'];
    $gambar = $_POST['gambar'];

    $sql = "UPDATE buku SET  judul_buku='$judul',penulis='$penulis',jenis_buku='$jenis',gambar_buku='$gambar' WHERE id_buku='$id'";
    
    if($conn->query($sql)==TRUE){
        echo "<div class='alert alert-primary alert-success' role='alert'>
        <a href='tampil.php' class='btn btn-primary btn-xs' >Kembali</a> <br> Data Berhasil Diubah </div>";
    }else{
        echo "Error:" . $sql . "<br>"  . $conn->error;
    }

    $conn->close();


?>