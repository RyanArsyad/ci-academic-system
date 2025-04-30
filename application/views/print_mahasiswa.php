<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Data Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            margin: 40px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th, td {
            border: 1px solid #000;
            padding: 6px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        @media print {
            body {
                margin: 0;
            }
        }
    </style>
</head>
<body>
    <h2>Data Mahasiswa</h2>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Tanggal Lahir</th>
                <th>Jurusan</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>No. Telepon</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; foreach ($mahasiswa as $mhs): ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $mhs->nama ?></td>
                <td><?= $mhs->nim ?></td>
                <td><?= $mhs->tgl_lahir ?></td>
                <td><?= $mhs->jurusan ?></td>
                <td><?= $mhs->alamat ?></td>
                <td><?= $mhs->email ?></td>
                <td><?= $mhs->no_telp ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>
