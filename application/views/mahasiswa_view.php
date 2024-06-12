<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mahasiswa oleh Ramadhan dan 211020031</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .table-actions a {
            margin-right: 5px;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Selamat Datang di web Ramadhan</h1>
        <div class="mb-3">
            <a href="<?php echo site_url('mahasiswa/tambah') ?>" class="btn btn-primary">Tambah Mahasiswa</a>
            <a href="<?php echo site_url('mahasiswa/cetak') ?>" class="btn btn-secondary" target="_blank">Cetak Data Mahasiswa</a>
            <a href="<?php echo site_url('prodi/') ?>" class="btn btn-primary">Tambah Prodi</a>
        </div>
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col" class="text-center">NO</th>
                    <th scope="col" class="text-center">NIM</th>
                    <th scope="col" class="text-center">Nama</th>
                    <th scope="col" class="text-center">Program Studi</th>
                    <th scope="col" class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($mahasiswa as $row) { ?>
                    <tr>
                        <td class="text-center"><?php echo $no++ ?></td>
                        <td><?php echo $row->NIM ?></td>
                        <td><?php echo $row->nama_mhs ?></td>
                        <td><?php echo $row->nama_prodi ?></td>
                        <td class="text-center table-actions">
                            <a href="<?php echo site_url('mahasiswa/edit/' . $row->id_mahasiswa) ?>" class="btn btn-sm btn-primary">Edit</a>
                            <a href="<?php echo site_url('mahasiswa/hapus/' . $row->id_mahasiswa) ?>" class="btn btn-sm btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <!-- Bootstrap JS and dependencies (optional but useful) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>