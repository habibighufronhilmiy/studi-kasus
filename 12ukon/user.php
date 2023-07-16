<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MyApp | Halaman Utama</title>
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">MyApp</a>

                <button class="navbar-toggler" type="button" data-bs- toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria- label="Toggle navigation">

                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">

                            <a class="nav-link" aria- current="page" href="#">Home</a>

                        </li>

                        <li class="nav-item">

                            <a class="nav-link active" href="#">Pasien</a>

                        </li>
                        <li class="nav-item">

                            <a class="nav-link" aria- current="page" href="login.php">logout</a>

                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="row mt-3">
            <div class="col-sm">
                <h3>Tabel Pasien</h3>
            </div>
        </div>
        
        <div class="row mt-3">
            <div class="col">

                <table class="table table-striped table-hover table-sm">

                    <tr>
                        <th>No</th>
                        <th>ID Pasien</th>
                        <th>Nama Pasien</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Keterangan</th>
                       
                    </tr>
                    <?php
                    include 'koneksi.php';
                    $no = 1;
                    $hasil = $koneksi->query("SELECT * FROM datapasien");
                    ?>
                    <?php
                    while ($row = $hasil->fetch_assoc()) {
                        ?>
                        <tr>
                            <td>
                                <?= $no++; ?>
                            </td>
                            <td>
                                <?= $row['idpasien']; ?>
                            </td>
                            <td>
                                <?= $row['nama']; ?>
                            </td>
                            <td>
                                <?= $row['jk']; ?>
                            </td>
                            <td>
                                <?= $row['alamat']; ?>
                            </td>
                            <td>
                                <?= $row['keterangan']; ?>
                            </td>

                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
  
</body>

</html>