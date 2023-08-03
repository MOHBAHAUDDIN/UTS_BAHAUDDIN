<?php
include 'inc_koneksi.php';

$query = "SELECT * FROM gaji;";
$sql = mysqli_query($koneksi, $query);
$no = 0;

// while ($result = mysqli_fetch_assoc($sql)) {
//     echo $result['NAMA'] . "<>";
// }

// $result = mysqli_fetch_assoc($sql);
// var_dump($result);
?>
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
    <title>PENGGAJIAN KARYAWAN</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">PENGGAJIAN KARYAWAN</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="karyawan.php">KARYAWAN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gaji.php">GAJI</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="bagian.php">BAGIAN</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <h1>Gaji</h1>
        <table class="table align-middle table-bordered mt-3">
            <thead>
                <tr>
                    <th>
                        <center>No.</center>
                    </th>
                    <th>Gaji Pokok</th>
                    <th>Gaji Tunjangan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($result = mysqli_fetch_assoc($sql)) {
                ?>
                    <tr>
                        <td>
                            <center>
                                <?php echo ++$no; ?>.
                            </center>
                        </td>
                        <td><?php echo $result['GAJI_POKOK']; ?></td>
                        <td><?php echo $result['TUNJANGAN']; ?></td>
                        <td>
                            <a href="kelola.gaji.php?ubah=<?php echo $result['ID_GAJI']; ?>" type="button" class="btn btn-success">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <a href="proses.gaji.php?hapus=<?php echo $result['ID_GAJI']; ?>" type="button" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Mengirim Uang???')">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <a href="kelola.gaji.php" type="button" class="btn btn-primary mb-3">
            <i class="fa fa-plus"></i>
            Tambah Data
        </a>
        <!-- Optional JavaScript; choose one of the two! -->

        <script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>