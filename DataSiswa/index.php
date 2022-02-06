

<!doctype html>
<html lang="en">
  <head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- css manual -->
<link rel="stylesheet" href="../css/datasiswa/index.css">

<title>Hello, world!</title>
</head>
<body>

<!-- header -->
<div class="header fixed-top text-center">
        <nav class="navbar fixed-top navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand nav-link disabled fw-bold">Sekolahku <sup> CIT</sup> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="justify-content-end fw-bold">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav border border-danger rounded-pill bg-warning">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../index.php">Back</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav border border-dark rounded-pill bg-warning">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="logout.php" id="logout">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div class="pemisahNC"></div>
    </div>
<!-- akhir header  -->


<form>

    <div class="container">

    <div class=" btn d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-primary me-md-2" type="button" href="AdminLogin.php"> + Tambah</a>
    </div>

    <table class="table table-bordered border-primary">
        <tr>
            <th colspan="8" class="text-center fs-5 fw-bold">DAFTAR NILAI SISWA SEKOLAH <sup>KU</sup></th>
        </tr>
        <tr class="text-center">
            <th>No</th>
            <th>Nama</th>
            <th>Nilai Tugas</th>
            <th>Nilai Quis</th>
            <th>Nilai UTS</th>
            <th>Nilai UAS</th>
            <th>Nilai Akhir</th>
            <th>Aksi</th>
        </tr>
        <tr>
            <td class="text-center">1</td>
            <td>HENDRIK FILSUF WIJAYA HALAWA</td>
            <td class="text-center">80</td>
            <td class="text-center">95</td>
            <td class="text-center">88</td>
            <td class="text-center">90</td>
            <td class="text-center">90</td>
            <td class="text-center">
                <a href="">Edit |</a>
                <a href="">Hapus</a>
            </td>
        </tr>
    </table>
    </div>
</form>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>