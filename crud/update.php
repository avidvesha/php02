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

     $sql =("SELECT * FROM buku WHERE id_buku='$id'");
     $result = $conn->query($sql);

     $result= $result->fetch_assoc();

?>

<body>
    <div class="container">
        <h1>Data Buku</h1>
        <form method="POST", action="ubah.php">
            <input type="hidden" name="id_buku" value="<?php echo $result['id']?>">
            <div class="form-group">
                <label for="judul"> Judul Buku : </label>
                <input type="text" name="judul" placeholder="Masukkan Judul Buku" class="form-control" value="<?php echo $result['judul_buku']?>">
            </div>
            <div class="form-group">
                <label for="penulis"> Penulis Buku : </label>
                <input type="text" name="penulis" placeholder="Masukkan Penulis Buku" class="form-control" value="<?php echo $result['penulis']?>">
            </div>
            <div class="form-group">
                <label for="judul"> Jenis Buku : </label>
                <input type="text" name="jenis" placeholder="Masukkan Jenis Buku" class="form-control" value="<?php echo $result['jenis_buku']?>">
            </div>
            <div class="form-group">
                <label for="judul"> Gambar Buku : </label>
                <input type="file" name="gambar" placeholder="Upload Gambar Buku" class="form-control" value="<?php echo $result['gambar_buku']?>">
            </div>
            <br></br>
            <button type="submit" name="simpan" class="btn btn-primary btn-xs"> Submit </button>
        </form>
    </div>
</body>
</html>