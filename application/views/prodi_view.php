<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mahasiswa oleh Ramadhan dan 211020031</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            padding-top: 20px;
            /* Tambahkan padding-top untuk header */
        }

        .container {
            max-width: 800px;
            /* Menyesuaikan lebar maksimum */
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .table td,
        .table th {
            vertical-align: middle;
            /* Menengahkan teks pada sel */
        }

        .table td.text-center,
        .table th.text-center {
            text-align: center;
            /* Pusatkan teks pada sel */
        }

        .table a {
            margin-right: 5px;
            /* Spasi antara tautan */
        }

        .btn-logout {
            margin-top: 20px;
            /* Spasi atas */
            display: block;
            /* Membuat tombol menjadi blok */
            margin-left: auto;
            /* Membuat tombol berada di sebelah kanan */
            margin-right: auto;
            /* Membuat tombol berada di sebelah kiri */
            text-align: center;
            /* Membuat teks berada di tengah */
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="text-center mb-4">Selamat Datang di web Ramadhan</h1>
        <a href="<?= site_url('prodi/tambah') ?>" class="btn btn-primary mb-3">Tambah</a>
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col" class="text-center">NO</th>
                    <th scope="col" class="text-center">Kode Prodi</th>
                    <th scope="col" class="text-center">Nama Prodi</th>
                    <th scope="col" class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($prodi as $index => $row) : ?>
                    <tr>
                        <td class="text-center"><?= $index + 1 ?></td>
                        <td><?= $row->kode_prodi ?></td>
                        <td><?= $row->nama_prodi ?></td>
                        <td class="text-center">
                            <a href="<?= site_url('prodi/edit/' . $row->id_prodi) ?>" class="btn btn-sm btn-info">Edit</a>
                            <a href="<?= site_url('prodi/hapus/' . $row->id_prodi) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="<?= site_url('Mahasiswa/') ?>" class="btn btn-danger btn-logout">Keluar</a>
    </div>
    <!-- Bootstrap JS and dependencies (optional but useful) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>