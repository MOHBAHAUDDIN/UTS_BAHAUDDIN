<?php
include 'inc_koneksi.php';

$query = "SELECT * FROM karyawan;";
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


$ID_KARYAWAN = '';
$NAMA = '';
$JENIS_KELAMIN = '';
$TELEPON = '';
$ALAMAT = '';


if (isset($_GET['ubah'])) {
    $ID_KARYAWAN = $_GET['ubah'];

    $query = "SELECT * FROM karyawan WHERE ID_KARYAWAN = '$ID_KARYAWAN';";
    $sql = mysqli_query($koneksi, $query);

    $result = mysqli_fetch_assoc($sql);

    $NAMA = $result['NAMA'];
    $JENIS_KELAMIN = $result['JENIS_KELAMIN'];
    $TELEPON = $result['TELEPON'];
    $ALAMAT = $result['ALAMAT'];

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
    <title>Karyawan Di Ubah</title>
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
        <form method="POST" action="proses_karyawan.php" enctype="multipart/form-data">
            <input type="hidden" value="<?php echo $ID_KARYAWAN; ?>" name="ID_KARYAWAN">
            <div class="mb-3 row">
                <label for="NAMA" class="col-sm-2 col-form-label">
                    NAMA Lengkap</label>
                <div class="col-sm-10">
                    <input required type="text" name="NAMA" class="form-control" id="NAMA" placeholder="Ex: Iam Google" value=" <?php echo $NAMA; ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="JENIS_KELAMIN" class="col-sm-2 col-form-label">
                    Jenis Kelamin</label>
                <div class="col-sm-10">
                    <select required id="JENIS_KELAMIN" name="JENIS_KELAMIN" class="form-select">
                        <option <?php if ($JENIS_KELAMIN == 'Laki-Laki') {
                                    echo "selected";
                                } ?> value='Laki-Laki'>Laki-Laki</option>
                        <option <?php if ($JENIS_KELAMIN == 'Perempuan') {
                                    echo "selected";
                                } ?> value="Perempuan"> Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="TELEPON" class="col-sm-2 col-form-label">
                    No. TELEPON</label>
                <div class="col-sm-10">
                    <input required type="text" name="TELEPON" class="form-control" id="TELEPON" placeholder="Ex: 123456789101" value=" <?php echo $TELEPON; ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="ALAMAT" class="col-sm-2 col-form-label">
                    Alamat Lengkap</label>
                <div class="col-sm-10">
                    <textarea required class="form-control" id="ALAMAT" name="ALAMAT" rows="3"> <?php echo $ALAMAT; ?> </textarea>
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