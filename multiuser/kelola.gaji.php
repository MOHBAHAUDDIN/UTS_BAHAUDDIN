<?php
include 'inc_koneksi.php';

$query = "SELECT * FROM gaji;";
$sql = mysqli_query($koneksi, $query);
$no = 0;

//while($result = mysqli_fetch_assoc($sql)){
// echo $result['NAMA']."<>";
//}

//$result = mysqli_fetch_assoc($sql);
//var_dump($result);
?>
<!doctype html>
<?php


$ID_GAJI = '';
$GAJI_POKOK = '';
$TUNJANGAN = '';


if (isset($_GET['ubah'])) {
    $ID_GAJI = $_GET['ubah'];

    $query = "SELECT * FROM gaji WHERE ID_GAJI = '$ID_GAJI';";
    $sql = mysqli_query($koneksi, $query);

    $result = mysqli_fetch_assoc($sql);

    $GAJI_POKOK = $result['GAJI_POKOK'];
    $TUNJANGAN = $result['TUNJANGAN'];

    //var_dump($result);

    //die();
}



?>




<html lang="en">

<head>

    <meta charset="utf-8">
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
    <title>Gaji Di Ubah</title>
</head>

<body>
    <nav class="navbar navbar-light bg-light mb-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                Silahkan Di Isi !!!
            </a>
        </div>
    </nav>
    <div class="container">
        <form method="POST" action="proses.gaji.php" enctype="multipart/form-data">
            <input type="hidden" value="<?php echo $ID_GAJI; ?>" name="ID_GAJI">
            <div class="mb-3 row">
                <label for="GAJI_POKOK" class="col-sm-2 col-form-label">
                    Gaji Pokok</label>
                <div class="col-sm-10">
                    <input required type="text" name="GAJI_POKOK" class="form-control" id="GAJI_POKOK" placeholder="Ex: Iam Google" value=" <?php echo $GAJI_POKOK; ?>">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="TUNJANGAN" class="col-sm-2 col-form-label">
                    Gaji Tunjangan</label>
                <div class="col-sm-10">
                    <input required type="text" name="TUNJANGAN" class="form-control" id="TUNJANGAN" placeholder="Ex: 123456789101" value=" <?php echo $TUNJANGAN; ?>">
                </div>
            </div>

            <div class="mb-3 row mt-4">
                <div class="col">
                    <?php
                    if (isset($_GET['ubah'])) {
                    ?>
                        <button type="submit" name="aksi" value="edit" class="btn btn-primary">
                            <i class="fa fa-floppy-o" aria-hidden="true"></i>
                            Simpan Perubahan
                        </button>
                    <?php
                    } else {
                    ?>
                        <button type="submit" name="aksi" value="add" class="btn btn-primary">
                            <i class="fa fa-floppy-o" aria-hidden="true"></i>
                            Tambahkan
                        </button>
                    <?php
                    }
                    ?>
                    <a href="karyawan.php" type="button" class="btn btn-danger">
                        <i class="fa fa-reply" aria-hidden="true"></i>
                        Batal
                    </a>
                </div>
        </form>
    </div>
</body>

</html>