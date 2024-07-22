<?php
require 'config.php';

$sql = "SELECT * FROM employees";
$stmt = $pdo->query($sql);
$employees = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Karyawan</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=MuseoModerno:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    

    <?php if (isset($_GET['success'])): ?>
        <div style="color: green;">Data berhasil disimpan!</div>
    <?php endif; ?>

    <table border="1">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>No HP</th>
                <th>Alamat</th>
                <th>Tanggal Masuk</th>
                <th>Gender</th>
                <th>KTP</th>
                <th>KK</th>
                <th>Ijazah</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($employees as $employee): ?>
                <tr>
                    <td><?php echo $employee['name']; ?></td>
                    <td><?php echo $employee['email']; ?></td>
                    <td><?php echo $employee['no_hp']; ?></td>
                    <td><?php echo $employee['alamat']; ?></td>
                    <td><?php echo $employee['tgl_masuk']; ?></td>
                    <td><?php echo $employee['gender']; ?></td>
                    <td><img src="upload/<?php echo $employee['ktp_photo']; ?>" width="100"></td>
                    <td><img src="upload/<?php echo $employee['kk_photo']; ?>" width="100"></td>
                    <td><img src="upload/<?php echo $employee['ijazah_photo']; ?>" width="100"></td>
                    <td>
                        <a href="view.php?id=<?php echo $employee['id']; ?>">View</a> |
                        <a href="edit.php?id=<?php echo $employee['id']; ?>">Edit</a> |
                        <a href="delete.php?id=<?php echo $employee['id']; ?>" onclick="return confirm('Anda yakin ingin menghapus data ini?');">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <a href="pengisian_data.php" class="tambah">Tambah Karyawan Baru</a>
    <button class="download-btn">download</button>
    <script src="main.js"></script>
    <a href="index.php" class="kembali">Kembali</a>
</body>
<style>
    body {
        font-family: 'Montserrat';
    }

    h1{
         text-align: center;
        color: #FFC700;
        margin: 10px;
        font-size: 45px;
        font-family: 'MuseoModerno';
    }

    .container {
        width: 80%;
        margin: 50px auto;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(156, 17, 36, 1);
        border-radius: 10px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    table th, table td {
        padding: 10px;
        border: 1px solid #ccc;
        text-align: left;
    }

    table th {
        background-color: #fdd835;
    }

    table tr:nth-child(even) {
        background-color: #F2E890;
    }

    table a {
        text-decoration: none;
        color: #0029FF;
        font-weight: bold;
    }

    table a:hover {
        color: #000;
    }

    .kembali {
        background-color: #D10C0C;
        color: #fff;
        padding: 10px 20px;
        margin-top: 20px;
        float: left;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        text-decoration: none;
    }

    .kembali:hover {
        background-color: #000;
        color: #fff;
    }

    .tambah{
        background-color: #fdd835;
        text-decoration: none;
        color: #000;
        padding: 10px 20px;
        margin-top: 30px;
        margin: 20px;
        float: right;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
    }

    .tambah:hover{
        background-color: #000;
        color: #fff;
    }

    .download-btn {
        background-color: #2988F8;
        color: #fff;
        padding: 10px 20px;
        margin-top: 20px;
        float: right;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
    }

    .download-btn:hover {
        background-color: #000;
        color: #fff;
    }
</style>
</html>
