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

    $id = $_GET['id'];

    $sql = "DELETE FROM buku WHERE id_buku = '$id'";

    if($conn->query($sql)==TRUE){
        echo "<div class='alert alert-primary alert-success' role='alert'>
        <a href='tampil.php' class='btn btn-primary btn-xs' >Kembali</a> <br> Data Berhasil Dihapus </div>";
    }else{
        echo "Error:" . $sql . "<br>"  . $conn->error;
    }

    $conn->close();
?>