<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Prodi oleh Ramadhan - 2110020031</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .form-container {
            background: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            max-width: 400px;
            width: 100%;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        input[type="text"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            /* Tambahkan font-size untuk konsistensi */
        }

        input[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <h1>Form Edit Program Studi</h1>
        <form action="<?= site_url('prodi/perbaharui/' . $prodi->id_prodi) ?>" method="post">
            <label for="kode_prodi">Kode Prodi</label>
            <input type="text" name="kode_prodi" id="kode_prodi" value="<?= htmlspecialchars($prodi->kode_prodi) ?>" required>
            <label for="nama_prodi">Nama Prodi</label>
            <input type="text" name="nama_prodi" id="nama_prodi" value="<?= htmlspecialchars($prodi->nama_prodi) ?>" required>
            <input type="submit" value="Perbaharui">
        </form>
    </div>
</body>

</html>